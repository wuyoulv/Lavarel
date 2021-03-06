@extends('admin.base')
    @section('content')
	<div class="box-body">
  <br/>
            <form action="{{ URL('admin/user') }}" method="get" class="form-inline">
              <div class="form-group">
                <label for="exampleInputName2">关键字:</label>
                <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="账号">
              </div>
              <div class="form-group">
                <label for="exampleInputName2">性别:</label>
                <input type="text" name="sex" class="form-control" size="4" id="exampleInputName2" placeholder="1/2">
              </div>
              <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <br/>
      <table class="table table-bordered">
        <tr>
          <th>会员号</th>
          <th>账号</th>
          <th>头像</th>
          <th>真实姓名</th>
          <th>生日</th>
          <th>性别</th>
          <th>电话</th>
          <th>邮箱</th>
          <th>地址</th>
          <th>月数</th>
          <th>金额</th>
          <th>角色</th>
          <th>购买时间</th>
          <th>到期时间</th>
          <th>登录时间</th>
          <th>上次登录时间</th>
          <th style="width: 100px">操作</th>
        </tr>
        @foreach($list as $v)
        <tr>
          <td>{{$v->id}}</td>
          <td>{{$v->account}}</td>
          <td><img width="30" src="{{ URL('uploads') }}/{{$v->picname}}"/></td>
          <td>{{$v->name}}</td>
          <td>{{$v->birthday}}</td>
          <td>@if ($v->sex == 1) 男 @else 女 @endif</td>
          <td>{{$v->tel}}</td>
          <td>{{$v->email}}</td>
          <td>{{$v->address}}</td>
          <td>{{$v->months}}</td>
          <td>{{$v->money}}</td>
          <td>@if ($v->role == 1) 会员 @else Vip会员 @endif</td>
          <td>{{$v->buy_time}}</td>
          <td>{{$v->dead_line}}</td>
          <td>{{$v->login_time}}</td>
          <td>{{$v->last_time}}</td>
          <td><button onclick="doDel({{$v->id}})" class="btn btn-xs btn-danger">删除</button> 
          <button onclick="window.location='{{URL('admin/user')}}/{{ $v->id }}/edit'" class="btn btn-xs btn-primary" >编辑</button> </td>
        </tr>
        @endforeach
      </table>
                </div><!-- /.box-body -->
                {{ $list->appends($where)->links() }}

                
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
                Modal.confirm({msg:'确定要删除吗？'}).on(function(e){
                   if(e){
                    $("#mydeleteform").attr("action","{{url('admin/user')}}/"+id).submit();
                    }                    
                });
            }
      </script>
    @endsection
       
      