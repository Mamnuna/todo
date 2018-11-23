<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

use Validator;

class ItemsController extends Controller{
    protected $path = 'admin.items.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $items = Item::all();
         return view($this->path . 'index')->with('items', $items); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        // return view($this->path . 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $vali = Validator::make($request->all(),[
            'name' => 'required'
        ]); 

        if( $vali->fails()){
            return redirect()->back()->withErrors($vali)->withInput();
        }
     
        $items = new Item;
        $items->name = $request->name;
        $items->save();

        return redirect()->route('items.index');
    }
    

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $items = Item::find($id);
        $items->delete();
        return redirect()->route('items.index');
    }

    public function Complete(Request $request, Item $item){
        $item->checked = $request->isChecked;
        $item->save();
    }
}
