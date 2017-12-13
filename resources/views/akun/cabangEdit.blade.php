@extends('layouts.appEdit')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>EDIT AKUN "{{$akun_cabang->nama}}"</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="{{ route('cabang.update', $akun_cabang)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
           <label for="">Kode</label>
           <input id="nama" type="text" class="form-control" name="kode" placeholder="Kode Aset.." value="{{ $akun_cabang->kode }}">
         </div>

         <div class="form-group">
            <label for="">Nama</label>
            <input id="harga"type="string" class="form-control" name="nama" placeholder="Nama Aset.." value="{{ $akun_cabang->nama }}">
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
