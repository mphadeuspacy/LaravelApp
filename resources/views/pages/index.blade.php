@extends('master')

@section('content')
    <?php foreach($lessons as $lesson) : ?>
        <h2><?= $lesson; ?></h2>
    <?php endforeach; ?>
@stop

@section('footer')
 <script>
    alert('Pages Index page loaded');
 </script>
@stop