<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function __invoke( Request $request ):string{
        // Validate the form data
        try {
            $validatedData = $request->validate( [
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ] );

            // The input data is valid, continue with further processing

        } catch ( ValidationException $e ) {
            // Handle validation errors
            $errors = $e->errors();
            // Perform any necessary error handling or redirection
            return "Could not send your message";
        }

        // Retrieve the form data
        $name = $request->input( 'name' );
        $email = $request->input( 'email' );
        $message = $request->input( 'message' );

        // Return with a success message
        return "Thank you for your message! We will get back to you soon.";

    }
}
