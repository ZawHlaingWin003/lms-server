@extends('backend.layouts.app')

@push('styles')
    <style>
        h1 {
            color: green;
        }
    </style>
@endpush

@section('content')
    <h1>Hello</h1>
@endsection


@push('scripts')
    <script>
        console.log('Boom!')
    </script>
@endpush
