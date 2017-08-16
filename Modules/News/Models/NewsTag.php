<?php

namespace Modules\News\Models;

use Illuminate\Database\Eloquent\Model;

class NewsTag extends Model
{
    protected $table = 'news_tags';
    protected $fillable = [
        'id','name'
    ];
    public function posts()
    {
        return $this->belongsToMany('Modules\News\Models\NewsPost','news_tags_post','tag_id','post_id');
    }
}
