<?php

namespace Modules\News\Models;

use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    protected $guarded = [];

    const STATUS_DELETED = -1;
    const STATUS_DRAFT = 0;
    const STATUS_PUBLISHED = 1;

    public function categories()
    {
        return $this->hasMany('Modules\News\Models\NewsCategoryPost', 'post_id');
    }

    /**
     * @param $id
     * @param $data
     */
    public static function updateById($id, $data)
    {
        return self::where('id', $id)->update($data);
    }
}
