@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="">Nuevo Usuario</a> 
{{-- {{route('admin.users.create')}} --}}
<h1>Listado de Usuarios</h1>
@stop

@section('content')
    @livewire('admin.users-index')
    {{-- @livewire('admin.posts-index')     --}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop