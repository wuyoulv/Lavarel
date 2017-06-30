@extends('admin.base')
    @section('content')
	<div class="box-body">
      <table class="table table-bordered">
        <tr>
          <th>会员号</th>
          <th>账号</th>
          <th>头像</th>
          <th>密码</th>
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
          <td>{{$v->picname}}</td>
          <td>{{$v->password}}</td>
          <td>{{$v->name}}</td>
          <td>{{$v->birthday}}</td>
          <td>{{$v->sex}}</td>
          <td>{{$v->tel}}</td>
          <td>{{$v->email}}</td>
          <td>{{$v->address}}</td>
          <td>{{$v->months}}</td>
          <td>{{$v->money}}</td>
          <td>{{$v->role}}</td>
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
       
      