<?php include('config.php') ?>
<link rel="icon" type="image/x-icon" href="bincom_logo.webp">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Bincom Test</title>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
              <img src="bincom_logo.webp" width="50px" height="50px" alt="" class="d-inline-block align-text-top">
              <label><a href="../index.php" style="font-size: 30px;">Bincom Tests</a></label>
            </a>
          </nav>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">QUESTION ONE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="question_two.php">QUESTION TWO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="question_three.php">QUESTION 3</a>
              </li>   
          </div>
        </div>
    </nav>
<table class="table">
    <p style="text-align: center; color:RED"><strong>QUESTION ONE</strong><br>Create a page to display the summed total result of all the polling units under any particular local goverment</p><br>
    <p style="text-align: center; color:blue"><strong>MY ANSWER</strong><br>I would be honest, I don't really understand this question, but I think what you want me to do is to display the total result of a particular polling unit, I did this by using <em>`WARRI NORTH`</em></p>
<thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">LGA UNIQUE ID</th>
      <th scope="col">LGA NAME</th>
      <th scope="col">Party ABBREVIATION</th>
      <th scope="col">Party SCORE</th>
      <th scope="col">DATE ENTERED</th>
      <th scope="col">USER IP ADDRESS</th>
    </tr>
  </thead>
  <tbody>


<?php 
$sql2 = "SELECT * FROM `lga` WHERE `lga_name`='WARRI NORTH'";
$result2 = mysqli_query($conn,$sql2);

if($result2==true)
{
  $count2 = mysqli_num_rows($result2);
  if($count2>0)
  {
    while($rows= mysqli_fetch_array($result2)){
      //get the value of the Local goverment unique ID
      $lga_unique_id = $rows['lga_id']; 
      //echo $lga_unique_id;

    }
  }
}


?>

<?php   
    
    //run a query to get all data from the database
    $sql = "SELECT * FROM `announced_lga_results` WHERE `lga_name`=33 ";
    
    
    //execute the query 
    $result = mysqli_query($conn, $sql);
    if($result == TRUE)
    {
        //echo "Result gotten";
        //get all the asssociate data in the row
        


        $count = mysqli_num_rows($result);
        $SN =1;
        //check if the row has any data
        if($count>0)
        //if count is greater than 0, we have data in our table
        {
            while($rows = mysqli_fetch_assoc($result))
            {
              //use the while loop to display all the data gotten from the database and store them as a variable


              

              $result_id = $rows['result_id'];
              $party_abbreviation =$rows['party_abbreviation'];
              $party_score =$rows['party_score'];
              $entered_by_user =$rows['entered_by_user'];
              $date_entered = $rows['date_entered'];
              $user_ip_address = $rows['user_ip_address'];

              //Store Warri NORTH AS A VARIABLE
              $lga = "WARRI NORTH";

              ?>
              <tr>
                <td><?php echo $SN++ ?></td>
                <td><?php echo $lga_unique_id ?></td>
                <td><?php echo $lga ?></td>
                <td><?php echo $party_abbreviation ?></td>
                <td><?php echo $party_score ?></td>
                <td><?php echo $date_entered ?></td>
                <td><?php echo $user_ip_address ?></td>
              </tr>
              <?php
            }
        }
        else
        {
            echo "No data in the database";
        }
    }
    else
    {
        echo "could not connect to database";
    
    }
    
    
    
    ?>
      </tbody>
</table>


<?php

//create a query that calculates the sum total of all the results in the polling unit
$getTotalResult = "SELECT SUM(`party_score`) AS getPartyScore FROM `announced_lga_results`";
$qry2= mysqli_query($conn, $getTotalResult);
if($qry2 == True)
{
  while($rows2 = mysqli_fetch_assoc($qry2))
  {
    $displaySum = $rows2['getPartyScore'];
    //echo "Total Sum is".$displaySum;
  }
}


?>
<table class="table">
<thead>
    <tr>
      <th scope="col">TOTAL SUM</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><?php echo $displaySum ?></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>