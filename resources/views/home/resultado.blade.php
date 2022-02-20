
@extends('adminlte::page')
@section('title', 'Cep')

@section('content_header')

    <h1>Cep</h1>
@endsection
@section('content')

<table class="table table-hover">
   <thead>
    <tr>
        <th>Cep</th>
        <th>complemento</th>
        <th>bairro</th>
        <th>localidade</th>
        <th>uf</th>
        <th>ibge</th>
        <th>gia</th>
        <th>ddd</th>
        <th>siafi</th>
    </tr>
</thead>
<tbody>

@foreach ($ceps as $cep)
<tr>
    <td>{{$cep->cep}}</td>
    <td>{{$cep->complemento}}</td>
    <td>{{$cep->bairro}}</td>
    <td>{{$cep->localidade}}</td>
    <td>{{$cep->uf}}</td>
    <td>{{$cep->ibge}}</td>
    <td>{{$cep->gia}}</td>
    <td>{{$cep->ddd}}</td>
    <td>{{$cep->siafi}}</td>
</tr>
@endforeach

        </table>
    </div>
</div>

@endsection
