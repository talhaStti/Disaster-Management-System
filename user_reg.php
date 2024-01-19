<?php require_once("includes/header.php"); ?>

 <div id="templatemo_menu">
                <ul>
                      <li><a href="index.php?id=1" class="current">Homepage</a></li>
                      <li><a rel="nofollow" href="login.php?id=1" >Login</a></li>
		      <li><a href="user_reg.php">User Registration</a></li>
                      <li><a href="contact.php">Contact Information</a></li>
		</ul>
            </div> <!-- end of menu -->

        	<div class="cleaner"></div>
            <div class="box">
            	<h3><span></span>News</h3>

                <img src="images/nd1.jpg" alt="image" />
                <div class="news_title"><a href="#"> Mudslides Explained: Behind the Washington State Disaster</a></div>
                <p>A fatal mudslide in rural northwestern Washington State over the weekend underscores the dangers of this fast-moving natural hazard.</p>
		<div class="cleaner"></div>
		<img src="images/nd2.jpg"/>
		<div class="news_title"><a href="http://www.huffingtonpost.com/2014/03/26/extreme-weather-natural-disasters-insurance-losses_n_5033351.html">Extreme Weather, Natural Disasters Led To $45 Billion In Insurance Losses In 2013</a></div>
		<p>GENEVA (AP) — Disasters such as floods in Europe, winter storms in the U.S. and typhoons in Asia cost insurance companies $45 billion in 2013, a leading Swiss firm said Wednesday.</p>

          </div>

      </div> <!-- end of side column -->

        <div id="templatemo_main_column">

            <div class="main_column_box">
            
            <div class="cleaner_h80"></div>
            
                <h3><span></span>User Registration Form</h3>
            <form action="user_update.php" method="post">
                <table border="1" style="width: 85%;padding: 10px;">
        <tr>
		<td><h4>Name : </h4></td>
		<td><input type="text" name="name" /></td>
		<td class="err"></td>
	</tr>
	
	<tr>
		<td><h4>Password : </h4></td>
		<td><input type="password" name="pass"/></td>
		<td class="err"></td>
	</tr>
	<tr>
		<td><h4>Date of Birth : </h4></td>
		<td><input type="date" name="dob"/></td>
		<td class="err"></td>
	</tr>
	<tr>
		<td><h4>Username : </h4></td>
		<td><input type="text" name="uname"/></td>
		<td class="err"></td>
	</tr>
	<tr>
		<td><h4>Email : </h4></td>
		<td><input type="email" name="email"/></td>
		<td class="err"></td>
	</tr>
	<tr>
		<td><h4>Contact No : </h4></td>
		<td><input type="text" name="contact"/></td>
		<td class="err"></td>
	</tr>
	<tr>
		<td><h4>Emergency Contact No : </h4></td>
		<td><input type="text" name="emergency"/></td>
		<td class="err"></td>
	</tr>
	<tr>
		<td><h4>Address : </h4></td>
		<td><textarea cols="40" rows="5" name="addr"/></textarea>
		<td class="err"></td>
	</tr>
	
	</table>
	<input type="submit" style="width: auto;" >
	<input type="reset" style="width: auto;" >
            </form>
              
                <div class="cleaner_h30"></div>
            </div>

         

        </div>

        <div class="cleaner"></div>
        <div id="top"></div>
        <div id="bottom"></div>
    </div>

<?php require("includes/footer.php"); ?>