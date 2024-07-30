class TaskController extends Controller
{
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
       Task::create([
        'title' => fake()->sentence(),
        'description' => fake()->sentence(),
        'due_date'=>now()->addDays(rand(1,7))
    ]);
       
       return "Done";
    }
}


##seeder create korlam 
php artisan make:seeder Taskseeder

**seeder er kaj 
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

//full table empty korte hole 
Task::truncate(); database seeder e likhte hobe 

##seeder ke databaseSeeder e call korte hobe 
    $this->call(Taskseeder::class);








//Data show method (controller::all)
$task=>Task::all();
return $task;
