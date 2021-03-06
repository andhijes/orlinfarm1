@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>TAMBAH ASET<small>Orlinfarm</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="{{ route('akun.asetStore')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
           <label for="">Kode</label>
           <input id="nama" type="number" class="form-control" name="kode" placeholder="Kode Aset.." value="{{old('kode')}}">
           @if ($errors->has('kode'))
             <span class="help-block">
               <p>{{ $errors->first('kode') }}</p>
             </span>
           @endif
         </div>

         <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
            <label for="">Nama</label>
            <input id="harga"type="string" class="form-control" name="nama" placeholder="Nama Aset.." value="{{old('nama')}}">
            @if ($errors->has('nama'))
              <span class="help-block">
                <p>{{ $errors->first('nama') }}</p>
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
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>AKUN ASET<small>Orlinfarm</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Akun Aset</th>
              <th>Opsi</th>
            </tr>
          </thead>


          <tbody>
            <?php $counter=1; ?>
            @foreach($row as $cabang_akun)
              <tr>
                <td>{{ $cabang_akun->kode}}</td>
                <td>{{ $cabang_akun->nama}}</td>
                <td>
                    <a href="{{ route('cabang.edit',$cabang_akun->id_cabang)}}"  class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="{{ route('aset.delete',$cabang_akun->id_cabang)}}"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

              </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
</div>


@endsection

@section('name')
  {{ Auth::user()->name }}
@endsection
