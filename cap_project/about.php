<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> About Us</title>
</head>
<style>
  body {
  font-family:Georgia;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
  justify-content:center;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
  margin-bottom:150px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.link{
color:red;

}
.link:hover {
  color: blue;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

header {
	background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/Abt4.png);
	height: 50vh;
	-webkit-background-size: cover;
	/* background-size: cover; */
	background-position: center center;
	position: relative;
	
}
.nav{
  color:white;
  text-align:center;

}
</style>
<body>
<header>
    <div class="wrapper">
        <div class="logo">
            <img src="" alt="">
        </div>
        <div class="nav">
         <h1>Hello There..!!</h1>
          <p>Welcome in India At Olympics</p>
               <p>This Is Our Capstone Project in Tech Saksham,This Website basically contain information about India's Performance at Olympics</p>
        </div>
    </div>
</header>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/teju.jpg" alt="Teju" style="width:100%">
      <div class="container">
        <h2>Tejashri Agale</h2>
        <p class="title">Web Developer+Leader</p>
        <p>Government College Of Engineering And Research Avasari,Khurd</p>
        <div  ><a class="link" href="https://www.linkedin.com/in/tejashri-agale-2324082001">Follow Us On Linkedin</a></div> <br><hr>
        <a button class="button" href="mailto:tejashriagale2324@gmail.com" target=_blank >Contact</a>
        <!-- <p><button class="button" href="mailto:tejashriagale2324@gmail.com" target=_blank>Contact</button></p> -->
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="img/samu.jpeg" alt="sam" style="width:100%" ><br><br><br><br>
      <div class="container ">
        <h2>Samruddhi .M</h2>
        <p class="title"> Web Developer</p>
        <p>Government College Of Engineering And Research Avasari,Khurd</p>
        <div  ><a class="link" href="https://www.linkedin.com/in/samruddhi-malshikare-b48766222">Follow Us On Linkedin</a></div> <br><hr>
        <a button class="button" href="mailto:sammalahikare2001@gmail.com" target=_blank >Contact</a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="img/shreya.jpg" alt="shreya" style="width:100%">
      <div class="container">
        <h2>Shreya Panwal</h2>
        <p class="title"> Web Developer</p>
        <p>Government College Of Engineering And Research Avasari,Khurd</p>
        <div  ><a class="link" href="https://www.linkedin.com/in/shreya-panwal-850716220">Follow Us On Linkedin</a></div> <br><hr>
        <a button class="button" href="mailto:shreyapanwal811@gmail.com" target=_blank >Contact</a>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
    <img src="img/vaishu.jpeg" alt="vaishu" style="width:100%">
   <div class="container">
        <h2>Vaishnavi Patil </h2>
        <p class="title"> Web Developer</p>
        <p>Government College Of Engineering And Research Avasari,Khurd</p>
        <div  ><a class="link" href="https://www.linkedin.com/in/vaishnavi-patil-953591225">Follow Us On Linkedin</a></div> <br><hr>
        <a button class="button" href="mailto:vaishnavipatil0573@gmail.com" target=_blank >Contact</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>