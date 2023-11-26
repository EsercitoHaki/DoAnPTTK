@extends('admin.layouts.app')
@section('title', 'Roles')
@section('content')
    <div class="card">
        @if (session('massage'))
            <h1 class="text-primary">{{(session('massage'))}}</h1>
        @endsection
            
        @endif

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
                    <th>Hoạt động</th>
                </tr>

                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id}}</td>
                        <td>{{ $role->name}}</td>
                        <td>{{ $role->display_name}}</td>
                        <td>
                            <a href="{{ route('roles.edit', $role->id)}}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('roles.destroy', $role->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Xoá</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
                {{ $roles->links() }}
                
        </div>
    </div>
@endsection