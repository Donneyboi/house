<?php session_start();
include "db.php";
$select=mysqli_query($conn,"select * from teacher ORDER BY id");
while ($row=mysqli_fetch_array($select)) {
 $firstn=$row['firstname'];
  $lasn=$row['lastname'];
   $work=$row['work'];
   $idx=$row['id'];


  ?>	<div class="hsmallbody">
                     <div class="hireimage">
                            
                            </div>
                            <div class="hirenames">
                                <h3><?php  echo $firstn." ".$lasn;?></h3>
                                <span><?php echo $work ?></span>
                                <button type="button" class="" onclick="showdetaile(<?php echo $idx; ?>)">Check Out</button>
                            </div>
                            
		         		</div>


<?php } ?>
<script type="text/javascript">
    
    
function showdetaile(z) {
        alert(z)
    $('.detaile'+z).show();
    }
</script>
