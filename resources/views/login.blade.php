@extends('index')

@section('login')
       
       <div class="login">
           <form method="post" action="{{ route('checkacc')}}">
            @csrf
              <div class="username">
                   <i class="far fa-user"></i>
                   <input name="username" type="text" placeholder="username">
               </div>
    
               <div class="password">
                  <i class="fas fa-lock"></i>
                  <input name="password" type="password" placeholder="password">
               </div>
                 @foreach ($errors->all() as $error) )
                   <p class="error" > {{ $error }} </p>
                @endforeach
               <button>login</button>
               <a href="{{ route('create_acc') }}">create account</a>
           </form>
           
       </div>

@endsection