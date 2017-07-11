@extends('admin.base')


@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
          <h1>
            广告后台详情表
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">管理信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 广告信息管理</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class="btn btn-primary" href="{{ URL('admin/admin/ad') }}/create">发布广告</a>
                  <div class="box-tools">
                    <form action="" method="get">
                     <input type="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="title" class="form-control input-sm pull-right" placeholder="角色名称"/>
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
                      <th style="width:20px">id号</th>
                      <th style="width:20px">角色名称</th>
                      <th style="width:20px">图片名称</th>
                      <th style="width:20px">简介</th>
                      <th style="width:20px">网站网址</th>
                      <th style="width:20px">添加时间</th>
                      <th style="width:20px">到期时间</th>
                      <th style="width:20px">状态</th>
                      <th style="width:30px">操作</th>
                    </tr>

                    </tr>
                    @foreach($list as $vo)
                    <tr>
                      <td>{{ $vo->id }}</td>
                      <td>{{ $vo->title }}</td>
                      <td><img src="{{asset('uploads')}}/{{ $vo->picname }}" width="50" height="50" /></td> 
                      <td>{{ $vo->desc }}</td>
                      <td>{{ $vo->web_address }}</td>
                      <td>{{ $vo->addtime }}</td>
                      <td>{{ $vo->deadline }}</td>
                      <td>{{ $vo->status }}</td>
                      <td><a class="btn btn-xs btn-danger"  href="javascript:doDel({{ $vo->id }})">删除</a> 
                          <a class="btn btn-xs btn-primary" href="{{ URL('admin/admin/ad') }}/{{ $vo->id }}/edit">编辑</a> 
                        
                    </tr>
                    @endforeach

                  </table>
                  {{ $list->appends($params)->links() }}
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->

            </div><!-- /.col --> 
          </div><!-- /.row -->
        </section><!-- /.content -->
        
    @endsection
    
    @section('myscript')
    <!--  form表单是用来删除的  -->
        <form style="display:none;" action="" name="myform" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">New message</h4>
          </div>
          <div class="modal-body">
           <!-- 此处填充 -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" onclick="saveNode()" class="btn btn-primary">保存</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
        function doDel(id){
            Modal.confirm({msg: "是否删除信息？"}).on(function(e){
                if(e){
                     document.myform.action = "{{URL('/admin/admin/ad')}}/"+id;
                     document.myform.submit();
                    //var form = document.myform;
                    //form.action = "{{URL('/admin/admin/destroy')}}/"+id;
                    //form.submit(); 
                }
              });
        }
        
        function loadNode(rid,name){
            $("#exampleModalLabel").html(name+"的操作节点管理");
            $("#exampleModal").modal("show");
            $.ajax({
                url:"{{URL('admin/role/loadNode')}}/"+rid,
                type:"get",
                dataType:"html",
                async:true,
                success:function(data){
                  $("#exampleModal .modal-body").html(data);   
                },
             });
        }
        
        //保存节点信息
        function saveNode(){
            $.ajax({
                url:"{{URL('admin/role/saveNode')}}",
                type:"post",
                dataType:"html",
                data:$("#nodelistform").serialize() ,
                async:true,
                success:function(data){
                    $('#exampleModal').modal('hide');
                    Modal.alert({msg:data,title: ' 信息提示',btnok: '确定',btncl:'取消'});
                },
             });
             
        }
        
    </script>
    @endsection