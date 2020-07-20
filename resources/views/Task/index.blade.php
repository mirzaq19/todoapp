@extends('form.main')

@section('title','Todo App')
@section('content')
<div class="content">
    <form class="text-center mb-2" action=" {{ route('store') }}" method="post">
      @csrf
        <div class="form-group">
          <label for="tugas">Tugas Baru</label>
          <input type="text" class="form-control @error('tugas')is-invalid @enderror" id="tugas" name="tugas" placeholder="masukkan tugas baru..">
          @error('tugas')
          <div class="invalid-feedback"> {{$message}} </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Tugas!</button>
    </form>
    @if (session('status'))
    <div class="alert alert-success my-2">
        {{ session('status') }}
    </div>
    @endif
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Tugas</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)
          <tr>
            <th scope="row"> {{$loop->iteration}} </th>
            <td> {{$task->tugas}} </td>
            <td>
              <a class="btn btn-warning btn-sm" href=" {{route('edit',$task->id)}} ">Edit</a>
              <form action=" {{ route('delete',$task->id) }} " method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection