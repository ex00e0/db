@extends('layout.header')
@section('title', 'Главная')
@section('content')
    <div class="empty"></div>
    <ul class="list-group">
      <li class="list-group-item"><a href="{{route('q1_products')}}">1.Написать запросы, позволяющие вводить новые данные в существующие таблицы БД (продукты).</a></li>
      <li class="list-group-item"><a href="{{route('q1_users')}}">1.Написать запросы, позволяющие вводить новые данные в существующие таблицы БД (пользователи).</a></li>
      <li class="list-group-item"><a href="{{route('q1_couriers')}}">1.Написать запросы, позволяющие вводить новые данные в существующие таблицы БД (курьеры).</a></li>
      <li class="list-group-item"><a href="{{route('q1_categories')}}">1.Написать запросы, позволяющие вводить новые данные в существующие таблицы БД (категории).</a></li>

      {{--<li class="list-group-item"><a href="{{route()}}">2.Вывести список всех товаров, которые в наличие.</a></li>
      <li class="list-group-item"><a href="{{route()}}">3.Найти товары со скидкой больше 20 %.</a></li>
      <li class="list-group-item"><a href="{{route()}}">4.Найти все новинки товаров.</a></li>
      <li class="list-group-item"><a href="{{route()}}">5.Вывести все товары, в составе которых есть «шерсть».</a></li>
      <li class="list-group-item"><a href="{{route()}}">6.Вывести все товары с весом меньше 200 г.</a></li>
      <li class="list-group-item"><a href="{{route()}}">7.Найти все товары с категорией «Овощи».</a></li>
      <li class="list-group-item"><a href="{{route()}}">8.Вывести список категорий товаров в алфавитном порядке.</a></li>
      <li class="list-group-item"><a href="{{route()}}">9.Допустим, что изменилась политика компании. Поэтому нужно обновить данные о пользователях: изменить роль с «пользователь» на «клиент».</a></li>
      <li class="list-group-item"><a href="{{route()}}">10.Вывести всех курьеров с именем «Иван».</a></li>
      <li class="list-group-item"><a href="{{route()}}">11.Вывести список всех свободных курьеров.</a></li>
      <li class="list-group-item"><a href="{{route()}}">12.Изменить статус всех занятых курьеров на «свободен».</a></li>

      <li class="list-group-item"><a href="{{route()}}">13.Получить информацию о товарах, которые есть в наличии в определённом весе.</a></li>
      <li class="list-group-item"><a href="{{route()}}">14.Узнать количество товаров каждой категории.</a></li>
      <li class="list-group-item"><a href="{{route()}}">15.Определить самые популярные товары.</a></li>

      
      <li class="list-group-item"><a href="{{route()}}">16.Вывести все товары с весом меньше 200 г.</a></li>
      <li class="list-group-item"><a href="{{route()}}">17.Найти все товары с категорией «Овощи».</a></li>
      <li class="list-group-item"><a href="{{route()}}">18.Вывести список категорий товаров в алфавитном порядке.</a></li>
      <li class="list-group-item"><a href="{{route()}}">19.Допустим, что изменилась политика компании. Поэтому нужно обновить данные о пользователях: изменить роль с «пользователь» на «клиент».</a></li>
      <li class="list-group-item"><a href="{{route()}}">20.Вывести всех курьеров с именем «Иван».</a></li>
      <li class="list-group-item"><a href="{{route()}}">21.Вывести список всех свободных курьеров.</a></li>
      <li class="list-group-item"><a href="{{route()}}">22.Изменить статус всех занятых курьеров на «свободен».</a></li>--}}
      
    </ul>
@endsection