<?php

session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'");

	//SELECT * FROM user WHERE username = 'csi'-- ' AND password = 'xxx'


	if (mysqli_num_rows($login) == 0) {
		die("Username atau password salah!");
	} else {
		$_SESSION['admin'] = 1;
		header("Location: index.php");
	}
	
}

?>
<!doctype html>
<html>
         <head> 
         <link href="style.css" rel="stylesheet" type="text/css"/> 
		 <link href="style filter.css" rel="stylesheet" type="text/css"/> 
		 <link href="style chat box.css" rel="stylesheet" type="text/css"/>
		 <link href="style pesan.css" rel="stylesheet" type="text/css"/>
		 <meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
                                    <form action="" method="post">
	
		<p>Username:</p>
		<input type="text" name="username">
		
		<p>Password:</p>
		<input type="password" name="password">
		
		<br>
		<br>
		<input type="submit" name="submit" value="Login">
	
	</form>

									
									
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