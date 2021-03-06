<?php $__env->startSection('content'); ?>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>TAMBAH KONTAK<small>Orlinfarm</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="<?php echo e(route('kontak.datakontakStore')); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
           <label for="">Nama</label>
           <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama..." value="">
         </div>

         <div class="form-group">
            <label for="">Telepon</label>
            <input id="harga"type="number" class="form-control" name="telepon" placeholder="Telepon..." value="">
         </div>

         <div class="form-group">
            <label for="">Email</label>
            <input id="harga"type="email" class="form-control" name="email" placeholder="Email..." value="">
         </div>

         <div class="form-group">
            <label for="">Perusahaan</label>
            <input id="harga"type="string" class="form-control" name="perusahaan" placeholder="Nama Perusahaan..." value="">
         </div>

         <div class="form-group">
            <label for="">Alamat Lengkap</label>
            <input id="harga"type="textarea" class="form-control" name="alamat" placeholder="Alamat Lengkap..." value="">
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
              <th>Nomor</th>
              <th>Nama</th>
              <th>No Telepon</th>
              <th>Perusahaan</th>
              <th>Opsi</th>
            </tr>
          </thead>


          <tbody>
            <?php $counter=1; ?>
            <?php $__currentLoopData = $dataKontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo $counter++ ?></td>
                <td><?php echo e($kontak->nama); ?></td>
                <td><?php echo e($kontak->telepon); ?></td>
                <td><?php echo e($kontak->perusahaan); ?></td>
                <td><a href="<?php echo e(route('datakontak.edit',$kontak->id_kontak)); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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