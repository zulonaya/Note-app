<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class ToDoController extends Controller
{
    public function index()
    {
    	$tasks =  Task::all();
    	return view('todo.index',['tasks'=>$tasks]);
    }

    public function create(Request $request)
    {
    	if($request->input('task'))
    	{
    		$task = new Task;
            $task->title = $request->input('title');
    		$task->content = $request->input('task');
            $task->pinned = $this->pinned($request);
            $task->archive = false;
    		$task->save();
    	}

        return redirect()->back();
    }
    public function pinned($request)
        {
            $pin = $request->input('pin');
            if($pin == 0){
                return false;
            }
            else{
                return true;
            }
        }

    public function update($id)
    {
    	$task = Task::find($id);
    	$task->toggleStatus();
    	$task->save();
    	return redirect()->back();
    	
    }

    public function delete($id)
    {
    	$task = Task::find($id);
    	$task->delete();
    	return redirect()->back();
    }
}
