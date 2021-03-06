@extends('adminLTE.master')
@section('content')
<div class="card card-primary">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/pertanyaan')}}">Pertanyaan</a></li>
      <li class="breadcrumb-item">Edit</li>
    </ol>
  </nav>
  <div class="card-header">
    <h3 class="card-title">Edit Pertanyaan {{$pertanyaan->id}}</h3>
  </div>

  <form role="form" method="POST" action="/pertanyaan/{{$pertanyaan->id}}">
    @csrf
    @method('PUT')
    <div class="card-body">

      <div class="form-group">
        <label for="judul">Judul Pertanyaan</label>
      <input type="text" value="{{old('judul', $pertanyaan->judul) }}" class="form-control" id="judul" name="judul" placeholder="Judul Pertanyaan" required>

      @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      </div>

      <div class="form-group">
        <label for="isiPertanyaan">Isi Pertanyaan</label>
        <input type="text" class="form-control" id="isi" value="{{old('isi', $pertanyaan->isi) }}" name="isi" placeholder="Isi Pertanyaan" required>

        @error('isi')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>

  </form>
</div>

@endsection 
