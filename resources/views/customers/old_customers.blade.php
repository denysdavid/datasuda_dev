@extends('layouts.app') <!-- Menu superior-->



@section('title', 'Listando todos os registros')

@section('content')



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


        <th>
      <a href="{{ route('customers.create') }}" class="btn btn-success btn-sm" >Novo</a>
        </th>
    </tr>
      </thead>
      <tbody>
    @forelse($customers as $customer)
    <tr>
        
        <td>{{ $customer->cpf }}</td>
        <td>{{ $customer->nome }}</td>
        <td>{{ $customer->dtnascimento}}</td>
        <td>{{ $customer->idade }}</td>
        <td><span class="label label-success">Approved</span></td>
        <td></td>

        <td><a href="{{route('customers.edit',$customer->id)}}" class="btn btn-danger btn-sm"> Editar</a></td>
        {{--  <td><a href="{{ route('customers.edit',$customer->id}}" class="btn btn-info btn-sm" >Editar</a></td>  --}}

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





@endsection
