<div class="{{$colunas}} mb-xl-0 mb-4">
  <div class="card">
    <div class="card-body p-3">
      <div class="row">
        <div class="col-8">
          <div class="numbers">
            <p class="text-sm mb-0 text-uppercase font-weight-bold">
              {{$titulo}}
            </p>
            <h5 class="font-weight-bolder">
              {{$dado}}
            </h5>
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder">
                +10% 
                {{-- Montar lógica para o a cor for verde ou vermelhor --}}
              </span>
               {{$footer}}
            </p>
          </div>
        </div>
        <div class="col-4 text-end">
          <div class="{{$bgIcon}} icon icon-shape shadow-primary text-center rounded-circle">
            <i class="{{$textIcon}} text-lg opacity-10"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>