Route::view("/loginForm", "forms.login");// here we want only show view without controller thats why route::view use .


====Same code use another,means make a common or master which use all area====common code make layout===

steps :
1.first create a common folder and here make a common file 
2.here we use {{$slot}}
3.and then we use another view file 
<x-layout>
    <h1> Forms x layout</h1>
</x-layout>


4.specific vabe change korar jonno 
tag er modde {{$variableName }} example : <title>{{$title}}</title>


5.<x-layout title="FormTitle">
alternative 
<x-layout>
    <x:slot:title>
        Forms
    </x:slot:title>
    <h1> Forms x layout</h1>
</x-layout>

====user er data access====
controller Request $request 
Route hobe  post 
and view te form er method post 
Example:
 public function HandleFormSubmission(Request $request)
    {
        dd($request->all()); //dump and die
    }
here all user data we catch 

// one data catch 
controller e 
    return $request->input('name');

====Return korbo message successfully===
        return redirect(route("form.get"))->with("success", "Form submitted successfully");

and blade file er vitore {{session('message'}}

alternative 

return redirect(route("form.get"))->with([
    "success" => "Form submitted successfully",
    "name" => $name,
    "email" => $email
]);

====return wrong data ====

        return redirect(route("form.get"))->withError("Wrong Data");
 AND  blade         <h1 style="color: red"> {{ session ("error")}}</h1>

====file handle===
from er vitore enctype dite hobe 
**random name diye data save(
==
        if ($request->has('image')) {
            $image = $request->file('image');
            $image->store("uploads", "public");
        }
==
)

**Exact name diye data save 
==
 if ($request->has('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->storeAs("uploads",$name "public");
        }
==

**path soho jodi dekhte chai 
1.prothome path ta use kore declare korbo 
use Storage;
2.controller e declare korbo path Example: $path = "";
==
3.terminal e ( $ php artisan storage:link) korte hobe 
  if ($request->has('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $uploadPath = $image->storeAs("uploads", $name, "public");
            $path = Storage::url($uploadPath);
        }



        //return redirect(route("form.get"))->with("success", "Form submitted successfully");
        return redirect(route("form.get"))->with([
            "success" => "Form submitted successfully",
            "name" => $name,
            "email" => $email,
            "image" => $path
        ]);


====image chara onno kichu dibo nah ===
  //check validation only image  
        $request =validate([
            'image' => 'image|mimes:jpeg,png,gif,svf,|max:2028',
        ]);


        //check error
        if ($request->fails())
        {
            return redirect(route("form.get"))->withErrors($request->errors);
        }
