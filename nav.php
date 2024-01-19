
<div id="templatemo_menu">
                <ul>
                      <li><a href="home.php" class="current">Homepage</a></li>
                      <li><a href="#" onclick="myFun();" >Disasters</a></li>
				<ul id="disp_li" style="display: none;">
						<li><a href="#" onclick="earthquake();">Earthquakes</a></li>
						<li><a href="#" onclick="avalanche();">Avalanches</a></li>
						<li><a onclick="volcano();" href="#">Volcanic Eruptions</a></li>
						<li><a onclick="hydro();" href="#" >Hydrological Disasters</a></li>
						<li><a onclick="meteor();" href="#" >Meteorological Disasters</a></li>
						<li><a onclick="wildfire();" href="#" >Wildfires</a></li>
						<li><a onclick="health();" href="#" >Health Disasters</a></li>
						<li><a onclick="space();" href="#" >Space Disasters</a></li>
				</ul>
		      <li><a href="lost_found.php">Lost and Found</a></li>
			  <li><a href="experience.php">Disaster Experiences</a></li>
			  <li><a href="obituary.php">Obituaries</a></li>
			  <li><a href="videos.php">Tutorial Videos</a></li>
		      <li><a href="index.php?id=0">Logout</a></li>
		      <li><a href="contact1.php">Contact Information</a></li>
                </ul>
		<script>
				function contact() {
						document.getElementById("topic1").innerHTML="Contact Information";
						document.getElementById("image1").src="images/admin3.jpg";
						document.getElementById("desc1").innerHTML="";
						document.getElementById("cont").innerHTML="For any queries please contact any of the following<ul style='font-size:17px;'><li>Krati Tripathi<br>+91 8056954937<br>krati.tripathi2012@vit.ac.in</li><br><li>Divyansh Sharma<br>+91 8870878114<br>divyansh.sharma2012@vit.ac.in</li><br><li>Bhupesh Singh<br>+91 8124017707<br>bhupesh.singh2012@vit.ac.in";
						document.getElementById("topic_head").innerHTML="";
						document.getElementById("image2").src="";
				}
				function myFun() {
						document.getElementById("disp_li").style.display="block";
				}
				function volcano() {
						document.getElementById("topic1").innerHTML="Volcanic Eruptions";
						document.getElementById("image1").src="images/vol1.jpg";
						document.getElementById("desc1").innerHTML="Volcanoes can cause widespread destruction and consequent disaster in several ways. The effects include the volcanic eruption itself that may cause harm following the explosion of the volcano or the fall of rock. Second, lava may be produced during the eruption of a volcano. As it leaves the volcano, the lava destroys many buildings and plants it encounters. Third, volcanic ash generally meaning the cooled ash - may form a cloud, and settle thickly in nearby locations. When mixed with water this forms a concrete-like material. In sufficient quantity ash may cause roofs to collapse under its weight but even small quantities will harm humans if inhaled. Since the ash has the consistency of ground glass it causes abrasion damage to moving parts such as engines. The main killer of humans in the immediate surroundings of a volcanic eruption is the pyroclastic flows, which consist of a cloud of hot volcanic ash which builds up in the air above the volcano and rushes down the slopes when the eruption no longer supports the lifting of the gases. It is believed that Pompeii was destroyed by a pyroclastic flow. A lahar is a volcanic mudflow or landslide. The 1953 Tangiwai disaster was caused by a lahar, as was the 1985 Armero tragedy in which the town of Armero was buried and an estimated 23,000 people were killed .";
						document.getElementById("topic_head").innerHTML="";
						document.getElementById("image2").src="images/vol2.jpg";
				}
				function earthquake() {
						document.getElementById("topic1").innerHTML="Earthquakes";
						document.getElementById("image1").src="images/earthq1.jpg";
						document.getElementById("desc1").innerHTML="An earthquake is the result of a sudden release of energy in the Earth's crust that creates seismic waves. At the Earth's surface, earthquakes manifest themselves by vibration, shaking and sometimes displacement of the ground. The vibrations may vary in magnitude. Earthquakes are caused mostly by slippage within geological faults, but also by other events such as volcanic activity, landslides, mine blasts, and nuclear tests. The underground point of origin of the earthquake is called the focus. The point directly above the focus on the surface is called the epicenter. Earthquakes by themselves rarely kill people or wildlife. It is usually the secondary events that they trigger, such as building collapse, fires, tsunamis (seismic sea waves) and volcanoes, that are actually the human disaster. Many of these could possibly be avoided by better construction, safety systems, early warning and planning.";
						document.getElementById("topic_head").innerHTML="";
						document.getElementById("image2").src="images/earthq2.jpg";
				}
				function avalanche() {
						document.getElementById("topic1").innerHTML="Avalanches";
						document.getElementById("image1").src="images/aval1.jpg";
						document.getElementById("desc1").innerHTML="An avalanche is a rapid flow of snow down a sloping surface. Avalanches are typically triggered in a starting zone from a mechanical failure in the snowpack when the forces on the snow exceed its strength but sometimes only with gradually widening.";
						document.getElementById("topic_head").innerHTML="";
						document.getElementById("image2").src="images/aval2.gif";
				}
				function hydro() {
						document.getElementById("topic1").innerHTML="Floods";
						document.getElementById("image1").src="images/flood1.jpg";
						document.getElementById("desc1").innerHTML="A flood is an overflow of an expanse of water that submerges land.[9] The EU Floods directive defines a flood as a temporary covering by water of land not normally covered by water.[10] In the sense of 'flowing water', the word may also be applied to the inflow of the tide. Flooding may result from the volume of water within a body of water, such as a river or lake, which overflows or breaks levees, with the result that some of the water escapes its usual boundaries.[11] While the size of a lake or other body of water will vary with seasonal changes in precipitation and snow melt, it is not a significant flood unless the water covers land used by man like a village, city or other inhabited area, roads, expanses of farmland, etc.";
						document.getElementById("topic2").innerHTML="Tsunami";
						document.getElementById("desc2").innerHTML="Tsunamis can be caused by undersea earthquakes as the one caused by the 2004 Indian Ocean Earthquake, or by landslides such as the one which occurred at Lituya Bay, Alaska.";
						document.getElementById("image3").src="images/tsun1.jpg";
						document.getElementById("image2").src="images/hydro1.gif";
						document.getElementById("list1").innerHTML="";
				}
				function meteor() {
						document.getElementById("topic1").innerHTML="Cyclonic storms";
						document.getElementById("image1").src="images/cyclone1.jpg";
						document.getElementById("desc1").innerHTML="Cyclone, tropical cyclone, hurricane, and typhoon are different names for the same phenomenon a cyclonic storm system that forms over the oceans. The deadliest hurricane ever was the 1970 Bhola cyclone; the deadliest Atlantic hurricane was the Great Hurricane of 1780 which devastated Martinique, St. Eustatius and Barbados. Another notable hurricane is Hurricane Katrina which devastated the Gulf Coast of the United States in 2005.";
						document.getElementById("topic2").innerHTML="Droughts";
						document.getElementById("desc2").innerHTML="Drought is unusual dryness of soil, resulting in crop failure and shortage of water for other uses, caused by significantly lower rainfall than average over a prolonged period. Hot dry winds, high temperatures and consequent evaporation of moisture from the ground can contribute to conditions of drought.";
						document.getElementById("image3").src="images/dr1.jpg";
						document.getElementById("list1").innerHTML="Some more types of Meteorological Disasters are-<br><li>Blizzards</li><li>Hailstorms</li><li>Heatwaves</li><li>Tornados</li>";
						document.getElementById("image2").src="images/met1.png";
				}
				
				function wildfire() {
						document.getElementById("topic1").innerHTML="Wildfires";
						document.getElementById("image1").src="images/wild1.jpg";
						document.getElementById("desc1").innerHTML="Wildfires are large fires which often start in wildland areas. Common causes include lightning and drought but wildfires may also be started by human negligence or arson. They can spread to populated areas and can thus be a threat to humans and property, as well as wildlife.<br/>Notable cases of wildfires were the 1871 Peshtigo Fire in the United States, which killed at least 1700 people, and the 2009 Victorian bushfires in Australia.";
						document.getElementById("topic_head").innerHTML="";
						document.getElementById("image2").src="images/wild2.jpg";
				}
				function health() {
						document.getElementById("topic1").innerHTML="Epidemics";
						document.getElementById("image1").src="images/epi1.jpg";
						document.getElementById("desc1").innerHTML="An epidemic is an outbreak of a contractible disease that spreads through a human population. A pandemic is an epidemic whose spread is global. There have been many epidemics throughout history, such as the Black Death.";
						document.getElementById("topic_head").innerHTML="";
						document.getElementById("image2").src="images/epi2.jpg";
				}
				function space() {
						document.getElementById("topic1").innerHTML="Solar flare";
						document.getElementById("image1").src="images/sol1.jpg";
						document.getElementById("desc1").innerHTML="A solar flare is a phenomenon where the sun suddenly releases a great amount of solar radiation, much more than normal.";
						document.getElementById("topic2").innerHTML="Gamma-ray burst";
						document.getElementById("desc2").innerHTML="Gamma-ray bursts (GRBs) are flashes of gamma rays associated with extremely energetic explosions that have been observed in distant galaxies. They are the brightest electromagnetic events known to occur in the universe.[19] Bursts can last from ten milliseconds to several minutes. The initial burst is usually followed by a longer-lived 'afterglow' emitted at longer wavelengths (X-ray, ultraviolet, optical, infrared, microwave and radio).";
						document.getElementById("image3").src="images/gam1.jpg";
						document.getElementById("image2").src="images/space1.jpg";
						document.getElementById("list1").innerHTML="";
				}
		</script>
            </div> <!-- end of menu -->