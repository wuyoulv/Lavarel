<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>评论表</h2>
        <table border='1px ' width=900>
            <tr>
                <th>影片ID</th>
                <th>用户ID</th>
                <th>影片名</th>
                <th>评论时间</th>
                <th>评论内容</th>

            </tr>

                @foreach($cmt as $stu)
                    <tr>
                        <td style='width:70px'>{{$stu->id}}</td>
                        <td  style='width:70px'>{{$stu->user}}</td>
                        <td style='width:150px'>{{$stu->title}}</td>
                        <td style='width:150px'>{{$stu->time}}</td>
                        <td>{{$stu->text}}</td>
                    </tr>
                @endforeach
        

        </table>

    </center>
</body>
</html>