@extends('layouts.closed')
@section('title', 'Преподаватель - Объединение')
@section('content')
    <h1>Связь: Преподаватель - Объединение</h1>
    <div class="form-group">
        <a href="/admin/employments/create"
           class="btn btn-success"><i class="fas fa-plus"></i> Добавить связь</a>
    </div>

    <form name="search_form">
        <div class="form-group form-group-row">
            <input type="text" name="query" class="form-control form-control-block" placeholder="Поиск...">
            <button type="submit" name="search" class="btn btn-primary btn-block">
                <i class="fas fa-search"></i><span>Найти</span>
            </button>
        </div>
    </form>

    <div class="table-wrapper">
        <table class="table table-scroll">
            <thead>
            <tr>
                <th data-sort_type="asc"
                    data-column_name="teacher"
                    class="sorting">Преподаватель <span id="teacher_icon"></span></th>
                <th data-sort_type="asc"
                    data-column_name="association"
                    class="sorting">Объединение <span id="association_icon"></span></th>
                <th data-sort_type="asc"
                    data-column_name="organisation"
                    class="sorting">Учреждение <span id="organisation_icon"></span></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @include('closed.admin.employments.index_data')
            </tbody>
        </table>
        <input type="hidden" name="page" value="1">
        <input type="hidden" name="column_name" value="id">
        <input type="hidden" name="sort_type" value="asc">
    </div>
    <script src="{{ asset('js/fetchData.js') }}"></script>
@endsection
