<x-layout>
    All Tasks




    <div >
        <h1 class="text-red-400">
            Total Task = {{count($tasks)}}
        </h1>
    </div>

    <x-task-status :status="request()->get('status')"/>

    
    <div class="container mx-auto">
        @foreach ($tasks as $task)
            <x-task :task="$task"/>
        @endforeach
    </div> 


</x-layout>

