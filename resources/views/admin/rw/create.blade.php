@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                Tambah Rw
                </div>
                <div class="card-body">
                <form action="{{route('rw.store')}}" method="POST">
                   @csrf
                        <div class="form-group">
                        <label>Nama Rw</label>
                        <input type="text" name="nama_rw" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Nama Desa</label>
                        <select name="id_desa" class="form-control">
                        @foreach ($desa as $data)
                        <option value="{{$data->id}}">{{$data->nama_desa}}</option>
                        @endforeach
                        </select>
                        </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
