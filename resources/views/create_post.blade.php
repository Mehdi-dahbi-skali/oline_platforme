@extends('index')

@section('create_post')
    
    <div class="create_post">
        <p>create content</p>
        <div class="create">
            @foreach ($errors->all() as $error) )
            <p class="error" > {{ $error }} </p>
         @endforeach
            <form method="post" action="{{ route('store_post') }}" enctype="multipart/form-data" >
                @csrf
                <div class="title">
                    <p>title</p>
                    <input name="title" type="text">
                </div>
                <div class="create_product">
                    <p>content</p>
                    <textarea name="desc" id="" cols="30" rows="5"></textarea>
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