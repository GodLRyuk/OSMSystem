@include('AdminPanel.header');
<style>
   img {
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
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Masters /</span> Programe</h4>
    <div class="row">
      <div class="col-lg-4 col-md-6"> <small class="text-light fw-medium">Default</small>
        <div class="mt-3"> 
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal" id="addprograme"> Add Programe </button>
          
          <!-- Modal -->
          <form id="saveprograme" name="saveprograme" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"> Programe </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Name</label>
                        <input type="text" id="programe_name" name="programe_name" class="form-control" placeholder="Enter Name" />
                      </div>
                    </div>
                    <div class="row g-2">
                      <div class="col mb-0">
                        <label for="emailBasic" class="form-label">In Charge</label>
                        <select id="in_charge" name="in_charge" class="select2 form-select">
                          <option value="">Select In Charge</option>
                        </select>
                      </div>
                      <div class="col mb-0">
                        <label for="dobBasic" class="form-label">Status</label>
                        <select id="status" name="status" class="select2 form-select">
                          <option value="0">Active</option>
                          <option value="1">In Active</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"> Close </button>
                    <button type="submit" id="save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- Basic Bootstrap Table -->
      <div class="card">
        <h5 class="card-header">Programe details</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>In-Charge</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <!--<tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                <td>Albert Cook</td>
                <td><span class="badge bg-label-primary me-1">Active</span></td>
                <td><div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"> <i class="bx bx-dots-vertical-rounded"></i> </button>
                    <div class="dropdown-menu"> <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              > <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              > </div>
                  </div></td>
              </tr>-->
              @foreach ($getPrograme as $key => $value)
              <tr>
                <td id="name">{{$value->name}}</td>
                <td id="in_charge">{{$value->in_charge}}</td>
                <td id="status"><span class="badge bg-label-primary me-1">@if($value->status==0)Active @else In Active @endif</span></td>
                <td><!--<div class="dropdown">
                    <a class="btn btn-info" href="javascript:void(0)" id="edit_programe" title="Edit Programe" data-bs-toggle="modal" data-bs-target="#basicModal" onclick="edit_pro_fun({{$value->id}})"><i class="bx bxs-edit"></i></a>
                  </div>--></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!--/ Basic Bootstrap Table --> 
    </div>
  </div>
  
  <!-- / Content --> 
</div>
<!-- Footer --> 
<!-- / Layout wrapper --> 

@include('AdminPanel.footer'); 
<script tytype="text/javascript">
  
  $(document).ready(function(){
    $("#addprograme").on('click', function() {
        getuser();
    });
    $("#saveprograme").submit(function(e){
								e.preventDefault();
								var formData = $(this).serialize();
                //console.log(formData);return false;
								$.ajax({
									type: "POST",
									url: "{{ route('saverprograme') }}",
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
function edit_pro_fun(id){
  $('#programe_name').val($('#name').html());   
}
function getuser(){
	var in_charge="<option value=''>Select In Charge</option>";;
    $.ajax({
		  type: "GET",
		  url: 'getuser',
		  success: function(data){
        //alert(data.length);
        $.each(data, function(key, value) {
          in_charge += '<option value="'+value.id+'">'+value.name+'</option>';
       });
			      $("#in_charge").html(in_charge);
			}
			
		});
}    
    
</script> 