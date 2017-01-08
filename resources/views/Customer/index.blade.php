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
                    <div class="panel-heading">Lista de Clientes</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                              <tr>
                                  <th>Cedula</th>
                                  <th>Nombre</th>
                                  <th>Telefono</th>
                                  <th>Editar</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($customers AS $customer)
                                <tr>
                                    <td>{{$customer->charter}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td><a><span class="btn btn-info fa fa-edit"></span></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection