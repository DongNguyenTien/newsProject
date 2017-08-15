@extends('layouts.admin_default')
@section('title', 'Quản lý tin tức')
@section('content')
    <section class="content-header">
        <h1>
            Quản lý bài viết
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin_home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Danh sách bài viết</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách bài viết</h3>
                        <div class="pull-right">
                            <a class="btn btn-success btn-sm" href="{{ route('news.news_post.create') }}">Thêm bài viết</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if (isset($newses) && $newses)
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tin bài</th>
                                    <th>Danh mục</th>
                                    <th>Ngày publish</th>
                                    <th>Ngày tạo</th>
                                    <th>Trạng thái</th>
                                    <th>Lựa chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($newses as $news)
                                        <tr>
                                            <td>{{ $news->id }}</td>
                                            <td>{{ $news->title }}</td>
                                            <td>
                                                <?php
                                                $postCategories = [];
                                                foreach($news->categories as $postCategory) {
                                                    $postCategories[] = $postCategory->category->name;
                                                }
                                                ?>
                                                {{ implode(', ', $postCategories) }}
                                            </td>
                                            <td>{{ $news->published_at }}</td>
                                            <td>{{ $news->created_at }}</td>
                                            <td>{{ $news->created_at }}</td>
                                            <td>
                                                <a href="{{ route('news.news_post.edit', $news->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                                @if ($news->status != \Modules\News\Models\NewsPost::STATUS_DELETED)
                                                    {!! Form::open(['method' => 'DELETE', 'class' => 'form-delete-btn', 'route' => ['news.news_post.destroy', $news->id]]) !!}
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
                                {{ $newses->links() }}
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
