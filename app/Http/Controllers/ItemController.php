<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ItemController extends Controller
{

    public function index()
    {
        if (auth()->guest()){
            abort(Response::HTTP_FORBIDDEN);
        }

        $items = Item::all();

        return view('items.index', compact('items'));
    }


    public function create()
    {
        if (auth()->guest()){
            abort(Response::HTTP_FORBIDDEN);
        }

        return view('items.create');
    }


    public function store()
    {
        $attributes = $this->validateAttr(new Item());

       Item::create($attributes);

       return redirect('/items')->with('success', 'The item is added.');
    }


    public function edit(Item $item)
    {
        return view('items.update', ['item' => $item]);
    }


    public function update(Item $item)
    {
        $attributes = $this->validateAttr($item);

        $item->update($attributes);

        return redirect('/items')->with('success', 'Item Updated!');
    }


    public function destroy(Item $item)
    {
        $item->delete();

        return redirect('/items')->with('success', 'Item Deleted!');
    }

    /**
     * @return array
     */
    public function validateAttr(Item $item)
    {
        return  request()->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

    }
}
