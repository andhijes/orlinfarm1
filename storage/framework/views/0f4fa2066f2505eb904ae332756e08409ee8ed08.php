<?php $__env->startSection('content'); ?>
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

      <form class="" action="<?php echo e(route('bayarHutang.contact')); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <!-- <label for=""> Pulih Kontak</label> -->
            <select class="form-control" name="contact">
              <option value="-1">Silahkan Pilih Kontak</option>
              <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($contact->id_contact); ?>"><?php echo e($contact->nama); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
          <?php $__currentLoopData = $bayar_hutang_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo $counter++ ?></td>
              <td><?php echo e($user->tanggal); ?>-<?php echo e($user->bulan); ?>-<?php echo e($user->tahun); ?></td>
              <td><?php echo e(\app\cabang_akun::find($user->kredit)->nama); ?></td>
              <td><?php echo e(\app\cabang_akun::find($user->debit)->nama); ?></td>
              <td><?php echo e($user->keterangan); ?></td>
              <td><?php echo e($user->nilai); ?></td>
              <td><?php echo e($user->sisa); ?></td>
              <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Bayar</a>
                  <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
            </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
      </table>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('name'); ?>
  <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>