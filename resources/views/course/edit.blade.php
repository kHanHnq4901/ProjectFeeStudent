@extends('layouts.app')
@section('content')
    <div class="card">
        {{-- Thêm thì các bạn sử dụng cho chị post --}}
        <form method="post" action="{{ route('course.update', $course->idCourse) }}">
            @method("PUT")
            @csrf
            <div class=" card-header">
                <h4 class="card-title">
                    Sửa khóa học
                </h4>
            </div>
            <div class="card-content">
                <div class="form-group">
                    <label>Tên khóa</label>
                    <input type="number" name="name" class="form-control" value="{{ $course->nameCourse }}">
                </div>
                <button type="submit" class="btn btn-fill btn-info">Sửa</button>
            </div>
        </form>
    </div>
@endsection