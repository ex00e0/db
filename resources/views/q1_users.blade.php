@extends('layout.header')
<?php
    // dd(count($row));
    // echo(gettype(json_decode($json_for_controller)));
?>
@section('title', 'Добавление пользователя')
@section('content')
<span class="lh-lg fs-4">Добавление нового пользователя</span>
<form action="{{route('create_user')}}" method="POST" enctype='multipart/form-data'>
    @csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Имя</label>
                <input required type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Номер телефона</label>
                <input required type="text" name="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input required type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Электронная почта</label>
                <input required type="email" name="email" class="form-control">
            </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
@endsection