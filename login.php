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

                <img src="images/quake.jpg" alt="image" />
                <div class="news_title"><a href="http://edition.cnn.com/2015/04/29/asia/nepal-earthquake/"> Nepal Earthquake</a></div>
                <p>Nepal- A powerful earthquake, the country's worst in 80 years, rocked mountainous Nepal on Saturday, 25th April. On Sunday, Nepal was struck by a major aftershock.</p>
		<div class="cleaner"></div>
		<br/>
		<img src="images/quake2.jpg"/>
		<div class="news_title"><a href="http://www.bloomberg.com/news/articles/2015-04-27/counting-the-economic-cost-of-natural-disasters">Counting the Economic Cost of Natural Disasters</a></div>
		<p>The Asia-Pacific region is the world's most disaster-prone, with earthquakes and floods wreaking havoc on economies.</p>

          </div>

      </div> <!-- end of side column -->

        <div id="templatemo_main_column">
	       
	       <?php $id=$_GET['id'];
	    if($id==0)	echo "<div id='disp_name'>Login Unsuccessful</div>";
	     ?>
	     
            <div class="main_column_box">
            
            <div class="cleaner_h80"></div>
            
                <h3><span></span>User Login</h3>
            <form action="login_check.php" method="post">
                <table border="1" style="width: 85%;padding: 10px;">
        <tr>
		<td><h4>Username : </h4></td>
		<td><input type="text" name="uname" /></td>
	</tr>
	
	<tr>
		<td><h4>Password : </h4></td>
		<td><input type="password" name="pass"/></td>
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