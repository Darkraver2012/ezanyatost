@extends('layouts.closed')
@section('title', 'Обучающиеся')
@section('content')
    <h1>Обучающиеся</h1>
    <div class="form-group">
        <a href="/admin/students/create"
           class="btn btn-success"><i class="fas fa-plus"></i><span>Добавить обучающегося</span></a>
    </div>

    <form name="fetch">
        @csrf
        <input type="hidden" name="page" value="1">
        <input type="hidden" name="column_name" value="users.name">
        <input type="hidden" name="sort_type" value="asc">

        <div class="form-group form-group-row">
            <input type="text" name="search" class="form-control form-control-block" placeholder="Поиск...">
            <button type="submit" name="submit" class="btn btn-primary btn-block">
                <i class="fas fa-search"></i><span>Найти</span>
            </button>
        </div>
    </form>

    <div class="table-wrapper table-scroll">
        <table class="table">
            <thead>
            <tr>
                <th data-sort_type="asc"
                    data-column_name="name"
                    class="sorting">Имя <span id="name_icon"></span></th>
                <th data-sort_type="asc"
                    data-column_name="username"
                    class="sorting">Логин <span id="username_icon"></span></th>
                <th data-sort_type="asc"
                    data-column_name="gender"
                    class="sorting">Пол <span id="gender_icon"></span></th>
                <th data-sort_type="asc"
                    data-column_name="class"
                    class="sorting">Класс <span id="class_icon"></span></th>
                <th data-sort_type="asc"
                    data-column_name="letter"
                    class="sorting">Буква <span id="letter_icon"></span></th>
                <th data-sort_type="asc"
                    data-column_name="organisation"
                    class="sorting">Учреждение <span id="organisation_icon"></span></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @include('closed.admin.students.index_data')
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/fetchData.js') }}"></script>
@endsection
