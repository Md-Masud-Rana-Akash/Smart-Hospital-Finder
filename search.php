
<?php

    $DBcon = mysqli_connect("localhost", "root", "", "mydb");
    $role = '';
    $query = "SELECT role FROM search GROUP BY role ORDER BY role ASC";
    $result = mysqli_query($DBcon, $query);
    while($row = mysqli_fetch_array($result)){
    $role .= '<option value="'.$row["role"].'">'.$row["role"].'</option>';
    }

    mysqli_close($DBcon);
   
    
?>



<center>
 <div class="container" style="width:900px">    
        <form class="form-inline" style="margin-left:55px" action="result.php"  method="post">

         <div class="form-group">
                     <label for="divison" class="label label-info" ></label>
                     <select style="width:170px;height:50px" class="form-control" id="divison" name="divison" data-show-icon="true">
                      <option selected disabled hidden>Select Division</option>
                        <option>Barisal Division</option>
                        <option>Chittagong Division</option>
                        <option>Dhaka Division</option>
                        <option>Khulna Division</option>
                        <option>Mymensingh Division</option>
                        <option>Rajshahi Division</option>
                        <option>Rangpur Division</option>
                        <option>Sylhet Division</option>
                     </select>
                  </div>

   
   <div class="form-group">
            <label for="role" class="label label-info" ></label>
        <select style="width:170px;height:50px" name="role" id="role" class="form-control action">
            <option value="">Looking For</option>
            <?php echo $role; ?>
        </select>
   </div>
    
   <div class="form-group">
            <label for="role" class="label label-info" ></label>
        <select style="width:270px;height:50px" name="type" id="type" class="form-control action">
            <option value="">select speciality,symptom</option>
        </select>
  </div>
   
  <button class="btn btn-outline-success my-2 my-sm-0 " style="margin-left:10px;width:79px;height:50px" name="submit" type="submit" id="submitButton">Search</button>

 


  </form>
  </div>
  </center>
 
  


        <script>
            $(document).ready(function(){

            $('.action').change(function(){
            if($(this).val() != ''){
            var action = $(this).attr("id");
            var query = $(this).val();
            var result = '';
            if(action == "role")
            {
                result = 'type';
            }

            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{action:action, query:query},
                success:function(data){
                $('#'+result).html(data);
                }
            })
            }


            });
            });
        </script>


       