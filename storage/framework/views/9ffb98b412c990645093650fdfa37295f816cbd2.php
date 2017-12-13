<?php $__env->startSection('content'); ?>
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

      <form class="" action="<?php echo e(route('produk.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="form-group has-feedback<?php echo e($errors->has('nama') ? ' has-error': ''); ?>">
           <label for="">Nama Produk</label>
           <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Produk.." value="<?php echo e(old('nama')); ?>" required>
           <?php if($errors->has('nama')): ?>
             <span class="help-block">
               <p><?php echo e($errors->first('nama')); ?></p>
             </span>
           <?php endif; ?>
         </div>

         <div class="form-group has-feedback<?php echo e($errors->has('harga_beli') ? ' has-error': ''); ?>">
            <label for="">Harga Beli (IDR) </label>
            <input id="harga"type="number" class="form-control" name="harga_beli" placeholder="Harga Produk" value="<?php echo e(old('harga_beli')); ?>" required>
            <?php if($errors->has('harga_beli')): ?>
              <span class="help-block">
                <p><?php echo e($errors->first('harga_beli')); ?></p>
              </span>
            <?php endif; ?>
         </div>

         <div class="form-group has-feedback<?php echo e($errors->has('harga_jual') ? ' has-error': ''); ?>">
            <label for="">Harga Jual (IDR) </label>
            <input id="harga"type="number" class="form-control" name="harga_jual" placeholder="Harga Produk" value="<?php echo e(old('harga_jual')); ?>" required>
            <?php if($errors->has('harga_jual')): ?>
              <span class="help-block">
                <p><?php echo e($errors->first('harga_jual')); ?></p>
              </span>
            <?php endif; ?>
         </div>

         <div class="form-group has-feedback<?php echo e($errors->has('stok') ? ' has-error': ''); ?>">
            <label for="">Stok</label>
            <input id="produk" type="number" class="form-control" name="stok" placeholder="Jumlah Produk" value="<?php echo e(old('stok')); ?>" required>
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
            <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo $counter++ ?></td>
                <td><?php echo e($produk->nama); ?></td>
                <td><?php echo e($produk->stok); ?></td>
                <td>Rp.<?php echo e($produk->harga_beli); ?></td>
                <td>Rp.<?php echo e($produk->harga_jual); ?></td>
                <td><a href="<?php echo e(route('produk.edit',$produk->id_produk)); ?>"  class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="<?php echo e(route('produk.delete',$produk->id_produk)); ?>"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

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