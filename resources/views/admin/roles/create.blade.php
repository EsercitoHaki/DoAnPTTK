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
                
                <div class="input-group input-group-static mb-4">
                    <label name="group" class="ms-0">Nhóm</label>
                    <select name="group" class="form-control">
                      <option value="system">System</option>
                      <option value="user">User</option>
                    </select>
                  </div>

                <div class="form-group">
                    <label for="">Quyền</label>
                    <div class="row">
                        @foreach ($permissions as $groupName => $permission)
                        <div class="col-5">
                            <h4>{{ $groupName }}</h4>
                            <div>
                                @foreach ($permission as $item)
                                    <div class="form-check">
                                        <input class="form-check-input" name="permission_ids[]" type="checkbox" value="{{ $item->id}}">
                                        <label class="custom-control-label" for="customCheck1">{{ $item->display_name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>

                
                <button name="submit" type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection