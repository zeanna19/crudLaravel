@extends('layouts.main')
@section('container')
    <div class="container ">
        <h3 class="text-center mb-5 mt-5">Table Absensi Siswa</h3>
        <table class="table mt-5">
            <thead>
                <a href="/tambahdata">
                    <button type="button" class="btn btn-success">Tambah data</button>
                </a>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jurusan }}</td>
                        <td>{{ $row->kelas }}</td>
                        <td>
                            <a href="/delete/{{ $row->id }}">
                                <button type="button" class="btn btn-danger">hapus</button>
                            </a>
                            <a href="/edit/{{ $row->id }}"><button type="button"
                                    class="btn btn-success">edit</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
