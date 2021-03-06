@extends('layouts.appEdit')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><b>Edit Produk - {{$produks1->nama}}</b></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="{{ route('produk.update', $produks1)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}


        <div class="form-group has-feedback{{ $errors->has('nama') ? ' has-error': '' }}">
           <label for="">Nama Produk</label>
           <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Produk.." value="{{ $produks1 -> nama}}">
           @if ($errors->has('nama'))
               <span class="help-block">
                   <strong>{{ $errors->first('nama') }}</strong>
               </span>
           @endif
         </div>

         <div class="form-group has-feedback{{ $errors->has('harga_beli') ? ' has-error': '' }}">
            <label for="">Harga Beli (IDR) </label>
            <input id="harga"type="number" class="form-control" name="harga_beli" placeholder="Harga Produk" value="{{ $produks1 -> harga_beli}}" required>
            @if ($errors->has('harga_beli'))
              <span class="help-block">
                <p>{{ $errors->first('harga_beli') }}</p>
              </span>
            @endif
         </div>

         <div class="form-group has-feedback{{ $errors->has('harga_jual') ? ' has-error': '' }}">
            <label for="">Harga Jual (IDR) </label>
            <input id="harga"type="number" class="form-control" name="harga_jual" placeholder="Harga Produk" value="{{ $produks1 -> harga_jual}}" required>
            @if ($errors->has('harga_jual'))
              <span class="help-block">
                <p>{{ $errors->first('harga_jual') }}</p>
              </span>
            @endif
         </div>

         <div class="form-group has-feedback{{ $errors->has('stok') ? ' has-error': '' }}">
            <label for="">Stok</label>
            <input id="produk" type="number" class="form-control" name="stok" placeholder="Jumlah Produk" value="{{ $produks1 -> stok}}" required>
            @if ($errors->has('stok'))
              <span class="help-block">
                <p>{{ $errors->first('stok') }}</p>
              </span>
            @endif
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
