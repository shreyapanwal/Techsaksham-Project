<!doctype html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="more.php">
    <link rel="stylesheet" href="JavaScript QUiz/quiz.html">
    <link rel="stylesheet" href="JavaScript QUiz/start.html">
    <link rel="stylesheet" href="game.php">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Games</title>
    <style>
        * {
            top: 0;
            left: 0;
        }


        .heading h1 {
            font-size: 4rem;
            color: rgb(60, 7, 110);
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            text-shadow: 2px 2px grey;
        }

        @media(max-width:700px) {
            .heading h1 {
                font-size: 3rem;
            }
        }

        .row {
            margin: auto;
        }

        .row .left button a {
            text-decoration: none;
            color: white;
        }

        #myBtn {
            background-color: rgb(63, 62, 62);
            color: white;
            border-radius: 4px;
            padding: 4px;
            margin-bottom: 10px;
        }

        #myBtn:hover {
            background-color: rgb(85, 2, 2);
            color: white;
        }

        .row h4 {
            text-decoration: underline;
        }
        .nav-item{
            font-family:poppines;
            font-size: 18px;
        }
        .left{
            font-family: Georgia, serif;
        }
        
body {
	font-family: 'Poppins', sans-serif;
}
.wrapper {
	width: 1170px;
	margin: auto;
}
header {
	background:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4)), url(img/game1.jpg);
	height: 80vh;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	position: relative;
	
}
.nav-area {
	float: right;
	list-style: none;
	margin-top: 12px;
	padding-right: 0px;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: #fff;
	text-decoration: none;
	padding: 5px 10px;
	font-family: poppins;
	font-size: 18px;
	text-transform: uppercase;
}
.nav-area li a:hover {
	background: #fff;
	color: #333;
}
.text-uppercase{
  color:blue;
}
.text-uppercase:hover{
    color:red;
}
.img-thumbnail{
      height: 200px;
      width: 80%;
    }
    .img-fluid{
         height:400px;
    }
    #button {
        display: inline-block;
        background-color:rgb(63, 62, 62);
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 8px;
        position: fixed;
        bottom: 30px;
        right: 30px;
        transition: background-color .3s, 
          opacity .5s, visibility .5s;
        opacity: 0;
        visibility: hidden;
        z-index: 1000;
      }
      #button::after {
        content: "\f077";
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 2em;
        line-height: 50px;
        color: #fff;
      }
      #button:hover {
        cursor: pointer;
        background-color: #333;
      }
      #button:active {
        background-color: #555;
      }
      #button.show {
        opacity: 1;
        visibility: visible;
      }   
    </style>
</head>

<body>
<header>
    <div class="wrapper">
        <div class="logo">
            <img src="" alt="">
        </div>
<ul class="nav-area">
<li><a href="index.php">Home</a></li>
<li><a href="game.php">Olympic Games</a></li>
<li><a href="sports.html">Sports</a></li>
<li><a href="medal.html">Medals</a></li>
<li><a href="free.html">Academies & Scholarships</a></li>
<li><a href="JavaScript QUiz/start.html"> Check Your GK</a></li>
<li><a href="about.php">About</a></li>
<li><a href="login.php">Register</a></li>

