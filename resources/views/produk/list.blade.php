@extends('layouts.app')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><b>Tambah Produk<small>Orlinfarm</small></b></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="{{ route('produk.store')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group has-feedback{{ $errors->has('nama') ? ' has-error': '' }}">
           <label for="">Nama Produk</label>
           <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Produk.." value="{{old('nama')}}" required>
           @if ($errors->has('nama'))
             <span class="help-block">
               <p>{{ $errors->first('nama') }}</p>
             </span>
           @endif
         </div>

         <div class="form-group has-feedback{{ $errors->has('harga_beli') ? ' has-error': '' }}">
            <label for="">Harga Beli (IDR) </label>
            <input id="harga"type="number" class="form-control" name="harga_beli" placeholder="Harga Produk" value="{{old('harga_beli')}}" required>
            @if ($errors->has('harga_beli'))
              <span class="help-block">
                <p>{{ $errors->first('harga_beli') }}</p>
              </span>
            @endif
         </div>

         <div class="form-group has-feedback{{ $errors->has('harga_jual') ? ' has-error': '' }}">
            <label for="">Harga Jual (IDR) </label>
            <input id="harga"type="number" class="form-control" name="harga_jual" placeholder="Harga Produk" value="{{old('harga_jual')}}" required>
            @if ($errors->has('harga_jual'))
              <span class="help-block">
                <p>{{ $errors->first('harga_jual') }}</p>
              </span>
            @endif
         </div>

         <div class="form-group has-feedback{{ $errors->has('stok') ? ' has-error': '' }}">
            <label for="">Stok</label>
            <input id="produk" type="number" class="form-control" name="stok" placeholder="Jumlah Produk" value="{{old('stok')}}" required>
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
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><b>Daftar Produk <small>Orlinfarm</small></b></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <!-- <p class="text-muted font-13 m-b-30">
          The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
        </p> -->
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Nama Produk</th>
              <th>Stok Produk</th>
              <th>Harga Beli Produk</th>
              <th>Harga Jual Produk</th>
              <th>Opsi</th>
            </tr>
          </thead>


          <tbody>
            <?php $counter=1; ?>
            @foreach($produks as $produk)
              <tr>
                <td><?php echo $counter++ ?></td>
                <td>{{ $produk->nama}}</td>
                <td>{{ $produk->stok}}</td>
                <td>Rp.{{ $produk->harga_beli}}</td>
                <td>Rp.{{ $produk->harga_jual}}</td>
                <td><a href="{{ route('produk.edit',$produk->id_produk)}}"  class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="{{ route('produk.delete',$produk->id_produk)}}"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

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
