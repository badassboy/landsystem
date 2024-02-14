     <?php

include("../rest_api.php");
$ch = new Application();

if(isset($_POST['add'])){
  $msg = "";
  // Collect form data
  $agent = trim($_POST['agent_company']) ?? "";
  // $propertyType = trim($_POST['property_type']) ?? "";
  $mobile = trim($_POST['mobile']) ?? "";
  $email = trim($_POST['email']) ?? "";
  // $visit = trim($_POST['visit_date']) ?? "";
  // $budget = trim($_POST['budget']) ?? "";
  $note = trim($_POST['note']) ?? "";

  // Create an array with the collected data
  $AgencyData = [

    "agent_company" => $agent,
  
    "mobile" => $mobile,
    "email" => $email,
   
    "note" => $note

  ];
  
 

 
    $laliga = $ch->agencies($AgencyData);
    if($laliga){
      $msg = "Agent Created successfully";
    }else {
      $msg = "Failed in adding info";
    }
  

}


     ?>               


                    <div class="myForm">
                                <?php 

                                if (isset($msg)) {
                                    echo $msg;
                                }

                                ?>

           <form method="post">

            <div class="form-row">

                <div class="col">
                    <div class="form-group">
            <label for="exampleInputEmail1">Agent Name</label>
            <input type="text" class="form-control" name="agent_company" placeholder="Client Name" required>
           
          </div> 
                </div>

                  
                

                
            </div>

            <div class="form-row">

                

                <div class="col">
                    <label>Mobile Number</label>
         <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>

                    
                </div>

                <div class="col">
                  <div>
                     <div class="form-group">
            <label for="exampleInputPassword1">Client Email</label>
             <input type="email" class="form-control" name="email" placeholder="Email">
           
          </div>
                </div>  
                </div>

                
                
            </div>

           <div class="form-row">

            

            <div class="col">
                 <div class="form-group">
            <label for="exampleInputPassword1">Note</label>
            <textarea class="form-control" name="note" rows="3"></textarea>
          </div>

            </div>
               
           </div>

          
        <button type="submit" class="btn btn-primary" name="add">Submit</button>
        </form>
    </div>