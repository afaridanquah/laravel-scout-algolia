<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ItemSearchController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('titlesearch')){
    		$items = Post::search($request->titlesearch)
    			->paginate(6);
    	}else{
    		$items = Post::paginate(6);
    	}
    	return view('item-search',compact('items'));
    }

}
