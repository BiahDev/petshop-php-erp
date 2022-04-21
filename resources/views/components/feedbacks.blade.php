@if ($feedback)
<div class="alert text-white alert-success alert-dismissible fade show" role="alert">
  <span class="alert-icon">
    <i class="ni ni-like-2"></i>
  </span>
  <span class="alert-text">
   {{$feedback}}
  </span>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif