<?php

namespace App\Http\Controllers;
use App\Models\cpl_snDikti;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class cpl_snDiktiController extends Controller
{
    public function data()
    {
        $cpl_snDikti = DB::table('cpl_snDikti')->simplePaginate(5);
        return view('cpl_snDikti/data')->with('cpl_snDikti', $cpl_snDikti);
    }
    public function add()
    {
        return view('cpl_snDikti/add');
    }
    public function addProcess(Request $request)
    {
        $request->validate([
            'Kode_CPL_SNDIKTI' => 'required|min:2',
            'Deskripsi' => 'required',
        ]);

        DB::table('cpl_snDikti')->insert([
            'Kode_CPL_SNDIKTI' => $request->Kode_CPL_SNDIKTI,
            'Deskripsi' => $request->Deskripsi
        ]);
        return redirect('cpl_snDikti')->with('status', 'CPL berhasil ditambah!');
    }

    public function edit($id)
    {
        $cpl_snDikti = DB::table('cpl_snDikti')->where('id', $id)->first();
        return view('cpl_snDikti/edit', compact('cpl_snDikti'));
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'Kode_CPL_SNDIKTI' => 'required|min:2',
            'Deskripsi' => 'required',
        ]);

        DB::table('cpl_snDikti')->where('id', $id)
            ->update([
                'Kode_CPL_SNDIKTI' => $request->Kode_CPL_SNDIKTI,
                'Deskripsi' => $request->Deskripsi
            ]);
        return redirect('cpl_snDikti')->with('status', 'CPL berhasil diupdate!');
    }

    public function delete($id)
    {
        DB::table('cpl_snDikti')->where('id', $id)->delete();
        return redirect('cpl_snDikti')->with('status', 'CPL berhasil dihapus!');
    }
}
