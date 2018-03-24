<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view("admins/index");
    }
}
