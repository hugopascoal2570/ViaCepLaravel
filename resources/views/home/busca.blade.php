@extends('layouts.app')
@extends('adminlte::page')

@section('title', 'Ceps')

@section('content_header')
    <h1>Cadastro de ceps</h1>
@endsection
@section('script')
<script>

jQuery(document).ready(function(){
    $('.cep').mask.mask('00000-000');
});

</script>
@endsection
@section('content')
@include('home.includes.alerts')
<div class="card">

    <div class="card-body">
      <form action="{{route('buscaCep')}}" method="GET" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">cep</label>
                <div class="col-sm-3">
                <input type="text" name="cep" id="cep" data-mask="00000-000" class="form-control @error('cep') is-invalid @enderror">
                </div>
            </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-from-label"></label>
                  <input type="submit" value="cadastrar" class="btn btn-success">
              </div>
        </form>
    </div>
    </div>

@endsection
