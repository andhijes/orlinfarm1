<?php $__env->startSection('content'); ?>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><b>Edit Produk - <?php echo e($produks1->nama); ?></b></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="<?php echo e(route('produk.update', $produks1)); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PATCH')); ?>



        <div class="form-group has-feedback<?php echo e($errors->has('nama') ? ' has-error': ''); ?>">
           <label for="">Nama Produk</label>
           <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Produk.." value="<?php echo e($produks1 -> nama); ?>">
           <?php if($errors->has('nama')): ?>
               <span class="help-block">
                   <strong><?php echo e($errors->first('nama')); ?></strong>
               </span>
           <?php endif; ?>
         </div>

         <div class="form-group has-feedback<?php echo e($errors->has('harga_beli') ? ' has-error': ''); ?>">
            <label for="">Harga Beli (IDR) </label>
            <input id="harga"type="number" class="form-control" name="harga_beli" placeholder="Harga Produk" value="<?php echo e($produks1 -> harga_beli); ?>" required>
            <?php if($errors->has('harga_beli')): ?>
              <span class="help-block">
                <p><?php echo e($errors->first('harga_beli')); ?></p>
              </span>
            <?php endif; ?>
         </div>

         <div class="form-group has-feedback<?php echo e($errors->has('harga_jual') ? ' has-error': ''); ?>">
            <label for="">Harga Jual (IDR) </label>
            <input id="harga"type="number" class="form-control" name="harga_jual" placeholder="Harga Produk" value="<?php echo e($produks1 -> harga_jual); ?>" required>
            <?php if($errors->has('harga_jual')): ?>
              <span class="help-block">
                <p><?php echo e($errors->first('harga_jual')); ?></p>
              </span>
            <?php endif; ?>
         </div>

         <div class="form-group has-feedback<?php echo e($errors->has('stok') ? ' has-error': ''); ?>">
            <label for="">Stok</label>
            <input id="produk" type="number" class="form-control" name="stok" placeholder="Jumlah Produk" value="<?php echo e($produks1 -> stok); ?>" required>
            <?php if($errors->has('stok')): ?>
              <span class="help-block">
                <p><?php echo e($errors->first('stok')); ?></p>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('name'); ?>
  <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appEdit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>