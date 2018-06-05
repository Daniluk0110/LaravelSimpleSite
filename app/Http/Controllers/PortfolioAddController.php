<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Portfolio;
use Session;

class PortfolioAddController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            $input = $request->except('_token');
            $messages = [
                'required' => 'Field :attribute is required',
            ];
            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'filter' => 'required|max:255',
            ], $messages);
            if ($validator->fails()) {
                return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
            }
            if ($request->hasFile('images')) {
                $file = $request->file('images');
                $input['images'] = $file->getClientOriginalName();
                $file->move(public_path() . '/assets/img', $input['images']);
            }
            $portfolio = new Portfolio();
            $portfolio->fill($input);
            if ($portfolio->save()) {
                Session::flash('status', 'Portfolio Added!' );
                return redirect('admin');
            }
        }
        if(view()->exists('admin.portfolio_add')){
            $data = [
                'title' => 'New Portfolio'
            ];
            return view('admin.portfolio_add', $data);
        }
        abort(404);

    }
}
