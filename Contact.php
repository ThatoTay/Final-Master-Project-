<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <title>TPE/Contact</title>
    <link rel="stylesheet" href="Style/decor.css">
    
    <script src="https://kit.fontawesome.com/51bc2aa7cb.js" crossorigin="anonymous"></script>
    <script src="/app.js"></script>

    <style>
      

.content{
  max-width: 1350px;
  margin: auto;
  padding: 0px 0px;
}
.navbar{
  position: fixed;
  z-index: 5;
  width: 100%;
  padding: 25px 0;
  background: #ffd9b3;
  
  transition: all 0.3s ease;
}
.navbar.sticky{
  padding: 10px 0;
  background: #ffd9b3;
  box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.1);
}
.navbar .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.navbar .logo a{
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  text-decoration: none;
}
.navbar .menu-list{
  display: inline-flex;
}


.navbar-active {
  transform: translateX(0%);
  position: fixed;
}

@keyframes navLinkFade {
from {
  opacity: 0;
  transform: translateX(50px);
}
to {
  opacity: 1;
  transform: translateX(0);
}
}

.toggle .line1 {
  transform: rotate(-45deg) translate(-5px, 6px);
  }
  
  .toggle .line2 {
  opacity: 0;
  }
  
  .toggle .line3 {
  transform: rotate(45deg) translate(-5px, -6px);
  }
  
  .navbar a:hover {
  color: #000;
  }
  .navbar a {
  opacity: 1;
  position: relative;
  }
  
  .navbar a::before {
  content: '';
  display: block;
  height: 5px;
  background: white;
  position: absolute;
  bottom: -.75em;
  left: 0;
  right: 0;
  transform: scale(0, 1);
  transition: transform ease-in-out 250ms;
  }
  
  .navbar a:hover::before {
  transform: scale(1,1);
  }
  }
  
  .navbar ul li:hover{
    cursor:pointer;
    color:rosybrown;
  
  }
  .navbar ul li:hover{
    cursor:pointer;
    color:rosybrown;
  
  }

