<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\m_konsultasi;
use App\Models\media;
use App\Models\kategori;
use App\Helpers\Momong as Momong;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Auth;

class KonsultasiController extends Controller
{
    public function index()
    {
        return view('user.konsultasi-user');
    }
    public function store(Request $request)
    {
        // dd($request['bukti']);
        $nama_file_target = 'img/bukti-bayar';
        $nama_file = $request['bukti'];
        if ($nama_file != null) {
            if ($nama_file->getClientOriginalExtension() != 'jpg' and $nama_file != null) return back()->with('error-jpg', 'File harus berekstensi .jpg');
            $nama_file_name =  $request['nama'] . '.jpg';
        }

        if ($request->nama && $request->nomor != null)
            DB::table('m_konsultasi')->insert([
                'id' => m_konsultasi::select('id')->max('id') + 1,
                'id_user' => Auth::user()->id,
                'nama' => $request->nama,
                'nama_singkat' => $request->nama_singkat,
                'nomor' => Momong::ubahTelp($request->nomor),
                'keluhan' => $request->keluhan,
                'tgl_lahir' => $request->tgllahir,
                'jadwal' => $request->jadwal,
                'id_kategori' => $request->kategori,
                'id_media' => $request->jenis_konsultasi,
                'id_jenis_kelamin' => $request->jenis_kelamin,
                'bukti' => $nama_file->move($nama_file_target, $nama_file_name)
            ]);
        else return back()->with('error', 'Mohon isi data dengan lengkap!');
        return back()->with('success', 'Sukses, mohon menunggu informasi dari kami');
    }
    public function acc($kode)
    {
        $dec = (base64_decode(strrev(base64_decode(strrev($kode)))));
        DB::table('m_konsultasi')->where('id', $dec)->update([
            'status' => 1
        ]);
        return back()->with('success', 'Sukses, mohon menunggu informasi dari kami');
    }
    public function dashboardadmin()
    {
        $dt = m_konsultasi::all();
        $id_kat = m_konsultasi::value('id_kategori');
        $kat = kategori::where('id', $id_kat)->value('nama');
        $id_konsul = m_konsultasi::value('id_media');
        $konsul = media::where('id', $id_konsul)->value('nama');
        return view('dashboard-admin', compact('dt', 'kat', 'konsul'));
    }
}
