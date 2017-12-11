<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Penjualan_produk;

class DeleteController extends Controller
{
  public function deleteProduk($id_produk)
  {
    $produks1 = Produk::find($id_produk);
    dd($produks1);
    $produks1->update([
      'status' => 0,
    ]);
    // return view(compact('produks1'))
    return redirect()->route('produk.list');
  }
}
