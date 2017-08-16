<?php

namespace Modules\News\Repositories\Categoryes;

use Modules\News\Repositories\BaseRepository;
use Modules\News\Models\NewsCategory;

class CategoryRepository extends BaseRepository
{
    const MODEL   = NewsCategory::class;

    public function getAll()
    {
        return $this->query()->orderBy('id','DESC')->get();
    }
    public function getForDataTable()
    {
        return $this->query();
    }
    public function create($input)
    {
        $category               =   self::MODEL;
        $category               =   new $category;
        $category->parent_id    =   $input['parent_id'];
        $category->name         =   $input['name'];
        $category->position     =   $input['position'];
        $category->cover        =   $input['cover'];
        $category->summary      =   $input['summary'];
        $category->status       =   $input['status'];
        $category->created_id   =   $input['created_id'];
        $category->save();
        return $category;
    }
    public function update(Model $category, array $input)
    {
        $category->parent_id    =   $input['parent_id'];
        $category->name         =   $input['name'];
        $category->position     =   $input['position'];
        $category->cover        =   $input['cover'];
        $category->summary      =   $input['summary'];
        $category->status       =   $input['status'];
        $category->updated_id   =   $input['updated_id'];
        $category->save();
    }
    public function delete(Model $category){
        return $category->delete();
    }
}