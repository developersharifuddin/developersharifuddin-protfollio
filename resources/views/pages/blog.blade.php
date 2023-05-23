<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Blog Template · Bootstrap v5.0</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	

    

    <!-- Bootstrap core CSS -->
   <link href="{{asset('fontend/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- parallax CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('fontend/parallax/parallax.min.js')}}"></script>


<link href="{{asset('fontend/dist/css/blogs.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }



	   /* blog slider , blog post p string limit for post */
         .row .post .card .card-body .card-text{
            color: #555;
            overflow: hidden; 
            text-overflow: ellipsis;  
            display: -webkit-box;
            -webkit-line-clamp: 4; /* number of lines to show */
             line-clamp: 4; 
            -webkit-box-orient: vertical; 
             overflow: hidden; 
             text-overflow: ellipsis;  
             display: -webkit-box;
            -webkit-line-clamp: 4; /* number of lines to show */
             line-clamp: 4; 
            -webkit-box-orient: vertical;
          }
          


          

#header{
	transition:.5s; z-index: 99;
 }
   
  .navbar-nav{margin-left:auto;}
  #navbar2{margin-left:auto;}
  
     
 
    .navbar a, .navbar a.focus {
       color: #021f2c;
       white-space: nowrap;
       transition: .3s;
    }
     
     .navbar .active{
      color: #08115c;
    }
    
    
    .navbar a:hover, .navbar .active:focus, .navbar li:hover > a {
      color: rgb(7, 0, 0); 
    }
     
    .navbar a:visit {
      color:rgb(240, 0, 0);
    }
    
			   /* ============bottom header========== */
	  
			  #header{background: rgb(255, 255, 255); justify-content: center;}
			  #header .container{background:rgb(255, 255, 255); border-radius: 6px;}
			  #header .container .navbar-nav{padding: 0px 0px; min-height: 50px;}
			  #header .container .navbar-nav .nav-link{font-size: 19px;}
			  #header .container .navbar-nav .nav-link:hover{font-size: 19px; color: crimson;}
				  
			  
	  
		  /* ============hover animation only desktop view ============ */
		  @media all and (min-width: 992px) {
			   .navbar .dropdown-menu-end{ right:0; left: auto;  }
			  .navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
			   .navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
			  .navbar .dropdown-menu.fade-up{ top:180%;  }
			  .navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
		  }	
		  /* ============ desktop view .end// ============ */
		   

            
    .navbar .navbar-nav .hover-border:hover::after {
      content: '';
      display: block;
      color: black;
      width: 45px;
      height: 3px;
      margin:0 auto;     
      background:#e60000;
      bottom:0;
      right: calc(50% - 20px);      
    }
     
      
     
     
     .navbar-nav .dropdown-menu1::before {
      content: '';
      display: block;
      width:0;
      height:0;
      margin:0;     
      background:transparent;
        
       margin-bottom: 20px; 
       margin-top: -30px; 
       margin-left: 18px;
       
      border-left: 10px solid white;
      border-right: 10px solid white;
      border-bottom: 13px solid rgb(109, 3, 3);
      
    }
     
     
     
     
    .navbar-nav .dropdown-menu2::before {
      content: '';
      display: block;
      width:0;
      height:0;
      margin:0;     
      background:transparent;
        
       margin-bottom: 20px; 
       margin-top: -20px; 
       margin-left: 28px;
       
      border-left: 10px solid white;
      border-right: 10px solid white;
      border-bottom: 13px solid rgb(143, 0, 0);
      
    }
     
     
      

			@media (max-width: 767px) {
        .navbar .navbar-nav .nav-item:hover::after {
          content: '';
          display: block;
          color: black;
          width:0;
          height:0;
          margin:0 auto;     
          background:none;
          bottom:0;
          left: 0;    
        }}


		  .dropdown-large{ padding:1rem; }
	  
			  /* ============ desktop view ============ */
			  @media all and (min-width: 992px) {
				  .dropdown-large{min-width:500px;}
			  }	
	  
			   
				  
			  @media (min-width: 992px) and (max-width: 1400px){ 
				  #navbar2 #contact-btn{ display: none;}
					  
					  .fs-4 i.logo{font-size: 1.6rem;}
					  
					  }
					  
				  
			  @media (min-width: 992px) and (max-width: 1200px){ 
				  
				  #header .container .navbar-nav .nav-link{font-size: 17px;}
				  #header .container .navbar-nav .nav-link:hover{font-size: 17px;}
				  .navbar-brand img{height: 30px;}
					  
					  }
	  
	  
			  @media all and (max-width: 991px) {
				  .dropdown-large a{text-decoration: none; color: black;}
				  #header{ min-height: 70px;}
				  #header .container{ top: 0; z-index: 99; background: white; position: fixed; border-radius: 0px;}
				  #top-nav {display: none;}
				  #header{ position: fixed;}
				  #btn{margin-bottom: 12px; margin-left: 22px;}
			  }	
	  
			   
			  /* ============ desktop view .end// ============ */
				
							
			#header {
				position: fixed;
				top: 0;
			width: 100%;
			display: block;
			transition: top 0.3s;
			}
						
			.nav-scroller {
			margin-top: 70px;
			}




			

  	/* ============ footer=========== */


  .footer{margin-bottom: 20px;padding-bottom: 0; bottom: 0;}
  .footer p, .footer h4{color:white}
  .footer-link ul li{color:white; }
  .footer-link ul li a{color:white;}
  .link ul li i{color:rgb(238, 15, 15); }
  
 .link .header::after{
  content: '';
  display: block;
  width: 20%;
  height: 2px;
  margin:0 auto;
  margin-top:10px;
  background:#bb9429;
  bottom:0; 
  margin-left: 0;
  
 }
        .link ul li{list-style-type: none; padding: 8px 0;}
	    .link a{color: #c9c7c7; text-decoration: none;}
		.link a:hover{color: #ffffff;}
		.link .bi{color: #3380f3; font-size: 12px;}
		.social-links i{color: aliceblue; font-size: 18px;}
		.social-links a{padding: 8px;}

  

				
			  </style>
	  
	  <script type="text/javascript">
		  document.addEventListener("DOMContentLoaded", function(){
			  /////// Prevent closing from click inside dropdown
			  document.querySelectorAll('.dropdown-menu').forEach(function(element){
				  element.addEventListener('click', function (e) {
					  e.stopPropagation();
				  });
			  })
		  }); 
		  // DOMContentLoaded  end
	  </script>



<script>
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
	var currentScrollPos = window.pageYOffset;
	  if (prevScrollpos > currentScrollPos) {
		document.getElementById("header").style.top = "0";
	  } else {
		document.getElementById("header").style.top = "-70px";
	  }
	  prevScrollpos = currentScrollPos;
	}
	</script>
		  
   

<!----1 line text limit css

max-width: 1200ch; overflow: hidden; text-overflow: ellipsis;  white-space: nowrap;

-->

<!----3 line text limit css

 overflow: hidden; text-overflow: ellipsis;  display: -webkit-box;
				-webkit-line-clamp: 3; /* number of lines to show */
						line-clamp: 3; 
				-webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;  display: -webkit-box;
				-webkit-line-clamp: 3; /* number of lines to show */
						line-clamp: 3; 
				-webkit-box-orient: vertical;

-->
    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
   
  </head>
  
  
  <body>
	  
      <!-- read more button--

	    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis veritatis
			animi aliquam laboriosam velit, esse, blanditiis aspernatur sint est magnam debitis delectus i
			
			 <span class="moreText"> assumenda sapiente expedita labore atque! Sint
				 velit cumque minus pariatur quisquam, beatae ab quo impedit eaque 
				 soluta vel laboriosam itaque similique 
				   culpa doloremque aperiam molestiae quos incidunt dolore iure officia! 
					</span></p>
			  <button class="read-more-btn">Read More</button>
		
			   
			<script>
				const readMoreBtn = document.querySelector(".read-more-btn");
				const text = document.querySelector(".text");
	
				readMoreBtn.addEventListener("click", (e) => {
				text.classList.toggle("show-more");
				if (readMoreBtn.innerText === "Read More") {
					readMoreBtn.innerText = "Read Less";
				} else {
					readMoreBtn.innerText = "Read More";
				}
				});
			</script>
		-->


		<nav class="navbar navbar-expand-lg w-100" id="header">
				
				<div class="container">
					<a class="navbar-brand" href="#">
						<img src="{{asset('fontend/img/developerSharifLogo.png')}}" height="60px" width="auto" alt="">
					</a>
				<button class="navbar-toggler text-dark p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fw-bold fs-1 my-auto">
						<i class="bi bi-list"></i><i class="bi bi-justify-right d-none"></i>
					</span>
				</button>
				<div class="collapse navbar-collapse justify-content-sm-start" id="navbarCollapse">
					<ul class="navbar-nav mb-2 mb-md-0 ml-0" id="navbar-nav1">
					<li class="nav-item px-3 hover-border"> <a class="nav-link active" id="link" aria-current="page" href="/">Home</a> </li>
					<li class="nav-item px-3 hover-border"> <a class="nav-link" href="#">About</a> </li>
					<li class="nav-item px-3 hover-border"> <a class="nav-link" href="#">Blog</a> </li>
		

					<li class="nav-item dropdown d-none">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
						<ul class="dropdown-menu dropdown-menu2 fade-down before" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="#">user Login</a></li>
						<li><a class="dropdown-item" href="#">Register</a></li>
						<li><a class="dropdown-item" href="#">Promote your Dreem</a></li>
						</ul>
					</li>
		
					<li class="nav-item px-3 hover-border"> <a class="nav-link" href="contact.html">Contact</a> </li>
					</ul>
					
					<ul class="navbar-nav" id="navbar2">

					
						<li class="nav-item hover-border"><a href="" class="nav-link"  data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
						<span class="m-auto d-none d-sm-none d-md-block" style="border-right: 3px solid rgb(231, 134, 23); height: 15px;"></span>
						
						<li class="nav-item hover-border"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#sign-upModal">Sign-up</a></li>
						
						<li class="nav-item mt-2"> <a class="link-secondary" href="#" aria-label="Search"> <button style="border: none; outline: none; background: transparent;" data-bs-toggle="modal" data-bs-target="#exampleModal">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
							fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
							stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" ><title>Search</title>
							<circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg></button>
							</a></a></li>
						
					</ul>

					
				</div>

				
				</div>
			</nav>
    
    <div class="container mt-2">
		<div class="row justify-content-center">
			<div class="col-lg-10">

				
			
			<!-- block post navbar---->
			<div class="container nav-scroller py-1 mb-2 border-top" id="nav-scroller">
				<nav class="nav d-flex justify-content-between">
				<a class="p-2 link-secondary" href="#">World</a>
				<a class="p-2 link-secondary" href="#">U.S.</a>
				<a class="p-2 link-secondary" href="#">Technology</a>
				<a class="p-2 link-secondary" href="#">Design</a>
				<a class="p-2 link-secondary" href="#">Culture</a>
				<a class="p-2 link-secondary" href="#">Business</a>
				<a class="p-2 link-secondary" href="#">Politics</a>
				<a class="p-2 link-secondary" href="#">Opinion</a>
				<a class="p-2 link-secondary" href="#">Science</a>
				<a class="p-2 link-secondary" href="#">Health</a>
				<a class="p-2 link-secondary" href="#">Style</a>
				<a class="p-2 link-secondary" href="#">Travel</a>
				</nav>
			</div>


			<!-----start paralux for banner------>			
			<div class="container mb-4">
				<div class="parallax" data-z-index="1" data-parallax="scroll" data-image-src="{{asset('fontend/images/slider1.jpg')}}">

				<div class="row container info justify-content-center m-auto">
						
							<div class="container col-lg-6">
									<div class="text-center text-white m-auto">
									<h2 class="fw-bold pt-4"><span class="border-bottom border-3 border-warning pb-1">Developer Blog</span></h2>
									</div>
							</div>
						


							<div class="col-lg-8">
										<nav class="m-auto px-4" style="--bs-breadcrumb-divider: '>'; color: #fff;" aria-label="breadcrumb">
											<ol class="breadcrumb fs-5">
												<li class="breadcrumb-item"><a href="#" class="text-decoration-none text-danger">Home</a></li>
												<li class="breadcrumb-item text-white" aria-current="page"> Blog</li>
											</ol>
										</nav>
					
									<div class="blog-slider">
											<div class="col-md-8 py-3 px-4 mb-5">
													<h2 class="display-lg-4 title text-white">Title of a longer featured blog post</h2>
													<p class="fs-6 text-white">Created on <span><a href="">2022-01-23 11:23:27</a></span> By <span><a href="">Sharif</a></span></p>
													<p class="lead mb-0 fs-6 text-white"> <a href="#" class="text-white fw-bold btn btn-danger">Get a Quats</a></p>
												
											</div>
										</div>
								</div>

								
							<div class="col-lg-4 my-auto">
								<div class="blog-slider">
									<div class="col-md-12 py-3 text-center">
											<h2 class="title text-white">Subscribe now</h2>
											<p class="lead mb-0 fs-6 text-white text-center"> 
												<a href="#" class="text-white fw-bold btn btn-danger">Subscribe</a></p>
										
									</div>
								</div>
							</div>

			
					</div>
				</div>


				
					
					

			</div>
			


					<main class="container">

					
						<!-- block post row left right---->

					<div class="row g-5">
					
					<!-- block post row left---->
						<div class="post col-md-8">
						
									<div class="card mb-3">
										<img src="{{asset('fontend/card/blog_04.jpg')}}" class="card-img-top" alt="...">
										<div class="card-body">
											<h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit . </h4>
											
											<p class="card-text" id="text-limit">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
												Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
												took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
												but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
												with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
												with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
											
												<p>Created on <i class="bi bi-stopwatch"></i><span>
													<a href="">2022-01-23 11:23:27</a></span> By <i class="bi bi-person"></i><span>
														<a href="">Sharif</a></span></p>
												
												<div class="row gap-0 m-auto bg-light">
													<div class="col-auto">
														<span class="text-start">
															<span class="fs-6"><i class="bi bi-hand-thumbs-up fs-3"></i > 222 likes</span>
															<span class="fs-6 px-4"><i class="bi bi-chat-dots fs-3"></i> 12 comments</span>
														</span>
													</div>
													<div class="col text-end">
														<p class="text-end my-auto">
															<span class="text-end"><a href="{{route('single-post')}}"><button class="btn btn-danger">Read more</button></a></span>
														</p>
													</div>
												</div>
												
										</div>
										
								</div>
									<div class="card mb-3">
										<img src="{{asset('fontend/img/sharif2.jpg')}}" class="card-img-top" alt="sharif uddin">
										<div class="card-body">
											<h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit . </h4>
											
											<p class="card-text" id="text-limit">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
												Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
												took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
												but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
												with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
												with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
											
												<p>Created on <i class="bi bi-stopwatch"></i><span>
													<a href="">2022-01-23 11:23:27</a></span> By <i class="bi bi-person"></i><span>
														<a href="">Sharif</a></span></p>
												
												<div class="row gap-0 m-auto bg-light">
													<div class="col-auto">
														<span class="text-start">
															<span class="fs-6"><i class="bi bi-hand-thumbs-up fs-3"></i > 222 likes</span>
															<span class="fs-6 px-4"><i class="bi bi-chat-dots fs-3"></i> 12 comments</span>
														</span>
													</div>
													<div class="col text-end">
														<p class="text-end my-auto">
															<span class="text-end"><a href="single-post.html"><button class="btn btn-danger">Read more</button></a></span>
														</p>
													</div>
												</div>
												
										</div>
										
								</div>




								<div class="card mb-3">
									<img src="{{asset('fontend/card/testimonial.png')}}" class="card-img-top" alt="blog post">
									<div class="card-body">
										<h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit . </h4>
										
										<p class="card-text" id="text-limit">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
											Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
											took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
											but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
											with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
											with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
										
											<p>Created on <i class="bi bi-stopwatch"></i><span>
												<a href="">2022-01-23 11:23:27</a></span> By <i class="bi bi-person"></i><span>
													<a href="">Sharif</a></span></p>
											
											<div class="row gap-0 m-auto bg-light">
												<div class="col-auto">
													<span class="text-start">
														<span class="fs-6"><i class="bi bi-hand-thumbs-up fs-3"></i > 222 likes</span>
														<span class="fs-6 px-4"><i class="bi bi-chat-dots fs-3"></i> 12 comments</span>
													</span>
												</div>
												<div class="col text-end">
													<p class="text-end my-auto">
														<span class="text-end"><a href="single-post.html"><button class="btn btn-danger">Read more</button></a></span>
													</p>
												</div>
											</div>
											
									</div>
									
							</div>





							<div class="card mb-3">
								<img src="{{asset('fontend/card/faqs.jpg')}}" class="card-img-top" alt="laravel developer">
								<div class="card-body">
									<h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit . </h4>
									
									<p class="card-text" id="text-limit">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
										Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
										took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
										but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
										with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
										with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
									
										<p>Created on <i class="bi bi-stopwatch"></i><span>
											<a href="">2022-01-23 11:23:27</a></span> By <i class="bi bi-person"></i><span>
												<a href="">Sharif</a></span></p>
										
										<div class="row gap-0 m-auto bg-light">
											<div class="col-auto">
												<span class="text-start">
													<span class="fs-6"><i class="bi bi-hand-thumbs-up fs-3"></i > 222 likes</span>
													<span class="fs-6 px-4"><i class="bi bi-chat-dots fs-3"></i> 12 comments</span>
												</span>
											</div>
											<div class="col text-end">
												<p class="text-end my-auto">
													<span class="text-end"><a href="single-post.html"><button class="btn btn-danger">Read more</button></a></span>
												</p>
											</div>
										</div>
										
								</div>
								
						</div>
									
								
								
							
							
						
						
						
					

						<nav class="blog-pagination" aria-label="Pagination">
							<a class="btn btn-outline-primary" href="#">Older</a>
							<a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
						</nav>

						</div>

						
						
						
						<!--start block post row right- navbar -->
						


						
							<!-----about section-->
					

						<div class="right-bar col-md-4">
						<div class="position-sticky" style="top: 2rem;">
							
							<div class="p-4 mb-3 bg-light rounded">
							<h4 class="fst-italic">About</h4>
							<p class="mb-0">Customize this section to tell your visitors a little bit about your publication, 
							writers, content.</p>
							</div>
					
							<!-----end about section-->


							

						
							<!-----end catagories section-->
							<div class="categories p-4">
							<h4 class="fst-bold">Categories</h4>
							<ol class="list-unstyled mb-0">
								<li><a href="#">Genarel (20)</a></li>
								<li><a href="#">Lifestyle (50)</a></li>
								<li><a href="#">Trabel (150)</a></li>
								<li><a href="#">Design (55)</a></li>
								<li><a href="#">Creative (10)</a></li>
								<li><a href="#">Education( 8002)</a></li>
								
							</ol>
							</div>
							
							
							<!-----end catagories section-->
							
							
						<!-----start recent post section-->
					
						<div class="recent-post p-4">
							<h4 class="fst">Recent Post</h4>
							
							<div class="card mb-3" style="max-width: 540px;">
								<div class="row g-0">
								<div class="col-md-12 col-lg-4">
									<img src="{{asset('fontend/img/page2.webp')}}" class="img-fluid rounded-start h-100" alt="...">
								</div>
								<div class="col-md-12 col-lg-8">
									<div class="card-body">
									<p class="card-text mb-0 pt-0 fs-6 fw-bold">This is a wider card with, Lorem Ipsum is simply dummy text of 
										the printing and typesetting industry. </p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
								</div>
							</div>

							<div class="card mb-3" style="max-width: 540px;">
								<div class="row g-0">
									<div class="col-md-12 col-lg-4">
									<img src="{{asset('fontend/img/web1.jpg')}}" class="img-fluid rounded-start h-100" alt="web design">
									</div>
									<div class="col-md-12 col-lg-8">
									<div class="card-body">
										<p class="card-text mb-0 pt-0 fs-6 fw-bold">This is a wider card with, Lorem Ipsum is simply dummy text of 
											the printing and typesetting industry. </p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
									</div>
								</div>
								</div>


								<div class="card mb-3" style="max-width: 540px;">
								<div class="row g-0">
									<div class="col-md-12 col-lg-4">
									<img src="{{asset('fontend/img/slider1.png')}}" class="img-fluid rounded-start h-100" alt="SEO">
									</div>
									<div class="col-md-12 col-lg-8">
									<div class="card-body">
										<p class="card-text mb-0 pt-0 fs-6 fw-bold">This is a wider card with, Lorem Ipsum is simply dummy text of 
											the printing and typesetting industry. </p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
									</div>
								</div>
								</div>
										
							
							<span class="mt-1"> <button class="view-all-btn btn btn-warning text-white">View All</button></span>

							
						</div>
						
						<!-----end recent post section-->




							
							<!-----start archive section-->
							
							<div class="archives text p-4">
							<h4 class="fst">Archives</h4>
							<ol class="list-unstyled mb-0">
								<li><a href="#">March 2021</a></li>
								<li><a href="#">February 2021</a></li>
								<li><a href="#">January 2021</a></li>
								<li><a href="#">December 2020</a></li>
								<li><a href="#">November 2020</a></li>
							</ol>
							
							<span class="moreText">
									<ol class="list-unstyled mb-0">
										<li><a href="#">October 2020</a></li>
										<li><a href="#">September 2020</a></li>
										<li><a href="#">August 2020</a></li>
										<li><a href="#">July 2020</a></li>
										<li><a href="#">June 2020</a></li>
										<li><a href="#">May 2020</a></li>
										<li><a href="#">April 2020</a></li>
									</ol>
								</span>
								<span class="mt-1"> <button class="read-more-btn btn btn-warning text-white">Read More</button></span>

							</div>
								
								

								<script>
									const readMoreBtn = document.querySelector(".read-more-btn");
									const text = document.querySelector(".text");
						
									readMoreBtn.addEventListener("click", (e) => {
									text.classList.toggle("show-more");
									if (readMoreBtn.innerText === "Read More") {
										readMoreBtn.innerText = "Read Less";
									} else {
										readMoreBtn.innerText = "Read More";
									}
									});
								</script>

								<!-----end archive section-->


							<!-----end elsewhere section-->
							<div class="elsewhere p-4">
							<h4 class="fst">Elsewhere</h4>
							<ol class="list-unstyled">
								<li><i class="bi bi-github fs-5"></i><a href="#" class="px-2">GitHub</a></li>
								<li><i class="bi bi-twitter fs-5"></i><a href="#" class="px-2">Twitter</a></li>
								<li><i class="bi bi-facebook fs-5"></i><a href="#" class="px-2">Facebook</a></li>
							</ol>
							</div>
						</div>
						</div>
							<!-----end elsewhere section-->
						
						
						
					
					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Searching Now...</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body py-5">
							
								<div class="input-group mb-3">
									
									<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Search</span>
									</div>
								</div>
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
							
							</div>
						</div>
						</div>
					</div>
						
						
						
					</div>
					


					</main>
					

				<footer class="blog-footer footer mb-0 b-0">
					<div class="footer-top" style="background: #121225;">
						<div class="container py-5">
							<div class="row text-start align-items-start">
								<div class="col-lg-4 col-md-6 footer-contact text-danger">
									<h3 class="text-warning">My Insurence<span class="text-danger fs-1 fw-bold">.</span></h3>
									<p>
									Benuar char-2020 <br>
									Islampur-2020, Mymensingh<br>
									Bangladesh <br><br>
									<strong>Phone:</strong> +880 1965 6741 61<br>
									<strong>Email:</strong> sharif.uddin.997766@gmail.com<br></p>
									<h4 class="text-white mb-4">Any Questions.   </h4>
									<button class="btn btn-lg btn-outline-warning mt-2">Get Started</button>
									
									
								</div>
								<div class="link col-lg-2 col-md-6 col-sm-6 footer-links text-start">
									<h4 class="header text-white text-start">Useful Links</h4>
									
									<ul class="text-start p-0 m-0" >
									<li class="text-start"><i class="bi bi-chevron-right text-start"></i> <a href="#">Home</a></li>
									<li class="text-start"><i class="bi bi-chevron-right text-start"></i> <a href="#">About us</a></li>
									<li class="text-start"><i class="bi bi-chevron-right text-start"></i> <a href="#">Services</a></li>
									<li><i class="bi bi-chevron-right"></i> <a href="#">Terms & cons</a></li>
									<li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
									</ul>
								</div>



								<div class="link col-lg-3 col-md-6 col-sm-6 footer-links">
									<h4 class="header text-white taxt-start">Our Services</h4>
									<ul class="mx-0 text-start p-0 m-0 text-white">
									<li class="text-start"><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
									<li class="text-start"><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
									<li class="text-start"><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
									<li class="text-start"><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
									<li class="text-start"><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
									</ul>
								</div>




								<div class="link col-lg-3 col-md-6 footer-newsletter">
									<h4 class="header text-white">Join Our Site or Channel</h4>
									<p class="text-light">My Dreem is a modern social media for our new jenaretion. 
									Any Promute here & 
									Contact by any people to people post, live video, 
									autio, Live Messageing & Others.</p>
									
									<h6 class="text-white">24 Hour Support Now </h6>
									<form action="" method="post" class=" mt-3">
										<span class="bg-danger p-0 rounded w-auto">
											<input type="email" name="email" class="rounded border-0 " style="height: 40px;">
											<input type="submit" value="Subscribe" class="bg-danger border-0 text-white" style="height: 41px;margin-left:-7px;">
									
										</span>
									</form>
									
								</div>
							</div>
						</div>
					</div>

				</footer>
				<!-- End Footer -->

				
				<footer class="footer mt-auto mb-0 bg-dark">
						
					<div class="container d-flex">

						<div class="container d-md-flex py-2 ">
							<div class="me-md-auto text-center text-md-start my-auto p-0 my-auto">
								<div class="copyright text-white">
									&copy; Copyright <strong><span>Insurence</span></strong>. All Rights Reserved
								</div>
								
							</div>


							<div class="me-md-auto text-center text-md-center my-auto p-0 my-auto">
								<div class="credits m-auto">
									Designed by <a href="https://google.com/" class=" text-decoration-none"><span class="fs-6 text-white"> Sharif uddin</span>
								</div>
							</div>

							<div class="social-links text-center text-md-end pt-4 pt-md-0 my-auto fs-4" >
							<a href="#" class="twitter rounded"><i class="bi-twitter"></i></a>
							<a href="#" class="facebook rounded"><i class="bi-facebook"></i></a>
							<a href="#" class="instagram rounded"><i class="bi-instagram"></i></a>
							<a href="#" class="google-plus rounded"><i class="bi-skype"></i></a>
							<a href="#" class="linkedin rounded"><i class="bi-linkedin"></i></a>
							</div>
						</div>
					</div>
				</footer>
				
        </div>
	</div>
</div>
	
<script src="{{asset('fontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
  </body>
</html>
