<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\BodytoneClient;
use App\BodytoneProduct;

class AdminPanelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = \App\Region::all();
        return view('new_user', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //restart
    }

    public function customCreateProduct(Request $request)
    {
        $body_client = new BodytoneProduct;
        $body_client->name = $request->input('name');
        $body_client->code = $request->input('code');
        $body_client->price = (float)$request->input('price');
        $body_client->price_install = (float)$request->input('price_install');
        $body_client->time_install = (int)$request->input('time_install');
        $body_client->price_transport = (float)$request->input('price_transport');
        $request->validate([
            'image_prod' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        if ($request->hasfile('image_prod')) {
            $file = $request->file('image_prod');
            $extension = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalName().time() . '.' . $extension;
            $file->storeAs('public/products', $fileName);
            $body_client->image_prod = $fileName;
        }
        //dd($body_client);
        $body_client->save();
        return back()->with('success', 'Articolo aggiunto con successo');
    }

    public function addProduct()
    {
        $products = BodytoneProduct::all();
        return view('addProduct', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new \App\User;
        $user->name = $request->get('nameuser');
        $user->type = (int)$request->get('role');
        $user->email = $request->get('emailuser');
        $user->password = bcrypt($request->get('userpass'));
        $user->save();
        //dd($request->input('region'));
        $regcont = $request->input('region');
        for ($i = 0; $i < count($regcont); $i++) {
            DB::table('user_region')
                ->where('id', '[0-9]+')
                ->updateOrInsert([
                'user_id' => $user->id,
                'region_id' => (int)$regcont[$i] 
        ]);
        }
        return redirect('/home');
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
        $user = \App\User::find($id);
        $regions = \App\Region::all();
        $userRegion = DB::table('user_region')->where('user_id', $id)->get();
        return view('editUser', compact('id', 'user', 'regions', 'userRegion'));
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
        $user = \App\User::find($id);
        $user->update([
            'type' => (int)$request->get('role')
        ]);
        $regcont = $request->input('region');
        $actreg = DB::table('user_region')->where('user_id', $id)->get();
        foreach ($actreg as $reg) {
            //$reg->delete();
            DB::table('user_region')->where('user_id', $id)->delete();
        }
        for ($i = 0; $i < count($regcont); $i++) {
            
                DB::table('user_region')
                ->where('id', '[0-9]+')
                ->updateOrInsert([
                'user_id' => $user->id,
                'region_id' => (int)$regcont[$i] 
                ]);
            
            
        }
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::find($id);
        $user->delete();
        return redirect('/home');
    }
}
