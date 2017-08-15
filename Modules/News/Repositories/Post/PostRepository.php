<?php

namespace Modules\News\Repositories\Post;
use Modules\News\Models\NewsPost;
use Modules\News\Repositories\BaseRepository;

class PostRepository extends BaseRepository
{
    const MODEL   = NewsPost::class;

    public function getAll()
    {
        return $this->query()->orderBy('id','DESC')->get();
    }
    public function getForDataTable($param=null)
    {
        return $this->query();

    }
    public function create($input)
    {
        $post = self::MODEL;
        $post = new $post;
        $post->title            =   $input['title'];
        $post->thumbnail        =   $input['thumbnail'];
        $post->images           =   $input['images'];
        $post->summary          =   $input['summary'];
        $post->data             =   $input['data'];
        $post->post_type        =   $input['post_type'];
        $post->post_status      =   $input['post_status'];
        $post->post_view        =   $input['post_view'];
        $post->status           =   isset($input['status'])?1:0;
        $post->published_at     =   $input['published_at'];
        $post->created_id       =   $input['created_id'];
        $post->save();
        return $post;
    }
    public function update(Model $post, array $input)
    {
        $post->title            =   $input['title'];
        $post->thumbnail        =   $input['thumbnail'];
        $post->images           =   $input['images'];
        $post->summary          =   $input['summary'];
        $post->data             =   $input['data'];
        $post->post_type        =   $input['post_type'];
        $post->post_status      =   $input['post_status'];
        $post->post_view        =   $input['post_view'];
        $post->status           =   isset($input['status'])?1:0;
        $post->published_at     =   $input['published_at'];
        $post->updated_id       =   $input['updated_id'];
        $post->save();
        return $post;
    }
    public function delete(Model $post){
        return $post->delete();
    }
}