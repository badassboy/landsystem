<?php

include("../rest_api.php");
$ch = new Application();

if(isset($_POST['add'])){
  $msg = "";
  // Collect form data
  $name = trim($_POST['name']) ?? "";
  $source = trim($_POST['source']) ?? "";
  $email = $_POST['email'] ?? "";
  $mobile = trim($_POST['mobile']) ?? "";
  $whatsapp = trim($_POST['whatsapp']) ?? "";
  $location = trim($_POST['location']) ?? "";
  $level = trim($_POST['level']) ?? "";
  $note = trim($_POST['note']) ?? "";

  $customerData = [

    'name' => $name,
    'source' => $source,
    'email' => $email,
    'mobile' => $mobile,
    'whatsapp' => $whatsapp,
    'location' => $location,
    'level' => $level,
    'note' => $note

];

 
$laliga = $ch->addCustomerData($customerData);
    if($laliga){
      $msg = "Customer Created";
    }else {
      $msg = "failed in adding customer";
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
            <label for="exampleInputEmail1">Customer Name</label>
            <input type="text" class="form-control" name="name" placeholder="Customer Name" required>
           
          </div> 
                </div>

                 <div class="col">
                    <div class="form-group">
            <label for="exampleInputEmail1">Source</label>
             <select class="form-control" name="source">
                  <option>Select</option>
                  <option value="referral">Referral</option>
                  <option value="facebook">Facebook</option>
                  <option value="linkedin">Linkedin</option>
                  
                </select>

           
           
          </div> 
                </div>

                
            </div>

            <div class="form-row">
                <div class="col">
                     <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
                </div>

                <div class="col">
                     <div class="form-group">
            <label for="exampleInputPassword1">Mobile Number</label>
            <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
          </div>
                </div>
                
            </div>

         <div class="form-row">
            <div class="col">
                <div class="form-group">
            <label for="exampleInputPassword1">Whatsapp Number</label>
            <input type="text" class="form-control" name="whatsapp" placeholder="Whatsapp Number" >
          </div> 
            </div>

            <div class="col">
                 <div class="form-group">
            <label for="exampleInputPassword1">Location</label>
            <input type="text" class="form-control" name="location" placeholder="location">
          </div>
            </div>
             
         </div>

           <div class="form-row">
            <div class="col">
                <div class="form-group">
            <label for="exampleInputPassword1">Level</label>
            <select  class="form-control" name="level">
              <option>Select</option>
              <option value="high">High Paying</option>
              <option value="low">Low Paying</option>
             
            </select>
          </div>
 
            </div>

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


