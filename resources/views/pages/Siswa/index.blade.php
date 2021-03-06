@extends('layouts.global')

@section('pages')
@php
$no=1;
@endphp
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Siswa ID</th>
                            <th>Kelas</th>
                            <th>Nama Siswa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$d->Siswa_id}}</td>
                            <td>{{$d->Kelas->Nama}}</td>
                            <td>{{$d->Nama}}</td>
                            <td>
                                <a href="{{ route('Siswa.edit', [$d->Siswa_id]) }}" class="btn btn-warning">Update</a>
                                <form  action="{{ route('Siswa.destroy', [$d->Siswa_id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
