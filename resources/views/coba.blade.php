@extends('template')
@section('main')
    <h1>Ini view laravel</h1>

    @for ($i=1; $i <= 10; $i++)
        @if ($i % 2)
            <h1>Ini perulangan menggunakan blade</h1>
        @endif
    @endfor

    @php
        $no = 5;
        echo $no;
    @endphp

    <img src="{{ asset('img/download.png') }}" alt="" width="300">
@endsection
