     <?php

include("../rest_api.php");
$ch = new Application();

if(isset($_POST['add'])){
  $msg = "";
  // Collect form data
  $client = trim($_POST['client']) ?? "";
  $propertyType = trim($_POST['property_type']) ?? "";
  $mobile = trim($_POST['mobile']) ?? "";
  $email = trim($_POST['email']) ?? "";
  $visit = trim($_POST['visit_date']) ?? "";
  $budget = trim($_POST['budget']) ?? "";
  $note = trim($_POST['note']) ?? "";

  // Create an array with the collected data
  $bookingData = [

    "client" => $client,
    "property_type" => $propertyType,
    "mobile" => $mobile,
    "email" => $email,
    "visit_date" => $visit,
    "budget" => $budget,
    "note" => $note

  ];
  
 

 
    $laliga = $ch->bookings($bookingData);
    if($laliga){
      $msg = "Booking Created successfully";
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
            <label for="exampleInputEmail1">Client Name</label>
            <input type="text" class="form-control" name="client" placeholder="Client Name" required>
           
          </div> 
                </div>

                   <div class="col">
                     <div class="form-group">
            <label for="">Property Type</label>
            <select class="form-control" name="property_type">
              <option>Type</option>
              <option value="land">Land</option>
              <option value="apartment">Apartment</option>
              <option value="development">Development Property</option>
              <option value="industry">Industrial</option>
              <option value="retail">Retail</option>
              <option value="commercial">Commercial</option>
            </select>

           
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
            <label>Date</label>
            <input type="date" class="form-control" name="visit_date"  required>
          </div> 
            </div>

            <div class="col">
                <div class="form-group">
            <label for="exampleInputPassword1">Client Budget</label>
            <input type="text" class="form-control" name="budget" placeholder="Budget" required>
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