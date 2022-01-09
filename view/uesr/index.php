<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Thư Viện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
  


<table class="table">
  <thead>
    <tr>
    <th >mã </th>
      <th >Họ và Tên</th>
      <th >Giới Tính </th>
      <th >Năm sinh</th>
      <th >Nghề nghiệp</th>
      <th >Ngày cấp thẻ </th>
      <th >Ngày hết hạn</th>
      <th >Địa chỉ </th>
      <th >Xửa</th>
      <th >xóa</th>
    </tr>
  </thead>
  <tbody>
   


  <?php
  foreach($users as $user)
{
  ?>
  
    <tr>
      <th scope = "row"> <?php echo "<p> {$user['madg']} </p>"?> </th>
      <td> <?php echo "<p> {$user['hovaten']} </p>"?> </td>
      <td> <?php echo "<p> {$user['gioitinh']} </p>"?> </td>
      <td> <?php echo "<p> {$user['namsinh']} </p>"?> </td>
      <td> <?php echo "<p> {$user['nghenghiep']} </p>"?> </td>
      <td> <?php echo "<p> {$user['ngaycapthe']} </p>"?> </td>
      <td> <?php echo "<p> {$user['ngayhethan']} </p>"?> </td>
      <td> <?php echo "<p> {$user['diachi']} </p>"?> </td>
      <td> <a href="">xửa</a> </td>
      <td> <a href="UserModel.php?madg=<?php echo "<p> {$user['madg']} </p>"?>">xóa</a> </td>
      
    </tr>
  <?php
  }
  ?>
  </tbody>
</table>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>