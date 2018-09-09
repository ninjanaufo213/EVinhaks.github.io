	
		<?php 
		include 'connect.php';
		include 'div.php';
		if ($_SERVER['REQUEST_METHOD']=='POST'){
		$title=$_POST['title'];
		$image=$_POST['image'];
		$href=$_POST['href'];
		$query="INSERT INTO postspecial(title,image,href) VALUES('{$title}','{$image}','{$href}')";
		$resuilt=mysqli_query($connect,$query) or die("Query {$query} \n <br> errors:".mysqli_error($connect));

		if (mysqli_affected_rows($connect)==1){
	Msgbox("Add thanh cong");
	$_POST['Id']="";
	$_POST['Name']="";
		}
		else{
	Msgbox("that bai");
		}
	}
		?>

		<body>
		<div class="tab-content">
			<div class="subpvda2 tab-pane fade in active container " id="menu1">
				<form class="" method="POST">
					<br><br><br>
					<div class="form-group">
					<label class="white">title:</label> 
					<input name="title" placeholder="Title" type="text" class="form-control inputsp blue" id="usr">
					<label class="white"><br>image: <br></label>
					<input name="image" type="text" placeholder="Image" class="form-control inputsp blue">
					<label class="white">href:</label> 
					<input name="href" placeholder="href" type="text" class="form-control inputsp blue" id="usr">
				

					<input type="submit" class="inputsp btn btn-success col-xs-3 col-md-3 col-md-offset-9" style="outline: none;" value="Add" ></input>
					</div>
				</form>
			</div>
			
		</div>
	</body>