<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskEditRequest;
use App\Http\Requests\TaskRequest;
use App\Models\Taks\StatusTaskModel;
use App\Models\Taks\TaskModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function getNew(){
        $status = StatusTaskModel::pluck('name', 'id');
        $users = User::pluck('email', 'id');

        return view('task.novo', compact('status', 'users'));
    }

    public function postNew(TaskRequest $request){
//        dd($request->all());

        TaskModel::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'id_status' => $request->id_status,
            'assigned_to' => $request->assigned_to,
            'created_by'=> Auth::user()->id,
            'expected_date'=>$request->expected_date
        ]);

        return redirect()->route('task.assignedme.get')->with('status', 'create');
    }

    public function taskAssignedMe(){

        $user = Auth::user();

        $tasks = TaskModel::where('assigned_to', $user->id)->with('status', 'assigned')->paginate(20);

        return view('task.assinadas', compact('tasks'));
    }

    public function delegateMe(){

        $user = Auth::user();

        $tasks = TaskModel::where('created_by', $user->id)->where('assigned_to', '!=', $user->id)->with('status', 'assigned')->paginate(20);

        return view('task.delegadas', compact('tasks'));
    }

    public function getEdit($id_task){

        $status = StatusTaskModel::pluck('name', 'id');
        $users = User::pluck('email', 'id');
        $task = TaskModel::find($id_task);

        return view('task.editar', compact('task', 'users', 'status'));

    }

    public function postEdit(TaskEditRequest $request, $id_task){

        TaskModel::where('id', $id_task)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'id_status' => $request->id_status,
            'assigned_to' => $request->assigned_to,
            'expected_date'=>$request->expected_date
        ]);

        return redirect()->route('task.assignedme.get')->with('status', 'Ok');
    }

    public function postDelete($id_task){

        TaskModel::where('id', $id_task)->delete();

        return redirect()->route('task.assignedme.get')->with('delete', 'Ok');

    }

}
