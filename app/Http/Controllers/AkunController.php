<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akun;
use App\cabang_akun;

class AkunController extends Controller
{


  //========================ASET========================
  public function aset()
  {
    $row = \DB::table('cabang_akuns')->where('id_akun', '1')->where('status', '1')->get();
    return view('akun.aset', compact('row'));
  }

  public function asetStore(Request $request)
  {
    $this->validateInput($request);
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 1,
      'status' => 1,
    ]);
    return redirect()-> route('akun.aset');
  }

//====================CABANG ALL==============================
  public function cabangEdit($id_cabang)
  {
    $akun_cabang = cabang_akun::find($id_cabang);
    return view('akun.cabangEdit', compact('akun_cabang'));
  }

  public function cabangUpdate($id_cabang)
  {
    $akun_cabang = cabang_akun::find($id_cabang);
    $kode_akun = $akun_cabang['id_akun'];
    $akun_cabang->update([
      'kode' => request('kode'),
      'nama' => request('nama'),
    ]);

    if($kode_akun == 1){
      return redirect()-> route('akun.aset');
    }

    if($kode_akun == 2){
      return redirect()-> route('akun.modal');
    }

    if($kode_akun == 3){
      return redirect()-> route('akun.pemasukan');
    }

    if($kode_akun == 4){
      return redirect()-> route('akun.pengeluaran');
    }

    if($kode_akun == 5){
      return redirect()-> route('akun.hutang');
    }

    if($kode_akun == 6){
      return redirect()-> route('akun.piutang');
    }
  }

  public function cabangDelete($id_cabang)
  {
    $akun_cabang = cabang_akun::find($id_cabang);
    $kode_akun = $akun_cabang['id_akun'];
    $akun_cabang->update([
      'status' => 0,
    ]);

    if($kode_akun == 1){
      return redirect()-> route('akun.aset');
    }

    if($kode_akun == 2){
      return redirect()-> route('akun.modal');
    }

    if($kode_akun == 3){
      return redirect()-> route('akun.pemasukan');
    }

    if($kode_akun == 4){
      return redirect()-> route('akun.pengeluaran');
    }

    if($kode_akun == 5){
      return redirect()-> route('akun.hutang');
    }

    if($kode_akun == 6){
      return redirect()-> route('akun.piutang');
    }
  }

  //======================== MODAL 2========================
  public function modal()
  {
    $row= \DB::table('cabang_akuns')->where('id_akun', '2')->where('status', '1')->get();
    return view('akun.modal', compact('row'));
  }

  public function modalStore(Request $request)
  {
    $this->validateInput($request);
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 2,
      'status' => 1,
    ]);
    return redirect()-> route('akun.modal');
  }

  //========================PEMASUKAN 3========================
  public function pemasukan()
  {
    $row = \DB::table('cabang_akuns')->where('id_akun', '3')->where('status', '1')->get();
    return view('akun.pemasukan', compact('row'));
  }

  public function pemasukanStore(Request $request)
  {
    $this->validateInput($request);
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 3,
      'status' => 1,
    ]);
    return redirect()-> route('akun.pemasukan');
  }

  //========================PENGELUARAN 4==============
  public function pengeluaran()
  {
    $row = \DB::table('cabang_akuns')->where('id_akun', '4')->where('status', '1')->get();
    return view('akun.pengeluaran', compact('row'));
  }

  public function pengeluaranStore(Request $request)
  {
    $this->validateInput($request);
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 4,
      'status' => 1,
    ]);
    return redirect()-> route('akun.pengeluaran');
  }

  //========================HUTANG========================
  public function hutang()
  {
    $row = \DB::table('cabang_akuns')->where('id_akun', '5')->where('status', '1')->get();
    return view('akun.hutang', compact('row'));
  }

  public function hutangStore(Request $request)
  {
    $this->validateInput($request);
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 5,
      'status' => 1,
    ]);
    return redirect()-> route('akun.hutang');
  }

  //========================PIUTANG========================
  public function piutang()
  {
    $row = \DB::table('cabang_akuns')->where('id_akun', '6')->where('status', '1')->get();
    return view('akun.piutang', compact('row'));
  }

  public function piutangStore(Request $request)
  {
    $this->validateInput($request);
    cabang_akun::create([
      'nama' => request('nama'),
      'kode' => request('kode'),
      'jumlah' => 0,
      'id_akun' => 6,
      'status' => 1,
    ]);
    return redirect()-> route('akun.piutang');
  }

  private function validateInput($request) {
      $this->validate($request, [
          'kode' => 'required|max:10',
          'nama' => 'required|max:60',
      ]);
  }
}
