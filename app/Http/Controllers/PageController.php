<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
  public function index()
  {
      $title= 'Movies Database';
      
      $movies = Movie::all();
      return view('home', compact('movies', 'title'));
  }
  
}