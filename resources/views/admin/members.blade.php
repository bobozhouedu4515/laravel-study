<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/css/theme.min.css">
    <title>Document</title>
</head>
<body>
<table class="table table-nowrap">
    <thead>
    <tr>
        <th scope="col">编号</th>
        <th scope="col">姓名</th>
        <th scope="col">邮箱</th>
        <th scope="col">操作</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $v)
    <tr>

        <th scope="row">{{$v->id}}</th>
        <td>{{$v->name}}</td>
        <td>{{$v->email}}</td>
        <td>删除</td>

    </tr>
        @endforeach
    </tbody>
</table>




</body>
</html>