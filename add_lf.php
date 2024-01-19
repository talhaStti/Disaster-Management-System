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
            
                <h3 id="topic1"><span></span>Lost and Found</h3>

              <img id="image1" class="image_wrapper fl_image" src="images/lf1.jpg" alt="image" style="height: 50%;width: 50%;"/>
              <p class="em_text" id="desc1">This Portal is mainly for the family of the people whose relatives or even aquaintances went missing during a Natural Disaster. They can post the details of the people missing.<br>If anyone knows the whereabouts of any of the people mentioned below, please contact the number given.</p>

                <div class="cleaner"></div>
		<form action="lf_update.php" method="post">
	<table border="1" style="width: 85%;padding: 10px;">
	<tr>
		<td><h4>Name</h4></td>
		<td><input type="text" name="name" /></td>
	</tr>
	<tr>
		<td><h4>Age</h4></td>
		<td><input type="number" name="age" min="1"/></td>
	</tr>
        <tr>
		<td><h4>Gender</h4></td>
		<td><input type="radio" name="gender" value="M" style="width: auto;"/>Male<br>
                <input type="radio" name="gender" value="F" style="width: auto;"/>Female
                </td>
	</tr>
	<tr>
		<td><h4>Contact</h4></td>
		<td><input type="text" name="contact"/></td>
	</tr>
	<tr>
		<td><h4>Disaster</h4></td>
		<td><input type="text" name="disaster"/></td>
	</tr>
	<tr>
		<td><h4>Area</h4></td>
		<td><textarea cols="40" rows="5" name="area"></textarea></td>
	</tr>
	
	</table>
	<input type="submit" style="width: auto;">
	<input type="reset" style="width: auto;">
		 </form>
            </div>
        </div>

        <div class="cleaner"></div>
        <div id="top"></div>
        <div id="bottom"></div>
    </div>

<?php require("includes/footer.php"); ?>