<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\UserLog;
use App\Models\Yayasan;
use App\Models\Pembayaran;
use App\Models\WaliSantri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class FrontController extends Controller
{
    public function halamanUtama() {

        $data = Yayasan::latest()->first();

        return view('front.index', compact('data'));
    }

    public function signIn() {

        $data = Yayasan::latest()->first();

        return view('signin', compact('data'));

    }

    public function logout()
    {
        Session::forget('id');

        return redirect()->route('utama');
    }

    public function auth(Request $request) {

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = UserLog::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user', [
                'id' => $user->id,
                'username' => $user->username,
                'wali_santri_id' => $user->waliSantri->id,
                'wali_santri' => $user->waliSantri->nama_ayah,
            ]);
            return redirect()->route('wali');
        }

        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function waliSantri() {

        $santri = Santri::all();

        $wali_santri_id = session('user')['wali_santri_id'];

        $santri = Santri::where('wali_santri_id', $wali_santri_id)
        ->with(['tunggakan.kategoriTunggakan'])
        ->get();

        return view('back.index', compact('santri'));
    }

    public function pembayaran(Request $request) {
        try {

            $request->validate([
                'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'bulan' => 'required|string',
                'nama' => 'required|string',
                'tunggakan_santri_id' => 'required|exists:tunggakan_santris,id',
            ]);

            $buktiPembayaran = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');

            $pembayaran = Pembayaran::create([
                'tanggal_pembayaran' => now(),
                'bukti_pembayaran' => $buktiPembayaran,
                'metode_pembayaran' => 'Transfer',
                'bulan' => $request->bulan,
                'nama' => $request->nama,
                'tunggakan_santri_id' => $request->tunggakan_santri_id,
                'status' => 0,
            ]);

            return redirect()->route('wali')->with('success', 'Pembayaran berhasil.');

        } catch (\Exception $e) {
            // Tangkap dan tampilkan pesan kesalahan
            dd('Terjadi kesalahan: ' . $e->getMessage());
        }
    }

}
