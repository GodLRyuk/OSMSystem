<!--Image Model-->
<form id="imageupload" method="POST" name="imageupload" enctype="multipart/form-data">
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  @csrf
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
    <div class="modal-body">
      <div class="img-container">
        <div class="row">
          <div class="col-md-8"> 
            <!--  default image where we will set the src via jquery--> 
            <img id="image"> </div>
          <div class="col-md-4">
            <div class="preview"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="crop">Save changes</button>
      </div>
    </div>
  </div>
</form>
  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
</div>

<!--Basic Model-->
<!-- Modal -->

