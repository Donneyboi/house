  <?php  session_start();
  include "db.php";

 $selectt=mysqli_query($conn, "select * from teacher ORDER BY id ");
$row=mysqli_fetch_array($selectt);
 	$firstn=$row['firstname'];
 	$lastn=$row['lastname'];
 	$country=$row['country'];
 	$work=$row['work'];
 	$bio=$row['bio'];
 	$file=$row['profile'];

 	


  ?> 	<div class="detaile">
  	<div class="detailehead">
			<label class="fa fa-times closedetaile"></label>
			<h3>Profile</h3>
		</div>
		<div class="detailebody">


		

               <div class="div1">
				<div class="detaileimage">
				<?php echo  $file?>
				</div>
				<h3> <?php echo $firstn." ".$lastn ?></h3>
			</div>
			<div class="div2">

				<div class="fa fa-list-alt mylabel"><label>category</label>:<span>developer</span></div>

				<div class="fa fa-flag mylabel"><label>country</label>:<span><?php echo $country ?></span></div>

				<div class="fa fa-tasks mylabel"><label>tasks</label>:<span><?php echo $work ?></span></div>
				<div class="fa fa-user mylabel"><label>about</label>:<span><?php echo $bio ?></span></div>

			</div>

			<div class="starandlike">
				<div>
				<label class="fa fa-star"><label class="fa fa-star"><label class="fa fa-star"><label class="fa fa-star"></label></label></label></label>
				<span class="fa fa-thumbs-up">103</span>
				</div>	
			</div>

			<div class="directbutton">
				<button type="button">chat now</button>
			</div>
</div>
	</div>
<?php  ?>