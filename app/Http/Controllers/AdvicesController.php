<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class AdvicesController extends Controller
{

    public function index()
    {
        return view('advices');
    }

}
