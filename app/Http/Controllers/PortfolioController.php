<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function execute()
    {
        if (view()->exists('admin.portfolio')) {
            $portfolios = Portfolio::all();
            $data = [
                'title' => 'Portfolio',
                'portfolios' => $portfolios
            ];
            return view('admin.portfolio', $data);
        }
        abort(404);
    }
}
