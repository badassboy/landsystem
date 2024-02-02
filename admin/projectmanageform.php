  <?php

include("../rest_api.php");
$ch = new Application();

if(isset($_POST['add'])){
  $msg = "";
  $name = trim($_POST['name']) ?? "";
  $priority = trim($_POST['priority']) ?? "";
  $assigned = $_POST['assigned'] ?? "";
  $start_date = trim($_POST['start_date']) ?? "";
  $end_date = trim($_POST['end_date']) ?? "";
  $location = trim($_POST['location']) ?? "";
  $cost = trim($_POST['cost']) ?? "";
  $note = trim($_POST['note']) ?? "";

  $projectData = [
        "name" => $name,
    "priority" => $priority,
    "assigned" => $assigned,
    "start_date" => $name,
    "end_date" => $name,
    "location" => $name,
    "cost" => $name,
    "note" => $name,
    "name" => $name

    ];

 $laliga = $ch->addProjectData($projectData);
    if($laliga){
      $msg = "Project Created";
    }else {
      $msg = "failed in adding project";
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
            <label for="exampleInputEmail1">Project Name</label>
            <input type="text" class="form-control" name="name" placeholder="Ttile" required>
           
          </div> 
                </div>

                 <div class="col">
                    <div class="form-group">
            <label for="exampleInputEmail1">Priority</label>
             <select class="form-control" name="priority">
                  <option>Select</option>
                  <option value="normal">Normal</option>
                  <option value="high">High</option>
                  <option value="low">Low</option>
                  
                </select>

           
           
          </div> 
                </div>

                
            </div>

            <div class="form-row">
                <div class="col">
                     <div class="form-group">
            <label for="exampleInputPassword1">Assigned To</label>
            <input type="text" class="form-control" name="assigned" placeholder="Assigned To" required>
          </div>
                </div>

                <div class="col">
                     <div class="form-group">
            <label for="exampleInputPassword1">Start Date</label>
            <input type="date" class="form-control" name="start_date" required>
          </div>
                </div>
                
            </div>

         <div class="form-row">
            <div class="col">
                <div class="form-group">
            <label for="exampleInputPassword1">End date</label>
            <input type="date" class="form-control" name="end_date" >
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
            <label for="exampleInputPassword1">Cost</label>
             <input type="text" class="form-control" name="cost" placeholder="Cost">
          </div>
 
            </div>

            <div class="col">
                 <div class="form-group">
            <label for="exampleInputPassword1">Note</label>
            <textarea class="form-control" name="note" placeholder="Note" rows="3"></textarea>
          </div>

            </div>
               
           </div>

          
        <button type="submit" class="btn btn-primary" name="add">Submit</button>
        </form>
    </div>
             