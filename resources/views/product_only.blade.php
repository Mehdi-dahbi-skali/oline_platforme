@extends('index')
@section('product')
          @foreach ($products as $product)
          <div class="product_only">
            <div class="poste_img"><img src="{{ Storage::url($product->imagePr->path) }}" alt="image_product"></div>
             <div class="left_product">
                  <p> {{ $product->title }} </p>
                  <div class="desc"><p> {{ $product->description }} </p></div>
                  <div class="prr">
                    <p id="prix">{{ $product->prix }}$</p>
                    <p>buy</p>
                  </div>
                  <!-- <div class="carre2"></div> -->
              </div>
        </div>
           @endforeach
@endsection