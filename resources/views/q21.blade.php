@extends('layout.header')
@section('title', 'Главная')
@section('content')
<table class="table">
    <thead>
        <tr>
        <th scope="col">Средняя сумма заказов за 3 месяца</th>
        
        </tr>
    </thead>
    <tbody id="fill">

      @foreach ($q as $qq)
<tr>
            <td>{{$qq->how_much}}</td>
        </tr>
@endforeach

    </tbody>
    </table>


@endsection