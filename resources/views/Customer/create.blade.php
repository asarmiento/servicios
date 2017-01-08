@extends('layouts.app')
<!--**
 * Created by PhpStorm.
 * User: Amwar
 * Date: 11/11/2016
 * Time: 10:42 AM
 *-->
 @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Clientes</div>

                    <div id="createCustomer" class="panel-body">
                        <div  class="col-lg-4 col-lg-4">
                            <label>Cedula del Cliente</label>
                            <input type="text">
                        </div>
                        <div  class="col-lg-4 col-lg-4">
                            <label>Nombre Cliente</label>
                            <input type="text">
                        </div>
                        <div  class="col-lg-4 col-lg-4">
                            <label>Telefono </label>
                            <input type="text">
                        </div>
                        <div  class="col-lg-4 col-lg-4">
                            <label>Encargado </label>
                            <input type="text">
                        </div>
                        <div  class="col-lg-4 col-lg-4">
                            <label>Celular del Encargado</label>
                            <input type="text">
                        </div>
                        <div  class="col-lg-7 col-lg-7 ">
                            <input type="submit" class="form-control">
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection