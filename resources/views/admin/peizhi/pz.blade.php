@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       网站配置
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">网站配置</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">网站配置</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(session('info'))
            	<div class="alert alert-danger">
            	{{ session('info') }}
            	</div>
            @endif
            <form action="{{ url('/admin/user/index') }}"  method="post">
            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>网站名</th>
                  <th>关键字</th>
                  <th>网站图片</th>
                  <th>网站版权</th>
                  <th>网站状态</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $key=>$val)
                <tr class="parent">
                  <td class="ids">{{ $val->id }}</td>
                  <td class="name">{{ $val->webname }}</td>
                  <td>{{ $val->keyword }}</td>                  
                  <td><img style="width:35px;" src="/uploads/avatar/{{ $val->logo }}"></td>                                               
                  <td class="ico">{{ $val->copy }}</td>
                  <td class="status">{{ $val->status }}</td>
                  <td><a href="{{ url('/admin/wzxg')}}">编辑</a></td>
                </tr>
               @endforeach
                </tbody>
                
              </table>
            

</script>
@endsection
