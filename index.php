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
	    if($id==0)	echo "<div id='disp_name'>Logout Successful</div>";
	     ?>

            <div class="main_column_box">
            
            <div class="cleaner_h80"></div>
            
                <h3 id="topic1"><span></span>Welcome to NDMS!</h3>

              <img id="image1" class="image_wrapper fl_image" src="images/nd3.jpg" alt="image" />
              <p class="em_text">A natural disaster is a major adverse event resulting from natural processes of the Earth; examples include floods, volcanic eruptions, earthquakes, tsunamis, and other geologic processes. A natural disaster can cause loss of life or property damage, and typically leaves some economic damage in its wake, the severity of which depends on the affected population's resilience, or ability to recover.</p>

                <div class="cleaner"></div>
            </div>
	       <p id="cont"></p>
          <div class="main_column_box" id="topic_head">
                <h3><span></span>Our Services</h3>
            <img class="image_wrapper fr_image" src="images/nd4.jpg" alt="image" />
                <p>The NDMS provides its users with information on how to survive a Natural Disaster. We want the people out there to know the dangers of Natural Disasters and to understand how important it is to be prepared incase of a Natural Disaster.</p>

            <div class="cleaner_h30"></div>

				<ul class="list_02">
                	<li>We provide interactive videos which depict every step needed to take in time of a disaster.</li>
                    <li>We provide a descriptive account of those people who already witnessed a disaster and how they survived it.</li>
                    <li>We provide a Lost and Found Functionality for those people who went missing in a recent event.</li>
                    <li>We provide a descriptive overview of every disaster known.</li>
                    <li>We provide maps.</li>
                </ul>
            <div class="cleaner_h30"></div>
                

          </div>

        </div>

        <div class="cleaner"></div>
        <div id="top"></div>
        <div id="bottom"></div>
    </div>

<?php require("includes/footer.php"); ?>