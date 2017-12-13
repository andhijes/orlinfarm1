<?php $__env->startSection('name'); ?>
  <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="x_panel">
                  <div class="x_title">
                    <h2>Statistik Penjualan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <div class="btn-group">
                      <button type="button" class="btn btn-danger">Pilih Tahun</button>
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>                      
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo e(route('home.param',['tahun' => 2017])); ?>">2017</a>
                        </li>
                        <li><a href="<?php echo e(route('home.param',['tahun' => 2016])); ?>">2016</a>
                        </li>
                        <li><a href="<?php echo e(route('home.param',['tahun' => 2015])); ?>">2015</a>
                        </li>                        
                      </ul>
                    </div>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                        <div class="col-sm-6">
                          <?php echo $chart->render(); ?>  
                        </div>
                        <div class="col-sm-6">
                          <?php echo $chart2->render(); ?>  
                        </div>
                    </div>                  
                  </div>
                </div>






  
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>