<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ItemResources;
use App\Http\Resources\ItemCollection;
use Facades\Services\ItemService as Item;
class ItemController extends Controller
{
    public function index()
    {
        $item = Item::getPaginate();
        return new ItemCollection($item);
    }

    public function list()
    {
        $item = Item::getAll();
        return new ItemCollection($item);
    }

    public function store()
    {
       return Item::save();
    }

    public function update($uuid)
    {
        return Item::save($uuid);
    }

    public function destroy($uuid)
    {
        return Item::delete($uuid);
    }

    public function show($uuid)
    {
       return Item::find($uuid);
    }
}
