<?php

//(Here the App\Repositories is the folder name)

namespace App\Repositories;

use App\Models\Categorie;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CategoryRepository implements CategoryInterface
{
    public function all()
    {
        return Categorie::all();
    }

    public function paginate()
    {
        $page = request('page') ? request('page') : 1;
        $search = request('search') ? request('search') : '';
        $per_page = request('per_page') ? request('per_page') : 15;

        return Categorie::with('services')->withCount('services')->where('category_name', 'LIKE', "%$search%")
            ->paginate($per_page, ['*'], 'page', $page);
    }

    public function get(Categorie $category)
    {
        $response['data'] = $category;
        $response['message'] = __('service retrieved with success');
        return response($response, ResponseAlias::HTTP_OK);
    }

    public function store(array $data)
    {
        $category = Categorie::create($data);
        $response['data'] = $category;
        $response['message'] = __('Categorie created with success');
        return response($response, ResponseAlias::HTTP_OK);
    }

    public function update(Categorie $category, $request): Response
    {
        $category->update($request);
        $response['data'] = $category;
        $response['message'] = __('Categorie updated with success');
        return response($response, ResponseAlias::HTTP_OK);
    }

    public function delete(Categorie $category): Response
    {
        $category->delete();
        $response['message'] = __('Categorie deleted with success');
        return response($response, ResponseAlias::HTTP_OK);
    }

    public function findBySlug(string $slug)
    {
        return Categorie::where('slug', $slug)
            ->with('services')
            ->withCount('services')
            ->firstOrFail();
    }
}
