<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Validator;
use Session;

class ServiceAddController extends Controller
{
    public function execute(Request $request){

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $messages = [
                'required' => 'Field :attribute is required'
            ];

            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'text' => 'required|max:255',
            ], $messages);

            if ($validator->fails()) {
                return redirect()->route('servicesAdd')->withErrors($validator)->withInput();
            }
            $service = new Service();
            $service->fill($input);
            if ($service->save()) {
                Session::flash('status', 'Service is added!' );
                return redirect('admin');
            }

        }

        if (view()->exists('admin.services_add')) {
            $data = [
                'title' => 'New Service'
            ];
            return view('admin.services_add', $data);
        }
        abort(404);
    }
}
