@extends('layouts.app')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>CARI BUKU BESARBERDASARKAN:</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="{{ route('bukuBesar.store')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="">PIlih Akun</label>
            <select class="form-control" name="kode_cabang">
              @foreach ($cabang_akuns as $cabang_akun)
                <option value="{{$cabang_akun->id_cabang}}">{{$cabang_akun->kode}} - {{$cabang_akun->nama}}</option>
              @endforeach
            </select>
        </div>

        <div class="form-group">
          <?php $number=0; ?>
            <label for="">Pilih Bulan</label>
            <?php $test = $bulan - 1; ?>
            <select class="form-control" name="bulan">
             <?php for ($i = 0; $i <= 11; $i++){ ?>
               foreach ($months)
                   <option {{$i == $bulan ? 'selected' : ''}} value="<?php echo $i?>">{{$months[$i]}}</option>
             <?php $number++; } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">Pilih Tahun</label>
            <select class="form-control" name="tahun">
              <?php for ($i = 0; $i < 5; $i++){ ?>
                foreach ($years)
                    <option {{$years[$i] == $year ? 'selected' : ''}} value="<?php echo $years[$i]?>">{{$years[$i]}}</option>
              <?php $number++; } ?>
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
        <h2>BUKU BESAR <b><?php echo $month?> - <?php echo $tahun ?> </b></h2>
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
              <th>TANGGAL</th>
              <th>KETERANGAN</th>
              <th>DEBIT</th>
              <th>KREDIT</th>
              <th>SALDO</th>
            </tr>
          </thead>


          <tbody>
            <?php $counter=1; ?>
            <?php $saldo=0; ?>
            @foreach($transaksis as $transaksi)
                <?php
                  $id_debit = $transaksi->debit;
                  $id_kredit = $transaksi->kredit;
                  $debit = '';
                  $kredit = '';
                  if($id_debit == $kode_cabang){
                    $debit = $transaksi->nilai;
                  }
                  if($id_kredit == $kode_cabang){
                    $kredit = $transaksi->nilai;
                  }
                  $saldo += $transaksi->nilai;

                 ?>
              <tr>
                <td><?php echo $counter++ ?></td>
                <td>{{ $transaksi->tanggal}}/{{ $transaksi->bulan}}/{{ $transaksi->tahun}}</td>
                <td>{{ $transaksi->keterangan}}</td>
                <td><?php echo $debit ?></td>
                <td><?php echo $kredit ?></td>
                <td><?php echo $saldo ?></td>
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
