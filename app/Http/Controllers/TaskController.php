<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createPage(){
        return view('panel.tasks.create');
    }
    public function addTask(Request $request){

        $request->validate([
            'title'=>'required'
        ]);
        $task = new Task();

       // $task->user_id =1;
        $task->category_id =1;
        $task->content =$request->content;
        $task->status =$request->status;
        $task->deadLine =$request->deadLine;
        $task->save();

        return ('Başarılı');
    }
}
