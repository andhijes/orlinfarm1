<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>SB Admin - Start Bootstrap Template</title>
<!-- Bootstrap core CSS-->
<link href="<?php echo e(url('asset_admin/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="<?php echo e(url('asset_admin/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
<!-- Custom styles for this template-->
<link href="<?php echo e(url('asset_admin/css/sb-admin.css')); ?>" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
    <div class="card-header">Login</div>
    <div class="card-body">

    <form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <label for="exampleInputEmail1">Email address</label>

            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>

    </div>

    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <label for="exampleInputPassword1" >Password</label>
        <input id="password" type="password" class="form-control" name="password" required>
            <?php if($errors->has('password')): ?>
                <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                </label>
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-primary btn-block">
        Login
    </button>
</form>
        <div class="text-center">
        <a class="d-block small mt-3" href="<?php echo e(route('register')); ?>">Register an Account</a>
        <a class="d-block small" href="<?php echo e(url('asset_admin/forgot-password.html')); ?>">Forgot Password?</a>
        </div>
    </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(url('asset_admin/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('asset_admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo e(url('asset_admin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
</body>

</html>
