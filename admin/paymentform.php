     <?php

include("../rest_api.php");
$ch = new Application();

if(isset($_POST['add'])){
  $msg = "";
  // Collect form data
  $customer = trim($_POST['customer']) ?? "";
 
  $amount_paid = trim($_POST['paid']) ?? "";
  $balance = trim($_POST['balance']) ?? "";

  $note = trim($_POST['note']) ?? "";

  // Create an array with the collected data
  $paymentData = [

    "customer" => $customer,
  
    "paid" => $amount_paid,
    "balance" => $balance,
   
    "note" => $note

  ];
  
 

 
    $laliga = $ch->payment($paymentData);
    if($laliga){
      $msg = "Payment Added";
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
            <label for="exampleInputEmail1">Customer Name</label>
<input type="text" class="form-control" name="customer" placeholder="Client Name" required>
           
          </div> 
                </div>

                  
                

                
            </div>

            <div class="form-row">

                

                <div class="col">
                    <label>Amount Paid</label>
         <input type="text" class="form-control" name="paid" placeholder="Amount paid" required>

                    
                </div>

                <div class="col">
                  <div>
                     <div class="form-group">
            <label for="exampleInputPassword1">Balance</label>
             <input type="text" class="form-control" name="balance" placeholder="Balance">
           
          </div>
                </div>  
                </div>

                
                
            </div>

           <div class="form-row">

            

            <div class="col">
                 <div class="form-group">
            <label for="exampleInputPassword1">Note</label>
            <textarea class="form-control" name="note" rows="3" placeholder="Note"></textarea>
          </div>

            </div>
               
           </div>

          
        <button type="submit" class="btn btn-primary" name="add">Submit</button>
        </form>
    </div>