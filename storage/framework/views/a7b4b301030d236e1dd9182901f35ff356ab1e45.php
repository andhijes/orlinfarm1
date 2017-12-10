<?php $__env->startSection('content'); ?>
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

      <form class="" action="<?php echo e(route('jurnalUmum.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="">Pilih Bulan</label>
            <select class="form-control" name="bulan">
             <?php for ($i = 0; $i <= 11; $i++){ ?>
               foreach ($months)
                   <option <?php echo e($i == $bulan ? 'selected' : ''); ?> value="<?php echo $i?>"><?php echo e($months[$i]); ?></option>
             <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">Pilih Tahun</label>
            <select class="form-control" name="tahun">
              <?php for ($i = 0; $i < 5; $i++){ ?>
                foreach ($years)
                    <option <?php echo e($years[$i] == $tahun ? 'selected' : ''); ?> value="<?php echo $years[$i]?>"><?php echo e($years[$i]); ?></option>
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
            <?php $__currentLoopData = $transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo $counter++ ?></td>
                <td><?php echo e($transaksi->tanggal); ?>/<?php echo e($transaksi->bulan); ?>/<?php echo e($transaksi->tahun); ?><br><?php echo e($transaksi->keterangan); ?></td>
                <td><?php echo e(\app\cabang_akun::find($transaksi->debit)->nama); ?><br><?php echo e($transaksi -> nilai); ?></td>
                <td><?php echo e(\app\cabang_akun::find($transaksi->kredit)->nama); ?><br><?php echo e($transaksi -> nilai); ?></td>

              </tr>
              <?php $total += $transaksi->nilai ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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


<?php $__env->stopSection(); ?>

<?php $__env->startSection('name'); ?>
  <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>