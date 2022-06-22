<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\Article as requestsArticle;
class UserController extends Controller{
	public function __construct()
	{
	    $this->middleware('auth');
	}

	public function dashboard(){
        if(auth()->check()){
        // If the user only authenticated
        $user = auth()->user();
      }

}}
