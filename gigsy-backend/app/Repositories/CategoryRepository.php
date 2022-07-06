<?php
//(Here the App\Repositories is the folder name)
namespace App\Repositories;

use App\Models\Admin;
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

        return Categorie::with("services")->withCount("services")->where("category_name", "LIKE", "%$search%")
            ->paginate($per_page, ['*'], 'page', $page);
    }

    public function get($id)
    {
        return Categorie::with("services")->withCount("services")->find($id);
    }

    public function store(array $data)
    {
        return Categorie::create($data);
    }

    public function update($id, array $data)
    {
        return Categorie::find($id)->update($data);
    }

    public function delete($id)
    {
        return Categorie::destroy($id);
    }

    public function findBySlug(string $slug)
    {
        return Categorie::where("slug", $slug)->with("services")->withCount("services")->firstOrFail();
    }

    public function findById(int $id): Response
    {
        $admin = Categorie::findOrFail($id);
        $response["data"] = $admin;
        $response["message"] = __("service retrieved with success");
        return response($response, ResponseAlias::HTTP_OK);
    }
}
