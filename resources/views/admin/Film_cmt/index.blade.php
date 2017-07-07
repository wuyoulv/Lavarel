@extends('admin.base')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            影评信息表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">影评预览</a></li>
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                       <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">分类名 <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                          @foreach($type_table as $type)
                            <li><a href="{{url('admin/cmt/type')}}/{{$type->id}}">{{$type->type}}</a></li>
                           @endforeach
                          </ul>
                          <!-- 引入jquery -->
                        <script src="{{asset('./js/jquery-1.8.3.min.js')}}">
                        </script>        
                         <!-- 设置分类下拉框 -->
                        <script>
                        $('.dropdown-menu li a').click(function(){
                            var url = $(this).attr('href');
                            //切割字符串为数组
                            var arr = url.split('/');
                            //弹出最后的id参数
                            var data = arr.pop();
                           console.log(data);
                                $.ajax({
                                    url:url,
                                    data:data,
                                    type:'get',
                                    async: true,
                                    success:function(mes){
                                    // alert(mes);
                                    }
                                  });                               
                                return false;
                        });
                          
                        </script>
                  <div class="box-tools">
                    <form action="{{url('admin/cmt')}}" method="get">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="title" class="form-control input-sm pull-right" placeholder="视频名称"/>
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
                      <th>评论ID</th>
                      <th>用户</th>
                      <th>片名</th>
                      <th>评论时间</th>
                      <th>评论内容</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    @foreach($cmt as $stu)
                        <tr>
                            <td>{{$stu->id}}</td>
                            <td>{{$stu->user_id}}</td>
                            <td>{{$stu->title}}</td>
                            <td>{{$stu->time}}</td>
                            <td>{{$stu->text}}</td>
                            <td> <a href="{{url('admin/cmt/del')}}/{{$stu->id}}">删除</a> | <a href="{{url('admin/cmt/edit')}}/{{$stu->id}}">编辑</a></td>
                            
                        </tr>
                    @endforeach
                  
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                {{$cmt->appends($where)->links()}}
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