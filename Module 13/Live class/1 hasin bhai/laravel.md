=>First install composer and xampp
=>Laravel project create -  composer create-project laravel/laravel:^10.0 name

=> project run - php artisan serve 

database =model   output = view    calculation = controller 
route means url

Controller Create  = php artisan make:controller nameController 

=>controller theke view file data access(
two ways(controller)
1.return view('dashboard.dashboard', ['namView' => $name, 'mailView' => $email]);
2.return view('dashboard.dashboard', compact('name', 'email'));
view 
<p>Controller array {{$namView}}</p>
<p>Controller array {{$mailView}}</p>
<p>Controller compact   {{$name}}</p>
<p>Controller compact   {{$email}}</p>

=>route er modde data accept to user 
controller 
public function index($id)

route
Route::get('/article/{id}', 


=>optional value set 
route
Route::get('/article/{id?}' //question mark 
controller  function 
public function index($id=1)

=> css,jss,etc file rakhbo 
1. command - npm install
                       npm run dev 
2.tarpor resouces er vitore jekhane  kaj korar korbo 
3.amr view file e @vite('location dibo' )//    @vite('resources/css/app.css')


