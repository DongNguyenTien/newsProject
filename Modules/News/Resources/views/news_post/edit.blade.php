@extends('layouts.admin_default')
@section('title', 'Cập nhật thông tin ')
@section('content')
    <section class="content-header">
        <h1>
            Quản lý tin tức
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('news.news_post.index') }}"> Danh sách tin</a></li>
            <li class="active">Cập nhật</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-primary">
            {!! Form::open(['method' => 'PUT', 'route' => ['news.news_post.update', $post->id]]) !!}
                <div class="box-header with-border">
                    <h3 class="box-title">Cập nhật tin tức</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @if ($errors->any())
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <input name="title" type="text" value="{{ $post->title }}" class="form-control" placeholder="Nhập tiêu đề danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mô tả</label>
                                    <textarea name="summary" class="form-control" placeholder="Nhập vào mô tả bài viết">{{ $post->summary }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nội dung</label>
                                    <textarea id="post-data" name="data" class="form-control">{{ $post->data }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Loại bài viết</label>
                                    <select name="post_type" class="form-control">
                                        <option value="news">Tin tức</option>
                                        <option value="image">Tin ảnh</option>
                                        <option value="video">Tin video</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Danh mục tin</label>
                                    <div class="list-categories">
                                        @if (isset($categories) && !empty($categories))
                                            <?php $postCategories = $post->categories()->pluck('category_id')->toArray(); ?>
                                            @foreach($categories as $category)
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="category[]" @if (in_array($category->id, $postCategories)) checked @endif value="{{ $category->id }}">
                                                        {{ $category->prefix }} {{ $category->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Trạng thái</label>
                                    <select name="post_status" class="form-control">
                                        <option value="0">Draft</option>
                                        <option value="1">Public</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ảnh đại diện</label>
                                    <input type="file" name="thumbnail" class="form-control preview-upload-image"/>
                                    <img src="{{ asset($post->thumbnail) }}" @if (empty($post->thumbnail)) style="display: none;" @endif class="preview-feature-image preview-image"/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời gian publish</label>
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' class="form-control" name="published_at" value="{{ old('published_at') }}" />
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- /.row -->
                </div>
                <div class="box-footer">
                    <div class="row">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-6 text-right"><button type="submit" class="btn btn-primary">Cập nhật</button></div>
                        <div class="col-md-6 text-left"><a href="{{ route('news.news_post.index') }}" class="btn btn-default">Hủy</a></div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('admin-lte/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#post-data',
            height: 500,
            menubar: true,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css']
        });
        $(function () {
            $('#datetimepicker1').datetimepicker({
                format :"DD/MM/YYYY HH:mm"
            });
        });
    </script>
@endsection
