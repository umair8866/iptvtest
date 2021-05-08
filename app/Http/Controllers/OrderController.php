<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\Channel;
Use App\Models\Company;
Use App\Models\Movie;
Use App\Models\Category;
Use App\Models\Product;
Use App\Models\Productcat;
Use App\Models\Floor;
Use App\Models\Room;
Use App\Models\Order;
Use App\Models\Order_detail;
Use App\Models\Order_status;
Use App\Models\Guest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator,Redirect,Response;

class OrderController extends Controller
{

    // floors.............
    public function floors(){
        $floors=Floor::all();
        return view('admin/floors',compact('floors'));
    }

    public function addfloorview(){
        return view('admin/addfloor');

    }

    public function addfloor(Request $request){
        $request->validate([
              'floornum' => 'required|unique:floors|max:255',
          ]);
  
        $newfloor=new Floor;
        $newfloor->floornum=$request->floornum;
         $newfloor->save();
  
         return redirect('/admin/floors');
    }

    public function editfloor($id){
        $edit_floor=Floor::find($id);
        return view('admin/editfloor',compact('edit_floor'));
    }

    public function updatefloor(Request $request,$id){
        $request->validate([
            'floornum' => 'required|unique:floors|max:255',
        ]);
        $updatefloor=Floor::find($id);
            $updatefloor->floornum=$request->floornum;
            $updatefloor->save();
        
        return redirect('/admin/floors');
    }

    public function deletefloor($id){
        $delfloor=Floor::find($id);
        $delfloor->delete();
        return redirect('/admin/floors');
    }

    // rooms...........
    public function rooms(){
        $rooms=Room::all();
        return view('admin/rooms',compact('rooms'));
    }

    public function addroomview(){
        $floor=Floor::all();
        return view('admin/addroom',compact('floor'));
    }

    public function addroom(Request $request){
        $request->validate([
              'roomnum' => 'required|unique:rooms|max:255',
              'floor'=>'required',
          ]);
  
        $newroom=new Room;
        $newroom->roomnum=$request->roomnum;
        $newroom->floor_id=$request->floor;
         $newroom->save();
  
         return redirect('/admin/rooms');
    }

    public function editroom($id){
        $edit_room=Room::find($id);
        $floor=Floor::all();
        return view('admin/editroom',compact('edit_room','floor'));
    }

    public function updateroom(Request $request,$id){
        $request->validate([
            'roomnum' => 'required|unique:rooms|max:255',
            'floor'=>'required',
        ]);
        $updateroom=Room::find($id);
            $updateroom->roomnum=$request->roomnum;
            $updateroom->save();
        
        return redirect('/admin/rooms');
    }

    public function deleteroom($id){
        $delroom=Room::find($id);
        $delroom->delete();
        return redirect('/admin/rooms');
    }

    // guests........
    public function guests(){
        $guests=Guest::all();
        return view('admin/guests',compact('guests'));
    }

    public function addguestview(){
        $floor=Floor::all();
        $room=Room::all();
        return view('admin/addguest',compact('floor','room'));

    }

    public function addguest(Request $request){
        $request->validate([
              'userid' => 'unique:users|max:255',
              'userid' => 'unique:guests|max:255',
              'email' => 'unique:users|max:255',
              'email' => 'unique:guests|max:255',
              'firstname'=>'required',
              'lastname'=>'required',
              'guestphone'=>'required',
              'guestpas'=>'required',
              'floor'=>'required',
              'room'=>'required',
              'checkindate'=>'required',
              'checkintime'=>'required',
          ]);
        
        $newuser=new User;
        $newuser->name=$request->firstname.' '.$request->lastname;
        $newuser->email=$request->email;
        $newuser->userid=$request->userid;
        $newuser->password=Hash::make($request->guestpas);
        $newuser->role="2";
        $newuser->save();

        
        $newguest=new Guest;
        $newguest->userid=$request->userid;
        $newguest->firstname=$request->firstname;
        $newguest->lastname=$request->lastname;
        $newguest->email=$request->email;
        $newguest->phone=$request->guestphone;
        $newguest->password=$request->guestpas;
        $newguest->checkin=$request->checkindate;
        $newguest->checkout=$request->checkoutdate;
        $newguest->floor_id=$request->floor;
        $newguest->room_id=$request->room;
         $newguest->save();

         return redirect('/admin/guests');
    }

    public function editguest($id){
        $edit_guest=Guest::find($id);
        $floor=Floor::all();
        return view('admin/editguest',compact('edit_guest','floor'));
    }

    public function updateguest(Request $request,$id){
        $request->validate([
            'guestnum' => 'required|unique:guests|max:255',
            'floor'=>'required',
        ]);
        $updateguest=Guest::find($id);
            $updateguest->guestnum=$request->guestnum;
            $updateguest->save();
        
        return redirect('/admin/guests');
    }

    public function deleteguest($id){
        $delguest=Guest::find($id);
        $usid=$delguest->userid;
        $delusr=User::where('userid',$usid)->delete();
        $delguest->delete();
        return redirect('/admin/guests');
    }

    public function getroomnum(Request $request){
        $id=$request->id;
        $roomnmber=Room::where('floor_id',$id)->get(["id","roomnum"]);
        return response()->json(array('roomnum'=>$roomnmber));
    }
    


}
