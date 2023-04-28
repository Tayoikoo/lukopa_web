<!doctype html>
<html lang="en">
  <head>
    <title>Learning - JS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            align-items:center;
            display: flex;
            justify-content: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
        }
        .login-container{
            max-width: 350px;
            width: 100%;
            margin: 0 auto;
        }
    </style>
  </head>
  <body>
    <div class="login login-container">
        <div class="card">
            <div class="card-header text-center">Login</div>
            <div class="card-body">
                <form id="form_login" action="ceklogin.php" method="POST">
                    <div class="form-group">
                      <label for="Username">Username :</label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username">
                    </div>
                    <div class="form-group">
                      <label for="Password">Password :</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
                    </div>
                    <button type="submit" name="login" id="login" class="btn btn-primary" btn-lg btn-block" style="width:100%;">Login</button>
                </form>
                <br>
                <div id="message" style="color:red;"></div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="test.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>