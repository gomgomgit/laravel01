@extends('admin.layouts.app')

@section('content')
<div class="box">
        <div class="box-header with-border">
          @if($message = Session::get('store'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Alert!</h4>
              {{$message}}
            </div>
          @endif
          @if($message = Session::get('update'))
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-info"></i> Alert!</h4>
              {{$message}}
            </div>
          @endif
          @if($message = Session::get('delete'))
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-info"></i> Alert!</h4>
              {{$message}}
            </div>
          @endif
            <a href="{{url('category/create')}}" class="btn btn-primary">
              <i class="fa fa-plus"></i> Tambah
          	</a>
        </div>
        <div class="box-body">
          <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
               	@php
               	$nomor = 1;
               	@endphp
                @foreach($category as $row)
                <tr>
                	<td>{{$nomor++}}</td>
                	<td>{{$row->name}}</td>
                	<td>
                		<a href="{{url('category/edit/'.$row->id)}}">Edit</a> | 
                		<a href="{{url('category/delete/'.$row->id)}}">Delete</a>
                	</td>
                </tr>
                @endforeach

              </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
            {{$category->links()}}
        </div>
        <!-- /.box-footer-->
      </div>
@endsection