<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      <style type="text/css">
         p{
         color: red;
         }
         h5{
         color: green;
         }
      </style>
   </head>
<body>
<div style="margin: 0px auto; width: 500px;padding: 50px;">
         <!-- Nav tabs -->
         <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Add Doctor</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Remove Doctor</a>
            </li>
         </ul>
         <!-- Tab panes -->
         <div class="tab-content">
            <div class="tab-pane active" id="profile" role="tabpanel">
              
             <!--  -->
               <form action="" method="post">
                  <div class="form-group">
                     <label for="fistname">First Name:</label>
                     <input type="text" class="form-control" name="firstname" placeholder="Write your First Name">
                  </div>

                  <div class="form-group">
                     <label for="fistname">Last Name:</label>
                     <input type="text" class="form-control" name="firstname" placeholder="Write your First Name">
                  </div>

                <div class="form-group">
                     <label for="degree">Degree</label>
                     <textarea></textarea>
                  </div>

                  <div class="form-group">
                     <label for="email">Email:</label>
                     <input type="text" class="form-control" name="email" placeholder="">
                  </div>

                  <div class="form-group">
                     <label for="password">Password:</label>
                     <input type="password" class="form-control" name="password">
                  </div>

                  <div class="form-group">
                     <label for="movile">Contact:</label>
                     <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
                  </div>

                  <div class="radio">
                     <label>Sex:</label>
                     <label class="radio-inline"><input type="radio" name="sex" value="Male">Male</label>
                     <label class="radio-inline"><input type="radio" name="sex" value="Female">Female</label>
                  </div>
                  <div class="form-group">
                     <label for="example-date-input">Date of Birth:</label>
                     <input class="form-control" type="date" value="" id="example-date-input">
                  </div>
             
                  <div class="form-group">
                     <label for="exampleInputFile">Picture:</label>
                     <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                  </div>
                
                  <div class="form-group">
                     <label for="exampleTextarea">Address:</label>
                     <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                  </div>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>

            <div class="tab-pane" id="profile" role="tabpanel">
               <form>
                  <div class="form-group">
                     <label for="docid">Email:</label>
                     <input type="text" class="form-control" name="patientid" placeholder="Patient Id">
                  </div>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
         </div>
      </div>
    </body>
  </html>