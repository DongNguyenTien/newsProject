<?php

namespace Modules\News\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $guarded = [];

    const STATUS_DELETED = -1;
    const STATUS_DRAFT = 0;
    const STATUS_PUBLISHED = 1;

    public function children()
    {
        return $this->hasMany('Modules\News\Models\NewsCategory', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('Modules\News\Models\NewsCategory', 'parent_id');
    }

    /**
     * @param $id
     * @param $data
     */
    public static function updateById($id, $data)
    {
        return self::where('id', $id)->update($data);
    }

    /**
     * @param bool $addFirstDefault
     * @return array|bool
     */
    public static function getNestedList($addFirstDefault = false)
    {
        $listCategories = self::with('children')->with('children.children')
            ->where('status', '>', self::STATUS_DELETED)
            ->where(function($query) {
                $query->whereNull('parent_id')->orWhere('parent_id', 0);
            })->orderBy('position')->select(['id', 'name'])->get();

        if ($addFirstDefault) {
            $category = new \stdClass();
            $category->id = 0;
            $category->prefix = '';
            $category->name = 'Danh mục gốc';
            $category->position = 0;

            $tmpData = [$category];
        } else {
            $tmpData = [];
        }

        if ($listCategories) {
            foreach ($listCategories as $category) {
                $category->prefix = '';
                $tmpData[] = $category;

                if ($category->children) {
                    foreach ($category->children as $child) {
                        $child->prefix = '----';
                        $tmpData[] = $child;

                        if ($child->child) {
                            foreach ($child->child as $child2) {
                                $child2->prefix = '--------';
                                $tmpData[] = $child;
                            }
                        }
                    }
                }
            }
        }

        return $tmpData;
    }
}
