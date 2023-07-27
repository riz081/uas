<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\MySqlConnection;
use App\Models\Barang;
use App\Models\Position;


class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function index()
    // {
    //     $pageName = 'Services - Deby Cleaning Service';
    //     $barang = Barang::all();
    //     return view('barang.index', compact('pageName', 'barang'));
    // }
}
