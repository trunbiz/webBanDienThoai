@extends('backEnd.layouts.master')
@section('content')
    <!-- main content - noi dung chinh trong chu -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Khách hàng</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><small>Sửa thông tin khách hàng</small></h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif (Session()->has('flash_level'))
                            <div class="alert alert-success">
                                <ul>
                                    {!! Session::get('flash_massage') !!}
                                </ul>
                            </div>
                        @endif
                        <form action="{{asset('admin/nhanvien/store')}}" method="POST" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="input-id">Tên nhân viên</label>
                                <input type="text" name="name" id="name" class="form-control" value="{!! old('name', isset($data['name']) ? $data['name'] : null)!!}" required="required">
                            </div>
                            <div class="form-group">
                                <label for="input-id">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{!! old('email', isset($data['email']) ? $data['email'] : null)!!}" required="required">
                            </div>
                            <div class="form-group">
                                <label for="input-id">Mật khẩu</label>
                                <input type="text" name="password" id="password" class="form-control" value="{!! old('password', isset($data['password']) ? $data['password'] : null)!!}" required="required">
                            </div>
                            <div class="form-group">
                                <label for="input-id"> Chọn Quyền </label>
                                <select name="sltCate" id="inputSltCate" class="form-control">
                                    <option value="1">- Quản trị --</option>
                                    <option value="2">- Nhân viên --</option>
                                </select>
                            </div>
                            <div class="form-group" style="text-align: center">
                                <button type="submit" class="btn btn-primary">
                                    Tạo
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
    <!-- =====================================main content - noi dung chinh trong chu -->
@endsection