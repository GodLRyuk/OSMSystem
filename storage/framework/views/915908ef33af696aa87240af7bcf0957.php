<?php //include('header.php'); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<style>
	body#login::before {
    content: "";
    background: #00000036;
    position: absolute;
    top: 0;
    /* z-index: 1; */
    left: 0;
    width: 100%;
    height: 100%;
}
	
</style>
<body id="login">
    <div class="container" style="position: relative">
		<div class="row-fluid">
			<div class="span6"><div class="title_index"><input type='text' name='' class='input-block-level'></div></div>
			<div class="span6"><div class="pull-right"></div></div>
		</div>
		<div class="row-fluid">
			<div class="span12"><div class="index-footer"></div></div>
		</div>
			<?php //include('footer.php'); ?><?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    </div>
<?php //include('script.php'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\student-panel\resources\views/dashboard.blade.php ENDPATH**/ ?>