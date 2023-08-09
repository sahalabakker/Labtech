<html>
<head>
</head>
<body>
<div class="collpse tabs">
				<h3 class="w3ls-title">Our services</h3>
				<div class="panel-group" collpse id="accordion" role="tablist" aria-multiselectable="true">
			 

					
					<?php		
					$_SESSION['bio_email']=$_GET['email1'];
		            $email2=$_SESSION['bio_email'];
		            $id=1;
		            $id1=2;
		            $sel="select * from service where email='$email2'";
		            $res=$ob->db_read($sel);
		            $num=mysqli_num_rows($res);
		            if($num!=0)
		            {
		            	while($row=mysqli_fetch_array($res)) {
		          

				//echo("<div class='collpse tabs'>");
				//echo("<div class='panel-group' collpse id='accordion' role='tablist'>");
					echo('<div class="panel panel-default">');
						echo('<div class="panel-heading" role="tab" id="'.$id.'">');
							echo('<h4 class="panel-title">');
								echo('<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#'.$id1.'" aria-expanded="false" aria-controls="'.$id1.'">');
									echo('<i class="" aria-hidden="true"></i>'.$row['service_name'].' <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>');
								echo('</a>');
							echo('</h4>');
						echo('</div>');
						echo('<div id="'.$id1.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="'.$id.'">');
							echo('<div class="panel-body">');
							/*echo("Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS");*/
							echo $row['about_service'];
							echo("<br>");
							echo("<br>");
							echo('<input type="submit" value="$'.$row['amount'].'" style="float: left;width: 10%;height: 30px;">');
							/*echo("     ");
                            echo('<input type="submit" value="available days per week" style="margin-left: 10px;width: 20%;height: 30px;">');*/
                            echo('<form action="signup.php" method="post">');
							echo('<a href="signup.php">');
							echo('<input type="submit" value="post complaint" class="w3ls-cart" style="width: 10%;float: right; height: 35px;">');
							echo('</a>');
							echo('</form>');
							echo('</div>');
						echo('</div>');
					echo('</div>');
					$id=$id+1;
					$id1=$id1+1;
				}
			}
			?>
		</div>
	</div>
</body>
</html>