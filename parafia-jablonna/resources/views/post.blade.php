@extends('layouts.master')
 
@section('title', 'post')
 
@section('content')   
    <div class="akt-post container">
        <div class="post">
            <div class="card text-center">
                <?php echo $html ?>
            </div>
        </div>
    </div>
@stop