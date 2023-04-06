<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\Export;

class InventoryController extends Controller
{
    public function store(Request $request) {

        $attributes = request()->validate([
            'itemName' => 'required|max:255',
            'itemId' => 'required',
            'itemQuantity' => 'required',
            'itemSeller' => 'required|max:255',
            'itemCost' => 'required',
            'itemPurpose' => 'required|max:255',
            'itemShipped' => '',
            'employeeName' => 'required|max:255'
        ]);

        Item::create($attributes);

        return redirect('/inventory-in');
    }

    public function use(Request $request) {

        $attributes = request()->validate([
            'itemName' => '',
            'itemId' => '',
            'itemQuantity' => 'required',
            'revenue' => 'max:255',
            'itemUse' => 'required',
            'employeeName' => 'required|max:255'
        ]);

        Export::create($attributes);

        return redirect('/inventory-out');
    }
}