<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Modules\News\Models\NewsCategory;
use Modules\News\Models\NewsCategoryPost;
use Modules\News\Models\NewsPost;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;
use Modules\News\Repositories\Post\PostRepository;
use Image;

class NewsPostController extends Controller
{
    protected $post;

    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }
    public function get()
    {
        return Datatables::of($this->post->getForDataTable())
            ->escapeColumns([])
            ->make(true);
    }
    public function index()
    {
//        $newses = NewsPost::with('categories')->with('categories.category')
//            ->where('status', '>', NewsPost::STATUS_DELETED)
//            ->paginate(15);
        return view('news::news_post.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function show()
    {
        return Datatables::of($this->post->getForDataTable())
            ->escapeColumns([])
            ->editColumn('published_at',function ($post){
                Carbon::setLocale('vi');
                return Carbon::parse($post->published_at)->diffForHumans();
            })
            ->editColumn('post_status',function ($post){
                if($post->post_status ==1){
                    return "<label class='label label-success'>Hoạt động</label>";
                }elseif($post->post_status ==0){
                    return "<label class='label label-warning'>Ẩn</label>";
                }else{
                    return "<label class='label label-danger'>Xóa</label>";
                }
            })
            ->addColumn('actions',function ($post){
                $html   = view('news::includes.post.colum',['module' => 'actions', 'column' => 'actions','post'=>$post])->render();
                return $html;
            })
            ->make(true);
    }
    public function create()
    {
        // Get nested list categories
        $categories = NewsCategory::getNestedList();

        return view('news::news_post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->only(['title', 'summary', 'data', 'post_type', 'post_status']);
            $data['published_at'] = Carbon::parse($request->published_at)->toDateTimeString();
            $img = $request->file('thumbnail')->getClientOriginalName();
            $request->thumbnail->move('img/posts',$img);
            $data['images'] = $img;
            $thumnail = Image::make('img/posts/'.$img)->resize(300, 200);
            $thumnail->save('img/posts/thumbnail/thumbnail_'.$img);
            $data['thumbnail'] = 'thumbnail_'.$img;
            $post = NewsPost::create($data);

            // Update post category
            if (isset($request->category) && !empty($request->category)) {
                // Update post category
                if (isset($request->category)) {
                    NewsCategoryPost::updateForPost($post->id, $request->category);
                }
            }

            return redirect(route('news.news_post.index'));
        } catch (\Exception $ex) {
            Log::error('[NewsPost] ' . $ex->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $post = NewsPost::find($id);

        // Get nested list categories
        $categories = NewsCategory::getNestedList();

        return view('news::news_post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->only(['title', 'images', 'summary', 'data', 'post_type']);
            if($request->hasFile('thumbnail')){
                $img = $request->file('thumbnail')->getClientOriginalName();
                $request->thumbnail->move('img/posts',$img);
                $data['images'] = $img;
                $thumnail = Image::make('img/posts/'.$img)->resize(300, 200);
                $thumnail->save('img/posts/thumbnail/thumbnail_'.$img);
                $data['thumbnail'] = 'thumbnail_'.$img;
            }

            NewsPost::updateById($id, $data);

            // Update post category
            if (isset($request->category)) {
                NewsCategoryPost::updateForPost($id, $request->category);
            }

            return redirect(route('news.news_post.index'));
        } catch (\Exception $ex) {
            Log::error('[NewsPost] ' . $ex->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $obj = NewsPost::where("id", $id)->first();
        if ($obj) {
            $obj->status = NewsPost::STATUS_DELETED;
            $obj->save();

            return redirect(route('news.news_post.index'));
        } else {
            return Redirect::route('news.news_post.index')->withErrors(["Bản ghi không tồn tại!"]);
        }
    }
}
