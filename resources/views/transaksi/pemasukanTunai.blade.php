@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>PEMASUKAN TUNAI</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('pemasukanTunai.store')}}" method="post">
            {{ csrf_field() }}

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="" value="">
            </div>
          </div>


          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Diterima Dari</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" name="kredit">
                <option value="-1">Silahkan Pilih Akun</option>
                @foreach ($akun_pemasukans as $pemasukan)
                  <option value="{{ $pemasukan->id_cabang }}">{{$pemasukan->kode}} - {{ $pemasukan->nama }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Disimpan Ke</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" name="debit">
                <option value="-1">Silahkan Pilih Akun</option>
                @foreach ($akun_asets as $aset)
                  <option value="{{ $aset->id_cabang }}">{{$aset->kode}} - {{ $aset->nama }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nilai<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="tanggal" type="number" class="form-control" name="nilai" placeholder="" value="">
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Referensi<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="tanggal" type="string" class="form-control" name="referensi" placeholder="" value="">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="tanggal" type="string" class="form-control" name="keterangan" placeholder="" value="Pendapatan usaha">
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="button">Cancel</button>
              <input type="submit" name="" class="btn btn-success" value="Save">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('name')
  {{ Auth::user()->name }}
@endsection
