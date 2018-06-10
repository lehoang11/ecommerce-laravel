<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NOREMON|</title>
    <meta name="description" content="CMS-NOREMON">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('public/static/images/favicon.ico')); ?>">
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('public/static/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CSS -->
    <link href="<?php echo e(asset('public/static/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/static/css/frontend/style.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo e(asset('public/static/js/jquery.min.js')); ?>"></script>
    <!-- sidenav mobile -->
    <link rel="stylesheet" href="<?php echo e(asset('public/static/css/frontend/sidenav.css')); ?>" type="text/css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/icon?family=Material+Icons' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet" type="text/css">
    <script src="<?php echo e(asset('public/static/js/frontend/sidenav.min.js')); ?>"></script>
    <!-- /sidenav mobile -->
    <script src="<?php echo e(asset('public/static/js/function.js')); ?>"></script>

    <script>var BASE_URL = "<?php echo e(url('/')); ?>/"</script>
    <script>var CURRENT_PATH = "<?php echo e(url('/')); ?>/"</script>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>

		<?php echo $__env->make('site.block.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	        <?php echo $__env->yieldContent('content'); ?>
	    
	    <!-- END content-page -->
	    <?php echo $__env->make('site.block.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script src="<?php echo e(asset('public/static/js/bootstrap.min.js')); ?>"></script>
    
    <?php echo $__env->yieldPushContent('js'); ?>
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    </script>

</body>
</html>