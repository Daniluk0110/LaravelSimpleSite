<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;
use Validator;

class ServiceEditController extends Controller
{
    public function execute(Service $service, Request $request){
        if($request->isMethod('delete')){
            $service->delete();
            Session::flash('status', 'Service is Deleted!' );
            return redirect('admin');
        }

        if($request->isMethod('post')){
            $input = $request->except('_token');
            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'text' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->route('serviceEdit', ['page' => $input['id']])->withErrors($validator);
            }
            $service->fill($input);
            if ($service->update()) {
                return redirect('admin')->with('status', 'Service Updated!');
            }
        }

        $old = $service->toArray();
        if (view()->exists('admin.services_edit')) {
            $data = [
                'title' => 'Editing Page - ' . $old['name'],
                'data' => $old
            ];
            return view('admin.services_edit', $data);
        }
        abort(404);
    }
}
