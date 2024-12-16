@extends('layout.header')
@section('title', 'Главная')
@section('content')
<table class="table">
    <thead>
        <tr>
        <th scope="col">Название</th>
        <th scope="col">Средняя стоимость товаров в категории</th>
        
        </tr>
    </thead>
    <tbody id="fill">

      @foreach ($q as $qq)
<tr>
            <td>{{$qq->name}}</td>
            <td>{{$qq->how_much}}</td>
        </tr>
@endforeach

    </tbody>
    </table>


@endsection