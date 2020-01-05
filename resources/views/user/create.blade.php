 @extends('admin.layouts.app')

@section('content')
<div class="box">
        <div class="box-header with-border">
            <a href="{{url('user')}}" class="btn btn-warning">
              <i class="fa fa-arrow-left"></i> Back
          	</a>
            
        </div>
        <div class="box-body">
        	<form role="form" action='{{url("user/store")}}' method="post">
        	@csrf
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
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="password">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
                </div>
								<div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                <label>Tanggal Lahir :</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="datepicker" name="tanggal_lahir">
                </div>
                <!-- /.input group -->
              </div> 
              <div>               
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