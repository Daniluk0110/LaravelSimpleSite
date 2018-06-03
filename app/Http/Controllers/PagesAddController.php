<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesAddController extends Controller
{
    public function execute(Request $request){

       if(view()->exists('admin.pages_add')){
           $data = [
             'title' => 'New Page'
           ];
           return view('admin.pages_add', $data);
       }
       abort(404);

    }
}
