@extends('layouts.admin_default')

@section('content')
<section class="content-header">
    <h1>
        Thêm công ty bảo hiểm
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Insurance company</li>
    </ol>
</section>
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Thêm mới công ty bảo hiểm</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên công ty</label>
                        <input type="text" class="form-control" placeholder="Nhập vào tên công ty">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" placeholder="Nhập vào địa chỉ email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Điện thoại liên hệ</label>
                        <input type="text" class="form-control" placeholder="Nhập vào điện thoại liên hệ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Địa chỉ</label>
                        <input type="text" class="form-control" placeholder="Nhập vào địa chỉ">
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="box-footer">
            <a href="/insurance_types" class="btn btn-default pull-right">Hủy</a>
            <button type="submit" class="btn btn-primary pull-left">Thêm mới</button>
        </div>
    </div>
</section>
@endsection
