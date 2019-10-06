@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List berita</div>

                <div class="container">
                    <div class="card-body">
                    <a href="{!! route('berita.create') !!}" class="btn btn-success">Tambah data</a>
                        <table border="1px">
                            <tr>
                                <td>id</td>
                                <td>nama</td>
                                <td>user_id</td>
                                <td>create_at</td>
                            </tr>

                            @foreach($berita as $item)

                            <tr>
                                <td>{!! $item->id !!}</td>
                                <td>{!! $item->nama !!}</td>
                                <td>{!! $item->users_id !!}</td>
                                <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                                <td>
                                <a href="{!! $url = route('berita.show',($item -> id)) !!}" class="btn btn-primary">Lihat</a>
                                </td>
                            </tr>

                            @endforeach
                        </table>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection