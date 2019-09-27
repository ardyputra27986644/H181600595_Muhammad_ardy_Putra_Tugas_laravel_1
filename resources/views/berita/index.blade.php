@extends('layouts.app')

@section('content')

<body>
        <table border="1">
        <tr>
        <td>id</td>
        <td>judul</td>
        <td>isi</td>
        <td>users Id</td>
        </tr>

        @foreach($berita as $item)

        <tr>

        <td>{!! $item ->id !!}</td>
        <td>{!! $item ->nama!!}</td>
        <td>{!! $item ->isi!!}</td>
        <td>{!! $item ->user_id!!}</td>

        </tr>
        @endforeach
        </table>
        </body>
        @endesection

