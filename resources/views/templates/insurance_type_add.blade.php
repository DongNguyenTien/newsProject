@extends('layouts.admin_default')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Thêm mới loại hình bảo hiểm</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên loại</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập vào tên loại hình bảo hiểm">
                        </div>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Kích hoạt</option>
                            <option>Không sử dụng</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="box-footer">
            <a href="/insurance_types" class="btn btn-default pull-right">Hủy</a>
            <button type="submit" class="btn btn-primary pull-left">Thêm mới</button>
        </div>
    </div>
@endsection
