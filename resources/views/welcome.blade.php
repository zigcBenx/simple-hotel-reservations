@extends('layouts.main')
@section('content')

    <h1>Welcome to Index Aloha</h1>

    @include('contact_form')
@endsection

@section('scripts')
    @parent

    <!-- initialize datepicker -->
    <script>
        $("#date-picker").datepicker();
    </script>

@endsection
