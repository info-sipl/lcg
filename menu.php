
<html>
  <head>
    <title>Mega Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
	font-weight: 400;
	overflow-x: hidden;
}
*{
	margin:0;
	box-sizing: border-box;
}
:before,:after{
	box-sizing: border-box;
}
.container{
	max-width: 1200px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
.v-center{
	align-items: center;
}
ul{
	list-style: none;
	margin:0;
	padding:0;
}
a{
	text-decoration: none;
}
/* header */
.header{
	display: block;
	width: 100%;
	position: relative;
	z-index: 99;
	padding:15px;
	background-color: #ecac06;
	margin-bottom: 10px;
}
.header .item-left{
	flex:0 0 17%;
}
.header .logo a{
	font-size: 30px;
	color:#000000;
	font-weight: 700;
	text-decoration: none;
}
.header .item-center{
	flex:0 0 66%;
}
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
}
.header .item-right a{ 
     text-decoration: none;
     font-size: 16px;
     color:#555555;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
}
.header .menu > ul > li{
	display: inline-block;
	line-height: 50px;
	margin-left: 25px;
}
.header .menu > ul > li > a{
	font-size: 16px;
	font-weight: 500;
	color:#15199e;
	position: relative;
	text-transform: capitalize;
	transition: color 0.3s ease;
}
.header .menu > ul > li .sub-menu{
	position: absolute;
	z-index: 500;
	background-color:#ffffff;
	box-shadow: -2px 2px 70px -25px rgba(0,0,0,0.3); 
	padding: 20px 30px;
	transition: all 0.5s ease;
	margin-top:25px;
	opacity:0;
	visibility: hidden;
}
@media(min-width: 992px){
.header .menu > ul > li.menu-item-has-children:hover .sub-menu{
	margin-top: 0;
	visibility: visible;
	opacity: 1;
}
}
.header .menu > ul > li .sub-menu > ul > li{
	line-height: 1;
}
.header .menu > ul > li .sub-menu > ul > li > a{
	display: inline-block;
	padding: 10px 0;
	font-size: 15px;
	color: #555555;
	transition: color 0.3s ease;
	text-decoration: none;
	text-transform: capitalize;
}
.header .menu > ul > li .single-column-menu{
	min-width: 280px;
	max-width: 350px;
}
.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li{
   line-height: 1;
   display: block; 
}
.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a {
	padding:10px 0;
	display: inline-block;
	font-size: 15px;
	color:#555555;
	transition: color 0.3s ease;
}
.header .menu > ul > li .sub-menu.mega-menu{ 
    left: 50%;
    transform: translateX(-50%);	
}

.header .menu > ul > li .sub-menu.mega-menu-column-4{
  max-width: 1100px;
  width: 100%; 	
  display: flex;
  flex-wrap: wrap;
  padding:20px 15px;
}
.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item{
  flex:0 0 25%;
  padding:0 15px;
}
.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item .title{
	font-size: 16px;
	color:#ea4636;
	font-weight: 500;
	line-height: 1;
	padding:10px 0;
}
.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item.text-center .title{
	text-align: center;
}
.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item img{
	max-width: 100%;
	width: 100%;
	vertical-align: middle;
	margin-top: 10px;
	height: 300px;
	object-fit: cover;
}
.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a:hover,
.header .menu > ul > li .sub-menu > ul > li > a:hover,
.header .item-right a:hover,
.header .menu > ul > li:hover > a{
	color:#dd030f;
}
/* banner section */
.banner-section{
  background-image: url('../img/banner.jpg');
  background-size: cover;
  background-position: center;
  height: 700px;
  width: 100%;
  display: block;
}
.mobile-menu-head,
.mobile-menu-trigger{
	display: none;
}

