@if($column == 'actions')
    <a href="{{route('news.news_post.edit',$post->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"> Sửa</i></a>
    <a href="{{route('news.news_post.destroy',$post->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"> Xóa</i></a>
@endif