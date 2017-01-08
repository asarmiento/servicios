@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="dropdown">
                                <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Clientes<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('customer-index')}}">Lista de Clientes</a></li>
                                    <li><a href="">Reporte de Pagos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
