@extends('dashboard')

@section('content')
<h1>{{$judul}}</h1>

<table border="2">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>GENDER</th>
        <th>GAJI</th>
        <th>AKSI</th>
    </tr>
    @foreach($employes as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->nama}}</td>
        <td>{{$row->alamat}}</td>
        <td>{{$row->gender}}</td>
        <td>{{$row->gaji}}</td>
        <td>xxx</td>
    </tr>
    @endforeach
</table>

@endsection