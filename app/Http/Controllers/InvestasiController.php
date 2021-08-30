<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvestasiResource;
use App\Http\Resources\InvestasiCollection;
use Facades\Services\InvestasiService as Investasi;
use Illuminate\Http\Request;

class InvestasiController extends Controller
{
    public function index()
    {
        $investasi = Investasi::getPaginate();
        return new InvestasiCollection($investasi);
    }

    public function list()
    {
        $investasi = Investasi::getAll();
        return new InvestasiCollection($investasi);
    }

    public function store()
    {
        return Investasi::save();
    }

    public function update($uuid)
    {
        return Investasi::save($uuid);
    }

    public function destroy($uuid)
    {
        return Investasi::delete($uuid);
    }

    public function show($uuid)
    {
        return Investasi::find($uuid);
    }

}
