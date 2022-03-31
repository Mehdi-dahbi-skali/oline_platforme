@extends('index')

@section('contenant')



 <div class="left">
   <div class="content">
    <p>content</p>
     
    <!--poste-->

    @if (isset($users))
    
    @foreach ($users as $user)
    @foreach ($contents as $content )
      @if ($user->id == $content->user_id)
      <div class="poste">
        <div class="circle"></div>
        <div class="second">
          <p ><a href="/profielof/{{$user->id}}">{{$user->username}}</a></p>
           <div class="box"><img src="{{ Storage::url($content->imageCn->path) }}" alt=""></div>
          <p class="desc">{{ $content->description }}</p>
        
          <!-- <div class="carre"></div> -->
       </div>
     </div>
     @else 
           
      @endif
    @endforeach
  @endforeach
    @endif
  
    <!--end poste-->
  
    <div class="product">
      <p>product</p>

    @if (isset($products))
         
        @foreach ($products as $product) )
        <div class="product_pr">
         <div class="contenaire">
            <img src="{{ Storage::url($product->imagePr->path) }}" alt="image_product">
         </div>
         <div class="info">
           <a href=" /product_only/{{$product->id}} "><p>{{ $product->title }}</p></a>
           <p class="description"> {{ $product->description }}</p> </p>
           <div class="buy">
             <p> {{ $product->prix}}$</p>
             <!-- <div class="carre2"></div> -->
           </div>
         </div>
     </div>
        @endforeach
       
      @endif
     
    </div>
   </div>           
 </div>

@endsection


@section('users')
    <div class="users">
      <p>Users</p>
        <div class="TopUser">
         <!--user-->
         @if(isset($users))
         @foreach($users as $user)
           <div class="pr">
             <div class="circle"></div>
             <p><a href="/profielof/{{$user->id}}">{{ $user->username }}</a></p>
            </div>
             @endforeach
             @endif
         <!--end user-->
        </div>
        
    </div>
@endsection

