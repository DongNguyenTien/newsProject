@extends('layouts.admin_default')

@section('content')
    <section class="content-header">
        <h1>
            Quản lý thuộc tính cho danh mục sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/product_categories"> Product category</a></li>
            <li class="active">Attribute</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Thuộc tính dành cho danh mục: {{ $category['name'] }}</h3>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('category_attribute_add', ['id' => $category->id]) }}">Thêm thuộc tính</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã thuộc tính</th>
                            <th>Tên thuộc tính</th>
                            <th>Loại nhập liệu</th>
                            <th>Bắt buộc</th>
                            <th>Sử dụng so sánh</th>
                            <th>Lựa chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($attributes as $attribute)
                        <tr>
                            <td>{{ $attribute['id'] }}</td>
                            <td>{{ $attribute['name'] }}</td>
                            <td>{{ $attribute['title'] }}</td>
                            <td>{{ $attribute['data_type'] }}</td>
                            <td>{{ $attribute['is_required'] }}</td>
                            <td>{{ $attribute['compare_flg'] }}</td>
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
                            <th>Mã thuộc tính</th>
                            <th>Tên thuộc tính</th>
                            <th>Loại nhập liệu</th>
                            <th>Bắt buộc</th>
                            <th>Sử dụng so sánh</th>
                            <th>Lựa chọn</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection