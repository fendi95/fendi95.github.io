<!doctype html>
<html>
         <head> 
         <link href="style.css" rel="stylesheet" type="text/css"/> 
		 <link href="style filter.css" rel="stylesheet" type="text/css"/> 
		 <link href="style chat box.css" rel="stylesheet" type="text/css"/>
		 <link href="style pesan.css" rel="stylesheet" type="text/css"/>
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
								<section id="article1"><h2></h2>
                                <div class="t_images"> 
                                    <div align="center"><br>
                                    <img src="mercu.png"height="350px" width="350px"/>

									<div align="center">
									
									<h2> Tugas Besar Smart Web </h2>
									<p>
									<h3>Anggota</h3>
									<br>
									
									
									NAMA / NIM	:	Mulyo Efendi / 41516320022
									<br>
									NAMA / NIM	:	Aziz Budhi Setiawan / 41516320021
									<br>
									NAMA / NIM	:	Muhamad Bagaswara / 41516320033
									
									</div>
									<br>
										Aplikasi ini di buat untun memudahkan dalam pemesanan tiket untuk melihat fil favorit anda di bioskop yang anda sukai.
										Kami menyediakan fitu filtering untuk memfilter film dengan genre yang anda sukai, dan kamu juga menyediakan chat box
										untung mengcoment atau bertanya tentang info seputar film.
									
                                    </div>
									
                                </div>
                            </section>
							<br>

								</article>
                  <aside> 
				  
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
										
										<p>
										
								<script>
								
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