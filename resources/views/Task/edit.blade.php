@extends('form.main')

@section('title','Todo App')
@section('content')
<div class="content">
    <form class="text-center mb-2" action=" {{ route('update',$task->id) }} " method="post">
      @csrf
      @method('put')
        <div class="form-group">
          <label for="tugas">Ubah Tugas</label>
          <input type="text" class="form-control @error('tugas')is-invalid @enderror" id="tugas" name="tugas" placeholder="masukkan tugas baru.." value=" {{$task->tugas}} ">
          @error('nama')
          <div class="invalid-feedback"> {{$message}} </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-warning">Ubah Tugas</button>
    </form>
</div>
@endsection