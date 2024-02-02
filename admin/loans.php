



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
            margin-left: 40%;
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
                <p>CUSTOMER</p>


            <li>
                <a href="#" id="appointment" data-target="one" class="test">Add Customer</a>
            </li>

            <li>
                <a href="#" id="event" data-target="two" class="test">Customer Info</a>
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

            <h2>CUSTOMERS</h2>

            <div class="container appointment show" id="one">

                           
             <?php include("customerform.php");  ?>
            
               
            </div>


                <div class="container event" id="two">

               <table class="table">

            <thead>
              <tr>
                
                <th scope="col">ID</th>
                <th scope="col">Customer</th>
                <th scope="col">Source</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Whatsapp</th>
                <th scope="col">Location</th>
                <th scope="col">Level</th>

                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
                    $data = $ch->getCustomers();
                    foreach ($data as $row) {
                ?>
                    <td><?php echo $row['customerID']; ?></td>
                    <td><?php echo $row['cust_name']; ?></td>
                    <td><?php echo $row['source']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['whatsapp']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['level']; ?></td>
                </tr>

            <?php } ?>
            </tbody>

            </table>
              
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
 url:"featuredajax.php",
 type:"get",
 dataType:"JSON",
 success:function(response){
   console.log(response);
     var len = response.length;
     for (var i = 0; i < len; i++) {

           var edit = response[i]['edit'];
         var my_delete  = response[i]["delete"];

         var action = edit.concat(" ", my_delete);

         var branch = response[i]["branch"];

         var address = response[i]["address"];
       
         var location = response[i]["location"];
         var mobile = response[i]["mobile"];

         var table_str = "<tr>" +
                      
                      
                      "<td>" + branch + "</td>" +
                      "<td>" + address + "</td>" +
                    
                      "<td>" + location + "</td>" +
                      "<td>" + mobile + "</td>" +
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