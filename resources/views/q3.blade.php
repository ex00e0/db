@extends('layout.header')
@section('title', 'Главная')
@section('content')
<table class="table">
    <thead>
        <tr>
        <th scope="col">Название</th>
        <th scope="col">Вес</th>
        <th scope="col">Цена</th>
        <th scope="col">Состав</th>
        <th scope="col">Скидка</th>
        </tr>
    </thead>
    <tbody id="fill">

      @foreach ($q as $qq)
<tr>
            <td>{{$qq->name}}</td>
            <td>{{$qq->weight}}</td>
            <td>{{$qq->current_price}}</td>
            <td>{{$qq->compound}}</td>
            <td>{{$qq->discount}}</td>
        </tr>
@endforeach

    </tbody>
    </table>


@endsection