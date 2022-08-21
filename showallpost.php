<?php  session_start();


 include "db.php";
$selectpost=mysqli_query($conn,"select * from post ORDER BY time DESC");

while ($postrow=mysqli_fetch_array($selectpost)) {
	$email=$postrow['email'];
	$post=nl2br($postrow['message']);
	$idx=$postrow['id'];
	

	$selctname=mysqli_query($conn,"select * from teacher where email='$email'");
	$rown=mysqli_fetch_array($selctname);
	$firsrtn=$rown['firstname'];
	$lastn=$rown['lastname'];
	$work=$rown['work'];
	$file=$rown['profile'];
	
  ?>
					<div class="posthead">
						<div class="postpic">
	
<?php echo "<img src='profile/$file'>";?>
						</div>
						<div class="postname">
						<h3><?php  echo $firsrtn." ".$lastn; ?> </h3>
						<span><?php  echo $work ?></span>
						</div>
					</div>
					<div class="postbody">
						<div class="fortext">
					  <?php echo $post  ?>
						</div>
						<div class="forimage">
						<?php
                 $selimage=mysqli_query($conn, "select * from postimage where postid='$idx'");
            while($fetchimage=mysqli_fetch_array($selimage)){
                 $postfile=nl2br($fetchimage['imagename']);

                    echo "<img src='postimage/$postfile' />";
                        }



                     ?>
						</div>
					</div>
					<div class="postfoot">
						<form class="like">
					
							<span>1111</span>
							<label class="fa fa-heart"></label>
							<input type="submit" name="" hidden>
						
						</form>
						 <span><?php 

                                $sen=mysqli_query($conn,"select * from comment where postid='$idx'");
                                $cnum=mysqli_num_rows($sen);
                                echo $cnum;
						 ?><label class="fa fa fa-comment" onclick="showc(<?php echo $idx; ?>)"></label></span>
					</div>
                              <form class="commment" id="comm<?php echo $idx ;?>" method="get" action="" style="display: none;">
                              	<?php $selectcf=mysqli_query($conn,"select * from comment where postid='$idx'") ?>

                                         <div class="commmenthead">
                                            <label class="fa fa-times" onclick="goback(<?php echo $idx; ?>)"></label>
                                                <h3>Comment</h3>
                                         </div>

                                          <div class="commmentbody">
                                          	<div class="fortext" style="width: 100%;">
					  <?php echo $post  ?>
						</div>
                                              <div class="loadimage">
                                              			<?php
                 $selimage=mysqli_query($conn, "select * from postimage where postid='$idx'");
            while($fetchimage=mysqli_fetch_array($selimage)){
                 $postfile=nl2br($fetchimage['imagename']);

                    echo "<img src='postimage/$postfile' />";
                        }



                     ?>
                                              </div>
                                              <div class="commmentcontaner">
                                                  <?php 
                                                     while ($rowc=mysqli_fetch_array($selectcf)) {
                                                     	$cm=$rowc['message'];
                                                     	$cemail=$rowc['email'];
$co=mysqli_query($conn, "select * from teacher where email='$cemail'");
$crow=mysqli_fetch_array($co);
$firstn=$crow['firstname'];
$lastn=$crow['lastname'];
                                                 ?>
                                                  <div class="contaner">
                                                      <h5><?php echo $firstn." ".$lastn?></h5>
                                                      <div class="maincomment"><?php echo $cm  ?></div>
                                                  </div>
                                                    <?php    } ?>         
                                              </div>

                                          </div>
                 <div class="commentfooter">
       <input type="hidden" name="postid" id="postid<?php echo $idx;?>" value="<?php echo $idx ;?>">

        <input type="text" name="message" id="message<?php echo $idx;?>"> 
        
         <label class="fa fa-paper-plane" for="com<?php echo $idx;?>"></label>
       
<button onclick="commentform(this)"  name="commentbt" style="display:none; " id="com<?php echo $idx ;?>" value="<?php echo $idx ;?>" type="button"></button>
                                          	</div>

                                       </form>


<?php } ?>

<div class="commentcheck" style="width:100%;height: 100vh; position: absolute;background: white;top: 0px; display: none; align-items: center;
justify-content: center;">
<img src="img/1_CsJ05WEGfunYMLGfsT2sXA.gif" style="width:100%;height:50px;">	
</div>
 	<script type="text/javascript">
 		function commentform(p) {
 			p=p.value;
 			
 			var postid=document.getElementById('postid'+p).value;
 			var message=document.getElementById('message'+p).value;

               datas="postid="+postid+"&message="+message;
					$.ajax({
				url:"procemment.php",
                 type:"GET",
                 data: datas,
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(data){
                 $('.commentcheck').css({"dispaly":"flex"});

                  $('.commentcheck').show();
                   
                 },
                 success:function(data){
                 	$('.commentcheck').html(data);
                 	$('.commentcheck').hide();
                 },
                 error:function(data){
                 	alert('error typing to processData');
                 }

					})
					 		}
				
			</script>


	<script type="text/javascript">
	
function showc(p) {
		//alert(p)
	$('#comm'+p).show();
	}
</script>

	<script type="text/javascript">
	
function goback(p) {
		//alert(p)
	$('#comm'+p).hide();
	}
</script>