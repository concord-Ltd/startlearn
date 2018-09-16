@extends('admin.master')

@section('mainContent')

<h1>Add Category</h1>

   <div style="width: 50%; margin: 0 auto;">
<h3>{{Session::get('msg')}}</h3>


<!--  <form class="form-inline" action="/action_page.php"> -->
    {!! Form::open(['url' => '/save-category', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
                    <!-- <form ="" class="" method="POST" action="{{ route('login') }}"> -->
   <!--    {{ csrf_field() }} -->

  <div class="form-group">
    <label for="sel1">Product:</label>
    <input type="text" class="form-control" name="categoriesName" id="categoriesName">
  </div>
  <div class="form-group">
    <label for="sel1">Description:</label>
    
    <textarea class="form-control" name="categoryDescription" id="categoryDescription"></textarea>
  </div>
 <div class="form-group">
  <label for="sel1">Publication Status:</label>
  <select class="form-control" name="publicationStatus" id="publicationStatus">
    <option value="1">Published</option>
    <option value="0">Unpublished</option>

  </select>
</div> 

  <button type="submit" class="btn btn-success btn-block">Submit</button>

{!! Form::close() !!}
</div>
@endsection