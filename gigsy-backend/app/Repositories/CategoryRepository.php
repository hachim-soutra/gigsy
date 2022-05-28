<?php
//(Here the App\Repositories is the folder name)
namespace App\Repositories;
use App\Models\Categorie;

class CategoryRepository implements CategoryInterface {

    public function all() {
        return Categorie::all();
    }

    public function get($id){
        return Categorie::find($id);
    }

    public function store(array $data) {
        return Categorie::create($data);
    }

    public function update($id, array $data) {
        return Categorie::find($id)->update($data);
    }

    public function delete($id) {
        return Categorie::destroy($id);
    }

    public function findBySlug(string $slug) {
        Categorie::where("slug", $slug)->firstOrFail();
    }
}
?>
