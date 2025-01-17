<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Santri;
use App\Models\UserLog;
use App\Models\Yayasan;
use App\Models\Pembayaran;
use App\Models\WaliSantri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Filament\Notifications\Notification;


class MainController extends Controller
{
    public function viewUtama() {

        $data = Yayasan::latest()->first();

        return view('front.index', compact('data'));
    }

    public function signIn() {

        $data = Yayasan::latest()->first();

        return view('signin', compact('data'));

    }

    public function authLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = UserLog::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            Auth::guard('user_logs')->login($user);

            Session::put('user', [
                'id' => $user->id,
                'username' => $user->username,
                'wali_santri_id' => $user->waliSantri ? $user->waliSantri->id : null,
                'wali_santri' => $user->waliSantri ? $user->waliSantri->nama_ayah : null,
            ]);

            return redirect()->route('wali');
        }
        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        Auth::guard('user_logs')->logout();

        Session::forget('user');

        return redirect()->route('utama');
    }

    public function waliSantri() {

        $data = Yayasan::latest()->first();

        $payment = Payment::all();

        $santri = Santri::all();

        $wali_santri_id = session('user')['wali_santri_id'];

        $santri = Santri::where('wali_santri_id', $wali_santri_id)
        ->with(['tunggakan.kategoriTunggakan','tunggakan.pembayaran'])
        ->get();

        return view('back.index', compact('santri', 'data', 'payment'));
    }

    public function pembayaran(Request $request) {
        try {

            $request->validate([
                'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'bulan' => 'required|string',
                'nama' => 'required|string',
                'tunggakan_santri_id' => 'required|exists:tunggakan_santris,id',
            ]);

            $namaBulan = $request->bulan;

            $adminSession = session('user')['wali_santri'];

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

            $santri = $pembayaran->tunggakanSantri->santri;

            $admin = auth()->user();

            Notification::make()
                ->title('Notifikasi Pembayaran Tunggakan Santri')
                ->icon('heroicon-o-document-text')
                ->body('Pembayaran Tunggakan Bulan <b>' . $namaBulan . '</b> Oleh Wali Santri <b>' . $adminSession . '</b> untuk Santri <b>' . $santri->nama . '</b>')
                ->iconColor('success')
                ->sendToDatabase($admin);


            return redirect()->route('wali')->with('success', 'Pembayaran Dalam Tahap Pengecekan Oleh Admin.');

        } catch (\Exception $e) {

            return redirect()->route('wali')->with('error', 'Pembayaran gagal.'. $e->getMessage());
        }
    }

}