/*responsive*/
@media(max-width: 991px){

	.header .item-center{
		order:3;
		flex:0 0 100%;
	}
	.header .item-left,
	.header .item-right{
		flex:0 0 auto;
	}
	.v-center{
		justify-content: space-between;
	}
	.header .mobile-menu-trigger{
		display: flex;
		height: 30px;
		width: 30px;
		margin-left: 15px;
		cursor: pointer;
		align-items: center;
		justify-content: center;
	}
	.header .mobile-menu-trigger span{
		display: block;
		height: 2px;
		background-color: #333333;
		width: 24px;
		position: relative;
	}
	.header .mobile-menu-trigger span:before,
	.header .mobile-menu-trigger span:after{
		content: '';
		position: absolute;
		left:0;
		width: 100%;
		height: 100%;
		background-color: #333333;
	}
	.header .mobile-menu-trigger span:before{
		top:-6px;
	}
	.header .mobile-menu-trigger span:after{
		top:6px;
	}
	.header .item-right{
		align-items: center;
	}

	.header .menu{
		position: fixed;
		width: 320px;
		background-color:#ffffff;
		left:0;
		top:0;
		height: 100%;
		overflow: hidden;
		transform: translate(-100%);
		transition: all 0.5s ease;
		z-index: 1099;
	}
	.header .menu.active{
	   transform: translate(0%);	
	}
	.header .menu > ul > li{
		line-height: 1;
		margin:0;
		display: block;
	}
	.header .menu > ul > li > a{
		line-height: 50px;
		height: 50px;
		padding:0 50px 0 15px;
		display: block;
		border-bottom: 1px solid rgba(0,0,0,0.1);
	}
	.header .menu > ul > li > a i{
		position: absolute;
		height: 50px;
		width: 50px;
		top:0;
		right: 0;
		text-align: center;
		line-height: 50px;
		transform: rotate(-90deg);
	}
	.header .menu .mobile-menu-head{
		display: flex;
		height: 50px;
		border-bottom: 1px solid rgba(0,0,0,0.1);
		justify-content: space-between;
		align-items: center;
		position: relative;
		z-index: 501;
		position: sticky;
		background-color: #ffffff;
		top:0;
	}
	.header .menu .mobile-menu-head .go-back{
		height: 50px;
		width: 50px;
		border-right: 1px solid rgba(0,0,0,0.1);
		cursor: pointer;
		line-height: 50px;
		text-align: center;
		color:#000000;
		font-size: 16px;
		display: none;
	}
	.header .menu .mobile-menu-head.active .go-back{
		display: block;
	}
	.header .menu .mobile-menu-head .current-menu-title{
		font-size: 15px;
		font-weight: 500;
		color:#000000;
	}
	.header .menu .mobile-menu-head .mobile-menu-close{
	    height: 50px;
		width: 50px;
		border-left: 1px solid rgba(0,0,0,0.1);
		cursor: pointer;
		line-height: 50px;
		text-align: center;
		color:#000000;	
		font-size: 25px;
	}
	.header .menu .menu-main{
		height: 100%;
		overflow-x: hidden;
		overflow-y: auto;
	}
	.header .menu > ul > li .sub-menu.mega-menu,
	.header .menu > ul > li .sub-menu{
		visibility: visible;
		opacity: 1;
		position: absolute;
		box-shadow: none;
		margin:0;
		padding:15px;
		top:0;
		left:0;
		width: 100%;
		height: 100%;
		padding-top: 65px;
		max-width: none;
		min-width: auto;
		display: none;
		transform: translateX(0%);
		overflow-y: auto;
    background-color:#15199e;
	}
.header .menu > ul > li .sub-menu.active{
	display: block;
}
@keyframes slideLeft{
	0%{
		opacity:0;
		transform: translateX(100%);
	}
	100%{
	    opacity:1;
		transform: translateX(0%);	
	}
}
@keyframes slideRight{
	0%{
		opacity:1;
		transform: translateX(0%);
	}
	100%{
	    opacity:0;
		transform: translateX(100%);	
	}
}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item img{
		margin-top:0;
	}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item.text-center .title{
		margin-bottom: 20px;
	}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item.text-center:last-child .title{
		margin-bottom:0px;
	}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item{
		flex: 0 0 100%;
        padding: 0px;
	}
	.header .menu > ul > li .sub-menu > ul > li > a,
	.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a{
		display: block;
	}
	.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul {
		margin-bottom: 15px;
	}
	.menu-overlay{
		position: fixed;
		background-color: rgba(0,0,0,0.5);
		left:0;
		top:0;
		width: 100%;
		height: 100%;
		z-index: 1098;
		visibility: hidden;
		opacity:0;
		transition: all 0.5s ease;
	}
	.menu-overlay.active{
	  visibility: visible;
	  opacity:1;	
	}
}

