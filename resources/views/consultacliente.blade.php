@extends('layouts.app')
@section('content')

<form action= "{{ route('consulta.cliente') }}" method="post" class="form-inline">
@csrf

    <div class="row">
            <div class="col-md-9">

                    <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                         <span class="input-group-text" id="addon-wrapping">CPF:</span>
                                     </div>
                
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <input type="text" name="cpf" class="form-control" placeholder="digite o cpf..." aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                    
                        </div>
                        
                        <div class="input-group mb-3">
                            <div class="input-group flex-nowrap">
                                    
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">Possui telefone?</span>
                                    </div>
                                    
                                    <div class="input-group-text">
                                        <input type="checkbox" name="telefone" aria-label="Checkbox for following text input">
                                    </div>
                            </div>
                        </div>
                        


                    
                    </div>

        
           
            </div>
                

            <div class="col-md-3">

            
            <input type="submit" class="btn btn-primary" value="Consultar">

            </div>
    </div>

</form>



</div>




@endsection




