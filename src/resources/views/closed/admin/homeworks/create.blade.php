@extends('layouts.closed')
@section('title', 'Добавить задание')
@section('content')
    <h1>Добавить задание</h1>
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
    <form method="post" action="/admin/homeworks">
        @csrf
        <div class="form-group">
            <label>Учреждение</label>
            <select name="organisation_id"
                    class="form-control form-control-block dynamic dynamic-start"
                    data-dependant="associations">
                @foreach($organisations as $organisation)
                    <option value="{{$organisation->id}}" {{ (old('organisation_id') == $organisation->id ? "selected":"") }}>
                        {{$organisation->short_name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Объединение</label>
            <select id="associations"
                    name="association_id" class="form-control form-control-block">
            </select>
        </div>
        <div class="form-group">
            <label>Дата</label>
            <input type="date" name="date"
                   value="{{ old('date') }}" class="form-control form-control-block">
        </div>
        <div class="form-group">
            <label>Задание</label>
            <textarea name="value" class="form-control form-control-block"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Добавить задание</button>
    </form>
    <script src="{{ asset('js/dynamicDropdown.js') }}"></script>
@endsection