.menu-list li{
  list-style: none;
}
.menu-list li a{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  margin-left: 25px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.menu-list li a:hover{
  color: #007bff;
}
.banner{
  height: 100vh;
  background: url("banner.jpg") no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}

.icon{
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  display: none;
}
.icon.cancel-btn{
  position: absolute;
  right: 30px;
  top: 20px;
}
.navbar.sticky .icon.cancel-btn{
  top: 10px;
}
@media (max-width: 868px) {
  body.disabledScroll{
    overflow: hidden;
  }
  .icon{
    display: block;
    height: 50px;
    width: 50px;
    text-align: center;
    line-height: 50px;
    border-radius: 50%;
    z-index: 9;
  }
  .icon.cancel-btn{
    display: none;
  }
  .icon.cancel-btn.show{
    display: block;
  }
  .icon.hide{
    display: none;
  }
  .navbar .menu-list{
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100%;
    background: #222;
    display: block;
    padding: 40px 0;
    text-align: center;
    clip-path: circle(25px at calc(100% - 55px) calc(0% + 50px));
    transition: all 0.3s ease;
  }
  .navbar.sticky .menu-list{
    clip-path: circle(25px at calc(100% - 55px) calc(0% + 35px));
  }
  .navbar .menu-list.active{
    clip-path: circle(75%);
  }
  .navbar .menu-list li{
    margin-top: 45px;
  }
  .navbar .menu-list li a{
    font-size: 23px;
  }
}
.icon1{
	border-radius:100%;
	height:40px;
	width:40px;
  
}

textarea {

  width: 1370px;
  height: 140px;
}

h2{
  font-size: 40px;
}

.input-group {
  margin: 10px 0px 10px 0px;
}
input-group label {
  display: block;
  text-align: left;
 margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.textarea {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
 resize: none;
}
.btn {
  padding: 16px;
  font-size: 16px;
  color: white;
  background: pink;
  border: none;
  border-radius: 5px;
}

.btn:hover {
  cursor:pointer;
	color: #bc8f8f;
	background:pink;
}

.sent-notification{
  color: white;

}
    </style>
        
    </head>
    <body>
        <header>
          <nav class="navbar">
            <div class="content">
        
              <div class="logo"> <img src="img/logo.png" class="logo" alt="logo" align="left"  width= "700" height="90"></div>
              <ul class="menu-list">
                <div class="icon cancel-btn">
                  <i class="fas fa-times"></i>
                </div>
                  <li><a href="index.html">Home</a></li>
                                    <li><a href="About.html">What defines us?</a></li>
                                    <li><a href="Our Services.html">Our Services</a></li>
                                    <li><a href="Our Gallery.html">Gallery</a></li>
                                    <li><a class="active" href="Contact.php">Contact us</a></li>
              </ul>
              <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
              </div>
            </div>
          </nav>

            
  </header>
      </br></br></br>   </br></br></br>   
      <p>  
        <img src="PosterMaker/couches2.png" class="img full-circle1"  align="right">

      </br> </br>
      <h1 style="color:white"; class="rainbow-text" align="center"><b><i> GET IN</br> TOUCH!</br></i></b></h1>
      <h2 style="color:white"; class="rainbow-text" align="center"><b><i> ASK A QUESTION OR REQUEST A QUOTE</br></i></b></h2>

      </p>
    </br>
      <img src="img/boarder.png" class="boarder">
   
  <center>
      <h5>CONTACT INFORMATION</h5>
    </br>
      <div class="contan">
        <div class="row7">
          <div class="col">
            <h6>CONTACT NUMBER</h6>
            <ul>
              <li>067 164 7592</li>
              <li>068 575 6944</li>
              
            </ul>
          </div>
          <div class="col">
            <h6>EMAIL ADDRESS</h6>
            <ul>
              <li>info@taypromosandevents.co.za</li>
              
            </ul>
          </div>

          <div class="col">
            <h6>PHYSCIAL ADDRESS</h6>
            <ul>
              <li>4876 Bila Street</li>
              <li>Chiawelo ext 2</li>
              <li>Soweto</a></li>
              <li>1818</a></li>
            </ul>
          </div>

        </div>
      </center>
      <center>
    </br>
  <p class="quote"> 
  <h2> Request a quote for your next event.  
</p>
<img src="img/boarder.png" class="boarder">

   <p class="quote">
    We are always ready to assist.</h2>
  </p>
</center>
  <center>
  <br>
		<h4 class="sent-notification"></h4>

		<form id="myForm">
		

      <div class="input-group">
	
			<input id="name" type="text" placeholder="Enter Name">
</div>
			<br>
      <div class="input-group">
	
			<input id="email" type="text" placeholder="Enter Email">
</div>
			<br>
          <div class="input-group">
			<input id="subject" type="text" placeholder=" Enter Subject"> 
      
</div>
			<br>
      <div class="input-group">
      <div class="textarea">
			
			<textarea id="body" rows="9" placeholder="Type Message"></textarea>
</div>
</div>
			<br><br><br><br><br>
      
      <div class="textarea">
			<button type="button"  class="btn" onclick="sendEmail()" value="Send An Email">Submit</button> 
</div>
<br><br><br>
		</form>
	</center>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menu = document.querySelector(".menu-list");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      menu.classList.add("active");
      menuBtn.classList.add("hide");
      cancelBtn.classList.add("show");
      body.classList.add("disabledScroll");
    }
    cancelBtn.onclick = ()=>{
      menu.classList.remove("active");
      menuBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      body.classList.remove("disabledScroll");
    }

    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>
        <hr class="horizontal">

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Company</h4>
            <ul>
              <li><a href="About.html">What defines us?</a></li>
              <li><a href="Our Services.html">Our Services</a></li>
              <li><a href="Our Gallery.html">Gallery</a></li>
              <li><a href="Contact.php">Contact us</a></li>
              <li><a href="#">Privacy policy</a></li>
              
            </ul>
          
          </div>
          <div class="footer-col">
            <h4>Operating hours</h4>
            <ul>
              <li>Monday to Friday</li>
              <li>09h00 – 17h00</a></li>
              <li>Saturday</li>
              <li>08h00 – 15h00</li>
              <li>Sunday and Public Holidays</li>
              <li>Closed</li>  
            </ul>
          </div>
          <div class="footer-col">
            <h4>Address</h4>
            <ul>
              <li>4876 Bila Street</li>
              <li>Chiawelo ext 2</li>
              <li>Soweto</a></li>
              <li>1818</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/taypromosandevents/"><img src="icons/facebook.png" class= "icon1"align="right"hspace="2px"vspace="2px"></i></a>
              <a href="https://www.instagram.com/"><img src="icons/insta.jpg"class= "icon1" align="right"hspace="2px" vspace="2px"></i></a>
              <a href="https://twitter.com/?lang=en"><img src="icons/twitter.jpg"class= "icon1" align="right"hspace="2px" vspace="2px"></i></a>
            </div>
          </div>
          
        </div>
      </br></b>
        <hr class="end">
        <center> <p>copyright &#169; 2021 TAY PROMOS AND EVENTS. All rights resevered </p></center>
      </div>

  </footer> 
  </body>
  </html>                   