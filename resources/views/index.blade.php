@extends('components.layout-master')

@section('head')
    <title>Tailwind Blog Template</title>
    <meta name="author" content="Giang Vincent">
    <meta name="description" content="">
    <script>
        var posts = JSON.parse('{!! $posts !!}');
    </script>
@endsection

@section('main')
    <div id="app">
        <router-view />
    </div>
@endsection

@section('custom-script')
@endsection
