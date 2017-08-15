<?php

namespace Modules\News\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Core\Http\Controllers\ApiController;
use Modules\News\Http\Requests\ApiDetailNewsRequest;
use Modules\News\Http\Requests\ApiListNewsRequest;
use Modules\News\Models\NewsCategory;
use Modules\News\Models\NewsPost;

class NewsController extends ApiController
{
    public function listCategories()
    {
        $categories = NewsCategory::get();

        return $this->SuccessResponse(['categories' => $categories]);
    }

    public function listPost(ApiListNewsRequest $request)
    {
        $page = isset($request->page) ? (int)$request->page : 1;
        $pageSize = isset($request->page_sie) ? (int)$request->page_size : 15;

        $posts = NewsPost::select(['id', 'title', 'thumbnail', 'summary', 'published_at'])
            ->skip(($page - 1) * $pageSize)->take($pageSize)->get();

        return $this->SuccessResponse(['posts' => $posts]);
    }

    /**
     * @param ApiDetailNewsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function detailNews(ApiDetailNewsRequest $request)
    {
        $post = NewsPost::find($request->post_id);

        if ($post) {
            return $this->SuccessResponse(['post' => $post]);
        } else {
            return $this->ErrorResponse([], trans('news::api.post_not_found'));
        }
    }
}