<?php $__env->startSection('content'); ?>

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

      <form class="" action="<?php echo e(route('akun.asetStore')); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="form-group<?php echo e($errors->has('kode') ? ' has-error' : ''); ?>">
           <label for="">Kode</label>
           <input id="nama" type="number" class="form-control" name="kode" placeholder="Kode Aset.." value="<?php echo e(old('kode')); ?>">
           <?php if($errors->has('kode')): ?>
             <span class="help-block">
               <p><?php echo e($errors->first('kode')); ?></p>
             </span>
           <?php endif; ?>
         </div>

         <div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
            <label for="">Nama</label>
            <input id="harga"type="string" class="form-control" name="nama" placeholder="Nama Aset.." value="<?php echo e(old('nama')); ?>">
            <?php if($errors->has('nama')): ?>
              <span class="help-block">
                <p><?php echo e($errors->first('nama')); ?></p>
              </span>
            <?php endif; ?>
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
            <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cabang_akun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($cabang_akun->kode); ?></td>
                <td><?php echo e($cabang_akun->nama); ?></td>
                <td>
                    <a href="<?php echo e(route('cabang.edit',$cabang_akun->id_cabang)); ?>"  class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="<?php echo e(route('aset.delete',$cabang_akun->id_cabang)); ?>"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

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