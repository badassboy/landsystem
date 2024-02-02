<?php

include("../rest_api.php");
$ch = new Application();

if(isset($_POST['add'])){
  $msg = "";
  $buyer = trim($_POST['buyer']) ?? "";
  $property = trim($_POST['property']) ?? "";
  $location = trim($_POST['location']) ?? "";
  $mobile = trim($_POST['mobile']) ?? "";
  $whatsapp = trim($_POST['whatsapp']) ?? "";
  $address = trim($_POST['address']) ?? "";
  $proposed_date = $_POST['proposed_date'] ?? "";
  $delivery_date = $_POST['delivery_date'] ?? "";
  $value = $_POST['value'] ?? "";
  $note = trim($_POST['note']) ?? "";

  $purchaseData = [

    'buyer' => $buyer,
    'property' => $property,
    'location' => $location,
    'mobile' => $mobile,
    'whatsapp' => $whatsapp,
    'address' => $address,
    'proposed_date' => $proposed_date,
    'delivery_date' => $delivery_date,
    'value' => $value,
    'note' => $note
    
    ];

    $laliga = $ch->addPurchaseData($purchaseData);
    if($laliga){
      $msg = "Purchase Created";
    }else {
      $msg = "failed in adding purchase";
    }
  

}
// end of laliga news



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
            <label for="exampleInputPassword1">Buyer Fullname</label>
            <input type="text"  class="form-control" name="buyer" placeholder="FullName" required>
          </div> 
                </div>

                <div class="col">
                     <div class="form-group">
            <label for="exampleInputPassword1">Property Name</label>
            <input type="text"  class="form-control" name="property" placeholder="Property Name" required>
          </div>
                </div>

                <div class="col">
                     <div class="form-group">
            <label for="exampleInputPassword1">Property Location</label>
            <input type="text"  class="form-control" name="location" placeholder="Property Location" required>
          </div>
                </div>

            </div>

             <div class="form-row">
                <div class="col">
                    <div class="form-group">
            <label for="exampleInputPassword1">Mobile Number</label>
            <input type="text"  class="form-control" name="mobile" placeholder="Mobile Number" required>
          </div> 
                </div>

                <div class="col">
                     <div class="form-group">
            <label for="exampleInputPassword1">Whatsapp Number</label>
            <input type="text"  class="form-control" name="whatsapp" placeholder="Whatsapp number">
          </div>
                </div>

                <div class="col">
                     <div class="form-group">
            <label for="exampleInputPassword1">Property Address</label>
            <input type="text"  class="form-control" name="address" placeholder="Property Address">
          </div>
                </div>

            </div>

             <div class="form-row">
                <div class="col">
                    <div class="form-group">
            <label for="exampleInputPassword1">Proposed date for sale</label>
            <input type="date"  class="form-control" name="proposed_date"  required>
          </div> 
                </div>

                <div class="col">
                     <div class="form-group">
            <label for="exampleInputPassword1">Delivery date</label>
            <input type="date"  class="form-control" name="delivery_date" required>
          </div>
                </div>

                 <div class="col">
                   <div class="form-group">
                 <label for="exampleInputPassword1">Signature</label>
            <input type="file"  class="form-control-file" name="signature">
                
            </div> 
                </div>

            </div>

             <div class="form-row">
                <div class="col">
                    <div class="form-group">
            <label for="exampleInputPassword1">Property value</label>
            <input type="text"  class="form-control" name="value" placeholder="Property value" required>
          </div> 
                </div>

                

                <div class="col">
                    <div class="form-group">
                        <label>Note</label>
          <textarea class="form-control" name="note" placeholder="Note" rows="3"></textarea>
                        
                    </div>
                    
                </div>

            </div>

            <button type="submit" class="btn btn-primary" name="add">Submit</button>
        </form>

            </div>

