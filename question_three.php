<?php include('config.php') ?>
<link rel="icon" type="image/x-icon" href="bincom_logo.webp">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>
  Bincom Test
</title>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="bincom_logo.webp" width="50px" height="50px" alt="" class="d-inline-block align-text-top">
          <label><a href="../index.php" style="font-size: 20px;">Bincom Tests</a></label>
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
        </ul>  
      </div>
    </div>
</nav>
    <div class="container">
    <p style="text-align: center; color:RED"><strong>QUESTION THREE </strong><br>Create a Page to be used to store results for ALL Parties for a new Polling unit</p><br>
    <p style="text-align: center; color:blue"><strong>MY ANSWER</strong><br>I have built the page using bootstrap for fast deployment and created a new table called <em>`new_results`</em> to store the new results</p>

        <div class="card align-items-center">
            <img class="card-image-top align-content-center" src="bincom_logo.webp" decoding="async" class="we-artwork__image ember3 " alt="" role="presentation" height="70" width="70">
            <div class="card-body">
                <h5 class="card-title mb-3" >ADD NEW RESULT</h5>
                <form method="POST" action="#">
                    <label for="polling_unit_uniqueid">Polling Unit Unique ID</label>
                    <input type="text" name="polling_unit_uniqueid" id="polling_unit_uniqueid" class="form-control" placeholder="Polling Unit Unique ID">

                    <label for="party_abbreviation">Party Abbreviation</label>
                    <input type="text" name="party_abbreviation" class="form-control" id="party_abbreviation" placeholder="Party Abbreviation">

                    <label for="party_score">Party Score</label>
                    <input type="text" name="party_score" class="form-control" id="party_score" placeholder="Party Score">

                    <label for="entered_by_user">Entered By</label>
                    <input type="text" name="entered_by_user" class="form-control" id="entered_by_user" placeholder="Entered By">
                    
                    <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<?php

if(isset($_POST['submit']))
{
    //get data from the form
    $polling_unit_uniqueid = $_POST['polling_unit_uniqueid'];
    $party_abbreviation = $_POST ['party_abbreviation'];
    $party_score = $_POST['party_score'];
    $entered_by_user = $_POST['entered_by_user'];
    //create a time to store in the date now column
    $date_entered = date("d-m-y h:i:s");
    //create a variable to store Ip address so it will be pushed to the database directly
    $user_ip_address = $_SERVER['REMOTE_ADDR'];


    $qry = "INSERT INTO `new_results`( `polling_unit_uniqueid`, `party_abbreviation`, `party_score`, `entered_by_user`, `date_entered`, `user_ip_address`) VALUES ('$polling_unit_uniqueid','$party_abbreviation','$party_score','$entered_by_user','$date_entered','$user_ip_address')";

    //execute the query and add to the database
    $result = mysqli_query($conn, $qry);
    if($result==true)
    {
      echo "data submitted";
    } 
    else
    {
      echo "ERROR! data not submitted";
    }
}
else
{
  //echo 'button not clicked';
}
?>