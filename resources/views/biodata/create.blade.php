@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Biodata Siswa</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('biodata.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Nama Siswa :</strong>
          <input type="text" name="namaSiswa" class="form-control" placeholder="Nama Siswa">
        </div>
        <div class="col-md-12">
          <strong>Alamat Siswa :</strong>
          <textarea class="form-control" placeholder="Alamat Siswa" name="alamatSiswa" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12">
          <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
