
@extends('adminlte::page')
@section('title', 'Cep')

@section('content_header')

    <h1>Cep</h1>
@endsection
@section('content')
@if ($errors)
    <div class="alert alert-danger">
        <ul>
            <h5><li class="icon fas fa-ban"></li>Ocorreu um erro</h5>

    <li>{{$errors}}</li> 

        </ul>
    </div>
@endif
<table class="table table-hover">
   <thead>
    <tr>

    </tr>
</thead>
<tbody>
        </table>
    </div>
</div>

@endsection

