<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>请输入邮箱账号</title>
</head>
<body>
	<h1>请输入邮箱</h1>
	<hr>
	@if(session('info'))
		<p>{{ session('info')}}</p>
	@endif
	<form action="{{ url('/admin/sendemail')}}" method="post">
	{{ csrf_field() }}
		邮箱：<input type="email" name="email">
		<button>找回密码</button>
	</form>
	
	
</body>
</html>