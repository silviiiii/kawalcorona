@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>Tambah Kecamatan</div>
                    <div class="card-body">
                        <form action="{{route('kecamatan.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" class="form-control" required>
                            @if ($errors->has('nama_kecamatan'))
                                <span class="text-danger">{{ $errors->first('nama_kecamatan') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nama Kota</label>
                            <select name="id_kota" class="form-control">
                        @foreach ($kota as $data)
                            <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                        @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