<!-- <li><a href="reg.php">Login</a></li> -->
</ul>
</div>
</header>
 <!-- <div class="img-container">
        <img src="img/img2.jpg" alt="" class="img-thumbnail">-->
        <div class="container heading text-center my-4">
            <h1>SUMMER OLYMPIC GAMES</h1>
        </div>
    </div> 
    <a id="button"></a>

    <div class="container">
        <div class="container row">
            <h4 class="text-danger my-4">1896 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1896.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1896 Summer Olympics, officially known as the Games of the I Olympiad and commonly known as Athens 1896
                    The 1896 Summer Olympics, officially known as the Games of the I Olympiad,and commonly known as Athens 1896.
                    Fourteen nations (according to the IOC, though the number is subject to interpretation) and 241 athletes (all males; this number is also disputed) took part in the games. Participants were all European, or living in Europe, with the exception of the United States team.
                </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1896_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1900 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1900.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1900 Summer Olympics (French: Jeux olympiques d'été de 1900), today officially known as the Games of the II Olympiad (French: Jeux de la IIe olympiade) and also known as Paris 1900, were an international multi-sport event that took place in Paris, France, from 14 May to 28 October 1900. No opening or closing ceremonies were held.At the Sorbonne conference of 1894, Pierre de Coubertin proposed that the Olympic Games should take place in Paris in 1900. However, the delegates to the conference were unwilling to wait six years..,</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1900_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1904 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1904.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1904 Summer Olympics (officially the Games of the III Olympiad and also known as St. Louis 1904) were an international multi-sport event held in St. Louis, Missouri, United States, from August 29 to September 3, 1904, as part of an extended sports program lasting from July 1 to November 23, 1904, located at what is now known as Francis Field on the campus of Washington University in St. Louis. This was the first time that the Olympic Games were held outside Europe.
                Tensions caused by the Russo–Japanese War and difficulties in traveling to St.
                </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1904_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1908 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1908.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1908 Summer Olympics (officially the Games of the IV Olympiad and also known as London 1908) were an international multi-sport event held in London, United Kingdom, from 27 April to 31 October 1908.[2] The 1908 Games were originally scheduled to be held in Rome, but were relocated on financial grounds following the violent eruption of Mount Vesuvius in 1906, which claimed over 100 lives; Rome eventually hosted the Games in 1960.These were the fourth chronological modern Summer Olympics in keeping with the now-accepted four-year cycle...</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1908_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1912 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1912.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1912 Summer Olympics (Swedish: Olympiska sommarspelen 1912), officially known as the Games of the V Olympiad (Swedish: Den V olympiadens spel) and commonly known as Stockholm 1912, were an international multi-sport event held in Stockholm, Sweden, between 5 May and 22 July 1912.Twenty-eight nations and 2,408 competitors, including 48 women, competed in 102 events in 14 sports. With the exception of tennis (starting on 5 May) and football and shooting (both starting on 29 June), </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1912_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1920 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1920.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1920 Summer Olympics (French: Jeux olympiques d'été de 1920; Dutch: Olympische Zomerspelen van 1920; German: Olympische Sommerspiele 1920), officially known as the Games of the VII Olympiad (French: Jeux de la VIIe olympiade; Dutch: Spelen van de VIIe Olympiade; German: Spiele der VII. Olympiade) and commonly known as Antwerp 1920 (French: Anvers 1920; Dutch and German: Antwerpen 1920), were an international multi-sport event held in 1920 in Antwerp, Belgium.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1920_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1924 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1924.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1924 Summer Olympics (French: Jeux olympiques d'été de 1924), officially the Games of the VIII Olympiad (French: Jeux de la VIIIe olympiade) and also known as Paris 1924, were an international multi-sport event held in Paris, France. The opening ceremony was held on 5 July, but some competitions had already started on 4 May. These Games were the second to be hosted by Paris (after 1900), making it the first city to host the Olympics twice.The selection process for the 1924 Summer Olympics consisted of six bids, and Paris was selected ahead of Amsterdam, Barcelona, Los Angeles, Prague, and Rome.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1924_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1928 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1928.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1928 Summer Olympics (Dutch: Olympische Zomerspelen 1928), officially known as the Games of the IX Olympiad (Dutch: Spelen van de IXe Olympiade) and commonly known as Amsterdam 1928, was an international multi-sport event that was celebrated from 28 July to 12 August 1928 in Amsterdam, Netherlands. The city of Amsterdam had previously bid for the 1920 and 1924 Olympic Games, but was obliged to give way to war-torn Antwerp in Belgium for the 1920 Games and Pierre de Coubertin's Paris for the 1924 Games.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1928_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1932 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1932.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1932 Summer Olympics (officially the Games of the X Olympiad and also known as Los Angeles 1932) were an international multi-sport event held from July 30 to August 14, 1932 in Los Angeles, California, United States. The Games were held during the worldwide Great Depression, with some nations not traveling to Los Angeles; 37 nations competed, compared to the 46 in the 1928 Games in Amsterdam,[a] and then-U.S. President Herbert Hoover did not attend the Games.[b] The organizing committee did not report the financial details of the Games..,</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1932_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1936 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1936.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1936 Summer Olympics (German: Olympische Sommerspiele 1936), officially known as the Games of the XI Olympiad (German: Spiele der XI. Olympiade) and commonly known as Berlin 1936 or the Nazi Olympics, were an international multi-sport event held from 1 to 16 August 1936 in Berlin, Germany. Berlin won the bid to host the Games over Barcelona at the 29th IOC Session on 26 April 1931. The 1936 Games marked the second and most recent time the International Olympic Committee gathered to vote in a city that was bidding to host those Games.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1936_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1948 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1948.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1948 Summer Olympics (officially the Games of the XIV Olympiad and also known as London 1948) were an international multi-sport event held from 29 July to 14 August 1948 in London, United Kingdom. Following a twelve-year hiatus caused by the outbreak of World War II, these were the first Summer Olympics held since the 1936 Games in Berlin. The 1940 Olympic Games had been scheduled for Tokyo and then for Helsinki, while the 1944 Olympic Games had been provisionally planned for London. </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1948_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1952 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1952.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1952 Summer Olympics (Finnish: Kesäolympialaiset 1952; Swedish: Olympiska sommarspelen 1952), officially known as the Games of the XV Olympiad (Finnish: XV olympiadin kisat; Swedish: Den XV olympiadens spel) and commonly known as Helsinki 1952 (Swedish: Helsingfors 1952), were an international multi-sport event held from 19 July to 3 August 1952 in Helsinki, Finland.
                After Japan declared in 1938 that it would be unable to host 1940 Olympics in Tokyo due to the ongoing Second Sino-Japanese War, 
                </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1952_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1956 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1956.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1956 Summer Olympics, officially known as the Games of the XVI Olympiad and commonly known as Melbourne 1956, were an international multi-sport event held in Melbourne, Victoria, Australia, from 22 November to 8 December 1956, with the exception of the equestrian events, which were held in Stockholm, Sweden, in June 1956.These Games were the first to be staged in the Southern Hemisphere and Oceania, as well as the first to be held outside Europe and North America. Melbourne is the most southerly city ever to host the Olympics.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1956_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1960 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1960.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1960 Summer Olympics (Italian: Giochi Olimpici estivi del 1960), officially known as the Games of the XVII Olympiad (Italian: Giochi della XVII Olimpiade) and commonly known as Rome 1960 (Italian: Roma 1960), were an international multi-sport event held from 25 August to 11 September 1960 in Rome, Italy. Rome had previously been awarded the administration of the 1908 Summer Olympics, but following the eruption of Mount Vesuvius in 1906, the city had no choice but to decline and pass the honour to London. The Soviet Union won the most gold and overall medals at the 1960 Games.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1960_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1964 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1964.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>he 1964 Summer Olympics, officially the Games of the XVIII Olympiad and commonly known as Tokyo 1964, were an international multi-sport event held from 10 to 24 October 1964 in Tokyo, Japan. Tokyo had been awarded the organization of the 1940 Summer Olympics, but this honor was subsequently passed to Helsinki due to Japan's invasion of China, before ultimately being cancelled due to World War II. Tokyo was chosen as the host city during the 55th IOC Session in West Germany on 26 May 1959.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1964_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1968 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1968.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1968 Summer Olympics, officially known as the Games of the XIX Olympiad and commonly known as Mexico 1968, were an international multi-sport event held from 12 to 27 October 1968 in Mexico City, Mexico. These were the first Olympic Games to be staged in Latin America and the first to be staged in a Spanish-speaking country. They were also the first Games to use an all-weather (smooth) track for track and field events instead of the traditional cinder track, as well as the first example of the Olympics exclusively using electronic timekeeping equipment. </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1968_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1972 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1972.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1972 Summer Olympics,officially known as the Games of the XX Olympiad and commonly known as Munich 1972, was an international multi-sport event held in Munich, Bavaria, West Germany, from 26 August to 11 September 1972.The event was overshadowed by the Munich massacre in the second week, in which eleven Israeli athletes and coaches and a West German police officer at Olympic village were killed by Palestinian Black September members.he 1972 Summer Olympics were the second Summer Olympics to be held in Germany, after the 1936 Games in Berlin, </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1972_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1976 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1976.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1976 Summer Olympics, officially known as the Games of the XXI Olympiad and commonly known as Montreal 1976, were an international multi-sport event held from July 17 to August 1, 1976 in Montreal, Quebec, Canada. Montreal was awarded the rights to the 1976 Games at the 69th IOC Session in Amsterdam on May 12, 1970, over the bids of Moscow and Los Angeles. It was the first and, so far, only Summer Olympic Games to be held in Canada. Toronto hosted the 1976 Summer Paralympics the same year as the Montreal Olympics, </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1976_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1980 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1980.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1980 Summer Olympics, officially known as the Games of the XXII Olympiad and commonly known as Moscow 1980, were an international multi-sport event held from 19 July to 3 August 1980 in Moscow, Soviet Union, in present-day Russia. The Games were the first to be staged in Eastern Europe, and remain the only Summer Olympics held there, as well as the first Olympic Games and only Summer Olympics to be held in a Slavic language-speaking country. They were also the only Summer Olympic Games to be held in a communist country until the 2008 Summer Olympics held in China. </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1980_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1984 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1984.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1984 Summer Olympics (officially the Games of the XXIII Olympiad and also known as Los Angeles 1984) were an international multi-sport event held from July 28 to August 12, 1984, mainly in Los Angeles, California, United States. It marked the second time that Los Angeles had hosted the Games, the first being in 1932. California was the home state of the incumbent U.S. President Ronald Reagan, who officially opened the Games. These were the first Summer Olympic Games under the IOC presidency of Juan Antonio Samaranch. </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1984_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1988 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1988.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1988 Summer Olympics (Korean: 1988년 하계 올림픽; RR: 1988nyeon Hagye Ollimpig), officially known as the Games of the XXIV Olympiad (Korean: 제24회 올림픽경기대회; RR: Je 24hoe Ollimpiggyeong-gidaehoe) and commonly known as Seoul 1988 (Korean: 서울 1988), was an international multi-sport event held from 17 September to 2 October 1988 in Seoul, South Korea. 159 nations were represented at the games by a total of 8,391 athletes (6,197 men and 2,194 women). 237 events were held and 27,221 volunteers helped to prepare the Olympics. </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1988_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1992 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1992.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1992 Summer Olympics, officially known as the Games of the XXV Olympiad (Spanish: Juegos de la XXV Olimpiada, Catalan: Jocs de la XXV Olimpíada) and commonly known as Barcelona '92, were an international multi-sport event held from 25 July to 9 August 1992 in Barcelona, Catalonia, Spain. This was the first and to date only Summer Olympics to be held in the country. Beginning in 1994, the International Olympic Committee decided to hold the Summer and Winter Olympics in alternating even-numbered years.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1992_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
        <div class="container row">
            <h4 class="text-danger my-4">1996 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1996.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 1996 Summer Olympics were an international multi-sport event held from July 19 to August 4, 1996, in Atlanta, Georgia, United States. These were the fourth Summer Olympics to be hosted by the United States, and marked the centennial of the 1896 Summer Olympics in Athens, the inaugural edition of the modern Olympic Games. These were also the first Summer Olympics since 1924 to be held in a different year than the Winter Olympics, as part of a new IOC practice implemented in 1994 to hold the Summer and Winter Games in alternating, even-numbered years.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1996_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        <div class="container row">
            <h4 class="text-danger my-4">2000 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/2000.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 2000 Summer Olympics were an international multi-sport event held from 15 September to 1 October 2000 in Sydney, New South Wales, Australia. It marked the second time the Summer Olympics were held in Australia, and in the Southern Hemisphere, the first being in Melbourne, Victoria, in 1956.Sydney was selected as the host city for the 2000 Games in 1993. Teams from 199 countries participated in the 2000 Games, which were the first to feature at least 300 events in its official sports programme. 

                </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/2000_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        <div class="container row">
            <h4 class="text-danger my-4">2004 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/2004.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 2004 Summer Olympics, officially the Games of the XXVIII Olympiad  and also known as Athens 2004, were an international multi-sport event held from 13 to 29 August 2004 in Athens, Greece. The Games saw 10,625 athletes compete, some 600 more than expected, accompanied by 5,501 team officials from 201 countries, with 301 medal events in 28 different sports.The 2004 Games marked the first time since the 1996 Summer Olympics that all countries with a National Olympic Committee were in attendance, </p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/2004_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        <div class="container row">
            <h4 class="text-danger my-4">2008 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/2008.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 2008 Summer Olympics, officially the Games of the XXIX Olympiad and also known as Beijing 2008,ere an international multisport event held from 8 to 24 August 2008 in Beijing, China. A total of 10,942 athletes from 204 National Olympic Committees (NOCs) competed in 28 sports and 302 events, one event more than those scheduled for the 2004 Summer Olympics. It marked the first time China had hosted the Olympic Games, and the third time the Summer Olympic Games had been held in East Asia..,</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/2008_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        <div class="container row">
            <h4 class="text-danger my-4">2012 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/2012.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 2012 Summer Olympics and also known as London 2012) were an international multi-sport event held from 27 July to 12 August 2012 in London, England, United Kingdom. The first event, the group stage in women's football, began on 25 July at the Millennium Stadium in Cardiff, followed by the opening ceremony on 27 July.10,768 athletes from 204 National Olympic Committees (NOCs) participated in the 2012 Olympics.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/2012_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        <div class="container row">
            <h4 class="text-danger my-4">2016 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/2016.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 2016 Summer Olympics,officially the Games of the XXXI Olympiad and also known as Rio 2016, were an international multi-sport event held from 5 to 21 August 2016 in Rio de Janeiro, Brazil, with preliminary events in some sports beginning on 3 August. Rio was announced as the host city at the 121st IOC Session in Copenhagen, Denmark, on 2 October 2009.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/2016_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        <div class="container row">
            <h4 class="text-danger my-4">2020 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/2020.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 2020 Summer Olympics, officially the Games of the XXXII Olympiad,and branded as Tokyo 2020 , was an international multi-sport event held from 23 July to 8 August 2021 in Tokyo, Japan, with some preliminary events that began on 21 July.Tokyo was selected as the host city during the 125th IOC Session in Buenos Aires, Argentina, on 7 September 2013. Originally scheduled to take place from 24 July to 9 August 2020,</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/2020_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        <div class="container row">
            <h4 class="text-danger my-4">2024 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/2024.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 2024 Summer Olympics, officially the Games of the XXXIII Olympiad and also known as Paris 2024, are an upcoming international multi-sport event scheduled to take place from 26 July to 11 August 2024 in Paris, France.Having previously hosted in 1900 and 1924, Paris will become the second city to host the Summer Olympics three times after London (1908, 1948 and 2012). The Games will mark the centenary of the Paris Games of 1924, and the sixth Olympic Games hosted by France</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/2024_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        <div class="container row">
            <h4 class="text-danger my-4">2028 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/2028.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 2028 Summer Olympics is a forthcoming international multi-sport event scheduled to take place from July 21 to August 6, 2028, in Los Angeles, California, United States. It will be the first Summer Games to be held in the US since the 1996 Summer Olympics in Atlanta, Georgia, and the first Olympics in the US since the 2002 Winter Olympics in Salt Lake City, Utah.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/2028_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        <div class="container row">
            <h4 class="text-danger my-4">2032 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/2032.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 2032 Summer Olympics, officially known as the Games of the XXXV Olympiad and also known as Brisbane 2032, will be an international multi-sport event scheduled to take place from 23 July to 8 August 2032, in Brisbane, Queensland, Australia.It will be the third Summer Games to be held in Australia after the 1956 Summer Olympics in Melbourne,</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/2032_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        <div class="container row">
            <h4 class="text-danger my-4">2036 Summer Olympics Games</h4>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 images right my-2">
                <img src="img/1936.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left">
                <p>The 2036 Summer Olympics, officially known as the Games of the XXXVI Olympiad, is a forthcoming international multi-sport event. The winning bid for the host city might be announced in 2025 or 2029.</p>
                <button id="myBtn" class="text-center"><a href="https://en.m.wikipedia.org/wiki/1936_Summer_Olympics"
                        target="_blank">Read More</a></button>
            </div>
            
            <hr>
        </div>
    </div>
</div>

    <!-- Footer -->
    <div class="container1" style="width:2000px">     
<footer class="page-footer font-small unique-color-dark" style="font-family:serif";>

    <div class="container1" style="background-color: #333";>
     <!-- <div class="container1"> -->
  
        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0" style="color:white">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">
  
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic" href="https://www.google.co.in/">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic" href="https://www.linkedin.com/in/tejashri-agale-2324082001">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>
  
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row-->
  
      </div>
    </div>
  
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
  
      <!-- Grid row -->
      <div class="row mt-3">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="font-family: Times New Roman";>
  
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold" >India At Olympics</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>This Is Our Capstone Project in Tech Saksham,This Website basically contain information about India's Performance at Olympics<br>
        </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="font-family: Times New Roman";>
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Social Media</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="http://instagram.com/tejashri_agale_2324?utm_source=qr" target="_blank">Instagram</a>
          </p>
          <p>
            <a href="#!">Telegram</a>
          </p>
          <p>
            <a href="#!">Facebook</a>
          </p>
          <p>
            <a href="https://www.linkedin.com/in/tejashri-agale-2324082001" target="_blank">Linkedin</a>
            
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="font-family: Times New Roman";>
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="reg.php">Your Account</a>
          </p>
          <p>
            <a href="game.php">Games</a>
          </p>
          <p>
            <a href="sports.html">Sports</a>
          </p>
          <p>
            <a href="more.php">for More Info</a>
          </p>
          
  
        </div >
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="font-family: Times New Roman";>
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i> India</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> Olympic@gmail.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
    <div style="background-color: #333";>
      <div class="container" >
  
        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center" style="font-family: Times New Roman";>
  
  
    <!-- Copyright -->
    <div class="footer-copyright text-center" style="color:white; font-family: Times New Roman"; >© 2021 Copyright:
      <a href="https://mdbootstrap.com/" style="font-family: Times New Roman";> India At Olympics.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>

  <!-- Footer -->

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

   
   
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
<script>
        var btn = $('#button');
 
 $(window).scroll(function() {
   if ($(window).scrollTop() > 300) {
     btn.addClass('show');
   } else {
     btn.removeClass('show');
   }
 });
 
 btn.on('click', function(e) {
   e.preventDefault();
   $('html, body').animate({scrollTop:0}, '300');
 });
 
</script> 
</body>

</html>

