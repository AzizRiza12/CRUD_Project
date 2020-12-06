@extends('layouts.global')

@section('pages')
@php
$no=1;
@endphp
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form Tambah Siswa</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
    <form method="POST" action="{{ route('Siswa.update',[$data->Siswa_id]) }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
          <label for="exampleInputEmail1">Kelas</label>
            <select class="form-control" name="Kelas">
                @foreach ($data as $d)
                <option value="{{$d->Kelas_id}}">{{$d->Kelas->Nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Siswa</label>
          <input type="text" class="form-control"  placeholder="Masukan Nama Siswa" name="Nama" value="{{$data->Nama}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nomor</label>
            <input type="text" class="form-control"  placeholder="Masukan Nomor" name="Nomor" value="{{$data->No}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">NIS</label>
            <input type="text" class="form-control"  placeholder="Masukan NIS Siswa" name="NIS" value="{{$data->NIS}}">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
        </div>
    </div>


@push('after-javascript')
<script>
$(document).ready(function(){
$('dataTable').DataTable()
});
</script>
@endpush
@endsection
