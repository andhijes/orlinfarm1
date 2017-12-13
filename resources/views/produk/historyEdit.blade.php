@extends('layouts.appEdit')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Data Produk</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="{{ route('produk.historyUpdate', $penjualan)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

           <div class="form-group">
               <label for="">Nama Produk</label>
               <select class="form-control" name="id_produk">
                 @foreach ($produks as $produk)
                   <option {{$penjualan->id_produk == $produk->id_produk ? 'selected' : ''}} value="{{$produk->id_produk}}">{{$produk->nama}}</option>
                 @endforeach
               </select>
           </div>

            <div class="form-group has-feedback{{ $errors->has('jumlah') ? ' has-error': '' }}">
              <label for="">Stok</label>
              <input id="produk" type="number" class="form-control" name="jumlah" placeholder="Jumlah Produk" value="{{ $penjualan -> jumlah}}" required>
              @if ($errors->has('jumlah'))
                <span class="help-block">
                  <p>{{ $errors->first('jumlah') }}</p>
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
