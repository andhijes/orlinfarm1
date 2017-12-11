<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Penjualan_produk;
use App\cabang_akun;
use App\Contact;
use App\Transaction;
class TransaksiController extends Controller
{
  public function pemasukanTunai()
  {
    $akun_pemasukans = \DB::table('cabang_akuns')->where('id_akun', '3')->get();
    $akun_asets = \DB::table('cabang_akuns')->where('id_akun', '1')->get();
    $cabang_akuns = cabang_akun::all();
    return view('transaksi.pemasukanTunai', compact('akun_pemasukans','akun_asets','cabang_akuns'));

  }

  public function pemasukanTunaiStore()
  {
    $date = request('tanggal');
    $orderdate = explode('-', $date);
    $tanggal = $orderdate[2];
    $bulan = $orderdate[1];
    $tahun = $orderdate[0];

    Transaction::create([
      'id_contact' => 0,
      'kode_transaksi' => 1,
      'kredit' => request('kredit'),
      'debit' => request('debit'),
      'nilai' => request('nilai'),
      'referensi' => request('referensi'),
      'keterangan' => request('keterangan'),
      'tanggal' => $tanggal,
      'bulan' => $bulan,
      'tahun' => $tahun,
      'sisa' => 0,
    ]);
    // return redirect()-> route('home');
    return redirect()-> route('pemasukanTunai');
  }

  public function pemasukanPiutang()
  {
    $akun_pemasukans = \DB::table('cabang_akuns')->where('id_akun', '3')->get();
    $akun_piutangs = \DB::table('cabang_akuns')->where('id_akun', '6')->get();
    $cabang_akuns = cabang_akun::all();
    $contacts = Contact::all();
    return view('transaksi.pemasukanPiutang', compact('akun_pemasukans','akun_piutangs','contacts'));

  }

  public function pemasukanPiutangStore()
  {
    $date = request('tanggal');
    $orderdate = explode('-', $date);
    $tanggal = $orderdate[2];
    $bulan = $orderdate[1];
    $tahun = $orderdate[0];

    Transaction::create([
      'id_contact' => request('contact'),
      'kode_transaksi' => 2,
      'kredit' => request('kredit'),
      'debit' => request('debit'),
      'nilai' => request('nilai'),
      'referensi' => request('referensi'),
      'keterangan' => request('keterangan'),
      'tanggal' => $tanggal,
      'bulan' => $bulan,
      'tahun' => $tahun,
      'sisa' => 0,
    ]);
    // return redirect()-> route('home');
    return redirect()-> route('pemasukanPiutang');
  }

  public function pengeluaranTunai()
  {
    $akun_asets = \DB::table('cabang_akuns')->where('id_akun', '1')->get();
    $akun_pengeluarans = \DB::table('cabang_akuns')->where('id_akun', '4')->get();
    return view('transaksi.pengeluaranTunai', compact('akun_asets','akun_pengeluarans'));
  }

  public function pengeluaranTunaiStore()
  {
    $date = request('tanggal');
    $orderdate = explode('-', $date);
    $tanggal = $orderdate[2];
    $bulan = $orderdate[1];
    $tahun = $orderdate[0];

    Transaction::create([
      'id_contact' => 0,
      'kode_transaksi' => 3,
      'kredit' => request('kredit'),
      'debit' => request('debit'),
      'nilai' => request('nilai'),
      'referensi' => request('referensi'),
      'keterangan' => request('keterangan'),
      'tanggal' => $tanggal,
      'bulan' => $bulan,
      'tahun' => $tahun,
      'sisa' => 0,
    ]);
    // return redirect()-> route('home');
    return redirect()-> route('pengeluaranTunai');
  }

  public function pengeluaranHutang()
  {
    $akun_hutangs = \DB::table('cabang_akuns')->where('id_akun', '5')->get();
    $akun_pengeluarans = \DB::table('cabang_akuns')->where('id_akun', '4')->get();
    $contacts = Contact::all();
    return view('transaksi.pengeluaranHutang', compact('akun_hutangs','akun_pengeluarans','contacts'));
  }

  public function pengeluaranHutangStore()
  {
    $date = request('tanggal');
    $orderdate = explode('-', $date);
    $tanggal = $orderdate[2];
    $bulan = $orderdate[1];
    $tahun = $orderdate[0];

    Transaction::create([
      'id_contact' => request('contact'),
      'kode_transaksi' => 4,
      'kredit' => request('kredit'),
      'debit' => request('debit'),
      'nilai' => request('nilai'),
      'referensi' => request('referensi'),
      'keterangan' => request('keterangan'),
      'tanggal' => $tanggal,
      'bulan' => $bulan,
      'tahun' => $tahun,
      'sisa' => 0,
    ]);
    // return redirect()-> route('home');
    return redirect()-> route('pengeluaranHutang');
  }

  public function tambahHutang()
  {
    $akun_hutangs = \DB::table('cabang_akuns')->where('id_akun', '5')->get();
    $akun_asets = \DB::table('cabang_akuns')->where('id_akun', '1')->get();
    $contacts = Contact::all();
    return view('transaksi.tambahHutang', compact('akun_hutangs','akun_asets','contacts'));
  }

  public function tambahHutangStore()
  {
    $date = request('tanggal');
    $orderdate = explode('-', $date);
    $tanggal = $orderdate[2];
    $bulan = $orderdate[1];
    $tahun = $orderdate[0];

    Transaction::create([
      'id_contact' => request('contact'),
      'kode_transaksi' => 5,
      'kredit' => request('kredit'),
      'debit' => request('debit'),
      'nilai' => request('nilai'),
      'referensi' => request('referensi'),
      'keterangan' => request('keterangan'),
      'tanggal' => $tanggal,
      'bulan' => $bulan,
      'tahun' => $tahun,
      'sisa' => request('nilai'),
    ]);
    // return redirect()-> route('home');
    return redirect()-> route('tambahHutang');
  }

  public function bayarHutang()
  {
    $contacts = Contact::all();
    $cabang_akuns = cabang_akun::all();
    $bayar_hutang_users = \DB::table('transactions')->where('kode_transaksi', '5')->where('id_contact', '0')->get();
    return view('transaksi.bayarHutang', compact('contacts', 'bayar_hutang_users', 'cabang_akuns'));
  }

  public function bayarHutangContact()
  {
    $contacts = Contact::all();
    $contact_id = request('contact');
    $cabang_akuns = cabang_akun::all();
    $bayar_hutang_users = \DB::table('transactions')->where('kode_transaksi', '5')->where('id_contact', $contact_id)->get();

    return view('transaksi.bayarHutang', compact('contacts', 'bayar_hutang_users', 'cabang_akuns'));
  }

  public function bayarHutangUpdate($id_transaksi)
  {
    $transaksi_hutangs = Transaction::find($id_transaksi);
    $contact = Contact::find($transaksi_hutangs->id_contact);
    $nama = $contact['nama'];

    $akun_asets = \DB::table('cabang_akuns')->where('id_akun', '1')->get();
    $akun_hutangs = \DB::table('cabang_akuns')->where('id_akun', '5')->get();

    return view('transaksi.bayarHutangUpdate', compact('transaksi_hutangs', 'akun_asets', 'akun_hutangs', 'nama'));
  }

  public function bayarHutangStore($id_transaksi)
  {
    $date = request('tanggal');
    $orderdate = explode('-', $date);
    $tanggal = $orderdate[2];
    $bulan = $orderdate[1];
    $tahun = $orderdate[0];

    $transaksi_hutangs = Transaction::find($id_transaksi);
    $contact = Contact::find($transaksi_hutangs->id_contact);
    $contact_id = $contact['id_contact'];

    Transaction::create([
      'id_contact' => $contact_id,
      'kode_transaksi' => 6,
      'kredit' => request('kredit'),
      'debit' => request('debit'),
      'nilai' => request('nilai'),
      'referensi' => request('referensi'),
      'keterangan' => request('keterangan'),
      'tanggal' => $tanggal,
      'bulan' => $bulan,
      'tahun' => $tahun,
      'sisa' => $id_transaksi,
    ]);

    $transaksi_hutangs->update([
      'sisa' => 0,
    ]);


    $contacts = Contact::all();
    $cabang_akuns = cabang_akun::all();
    $bayar_hutang_users = \DB::table('transactions')->where('kode_transaksi', '5')->where('id_contact', $contact_id)->get();
// dd($bayar_hutang_users);
    // return redirect()->route('transaksi.bayarHutangStore');
    return view('transaksi.bayarHutang', compact('contacts', 'bayar_hutang_users', 'cabang_akuns'));


  }



}
