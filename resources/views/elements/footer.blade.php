


<script src="js/core/popper.min.js"></script>
<script src="js/core/bootstrap.min.js"></script>

<!-- Plugin for the charts, full documentation here: https://www.chartjs.org/ -->
<script src="js/plugins/chartjs.min.js"></script>
<script src="js/plugins/Chart.extension.js"></script>

<!-- Control Center for Argon Dashboard: parallax effects, scripts for the example pages etc -->
<script src="js/plugins/perfect-scrollbar.min.js"></script>
<script src="js/plugins/smooth-scrollbar.min.js"></script>
<script src="js/argon-dashboard.min.js"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
