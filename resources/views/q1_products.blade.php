@extends('layout.header')
<?php
    // dd(count($row));
    // echo(gettype(json_decode($json_for_controller)));
?>
@section('title', 'Добавление продукта')
@section('content')
<span class="lh-lg fs-4">Добавление нового продукта</span>
<form action="{{route('create_product')}}" method="POST" enctype='multipart/form-data'>
    @csrf
                <div class="mb-3">
            
                <label for="exampleInputPassword1" class="form-label">Категория</label>
                <select required class="form-select" name="category_id" aria-label="Default select example">
                    @foreach ($categories as $option)
                        <option value="{{$option->id}}">{{$option->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Название</label>
                <input required type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Цена</label>
                <input required type="text" name="current_price" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Изображение</label>
                <input required type="file" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Вес</label>
                <input required type="number" name="weight" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Состав</label>
                <input required type="text" name="compound" class="form-control">
            </div>
            <div class="mb-3">
                <input class="form-check-input" type="checkbox" value="true" id="flexCheckChecked" name="new">
                <label for="exampleInputPassword1" class="form-label">Новинка</label>
            </div> 
            <div class="mb-3">
                <input class="form-check-input" type="checkbox" value="true" id="flexCheckChecked" name="hit">
                <label for="exampleInputPassword1" class="form-label">Хит</label>
            </div>  

            
          
        
    
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
@endsection