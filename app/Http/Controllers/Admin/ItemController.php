<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = Category::all();
         $items = Item::all();
        // $items = Item::select('items.*', 'categories.name')
        // ->leftJoin('categories', 'items.category_id', 'categories.id')->get();

        return view('admin.item.index', compact('categories', 'items'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required',
            'link' => 'required',
            'image' => 'required' 
             
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('public/uploads/item')) {
                mkdir('public/uploads/item',077, true);
             }
            $image->move('public/uploads/item', $imagename );
        }else {
           $imagename = 'default.png';
        }

        $item = new Item();
        $item->category_id = $request->category_id;
        $item->item_name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->link = $request->link;
        $item->image = $imagename;
          
        $item->save();
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $item = Item::find($id);
        return view('admin/item.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required'
             
        ]);

         $item = Item::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('public/uploads/item')) {
                mkdir('public/uploads/item',077, true);
             }
            $image->move('public/uploads/item', $imagename );
        }else {
           $imagename = $item->image;
        }

       
        $item->category_id = $request->category_id;
        $item->item_name = $request->name;
        $item->description = $request->description;
        $item->link = $request->link;
        $item->price = $request->price;
        $item->image = $imagename;
          
        $item->save();
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item = Item::find($id);
         if (file_exists('public/uploads/item/'.$item->image)) {
               unlink('public/uploads/item/'.$item->image);
             }

        $item->delete();
        $notification=array('message' => 'You are Delete this item!', 'alert-type'=>'info');
        return redirect()->route('item.index')->with($notification);
        // return redirect()->route('item.index');
    }
}
