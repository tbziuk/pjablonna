@extends('layouts.master')
 
@section('title', 'Aktualności')
 
@section('content')
    <h2 class="semi-main-header pb-4">Aktualności</h2> 

<!-- Potencjalne filtorwanie
    <div class="pomoc container">
        <h3>Filtrowanie</h3>
        <label for="type">Wszystko
            <input type="radio" name="type" id="both">
            <span class="checkmark"></span>
        </label>
        <label for="type">Strona
            <input type="radio" name="type" id="page">
            <span class="checkmark"></span>
        </label>
        <label for="type">Facebook
            <input type="radio" name="type" id="fb">
            <span class="checkmark"></span>
        </label>
    </div> -->
    
    <section class="container aktualnosci-short">
        <div class="row m-0 justify-content-center" id="special-row">
            <?php echo $html ?>
        </div>
    </section>
@stop