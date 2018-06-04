<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Validator;

class PagesEditController extends Controller
{
    public function execute(Page $page, Request $request){

        if($request->isMethod('post')){
            $input = $request->except('_token');

            $messages = [
                'required' => 'Field :attribute is required',
                'unique' => 'Field :attribute must be unique'
            ];

            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'alias' => 'required|unique:pages,alias,'.$input['id'].'|max:255',
                'text' => 'required'
             ], $messages);

            if($validator->fails()){
                return redirect()->route('pagesEdit', ['page' => $input['id']])->withErrors($validator)->withInput();
            }

            if($request->hasFile('images')){
                $file = $request->file('images');
                $input['images'] = $file->getClientOriginalName();
                $file->move(public_path().'/assets/img', $input['images']);
            } else {
                $input['images'] = $input['old_images'];
            }

            unset($input['old_images']);
            $page->fill($input);

            if($page->update()){
                return redirect('admin')->with([
                    'status', 'Page is updated!'
                ]);
            }
        }

        $old = $page->toArray();
        if(view()->exists('admin.pages_edit')){
            $data = [
              'title' => 'Editing Page - '.$old['name'],
              'data' => $old
            ];
            return view('admin.pages_edit', $data);
        }
        abort(404);
    }
}
