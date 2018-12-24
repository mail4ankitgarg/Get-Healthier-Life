<html>

<head>

<link rel="stylesheet" href="styeadmin.css" media="screen">
<script src="http://www.gethealthierlife.com/js/jquery.min.js"></script>
<script>
function deleteRec(id)
{	
	var base_url='http://www.gethealthierlife.com/'
	$.ajax({
		type: "POST",
		url:base_url+'delete.php',
		data:'id='+id,
		success: function(response){
			$('#recordId'+id).html('');
		},
		
	});
	
}
</script>


</head>

<?php

$con=mysql_connect("localhost","anshul84_ghl","Ghl@201016");

if($con){

	mysql_select_db("anshul84_ghl");

}else{

	echo "Database not conneted"; die;

}

// Check if image file is a actual image or fake image



if(isset($_POST["submit"])) {

	$target_dir = "uploads/";

	$target_file = $target_dir . basename($_FILES["filepath"]["name"]);

	$uploadOk = 1;

	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



	$check = getimagesize($_FILES["filepath"]["tmp_name"]);



	if (move_uploaded_file($_FILES["filepath"]["tmp_name"], $target_file)) {

		echo "The file ". basename( $_FILES["filepath"]["name"]). " has been uploaded.";

		$sql="insert into gallery (title,`desc`,file_path,date_recorded) values ('".addslashes($_POST['title'])."','".addslashes($_POST['desc'])."','".$target_file."','".date('Y-m-d H:i:s')."')";

		echo $sql;

		mysql_query($sql);

	} else {

		echo "Sorry, there was an error uploading your file.";

	}

}





$sql="select * from gallery";

$result=mysql_query($sql);

?>

	<body>

		<div class="container">

			<div class="menu">

				<div class="item"><span><a href="appointmentList.php">Appointment</a></span></div>

				<div class="item"><span><a href="addInGallery.php">Testi</a></span></div>

				<div class="item"><span><a href="logout.php">Logout</a></span></div>

			</div>

		<div class="form">

		  <form action="addInGallery.php" method="post" enctype="multipart/form-data">

			<label for="title" class="lable">Name:</label>

			<input type="text" id="title" name="title" placeholder="Title..">

				

			<label for="desc" Class="description">Testimonial:</label>

			<textarea cols="100" rows="3" id="desc" name="desc" placeholder="Enter description.."></textarea>

				

			<label for="country" class="browse">Image:</label>

			<span>

			<input type="file" class= "bnupload" id="filepath" name="filepath" placeholder="File Path">

			<input name="submit" value="Upload"  type="submit">

			

		  </form>

		</div>





			<h1 style="text-align: center;color: maroon;">Testimonials</h1>

			<table border="1px" width="100%">

				<tr>

					<th style="font-size: 30px;">Name</th>

					<th style="font-size: 30px;">Testimonials</th>

					<th style="font-size: 30px;">Image</th>

					<th style="font-size: 30px;">Action</th>

				</tr>

				<?php

				if($result){

					while($row=mysql_fetch_assoc($result)){

						$fileNameArray=explode('/',$row['file_path']);

					?>

					<tr id="recordId<?php echo $row['id']; ?>">

						<td style="padding-left: 10px;"><?php echo $row['title'] ?></td>

						<td style="padding-left: 10px;"><?php echo $row['desc'] ?></td>

						<td style="padding-left: 10px;"><?php echo $fileNameArray['1'] ?></td>

						<td style="padding-left: 10px;"><a href="javascript:deleteRec(<?php echo $row['id']; ?>)">Delete</a></td>

					</tr>

					<?php

					}

				}else{

					?>

					<tr><td colspan="6">There is no records found in gallery</td></tr>

					<?php

				}

				?>

			</table>



		</div>

	</body>

</html>
