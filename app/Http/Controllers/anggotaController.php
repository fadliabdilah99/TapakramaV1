<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class anggotaController extends Controller
{
    public function daftar(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'alasan' => 'required',
            // 'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // if ($request->hasFile('foto')) {
        //     $image = $request->file('foto');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images/aggota'), $filename);
        // }
        anggota::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => 62 . $request->no_hp,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'alasan' => $request->alasan,
            // 'foto' => $filename
        ]);
        return redirect('/')->with('success', 'Kamu telah mendaftar, Tunggu konfirmasi dari admin yaa :)');
    }







    // admin-----------------------------------------

    public function pendaftar()
    {
        $data['pendaftaran'] = anggota::where('status', 'mendaftar')->get();
        return view('admin.pendaftaran.index')->with($data);
    }

    public function confirm($id)
    {
        $anggota = anggota::where('id', $id)->first();
        $anggota->update(['status' => 'konfirmasi']);

        $password = 'password';
        User::create([
            'name' => $anggota->name,
            'email' => $anggota->email,
            'password' => Hash::make($password),
        ]);

        $user = User::where('email', $anggota->email)->first();
        $anggota->update(['user_id' => $user->id]);

        $message = "Hallo " . $anggota->name . ", Terima kasih sudah mendaftarkan diri anda, silahkan login dengan email : " . $anggota->email . " dan password : " . $password;
        $phone = $anggota->no_hp;

        return redirect()->away('https://api.whatsapp.com/send?phone=' . $phone . '&text=' . urlencode($message));
    }
}
