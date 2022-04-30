

<div class="{{$col}}">
  <div class="form-group">
    <label for="{{$nameFor}}" class="form-control-label">{{$nome}}</label>
    <input class="form-control {{$class}}" type="{{$tipo}}" name="{{$nameFor}}" value="{{$value}}" id="{{$id}}" placeholder="{{$placeholder}}" maxlength="{{$max}}" {{$outras}}>
  </div>
</div>

{{-- <x-forms.input col="col-md-5" nameFor="nome" nome="Nome *" placeholder="" id="" classes="" max="60" tipo="text" value="{{$cliente->nome}}" outras="required" /> --}}