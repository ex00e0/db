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
                <select required class="form-select" name="catgeory_id" aria-label="Default select example">
                    @foreach ($categories as $option)
                        <option value="{{$option->id}}">{{$option->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Название</label>
                <input required type="text" name="name" class="form-control">
            </div>
            
          
        
    
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
@endsection