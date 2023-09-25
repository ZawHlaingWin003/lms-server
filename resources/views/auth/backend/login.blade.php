@extends('backend.layouts.auth')

@push('styles')
    <style>
        h1 {
            color: blue;
        }
    </style>
@endpush


@section('content')
    <h1>Login</h1>
@endsection

@push('scripts')
    <script>
        console.log('First Login')
    </script>
@endpush
