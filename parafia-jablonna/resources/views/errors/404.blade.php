@extends('layouts.master')
 
@section('title', '404')
 
@section('content')   
    <div class="error404 container">
        <i class="fa-solid fa-cross"></i>
        <h2>Błąd 404</h2>
        <p>Taka strona nie istnieje</p>
        <a href="{{ url('/strona-glowna') }}"><button class="read-more-btn-2">Wróć do strony głównej</button></a>
    </div>

    <div style="height:100px"></div>
@stop