<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Modules\News\Models\NewsCategory;
use Modules\News\Repositories\Categoryes\CategoryRepository;
use Yajra\Datatables\Datatables;

class NewsCategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }
    public function get()
    {
        return Datatables::of($this->category->getForDataTable())
            ->escapeColumns([])
            ->make(true);
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories = NewsCategory::where('status', '>', NewsCategory::STATUS_DELETED)->paginate(15);

        return view('news::news_category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = NewsCategory::getNestedList(true);
        return view('news::news_category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->only(['parent_id', 'name', 'position', 'cover', 'summary']);

            NewsCategory::create($data);

            return redirect(route('news.news_category.index'));
        } catch (\Exception $ex) {
            Log::error('[NewsCategory] ' . $ex->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return Datatables::of($this->category->getForDataTable())
            ->escapeColumns([])
            ->editColumn('parent_id',function ($category){
                if($category->parent_id ==0){
                    return "<label class='label label-info'>Cha</label>";
                }else{
                    return "<label class='label label-warning'>Con</label>";
                }
            })
            ->editColumn('status',function ($category){
                if($category->status ==1){
                    return "<label class='label label-success'>Hoạt động</label>";
                }elseif($category->status ==0){
                    return "<label class='label label-warning'>Ẩn</label>";
                }else{
                    return "<label class='label label-danger'>Xóa</label>";
                }
            })
            ->addColumn('actions',function ($category){
                $html   = view('news::includes.category.colum',['module' => 'actions', 'column' => 'actions','category'=>$category])->render();
                return $html;
            })
            ->make(true);
    }
    public function edit($id)
    {
        // Get category info
        $category = NewsCategory::find($id);
        $categories = NewsCategory::getNestedList(true);

        return view('news::news_category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->only(['parent_id', 'name', 'position', 'cover', 'summary']);

            NewsCategory::updateById($id, $data);

            return redirect(route('news.news_category.index'));
        } catch (\Exception $ex) {
            Log::error('[NewsCategory] ' . $ex->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $obj = NewsCategory::where("id", $id)->first();

        if ($obj) {
            $obj->status = NewsCategory::STATUS_DELETED;
            $obj->save();

            return redirect(route('news.news_category.index'));
        } else {
            return Redirect::route('news.news_category.index')->withErrors(["Bản ghi không tồn tại!"]);
        }
    }
}
