<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface ServiceInterface
{
    public function all();

    public function get(int $id);

    public function findBySlug(string $slug);

    public function store(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);
}
