<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class ResourceController extends Controller
{
    public function __construct(protected ?string $resource = null, protected int $limit = 10) {}

    public function index(Request $request) {
        return $this->resource::paginate($request->input('limit', $this->limit));
    }

    public function show(int $id) {
        return $this->resource::find($id);
    }

    public function store() {}

    public function update() {}

    public function delete() {}

    public function bulk() {}
}
