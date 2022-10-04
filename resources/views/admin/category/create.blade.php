@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Kategori</h3>
                        <a href="{{url('admin/category/create')}}" class="btn btn-primary text-white btn-sm float-end">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/category')}}" method="GET" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control"/>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Deskripsi</label>
                                <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Gambar</label>
                                <input type="file" name="image" class="form-control"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Status</label><br>
                                <input type="checkbox" name="status"/>
                            </div>


                            <div class="col-md-12 mb-3">
                                <label>Meta Titel</label>
                                <textarea type="text" name="meta_title" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Keyword</label>
                                <textarea type="text" name="meta_keyword" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Deskripsi</label>
                                <textarea type="text" name="meta_description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



