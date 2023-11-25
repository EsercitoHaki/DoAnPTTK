@extends('admin.layouts.app')
@section('title', 'Roles')
@section('content')
    <div class="card">
        <h1>
            Danh sách vai trò
        </h1>
            <div>
                <a href="{{ route('roles.create')}}" class="btn btn-primary">Tạo mới</a>
            </div>
        <div>
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Tên hiển thị</th>
                </tr>

                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id}}</td>
                        <td>{{ $role->name}}</td>
                        <td>{{ $role->display_name}}</td>
                    </tr>
                @endforeach
            </table>
                {{ $roles->links() }}
                
        </div>
    </div>
@endsection