<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Penjualan_produk;

class ProdukController extends Controller
{
    public function create()
    {
      return view('produk.create');
    }

    public function list()
    {
      $produks = \DB::table('produks')->where('status','1')->get();
      return view('produk.list', compact('produks'));
    }

    public function sell()
    {
      $produks = Produk::all();
      return view('produk.sell',  compact('produks'));
    }

    public function sell_store()
    {
      $date = request('tanggal');
      $orderdate = explode('-', $date);
      $tanggal = $orderdate[2];
      $bulan = $orderdate[1];
      $tahun = $orderdate[0];

      $row_produk = request('id_produk');
      $produks1 = Produk::find($row_produk);

      $total_hargajual = $produks1['harga_jual'] * request('jumlah');
      $total_hargabeli = $produks1['harga_beli'] * request('jumlah');
      $update_stok = $produks1['stok'] - request('jumlah');

      Penjualan_produk ::create([
        'id_produk' => request('id_produk'),
        'jumlah' => request('jumlah'),
        'total_hargabeli' => $total_hargabeli,
        'total_hargajual' => $total_hargajual,
        'id_user' => auth()->id(),
        'tanggal' => $tanggal,
        'bulan' => $bulan,
        'tahun' => $tahun,
        // 'slug'=>str_slug(request('nama'))
      ]);

      $produks1->update([
        'stok' => $update_stok,
      ]);

        return redirect()->route('produk.history');
    }

    public function store()
    {
      Produk ::create([
        'nama' => request('nama'),
        'harga_jual' => request('harga_jual'),
        'harga_beli' => request('harga_beli'),
        'stok' => request('stok'),
        'status' => 1,
        // 'slug'=>str_slug(request('nama'))
      ]);

      return redirect()->route('produk.list');
    }

    public function edit($id_produk)
    {
      $produks1 = Produk::find($id_produk);
      return view('produk.edit', compact('produks1'));
    }


    public function update($id_produk)
    {
      $produks1 = Produk::find($id_produk);

      $produks1->update([
        'nama' => request('nama'),
        'harga_jual' => request('harga_jual'),
        'harga_beli' => request('harga_beli'),
        'stok' => request('stok'),
      ]);
      // return view(compact('produks1'))
      return redirect()->route('produk.list');
    }
    
    public function history()
    {
      $produks = Produk::all();
      $penjualan_produks = Penjualan_produk::all();
      return view('produk.history',  compact('penjualan_produks', 'produks'));
    }

    public function editHistory($id_penjualan)
    {
      $produks = Produk::all();
      $penjualan = Penjualan_produk::find($id_penjualan);
      return view('produk.historyEdit', compact('penjualan','produks'));
    }

    public function updateHistory($id_penjualan)
    {
      $penjualans = Penjualan_produk::find($id_penjualan);
      $id_produk_lama = $penjualans['id_produk'];
      $produk_lama = Produk::find($id_produk_lama);
      $id_produk_baru = request('id_produk');

      // dd($id_produk_baru, $id_produk_lama);
      $produk_baru = Produk::find($id_produk_baru);
// dd($produk_baru['nama']);
      $penjualan_lama = $penjualans['jumlah'];
      $penjualan_baru = request('jumlah');
      if($id_produk_lama == $id_produk_baru){
          $selisih = $penjualan_baru - $penjualan_lama;
          $harga = $penjualans['harga'] + ($selisih*$produk_lama['harga']);
          $produk_id = $id_produk_lama;
          $stok_baru = $produk_lama['stok'] - $selisih;
          $jumlah = request('jumlah');
          $produk_lama->update([
            'stok' => $stok_baru,
          ]);
      }else {
        $produk_lama->update([
          'stok' => $produk_lama['stok'] +  $penjualans['jumlah'],
        ]);
        $produk_baru->update([
          'stok' => $produk_baru['stok'] - request('jumlah'),
        ]);
        $produk_id = $id_produk_baru;
        $harga = $produk_baru['harga'] * request('jumlah');
        $jumlah = request('jumlah');
      }
      $penjualans->update([
        'id_produk' => $produk_id,
        'jumlah' => $jumlah,
        'harga' => $harga,
      ]);
      // return view(compact('produks1'))
      return redirect()->route('produk.history');
    }

}
