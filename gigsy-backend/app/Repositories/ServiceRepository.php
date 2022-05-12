<?php
//(Here the App\Repositories is the folder name)
namespace App\Repositories;
use App\Models\Service;

class ServiceRepository implements ServiceInterface {
    public function all() {
        return Service::get();
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
}
?>
