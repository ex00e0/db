@extends('layout.header')
@section('title', 'Главная')
@section('content')
<table class="table">
    <thead>
        <tr>
        <th scope="col">Название</th>
        </tr>
    </thead>
    <tbody id="fill">

      @foreach ($q as $qq)
<tr>
            <td>{{$qq->name}}</td>
        </tr>
@endforeach

    </tbody>
    </table>


@endsection