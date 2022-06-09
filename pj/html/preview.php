<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	
    

	
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">



	<title>Track</title>
	<include class="team html"></include>
</head>
<body>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="../html/main.php" class="nav-link">Back</a>
			
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>

		
		<main class="bg-secondary">
			<div class="head-title">
				<div class="left">
					<h1>Project details</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Project Details</a>
						</li>
					</ul>
				</div>

			</div>
			
            <?php include('db.php'); ?>

<?php 
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
  
    $sql2 = "SELECT *
     FROM project_details WHERE id='$id'";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    while ($row2 = $result2->fetch_assoc()) {
  
  
      $siteid = $row2['siteid'];
      $date= $row2['date'];
      $sitename = $row2['sitename'];
      $sitegps = $row2['sitegps'];
      $carriername = $row2['carriername'];
      $towerheight = $row2['towerheight'];
      $sector = $row2['sector'];
      $typeofscoop= $row2['typeofscoop'];
      $message = $row2['message'];
      $_filenamesjob = $row2['jha'];
      $_filenamesbarricading  = $row2['barricading'];
      $_filenamesfirstaidbox  = $row2['firstaidbox'];
      $_filenamesfireextinguisher  = $row2['fireextinguisher'];
      $_filenamestoolbox  = $row2['toolbox'];
      $_filenamesrubbishpoint = $row2['rubbishpoint'];
      $_filenamesenergizer  = $row2['energizer'];
      $_filenameselectricfence = $row2['electricfence'];
      $_filenamesgroundingtower = $row2['groundingtower'];
      $_filenamescentralsite = $row2['centralsite'];
      $_filenamesteammembers  = $row2['teammembers'];
      
    }
 
  }
?>

<div class="row col-md-12">
<div class="form-group col-md-6">
						<label for="first_name">Site ID</label>
						<input type="text" class="form-control" id="Site ID"value="<?= $siteid; ?>"
          disabled>
					</div>
          <div class="form-group col-md-6">
						<label for="date">Date </label>
						<input type="date" class="form-control" id="date" value="<?= $date; ?>" disabled /> 
					</div>



      <div class="col-md-6 form-group">
        <label for="name" id="name-label"> Site Name</label>
        <input
          type="text"  class="form-control"id=" Site Name" value="<?= $sitename; ?>"
          disabled
        />
      </div>
      <div class="form-group col-md-6">
						<label for="last_name">Carrier Name</label>
						<input type="text" class="form-control" id="Carrier Name"  value="<?= $carriername; ?>" disabled/>
			</div>
      <div class="form-group col-md-6">
						<label for="last_name">Tower height</label>
						<input type="text" class="form-control" id="Tower height" value="<?= $towerheight; ?>" disabled/> 
			</div>
      <div class="form-group col-md-6">
						<label for="last_name">Sector</label>
						<input type="text" class="form-control" id="Sector"  value="<?= $sector; ?>" disabled/> 
					</div>

          <div class="row form-group col-md-6 ">
						<label for="dropdown">Type of Scoop</label>
						<select name="typeofscoop" id="typeofscoop" class="form-control" disabled>
							<option value="">Select Scoop</option>
							<option value="1">Swap</option>
							<option value="2">cut over</option>
							<option value="3">Installation</option>
							<option value="4">Allignment</option>
							<option value="5">Other</option>
              
						</select>
					</div>

        </div>
         <div class="form-outline">
        <label for="last_name" for="Message">Message</label>
        <textarea class="form-control" id="message" rows="8" value="<?= $message; ?>" disabled /> </textarea>
        <br>
        </div>

</div>

  <div class="form-group">
      
  <img src="uploads/<?php echo $_filenamesjob;?>" class="rounded" alt="Cinque Terre" width="304" height="236">
  <img src="uploads/<?php echo $_filenamesbarricading;?>" class="rounded" alt="Cinque Terre" width="304" height="236"> 
  <img src="uploads/<?php echo $_filenamesfirstaidbox;?>" class="rounded" alt="Cinque Terre" width="304" height="236"> 
  <img src="uploads/<?php echo $_filenamesfireextinguisher;?>" class="rounded" alt="Cinque Terre" width="304" height="236">
  <img src="uploads/<?php echo $_filenamestoolbox;?>" class="rounded" alt="Cinque Terre" width="304" height="236">
  <img src="uploads/<?php echo $_filenamesrubbishpoint;?>" class="rounded" alt="Cinque Terre" width="304" height="236">
  <img src="uploads/<?php echo $_filenamesenergizer;?>" class="rounded" alt="Cinque Terre" width="304" height="236">
  <img src="uploads/<?php echo $_filenameselectricfence;?>" class="rounded" alt="Cinque Terre" width="304" height="236">
  <img src="uploads/<?php echo $_filenamesgroundingtower;?>" class="rounded" alt="Cinque Terre" width="304" height="236">
  <img src="uploads/<?php echo $_filenamescentralsite;?>" class="rounded" alt="Cinque Terre" width="304" height="236">
  <img src="uploads/<?php echo $_filenamesteammembers;?>" class="rounded" alt="Cinque Terre" width="304" height="236">
  
  </div>



    <!-- MAIN -->
</section>
<!-- CONTENT -->


<script src="../js/script.js"></script>
</body>
    

		