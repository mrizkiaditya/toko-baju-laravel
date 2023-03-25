@extends('layouts.admin')

@section('container')

<div class="row">
    <div class="col-md-12 mb-3">
        <h4>Baju</h4>
    </div>
</div>

<a href="/admin/baju/create"><button class="btn btn-primary mb-1" type="button">Tambah Data</button></a>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Baju
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Jenis Baju</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($baju as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="d-flex align-items-center"><img style="width: 150px;" src="{{ asset($row->gambar) }}" alt=""></td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->deskripsi }}</td>
                                <td>{{ $row->jenis_baju }}</td>
                                <td>
                                    <a href="/admin/baju/{{$row->id}}/edit"><button class="btn btn-warning">Edit</button></a>
                                    <form action="/admin/baju/{{$row->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" value="delete">
                                        <button type="submit" class="btn btn-danger" style="color:#fff">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection