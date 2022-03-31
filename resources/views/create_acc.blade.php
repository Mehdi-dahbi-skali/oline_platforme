@extends('index')

@section('create_acc')
    
<div class="createacc">
    <form action="{{ route('store_acc')}}" method="POST">
        @csrf
       <div class="username">
            <i class="far fa-user"></i>
            <input type="text" placeholder="username" name="username" >
        </div>

        <div class="email">
            <i class="fas fa-lock"></i>
            <input type="email" name="email" placeholder="email">
         </div>

        <div class="password">
           <i class="fas fa-lock"></i>
           <input type="password" name="password" placeholder="password">
        </div>

        @foreach ($errors->all() as $error) )
                   <p class="error" > {{ $error }} </p>
                @endforeach
                
        <button>create</button>
    </form>
    
</div>

@endsection