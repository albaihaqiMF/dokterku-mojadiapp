<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
         $data = User::where('role_id',3)->get();

         return view('admin.pasien.index', compact('data'));
    }

    public function show($id)
    {
        $data = User::where('id',$id)->where('role_id',3)->first();

        if ($data === null) {
            return redirect(route('user.pasien'));
        }

        return $data;
    }
}
