<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>log-in</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<style>
    body{
        background-color: red;
    }
</style>
<body style="background-color: #E2E2E2;">

    <div class="container">

        <div class="row text-center " style="padding-top:100px;">

            <div class="col-md-12">

                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>

        <div class="row ">
         
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
             
                <div class="panel-body">
                    <form action="emeliyyat.php" method="POST">
                        <hr />
                        <h5>Enter Details to Login</h5>
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <input type="text" class="form-control" placeholder="istifadeci adi " name="admin_username" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input type="password" class="form-control"  placeholder="Parol" name="admin_parol" />
                        </div>
                        
                        <button style="width: 100%;" type="submit" name="admin_giris" >Giriş Et</button>
                        <hr />
                        Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a> 
                    </form>
                </div>
                
            </div>
            
            
        </div>
    </div>

</body>
</html>
