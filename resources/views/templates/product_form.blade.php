@extends('layouts.admin_default')
@section('title', 'Cập nhật sản phẩm')
@section('content')
<section class="content-header">
    <h1>
        Cập nhật thông tin sản phẩm
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
    </ol>
</section>
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Cập nhật thông tin sản phẩm</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Thông tin chính</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input type="name" value="{{ isset($product) ? $product->name : '' }}" class="form-control" id="exampleInputEmail1" placeholder="Nhập vào tên sản phẩm bảo hiểm">
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Danh mục sản phẩm</label>
                            <select class="form-control select2" style="width: 100%;">
                                @if (isset($categories))
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                </div>
            </div>
            <div class="box-header with-border">
                <h3 class="box-title">Thuộc tính sản phẩm</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        @if (isset($attributes))
                            @foreach($attributes as $attribute)
                                <div class="form-group">
                                    <label for="{{ $attribute->name }}">{{ $attribute->title }}</label>
                                    @php
                                    switch ($attribute->data_type) {
                                        case 'textbox':
                                            echo '<input type="text" class="form-control" name="' . $attribute->name . '" placeholder="' . $attribute->title . '"/>';
                                            break;
                                        case 'selectbox':

                                            break;
                                        case 'checkbox':
                                            echo '<input type="checkbox">' . $attribute->title;
                                            break;
                                        case 'radio':

                                            break;
                                    }
                                    @endphp
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <a href="{{ route('products') }}" class="btn btn-default pull-right">Hủy</a>
            <button type="submit" class="btn btn-primary pull-left">Cập nhật mới</button>
        </div>
    </div>
</section>
@endsection
