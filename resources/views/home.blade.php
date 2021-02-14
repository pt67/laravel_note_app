@extends('layouts.app')

@section('content')
<div class="container flex justify-center">
    <div class="grid justify-content-center">
        <div class="grid-8">
            <div class="grid">
                <div class="card-body py-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                             {{ success }}
                        </div>
                    @endif

                <form method="POST" action="/home" >
                 {{ csrf_field() }}
<input type="text" class="mr-60 p-2 w-full border-0" placeholder="Title" name="title"><br>
                <textarea cols="69" rows="7" class="border p-2" placeholder="Text goes here.." name="post"></textarea>

<div class="pl-80">                <button type="submit" style="margin-top:-45px;" type="submit" class="ml-60 rounded-full h-20 w-20 flex items-center justify-center...">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="green">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
</svg>
</button></div>
                </form>
                 
                </div>

                <div class="lists m-auto" style="width:40rem;">
                    @foreach($post as $pos)
                  <div class="item w-40 h-40 bg-white p-2 m-2"  style="overflow:hidden !important; float:left; ">
                      <a href="/home/edit/{{ $pos->id }}" style="color:green"><svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
</svg></a>
                      <a href="/home/delete/{{ $pos->id }}">Delete</a>
                      <h2 class="text-blue-400">{{ $pos->title  }}</h2>
                      <p>{{ $pos->post }}</p>
                   </div> 
                   @endforeach
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
