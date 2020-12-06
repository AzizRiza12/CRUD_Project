@extends('layouts.global')

@section('pages')
@php
$no=1;
@endphp
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form Tambah Kelas</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
    <form method="POST" action="{{ route('kelas.update',[$data->Kelas_id]) }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Kelas</label>
        <input type="text" class="form-control"  placeholder="Masukan Kelas" name="Nama" value="{{$data->Nama}}">
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
