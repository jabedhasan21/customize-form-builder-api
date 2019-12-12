<?php

namespace App\Repositories;


interface RepositoryInterface {

    public function all();

    public function byId($id);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function destroy($id);
}