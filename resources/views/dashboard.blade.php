@extends('base')
@section('title') Dashboard @endsection
@section('body')
    <div class="container">
        <h2>Nombre des utilisateurs</h2>
        <div class="panel panel-default" style="width: 28%;">
            <div class="panel-body">{{$nb_users}}</div>
        </div>
    </div>