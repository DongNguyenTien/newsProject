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
        <form method="post">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới thuộc tính cho danh mục: {{ $category->name }}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thuộc tính</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Nhập vào tên loại hình bảo hiểm">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề thuộc tính</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Nhập vào tên loại hình bảo hiểm">
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Loại nhập liệu</label>
                                <select name="data_type" class="form-control select2" style="width: 100%;">
                                    <option value="textbox" selected="selected">Textbox</option>
                                    <option value="select">SelectBox</option>
                                    <option value="checkbox">CheckBox</option>
                                    <option value="radio">Radio</option>
                                    <option value="textarea">TextArea</option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="checkbox">
                                <label>
                                    <input name="is_required" type="checkbox" value="1"> Bắt buộc nhập
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="compare_flg" type="checkbox" value="1"> Sử dụng để so sánh
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="/insurance_types" class="btn btn-default pull-right">Hủy</a>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary pull-left">Thêm mới</button>
                </div>
            </div>
        </form>
    </section>
@endsection
