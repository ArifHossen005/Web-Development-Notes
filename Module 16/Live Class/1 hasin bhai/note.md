 $validation = $request->validate([
            'name' => 'required|min:5|max:10|exclude_if:admin',
            'email' => 'required|email',
            'price' => 'required|numeric|between:10,100',
        ]);
custom rule i mean validation (php artisan make:request nameRequest)
alpha = means only letter 
not_in:admin = meaning not name admin 
starts_with:A = meaning start A only acceptable 
between:10,200 = meaning 10 theke 200 porjonto 

// save form input field user data blad er vitore likhbo 
    <input  name="name" value="{{old('name')}}">

custom error message 
app/http/request
public function messages() // eta banate hobe amr Request method jeta banaisi
    {
        return [
            'name.required' => 'Name chara hobe nah bro ',
            'name.min' => 'Name min 5 chara hobena',
        ];
    }

// all error show in array 

  @if ($errors->any())
    {{--    {{$errors->first()}}      --}}
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
    @endif

// all error show in input er niche 
  @error('name')
            <p>{{$message}}</p>
        @enderror

//////////////middle ware ///////////
Route::get('/hello', [MiddleWareController::class, 'hello'])->middleware('throttle:5,1');//5 request per 1 minute


//multiple route throttle
Route::middleware(['throttle:2,1'])->group(function(){
Route::get('/name',[controller::class,'function_name']);
Route::get('/name',[controller::class,'function_name']);
});


//log in na kore onno kothao jabe nh
Route::get('/name',[controller::class,'function_name'])->middleware('auth');



othoba nijeder middleware baniye o korte parbo 
steps 
1.php artisan make:middleware NameMiddleware
2.konon user login ache kina ta check korar upay holo ((
if(!$request->user())
{
return response("you are not authorized);
}

3.web e use korbo middle ware then route er oikhane ->middleware(banano middleware call korbo);


4.amra chaile password soho set korte pari 

  if ($request->input('password') != '11111') {
            //return response("You are not authorized to access this page");
            abort(403);
        }
