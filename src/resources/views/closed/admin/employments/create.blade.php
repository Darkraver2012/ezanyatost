@extends('layouts.closed')
@section('title', 'Добавить связь')
@section('content')
    <h1>Добавить связь: Преподаватель - Занятие</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            {{$errors->first()}}
        </div>
    @endif
    <form method="post" action="/admin/employments">
        @csrf
        <div class="form-group">
            <label>Учреждение</label>
            <select name="organisation_id"
                    class="form-control form-control-block dynamic dynamic-start"
                    data-dependant="associations, teachers">
                @foreach($organisations as $organisation)
                    <option value="{{$organisation->id}}">
                        {{$organisation->short_name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Преподаватель</label>
            <select id="teachers"
                name="teacher_id" class="form-control form-control-block">
            </select>
        </div>
        <div class="form-group">
            <label>Объединение</label>
            <select id="associations"
                name="association_id" class="form-control form-control-block">
            </select>
        </div>
        <button type="submit" class="btn btn-success">Добавить связь</button>
    </form>
    <script src="{{ asset('js/dynamicDropdown.js') }}"></script>
@endsection
