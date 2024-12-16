@extends('layout.header')
@section('title', 'Главная')
@section('content')
<table class="table">
    <thead>
        <tr>
        <th scope="col">Имя</th>
        <th scope="col">Номер телефона</th>
        <th scope="col">Статус</th>
        </tr>
    </thead>
    <tbody id="fill">

      @foreach ($q as $qq)
<tr>
            <td>{{$qq->name}}</td>
            <td>{{$qq->phone}}</td>
            <td>{{$qq->status}}</td>
        </tr>
@endforeach

    </tbody>
    </table>


@endsection