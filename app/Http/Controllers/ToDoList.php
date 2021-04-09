<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ToDoList extends Controller
{
    public function index()
    {
        $uid = Auth::id();
        $list = DB::select('select * from todolists where userid = '.$uid);
        if($list)
        	return view('todolist', ['list' => $list]);
        else
        	return view('todolist');
    }

    public function up(Request $request)
    {
    	$task = $request->input('task');
    	$userid = Auth::id();
    	$data = array('userid'=>$userid, 'task' => $task);
    	DB::table('todolists')->insert($data);
    	return $this->index();
    }

    public function update(Request $request)
    {
    	
    	$tid = $request->input('taskid');

    	DB::table('todolists')->where('id', $tid)->update(['status'=> 1]);
    	return $this->index();

    }

    public function delete(Request $request)
    {
    	$tid = $request->input('tid');

    	DB::table('todolists')->where('id', $tid)->delete();
    	return $this->index();    	
    }
}
