<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;


class peopleController extends Controller
{
   public function show(){
    $users = DB::table('people')->get();
    // return $users;
    return view('page',['data'=>$users]);
   }

   public function singleUser(string $id){
    $users = DB::table('people')
    ->where('id', $id)
    ->get();
    return view('viewpage',['data'=>$users]);
  }

  public function addUser(Request $req){
    $user = DB::table('people')
    ->insertOrIgnore([
        'name'=>$req->name,
        'email'=>$req->email,
          'age'=>$req->age,
         'city'=>$req->city,
        'phone'=>$req->phone
    ]);
    if($user){
     return redirect()->route('home');
    }
    else{
        echo "<h1> Data Added fail</h1>";
    }

  }
  public function updatePage(string $id){
    // $users = DB::table('people')->where('id', $id)->get();
    $users = DB::table('people')->find($id);
    return view('update',['data'=>$users]);
    // return $users;
  }

  public function updateUser(Request $req, $id){
    $user = DB::table('people')
    ->where('id', $id)
    ->update([
        'name'=>$req->name,
        'email'=>$req->email,
          'age'=>$req->age,
         'city'=>$req->city,
        'phone'=>$req->phone
    ]);
    if($user){
        return redirect()->route('home');
        // echo "<h1>Data updated</h1>";
    }
    else{
        echo "<h1>Data failed to update</h1>";
    }
  }

  public function singleDelete(string $id){
    $user = DB::table('people')
    ->where('id', $id)
    ->delete();

    if($user){
        return redirect()->route('home');

        // echo "<h1>Data updated</h1>";
    }
    else{
        echo "<h1>Data failed to update</h1>";
    }
  }

  public function deleteUser(){
    $user = DB::table('people')
    ->truncate();
  }
}
