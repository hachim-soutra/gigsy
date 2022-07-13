<?php

namespace App\Http\Controllers\API\Shared;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shared\Category\CategoryRequest;
use App\Models\Categorie;
use App\Models\Category;
use App\Repositories\categoryRepository;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(categoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->categoryRepository->paginate();

        return $this->success(__('get Categories by success'), $data, Response::HTTP_OK);
    }

    public function list()
    {
        $data = $this->categoryRepository->all();

        return $this->success(__('get Categories by success'), $data, Response::HTTP_OK);
    }

    public function findBySlug(string $slug)
    {
        $data = $this->categoryRepository->findBySlug($slug);
        return $this->success(__('get Categories by success'), $data, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        return $this->categoryRepository->store($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie $category
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $category)
    {
        return $this->categoryRepository->get($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @param  \App\Models\Categorie $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Categorie $category)
    {
        return $this->categoryRepository->update($category, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $category)
    {
        return $this->categoryRepository->delete($category);
    }
}
