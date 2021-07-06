<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link
			rel="stylesheet"
			href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
			integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
			crossorigin="anonymous"
		/>
		
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/app.css">
		<title>Document</title>
	</head>

	<body>
		<header class="v-header container">
			<div class="fullscreen-video-wrap">
				<img name="slide" alt="" width="100%" height="100%" />
			</div>
			<!-- <div class="header-overlay"></div> -->
			<div class="header-content">
                <h3 class="toph1" data-aos="fade-down">Hello👋</h3>
				<h1 data-aos="zoom-in">I'm Sohaib</h1>
				<p data-aos="zoom-in">Front end developer</p>
				<a data-aos="zoom-in" class="btn">View my work</a>
			</div>
		</header>
		<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav> -->
		<!-- About Section -->
		<section>
			<div>
				<h2 class="h2-align h2-border" data-aos="zoom-in">About</h2>
				<span class="border-bottom" data-aos="zoom-in"></span>
			</div>
			<div class="grid">
				<div data-aos="fade-right">
					<div class="icon-container">
						<i class="fas fa-mobile"></i>
					</div>
					<h3>Responsive</h3>
					<p>My layouts will work on any device, big or small.</p>
				</div>
				<div data-aos="fade-left">
					<div class="icon-container">
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<h3>Fast</h3>
					<p>Fast load times and lag free interaction, my highest priority.</p>
				</div>
				<div data-aos="fade-right">
					<div class="icon-container">
						<i class="fas fa-rocket"> </i>
					</div>
					<h3>Dynamic</h3>
					<p>
						Websites don't have to be static, I love making pages come to life.
					</p>
				</div>
				<div data-aos="fade-left">
					<div class="icon-container">
						<i class="fas fa-lightbulb"></i>
					</div>
					<h3>Intuitive</h3>
					<p>Strong preference for easy to use, intuitive UX/UI.</p>
				</div>
			</div>
		</section>
		<!-- Profile Grid -->
		<div class="profile-grid">
			<div>
				<img src="" alt="" class="image" />
			</div>
			<div>
				<h1>Skills</h1>
				<div class="skills" data-aos="zoom-in-left">
					<i class="fab fa-html5 fa-5x"></i>
					<i class="fab fa-css3-alt fa-5x"></i>
					<i class="fab fa-sass fa-5x"></i>
					<i class="fab fa-bootstrap fa-5x"></i>
					<i class="fab fa-js fa-5x"></i>
					<i class="fab fa-github fa-5x"></i>
				</div>
			</div>
		</div>
		<div>
			<div class="profle-content">
				<h2 class="profile-h2">Who is this guy?</h2>
				<p class="profile-p" data-aos="zoom-in">
					I'm a Front-End Developer in Lahore,Pakistan I have serious passion
					for UI effects, animations and creating intuitive, dynamic user
					experiences. Let's make something special.
				</p>
			</div>

			<!-- Projects -->
			<h2 data-aos="zoom-in">PROJECTS</h2>
			<span class="border-bottom" data-aos="zoom-in"></span>
			<div class="projects-flex" data-aos="flip-down">
				<ul>
					<li><a href=""> ALL</a></li>
					<li><a href="">HTML/CSS</a></li>
					<li><a href="">JAVASCRIPT</a></li>
					<li><a href="">DESIGN</a></li>
				</ul>
			</div>
			<div class="projects">
				<div class="contain" id="contain">
					<img 
						src="https://images.unsplash.com/photo-1608503402312-3058a57dbdae?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNjd8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt=""
					/>
					
						<div class="text" id="viewProject">
							<p class="view" id="images">View</p>
					
							<div class="view-project hidden ">
								
								<!-- This is the Closing Button -->
								
             
                            </div>
						</div>
				</div>
				<div class="contain"  id="contain">
					<img
						src="https://images.unsplash.com/photo-1606851279207-1c6eb46d6b9f?ixid=MXwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyMjl8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt=""
					/>
					<div class="overlay overlay2">
						<div class="text" id="viewProject">  
						<p class="view">View</p>
                         <div class="view-project hidden ">
                             <span>&times;</span>
						</div>
					</div>
				</div>
			</div>
			<div class="contain"  id="contain">
				<img
					src="https://images.unsplash.com/photo-1608321632050-4ad4a4a74ae5?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzNTR8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
					alt=""
				/>
				<div class="overlay overlay2">
					<div class="text" id="viewProject">
						<p class="view">View</p>
						<div class="view-project hidden ">
                            <span>&times;</span>
                           
                        </div>
					</div>
				</div>
			</div>
			<div class="contain"  id="contain">
				<img
					src="https://images.unsplash.com/photo-1608370617870-dc99b1b44a31?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzOTh8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
					alt=""
				/>
				<div class="overlay overlay2">
					<div class="text" id="viewProject">
						<p class="view">View</p>
						<div class="view-project hidden ">
                            <span>&times;</span>
                           
                        </div>
					</div>
				</div>
			</div>
			<div class="contain"  id="contain">
				<img
					src="https://images.unsplash.com/photo-1608371006997-19a3c3ece8dc?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzOTN8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
					alt=""
				/>
				<div class="overlay overlay2">
					<div class="text" id="viewProject">
						<p class="view">View</p>
						<div class="view-project hidden ">
                            <span>&times;</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="contain">
				<img
					src="https://images.unsplash.com/photo-1608346675041-bdc83d60aa9e?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzOTd8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
					alt=""
				/>
				<div class="overlay overlay2">
					<div class="text" id="viewProject">
						<p class="view">View</p>
						<div class="view-project hidden ">
                            <span>&times;</span>
                        </div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->

		<div class="moda">
			<div class="modal-contet">
				<h1 class="close">&times;</h1>
				<img  class="modal-img" src="" alt="">
			<a href="" class="link">Live Website</a>
				<a href="" class="link">View Source Code</a>
			</div>
		</div>

		<!-- Contact  -->
		<h2>CONTACT</h2>
		<span class="border-bottom"></span>
		<div class="contact-flex">
			<div>
				<form action="">
					<input type="text" placeholder="Name" />
					<!-- <label for="">Email:</label> -->
					<input type="email" placeholder="Email" />
					<textarea
						name=""
						id=""
						cols="30"
						rows="10"
						placeholder="Message"
						size="50"
					></textarea>
					<button class="btn1">Send</button>
				</form>
			</div>
		</div>

		<div class="footer">
			<div>
				<a href=""><i class="fab fa-facebook-f"></i></a>
				<a href=""> <i class="fab fa-instagram"></i></a>
				<a href=""><i class="fab fa-linkedin-in"></i></a>
				<p>SOHAIB <span class="p-f">©2020</span></p>
			</div>
		</div>

		<script src="js/app.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<script>
			AOS.init();
		</script>
	</body>
</html>

    </body>
</html>
