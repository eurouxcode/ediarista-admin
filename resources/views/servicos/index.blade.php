@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
    <h1>Lista de Serviços</h1>
@stop

@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($servicos as $servico)
        <tr>
            <th scope="row">{{ $servico->id }}</th>
            <td>{{ $servico->nome }}</td>
            <td></td>
        </tr>
    @empty
        <tr>
            <th></th>
            <td>Nenhum registro foi encontrado</td>
            <td></td>
        </tr>
    @endforelse
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
    {{ $servicos->links() }}
  </div>

  <div class="float-right">
    <a class="btn btn-success" href="{{ route('servicos.create') }}">Novo Serviço</a>
  </div>
@stop
