@if($column == 'actions')
    <a href="{{ route('news.news_category.edit', $category->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"> Sửa</i></a>
    <a href="{{route('news.news_category.destroy',$category->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"> Xóa</i></a>
@endif
