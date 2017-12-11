@extends('layouts.appEdit')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><b>Bayar HUtang ke "<?php echo $nama; ?>" </b></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="{{ route('bayarHutang.store',$transaksi_hutangs)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}


        <div class="form-group">
            <label for="">Tanggal</label>
              <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="">Diambil Dari</label>
            <select class="form-control" name="kredit">
              <option value="-1">Silahkan Pilih Akun</option>
              @foreach ($akun_asets as $akun_aset)
                <option value="{{ $akun_aset->id_cabang }}">{{$akun_aset->kode}} - {{ $akun_aset->nama }}</option>
              @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Untuk Pembayaran</label>
            <select class="form-control" name="debit">
              <option value="-1">Silahkan Pilih Akun</option>
              @foreach ($akun_hutangs as $akun_hutang)
                <option value="{{ $akun_hutang->id_cabang }}">{{$akun_hutang->kode}} - {{ $akun_hutang->nama }}</option>
              @endforeach
            </select>
        </div>

         <div class="form-group">
            <label for="">Nilai</label>
            <input id="harga"type="number" class="form-control" name="harga" placeholder="" value="{{$transaksi_hutangs->nilai}}">
         </div>

         <div class="form-group">
            <label for="">Referensi</label>
            <input id="harga"type="text" class="form-control" name="referensi" placeholder="" value="">
         </div>

         <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
            <label for="">Keterangan</label>
            <input id="nama" type="text" class="form-control" name="keterangan" placeholder="" value="Pembayaran Hutang">
          </div>

         <div class="form-group">
           <input type="submit" name="" class="btn btn-primary" value="Save">
         </div>
      </form>

    </div>
  </div>
</div>
@endsection

@section('name')
  {{ Auth::user()->name }}
@endsection
