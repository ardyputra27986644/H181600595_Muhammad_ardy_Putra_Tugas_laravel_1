@extends('layouts.app')

@section('content')

<body>
        <table border="1">
        <tr>
        <td>id</td>
        <td>nama</td>
        <td>users Id</td>
        </tr>

        @foreach($kategori_galeri as $item)

        <tr>

        <td>{!! $item ->id !!}</td>
        <td>{!! $item ->nama!!}</td>
        <td>{!! $item ->user_id!!}</td>

        </tr>
        @endforeach
        </table>
        </body>
        @endesection

