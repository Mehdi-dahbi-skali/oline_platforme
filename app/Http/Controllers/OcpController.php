<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\content;
use App\Models\imageCn;
use App\Models\imagePr;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OcpController extends Controller
{
    public function welcome(){
        $users = User::all();
        $contents= content::all();
        $products= product::all();
        $user=$users;
        $content =$contents;
        $product=$products;
        return view('welcome_components/all',[
            'users' => $users,
            'contents' => $contents,
            'products' => $products,
            $content,
            $user,
            $product, 
            
        ]);
    }

    public function profile(){
        $products = product::where('user_id' , session('id'))->get();
        $product = $products;
        $users = User::where('id', session('id'))->get();
        $contents= content::where('user_id', session('id'))->get();
        $user=$users;
        $content =$contents;
        
        return view('profile',[
            'products' => $products,
            'users' => $users,
            'contents' => $contents,
             $product,
             $user,
             $contents,
        ]);
    }
    
    public function create_acc(){
        return view('create_acc');
    }


    public function store_acc(Request $request){

        $request->validate([
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $create = User::create([
             'username' => $request->username,
             'email' => $request->email,
             'password' => $request->password,
        ]);
        if ( $create ) {
            return view('login');
        }
        
        
    }

   

    public function store_product(Request $request){
          $request->validate([
              'title' => ['required'],
              'desc' => ['required'],
              'prix' => ['required'],
              'myfile' => ['required'],
          ]);

          $filename= time() . '.' . $request->myfile->extension();  
          
          $path= $request->file('myfile')->storeAs(
              'Primage',
               $filename,
              'public',
          );

          $product = product::create([
              'title' => $request->title,
              'description' => $request->desc,
              'prix' => $request->prix,
          ]);
          
          $users = User::all();
          foreach ($users as $user){
                 if ($user->id == session('id')) {
                     $user->products()->save($product);
                 }
          }

          
          

          $image = new imagePr();
          $image->path =$path;
        
          $product->imagePr()->save($image);

          return view('profile');

    }

    public function create_post(){
        return view('create_post');
    }

    

     public function store_post(Request $request){
        $request->validate([
            'title' => ['required'],
            'desc' => ['required'],
            'myfile' => ['required'],
        ]);

        $filename= time() . '.' . $request->myfile->extension(); 
          
          $path= $request->file('myfile')->storeAs(
              'Cnimage',
               $filename,
              'public',
          );

          $post = content::create([
            'title' => $request->title,
            'description' => $request->desc,
        ]);

        $users = User::all();
          foreach ($users as $user){
                 if ($user->id == session('id')) {
                     $user->contents()->save($post);
                 }
          }

          $image = new imageCn();
          $image->path =$path;
        
          $post->imageCn()->save($image);

          return view('profile');
        
    }

    public function product_only($id){

        $products = product::where('id', $id)->get();
        $product= $products;
        return view('product_only',[
            'products' => $products,
            $product,
        ]);
    }

    public function create_product(){
        return view('create_product');
    }

    public function profielof($id) {
        $products = product::where('user_id' , $id )->get();
        $product = $products;
        $users = User::where('id', $id)->get();
        $contents= content::where('user_id', $id)->get();
        $user=$users;
        $content =$contents;
        
        return view('ProfileOfUser',[
            'products' => $products,
            'users' => $users,
            'contents' => $contents,
             $product,
             $user,
             $contents,
        ]);
    }

}
