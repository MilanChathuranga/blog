<?php

namespace App\Http\Controllers\Contents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioDetailsController extends Controller
{
    public function index()
    {
        return view('contents.portfolio-details');
    }
}
