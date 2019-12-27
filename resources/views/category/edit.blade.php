@extends('admin.layouts.app')

@section('content')
<div class="box">
        <div class="box-header with-border">
            <a href="{{url('category/create')}}" class="btn btn-primary">
              <i class="fa fa-plus"></i> Tambah
          	</a>
            
        </div>
        <div class="box-body">
        	<form role="form" action='/category/update/{{($category->id)}}' method="post">
        	@csrf
              <div class="box-body">
                <input type="hidden" name="id" value="{{$category->id}}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" name="name" value="{{$category->name}}">
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