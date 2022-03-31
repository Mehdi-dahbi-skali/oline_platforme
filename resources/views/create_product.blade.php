@extends('index')

@section('create_product')
<div class="create_post">
    <p>create product</p>
    <div class="create">
        @foreach ($errors->all() as $error) )
            <p class="error" > {{ $error }} </p>
         @endforeach
        <form method="POST" action="{{ route('store_product') }}" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <p>title</p>
                <input type="text" name="title">
            </div>

            <div class="create_product">
                <p>description</p>
                <textarea name="desc" id="" cols="30" rows="5"></textarea>
            </div>

            <div class="cree_prix">
                <p>prix</p>
                <input type="number" name="prix">
            </div>
            <div class="last">
                <input  type="file" id="myfile" name="myfile" accept="image/*">
                <label for="myfile">image</label>
                <button>cree</button>
            </div>
        </form>
    </div>
</div>
@endsection