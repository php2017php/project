@extends('admin.layout')

@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        用户管理
        <small>修改</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页 </a></li>
        <li><a href="#">用户管理</a></li>
        <li class="active">修改</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">快速修改</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="post" action="{{ url('/admin/user/insert')}}">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for="exampleInputName">用户名</label>
                  <input type="text" value="{{ $data->name }}"  name="name"  class="form-control" id="exampleInputEmail1" placeholder="请输入用户名">
                </div>
              <div class="box-body">
                          @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <div class="form-group">
                  <label for="exampleInputEmail1">邮箱</label>
                  <input type="email" value="{{  $data->email  }}" name="email" class="form-control" id="exampleInputEmail1" placeholder="请输入邮箱">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">密码</label>
                  <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码">
                </div>
                  <div class="form-group">
                  <label for="exampleInputPassword2">确认密码</label>
                  <input type="password" value="{{ old('re_password') }}"  name="re_password" class="form-control" id="exampleInputPassword2" placeholder="请输入密码">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">头像</label>
                  <input type="file" name="avatar" id="exampleInputFile">

                  <p class="help-block">选择你的图片</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        



        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection