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
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách danh mục tin</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('news.news_category.create') }}">Thêm danh mục</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-condensed table-hover" id="category_table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>Danh mục cha</th>
                                    <th>Vị trí</th>
                                    <th>Trạng thái</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                            </table>
                        </div><!--table-responsive-->
                    </div>
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
            $('#category_table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                bAutoWidth: false,
                bLengthChange : false,
                iDisplayLength: 15,
                searching: false,
                ajax: {
                    url: '{{ route("news.news_category.get") }}',
                    type: 'get',
                    data: {}
                },
                columns: [
                    {data: 'id', sortable: false},
                    {data: 'name', sortable: false},
                    {data: 'parent_id', sortable: false},
                    {data: 'position', sortable: false},
                    {data: 'status', sortable: false},
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