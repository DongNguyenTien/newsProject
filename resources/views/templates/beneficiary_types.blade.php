@extends('layouts.admin_default')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách loại đối tượng hưởng bảo hiểm</h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="#">Thêm loại</a>
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
                            @if (isset($types) && $types)
                                @foreach($types as $type)
                                    <tr>
                                        <td>{{ $type->id }}</td>
                                        <td>{{ $type->name }}</td>
                                        <td>{{ $type->status }}</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                            <a href="{{ route('beneficiary_type_attribute', ['id' => $type->id]) }}" class="btn btn-danger btn-xs">Thuộc tính</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
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