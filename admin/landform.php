     <?php

include("../rest_api.php");
$ch = new Application();

if(isset($_POST['add'])){
  $msg = "";
  // Collect form data
  $seller = trim($_POST['seller']) ?? "";
  $status = trim($_POST['status']) ?? "";
  $cost = trim($_POST['cost']) ?? "";
  $location = trim($_POST['location']) ?? "";
  $witness = trim($_POST['witness']) ?? "";
  $size = trim($_POST['size']) ?? "";
  $note = trim($_POST['note']) ?? "";

  // Create an array with the collected data
  $propertyData = [

    "seller" => $seller,
    "status" => $status,
    "cost" => $cost,
    "location" => $location,
    "witness" => $witness,
    "size" => $size,
    "note" => $note

  ];
  
 

 
    $laliga = $ch->insertLandData($propertyData);
    if($laliga){
      $msg = "Information Created successfully";
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
            <label for="exampleInputEmail1">Seller Name</label>
            <input type="text" class="form-control" name="seller" placeholder="Seller Name" required>
           
          </div> 
                </div>

                 <div class="col">
                    <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
             <select class="form-control" name="status">
                  <option>Select</option>
                  <option value="purchase">Purchased</option>
                  <option value="available">Available</option>
                  <option value="negotiation">Negotiation</option>
                  
                </select>

           
           
          </div> 
                </div>

                
            </div>

            <div class="form-row">
                <div class="col">
                     <div class="form-group">
            <label for="exampleInputPassword1">Cost of Land</label>
            <input type="text" class="form-control" name="cost" placeholder="Cost of land" required>
          </div>
                </div>

                <div>
                     <div class="form-group">
            <label for="exampleInputPassword1">Site Plan</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
                </div>
                
            </div>

         <div class="form-row">
            <div class="col">
                <div class="form-group">
            <label for="exampleInputPassword1">Location</label>
            <input type="text" class="form-control" name="location" placeholder="location" required>
          </div> 
            </div>

            <div class="col">
                 <div class="form-group">
            <label for="exampleInputPassword1">Witness</label>
            <input type="text" class="form-control" name="witness" placeholder="location">
          </div>
            </div>
             
         </div>

           <div class="form-row">
            <div class="col">
                <div class="form-group">
            <label for="exampleInputPassword1">Land Size</label>
            <input type="text" class="form-control" name="size" placeholder="Land size" required>
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