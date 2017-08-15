@extends('layouts.admin_default')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Loại hình bảo hiểm</h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/insurance_type_add">Thêm loại hình mới</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên loại</th>
                                <th>Trạng thái</th>
                                <th>Lựa chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>Bảo hiểm ô tô</td>
                                <td>Đang kích hoạt</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bảo hiểm nhà ở</td>
                                <td>Đang kích hoạt</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Bảo hiểm du lịch</td>
                                <td>Đang kích hoạt</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bảo hiểm sức khỏe</td>
                                <td>Đang kích hoạt</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Tên loại</th>
                            <th>Trạng thái</th>
                            <th>Lựa chọn</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
@endsection