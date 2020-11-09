<!doctype html>
<html>
         <head> 
		 <link href="style.css" rel="stylesheet" type="text/css"/> 
		 <link href="style filter.css" rel="stylesheet" type="text/css"/> 
		 <link href="style chat box.css" rel="stylesheet" type="text/css"/>
         </head>
         <body>
            <div id="wrapper">
                <header><h1>Movie Tix</h1></header>
                <nav>
                      <a href="index.php">Home</a> |
					  <a href="cooming soon.php">Coming soon</a> |	
                      <a href="about.php">About</a> |
                      <a href="#">Log In</a> |
                      <a href="#">Contact </a>
                    </nav>                 
                    <nav></nav>
                        <article>
								<section id="article1"><h2>Coming soon</h2>
								
								<div class="t_images">
								<div class="row">
									
									<div class="column adventure">
									<div class="content">

											<div align="left"> 
											<h3> MULAN (2020) </h3>
												<img src="mulan.jpg"height="225x" width="175px">  
												
											</div>	
											<br>
												<div align="center"> 
												
													<iframe width="560" height="315" src="https://www.youtube.com/embed/KK8FHdFluOQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
										</div>
										</div>
									
									</div>
								</div>	
								<hr />
                            </section>
							
							<br>
							
                            <section id="article2">
                                <div class="t_images"> 
								<div class="row">
									<div class="column action">
									<div class="content">
                                    <div align="left">
									<h3>BLACK WIDOW</h3>
										<img src="bw.jpg"height="225x" width="175px">
                                    </div>
									<br>
												<div align="center"> 
													<iframe width="560" height="315" src="https://www.youtube.com/embed/ybji16u608U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
												
												
                                    </div>
									
									</div>
									</div>
                                </div>
								<hr />
                            </section>
                          
						   <br>
						   
						   <section id="article3">
                                <div class="t_images"> 
								<div class="row">
									<div class="column animation">
									<div class="content">
                                    <div align="left"
									<h3>THE SPONGEBOB MOVIE: SPONGE ON THE RUN </H3>
										<img src="sb.jpg"height="225x" width="175px">
									</div>
									
									<br>
												<div align="center"> 
													<iframe width="560" height="315" src="https://www.youtube.com/embed/-XOuu1vd_fk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
									
                                    </div>
                                </div>
								
								</div>
								</div>
								<hr />
                            </section>
							
							<br>
							
							
							<strong><center><a href="#" target="_blank"></a></strong>
								</article>
                  <aside><h3>Cari Film Anda</h3> 
				
						<form class="example" action="/action_page.php" style="margin:auto;max-width:1000px">
						<input type="text" placeholder="Judul Film" name="search2">
						<button type="submit"><i class="fa fa-search"> Cari</i> 
						</button>
						</form>
				  
				  <br>
				  
								<div id="myBtnContainer">
								<h3>Genre : </h3> 
									<br>
									<button class="btn active" onclick="filterSelection('all')">All</button> 
									
									<button class="btn" onclick="filterSelection('animation')"> Animation</button>
									<p>
									<button class="btn" onclick="filterSelection('action')"> Action</button>
									
									<button class="btn" onclick="filterSelection('comedy')"> Comedy</button>
									<p>
									<button class="btn" onclick="filterSelection('horor')"> Horor</button>
									
									<button class="btn" onclick="filterSelection('adventure')"> Adventure</button>
									<br>
								</div>
								
								<br>
								
								<button class="open-button" onclick="openForm()">Chat</button>

									<div class="chat-popup" id="myForm">
										<form action="/action_page.php" class="form-container">
											<h1>Chat</h1>

											<label for="msg"><b>Message</b></label>
												<textarea placeholder="Type message.." name="msg" required></textarea>

												<button type="submit" class="btn">Send</button>
												<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
										</form>
									</div>
								
								<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}



function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>
				  
				  </aside>           
         </body>
		 <footer>
		 <div id="footer"><b> Copyright &copy; 2020 Tugas Smart Web </b></div>
            </div>
		</footer>
</html>