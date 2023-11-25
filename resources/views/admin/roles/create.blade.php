@extends('admin.layouts.app')
@section('title', 'Create Roles')
@section('content')
    <div class='card'>
        <h1>Tạo quyền mới</h1>

        <div>
            <form action="{{route('roles.store')}}" method="POST">
                @csrf

                {{-- <div class="form-group">
                    <label for="">Tên</label>
                    <input name="name" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Tên hiển thị</label>
                    <input name="name" type="text" class="form-control border-1">
                </div>

                {{-- <div class="form-group">
                    <label for="">Quyền</label>
                    <input name="name" type="text" class="form-control">
                    
                </div> --}}
                <div class="input-group input-group-static mb-4">
                    <label>Tên</label>
                    <input name="name" type="text" class="form-control">
                </div>

                <div class="input-group input-group-static mb-4">
                    <label>Tên hiển thị</label>
                    <input name="display_name" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Quyền</label>
                </div>

                <button name="submit" type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection