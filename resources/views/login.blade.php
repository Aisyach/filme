<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="split left">
        <div class="form-section">
            <h1>Welcome back</h1>
            <h6>Welcome back! please enter your details</h6>
            <form action="" method="post">
                <div class="form-group">
                    <label for="email" id="lemail">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                <div class="form-group">
                    <label for="password" id="lpass">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="row-section">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                        <a href="">Forgot Password</a>
                </div>
                    <button type="submit" class="btn btn-primary" id="login">Login</button>
                </div>
            </form>
        </div>
    </div>
    <div class="split right">
        <div class="right-container"></div>
    </div>
</body>
</html>