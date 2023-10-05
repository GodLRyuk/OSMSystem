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
<div class="container mt-3">
  <form id="registration" name="registration" method="post" enctype="multipart/form-data">
    <div class="row jumbotron box8">
      <div class="col-sm-12 mx-t3 mb-4">
        <h2 class="text-center text-info">Register</h2>
      </div>
      @csrf
      <div class="col-sm-6 form-group">
        <label for="name-f">First Name</label>
        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your Full name." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-l">Programe name</label>
        <select name="department" id="department" class="form-control" required>
          <option value="">Select Program..</option>
          <option value="8">BACHELOR OF ARTS</option>
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-1">Course</label>
        <input type="address" class="form-control" name="course" id="course" placeholder="" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-2">Address</label>
        <textarea name="address" id="address" class="form-control" placeholder="Village/City Name." required></textarea>
      </div>
      <div class="col-sm-4 form-group">
        <label for="State">State</label>
        <input type="address" class="form-control" name="state" id="state" placeholder="Enter your state name." required>
      </div>
      <div class="col-sm-2 form-group">
        <label for="zip">Postal-Code</label>
        <input type="zip" class="form-control" name="Zip" id="zip" placeholder="Postal-Code." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Country">Country</label>
        <select class="form-control custom-select browser-default" name="country" id="country">
          <option value="Afghanistan">Afghanistan</option>
          <option value="Zimbabwe">Zimbabwe</option>
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Date">Date Of Birth</label>
        <input type="Date" name="dob" class="form-control" id="dob" placeholder="" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="sex">Gender</label>
        <select id="sex" name="sex" class="form-control browser-default custom-select">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="unspesified">Unspecified</option>
        </select>
      </div>
      <div class="col-sm-2 form-group">
        <label for="cod">Country code</label>
        <select class="form-control browser-default custom-select">
          <option data-countryCode="US" value="1" selected>USA (+1)</option>
          <option data-countryCode="GB" value="44">UK (+44)</option>
          <option disabled="disabled">Other Countries</option>
          <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
          <option data-countryCode="ZM" value="260">Zambia (+260)</option>
          <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
        </select>
      </div>
      <div class="col-sm-4 form-group">
        <label for="tel">Phone</label>
        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Your Contact Number." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="pass2">Role</label>
        <select name="role" id="role" class="form-control">
          <option value="0">Teacher</option>
          <option value="1">Student</option>
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter your Login Username." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="pass">Password</label>
        <input type="Password" name="password" class="form-control" id="password" placeholder="Enter your password." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="pass2">Confirm Password</label>
        <input type="Password" name="cnfpassword" class="form-control" id="cnfpassword" placeholder="Re-enter your password." required>
      </div>
      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" value="0" required>
        <label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions. </label>
      </div>
      <div class="col-sm-12 form-group mb-0">
        <button class="btn btn-primary float-right">Submit</button>
      </div>
    </div>
  </form>
</div>
@include('footer'); 
<script tytype="text/javascript">
  
  $(document).ready(function(){
    $("#chb").on('change', function() {
      if ($(this).is(':checked')) {
        $(this).attr('value', '1');
      } else {
        $(this).attr('value', '0');
      }
    });
    
    $("#registration").submit(function(e){
								e.preventDefault();
								var formData = $(this).serialize();
                //console.log(formData);return false;
								$.ajax({
									type: "POST",
									url: "{{ route('registration') }}",
									data: formData,
									success: function(response){
                        alert(response.success);
                        var delay = 1000;
						setTimeout(function(){ window.location = '{{ route('login') }}'  }, delay);  
                      
          }
			});
								
		});
								
           });
      
    
</script>