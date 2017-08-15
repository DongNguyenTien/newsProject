@extends('layouts.admin_default')
@section('title', 'Bảng giá sản phẩm')
@section('content')
    <section class="content-header">
        <h1>
            Danh sách giá cho sản phẩm: {{ $product->name }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/demo/products"> Products</a></li>
            <li class="active">Product price</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách giá cho sản phẩm</h3>
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
                                    <th>Giá</th>
                                    <th>Điều kiện</th>
                                    <th>Ngày tạo</th>
                                    <th>Lựa chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if (isset($prices) && $prices)
                                @foreach($prices as $price)
                                    <tr>
                                        <td>{{ $price->id }}</td>
                                        <td>{{ $price->price }}</td>
                                        <td>{{ $price->condition }}</td>
                                        <td>{{ $price->created_at }}</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Giá</th>
                                    <th>Điều kiện</th>
                                    <th>Ngày tạo</th>
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
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Thêm giá cho sản phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập vào giá sản phẩm">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 product-price-manager">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Điều kiện</label>
                                    </div>
                                </div>
                                <div class="row price-condition-element">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select name="attribute" class="form-control">
                                                @if (isset($attributes))
                                                    @foreach($attributes as $attribute)
                                                        <option value="{{ $attribute->name }}">{{ $attribute->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select name="attribute" class="form-control">
                                                <option>Bằng</option>
                                                <option>Lớn hơn</option>
                                                <option>Nhỏ hơn</option>
                                                <option>Trong khoảng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="javascript:" class="btn btn-default add-price-condition">Và</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Thêm giá</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.product-price-manager').on('click', '.add-price-condition', function () {
                var element = $(this).parents('.price-condition-element');
                var newElement = element.clone();
                element.after(newElement);
            });
        });
    </script>
@endsection