<?php

namespace Modules\News\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class NewsCategoryPost extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('Modules\News\Models\NewsCategory', 'category_id');
    }

    /**
     * @param $postId
     * @param $categories
     */
    public static function updateForPost($postId, $categories)
    {
        // Get old categories
        $oldCategories = self::where('post_id', $postId)->pluck('category_id')->toArray();

        if ($oldCategories) {
            if (empty($categories)) {
                // Remove all category
                self::where('post_id', $postId)->delete();
            } else {
                // Remove first
                self::where('post_id', $postId)->whereNotIn('category_id', $categories)->delete();

                // Insert new category
                $insertData = [];
                foreach ($categories as $categoryId) {
                    if (!in_array($categoryId, $oldCategories)) {
                        $insertData[] = [
                            'post_id'     => $postId,
                            'category_id' => $categoryId,
                            'created_at'  => Carbon::now()->toDateTimeString()
                        ];
                    }
                }
                self::insert($insertData);
            }
        } else {
            if ($categories) {
                $insertData = [];
                foreach ($categories as $categoryId) {
                    $insertData[] = [
                        'post_id'     => $postId,
                        'category_id' => $categoryId,
                        'created_at'  => Carbon::now()->toDateTimeString(),
                    ];
                }

                self::insert($insertData);
            }
        }
    }
}
