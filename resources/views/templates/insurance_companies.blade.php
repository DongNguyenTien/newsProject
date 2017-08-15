@extends('layouts.admin_default')
@section('title', 'Quản lý công ty bảo hiểm')
@section('content')
<section class="content-header">
    <h1>
        Quản lý công ty bảo hiểm
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin_home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Công ty bảo hiểm</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách công ty bảo hiểm</h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('insurance_company_add') }}">Thêm công ty</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên công ty</th>
                                <th>Email</th>
                                <th>Điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Lựa chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($companies) && $companies)
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{ $company->id }}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>{{ $company->phone_number }}</td>
                                        <td>{{ $company->address }}</td>
                                        <td>
                                            <a href="{{ route('insurance_company_edit', ['id' => $company->id]) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="{{ route('insurance_company_delete', ['id' => $company->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Tên công ty</th>
                            <th>Email</th>
                            <th>Điện thoại</th>
                            <th>Địa chỉ</th>
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