@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            视频信息表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页 </a></li>
            <li><a href="#">视频信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <script type="text/javascript">
            function doDel(id){
                document.myform.action="/admin/film_info/"+id;
                document.myform.submit();
            }
        </script>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 视频信息管理</h3>
                  <div class="box-tools">
                    <form action="/admin/film_info" method="get">
                        <div class="input-group" style="width: 150px;">
                          <input type="text" name="title" class="form-control input-sm pull-right" placeholder="电影名"/>
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
                    <th>ID</th>
                    <th>电影名</th>
                    <th>海报名</th>
                    <th>类型</th>
                    <th>导演</th>
                    <th>演员</th>
                    <th>首映时间</th>
                    <th>时长</th>
                    <th>地区</th>
                    <th>语言</th>
                    <th>简介</th>
                    <th>权限</th>
                    <th>评分</th>
                    <th>状态</th>
                    <th>点击量</th>
                    <th>添加时间</th>
                    <th>修改时间</th>
                    <th>操作</th>
                   
                </tr>
            @foreach ($data as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->title }}</td>
                    <td>{{ $v->picname }}</td>
                    <td>{{ $v->type }}</td>
                    <td>{{ $v->director }}</td>
                    <td>{{ $v->actor }}</td>
                    <td>{{ $v->firsttime }}</td>
                    <td>{{ $v->duration }}</td>
                    <td>{{ $v->region }}</td>
                    <td>{{ $v->language }}</td>
                    <td>{{ $v->introduction }}</td>
                    <td>{{ $v->limit }}</td>
                    <td>{{ $v->score }}</td>
                    <td>{{ $v->status }}</td>
                    <td>{{ $v->click }}</td>
                    <td>{{ $v->addtime }}</td>
                    <td>{{ $v->lasttime }}</td>
                    <td><a href="/admin/film_info/{{ $v->id }}/edit">编辑</a>   
                        <a href="javascript:doDel({{ $v->id }})">删除</a>
                    </td>
                </tr>
            @endforeach
                  
                   
                  </table>
                  {{ $data->appends($where)->links() }}
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        <form action="" style="display:none;" name="myform" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    @endsection
    
   