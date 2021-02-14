@extends('layouts.app')

@section('content')



<div class="py-7">

   <div class="col-md-12 col-sm-12 col-xs-12">

     <!-- Alert message (start) -->
     @if(Session::has('message'))
     <div class="alert {{ Session::get('alert-class') }}">
        {{ Session::get('message') }}
     </div>
     @endif
     <!-- Alert message (end) -->
      
     <form action="" method="post" >
{{csrf_field()}}
       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Title <span class="required">*</span></label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="title" class="p-2" name="title" placeholder="Enter Post Title" required="required" type="text" value="{{old('title',$post->title)}}">

            @if ($errors->has('post'))
               <span class="errormsg">{{ $errors->first('post') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Post
</label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name='post' rows="10" id='post' class='p-2' placeholder="Enter post">{{old('post',$post->post)}}</textarea>

            @if ($errors->has('post'))
               <span class="errormsg">{{ $errors->first('post') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
          <div class="col-md-6">
            <input type="submit" name="submit" value='Update' class="p-2 my-2 rounded text-white bg-green-500">
          </div>
           <a href="/home" class="p-2 my-2 rounded text-white bg-red-500">Back</a>
       </div>

     </form>

   </div>
</div>

@stop



