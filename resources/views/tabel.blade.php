@extends('template')
@section('main')
    <h2>Ini halaman Tabel</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        alert('Ini halaman tabel')
    </script>
@endsection
