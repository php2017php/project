@extends('admin.layout')

@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        广告添加
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">广告添加</a></li>
        <li class="active">添加</li>
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
              <h3 class="box-title">添加</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="post" action="{{ url('/admin/dogg')}}">
              {{ csrf_field() }}
       
              <input type="hidden" name="id" value="">
               

                <div class="form-group">
                  <label for="exampleInputEmail1">广告名称</label>
                 <input type="text" name="adname"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">广告内容</label>
                 <input type="text"  name="adkey"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">LOGO</label>
                  <input type="file" name="adlogo" id="exampleInputFile">

                  <p class="help-block">选择你的LOGO</p>
                </div>
              </div>
              <!-- /.box-body -->


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">添加</button>
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