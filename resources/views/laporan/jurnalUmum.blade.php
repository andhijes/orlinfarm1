@extends('layouts.app')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Tambah Produk<small>Orlinfarm</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="{{ route('jurnalUmum.store')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="">Pilih Bulan</label>
            <select class="form-control" name="bulan">
             <?php for ($i = 0; $i <= 11; $i++){ ?>
               foreach ($months)
                   <option {{$i == $bulan ? 'selected' : ''}} value="<?php echo $i?>">{{$months[$i]}}</option>
             <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">Pilih Tahun</label>
            <select class="form-control" name="tahun">
              <?php for ($i = 0; $i < 5; $i++){ ?>
                foreach ($years)
                    <option {{$years[$i] == $tahun ? 'selected' : ''}} value="<?php echo $years[$i]?>">{{$years[$i]}}</option>
              <?php } ?>
            </select>
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
        <h2>Jurnal Umum <b><?php echo $month?> - <?php echo $tahun ?></b> </h2>
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
              <th>NO</th>
              <th>KETERANGAN</th>
              <th>DEBIT</th>
              <th>KREDIT</th>
            </tr>
          </thead>


          <tbody>
            <?php $counter=1; ?>
            <?php $total=0; ?>
            @foreach($transaksis as $transaksi)
              <tr>
                <td><?php echo $counter++ ?></td>
                <td>{{ $transaksi->tanggal}}/{{ $transaksi->bulan}}/{{ $transaksi->tahun}}<br>{{ $transaksi->keterangan}}</td>
                <td>{{ \app\cabang_akun::find($transaksi->debit)->nama }}<br>{{$transaksi -> nilai}}</td>
                <td>{{ \app\cabang_akun::find($transaksi->kredit)->nama }}<br>{{$transaksi -> nilai}}</td>

              </tr>
              <?php $total += $transaksi->nilai ?>
            @endforeach

          </tbody>
        </table>
      </div>


        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>JUMLAH DEBIT</th>
              <th><?php echo $total?></th>
            </tr>
            <tr>
              <th>JUMLAH KREDIT</th>
              <th><?php echo $total ?></th>
            </tr>
          </thead>
        </table>

    </div>
</div>


@endsection

@section('name')
  {{ Auth::user()->name }}
@endsection
