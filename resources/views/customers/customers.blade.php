@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Listagem de clientes </p>
    
     
    
    <div class="container">
      <table class="table table-hover table-striped table-sm">
          <thead>
        <tr>
            
            <th>CPF</th>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Idade</th>
            <th>Status</th>
            <th>Agencia</th>
     
            
        </tr>
      </tr>
          </thead>
          <tbody>
{{--  {{dd($customers)}}  --}}

        @forelse($customers as $customer)
        <tr>
            
            <td>{{ $customer->cpf }}</td>
            <td><a href="{{route('customers.show',$customer->cpf)}} " class="text-dark no-underline">{{ $customer->nome }}</a></td>
            <td>{{ $customer->dtnascimento}}</td>
            <td>{{ $customer->idade }}</td>
            <td><span class="label label-success">Approved</span></td>
            <td></td>
    
            {{--  <td><a href="{{route('customers.edit',$customer->id)}}" class="btn btn-danger btn-sm"> Editar</a></td>  --}}
            
    
              {{--  {{dd($customers)}}  --}}
      
          
        </tr>
        @empty
        <tr>
            <td colspan="6">Nenhum registro encontrado para listar</td>
        </tr>
        @endforelse
          </tbody>
      </table>
      {{ $customers->links() }}
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop