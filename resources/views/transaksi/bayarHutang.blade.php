@extends('layouts.app')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>PILIH KONTAK</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="{{ route('bayarHutang.contact')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <!-- <label for=""> Pulih Kontak</label> -->
            <select class="form-control" name="contact">
              <option value="-1">Silahkan Pilih Kontak</option>
              @foreach ($contacts as $contact)
                <option value="{{ $contact->id_contact }}">{{ $contact->nama }}</option>
              @endforeach
            </select>
        </div>

         <div class="form-group">
           <input type="submit" name="" class="btn btn-success" value="Go">
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
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Tanggal</th>
            <th>Akun Kredit</th>
            <th>Akun Debit</th>
            <th>keterangan</th>
            <th>Nilai</th>
            <th>Sisa</th>
            <th>Opsi</th>
          </tr>
        </thead>


        <tbody>
          <?php $counter=1; ?>
          @foreach($bayar_hutang_users as $user)
            <tr>
              <td><?php echo $counter++ ?></td>
              <td>{{ $user->tanggal}}-{{ $user->bulan}}-{{ $user->tahun}}</td>
              <td>{{ \app\cabang_akun::find($user->kredit)->nama }}</td>
              <td>{{ \app\cabang_akun::find($user->debit)->nama }}</td>
              <td>{{ $user->keterangan}}</td>
              <td>{{ $user->nilai}}</td>
              <td>{{ $user->sisa}}</td>
              <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Bayar</a>
                  <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
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
