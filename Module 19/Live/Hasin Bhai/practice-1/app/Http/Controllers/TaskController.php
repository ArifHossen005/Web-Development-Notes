<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $status = $request->get('status');
//        if (!$status) {
//            $task = Task::all();
//        }
//        else if( $status =='completed')
//        {
//            $task = Task::where('status','completed')->get() ;
//        }
//        else
//        {
//            $task = Task::where('status','pending')->get() ;
//
//        }

        $tasks = Task::when($request->status,function ($query,$status){
            $query->where('status',$status);
        })->get();
        return view('tasks.index',compact('tasks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
