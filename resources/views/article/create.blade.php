@extends('admin.layouts.app')

@section('content')
<div class="box">
        <div class="box-header with-border">
            <a href="{{url('article')}}" class="btn btn-warning">
              <i class="fa fa-arrow-left"></i> Back
          	</a>
            
        </div>
        <div class="box-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        	<form role="form" action='{{url("article/store")}}' method="post">
        	@csrf
            <div>
                <div class="form-group">
                <label>Category</label>
                <select class="form-control select2" style="width: 100%;" name="category">
                  <option value="" selected>-- Pilih Category --</option>
                  @foreach($category as $cate)
                  <option value="{{$cate->id}}">{{$cate->name}}</option>
                  @endforeach
                </select>
                </div>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
                </div>
                <label for="tearea">Content</label>
                <textarea id="tearea" name="content" rows="10" cols="80">
                  
                </textarea>
                <div class="form-group">
                <label>Created By</label>
                <select class="form-control select2" style="width: 100%;" name="cby">
                  <option value="" selected>-- Author --</option>
                  @foreach($user as $author)
                  <option value="{{$author->id}}">{{$author->name}}</option>
                  @endforeach
                </select>
                </div>
                <div class="form-group">
                <label>
                  <input type="radio" name="status" class="flat-red" value=1>
                  Active
                </label>
                <label>
                  <input type="radio" name="status" class="flat-red" value=0>
                  Not Active
                </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
@endsection