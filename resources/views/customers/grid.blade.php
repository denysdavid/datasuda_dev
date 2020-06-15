@extends('layouts.app')
@section('title', 'Listando todos os registros')

@section('content')

<h1>Listagem de Clientes</h1>
<hr>
{!! Form::open(['method' => get, 'route' => 'customers.index', 'class' => 'form-horizontal']) !!}

    <div class="form-row form-group">


        {!! Form::label('search', 'Procurar por', ['class' => 'col-sm-2 col-form-label text-right']) !!}


        <div class="col-sm-8">

          {!! Form::text('search', isset($search) ? $search : null, ['class' => 'form-control']) !!}

        </div>
        <div class="col-sm-2">

      {!! Form::submit('procurar', ['class'=>'btn btn-primary']) !!}

        </div>

    </div>

{!! Form::close() !!}


<div class="container">
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>#</th>
          <th>CPF</th>
          <th>Nome</th>
          <th>Nascimento</th>
          <th>Idade</th>
          <th>
        <a href="{{ route('customers.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($customers as $customer)
      <tr>
          <td>{{ $customer->id }}</td>
          <td>{{ $customer->cpf }}</td>
          <td>{{ $customer->nome }}</td>
          <td>{{ $customer->dtnascimento }}</td>
          <td>{{ $customer->idade }}</td>
          <td>

            {{dd($customers)}}
         <a href="{{ route('customers.edit', ['id' => $customer->id]) }}" class="btn btn-warning btn-sm">Editar</a>
        <form method="POST" action="{{ route('customers.destroy', ['id' => $customer->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
            @csrf
            <input type="hidden" name="_method" value="delete" >
            <button class="btn btn-danger btn-sm">Excluir</button>
        </form>
          </td>
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
