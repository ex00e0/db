@extends('layout.header')
@section('title', 'Главная')
@section('content')
<table class="table">
    <thead>
        <tr>
        <th scope="col">Имя</th>
        
        <th scope="col">Сколько выполнено заказов курьером за декабрь</th>
        </tr>
    </thead>
    <tbody id="fill">
      @foreach ($q as $qq)
<tr>
    <td>{{$qq->c_name}}</td>
            <td>{{$qq->how_much}}</td>
        </tr>
@endforeach

    </tbody>
    </table>


@endsection