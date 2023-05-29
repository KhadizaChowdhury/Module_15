<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;

class RegController extends Controller
{

    public function reg(Request $request):string{

        try {
            $validatedData = $request->validate( [
                'name'     => 'required|string|min:2',
                'email'    => 'required|email',
                'password' => 'required|string|min:8',
            ] );

            // The input data is valid, continue with further processing

        } catch ( ValidationException $e ) {
            // Handle validation errors
            $errors = $e->errors();
            // Perform any necessary error handling or redirection
            return "You are an Unauthorized User";
        }

        $name = $request->input( key:'name' );
        $email = $request->input( key:'email' );
        $password = $request->input( key:'password' );

        return "You are an Verified User";
    }
}
