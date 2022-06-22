<?php
//(Here the App\Repositories is the folder name)
namespace App\Repositories;
use App\Models\Categorie;
use App\Models\Service;

class ServiceRepository implements ServiceInterface {
    public function all() {
        return Service::all();
    }

    public function paginate()
    {
        $page = request('page') ? request('page') : 1;
        $search = request('search') ? request('search') : '';
        $per_page = request('per_page') ? request('per_page') : 15;

        return Service::where("name","LIKE","%$search%")
            ->paginate($per_page,['*'],'page',$page);
    }

    public function get($id){
        return Service::find($id);
    }

    public function store(array $data) {
        return Service::create($data);
    }

    public function update($id, array $data) {
        return Service::find($id)->update($data);
    }

    public function delete($id) {
        return Service::destroy($id);
    }

    public function findBySlug(string $slug) {
        Service::where("slug", $slug)->firstOrFail();
    }
    public function findById($id) {
        Service::where("id", $id)->firstOrFail();
    }
}
?>
