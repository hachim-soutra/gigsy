<?php

//(Here the App\Repositories is the folder name)

namespace App\Repositories;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ServiceRepository implements ServiceInterface
{
    public function all()
    {
        return Service::get();
    }

    public function filterByStatus($status)
    {
        return Service::where("status", $status)->latest()->get();
    }

    public function paginate()
    {
        $page = request('page') ? request('page') : 1;
        $search = request('search') ? request('search') : '';
        $per_page = request('per_page') ? request('per_page') : 15;
        return Service::where('name', 'LIKE', "%$search%")
            ->paginate($per_page, ['*'], 'page', $page);
    }

    public function get($id)
    {
        return Service::find($id);
    }

    public function store(array $data)
    {
        $data['slug'] = Str::slug($data['name']);
        $file = $data['image'];
        $filename = str_replace(" ", "_", date('YmdHi') . $file->getClientOriginalName());
        $file->move(public_path('images/services'), $filename);
        $data['image'] = url("/images/services/$filename");
        $array_filename = [];
        // foreach ($data['galeries'] as $file) {
        //     Log::alert($file);
        //     $filename = date('YmdHi') . $file->getClientOriginalName();
        //     $file->move(public_path('images/services'), $filename);
        //     $array_filename[] = url("/images/services/$filename");
        // }
        $request['galeries'] = json_encode($array_filename);
        return Service::create($data);
    }

    public function update($id, array $data)
    {
        return Service::find($id)->update($data);
    }

    public function delete($id)
    {
        return Service::destroy($id);
    }

    public function findBySlug(string $slug)
    {
        return Service::where('slug', $slug)->firstOrFail();
    }

    public function findById($id)
    {
        return Service::where('id', $id)->firstOrFail();
    }
}
