
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>
          @if (isset($customer))
          Editando registro #{{ $customer->id }}
          @else
          Criando novo registro
          @endif
</h1>    
 @stop 

@section('content')



<div class="container">


    @if(isset($customer))

        {!! Form::model($customer, ['method' => 'put', 'route' => ['customers.update', $customer->id ], 'class' => 'form-horizontal']) !!}

    @else

        {!! Form::open(['method' => 'post','route' => 'customers.store', 'class' => 'form-horizontal']) !!}

    @endif

    <div class="card">
        <div class="card-header">
      <span class="card-title">
          
      </span>
        </div>
        <div class="card-body">
      <div class="form-row form-group">

          {!! Form::label('cpf', 'CPF', ['class' => 'col-form-label col-sm-2 text-right']) !!}

          <div class="col-sm-4">

        {!! Form::text('cpf', null, ['class' => 'form-control', 'placeholder'=>'Defina um CPF']) !!}

          </div>

      </div>
      <div class="form-row form-group">

          {!! Form::label('nome', 'Nome', ['class' => 'col-form-label col-sm-2 text-right']) !!}

          <div class="col-sm-4">

        {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder'=>'Defina o Nome']) !!}

          </div>

      </div>
      <div class="form-row form-group">

          {!! Form::label('dtnascimento', 'Nascimento', ['class' => 'col-form-label col-sm-2 text-right']) !!}

          <div class="col-sm-8">

        {!! Form::text('dtnascimento', null, ['class' => 'form-control', 'placeholder'=>'Defina a data de nascimento']) !!}

          </div>

      </div>
      <div class="form-row form-group">

          {!! Form::label('idade', 'Idade', ['class' => 'col-form-label col-sm-2 text-right']) !!}

          <div class="col-sm-4">

        {!! Form::text('idade', null, ['class' => 'form-control', 'placeholder'=>'Defina a idade']) !!}

          </div>

      </div>
    
        </div>
        <div class="card-footer">
      {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
      {!! Form::submit(  isset($customer) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!}

        </div>
    </div>

    {!! Form::close() !!}

</div>
@endsection