/* ================= TOP CONTACT BAR ================= */
/* ================= TOP CONTACT BAR ================= */
.top-contact-bar{
  background-color:#15199e;
  padding:8px 0;
  font-size:14px;
}

.top-contact-content{
  display:flex;
  justify-content:center;   /* CENTER EVERYTHING */
  align-items:center;
  position:relative;
}

.left-contact{
  display:flex;
  gap:25px;                 /* Space between email & phone */
}

.left-contact a{
  color:#ffffff;
  transition:0.3s ease;
}

.left-contact a:hover{
  color:#ecac06;
}

/* Facebook stays on right */
.right-contact{
  position:absolute;
  right:0;
}

.right-contact a{
  color:#ffffff;
  font-size:16px;
}

.right-contact a:hover{
  color:#ecac06;
}

.highlight-wrapper{
    margin-top: 15px;
}

 </style>

  </head>
  <body>
	
    <!-- header start -->

	<!-- TOP CONTACT BAR START -->
<div class="top-contact-bar">
  <div class="container">
    <div class="top-contact-content">
      
      <div class="left-contact">
        <a href="mailto:lcgpolytechnic@gmail.com" class="contact-link">
          <i class="fa fa-envelope"></i> lcgms16@gmail.com
        </a>

        <a href="tel:+919830721351" class="contact-link">
          <i class="fa fa-phone"></i> +91-9830721351
        </a>
      </div>

      <div class="right-contact">
        <a href="https://www.facebook.com/LCGIP/" 
           target="_blank" 
           class="social-link">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>

    </div>
  </div>
