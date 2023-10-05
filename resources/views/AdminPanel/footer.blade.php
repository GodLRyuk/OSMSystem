<script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
<script src="{{ asset('assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js')}}"></script>

<center>
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0"> © 
      <script>
                    document.write(new Date().getFullYear());
                  </script> 
      , made with ❤️ by <a href="" target="_blank" class="footer-link fw-medium">Sandip Edition</a> </div>
    <div class="d-none d-lg-inline-block"> <a href="" class="footer-link me-4" target="_blank">Privecy Policy</a> <a href="" target="_blank" class="footer-link me-4">Service</a> <a href="" target="_blank" class="footer-link me-4">Support</a> </div>
  </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>
@include('AdminPanel.model');
</center>
