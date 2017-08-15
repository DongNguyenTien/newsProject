@extends('layouts.admin_default')
@section('title', 'Quản lý danh mục tin')
@section('content')
    <section class="content-header">
        <h1>
            Quản lý danh mục tin
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin_home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Danh mục tin</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách danh mục tin</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('news.news_category.create') }}">Thêm danh mục</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if (isset($categories) && $categories)
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>Lựa chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a href="{{ route('news.news_category.edit', $category->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                                @if ($category->status != constant('Modules\News\Models\NewsCategory::STATUS_DELETED'))
                                                    {!! Form::open(['method' => 'DELETE', 'class' => 'form-delete-btn', 'route' => ['news.news_category.destroy', $category->id]]) !!}
                                                    <a href="#" class="btn btn-danger btn-xs" onclick="if(confirm('Bạn có chắc muốn xóa bản ghi này không?')) $(this).closest('form').submit();"><i class="fa fa-trash"></i></a>
                                                    {!! Form::close() !!}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">
                                {{ $categories->links() }}
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@endsection
