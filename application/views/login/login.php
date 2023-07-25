<!doctype html>
<html lang="en">
<link rel="shortcut icon" type="image/jpg" href="assets/images/favicon.png" />

<head>
  <title> Vinn Villa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="assets/css/style1.css">

</head>

<body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section"></h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="wrap d-md-flex">
            <div class="img" style="background-image: url(assets/images/vinnvilla.jpg);">
            </div>
            <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Sign In</h3>
                </div>
                <div class="w-100">

                </div>
                <img src="assets/images/vinn.png" height="30px">

              </div>

              <form action="Login/login" method="post">
                <div class="form-group mb-3">
                  <label class="label">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="form-group mb-3">
                  <label class="label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <input type="checkbox" onclick="myFunction()"> Tampilkan Password
                <div class="form-group">
                  <br>
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3" value="Login">Sign In</button>
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50 text-left">
                    <label class="">

                    </label>
                  </div>
                  <div class="w-50 text-md-right">

                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main1.js"></script>

</body>

</html>