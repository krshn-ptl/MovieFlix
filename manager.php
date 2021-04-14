<html>
    <head>
        <title>
            Movie-Flix
        </title>
    </head>
    <link rel="stylesheet" href="index.css">

<body>
<?php 
    require_once("header.php");
?>
    <div class="main-content">
            <div class="wrapper">
            <a href="add-theatre.php" class="btn-primary-man">Add Manager</a>
                <h1>Managers</h1>
                <br> <br> <br>
                <table class="tbl-full">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Theatre</th>
                        <th>Actions</th>
                    </tr>

                    
                    <?php 
                        //Query to Get all Admin
                        //$sql = "SELECT * FROM tbl_admin";
                        //Execute the Query
                        //$res = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        //if($res==TRUE)
                        //{
                            // Count Rows to CHeck whether we have data in database or not
                            //$count = mysqli_num_rows($res); // Function to get all the rows in database

                            //$sn=1; //Create a Variable and Assign the value

                            //CHeck the num of rows
                            //if($count>0){
                                //WE HAve data in database
                                //while($rows=mysqli_fetch_assoc($res)){
                                    //Using While loop to get all the data from database.
                                    //And while loop will run as long as we have data in database

                                    //Get individual DAta
                                    //$id=$rows['tm_id'];
                                    //$name=$rows['name'];
                                    //$email=$rows['email'];
                                    //$phone=$rows['phone'];
                                    //$theatre=$rows['theatre'];

                                    //Display the Values in our Table
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $id++; ?>. </td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $phone; ?></td>
                                        <td><?php echo $theatre; ?></td>
                                        
                                    </tr>
                    
                </table>

            </div>
        </div>

</body>
</html>