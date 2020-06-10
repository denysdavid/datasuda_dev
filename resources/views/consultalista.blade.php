@extends('layouts.app')
@section('content')

<form action= "{{ route('consulta.lista') }}" method="post">
    @csrf

    <div class="row">
            {{-- <div class="col-md-2">

                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Banco:</span>
                    </div>
                        <input type="text" name="banco"class="form-control" placeholder="digite o banco..." aria-label="Username" aria-describedby="addon-wrapping">
                </div>
            </div> --}}

            <div class="col-md-2">
                <label class="mr-sm-1 sr-only" for="inlineFormCustomSelect">Banco</label>
                <select class="custom-select mr-sm-1" id="inlineFormCustomSelect" name ="banco">
                <option selected>Banco</option>
                <option value="237">237</option>
                <option value="001">001</option>
                <option value="033">033</option>
                <option value="104">104</option>
                <option value="341">341</option>

                </select>
            </div>


            <div class="col-md-2">

                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Idade de:</span>
                        </div>
                            <input type="text" name="idadede"class="form-control" placeholder="idade de" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
            </div>
            <div class="col-md-2">

                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Idade ate:</span>
                    </div>
                        <input type="text" name="idadeate"class="form-control" placeholder="idade até" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
            </div>

            <br><br>

            <div class="col-md-2">

                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">UF:</span>
                    </div>
                        <input type="text" name="uf"class="form-control" placeholder="digite a idade" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
            </div>




            <div class="col-md-1">

                    <input type="submit" class="btn btn-primary" value="Consultar">

            </div>
    </div>




</form>








@endsection




