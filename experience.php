<?php require_once("includes/ses.php"); ?>
<?php require_once("includes/header.php"); ?>
<?php require_once("includes/nav.php"); ?>
<?php require("includes/news.php"); ?>
<!-- end of side column -->

        <div id="templatemo_main_column">

	<a href="home.php"><div id="disp_name">
	    <?php echo $val;?>
	</div></a>
            <div class="main_column_box">
            
            <div class="cleaner_h80"></div>
            
                <h3 id="topic1"><span></span>Add Disaster Experiences</h3>

              <img id="image1" class="image_wrapper fl_image" src="images/nepal.jpg" alt="image" style="height: 50%;width: 50%;"/>
              <br/>
			  <p class="em_text" id="desc1">This Portal is mainly for the people who have witnessed and survived disasters and wish to spread awareness about them through their personal experiences.</p>

                <div class="cleaner_h80"></div>
		<?php
			$result=mysqli_query($connection,"select * from lost_found");
			$i=0;
			while($row=mysqli_fetch_array($result)){
				echo "<p style='font-size:17px'><a href='#' onmouseover='lf(\"{$row['gender']}\",\"{$row['disaster']}\",{$i},{$row['contact']});' style=\"text-decoration:none;\"><b>{$row['name']} was lost in {$row['area']}!</b></a><br/></p>";
				echo "<p id='{$i}' style='font-size:17px'></p><br>";
				$i=$i+1;
			}
		 ?>
		                <script>
                    function lf(gen,dis,pid,c) {
			var genp;
			if (gen=='M') {
			    genp="He";
			}
			else{
			    genp="She";
			}
                        document.getElementById(pid).innerHTML=genp+" was lost due to a "+dis+".<br/>To reply to this post contact the no given below<br/>"+c;
			for(var j=0;j<10;j++){
				if (j!=pid) {
					document.getElementById(j).innerHTML="";
				}
			}
                    }
                 </script>
				 
                <a href="add_lf.php"><h4>ADD AN EXPERIENCE ACCOUNT</h4></a> 
				<form id="input">
				<textarea name="comment" rows="5" cols="40"></textarea><br/><br/>
				<input type="submit" name="post" value="Post" width="50px"/></form>
				<br/><br>
				<h3><u> Posted Accounts: </u></h3>
				<br/>
				<i>“Survivors often felt their families and friends had no idea how to deal with these strange people who had returned to live with them. 
				There was no understanding or information available at the time and no support for the families. 
				Survivors also didn’t always see that their families were victims of the disaster too, albeit in a different way.” <br/>-Anne Dursley (South East Asian Tsunami Survivor)
				<br/><br/>
				“The total shock of the event carried us through as did the deeper shock from euphoria at surviving. 
				The ‘survivor guilt’ you hear about started early and was overwhelming at times. 
				I felt guilt about everything and everyone, but once I could label it as such it started to become easier to deal with. 
				I often wished I had died and reading about funerals and obituaries was like observing my own. A part of me had died and I needed to grieve.”
				<br/>-Ronald Wattson (Hurricane Katrina Survivor)
				</i>
            </div>
        </div>
				
        <div class="cleaner"></div>
        <div id="top"></div>
        <div id="bottom"></div>
    </div>

<?php require("includes/footer.php"); ?>