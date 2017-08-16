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
                        <div class="table-responsive">
                            <table class="table table-condensed table-hover" id="post_table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Mô tả</th>
                                    <th>Trạng thái</th>
                                    <th>Thời gian phát hành</th>
                                    <th class="actions">Actions</th>
                                </tr>
                                </thead>
                            </table>
                        </div><!--table-responsive-->
                    </div><!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('admin-lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script>
        $(function() {
            $('#post_table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                bAutoWidth: false,
                bLengthChange : false,
                iDisplayLength: 15,
                searching: false,
                ajax: {
                    url: '{{ route("news.news_post.get") }}',
                    type: 'get',
                    data: {}
                },
                columns: [
                    {data: 'id', sortable: false},
                    {data: 'title', sortable: false},
                    {data: 'summary', sortable: false},
                    {data: 'post_status', sortable: false},
                    {data: 'published_at', sortable: false},
                    {data: 'actions', orderable: false}
                ],
                "language": {
                    "lengthMenu": "Hiển thị _MENU_ bản ghi trên một trang",
                    "zeroRecords": "Không tìm bản ghi phù hợp",
                    "info": "Đang hiển thị trang _PAGE_ of _PAGES_",
                    "infoEmpty": "Không có dữ liệu",
                    "infoFiltered": "(lọc từ tổng số _MAX_ bản ghi)",
                    "info": "Hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ kết quả",
                    "paginate": {
                        "first":      "Đầu tiên",
                        "last":       "Cuối cùng",
                        "next":       "Sau",
                        "previous":   "Trước"
                    },
                    "sProcessing": '<i class="fa fa-spinner fa-pulse fa-fw"></i> Đang lấy dữ liệu'
                },
                order: [[0, "asc"]],
                searchDelay: 500
            });
        });
    </script>
@endsection
