@include('AdminPanel.header');
<style>
img{
display: block;
max-width: 100%;
}
.preview {
overflow: hidden;
width: 160px; 
height: 160px;
margin: 10px;
border: 1px solid red;
}
</style>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
<div class="layout-container">
<!-- Menu --> 

@include('AdminPanel.manu_link'); 
<!-- / Menu --> 

<!-- Layout container -->
<div class="layout-page">
<!-- Navbar --> 

@include('AdminPanel.nav_header'); 

<!-- / Navbar --> 

<!-- Content wrapper -->
<div class="content-wrapper"> 
  <!-- Content -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item"> <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a> </li>
          <li class="nav-item"> <a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-bell me-1"></i> Notifications</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages-account-settings-connections.html"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
        </ul>
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->
          <div class="card-body">
          @foreach ($getaccount as $key => $value)
          
            <div class="d-flex align-items-start align-items-sm-center gap-4"> <img src="{{ asset('upload_profile/' . $value->photo) }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
            @endforeach
              <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0"> <span class="d-none d-sm-block">Upload new photo</span> <i class="bx bx-upload d-block d-sm-none"></i>
                  <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                </label>
                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4"> <i class="bx bx-reset d-block d-sm-none"></i> <span class="d-none d-sm-block">Reset</span> </button>
                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
              </div>
            </div>
          </div>
          <hr class="my-0" />
          <div class="card-body">
            <form id="formAccountSettings" method="POST" name="formAccountSettings" enctype="multipart/form-data">
              @csrf
            @foreach ($getaccount as $key => $value)
            <input type="hidden" name="u_id" id="u_id" value="{{$value->id}}">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Full Name</label>
                  <input class="form-control" type="text" id="firstName" name="firstName" value="{{$value->name}}" autofocus />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Programe Name</label>
                  <select name="department" id="department" class="form-control" required="" fdprocessedid="klaqh8">
                    <option value="">Select Program..</option>
                    
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">E-mail</label>
                  <input class="form-control" type="text" id="email" name="email"  value="{{$value->email}}" placeholder="john.doe@example.com" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="organization" class="form-label">Course</label>
                  <input type="text" class="form-control" id="course" name="course" value="{{$value->course}}"/>
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Phone Number</label>
                  <div class="input-group input-group-merge"> <span class="input-group-text">US (+1)</span>
                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Your Contact Number." value="{{$value->phone}}" required>
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Address</label>
                  <textarea name="address" id="address" placeholder="Address" class="form-control">{{$value->address}}</textarea>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="state" class="form-label">State</label>
                  <input class="form-control" type="text" id="state" name="state" placeholder="California" value="{{$value->state}}"/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="zipCode" class="form-label">Zip Code</label>
                  <input type="zip" class="form-control" name="Zip" id="zip" placeholder="Postal-Code." value="{{$value->Zip}}" required>
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="country">Country</label>
                  <select class="form-control custom-select browser-default" name="country" id="country" fdprocessedid="jwa1w">
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                </select>
                </div>
                
                
              </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
              </div>
              @endforeach
            </form>
          </div>
          <!-- /Account --> 
        </div>
        <div class="card">
          <h5 class="card-header">Delete Account</h5>
          <div class="card-body">
            <div class="mb-3 col-12 mb-0">
              <div class="alert alert-warning">
                <h6 class="alert-heading mb-1">Are you sure you want to delete your account?</h6>
                <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
              </div>
            </div>
            <form id="formAccountDeactivation" onsubmit="return false">
              <div class="form-check mb-3">
                <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation" />
                <label class="form-check-label" for="accountActivation"
                            >I confirm my account deactivation</label
                          >
              </div>
              <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- / Content --> 
</div>
<!-- Footer --> 
<!-- / Layout wrapper --> 

@include('AdminPanel.footer');
<script tytype="text/javascript">
  $(document).ready(function(){
    getprograme();
    $("#formAccountSettings").submit(function(e){
								e.preventDefault();
								var formData = $(this).serialize();
                var id=$('#u_id').val();
                //alert(id);return false;
                //console.log(formData);return false;
								$.ajax({
									type: "POST",
									url: '/AdminPanel/settings_account_edit/'+id,
									data: formData,
									success: function(response){
                        alert(response.success);
                        var delay = 1000;
                       setTimeout(function(){ location.reload(); }, delay);
						//setTimeout(function(){ window.location = '{{ route('login') }}'  }, delay);  
                      
          }
			});
    });
    });
function getprograme(){
	var in_programe="<option value=''>Select Programe</option>";;
    $.ajax({
		  type: "GET",
		  url: 'getprograme',
		  success: function(data){
        //alert(data.length);
        $.each(data, function(key, value) {
          in_programe += '<option value="'+value.id+'">'+value.name+'</option>';
       });
			      $("#department").html(in_programe);
			}
			
		});
}    
    
</script>  
<script tytype="text/javascript">
 
    var bs_modal = $('#imageModal');
    var image = document.getElementById('image');
    var cropper,reader,file;
   

    $("body").on("change", "#upload", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            bs_modal.modal('show');
        };


        if (files && files.length > 0) {
            file = files[0];
            //console.log(files);
            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    bs_modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 70,
            height: 70,
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
            var base64data = reader.result;
            var id=$('#u_id').val();
				//alert(base64data);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '/AdminPanel/settings_profile_edit/'+id,
                    data: {'_token': $('meta[name="csrf-token"]').attr('content'),image: base64data},
                    success: function(data) { 
                        bs_modal.modal('hide');
                        alert(data.success);
                        var delay = 1000;
                       setTimeout(function(){ location.reload(); }, delay);
                    }
                });
            };
        });
    });

    
</script> 