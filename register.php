<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/bootstrap-lumen.css">
  <!-- <link rel="stylesheet" href="contents/css/jquery-ui.css">
  <link rel="stylesheet" href="contents/css/toastr.css">
  <link rel="stylesheet" href="contents/css/datatables.min.css"> -->

  <style type="text/css">

    .label{
      font-size: 14px;
    }

    h1 {
      text-align: center;
    }


  </style>
     


</head>
<body>
  <h1>Register</h1>
  <br>
  <div class="container col-md-offset-4">
    <div class="form col-xs-4">
      <form method="post" id="login">

      <div class="form-group ">
        <label for="name" class="label label-info">Organization Name</label>
        <input type="text" name="name" class="form-control" msg="please enter the name" id="name">
        <!-- <label for="username" id="usernameError" class="label label-warning"></label> -->
      </div>

      <div class="form-group ">
        <label for="username" class="label label-info">Username</label>
        <input type="text" name="username" class="form-control" msg="please enter a username" id="username">
        <!-- <label for="username" id="usernameError" class="label label-warning"></label> -->
      </div>

      <div class="form-group">
        <label for="password" class="label label-info">Password</label>
        <input type="password" name="password" msg="please enter a password" class="form-control" id="password"> </div>
        <!-- <label for="password" id="passwordError" class="label label-warning"></label>
      </div> -->

       <div class="form-group ">
        <label for="email" class="label label-info">Email</label>
        <input type="text" name="email" class="form-control" msg="please enter an valid email" id="email">
        <!-- <label for="username" id="usernameError" class="label label-warning"></label> -->
      </div>

       <div class="form-group ">
        <label for="mobile" class="label label-info">Mobile</label>
        <input type="text" name="mobile" class="form-control" msg="please enter your phone number" id="mobile">
        <!-- <label for="username" id="usernameError" class="label label-warning"></label> -->
      </div>

       <div class="form-group">
                     <label for="divison" class="label label-info" >Divison</label>
                     <select class="form-control" id="sel1">
                        <option>Select Option</option>
                        <option>Barisal Division</option>
                        <option>Chittagong Division</option>
                        <option>Dhaka Division</option>
                        <option>Khulna Division</option>
                        <option>Mymensingh Division</option>
                        <option>Rajshahi Division</option>
                        <option>Sylhet Division</option>
                     </select>
                  </div>

        <div class="form-group">
          <label for="address" class="label label-info">Address</label>
          <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </div>

       <div class="form-group">
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
       </div> 

    </form>
    </div>
  </div>
</body>
</html>



  