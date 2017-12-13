@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><b>Input Penjualan Harian</b></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <form class="" action="{{ route('produk.sell_store')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group has-feedback{{ $errors->has('tanggal') ? ' has-error': '' }}">
            <label for="">Tanggal</label>
              <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="" value="{{old('tanggal')}}" required>
              @if ($errors->has('tanggal'))
                <span class="help-block">
                  <p>{{ $errors->first('tanggal') }}</p>
                </span>
              @endif
        </div>

        <div class="form-group">
            <label for="">Nama Produk</label>
            <select class="form-control" name="id_produk">
              @foreach ($produks as $produk)
                <option value="{{ $produk->id_produk }}">{{ $produk->nama }}</option>
              @endforeach
            </select>
        </div>

           <div class="form-group has-feedback{{ $errors->has('jumlah') ? ' has-error': '' }}">
            <label for="">Jumlah Produk </label>
            <input id="jumlah" type="number" class="form-control" name="jumlah" placeholder="Jumlah Produk yang Terjual" value="{{ old('jumlah')}}" required>
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

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><b>Riwayat Penjualan Orlinfarm</b></h2>
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
              <th>Tanggal</th>
              <th>Nama Produk</th>
              <th>Jumlah Terjual</th>
              <th>Subtotal</th>
              <th>Keuntungan</th>
              <th>Opsi</th>
            </tr>
          </thead>


          <tbody>
            <?php $counter=1; ?>
            @foreach($penjualan_produks as $penjualan_produk)
              <tr>
                <?php $keuntungan = $penjualan_produk->total_hargajual - $penjualan_produk->total_hargabeli?>
                <td><?php echo $counter++ ?></td>
                <td>{{$penjualan_produk->tanggal }}-{{$penjualan_produk->bulan }}-{{$penjualan_produk->tahun }} </td>
                <td>{{ \app\Produk::find($penjualan_produk->id_produk)->nama }}</td>
                <td>{{ $penjualan_produk->jumlah}}</td>
                <td>{{ $penjualan_produk->total_hargajual}}</td>
                <td><?php echo $keuntungan ?></td>
                <td><a href="{{ route('produk.historyEdit',$penjualan_produk->id_penjualan)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                  <br>
                  <form class="" action="{{ route('penjualan.delete',$penjualan_produk->id_penjualan)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" name="" class="btn btn-danger btn-xs" value="Delete">
                  </form>
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
