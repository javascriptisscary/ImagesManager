<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    
    
    public function getEditProfile()
    {
        return 'Showing the edit profile form';
    }
    
    public function postEditProfile()
    {
        return 'Changing the profile';
    }
    
    
    
    
}
