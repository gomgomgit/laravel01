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
            <a href="{{url('article/create')}}" class="btn btn-primary">
              <i class="fa fa-plus"></i> Tambah
          	</a>
        </div>
        <div class="box-body">
          <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Category</th>
                  <th>Title</th>
                  <!-- <th>Content</th> -->
                  <th>Created By</th>
                  <th style="width: 140px">Status</th>
                  <th>Action</th>
                </tr>
               	@php
               	$nomor = 1;
               	@endphp
                @foreach($article as $row)
                <tr>
                	<td>{{$nomor++}}</td>
                  <td>{{$row->category->name}}</td>
                	<td>{{$row->title}}</td>
                  <!-- <td>{!!$row->content!!}</td> -->
                  <td>{{$row->user->name}}</td>
                  <td>
                    @if($row->status == 1 )
                      Active
                    @else
                      Not Active
                    @endif
                  </td>
                	<td>
                		<a href="{{url('article/edit/'.$row->id)}}">Edit</a> | 
                		<a href="{{url('article/delete/'.$row->id)}}">Delete</a>
                	</td>
                </tr>
                @endforeach

              </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
          {{$article->links()}}
        </div>
        <!-- /.box-footer-->
      </div>
@endsection