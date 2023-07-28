@extends('layouts.master')

@section('content')
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <table class="table table-bordered table-hover text-center">
                    <thead>
                    <tr><h1>Lịch sử mua hàng </h1></tr>
                    <tr>
                        <th> ID</th>
                        <th> Mã đơn hàng</th>
                        <th> Ngày đặt hàng</th>
                        <th> Tổng tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $stt = 0; ?>
                    @foreach($data as $row)
                            <?php $stt++; ?>
                        <tr>
                            <td>{!!$stt!!}</td>
                            <td>{!!$row->id!!}</td>
                            <td>{!!$row->created_at!!}</td>
                            <td>{!! number_format($row->total) !!} Vnđ</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="table-responsive">
                    <form class="form-horizontal" role="form" method="POST" action="{{ asset('user/edit') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th colspan="2"> Thông tin khách hàng : {!!Auth::user()->name !!}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Họ tên</td>
                                        <td><input id="name" class="form-control" name="name"
                                                   value="{{ Auth::user()->name }}"></td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ E-mail</td>
                                        <td><input id="email" type="email" class="form-control" name="email"
                                                   value="{{ Auth::user()->email }}"></td>
                                    </tr>
                                    <tr>
                                        <td>Điện thoại</td>
                                        <td><input id="phone" class="form-control" name="phone"
                                                   value="{{ Auth::user()->phone }}"></td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ Khách hàng</td>
                                        <td><input id="address" class="form-control" name="address"
                                                   value="{{ Auth::user()->address }}"></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đăng ký</td>
                                        <td><input id="created_at" class="form-control" name="created_at"
                                                   value="{{ Auth::user()->created_at }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12" style="text-align: center">
                                <button type="submit" class="btn btn-primary">
                                     Chỉnh sửa
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
