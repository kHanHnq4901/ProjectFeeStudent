@extends('layouts.app')
@section('content')
    <div class="card">
        {{-- Thêm thì các bạn sử dụng cho chị post --}}
        <form method="post" action="{{ route('scholarship.store') }}">
            @csrf
            <div class=" card-header">
                <h4 class="card-title">
                    Thêm học bổng
                </h4>
            </div>
            <div class="card-content">
                <div class="form-group">
                    <label>Giá trị học bổng</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button type="submit" class="btn btn-fill btn-info">Thêm</button>
            </div>
        </form>
    </div>
@endsection