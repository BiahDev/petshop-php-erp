@if ($tipo == 'link')
<a class="btn bg-gradient-primary mb-3" href="{{$link}}">
  <i class="{{$textoIcon}}"></i>
  &nbsp;&nbsp;
  {{$texto}}
</a>
{{-- <x-btnPrincipal tipo="link" texto="Novo Cliente" icone='<i class="fas fa-plus"></i>' link="{{url('/cliente/cadastro')}}" /> --}}
@else
<button type="submit" class="btn bg-gradient-primary ms-auto">
  <i class="{{$textoIcon}}"></i>
  &nbsp;&nbsp;
  {{$texto}}
</button>

{{-- <x-btnPrincipal 
  texto="Cadastrar" 
  icone='<i class="fas fa-plus"></i>'/> --}}
@endif