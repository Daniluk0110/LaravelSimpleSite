<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Validator;
use Session;

class PagesAddController extends Controller
{
    public function execute(Request $request){

       if($request->isMethod('post')){
           $input = $request->except('_token');
           $messages = [
             'required' => 'Field :attribute is required',
             'unique' => 'Field :attribute must be unique'
           ];

           $validator = Validator::make($input, [
               'name' => 'required|max:255',
               'alias' => 'required|unique:pages|max:255',
               'text' => 'required'
           ], $messages);

           if($validator->fails()){
               return redirect()->route('pagesAdd')->withErrors($validator)->withInput();
           }

           if($request->hasFile('images')){
               $file = $request->file('images');
               $input['images'] = $file->getClientOriginalName();
               $file->move(public_path().'/assets/img', $input['images']);
           }

           $page = new Page();
           $page->fill($input);

           if($page->save()){
                Session::flash('status', 'Page is updated!' );
                return redirect('admin')->with();
           }

       }
       if(view()->exists('admin.pages_add')){
           $data = [
             'title' => 'New Page'
           ];
           return view('admin.pages_add', $data);
       }
       abort(404);

    }
}
