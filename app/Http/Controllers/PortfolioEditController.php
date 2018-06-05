<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use Validator;
use Session;

class PortfolioEditController extends Controller
{
    public function execute(Portfolio $portfolio, Request $request){
        if($request->isMethod('delete')){
            $portfolio->delete();
            Session::flash('status', 'PortFolio is Deleted!' );
            return redirect('admin');
        }
        if($request->isMethod('post')){
            $input = $request->except('_token');
            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'filter' => 'required|max:255'
            ]);
            if ($validator->fails()) {
                return redirect()->route('portfolioEdit', ['page' => $input['id']])->withErrors($validator);
            }
            if ($request->hasFile('images')) {
                $file = $request->file('images');
                $file->move(public_path() . '/assets/img', $file->getClientOriginalName());
                $input['images'] = $file->getClientOriginalName();
            } else {
                $input['images'] = $input['old_images'];
            }
            unset($input['old_images']);
            $portfolioNew = $portfolio->fill($input);
            if ($portfolioNew->update()) {
                Session::flash('status', 'Portfolio is updated!' );
                return redirect('admin');
            }

        }

        $old = $portfolio->toArray();
        if (view()->exists('admin.portfolio_edit')) {
            $data = [
                'title' => 'Editing Portfolio - ' . $old['name'],
                'data' => $old
            ];
            return view('admin.portfolio_edit', $data);
        }
        abort(404);
    }
}
