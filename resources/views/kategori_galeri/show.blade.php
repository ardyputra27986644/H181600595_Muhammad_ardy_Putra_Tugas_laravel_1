@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">kategori_galeri</div>

            <div class="card-body">
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">ID</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$kategori_galeri->id!!} </label>
            </div>
            
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Nama</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$kategori_galeri->nama!!} </label>
            </div>

            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">User ID</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$kategori_galeri->users_id!!} </label>
            </div>

            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Create</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$kategori_galeri->created_at->format('d/M/Y H:i')!!} </label>
            </div>

            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Update</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$kategori_galeri->updated_at->format('d/M/Y H:i')!!} </label>
            </div>

            <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
            <a href="{!! route('kategori_galeri.index')!!}" class="btn btn-primary">Back</a>        
            </div>
            </div>
                                    
           </div>
           </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection