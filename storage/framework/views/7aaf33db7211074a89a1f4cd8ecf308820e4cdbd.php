<!DOCTYPE html>
<html>
<head>
	<title>Activation Email</title>
</head>
<body>
	<p>
		Chào mừng <?php echo e($user->name); ?> đã đăng ký thành viên tại LanPage. Bạn hãy click vào đường link sau đây để hoàn tất việc đăng ký.
		</br>
		<a href="<?php echo e($user->activation_link); ?>"><?php echo e($user->activation_link); ?></a>
	</p>
</body>
</html><?php /**PATH C:\Users\Linh\Desktop\lanpage\resources\views/email/user-activation.blade.php ENDPATH**/ ?>