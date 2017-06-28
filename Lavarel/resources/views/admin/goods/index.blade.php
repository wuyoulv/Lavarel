@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            信息输出表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">商品信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 商品信息管理</h3>
                  <div class="box-tools">
                    <form action="{{url('admin/stu')}}" method="get">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="name" class="form-control input-sm pull-right" placeholder="学员姓名"/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">ID</th>
                      <th>商品名称</th>
                      <th>类别</th>
                      <th>图片</th>
                      <th>单价</th>
                      <th>库存量</th>
                      <th>购买量</th>
                      <th>点击量</th>
                      <th>状态</th>
                      <th>发布时间</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    @foreach($list as $v)
                    <tr>
                      <td>{{$v->id}}</td>
                      <td>{{$v->goods}}</td>
                      <td>{{$v->typename}}</td>
                      <td><img src="{{asset('uploads/goods/s_'.$v->picname)}}"/></td>
                      <td>{{$v->price}}</td>
                      <td>{{$v->store}}</td>
                      <td>{{$v->num}}</td>
                      <td>{{$v->clicknum}}</td>
                      <td>{{$v->state}}</td>
                      <td>{{$v->addtime}}</td>
                      <td><button onclick="doDel({{$v->id}})" class="btn btn-xs btn-danger">删除</button> 
                      <button class="btn btn-xs btn-primary">编辑</button> </td>
                    </tr>
                    @endforeach
                  
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                 {!! $list->render() !!}
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    @endsection
    
    
    @section("myscript")
      <script type="text/javascript">
            function doDel(id){
                if(confirm('确定要删除吗？')){
                    $("#mydeleteform").attr("action","{{url('admin/goods')}}/"+id).submit(); 
                }
            }
      </script>
    @endsection