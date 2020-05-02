<?php
//include 'teskoneksi.php';
//$koneksi =  mysqli_connect("localhost","root","","lingkungan")
$koneksi = mysqli_connect("localhost","root","","lingkungan");
 
if(isset($_POST['btnSubmit']) &&isset($_POST['txtPass']) && isset($_POST['txtPass']))
{
  $txtUser = $_POST['txtUser'];
  $txtPass = $_POST['txtPass'];
  $query = "select *  from user where id_user = '".$txtUser."' and password = '".$txtPass."'";
  $result = mysqli_query($koneksi,$query);

  if($res=mysqli_fetch_array($result))
  {
  //Redirect to login page
echo "mlebu";
    header("location: dasboard.html");
    } 
    else
    { 
      
      echo "<script type='text/javascript'>alert('LOGIN FAILED');</script>";
  }
}
//$username   = $_POST['username'];
//$password   = md5($_POST['password']);

//include 'teskoneksi.php';

//$user = mysqli_query($connect,"select * from users where id_user='$username' and password='$password'");
//$chek = mysqli_num_rows($user);
//if($chek>0){
  //  header("location:dasboard.html");
//}else  
//  header("location:proses.php");
//}
?>

<!DOCTYPE html>
<htmL>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">LOGIN ADMIN</h2>
      <hr>
      <form action="proses.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" name="txtUser" class="form-control" placeholder="Masukkan Username Anda">
          </div>
        </div>
         <div class="form-group">
          <label>Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>
            <input type="password" name="txtPass" class="form-control" placeholder="Masukkan Password Anda">
          </div>
        </div>
        <div class="container-btn text-center">
        <input type="submit" name="btnSubmit" class="btn btn-primary my-4 mr-3 marrgin-center">
        </div>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

  <script type="text/javascript">
  function validasi() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;   
    if (username != "" && password!="") {
      return true;
    }else{
      alert('Username dan Password harus di isi !');
      return false;
    }
  }
 
</script>
</html>