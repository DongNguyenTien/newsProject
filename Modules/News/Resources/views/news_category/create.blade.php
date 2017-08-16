@extends('layouts.admin_default')
@section('title', 'Thêm danh mục tin')
@section('content')
    <section class="content-header">
        <h1>
            Thêm danh mục tin
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('news.news_category.index') }}"> Danh mục tin</a></li>
            <li class="active">Thêm mới</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-primary">
            <form class="form-add-news-category" method="post" action="{{ route('news.news_category.store') }}">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới danh mục tin</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @if ($errors->any())
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="Nhập vào tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Danh mục cha</label>
                                <select name="parent_id" class="form-control">
                                    @if (isset($categories) && !empty($categories))
                                        @foreach($categories as $parentCategory)
                                            <option value="{{ $parentCategory->id }}">{{ $parentCategory->prefix }} {{ $parentCategory->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh cover</label>
                                <input name="cover" value="{{ old('cover') }}" type="text" class="form-control" placeholder="Nhập vào link ảnh cover">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <textarea name="summary" class="form-control" placeholder="Nhập vào mô tả">{{ old('summary') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thứ tự hiển thị</label>
                                <input name="position" type="number" value="{{ old('position') }}" class="form-control" placeholder="Nhập vào thứ tự hiển thị">
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <div class="box-footer">
                    <div class="row">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-6 text-right"><button type="submit" class="btn btn-primary">Thêm mới</button></div>
                        <div class="col-md-6 text-left"><a href="{{ route('news.news_category.index') }}" class="btn btn-default">Hủy</a></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
