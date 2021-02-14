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
                 
                </div>
                 @if(isset($details))
                <div class="lists m-auto" style="width:40rem;">
                   @foreach($details as $p)
                  <div class="item w-40 h-40 bg-white p-2 m-2"  style="overflow:hidden !important; float:left; ">
<a href="/home/edit/{{ $p->id }}" style="color:green"><svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
</svg></a>
                      <h2 class="text-blue-400">{{ $p->title }}</h2>
                      <p>{{ $p->post }}</p>
                   </div> 
                   @endforeach
                </div>
                @else
                 <div class="">
                 No result found.
                 </div>
           
                @endif   
            </div>
        </div>
    </div>
</div>
@endsection
