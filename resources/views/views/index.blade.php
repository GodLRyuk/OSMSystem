<?php //include('header.php'); ?>
@include('header');
<style>
    body{
        background: url({{ asset('assets/images/bacground.jpg')}}) no-repeat center center fixed;
    }
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
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav bg-light">
            
            <a class="nav-link" href=""><i class="fa fa-user" aria-hidden="true">Sign In</i></a>
            <a class="nav-link" href="{{ route('registration') }}"><i class="fa fa-user-plus" aria-hidden="true">Sign Up</i></a>
            
        </div>
        </div>
    </div>
    </nav>
    <div class="container" style="position: relative">
    
		<div class="row-fluid">
			<div class="span6"><div class="title_index"><input type='text' name='' class='input-block-level'></div></div>
			<div class="span6"><div class="pull-right"></div></div>
		</div>
		<div class="row-fluid">
			<div class="span12"><div class="index-footer"></div></div>
		</div>
			<?php //include('footer.php'); ?>@include('footer');
    </div>
<?php //include('script.php'); ?>
</body>
</html>