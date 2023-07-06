@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-end">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="/insertdata" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select class="form-select" name="jurusan" aria-label="Default select example" required>
                                    <option selected>pilih</option>
                                    <option value="1">rpl</option>
                                    <option value="2">multimedia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control" id="jurusan" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
