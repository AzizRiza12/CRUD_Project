@extends('layouts.global')

@section('pages')
@php
$no=1;
@endphp
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form Tambah Siswa</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
    <form method="POST" action={{ route('Siswa.store') }}>
        @csrf
        {{-- <div class="form-group">
            <label for="exampleInputEmail1">ID Kelas</label>
            <select>
            @foreach ($data as $d)
            <option value="{{$d->Kelas_id}}">{{$d->Kelas_id}}</option>
            @endforeach
            </select>
          </div> --}}
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Siswa</label>
            <select class="form-control" name="Kelas">
                @foreach ($data as $d)
                <option value="{{$d->Kelas_id}}">{{$d->Nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Siswa</label>
          <input type="text" class="form-control"  placeholder="Masukan Nama Siswa" name="Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nomor</label>
            <input type="text" class="form-control"  placeholder="Masukan Nomor" name="Nomor">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">NIS</label>
            <input type="text" class="form-control"  placeholder="Masukan NIS Siswa" name="NIS">
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
