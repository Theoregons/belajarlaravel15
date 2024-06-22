@extends('template')
@section('main')
    <h2>Upload File</h2>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="d-flex align-items-center">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlFile1">Pilih Gambar</label>
          <input type="file" class="form-control-file" name="image">
        </div>
        <div>
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
      </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/'.$item->image) }}" width="200" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
