<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    
    
    public function getIndex()
    {
        return 'Showing all the album photos';
    }
    
    
    
    public function getCreatePhoto()
    {
        return 'showing the create photo form';
    }
    
    public function postCreatePhoto()
    {
        return 'creating photo';
    }
    
    
    
    
    public function getEditPhoto()
    {
        return 'showing the Edit photo form';
    }
    
    public function postEditPhoto()
    {
        return 'edit photo';
    }
    
    
    
    
    public function postDeletePhoto()
    {
        return 'deleting photo';
    }
    
}
