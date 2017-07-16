@extends('admin.base')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            影片分类表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">分类预览</a></li>
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 分类浏览</h3>
                  <div class="box-tools">
                    <form action="{{url('admin/type')}}" method="get">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="type" class="form-control input-sm pull-right" placeholder="分类"/>
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
                      <th>分类ID</th>
                      <th>类型</th>
                      <th>添加时间</th>
                      <th>修改时间</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    @foreach($list as $stu)
                        <tr>
                            <td>{{$stu->id}}</td>
                            <td>{{$stu->type}}</td>
                            <td>{{$stu->addtime}}</td>
                            <td>{{$stu->edittime}}</td>
                            <td> <button onclick="doDel({{$stu->id}})" class="btn btn-xs btn-danger">删除</button>
                            <button onclick="doEdit({{$stu->id}})" class= "btn btn-xs btn-primary">编辑</button></td>
                            
                        </tr>
                    @endforeach
                  
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                {{$list->appends($where)->links()}}
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>
    @endsection

        @section("myscript")
      <script type="text/javascript">
            function doDel(id){
            Modal.confirm({msg:'是否删除此类别？'}).on(function (e){
                if(e){
                    var form = document.getElementById("mydeleteform");
                    form.action = "{{URL('/admin/type/del')}}/"+id;
                    form.submit(); 
                }
            });
           
        }

         function doEdit(id){
              var form = document.getElementById('mydeleteform');
              form.action = "{{url('/admin/type/edit')}}/"+id;
              form.submit();

            }

    </script>
    @endsection