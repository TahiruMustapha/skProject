<?php
include "database.php";
if(isset($_POST['submit'])){
	$first_name  = $_POST['first_name'];
	$email  = $_POST['email'];
	$message  = $_POST['message'];

	$sql = "INSERT INTO `my_project`(`id`, `name`, `comments`, `email`)
	 VALUES ('','$first_name','$email','$message')";

	 $result = mysqli_query($connection,$sql);
	 if($result){
		header("location: main.php?msg=New comment Added successfully");
	 }else{
		echo "Failed: " .mysqli_error($connection);
		
	 }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>How to become a Web Developer</title>
	<!-- boostrap link starts -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
	 integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<!-- boostrap link ends -->
     <!-- font awesome link starts -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
	  integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- font awesome link ends -->
      <link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	
	<style type="text/css">
		#header{
			height: 70vh;
            width: 100%;
			background: url(images/home-slide-2.jpg);
		}
		.left{
		    display:flex;
			align-items:center;
			height: 100%;
            width: 100%;
			
		}
		.left h2{
			color:white;
			margin-left:5rem;
			font-size:3rem;

		}
		.nav{
		
			width:100%;
			height:5rem;
			display:flex;
			align-items:center;
			justify-content:space-between;
		}
		.nav ul{
			display:flex;
			align-items:center;
			list-style:none;
		}
		.nav ul li{
			margin-right:5rem;
			color:white;
			font-size:1.2rem;
			
		}
		.nav ul li:hover{
			transition:all 2s ease-in;
			border-bottom:  4px solid orangered;
		}
		.nav p{
			color:white;
			margin-left:5rem;
			font-size:1.2rem;
		}
		#box{
			
			width: 100vw; 
			heiht:2000px;
			
			background:red;

		}
			#offset{
					
					position: relative;
					background:red;
					background:blue;
					width: 100%;
					padding-top:2rem;
					}
			#heading{
				text-align: center;
				font-size: 40px;
				width: 80%;
				height: 60px;
				margin:0 auto;
				
				background:#d6ffd6;
				
			
			}
			.firstsection{
				display:flex;
				flex-direction:column;
				background:green;
			}
				#intro{
					borer: 2px solid;
					height: 290px;
					margin: 20px;
					font-size: 25px;
					tet-align: center;
				}
					#pic{
						borer: 2px solid;
						width: 40%;
						height: 400px;
						display: inline-block;
						background-image: url(/site/comp.png);
						background-position: center;
						background-size: cover;

					}
						#mean{
							borer: 2px solid;
							width: 59%;
							height: 400px;
							display: inline-block;
							font-size: 25 px;
							overflow: hidden;
						}
							#Qestion1{
								border:2px solid;
								font-size: 23px;
								width: 10%;
							}
								#Topic2{
									borer: 2px solid;
									width:61%;
									height:60px;
									margin: 10px; 
									textalign: center;
									font-weight: bold;
									font-size: 30px;
								}
									#Inner{
										bordr: 2px solid;
										height: 425px;
									}
										#Types{
											bordr: 2px solid;
											width: 25%;
											height: 34px;
											font-size: 23px;
											font-weight: bold;
										}
											#table{
												bottomrder: 1px solid;
												height: 100px;
											}
												#table2{
													brder: 2px solid;
													width: 60%;
													height: 500px;
													background-size: cover;
													background-image: url(/site/fft.png);
													background-position: center;

												}
													#step{
														borer: 2px solid;
														height: 80px;
														with: 35%;
														font-size: 23px;
														margin: 8px 0px;
														padding: 3px;

													}
														#head{
															boder: 2px solid;
															height: 30px;
															font-size: 30px;
														    width: 30%;
														    /* font-kerning: revert; */
														    font-weight: bold;
														}
															#commentsection{
																display: flex;
																justify-content: center;
																border: 2px solid;
																margin-bottom: 10px;s
																width: 81%;
																margin: auto;
																background:#eacece;
																padding: 20px;


															}
															

		
	</style>
	<script type="text/javascript">
		setInterval(function(){winow.location=''},1000)
	</script>
	
</head>
<body >
	
	      <div id="header">
			<div class="nav">
				<p>majeed</p>
				<ul>
					<li>Home</li>
					<li>About</li>
					<li>Contact</li>
				</ul>
			</div>
			<div class="left">

				<h2>How To Become A Web Developer</h2>
			</div>
		     
		  </div>
		  <div class="content">
<!-- <div id="box"> -->

		<div id="offset">
			<div id="heading">
				<span>HOW TO BECOME A WEB DEVELOPER</span>
			</div>
			<div class="firstsection">
						<div>
						Web developers carry out vital work that sustains our digital society. These professionals create websites and work behind the scenes to ensure that applications run smoothly. They provide stability, add visual flair, and integrate the platforms that house our data.
					Learning how to become a web developer may seem daunting given the scope of the job, but the process itself is straightforward. Individuals wondering "What is a web developer?" can consult this guide for information on the education requirements to start careers in this field.
					To become a Web Developer, you should have an understanding of HTML, CSS, and JavaScript. It’s also recommended to learn about CSS and CSS frameworks. Developing these fundamental web development skills will give you the foundation and logic for communicating with programming languages.
						</div>
			
					<div >
						What Is a Web Developer?
						Web developers design, maintain, and optimize websites and other web-based applications for consumer use. They rely on insights from computer programming, software development, and graphic design, often working alongside professionals in each field.
						Most web developers specialize in several aspects of the development process. Duties, tools, and techniques vary depending on the position. The following information provides insight into some common web developer roles.</span>
					</div>
			</div>
			<div id="Question1" style="font-size: 30px;font-weight: bold;">What Do Web Developers Do?</div>
	   			<span style="font-size: 23px;">
					Web developers typically work with web-based application servers, desktop or notebook computers, and other programming devices. They use those tools to develop the coding processes for functional and visually compelling websites. When writing code, web developers use languages like HTML, Python, JavaScript, SQL, PHP, and CSS.

					Web development also includes site maintenance and upkeep. In addition to design, qualified professionals evaluate code for accuracy, redundancies, and structural integrity. They increase site performance by enhancing server-side components and optimizing site elements for scalability or outside integration.

					Web developers often work alongside other professionals in web design and software development. These fields share some similarities, but the following information details some key differences to keep in mind.
				</span>
	 			<br></b>
				<div id="Inner">
		 			<div id="Topic2">Featured Online Web Development Bootcamps</div>
		 			<div id="Types">Types of Web developers</div>
		 			<div id="table">
		 				<span style="font-size:23px;">1).Front-End Developer:
		 					<br>These web developers focus on the user-facing sides of websites. They create intuitive user interfaces with a keen eye for compelling design.<br>
						</span>
					</div>
					<div id="table">
		 				<span style="font-size: 23px;">2).Back-End Developer:
		 					<br>Back-end developers specialize in websites' nuts and bolts, optimizing the crucial hidden elements most users never see. They often design databases and use languages like PHP, CSS, or Python.<br>
		 				</span>
					</div>
					<div id="table">	
						 <span style="font-size: 23px;">3).Full-Stack Developer:
						 	<br>Full-stack web developers combine front-end and back-end development. They consider the creation process from both angles and possess the skills to complete tasks on either end of the spectrum<br>
						 </span>
					</div>
	 			</div>
	 			<div style="font-size: 30px;font-weight: bold;">Steps To Become A Web Developer</div>
	 			<div id="table2"></div>
	 			<div id="step">Skilled web developers must complete formal education, gain practical experience, build a resume and portfolio, and, in some cases, earn additional certifications. Find out more about how each step can advance your career below.</div>
	 			<div id="head">1).Earn Degrees</div>
	 			<div id="explain" style="borer: 2px solid;height: 270px;font-size: 23px;">
	 				An aspiring web developer must first complete an education to develop basic coding and programming skills. In most cases, this is a computer science degree program with core courses in systems design, data management, and the essential programming languages used by industry professionals.

					An associate degree in computer science typically takes two years to complete, while a bachelor's degree in computer science could require four years. Senior-level roles may require more advanced education, like a master's or a doctorate, which include several more years beyond a bachelor's.

					The level of education required for employment varies among companies and sectors. While it is possible to land an entry-level web development position with an associate degree or certificate, a bachelor's degree will open up a wider range of opportunities and better position you for future advancement.
	 			</div> 
	 			<div id="head">2).Persue Intenship</div>
	 			<div id="explain" style="borer: 2px solid;height: 160px;font-size: 23px;">
	 				Landing a solid internship as a new web developer provides vital work experience. Internship opportunities give learners the chance to apply their knowledge and develop new skills as they engage with clients and collaborate with other developers.

					Some web developer degree programs provide internship placements. If your program does not provide placements, ask around your professional network. Employers and corporate partners often sponsor internship opportunities for new web developers.
				</div> 
	 			<div id="head">3).Build Your Portfolio</div>
	 			<div id="explain" style="boder: 2px solid;height: 190px;font-size: 23px;">
	 				Keeping an updated portfolio that highlights the quality and breadth of your accomplishments will appeal to potential employers. Some companies may require a portfolio when applying.

					Capstone course materials, completed work from past internships, and aspects of current side projects all make great portfolio items. Web developer programs often feature resources and opportunities to help build relevant portfolios.
	 			</div>
	 			<div id="head">4).Earn Certificate</div>
	 			<div id="explain" style="borer: 2px solid;height: 200px;font-size: 23px;">
	 				Certificates in web development offer several distinct advantages. These programs attest to any additional skills or coding competencies learners possess and keep professionals up to date with the latest developments in this evolving field. A certificate can also give applicants an extra boost on the job hunt.

					Some schools offer standalone certificates in front-end or full-stack web development. Conversely, businesses like Microsoft, Adobe, and Amazon offer exam-based certifications in areas like JavaScript and cloud development. Zend has similar opportunities in PHP training. Certification renewal requirements vary by provider.
	 			</div>
	 			<div id="head">5).Create Your Resume</div>
	 			<div id="explain" style="borer: 2px solid;height: 180px;font-size: 23px;">
	 				Every aspiring web developer needs a concise and informative resume. This document is an extension of your professional self, so it's important to know how to build a resume that accurately conveys your value and worth.

					Successful resumes highlight the skills and qualifications that make individuals stand among other job candidates. Applicants should list their programming competencies and coding languages, education and professional experience, and any other technical skills or industry certifications.
	 			</div>
	 		</div>
			 <h3 style="
			display: flex;
			justify-content: center;
		">
		  </div>
		<h2 class="comment-tile">	Comments Table</h2>

			</h3>

         <!-- table section starts -->
		 <?php
		   if(isset($_GET['msg'])) {
			$msg = $_GET['msg'];

			echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            $msg
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
			";
		   }
		 
		 ?>
		 <table class="table table-hover table-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">COMMENT</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
	<?php
	// include "database.php";
	$sql = "SELECT * FROM `my_project`";
	$result = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_assoc($result)) {
          ?>
			<tr>
				<td> <?php echo $row['id'] ?> </td>
				<td> <?php echo $row['name'] ?> </td>
				<td> <?php echo $row['email'] ?> </td>
				<td> <?php echo $row['comments'] ?> </td>
				
				<td>
					<a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"> <i class ="fa-solid fa-pen-square 
					fs-5 me-3"></i> </a>
					<a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"> <i class ="fa-solid fa-trash fs-5"></i> </a>
				</td>
				
				</tr>
		  <?php
	}
	?>
   

  </tbody>