</div>
<!-- TOP CONTACT BAR END -->


    <header class="header">
      <div class="container">
        <div class="row v-center">
          <div class="header-item item-left">
            <div class="logo">
              <a href="#">
				<img
                  src="./assets/img/logo/logo.png"
                  width="150"
                  alt="LCG Polytechnic"
                />
			  </a>
            </div>
          </div>
		   
          <!-- menu start here -->
          <div class="header-item item-center">
            <div class="menu-overlay"></div>
            <nav class="menu">
              <div class="mobile-menu-head">
                <div class="go-back"><i class="fa fa-angle-left"></i></div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="menu-main">
                <li>
                  <a href="#">Home</a>
                </li>
                <li>
                  <a href="#about-div">About Us</a>
                </li>
                <li class="menu-item-has-children">
                  <a href="#">Administration <i class="fa fa-angle-down"></i></a>
                  <div class="sub-menu mega-menu mega-menu-column-4">
                    <div class="list-item">
                      <h4 class="title">Our Committees</h4>
                      <ul>
                        <li><a href="society.php">Society Members</a></li>
                        <li><a href="student-welfare.php">Student Welfare Committee - 2026</a></li>
                        <li><a href="anti-ragging.php">Anti Ragging Committee - 2026</a></li>
                        <li><a href="internal-complaint.php">Internal Complaint Commitee - 2026</a></li>
                        <li><a href="grievance-redemption.php">Grievance Redemption Committee - 2026</a></li>
						<li><a href="./assets/pdf/SOCIETY[1].pdf">Our Trustees</a></li>
                      </ul>
                      <h4 class="title">Helplines</h4>
                      <ul>
                        <li><a href="women-helpline.php">Women Helpline</a></li>
                        <li><a href="#">Admission Helpline</a></li>
                        
                      </ul>
                    </div>
                    <div class="list-item">
                      <h4 class="title">Our Projects</h4>
                      <ul>
                        <li><a href="dduproject.php">DDU-GKY</a></li>
                        <li><a href="ub.php">Utkarsh Bangla</a></li>
                        
                      </ul>
                      <h4 class="title">Departments</h4>
                      <ul>
                        <li><a href="course.php">Basic Science & Humanities</a></li>
                        <li><a href="course.php">Civil Engineering</a></li>
                        <li><a href="course.php">Electrical Engineering</a></li>
                        <li><a href="course.php">Mechanical Engineering</a></li>
                        <li><a href="course.php">Computer Science & Technology</a></li>
                      </ul>
                    </div>
                    
                    
                  </div>
                </li>
                <li class="menu-item-has-children">
                  <a href="#">Student's Area <i class="fas fa-angle-down"></i></a>
                  <div class="sub-menu single-column-menu">
                    <ul>
                      <li><a href="academic-calender.php">Academic Calender</a></li>
                      <li><a href="syllabus.php">Syllabus</a></li>
					  <li><a href="faculty.php">Our Faculties</a></li>
                      <li><a href="holiday-list.php">Holiday List</a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item-has-children">
                  <a href="#">Quick Links<i class="fas fa-angle-down"></i></a>
                  <div class="sub-menu single-column-menu">
                    <ul>
                      <li><a href="admission.php">Admission Cell</a></li>
                      <li><a href="facility.php">Student Facilities</a></li>
                      <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href="contact.php">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- menu end here -->
          <div class="header-item item-right">
            
            <div class="logo">
              <a href="main_society.php">
				<img
                  src="./assets/img/logo/society-removebg-preview.png"
                  width="80"
                  alt="LCG Society"
                />
			  </a>
          
          </div>
            
            <!-- mobile menu trigger -->
            <div class="mobile-menu-trigger">
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
<script>
  

 const menu = document.querySelector(".menu");
 const menuMain = menu.querySelector(".menu-main");
 const goBack = menu.querySelector(".go-back");
 const menuTrigger = document.querySelector(".mobile-menu-trigger");
 const closeMenu = menu.querySelector(".mobile-menu-close");
 let subMenu;
 menuMain.addEventListener("click", (e) =>{
 	if(!menu.classList.contains("active")){
 		return;
 	}
   if(e.target.closest(".menu-item-has-children")){
   	 const hasChildren = e.target.closest(".menu-item-has-children");
      showSubMenu(hasChildren);
   }
 });
 goBack.addEventListener("click",() =>{
 	 hideSubMenu();
 })
 menuTrigger.addEventListener("click",() =>{
 	 toggleMenu();
 })
 closeMenu.addEventListener("click",() =>{
 	 toggleMenu();
 })
 document.querySelector(".menu-overlay").addEventListener("click",() =>{
 	toggleMenu();
 })
 function toggleMenu(){
 	menu.classList.toggle("active");
 	document.querySelector(".menu-overlay").classList.toggle("active");
 }
 function showSubMenu(hasChildren){
    subMenu = hasChildren.querySelector(".sub-menu");
    subMenu.classList.add("active");
    subMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
    menu.querySelector(".current-menu-title").innerHTML=menuTitle;
    menu.querySelector(".mobile-menu-head").classList.add("active");
 }

 function  hideSubMenu(){  
    subMenu.style.animation = "slideRight 0.5s ease forwards";
    setTimeout(() =>{
       subMenu.classList.remove("active");	
    },300); 
    menu.querySelector(".current-menu-title").innerHTML="";
    menu.querySelector(".mobile-menu-head").classList.remove("active");
 }
 
 window.onresize = function(){
 	if(this.innerWidth >991){
 		if(menu.classList.contains("active")){
 			toggleMenu();
 		}

 	}
 }


</script>

  </body>
</html>
