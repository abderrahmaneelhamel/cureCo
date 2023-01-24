<!DOCTYPE html>
<html lang="en">
<head>
    <title>CureCo</title>
    <link rel="shortcut icon" href="app/Views/images/logo1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Jewellery store for selling Jewellery like rings and necklaces">
    <meta name="Keyword" content="Jewellery store,rings,necklaces">
    <meta name="author" content="Jewellery store">
    <link rel="stylesheet" type="text/css" href="app/Views/css/bootstrap/bootstrap.css" />
    <link href="app/Views/css/style2.css" rel="stylesheet" />
    <link href="app/Views/css/responsive.css" rel="stylesheet" />
    <script type="text/javascript" src="app/Views/js/jquery-3.4.1.min.js" defer></script>
    <script type="text/javascript" src="app/Views/js/bootstrap.js" defer></script>
    <script type="text/javascript" src="app/Views/js/custom.js" defer></script>
</head>
<body>
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-image: url("app/Views/images/bg_1.jpg");
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #6691da);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#0099a6, #00fff3);
      overflow: hidden;
    }
    @media (max-width: 600px) {
      #radius-shape-2 {
      display: none !important;
    }
    }
    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.5) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div style="margin-top: 0px !important; margin-bottom: 0px !important; height: 569px;" class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Your health <br />
          <span style="color: hsl(253deg 71% 59%)">is our priority </span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(0deg 0% 100%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div style="top: -47px;" id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div style="bottom: -46px; right: -92px; " id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="post" id="theForm">
            <h5>Login to your account</h5><br>
              <div class="form-outline mb-4">
                <input type="email" id="email" name="user-email" class="form-control" placeholder="Email address" />
                <label id="emailMsg" for="email" style="color: red;"></label>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
                <label id="passwordMsg" for="password" style="color: red;"></label>
              </div>
              <button onclick="return SubmitForm()" name="submit" class="btn btn-primary btn-block mb-4" >Login</button>
              <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a style="margin-left: 10px; " href="signuppage" class="btn btn-outline-primary">Create new</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>