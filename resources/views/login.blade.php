@include('header');
<style>
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>
<div class="login-page bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <h3 class="mb-3 text-center">Login</h3>
        <div class="bg-white shadow rounded">
          <div class="row">
            <div class="col-md-7 pe-0">
              <div class="form-left h-100 py-5 px-5">
                <form id="login" name="login" method="POST" action="logincontrol" enctype="multipart/form-data">
                  @csrf
                  <div class="col-12">
                    <label>Username<span class="text-danger">*</span></label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control" placeholder="Enter Username" id="username" name="username">
                    </div>
                  </div>
                  <div class="col-12">
                    <label>Password<span class="text-danger">*</span></label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                      <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="remamber">
                      <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                    </div>
                  </div>
                  <div class="col-sm-12"> <a href="#" class="float-end text-primary">Forgot Password?</a> </div>
                  <div class="col-6">
                    <p class="text-center"> <span>New on our platform?</span> <a href="{{ route('registration') }}"> <span>Create an account</span> </a> </p>
                  </div>
                  <div class="col-6">
                    <button type="submit" class="btn btn-primary px-4 float-end mt-4" id="login">login</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-5 ps-0 d-none d-md-block" style="background: url({{ asset('assets/images/OSMSlogimag.png')}}) no-repeat center center;">
              <div class="form-right h-100 text-white text-center pt-20">
                <h2 class="fs-1"></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('footer'); 
<script tytype="text/javascript">
  
  $(document).ready(function(){
    $("#remamber").on('change', function() {
      if ($(this).is(':checked')) {
        $(this).attr('value', '1');
      } else {
        $(this).attr('value', '0');
      }
    });
    $("#login").submit(function(e){
								e.preventDefault();
								var formData = $(this).serialize();
                //alert($(this).attr('action'));return false;
                //console.log(formData);return false;
								$.ajax({
									type: "POST",
									url: $(this).attr('action'),
									data: formData,
									success: function(response){
                    //alert(response.seassion);return false;
                        var delay = 1000;
                        if(response.role==0){
                        setTimeout(function(){ window.location = '{{ route('teacher_dashboard') }}'  }, delay);  
                        }
                        else if(response.role==1){
                        setTimeout(function(){ window.location = '{{ route('student_dashboard') }}'  }, delay);  
                        }else{
                          alert(response);
                        }
                        
						
                      
          }
			});
								
		});
  });
      
    
</script>