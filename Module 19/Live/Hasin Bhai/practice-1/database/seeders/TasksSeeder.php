<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::truncate();
        for($i=0;$i<10;$i++)
        {
            Task::create([
                'title' => fake()->sentence(),
                'description' => fake()->sentence(),
                'due_date'=>now()->addDays(rand(1,7))
            ]);
        }
    }
}
