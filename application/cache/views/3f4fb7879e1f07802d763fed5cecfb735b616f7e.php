<h2> dumy text </h2>
<?php $__env->startSection('string', 'aaa'); ?>

<?php $__env->startSection('number', 'bvvvvvvvv'); ?>

<img src="/asset/img/logo.png" alt="logo" class="dark-logo">

<img src=<?php echo e(base_url()."asset/img/logo.png"); ?>>
<img src="<?php echo e(base_url()); ?>asset/img/logo.png">
<h2> from temp</h2>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>