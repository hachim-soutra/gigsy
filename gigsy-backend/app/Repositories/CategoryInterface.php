<?php

namespace App\Repositories;

use App\Models\Categorie;

interface CategoryInterface
{
    public function all();

    public function get(Categorie $category);

    public function findBySlug(string $slug);

    public function store(array $data);

    public function update(Categorie $category, array $data);

    public function delete(Categorie $category);
}
