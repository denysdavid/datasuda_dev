@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>
 Resultado:
</h1>    

@stop

@section('content')
       
@if (empty($customer[0]->cpf))
<div class="col-3">
    <div class="alert alert-danger" role="alert" >
        CPF Não localizado!
      </div>


</div>

   


  @stop
@else

Mostrando dados do cpf: {{ $customer[0]->cpf }}
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
            <th></th>
     
            
        </tr>
      </tr>
          </thead>
          <tbody>

       
        <tr>
            
            <td>{{ $customer[0]->cpf }}</td>
            <td>{{ $customer[0]->nome }}</td>
            <td>{{ date('d/m/yy',strtotime($customer[0]->dtnascimento))}}</td>
            <td>{{ $customer[0]->idade }}</td>
            <td><span class="label label-success">Approved</span></td>
            <td></td>
    
            {{--  <td><a href="{{route('customers.edit',$customer->id)}}" class="btn btn-danger btn-sm"> Editar</a></td>  --}}
            
    
              {{--  {{dd($customers)}}  --}}
      
          
        </tr>
               </tbody>
      </table>
      {{--  {{ $customer->links() }}  --}}
    </div>


@stop

@endif     

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop