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
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function dashboard(){
        return view('/admin/dashboard'); 
    }

    public function videoplayer(){    
        $company_main=Company::all();
        $channel_main=Channel::all();
        return view('videoplayer',compact('company_main','channel_main'));
    }

    // channels............

    public function channels(){
        $channels=Channel::all();
        return view('admin/channels',compact('channels'));
    }

    public function addchannelview(){
        return view('admin/addchannel');
    }

    public function addchannel(Request $request){
      $request->validate([
            'chanelname' => 'required|max:255',
            'chanelurl' => 'required',
            'logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $newchanel=new Channel;
        $newchanel->name=$request->chanelname;
        $newchanel->url=$request->chanelurl;
        $image=$request->chanelname.'-'.time().'.'.$request->logo->getClientOriginalExtension();
        $movetofolder=$request->logo->move(public_path('images'),$image);
        $newchanel->logo=$image;
        $newchanel->save();

        return redirect('/admin/channels');
    }

    public function getvideourl(Request $request){
        $video=Channel::find($request->id);
        $url=$video->url;

        return response()->json(array('url'=>$url));
    }

    public function editchannel($id){
        $edit_chanel=Channel::find($id);
        return view('admin/editchannel',compact('edit_chanel'));
    }

    public function updatechannel(Request $request,$id){
        $request->validate([
            'chanelname' => 'required|max:255',
            'chanelurl' => 'required',
            'logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $updatech=Channel::find($id);
        if($request->logo){
        $updatech->name=$request->chanelname;
        $updatech->url=$request->chanelurl;
        $image=$request->channelname.'-'.time().'.'.$request->logo->getClientOriginalExtension();
        $movetofolder=$request->logo->move(public_path('images'),$image);
        $updatech->logo=$image;
        $updatech->save();
        }
        else{
            $updatech->name=$request->chanelname;
            $updatech->url=$request->chanelurl;
            $updatech->save();
        }
        return redirect('/admin/channels');
    }

    public function deletechannel($id){
        $delch=Channel::find($id);
        $delch->delete();
        return redirect('/admin/channels');
    }

    // company....................

    public function company(){
        
        $companies=Company::all();
        return view('admin/company',compact('companies'));
        
    }

    public function addcompanyview(){
        
        return view('admin/addcompany');
        
    }

    public function addcompany(Request $request){
        $request->validate([
              'companyname' => 'required|max:255',
              'clogo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
  
          $newcompany=new Company;
          $newcompany->cname=$request->companyname;
          $cimage=$request->companyname.'-'.time().'.'.$request->clogo->getClientOriginalExtension();
          $movetofolder=$request->clogo->move(public_path('images'),$cimage);
          $newcompany->clogo=$cimage;
          $newcompany->save();
  
          return redirect('/admin/company');
      }

    public function editcompany($id){
        $edit_company=Company::find($id);
        return view('admin/editcompany',compact('edit_company'));
    }

    public function updatecompany(Request $request,$id){
        $request->validate([
            'companyname' => 'required|max:255',
            'clogo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $updatecom=Company::find($id);
        if($request->clogo){
        $updatecom->cname=$request->companyname;
        $image=$request->companyname.'-'.time().'.'.$request->clogo->getClientOriginalExtension();
        $movetofolder=$request->clogo->move(public_path('images'),$image);
        $updatecom->clogo=$image;
        $updatecom->save();
        }
        else{
            $updatecom->cname=$request->companyname;
            $updatecom->save();
        }
        return redirect('/admin/company');
    }

    public function deletecompany($id){
        $delcom=Company::find($id);
        $delcom->delete();
        return redirect('/admin/company');
    }


    // movies category ................

    public function category(){
        
        $categories=Category::all();
        return view('admin/categories',compact('categories'));
       
    }

    public function addcategoryview(){
        
        return view('admin/addcategory');

    }

    public function addcategory(Request $request){
        $request->validate([
              'categoryname' => 'required|max:255',
          ]);
  
        $newcat=new Category;
        $newcat->name=$request->categoryname;
        $newcat->save();
  
        return redirect('/admin/categories');
    }

    public function editcategory($id){
        $edit_category=Category::find($id);
        return view('admin/editcategory',compact('edit_category'));
    }

    public function updatecategory(Request $request,$id){
        $request->validate([
            'categoryname' => 'required|max:255',
        ]);
        $updatecat=Category::find($id);
            $updatecat->name=$request->categoryname;
            $updatecat->save();
        
        return redirect('/admin/categories');
    }

    public function deletecategory($id){
        $delcat=Category::find($id);
        $delcat->delete();
        return redirect('/admin/categories');
    }


    // movies...................................
    
    public function movie(){
        
        $movies=Movie::all();
        return view('admin/movies',compact('movies'));
    }

    public function addmovieview(){
        
        $category=Category::all();
        return view('admin/addmovie',compact('category'));

    }

    public function addmovie(Request $request){
        $request->validate([
              'moviename' => 'required|max:255',
              'category' => 'required',
              'poster'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              'movie'=>'mimetypes:video/WebM,video/mp4,video/ogg|max:200000',
          ]);
  
  $newmovie=new Movie;
  $newmovie->name=$request->moviename;
  $newmovie->cat_id=$request->category;
  $movie=$request->moviename.'-'.time().'.'.$request->movie->getClientOriginalExtension();
  $movetofoldermovie=$request->movie->move(public_path('videos'),$movie);
  $newmovie->movie=$movie;
  $poster=$request->moviename.'-'.time().'.'.$request->poster->getClientOriginalExtension();
  $movetofolderposter=$request->poster->move(public_path('images'),$poster);
  $newmovie->poster=$poster;
  
  $newmovie->save();
  
  return redirect('/admin/movies');
}

    public function editmovie($id){
        $edit_movie=Movie::find($id);
        $catgory=Category::all();
        return view('admin/editmovie',compact('edit_movie','catgory'));
    }

    public function updatemovie(Request $request,$id){
        $request->validate([
            'moviename' => 'required|max:255',
            'category' => 'required',
            'poster'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'movie'=>'mimetypes:video/WebM,video/mp4,video/ogg|max:200000',
        ]);
        $updatemov=Movie::find($id);
        if($request->poster && $request->movie){
        $updatemov->name=$request->moviename;
        $updatemov->cat_id=$request->category;
        $postermov=$request->moviename.'-'.time().'.'.$request->poster->getClientOriginalExtension();
        $movetofolder=$request->poster->move(public_path('images'),$postermov);
        $updatemov->poster=$postermov;

        $movie=$request->moviename.'-'.time().'.'.$request->movie->getClientOriginalExtension();
        $movetofoldermovie=$request->movie->move(public_path('videos'),$movie);
        $newmovie->movie=$movie;

        $updatemov->save();
        }
        else if($request->poster){
            $updatemov->name=$request->moviename;
            $updatemov->cat_id=$request->category;
            $poster=$request->moviename.'-'.time().'.'.$request->poster->getClientOriginalExtension();
            $movetofolder=$request->poster->move(public_path('images'),$poster);
            $updatemov->poster=$poster;
            $updatemov->save();
            }

        else if($request->movie){
                $updatemov->name=$request->moviename;
                $updatemov->cat_id=$request->category;
                $movie=$request->moviename.'-'.time().'.'.$request->movie->getClientOriginalExtension();
                $movetofoldermovie=$request->movie->move(public_path('videos'),$movie);
                $updatemov->movie=$movie;
        
                $updatemov->save();
                }
        else{
            $updatemov->name=$request->moviename;
            $updatemov->cat_id=$request->category;
            $updatemov->save();
        }
        return redirect('/admin/movies');
    }

    public function deletemovie($id){
        $delmov=Movie::find($id);
        $delmov->delete();
        return redirect('/admin/movies');
    }


    // Product categories..................
    
    public function pcategory(){
        
        $pcategories=Productcat::all();
        return view('admin/pcategories',compact('pcategories'));
    }

    public function addpcategoryview(){
        
        return view('admin/addpcategory');

    }

    public function addpcategory(Request $request){
        $request->validate([
              'pcategoryname' => 'required|max:255',
              'pcategorytime' => 'required|max:255',
          ]);
    
    $newpcat=new Productcat;
    $newpcat->name=$request->pcategoryname;
    $newpcat->time=$request->pcategorytime;
    $newpcat->save();;
    
    return redirect('/admin/pcategories');
    }

    public function editpcategory($id){
        $edit_pcategory=Productcat::find($id);
        return view('admin/editpcategory',compact('edit_pcategory'));
    }

    public function updatepcategory(Request $request,$id){
        $request->validate([
            'pcategoryname' => 'required|max:255',
            'pcategorytime' => 'required|max:255',
        ]);
        $updatepcat=Productcat::find($id);
            $updatepcat->name=$request->pcategoryname;
            $updatepcat->time=$request->pcategorytime;
            $updatepcat->save();
        
        return redirect('/admin/pcategories');
    }

    public function deletepcategory($id){
        $delpcat=Productcat::find($id);
        $delpcat->delete();
        return redirect('/admin/pcategories');
    }


    // products.......

    public function product(){
        
        $products=Product::all();
        return view('admin/products',compact('products'));

    }

    public function addproductview(){
        
        $productcategory=Productcat::all();
        return view('admin/addproduct',compact('productcategory'));

    }    

    public function addproduct(Request $request){
        $request->validate([
              'productname' => 'required|max:255',
              'productprice' => 'required|max:255',
              'productcategory' => 'required',
              'productpic'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
  
          $newproduct=new Product;
          $newproduct->name=$request->productname;
          $newproduct->price=$request->productprice;
          $newproduct->pcat_id=$request->productcategory;
          $pimage=$request->productname.'-'.time().'.'.$request->productpic->getClientOriginalExtension();
          $movetofolder=$request->productpic->move(public_path('images'),$pimage);
          $newproduct->picture=$pimage;
          $newproduct->save();
  
          return redirect('/admin/products');
      }

    public function editproduct($id){
        $edit_product=Product::find($id);
        $productcategory=Productcat::all();
        return view('admin/editproduct',compact('edit_product','productcategory'));
    }

    public function updateproduct(Request $request,$id){
        $request->validate([
            'productname' => 'required|max:255',
            'productprice' => 'required|max:255',
            'productcategory' => 'required',
            'productpic'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $updateproduct=Product::find($id);
        if($request->productpic){
            $updateproduct->name=$request->productname;
            $updateproduct->price=$request->productprice;
            $updateproduct->pcat_id=$request->productcategory;
            $pdimage=$request->productname.'-'.time().'.'.$request->productpic->getClientOriginalExtension();
            $movetofolder=$request->productpic->move(public_path('images'),$pdimage);
            $updateproduct->picture=$pdimage;
            $updateproduct->save();
        }
        else{
            $updateproduct->name=$request->productname;
            $updateproduct->price=$request->productprice;
            $updateproduct->pcat_id=$request->productcategory;
            $updateproduct->save();
        }
        return redirect('/admin/products');
    }

    public function deleteproduct($id){
        $delproduct=Product::find($id);
        $delproduct->delete();
        return redirect('/admin/products');
    }

}
