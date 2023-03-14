@extends('components.layout-master')

@section('head')
    <title>Tailwind Blog Template</title>
    <meta name="author" content="Giang Vincent">
    <meta name="description" content="">
    <script type="text/javascript">
        var menuTab = JSON.parse('{!! $menuTab !!}');
        var staticContent = JSON.parse('{!! $staticContent !!}');
    </script>
@endsection

@section('main')
    <div id="app">
        <router-view />
    </div>
@endsection

@section('custom-script')

@endsection
