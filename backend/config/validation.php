<?php
return [
    'ADD_TASK_RULE' => [
        'task_name' => 'required|string|max:255',
        'category_name' => 'required|max:255',
        'description' => 'present|max:10000',
        'start_date' => 'required|date',
        'limit_date' => 'required|date',
    ],
    'UPDATE_TASK_RULE' => [
        'task_name' => 'required|string|max:255',
        'category_name' => 'required|max:255',
        'description' => 'present|string|max:10000',
        'start_date' => 'required|date',
        'limit_date' => 'required|date',
    ],
];