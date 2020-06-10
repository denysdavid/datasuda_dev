@extends('layouts.app')
@section('content')

<form action= "{{ route('consulta.cliente') }}" method="post">
@csrf
<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




    <div class="row">
            <div class="col-md-3">

                <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">CPF:</span>
                </div>
                <input type="text" name="cpf"class="form-control" placeholder="digite o cpf..." aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                



            </div>
    <div class="col-md-3">
            
            <input type="submit" class="btn btn-primary" value="Consultar">

    </div>

</form>



</div>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Banco</th>
      <th scope="col">Agencia</th>
      <th scope="col">Conta</th>
    </tr>
  </thead>
  <tbody>
@forelse($clientes as $cli)

    <tr>
      <td>{{$cli->cpf}}</td>
      <td>{{$cli->nome}}</td>
      <td>{{$cli->telefone}}</td>
      <td>{{$cli->banco}}</td>
      <td>{{$cli->agencia}}</td>
      <td>{{$cli->conta}}</td>
      
    </tr>
@empty

<b>Cliente não localizado! Verifique o cpf digitado...</b>

@endforelse
    
  </tbody>
</table>


@endsection




