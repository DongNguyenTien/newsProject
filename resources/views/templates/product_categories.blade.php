@extends('layouts.admin_default')
@section('title', 'Danh mục sản phẩm')
@section('content')
    <section class="content-header">
        <h1>
            Danh mục sản phẩm bảo hiểm
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Product categories</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh mục sản phẩm bảo hiểm</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="/product_category_add">Thêm danh mục</a>
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
                                    <th>Tên danh mục</th>
                                    <th>Loại hình bảo hiểm</th>
                                    <th>Trạng thái</th>
                                    <th>Lựa chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category['id'] }}</td>
                                    <td>{{ $category['name'] }}</td>
                                    <td>{{ $category['type'] }}</td>
                                    <td>Đang sử dụng</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                        <a href="{{ route('category_attributes', ['id' => $category['id']]) }}" class="btn btn-primary btn-xs">Thuộc tính</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Tên danh mục</th>
                                <th>Loại hình bảo hiểm</th>
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
    </section>
@endsection