</table>
         <!-- table section ends -->
			<div>
               <div class="navbar navbar-light justify-content-center fs-3 mb-5">
                     
			   </div>
			   <div class="container pb-4">
				 <div class="text-center  mb-4">
                    <h3>Post New Comments</h3>
					<p>Complete form to post comments</p>
				 </div>
			   </div>
			  
			   <div class="container d-flex justify-content-center">
                <form method="post" style = "width:50vw; min-width:300px;">
				<div class="row">
					<div class="col">
						<label class="form-label">First Name</label>
						<input type="text" name = "first_name" placeholder="Enter First Name" class="form-control" >
					</div>
					
					<div class="col mb-3">
						<label class="form-label">Email</label>
						<input type="email" name = "email" placeholder="example@gmail.com" class="form-control" >
					</div>

					<div class="mb-3">
						<label class="form-label">Comments</label>
						  <textarea placeholder="Enter Comments" name="message" class="form-control" ></textarea>
						
					</div>
					<div class="mb-5">
						<button type="submit" name="submit" class="btn btn-success" >Save</button>
						<a href="main.php" class="btn btn-danger">Cancel</a>
					</div>
				</div> 

				</form>
			   </div>
	 			
			</div>
			
	 		</div>
	 	</div>
	</div>
	
	<!-- bootstrap js link -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
	 integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script
	<!-- bootstrap js link -->
</body>
</html> 