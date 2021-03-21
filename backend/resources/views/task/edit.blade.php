@extends('layouts.app')

@section('content')
    <h2 class="text-muted">タスク作成</h2>
    @if (!empty($response))
        @if ($response['code'] == config('const.OK_REQUEST'))
            <div class="alert alert-primary">{{ $response['msg'] }}</div>
        @else
            <div class="alert alert-danger">{{ $response['msg'] }}</div>
        @endif
    @endif

    <form class="form-horizontal mt-4" method="POST" action="{{ route('task_post', $id) }}" enctype='multipart/form-data'>
        @csrf
        <dl>
            <input type="hidden" class="form-control" name="input_type" value="{{ old('input_type', @$set_data['input_type']) }}">
            <div class="form-group row">
                <dd class="col-sm-12 pl-0"><input type="text" class="form-control" id="task_name" name="task_name" value="{{ old('task_name', @$set_data['task_name']) }}" placeholder="タスク名"></dd><br>
                <span class="text-danger">{{ $errors->first('task_name') }}</span>
            </div>
            <div class="form-group row">
                <dt><label class="control-label">カテゴリ</label></dt>
                <select class="form-control col-sm-4" name="category_name">
                    <option value="none"></option>
                    <option value="not_set">未設定</option>
                    @if (!empty(@$set_data['categories']))
                        @foreach ($categories as $category)
                            <option>{{ $category->category_name }}</option>
                        @endforeach
                    @endif
                </select>
                <span class="text-danger">{{$errors->first('category_name')}}</span>
            </div>
            <div class="form-group row">
                <dt><label class="control-label">開始日</label></dt>
                <dd class="col-sm-4 pl-0"><input type="text" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', @$set_data['start_date']) }}"></dd><br>
                <span class="text-danger">{{ $errors->first('start_date') }}</span>
            </div>
            <div class="form-group row">
                <dt><label class="control-label">期限日</label></dt>
                <dd class="col-sm-4 pl-0"><input type="text" class="form-control" id="limit_date" name="limit_date" value="{{ old('limit_date', @$set_data['limit_date']) }}"></dd>
                <span class="text-danger">{{ $errors->first('limit_date') }}</span>
            </div>
            @if(!empty($set_data['tasks']))
                @foreach ($set_data['tasks'] as $user_key => $task)
                    <!-- <div class="border-top">
                        <div id="{{ 'company_users_' . $user_key }}" class="ml-5 mt-3">
                            <input type="hidden" class="form-control" name="company_users[{{ $user_key }}][id]" value="{{ old('company_users.$user_key.id', @$company_user['id']) }}">
                            <div class="form-group row">
                                <dt><label class="control-label">担当部署</label></dt>
                                <dd class="col-md-3"><input type="text" class="form-control company_to" name="company_users[{{ $user_key }}][company_to]" value="{{ old('company_users.$user_key.company_to', @$company_user['company_to']) }}"></dd>
                                <span class="text-danger">{{ $errors->first("company_users.$user_key.company_to") }}</span>
                            </div>
                            <div class="form-group row">
                                <dt><label class="control-label">担当者名</label></dt>
                                <dd class="col-md-3"><input type="text" class="form-control company_person" name="company_users[{{ $user_key }}][company_person]" value="{{ old('company_users.$user_key.company_person', @$company_user['company_person']) }}"></dd>
                                <span class="text-danger">{{ $errors->first("company_users.$user_key.company_person") }}</span>
                            </div>
                            <div class="form-group row">
                                <dt><label class="control-label">連絡先</label></dt>
                                <dd class="col-sm-6 mr-3"><input type="text" class="form-control company_information" name="company_users[{{ $user_key }}][company_information]" value="{{ old('company_users.$user_key.company_information', @$company_user['company_information']) }}"></dd>
                                @if ($user_key > 0)
                                    <dd><button class="btn btn-primary offset-sm-8 del_company_user" type="button">-</button></dd>
                                @endif
                                <span class="text-danger">{{ $errors->first("company_users.$user_key.company_information") }}</span>
                            </div>
                        </div>
                    </div> -->
                @endforeach
            @endif
        </dl>
        <div class="offset-sm-3 mt-4">
            <button class="btn btn-primary px-5" id="account_entry" type="submit">追加</button>
        </div>
    </form>
@endsection
