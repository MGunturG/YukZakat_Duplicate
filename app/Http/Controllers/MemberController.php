<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index() {
      return view('bayar.index');
    }

    public function create()
    {
        return view('bayar.zakat');
    }

    public function store(Request $request)
    {
        $request->validate([
          'name'          => 'required|string',
          'email'         => 'required|email',
          'phone_number'  => 'required|numeric',
          'zakat_amount'  => 'required|numeric',
          'zakat_desc'    => 'nullable',
          'status'        => 'nullable',
        ]);

        Member::create($request->all());

        return redirect()->route('bayar.index')->with('success', 'Data transaksi Anda sudah disimpan!');
    }
}
