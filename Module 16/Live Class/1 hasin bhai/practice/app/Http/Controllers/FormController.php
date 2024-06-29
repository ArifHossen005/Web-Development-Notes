<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Runner\validate;
use function Symfony\Component\HttpFoundation\Session\Storage\Handler\validateId;

class FormController extends Controller
{
    public function HandleFormSubmission(Request $request)
    {
        //dd($request->all()); //dump and die
        // return $request->input('name');
        //return $request->all();

        //check validation
        $request->validate([
            'image' => 'image|mimes:jpeg,png,gif,svf,|max:2028',
        ]);
        //check error
        if ($request->errors()) {
            return redirect(route("form.get"))->withErrors($request->errors);
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $path = "";


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
        //return redirect(route("form.get"))->withError("Wrong Data");
    }
}
/*
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function HandleFormSubmission(Request $request)
    {
        // Extract name and email from the request
        $name = $request->input('name');
        $email = $request->input('email');

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = $image->getClientOriginalName();
            $image->storeAs("uploads", $imageName, "public");
        }

        // Redirect with success message and user details
        return redirect()->route("form.get")->with([
            "success" => "Form submitted successfully",
            "name" => $name,
            "email" => $email
        ]);
    }
}
*/
