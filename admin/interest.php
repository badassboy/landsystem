<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> -->

    

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/sidestyle.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">

    <style type="text/css">

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .appointment{
                background-color:rgb(255, 255, 255);
                height: 500px;
                padding-top: 3%;
                display: none;
            }

        .event{
                background-color:rgb(255, 255, 255);
                height: 500px;
                padding-top: 3%;
                display: none;
            }

             .return{
                background-color:rgb(255, 255, 255);
                height: 500px;
                padding-top: 3%;
                display: none;
            }

        .counselling{

            background-color:rgb(255, 255, 255);
            height: 350px;
            padding-top: 3%;
            display: none;
        }

        .show {
          display: block;
        }

        button[type="submit"]{
            margin: 2%;
            width: 50%;
            margin-left: 30%;
        }


    </style>
    

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>LANDRIS</h3>
            </div>

            <ul class="list-unstyled components">
                <p>INVENTORY</p>


            <li>
                <a href="#" id="appointment" data-target="one" class="test">Purchased</a>
            </li>

             <li>
                <a href="#" id="return" data-target="three" class="test">Return</a>
            </li>


            <li>
                <a href="#" id="event" data-target="two" class="test">Payment</a>
            </li>

         
           
           


            </ul>

           

        </nav>
        <!-- end of sidebar -->

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
                
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                    
                </div>
            </nav>

            <h2>INVENTORY</h2>

            <div class="container appointment show" id="one">

            <?php include("purchaseform.php"); ?>
             
        </div>
        <!-- end of purchasing -->

        <!-- returns -->
          <div class="container return" id="three">

                            <div class="myForm">
                                <?php 

                                if (isset($msg)) {
                                    echo $msg;
                                }

                                ?>

           <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Loan type</label>
            <select class="form-control" name="loan" required>
              <option value="group loan">Group Loan</option>
              <option value="car loan">Car Loan</option>
              <option value="student loan">Student Loan</option>
              <option value="salary loan">Salary Loan</option>
              <option value="funeral loan">Funeral Loan</option>
            </select>

           
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Interest Rate</label>
            <input type="number" step="any" min="0" class="form-control" name="rate" placeholder="Interest Rate" required>
          </div>

          

          
         

          <button type="submit" class="btn btn-primary" name="add">Submit</button>
        </form>

            </div>
             
        </div>
        <!-- returns -->


    
        <div class="container event" id="two">

              
              <form method="post">

                 <div class="form-row">
                <div class="col">
                    <div class="form-group">
            <label for="exampleInputPassword1">Buyer Name</label>
            <input type="text"  class="form-control" name="buyer" placeholder="Buyer name" required>
          </div> 
                </div>

                

                <div class="col">
                    <div class="form-group">
                        <label>Deposit</label>
        <input type="text"  class="form-control" name="deposit" placeholder="Deposit" required>
         
                        </div>
                    
                </div>

            </div>

            <div class="form-group">
                <label>Balance</label>
     <input type="text"  class="form-control" name="Balance" placeholder="Balance">
                
            </div>

                 <button type="submit" class="btn btn-primary" name="add">Submit</button>  
              </form>
              
            </div>
               
             

            <!-- end of div -->

        </div>
        <!-- end of  content -->
           
    </div>
    <!-- end of wrapper -->

                


           

          

    <!-- jQuery CDN  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    <!-- Bootstrap JS -->
   <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        // creating an array-like based of child nodes on a specified class name
        var links = document.getElementsByClassName("test");

     //attach click handler to each
        for (var i = 0; i < links.length; i++) {
            links[i].onclick = toggleVisible;
        }

        function toggleVisible(){
                //hide currently shown item
               document.getElementsByClassName('show')[0].classList.remove('show');
               // getting info from custom data-target  set on the element
               var id = this.dataset.target;
               // showing div
               document.getElementById(id).classList.add('show');
        }

        // display all featured news
        $(document).ready(function(){

$.ajax({
 url:"interest_ajax.php",
 type:"get",
 dataType:"JSON",
 success:function(response){
   console.log(response);
     var len = response.length;
     for (var i = 0; i < len; i++) {

           var edit = response[i]['edit'];
         var my_delete  = response[i]["delete"];

         var action = edit.concat(" ", my_delete);

         var loan_type = response[i]["loan"];

         var rate = response[i]["rate"];
       
         

         var table_str = "<tr>" +
                      
                      
                      "<td>" + loan_type + "</td>" +
                      "<td>" + rate + "</td>" +
                    
                     
                      "<td>" + action + "</td>" +
                      "</tr>";


              $(".table tbody").append(table_str);

            }
             
          },
          error:function(response){
            console.log("Error: "+ response);
          }
      
          });  

      });



        
              


        

           






        


    </script>
</body>

</html>