@extends('layouts.closed')
@section('title', 'Добавить занятие')
@section('content')
    <h1>Добавить занятие</h1>
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
    <form method="post" action="/admin/activities">
        @csrf
        <div class="form-group">
            <label>Учреждение</label>
            <select name="organisation_id" class="form-control form-control-block">
                <option value="">Выберите учреждение</option>
                @foreach($organisations as $organisation)
                    <option value="{{$organisation->id}}"
                        {{ (old('organisation_id') == $organisation->id ? "selected":"") }}>
                        {{$organisation->short_name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Направление</label>
            <select name="course_id" class="form-control form-control-block">
                <option value="">Выберите направление</option>
                @foreach($courses as $course)
                    <option value="{{$course->id}}" {{ (old('course_id') == $course->id ? "selected":"") }}>
                        {{$course->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Объединение</label>
            <input type="text" name="association"
                   value="{{ old('association') }}" class="form-control form-control-block">
        </div>
        <button type="submit" class="btn btn-success">Добавить занятие</button>
    </form>
@endsection
