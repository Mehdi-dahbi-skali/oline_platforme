@extends('index')

@section('profile')
         
           @if (isset($users))
           @foreach ($users as $user)
           <div class="profile">
            <div class="first">
                 <div class="create">
                    <p>{{ $user->username }}</p>
                    <a href=" mailto:{{ $user->email }} "><p>send email</p></a>
                </div>
           </div>
               @endforeach
           @endif            

        <div class="content">
              <p>content</p>

              <!--poste-->
              @if (isset($contents))
             @foreach ( $users as $user )
               @foreach ( $contents as $content)
               <div class="poste">
                <div class="circle"></div>
                  <div class="second">
                    <p > {{ $user->username }} </p>
                    <div class="box"><img src="{{ Storage::url($content->imageCn->path) }}" alt=""></div>
                     <p class="desc">{{ $content->description }}</p>
          <!-- <div class="carre"></div> -->
         </div>
           </div>
           @endforeach
             @endforeach
              @endif
                    
              <!--end poste-->
           
            </div>
        <div class="product2">
            <p>product</p>

            <!--start of product-->
            @if(isset($products))
            @foreach($products as $product)
            <div class="product_pr">
              <div class="contenaire">
                 <img src="{{ Storage::url($product->imagePr->path) }}" alt="">
              </div>
              <div class="info">
                <a href=" /product_only/{{$product->id}}  "><p> {{$product->title}}</p></a>
                <p class="description"> {{$product->description}}</p>
                <div class="buy">
                  <p>{{$product->prix}}$</p>
                   <!-- <div class="carre2"></div> -->
                </div>
              </div>
           </div>
            @endforeach
            @endif

        </div>
            <!--end of product-->
            
        
  </div> 
    
@endsection