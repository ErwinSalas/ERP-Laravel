@extends('layouts.master')
@section('content')
    <div class="panel-heading ">
        <a id="products">Clientes</a>
        <div class="pull-right">
            <i id="add_Client" class="material-icons" id="add">add</i>
        </div>
    </div>

    <div class="panel-body">

        <div class="row" >
            <div id="data_view" >

            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="/js/client.js"></script>
@endsection