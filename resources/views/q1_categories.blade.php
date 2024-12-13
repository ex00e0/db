@extends('layout.header')
<?php
    // dd(count($row));
    // echo(gettype(json_decode($json_for_controller)));
?>
@section('title', 'Добавление категории')
@section('content')
<span class="lh-lg fs-4">Добавление новой категории</span>
<form action="{{route('create_category')}}" method="POST" enctype='multipart/form-data'>
    @csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Название</label>
                <input required type="text" name="name" class="form-control">
            </div>
            
          
        
    
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
@endsection