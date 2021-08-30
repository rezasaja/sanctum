<?php

namespace App\Http\Controllers;

use App\Http\Resources\NasabahResource;
use App\Http\Resources\NasabahCollection;
use Facades\Services\NasabahService as Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::getPaginate();
        return new NasabahCollection($nasabah);

    }

    public function list()
    {
        $nasabah = Nasabah::getAll();
        return new NasabahCollection($nasabah);
    }

    public function store()
    {
        return Nasabah::save();
    }

    public function update($uuid)
    {
        return Nasabah::save($uuid);
    }

    public function destroy($uuid)
    {
        return Nasabah::delete($uuid);
    }

    public function show($uuid)
    {
        return Nasabah::find($uuid);
    }
}
