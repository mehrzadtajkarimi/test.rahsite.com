<?php

namespace App\Controllers;

use App\Controllers\Contracts\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
      echo 'index';
        view('Portfolio');
    }
    public function single()
    {
      echo 'single';
        view('Portfolio');
    }
}
