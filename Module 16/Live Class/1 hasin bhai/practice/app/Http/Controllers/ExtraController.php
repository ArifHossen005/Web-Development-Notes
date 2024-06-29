<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormVRequest;

class ExtraController extends Controller
{
    public function showForm()
    {
        return view("forms.newForm");
    }

    public function checkValidation(FormVRequest $request)
    {

        /*  $validation = $request->validate([
            'name' => 'required|min:5|max:10|exclude_if:admin',
            'email' => 'required|email',
            'price' => 'required|numeric|between:10,100',
        ]);
        */
        $validated = $request->validated();

        return redirect(route("showForm"))->with([
            "message" => "Form submitted successfully",
            'name' => $request->input("name"),
            'email' => $request->input("email"),
            'price' => $request->input("price")
        ]);
    }
}
