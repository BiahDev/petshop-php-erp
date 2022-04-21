@if ($errors != null)
<div class="row">
  <div class="col-md">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-warning text-white" style="border:none;" role="alert">
      <span class="alert-icon">
        <i class="fas fa-exclamation-triangle "></i>
      </span>
      <span class="alert-text">
        {{$error}}
      </span>
    </div>
    @endforeach
    @endif
  </div>
</div>
@endif