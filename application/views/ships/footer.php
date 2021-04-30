<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>OM AREA 70</b>
  </div>
  <strong><a>Bufter System</a></strong>
</footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('/assets/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('/assets/backend/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/assets/backend/dist/js/adminlte.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('/assets/backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url('/assets/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('/assets/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('/assets/backend/bower_components/chart.js/Chart.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php //echo base_url('/assets/dist/js/pages/dashboard2.js'); ?>"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/assets/backend/dist/js/demo.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('/assets/backend/js/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/backend/js/morris.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('/assets/backend/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/backend/bower_components/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo base_url('/assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>

<script>
  $(function () {
    $('#laporan').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false,
      'pageLength'  : 10
    });
  })
</script>
</body>
</html>