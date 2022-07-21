            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. TIM IT SMP Taruna Islam Al-Kautsar</span>
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?=base_url('assets/')?>vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?=base_url('assets/')?>vendors/chart.js/Chart.min.js"></script>
  <script src="<?=base_url('assets/')?>vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?=base_url('assets/')?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?=base_url('assets/')?>js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?=base_url('assets/')?>js/off-canvas.js"></script>
  <script src="<?=base_url('assets/')?>js/hoverable-collapse.js"></script>
  <script src="<?=base_url('assets/')?>js/template.js"></script>
  <script src="<?=base_url('assets/')?>js/settings.js"></script>
  <script src="<?=base_url('assets/')?>js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?=base_url('assets/')?>js/dashboard.js"></script>
  <script src="<?=base_url('assets/')?>js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <script src="<?=base_url('assets/')?>js/sweetalert2.all.min.js"></script>
  <script src="<?=base_url('assets/')?>myscript.js"></script>
  <script>
    const tombol = document.querySelector('#button');
    tombol.addEventListener('click', function() {
      Swal.fire({
        icon: 'success',
        title: 'Judul',
        text: 'Isi'
      });
    });
  </script>
</body>

</html>
