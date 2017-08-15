@extends('layouts.admin_default')
@section('title', 'Danh sách sản phẩm')
@section('content')
    <section class="content-header">
        <h1>
            Danh sách sản phẩm bảo hiểm
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Products</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách sản phẩm bảo hiểm</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="/product_add">Thêm sản phẩm</a>
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
                                    <th>Tên sản phẩm</th>
                                    <th>Đối tác cung cấp</th>
                                    <th>Danh mục sản phẩm</th>
                                    <th>Phí bảo hiểm</th>
                                    <th>Trạng thái</th>
                                    <th>Lựa chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product['id'] }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>{{ $product['company_id'] }}</td>
                                    <td>{{ $product['category_id'] }}</td>
                                    <td class="text-right">3,520,000 đ</td>
                                    <td>Đang bán</td>
                                    <td>
                                        <a href="{{ route('product_edit', ['id' => $product['id']]) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                        <a href="{{ route('product_price', ['id' => $product['id']]) }}" class="btn btn-primary btn-xs">Giá</a>
                                        <a href="{{ route('product_attribute', ['id' => $product['id']]) }}" class="btn btn-primary btn-xs">Thuộc tính</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Loại hình bảo hiểm</th>
                                    <th>Danh mục sản phẩm</th>
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