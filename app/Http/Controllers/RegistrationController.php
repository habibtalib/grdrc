<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;


class RegistrationController extends Controller
{
    //
    public function create() {

        return view('registration.create');
    }

    public function store(RegistrationRequest $request) {


        $request->persist();

        //session('message', 'here is default message');

        session()->flash('message', 'Thank You');

        //return redirect('/');
        return redirect()->home();
    }
}
