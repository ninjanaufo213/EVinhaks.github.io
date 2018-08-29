
<title>Xem</title>
  <body>
  	<?php
include 'connect.php';
include 'Div.php';


  ?>
  <style>
  	*{
  		margin: 0;
  		padding:0;
  		border: none;
  	}

  </style>
<script>
	document.getElementById('posts').classList.remove("active");
	document.getElementById('watch').classList.add("active");
</script>

  	<div class="tab-content">
  	  <div class="subpvda2 tab-pane fade in active container " style="background: #fff;" id="menu1">
  		<table class="table table-hover">
  			<thead>
  			  <tr>
  				<th scope="col">Title</th>
  				<th scope="col">Image</th>
  				<th scope="col">Href</th>
  				<th scope="col">Id</th>
          <th scope="col">Delete</th>
          <th scope="col">Edit</th>
              </tr>
  			</thead>
            
            <tbody>
            	<tr>
            	<?php 
                      $query="SELECT * FROM page ORDER BY id ASC";
                      $s=mysqli_query($connect,$query);
                     while ($result=mysqli_fetch_array($s,MYSQLI_ASSOC)){
                ?>

            		<td ><?php echo $result['title']; ?></td>
            		<td><?php echo $result['image']; ?></td>
                <td><?php echo $result['href']; ?></td>
                <td><?php echo $result['id']; ?></td>
                    <td><?php echo '<a href="delete_user.php?title='.$result['title'].'"><img width=20 src="https://image.flaticon.com/icons/svg/63/63260.svg" alt=""></a>'; ?></td>
                   <td><?php echo '<a href="edit_user.php?title='.$result['title'].'"><img width=20 src="https://cdn3.iconfinder.com/data/icons/simplius-pack/512/pencil_and_paper-512.png" alt=""></a>'; ?></td>
            	</tr>
            	<?php } ?>
                     

            	
            </tbody>

  		</table>
  	  </div>
  	</div>


  </body>