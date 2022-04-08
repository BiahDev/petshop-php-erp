



<script src="{{url('js/core/popper.min.js')}}"></script>
<script src="{{url('js/core/bootstrap.min.js')}}"></script>

<!-- Plugin for the charts, full documentation here: https://www.chartjs.org/ -->
<script src="{{url('js/plugins/chartjs.min.js')}}"></script>
<script src="{{url('js/plugins/Chart.extension.js')}}"></script>

<!-- Control Center for Argon Dashboard: parallax effects, scripts for the example pages etc -->

<script src="{{url('js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{url('js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{url('js/argon-dashboard.min.js')}}"></script>
<script src="{{url('js/app.js')}}"></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
