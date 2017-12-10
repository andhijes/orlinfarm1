<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\cabang_akun;

class LaporanController extends Controller
{
    public function jurnalUmum()
    {
      $bulan = date('m') - 1; // biar bulannya sesuai di array --> array mulai dari 0
      $tahun = date('Y');
      $year = date('Y');
      $years = array($year, $year-1, $year-2, $year-3, $year-4, $year-5);
      $months = array("Januari","Februari", "Maret", "April","Mei","Juni","Juli","Agustus","September","Oktober","November", "Desember");
      $month = $months[$bulan]; //retrieve bulan

      $transaksis = \DB::table('transactions')->where('bulan', $bulan+1)->where('tahun', $tahun)->get();
      $cabang_akuns = cabang_akun::all();
      return view('laporan.jurnalUmum', compact('bulan', 'tahun', 'months', 'month', 'year', 'years', 'transaksis', 'cabang_akuns'));
    }

    public function jurnalUmumStore()
    {
      $bulan = request('bulan');
      $tahun = request('tahun');
      $year = date('Y');
      $years = array($year, $year-1, $year-2, $year-3, $year-4, $year-5);
      $months = array("Januari","Februari", "Maret", "April","Mei","Juni","Juli","Agustus","September","Oktober","November", "Desember");
      $kode_cabang = request('kode_cabang');
      $month = $months[$bulan]; //retrieve bulan


      $transaksis = \DB::table('transactions')->where('bulan', $bulan+1)->where('tahun', $tahun)->get();
      $cabang_akuns = cabang_akun::all();
      return view('laporan.jurnalUmum', compact('bulan', 'month', 'months', 'tahun', 'year', 'years', 'transaksis', 'cabang_akuns'));
    }

    public function bukuBesar()
    {
      $bulan = date('m') - 1;
      $tahun = date('Y');
      $year = date('Y');
      $years = array($tahun, $tahun-1, $tahun-2, $tahun-3, $tahun-4, $tahun-5);
      $months = array("Januari","Februari", "Maret", "April","Mei","Juni","Juli","Agustus","September","Oktober","November", "Desember");
      $transaksis = \DB::table('transactions')->where('bulan', $bulan)->where('tahun', $tahun)->where('debit',1)->orwhere('kredit',1)->get();

      $month = $months[$bulan]; //retrieve bulan
      $cabang_akuns = cabang_akun::all();
      $kode_cabang = 1;
      return view('laporan.bukuBesar', compact('bulan','tahun', 'years', 'year', 'transaksis', 'month', 'cabang_akuns', 'tahun','kode_cabang','months'));

    }

    public function bukuBesarStore()
    {
      // $date = request('tanggal');
      $bulan = request('bulan') + 1;
      $tahun = request('tahun');
      $years = array($tahun, $tahun-1, $tahun-2, $tahun-3, $tahun-4, $tahun-5);
      $months = array("Januari","Februari", "Maret", "April","Mei","Juni","Juli","Agustus","September","Oktober","November", "Desember");

      $year = date('Y');
      $kode_cabang = request('kode_cabang');


      $month = $months[$bulan]; //retrieve bulan

      $transaksis = \DB::table('transactions')->where('bulan', $bulan)->where('tahun', $year)
                      ->where('debit',$kode_cabang)->orwhere('kredit',$kode_cabang)->get();
      $cabang_akuns = cabang_akun::all();
      return view('laporan.bukuBesar', compact('bulan', 'tahun', 'transaksis', 'cabang_akuns','years', 'year', 'month','months', 'tahun','kode_cabang'));
    }
}
