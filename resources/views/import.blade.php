@extends('template')
@section('main')
    <h2>User</h2>
    <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button class="mr-4" type="submit">Import User</button>
        <a href="{{ route('users.export') }}">Export Users</a>
    </form>
    <h2 class="mt-5">Siswa</h2>
    <form action="{{ route('siswa.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Import Siswa</button>
    </form>
@endsection
