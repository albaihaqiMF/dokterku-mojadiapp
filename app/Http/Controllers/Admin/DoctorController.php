<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function show($id)
    {
        $data = User::where('id', $id)->where('role_id', 2)->first();
        // return $data;

        if ($data == null) {
            return redirect(route('user.doctor-list'));
        }
        return view('admin.doctor.show', ['data' => $data]);
    }
}
