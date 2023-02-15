@extends('dashboard')

@section('content')
    <h1>{{$judul}}</h1>
    <form action="/kalkulator/proses" method="post">
        @csrf
        <p>
            <input type="text" name="angka1" value="{{$angka1}}"> X
            <input type="text" name="angka2" value="{{$angka2}}"> = {{$hasil}}
        </p>
        <p><button type="submit">HITUNG</button></p>
    </form>
@endsection
    
