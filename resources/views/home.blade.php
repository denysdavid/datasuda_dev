

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Suda</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado!
                </div>
                <div class="jumbotron">
  <h1 class="display-4">Olá,  </h1>
  <p class="lead">Bem vindo ao DataSuda, aqui você encontrar algumas ferramentas de consulta para ajudar no seu dia-a-dia.</p>
  <hr class="my-4">
  <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
  <a class="btn btn-primary btn-lg" href="\view" role="button">Consultas</a>
</div>


            </div>
        </div>
    </div>
</div>
@endsection
