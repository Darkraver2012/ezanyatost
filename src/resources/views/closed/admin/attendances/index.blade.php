@extends('layouts.closed')
@section('title', 'Посещаемость по школьникам')
@section('content')
    <h1>Посещаемость по школьникам</h1>
    <form name="fetch">
        @csrf
        <input type="hidden" name="header">
        <input type="hidden" name="script" value="{{ asset('js/editAttendance.js') }}">
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
                    name="association_id" class="form-control form-control-block dynamic-fetch dynamic-end">
            </select>
        </div>
        <div class="form-group form-group-row">
            <input type="date" name="start"
                   value="{{(new DateTime())->modify('-30 day')->format('Y-m-d')}}"
                   class="form-control form-control-block">
            <input type="date" name="end"
                   value="{{(new DateTime())->modify('+30 day')->format('Y-m-d')}}"
                   class="form-control form-control-block" style="margin-left: 8px">
            <button type="submit" name="submit" class="btn btn-primary btn-block">
                <i class="fas fa-search"></i><span>Найти</span>
            </button>
        </div>
    </form>
    <div class="table-wrapper">
        <table class="table table-scroll">
        </table>
    </div>
    <script src="{{ asset('js/dynamicDropdown.js') }}"></script>
    <script src="{{ asset('js/fetchData.js') }}"></script>
@endsection
