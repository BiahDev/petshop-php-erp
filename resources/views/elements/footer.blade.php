



<script src="{{url('js/core/popper.min.js')}}"></script>
<script src="{{url('js/core/bootstrap.min.js')}}"></script>

<!-- Plugin for the charts, full documentation here: https://www.chartjs.org/ -->
<script src="{{url('js/plugins/chartjs.min.js')}}"></script>
<script src="{{url('js/plugins/Chart.extension.js')}}"></script>

<!-- Control Center for Argon Dashboard: parallax effects, scripts for the example pages etc -->

<script src="{{url('js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{url('js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{url('js/argon-dashboard.min.js')}}"></script>

<!-- Footer  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{url('js/plugins/jquery.mask.js')}}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/fc-4.0.2/fh-3.2.2/r-2.2.9/sc-2.0.5/sl-1.3.4/datatables.min.js"></script>
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
