<?php

namespace App\Http\Controllers;

use App\Models\Ukk;
use Illuminate\Http\Request;

class UkkController extends Controller
{
    public function index()
    {
        $data = Ukk::all();
        return view('siswa', compact('data'));
    }

    public function tambahdata()
    {
        return view('tambahdata');
    }

    public function insertdata(Request $request)
    {
        Ukk::create($request->all());
        return redirect()->route('siswa');
    }
    public function editdata($id)
    {
        $data = Ukk::find($id);

        return view('edit', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Ukk::find($id);
        $data->update($request->all());
        return redirect()->route('siswa');
    }

    public function delete($id)
    {
        $data = Ukk::find($id);
        $data->delete();
        return redirect()->route('siswa');
    }
}
