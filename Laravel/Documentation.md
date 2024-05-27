## Create a Fresh Laravel Project
- composer create-project laravel/laravel example-app
- php artisan serve (open local  server )

## Create Controller 
- php artisan make:controller Name
	- Example - php artisan make:controller HomeController

## Route
- Route::get(uri: '/ ' [HomeController::class,'home'])->name

## Some location 
- resources->views->destination
- routes->allRoute
- app->controller->allController 



## One blade file use multiple time 
- blade(master) |     @yeild('body') now call others class(home) @extends('master') means i use master class 
- home class |   @section('body')   ---------------content--------     @endsection 
 