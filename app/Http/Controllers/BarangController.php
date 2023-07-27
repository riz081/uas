<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\MySqlConnection;
use App\Models\Barang;
use App\Models\Position;


class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageName = 'Services - Deby Cleaning Service';
        $barang = Barang::all();
        return view('barang.index', compact('pageName', 'barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageName = 'tambah barang';

        $position = Position::all();

        return view('barang.create', compact('pageName', 'position'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
        'Nama' => 'required',
        'No. hp' => 'required|numeric',
        'alamat' => 'required',
        ], $messages);
        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = New Barang;
        $barang->Nama = $request->nama;
        $barang->NoHP = $request->nohp;
        $barang->Alamat = $request->alamat;
        $barang->position_id = $request->position;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $pageName = 'Edit barang';

        // ELOQUENT
        $barangs = Barang::find($id);
        $satuans = Satuan::all();
        return view('barang.edit', compact('pageName', 'barangs', 'position', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
            ];
            $validator = Validator::make($request->all(), [
            'NamaBarang' => 'required',
            'HargaBarang' => 'required|numeric',
            'jumlah' => 'required|numeric',
            ], $messages);
            if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            }
            // ELOQUENT
            $barang = New Barang;
            $barang->nama = $request->namaBarang;
            $barang->harga = $request->hargaBarang;
            $barang->jumlah = $request->jumlah;
            $barang->position_id = $request->satuan;
            $barang->save();
            return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT

        Barang::find($id)->delete();
        return redirect()->route('barang.index');

    }
}
