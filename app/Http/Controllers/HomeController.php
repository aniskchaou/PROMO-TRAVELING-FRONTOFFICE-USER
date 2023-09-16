<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    function index()
   {
      return view('home.home');
   }

    function admin_dashboard()
   {
      return view('admin.pages.dashboard.index');
   }

     function admin_profile()
   {
      return view('admin.pages.profile.myprofile');
   }

     /**
     * show the login form
     */
    public function showLogin()
	{
	    return view('auth/login');
	}

    /**
     * authentification
     */
	public function doLogin()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'name'    => 'required', // make sure the email is an actual email
            'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'name'     => Input::get('name'),
                'password'  => Input::get('password')
            );

            
  
            // attempt to do the login
            if (Auth::attempt($userdata)) {
                // validation successful!
                // redirect them to the secure section or whatever
                return Redirect::to('/admin');
                // for now we'll just echo success (even though echoing in a controller is bad)
            } else {        
                // validation not successful, send back to form 
                return Redirect::to('login');
            } 
        }
    }


}
