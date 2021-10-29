<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
});

Route::get('/contact', function () {
$name = "baraah";

return view('contact',compact('name'));
});

Route::post('/send',function(){
    $name = $_REQUEST['name'];
    return view('contact',compact('name'));
});  
Route::get('tasks',function(){
$tasks =[
'tasks 1',
'tasks2',
'tasks3',
];

$tasks =[
    'tasks_2'       => 'task 1',
        2           => 'task 2',
       'C'          => 'task 3',
];

return view('tasks',compact('tasks'));
});