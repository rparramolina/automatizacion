@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @include('mailing.index',[
        'productores' => $productores ?? []
    ])
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

@stop

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#productores').DataTable( {
                "language": {
                    "search" : "Buscar",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "zeroRecords": "Sin resultados encontrados",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            } );
        } );
    </script>
@stop
