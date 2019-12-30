@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$productor_name}}</h1>
@stop

@section('content')
    @include('mailing.body',[
        'mailing_list' => $mailing_list ?? [],
        'name' => $productor_name ?? '',
        'id' => $id
    ])
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript">
        console.log("editar");
    </script>
@stop
