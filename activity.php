<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity | Project Co-ordinator</title>
    <!-- ======= Styles ====== -->
    <script language="javascript" type="text/javascript">
        window.history.forward();
       
        </script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel = "icon" href = 
"logo.png" 
        type = "image/x-icon">
</head>

<body>


</body>
    <!-- =============== Navigation ================ -->
    <div class="container" style="background-color:#2a2185;" >
        <div class="navigation"  style="background-color:#2a2185;">
            <ul>
            <br><br>
                <li>
                    <a href="index2.php">
                    <img src="logo.png" width="80" height="70" align="left">
                        <h1><b>Project Hub</h1></b>
                       
                    </a>
                </li>
                <br><br>
                <li>
                    <a href="index2.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="activity.php">
                        <span class="icon">
                            <ion-icon name="create-outline"></ion-icon>
                        </span>
                        <span class="title">Activity</span>
                    </a>
                </li>

                <li>
                    <a href="meeting2.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Meetings</span>
                    </a>
                </li>

                <li>
                    <a href="ProgReport2.php">
                        <span class="icon">
                            <ion-icon name="star-outline"></ion-icon>
                        </span>
                        <span class="title">Progress Report</span>
                    </a>
                </li>

                <li>
                    <a href="project2.php">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Projects</span>
                    </a>
                </li>

                <li>
                    <a href="review2.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Reviews</span>
                    </a>
                </li>
               

                
                <li>
                    <a href="Templates2.php">
                        <span class="icon">
                            <ion-icon name="card-outline"></ion-icon>
                        </span>
                        <span class="title">Templates</span>
                    </a>
                </li>

 
               

                <li>
                    <a href="login.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <style>
        .button{
            display:inline-block;
            border-radius:9px;
            background-color: #2a2185;
            border:none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 3px;
            width: 180px;
            transition: all 0.5s;
            cursor:pointer:
            margin: 5px;
        }

        .button span{
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .button span:after{
            content:'\00bb';
            position: absolute;
            opacity: 0;
            top:0
            right: -20px;
            transition: 0.5s;
        }

         .button:hover span{
            padding-right: 25px;
        }

        .button:hover span:after{
            opacity: 1;
            right: 0;
        } 
        input[type=text] {
        width: 100%;
        padding: 12px 120px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #2a2185;
        border-radius: 11px;
       
        }
        input[type=button],
        input[type=submit] {
        background-color: #2a2185;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 12px;
        }
        .main{
            background-image:url(https://img.freepik.com/premium-vector/white-background-with-halftone_67845-798.jpg?w=2000);
            background-size: 1000px;
  
    background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
background-size: cover;
        }

      

        </style>
      
        <div class="main" >
             
                          
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <h1><b><center>PROJECT CO-ORDINATOR | ACTIVITY</center></b></h1>
                <div class="user">
                        
                <h1></h1>
                          
                          
                          </div>
            </div>
            

          
            

            <!-- ================ Order Details List ================= -->
            <?php include 'connection.php';?>
            <div class="details" >
            <div class="recentOrders" style="background-color:#fff; width:100rem;">
            <div class="cardHeader">
            <h2 style="font-size:30px;"><b>Activity Log</b></h2>
            <?php
error_reporting(0);
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `activity` WHERE CONCAT( `degreeprogram`,'academicyear') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `activity`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "project_hub");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
                       <form action="activity.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search Here...">
        <input type="submit" style="vertical-align:middle; width=50px;" name="search" value="Search">
</form>


<a href="activity_form.php">
            <button class="button" style="vertical-align:middle; font-size:20px;" ><span>+Create Activity</span> </button>
            </a>

                    </div>
            
                    <table>
                        
                    <thead>
                    <table border="3px" cellppadding="3px" cellspacing="3px" >
                            <tr style="background-color: #A9A6CE; font-size:18px;">
                               
                                <td><center><b>TITLE</b></center></td>
                                <td><center><b>GRADE</b></center></td>
                                <td><center><b>DATE</b></center></td>
                               
                                
                                <td colspan=""><center><b>ACADEMIC YEAR</b></center></td>
                                
                               
                                <td><center><b>TIME</b></center></td>
                                <td><center><b>DEGREE PROGRAM</b></center></td>
                                <td colspan="2"><center><b>ACTIONS</b></center></td>
                               
                           
                            </tr>
                            
                            
                            
                     </thead>

    
       
    <tbody>
</tbody>
    <?php
                       
                       include('connection.php');
                       $query=mysqli_query($con,"select * from activity");
                       while($row=mysqli_fetch_array($query)){
                           ?>
                           <tr>
                               <?php while($row = mysqli_fetch_array($search_result)):?>
                               <td style="font-size:17px;"><center><b><?php echo $row['title']; ?></td></center></b>
                               <td style="font-size:17px;"><center><b><?php echo $row['grade']; ?></td></center></b>
                               <td style="font-size:17px;"><center><b><?php echo $row['date']; ?></td></center></b>
                             
                               
                               <td style="font-size:17px;"><center><b><?php echo $row['academicyear']; ?></td></center></b>
                               <td style="font-size:17px;"><center><b><?php echo $row['time']; ?></td></center></b>
                               <td style="font-size:17px;"><center><b><?php echo $row['degreeprogram']; ?></td></center></b>
                               <td style="font-size:17px;">
                            <center><b><a href="edit3.php?id=<?php echo $row['id']; ?>"style="color: green"><ion-icon name="create-outline" size="large">Edit</a></center></b>
                    </td>
                     <td style="font-size:17px;">
                    <center><b><a href="delete7.php?id=<?php echo $row['id']; ?>"style="color: red";><ion-icon name="close-circle-outline" size="large">Delete</a></center></b>
							</td>
						</tr>
						<?php endwhile;?>
                <?php
            }
        
    ?>
                </div>
                       
                               
                
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
