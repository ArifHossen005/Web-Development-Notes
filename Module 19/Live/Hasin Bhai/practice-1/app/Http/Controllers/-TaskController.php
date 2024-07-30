<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //data show
    function index()
    {
       // $tasks = Task::all();
      // $tasks = Task::limit(2)->get();
       //$tasks=Task::where('status','completed')->get();
       //$tasks=Task::whereStatus('completed')->count();
       //$tasks=Task::find(8);
       //$tasks=Task::findOrFail(80);
      // $tasks=Task::orderBy('id','desc')->get();
       //return $tasks;



        return view('tasks.index',compact('tasks'));
    }

    //data create
    function doSomething()
    {
      /*
      Task::create([
           'title' => 'My Task',
           'description' => 'My Description',
           'due_date'=> '2024-07-07'
       ]);
       */

       //use Faker
//       Task::create([
//        'title' => fake()->sentence(),
//        'description' => fake()->sentence(),
//        'due_date'=>now()->addDays(rand(1,7))
//    ]);

        //multiple data pass
        Task::insert([
            [
            'title' => fake()->sentence(),
            'description' => fake()->sentence(),
            'due_date'=>now()->addDays(rand(1,7))
           ],
            [
                'title' => fake()->sentence(),
                'description' => fake()->sentence(),
                'due_date'=>now()->addDays(rand(1,7))
            ]

        ]);

    return "Done";
    }


    function updateSomething()
    {
        Task::find(1)->update(['status'=>'completed']);
        return "done";

    }

    function showSingleDate1(Request $request,$id)
    {
        return Task::find($id);
    }

    function showSingleDate2(Request $request,Task $task)
    {
        return Task::find($task);
    }




}
