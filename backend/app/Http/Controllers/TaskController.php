<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::where('user_id', 1)
            ->orderBy('updated_at', 'desc')
            ->take(10)
            ->get();
        return view('/task/index', compact('tasks'));
    }

    public function edit(Request $request, $id=null) {
        $response = [];
        $set_data = [];

        if ($request->isMethod('post')) {
            // dd($request);
            if (empty($request->input_type)) {
                return redirect()->route('task_new');
            }
            // input_type1は新規作成, 2は更新
            if ($request->input_type == 1) {
                $validator = Validator::make($request->all(), config('validation.ADD_TASK_RULE'));
            } else {
                $validator = Validator::make($request->all(), config('validation.UPDATE_TASK_RULE'));
            }
            if ($validator->fails()) {
                $errors = $validator->errors();
                $response = ['code' => config('const.BAD_REQUEST'), 'msg' => config('const.BAD_REQUEST_MESSAGE'), 'data' => []];
                return redirect()->back()->withInput()->withErrors($validator);
            }

            DB::beginTransaction();
            try {
                // 新規作成
                if ($request->input_type == 1) {
                    // カテゴリ「未設定」の場合category_id=0
                    if ($request->category_name == 'not_set') {
                        $category_id = 0;
                    }
                    // 新規
                    $task = Task::create([
                        'user_id' => Auth::id(),
                        'task_name' => $request->task_name,
                        'category_id' => $category_id,
                        'description' => $request->description,
                        'start_date' => $request->start_date,
                        'limit_date' => $request->limit_date,
                    ]);

                } else {
                    // 更新
                }

                $set_data = [
                    'input_type' => 2,
                ];

                DB::commit();
                $response = ['code' => config('const.OK_REQUEST'), 'msg' => config('const.OK_REQUEST_MESSAGE'), 'data' => []];
            } catch (Exception $e) {
                Log::debug($e);
                $response = ['code' => config('const.INTERNAL_SERVER_ERROR'), 'msg' => config('const.INTERNAL_SERVER_ERROR_MESSAGE'), 'data' => []];
            } finally {
                DB::rollBack();
            }
            if (!empty($task)) {
                return redirect()->route('task_edit', ['id' => $task->id]);
            }
        // GETメソッドの場合
        } else {
            if (!is_null($id)) {
                $user = User::getUser($id);
                // 該当のユーザデータがある場合
                if (!is_null($user)) {
                    $set_data = [
                        'input_type' => 2,
                        'id' => $user['id'],
                    ];
                // 該当のユーザデータが無い場合
                } else {
                    $set_data = [
                        'input_type' => 2,
                    ];
                }
            // 該当のユーザデータがある場合
            } else {
                $set_data = [
                    'input_type' => 1,
                ];
            }
        }
        $set_data['start_date'] = date("Y/m/d");
        $set_data['limit_date'] = date("Y/m/d", strtotime("1 week"));

        return view('/task/edit', compact('id', 'response', 'set_data'));
    }
}
