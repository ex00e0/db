@extends('layout.header')
<?php
    // dd(count($row));
    // echo(gettype(json_decode($json_for_controller)));
?>
@section('title', 'Добавление курьера')
@section('content')
<span class="lh-lg fs-4">Добавление нового курьера</span>
<form action="{{route('create_courier')}}" method="POST" enctype='multipart/form-data'>
    @csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Имя</label>
                <input required type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Номер телефона</label>
                <input required type="text" name="phone" class="form-control">
            </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
@endsection