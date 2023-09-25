@extends('backend.layouts.master')

@prepend('styles')
    <style>
        h1 {
            color: red;
        }
    </style>
@endprepend

@section('content')
    @include('backend.partials.auth-header')

    @yield('content')

    @include('backend.partials.auth-footer')
@endsection

@prepend('scripts')
    <script>
        console.log('Hello')
    </script>
@endprepend
