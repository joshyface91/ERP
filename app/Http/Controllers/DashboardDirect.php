<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class DashboardDirect extends Controller
{
    public function store(Request $request) {
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     DB::insert('insert into inventory(itemName, itemId, itemQuantity, itemSeller, itemCost, itemPurpose, employeeName) values (:itemName, :itemId, :itemQuantity, :itemSeller, :itemCost, :itemPurpose, :employeeName)', [
        //         'itemName' => $_POST['itemName'],
        //         'itemId' => $_POST['itemId'],
        //         'itemQuantity' => $_POST['itemQuantity'],
        //         'itemSeller' => $_POST['itemSeller'],
        //         'itemCost' => $_POST['itemCost'],
        //         'itemPurpose' => $_POST['itemPurpose'],
        //         'itemShipped' => $_POST['itemShipped'],
        //         'employeeName' => $_POST['employeeName']
        //     ]);
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
}