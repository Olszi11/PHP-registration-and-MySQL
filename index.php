<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Astronomy news</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/app.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
  <nav id="navigation">
    <div class="container">
      <ul id="navigation-list">
        <li><img src="images/code.png"></li>
        <li><a href="#header">Home</a></li>
        <li><a href="#articles">Articles</a></li>
        <li><a href="#aboutUs">About us</a></li>
        <li><a href="#header">Contact</a></li>
      </ul>
    </div>
  </nav>


  <header id="header">
    <div class="container">
      <p>Astronomy news</p>
    </div>
  </header>

  <section id="articles">
    <button>change color</button>
    <div class="container">
      <article class="article">
        <div class="title">
          <p style="color:
          <?php
          if(isset($_GET['color']) && !empty($_GET['color']) && (preg_match("/^[a-zA-Z]*$/",$_GET['color'])))
          {
            echo $_GET['color'];
          }
          ?>">Mysterious Filament is Stretching Down Towards the Milky Way’s Supermassive Black Hole</p>
        </div>
        <div class="image-container">
            <img src="images/image1.jpg">
        </div>
        <p class="text">The core of the Milky Way Galaxy has always been a source of mystery and fascination to astronomers. This is due in part to the fact that our Solar System is embedded within the disk of the Milky Way – the flattened region that extends outwards from the core. This has made seeing into the bulge at the center of our galaxy rather difficult. Nevertheless, what we’ve been able to learn over the years has proven to be immensely interesting.<br/><br/>
        For instance, in the 1970s, astronomers became aware of the Supermassive Black Hole (SMBH) at the center of our galaxy, known as Sagittarius A* (Sgr A*). In 2016, astronomers also noticed a curved filament that appeared to be extending from Sgr A*. Using a pioneering technique, a team of astronomers from the Harvard-Smithsonian Center for Astrophysics (CfA) recently produced the highest-quality images of this structure to date.</p>
        <p class="text add-text">The study which details their findings, titled “A Nonthermal Radio Filament Connected to the Galactic Black Hole?“, recently appeared in The Astrophysical Journal Letters. In it, the team describes how they used the National Radio Astronomy Observatory’s (NRAO) Very Large Array to investigate the non-thermal radio filament (NTF) near Sagittarius A* – now known as the Sgr A West Filament (SgrAWF).<br/><br/>
        After examining the filament, the research team came up with three possible explanations for its existence. The first is that the filament is the result of inflowing gas, which would produce a rotating, vertical tower of magnetic field as it approaches and threads Sgr A*’s event horizon. Within this tower, particles would produce radio emissions as they are accelerated and spiral in around magnetic field lines extending from the black hole.<br/><br/>
        The second possibility is that the filament is a theoretical object known as a cosmic string. These are basically long, extremely thin cosmic structures that carry mass and electric currents that are hypothesized to migrate from the centers of galaxies. In this case, the string could have been captured by Sgr A* once it came too close and a portion crossed its event horizon.<br/><br/>
        The third and final possibility is that there is no real association between the filament and Sgr A* and the positioning and direction it has shown is merely coincidental. This would imply that there are many such filaments in the Universe and this one just happened to be found near the center of our galaxy. However, the team is confident that such a coincidence is highly unlikely.<br/><br/>
        All of these scenarios are currently being investigated, and each poses its own share of implications. If the first possibility is true – in which the filament is caused by particles being ejected by Sgr A* – then astronomers would be able to gleam vital information about how magnetic fields operate in such an environment. In short, it could show that near an SMBH, magnetic fields are orderly rather than chaotic.<br/><br/>
        This could be proven by examining particles farther away from Sgr A* to see if they are less energetic than those that are closer to it. The second possibility, the cosmic string theory, could be tested by conducting follow-up observations with the VLA to determine if the position of the filament is shifting and its particles are moving at a fraction of the speed of light.<br/><br/>
        If the latter should prove to be the case, it would constitute the first evidence that theoretical cosmic strings actually exists. It would also allow astronomers to conduct further tests of General Relativity, examining how gravity works under such conditions and how space-time is affected. The team also noted that, even if the filament is not physically connected to Sgr A*, the bend in the filament is still rather telling.<br/><br/>
        In short, the bend appears to be coincide with a shock wave, the kind that would be caused by an exploding star. This could mean that one of the massive stars which surrounds Sgr A* exploded in proximity to the filament in the past, producing the necessary shock wave that altered the course of the inflowing gas and its magnetic field. All of these mysteries will be the subject of follow-up surveys conducted with the VLA.
        As co-author Miller Goss from the National Radio Astronomy Observatory in New Mexico (and a co-author on the study) said, “We will keep hunting until we have a solid explanation for this object. And we are aiming to next produce even better, more revealing images.”</p>
        <p class="button-more">&mdash; read more</p>
      </article>

      <article class="article">
        <div class="title">
          <p style="color:
          <?php
          if(isset($_GET['color']) && !empty($_GET['color']) && (preg_match("/^[a-zA-Z]*$/",$_GET['color'])))
          {
            echo $_GET['color'];
          }
          ?>">Yes Please! NASA is Considering a Helicopter Mission to Titan</p>
        </div>
        <div class="image-container">
            <img src="images/image2.jpg">
        </div>
        <p class="text">The only thing cooler than sending a helicopter drone to explore Titan is sending a nuclear powered one to do the job. Called the “Dragonfly” spacecraft, this helicopter drone mission has been selected as one of two finalists for NASA’s robotic exploration missions planned for the mid 2020’s. NASA selected the Dragonfly mission from 12 proposals they were considering under their New Horizons program.<br/><br/>
        Titan is Saturn’s largest moon, and is a primary target in the search for life in our Solar System. Titan has liquid hydrocarbon lakes on its surface, a carbon-rich chemistry, and sub-surface oceans. Titan also cycles methane the way Earth cycles water.</p>
        <p class="text add-text">Dragonfly would fulfill its mission by hopping around on the surface of Titan. Once an initial landing site is selected on Titan, Dragonfly will land there with the assistance of a ‘chute. Dragonfly will spend periods of time on the ground, where it will charge its batteries with its radioisotope thermoelectric generator. Once charged, it would then fly for hours at time, travelling tens of kilometers during each flight. Titan’s dense atmosphere and low gravity (compared to Earth) allows for this type of mission.<br/><br/>
        During these individual flights, potential landing sites would be identified for further scientific work. Dragonfly will return to its initial landing site, and only visit other sites once they have been verified as safe.<br/><br/>
        Dragonfly is being developed at the Johns Hopkins Applied Physics Laboratory (JHAPL.) It has a preliminary design weight of 450 kg. It’s a double quad-copter design, with four sets of dual rotors.<br/><br/>
        “Titan is a fascinating ocean world,” said APL’s Elizabeth Turtle, principal investigator for Dragonfly. “It’s the only moon in the solar system with a dense atmosphere, weather, clouds, rain, and liquid lakes and seas—and those liquids are ethane and methane. There’s so much amazing science and discovery to be done on Titan, and the entire Dragonfly team and our partners are thrilled to begin the next phase of concept development.”<br/><br/>
        The science objectives of the Dragonfly mission center around prebiotic organic chemistry and habitability on Titan. It will likely have four instruments: Mass SpectrometerGamma-Ray, Spectrometer, Atmospheric and Geophysical Sensors, Cameras.<br/><br/>
        Being chosen as a finalist has the team behind Dragonfly excited for the project. “This brings us one step closer to launching a bold and very exciting space exploration mission to Titan,” said APL Director Ralph Semmel. “We are grateful for the opportunity to further develop our New Frontiers proposals and excited about the impact these NASA missions will have for the world.”<br/><br/>
        Exploring Titan holds a daunting set of challenges. But as we’ve seen in recent years, NASA and its partners have the capability to meet those challenges. The JHAPL team behind Dragonfly also designed and built the New Horizons mission to Pluto and the Kuiper Belt object 2014 MU69. Their track record of success has everyone excited about the Dragonfly mission.<br/><br/>
        The Dragonfly mission, and the other finalist—the Comet Astrobiology Exploration Sample Return being developed by Cornell University and the Goddard Space Flight Center—will each receive funding through the end of 2018 to work on the concepts. In the Spring of 2019, NASA will select one of them and will fund its continued development.<br/><br/>
        Dragonfly is part of NASA’s New Frontiers program. New Frontiers missions are planetary science missions with a cap of approximately $850 million. New Frontiers missions include the Juno mission to Jupiter, the Osiris-REx asteroid sample-return missions, and the aforementioned New Horizons mission to Pluto.</p>
        <p class="button-more">&mdash; read more</p>
      </article>
    </div>
  </section>

  <section id="aboutUs">
    <div class="container">
      <div class="image">
      </div>
      <h2>Krzysztof Olszowy</h2>
      <p>Web Dev</p>
      <div class="icons">
        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
      </div>
      <div class="info">
        <p>This website is only my individual web-project. All of science informations in above articles were copied from <a href="https://www.universetoday.com/" target="_blank">HERE</a></p>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="title-contact">
        <p>Contact</p>
      </div>
      <div id="formData"></div>
      <div class="forms">
        <form method="post">
          <div class="inputs">
            <input name="name" value="" type="text" placeholder="name">
            <input name="surname" value="" type="text" placeholder="surname">
            <input name="e-mail" value="" type="text" placeholder="e-mail">
            <input name="phone" value="" type="text" placeholder="phone">
            <input name="age" value="" type="text" placeholder="age">
          </div>
          <div class="message">
            <textarea name="message" value="" placeholder="your message"></textarea>
          </div>
          <input class="button" type="button" value="send">
        </form>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="container">
      <ul>
        <li><a href="#aboutUs">About us</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="https://www.universetoday.com/" target="_blank"> <img class="icon1" src="images/universe.png"></a></li>
        <li><a href="https://www.nasa.gov/" target="_blank"><img class="icon2" src="images/nasa.png"></a></li>
        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      </ul>
      <div class="back-btn"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>

    </div>
  </footer>


</body>
</html>
