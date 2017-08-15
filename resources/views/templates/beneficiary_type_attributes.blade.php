@extends('layouts.admin_default')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách thuộc tính của đối tượng hưởng thụ</h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/insurance_company_add">Thêm thuộc tính</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên thuộc tính</th>
                                <th>Loại nhập liệu</th>
                                <th>Bắt buộc</th>
                                <th>Lựa chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($attributes as $attribute)
                            <tr>
                                <td>{{ $attribute['id'] }}</td>
                                <td>{{ $attribute['name'] }}</td>
                                <td>{{ $attribute['data_type'] }}</td>
                                <td>{{ $attribute['is_required'] }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Tên thuộc tính</th>
                                <th>Loại nhập liệu</th>
                                <th>Bắt buộc</th>
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