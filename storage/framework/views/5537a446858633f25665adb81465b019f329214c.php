<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="<?php echo e(url('upload')); ?>" method="post" enctype="multipart/form-data">
		 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">  
		 <input type="file" name="pic">
		 <input type="submit" value="上传">
	</form>
</body>
</html>