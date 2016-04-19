<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AlbumController extends Controller
{
    
    
    public function getIndex()
    {
        return 'Showing all the user Albums';
    }
    
    
    
    public function getCreateAlbum()
    {
        return 'showing the create album form';
    }
    
    public function postCreateAlbum()
    {
        return 'creating album';
    }
    
    
    
    
    
    public function getEditAlbum()
    {
        return 'showing the Edit Album form';
    }
    
    public function postEditAlbum()
    {
        return 'edit album';
    }
    
    
    
    
    
    public function postDeleteAlbum()
    {
        return 'deleting album';
    }
    
}
