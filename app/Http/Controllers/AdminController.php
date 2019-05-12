<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Restaurant;
use App\Staff;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    /*Admin*/
    public function login()
    {
        Auth::user();
        return view('admin.dashboard.index');
    }

    public function logout()
    {
        return view('welcome');
    }

    public function index()
    {
        $res=Restaurant::orderBy('id','ASC')->get();
        $data=['restaurants'=>$res];

        $data3=Staff::where('restaurant_id',1)->get();
        $data2=['staff'=>$data3];

        return view('admin.restaurants.index',$data,$data2);
    }

    public function create()
    {
        return view('admin.restaurants.create');
    }

    public function store(Request $request)
    {
//        echo $request;
        $restaurant=DB::table('restaurants')->insertGetId([
            'name'=>$request['name'],
            'logo'=>'Original.jpg',
            'phone'=>$request['phone'],
            'address'=>$request['address'],
        ]);

        Staff::create(
            [
                'restaurant_id' => $restaurant,
                'name' => $request['stname'],
                'position' => $request['position'],
                'phone' => $request['phone'],
                'address' => $request['address'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
            ]);
        return redirect()->route('admin.restaurants.index')->with('success','新增成功 !');
    }

    public function edit($id)
    {
        $restaurants=Restaurant::find($id);
        $data = ['restaurants' => $restaurants];
        return view('admin.restaurants.edit', $data);
    }

    public function update(Request $request,$id)
    {
//        echo $request;
        $restaurant=Restaurant::find($id);
        $restaurant->update($request->all());
        return redirect()->route('admin.restaurants.index')->with('success','修改成功 !');
    }

    public function destroy($id)
    {
        Restaurant::destroy($id);
        return redirect()->route('admin.restaurants.index')->with('success','刪除完成 !');
    }

//    public function staff($id)
//    {
//        $restaurants=Restaurant::find($id);
//        $data3=Staff::where('restaurant_id',$id)->get();
//        $data=['staff'=>$data3,'restaurants' => $restaurants];
//        return view('admin.restaurants.status',$data);
//    }

    public function status($id)
    {
        $res = Restaurant::find($id);
        switch ($res['open']){
            case'0':
                $res->open=true;
                $res->save();
                return back()->with('error','您已關閉使用權 !');
                break;
            case'1':
                $res->open=false;
                $res->save();
                return back()->with('success','您已開啟使用權 !');
                break;
        }
        $accounts = Restaurant::all()->where('id',$id);
        return view('admin.restaurants.status',compact('accounts'));
    }
}