<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sửa thông tin khách hàng</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<style>/* Custom styles */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
}

.container {
  margin-top: 50px;
}

h1 {
  color: #0066cc;
}

.form-container {
  max-width: 500px;
  margin: auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 20px;
}

label {
  color: #0066cc;
  font-weight: bold;
}

.old-photo {
  height: 200px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 5px;
}

.btn-primary {
  background-color: #0066cc;
  border: none;
}

.btn-primary:hover {
  background-color: #0056aa;
}

.btn-block {
  width: 100%;
}
</style>
<body>

<div class="container">
 
  <div class="form-container">
  <h1 class="mt-4">Sửa thông tin khách hàng</h1>
    <form action="index.php?action=update_account" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Họ và tên</label>
        <input type="text" class="form-control" name="name" value="<?php echo $each['name'] ?>">
      </div>
      <div class="form-group">
        <label for="photo">Ảnh</label>
        <div>
          <label for="new-photo">Chọn ảnh mới</label>
          <input type="file" class="form-control-file" id="new-photo" name="photo">
        </div>
        <div>
          <label for="old-photo">Hoặc giữ lại ảnh cũ</label>
          <br>
          <img src="<?php echo $each['photo'] ?>" alt="" class="old-photo">
        </div>
      </div>
      <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" class="form-control" name="address" value="<?php echo $each['address'] ?>">
      </div>
      <div class="form-group">
        <label for="phonenumber">Số điện thoại</label>
        <input type="text" class="form-control" name="phonenumber" value="<?php echo $each['phonenumber'] ?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo $each['email'] ?>">
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu</label>
        <input type="password" class="form-control" name="password" value="<?php echo $each['password'] ?>">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Sửa tài khoản</button>
    </form>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
