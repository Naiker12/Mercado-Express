      
      
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 footer-copyright text-center">
              <p class="mb-0">Copyright 2024 © Riho theme by pixelstrap </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- latest jquery-->
  <script src="<?php echo BASE_URL ;?>assets-admin/js/jquery.min.js"></script>
  <!-- Bootstrap js-->
  <script src="<?php echo BASE_URL ;?>assets-admin/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="<?php echo BASE_URL ;?>assets-admin/js/icons/feather-icon/feather.min.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="<?php echo BASE_URL ;?>assets-admin/js/scrollbar/simplebar.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="<?php echo BASE_URL ;?>assets-admin/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="<?php echo BASE_URL ;?>assets-admin/js/sidebar-menu.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/sidebar-pin.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/slick/slick.min.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/slick/slick.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/header-slick.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/chart/apex-chart/apex-chart.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/chart/apex-chart/stock-prices.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/chart/apex-chart/moment.min.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/notify/bootstrap-notify.min.js"></script>
  <!-- calendar js-->
  <script src="<?php echo BASE_URL ;?>assets-admin/js/dashboard/default.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/notify/index.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/typeahead/handlebars.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/typeahead/typeahead.bundle.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/typeahead/typeahead.custom.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/typeahead-search/handlebars.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/typeahead-search/typeahead-custom.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/height-equal.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/animation/wow/wow.min.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="<?php echo BASE_URL ;?>assets-admin/js/script.js"></script>
  <script src="<?php echo BASE_URL ;?>assets-admin/js/theme-customizer/customizer.js"></script>
  <script>new WOW().init();</script>


<script src="<?php echo BASE_URL; ?>assets/js/dropzone-min.js"></script>

<script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>


<script>
const base_url = '<?php echo BASE_URL; ?>';

function alertaPerzanalizada(mensaje, type, titulo = '') {
    toastr[type](mensaje, titulo)

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
}
</script>
 <script type="text/javascript" src="<?php echo BASE_URL . 'assets/DataTables/datatables.min.js'; ?>"></script>

 <script src="<?php echo BASE_URL; ?>assets/js/es-ES.js"></script>

</body>

</html>