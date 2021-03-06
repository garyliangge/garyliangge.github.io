<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gary Ge</title>

    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico'>
    <link rel="stylesheet" href="stylesheets/bootstrap.min.css" type="text/css" media=screen>
    <link rel="stylesheet" href="stylesheets/font-awesome.min.css" type="text/css" media=screen>
    <link rel="stylesheet" href="stylesheets/gary_style.css" type="text/css" media=screen>
    <link rel="stylesheet" href="stylesheets/backgrounds.css" type="text/css" media=screen>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="javascripts/main.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href='https://fonts.googleapis.com/css?family=Arapey:400italic|Roboto:400,700,900|Josefin+Sans:400,700|Quicksand:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body id="body">


      <!---Preloader-------->
      <div id="loader-wrapper">
        <img id="loader0" class="loader" src="images/favicon.png">
        <div id="loader1" class="loader" ></div>
        <div id="loader2" class="loader" ></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>

      <!---Nav Section-------->
      <nav id="nav" class='transparent'>
        <div id="navbar" role="navigation">
          <div id="nav-menu">
            <button id="menu-button" onclick="onMenuClicked()">
              <span class='glyphicon glyphicon-menu-hamburger' aria-hidden="true"></span>
            </button>
          </div>
          <ul id="navlist">
            <li><a id="homelink" href="#" class='viewing'>Home</a></li>
            <li><a id="aboutlink" href="#">About</a></li>
            <li><a id="projectslink" href="#">Projects</a></li>
            <li><a id="researchlink" href="#">Research</a></li>
            <li><a id="contactlink" href="#">Contact</a></li>
          </ul>
        </div>
      </nav>

      <!---Cover Menu-------->
      <div id="menu" class="collapsed">
        <ul id="menulist">
          <li><a id="menu_homelink" href="#">Home</a></li>
          <li><a id="menu_aboutlink" href="#">About</a></li>
          <li><a id="menu_projectslink" href="#">Projects</a></li>
          <li><a id="menu_researchlink" href="#">Research</a></li>
          <li><a id="menu_contactlink" href="#">Contact</a></li>
        </ul>
      </div>

      <!---Home Section-------->
      <div class='section' id="home">
        <div id="filter-earth">
          <div id="header">
            <div id="name">
                GARY GE
            </div>
            <div Style="text-align: center;">
                <a id="resume" href="documents/GaryGe_Resume.pdf" target="_blank">RESUME</a>
            </div>
            <div id="chevron">
                <a id="chevron_aboutlink" href="#"><i id="chevron" class="fa fa-angle-down" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!---About Section-------->
      <div class='divider' id="about">
          Gary Ge
      </div>

      <div class='section' id="about_body">
        <div style="display: table; margin: auto auto; padding: 40px 40px;">
          <img id="propic" src="images/profile4.png">
        </div>

        <div id='education_list' style="padding-bottom: 5vh; border-bottom: 1.5px solid rgb(138,136,126);">
          <div class='about_item'>
            <div class='about_item_logo_container'>
              <img class='about_item_logo' src="images/logos/berkeley.png">
            </div>
            <div class='about_item_content'>
              <div class='about_item_title'>
                University of California, Berkeley
              </div>
              <div class='about_item_subtitle'>
                Electrical Engineering and Computer Science
              </div>
              <div class='about_item_description'>
                Expected Graduation May 2018
              </div>
            </div>
          </div>

          <div class='about_item'>
            <div class='about_item_logo_container'></div>
            <div class='about_item_content'>
              <div class='about_item_title'>
                Ward Melville High School
              </div>
              <div class='about_item_subtitle'></div>
              <div class='about_item_description'>
                Graduated June 2015 ranked 8 out of 620.
              </div>
            </div>
          </div>
        </div>

        <div id='experience_list' style="padding: 5vh 0vw;">
          <div class='about_item'>
            <div class='about_item_logo_container'>
              <img class='about_item_logo' src="images/logos/infinera2.png">
            </div>
            <div class='about_item_content'>
              <div class='about_item_title'>
                Infinera
              </div>
              <div class='about_item_subtitle'>
                Software Engineering Intern | Summer 2016
              </div>
              <div class='about_item_description'>
                This summer I am working on the optical network design team, developing software that integrates new optical
                components and architectures into existing design tools.
              </div>
            </div>
          </div>

          <div class='about_item'>
            <div class='about_item_logo_container'>
              <img class='about_item_logo' src="images/logos/SBU.png">
            </div>
            <div class='about_item_content'>
              <div class='about_item_title'>
                Stony Brook University
              </div>
              <div class='about_item_subtitle'>
                Research Intern | 2014-2015
              </div>
              <div class='about_item_description'>
                At the SBU Computer Vision Lab, I conducted research on automatic action classification in images using
                human gaze data. See the "Research" section for more information.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!---Projects Section-------->
      <div class='divider' id="projects">
          Projects
      </div>

      <div class='section' id="projects_body">
          <div id="filter-sepia">

              <div id="proj_list" Style = "background-color: none;">
                  <div class='proj'>
                      <div class='proj_title'>
                          Personal Website
                      </div>
                      <div class='proj_body'>
                          <div class='proj_description'>
                              <img class='proj_picture' src="images/projects/garyge.png">
                              <br>You're at my personal website right now! This was the my first foray into web
                              development and  contains links to my resume and other relevant documents, descriptions
                              of my projects and research, and contact information.
                          </div>
                      </div>
                  </div>
                  <div class='proj'>
                      <div class='proj_title'>
                          <!-- <a class='proj_link' href="http://pleasetutor.me:3000/" target="_blank"> -->
                              PleaseTutorMe
                              <!-- <span class='glyphicon glyphicon-arrow-right' aria-hidden="true" Style="font-size: 18px;"></span> -->
                          <!-- </a> -->
                      </div>
                      <div class='proj_body'>
                          <div class='proj_description'>
                              <img class='proj_picture' src="images/projects/pleasetutorme.png">
                              <br>PleaseTutorMe is a web application designed to bring available tutors to clients
                              within minutes. Users can search by subject for tutors, or offer to tutor others in subjects
                              they are qualified to teach. A Google Maps UI allows users to find nearby available tutors
                              and decide on a convenient meetup location. When users request a tutoring session, the tutor
                              is notified via text using Twilio. <i>Created at HackingEDU 2015 in San Mateo, CA.</i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!---Research Section-------->
      <div class='divider' id="research">
          Research
      </div>

      <div class='section' id="research_body">
          <div id="filter-gunmetal">
              <div id="action_classification" Style="color: white;">
                  <div id="research_title" Style="text-align: center; font-size: 38px; display: table; padding: 5vh 0vw;">
                      Action Classification in Still Images Using Human Gaze
                  </div>
                  <!-- <div Style="display: table; margin: auto auto; padding: 5px;">
                      <img id="sbu_logo" src="images/logos/SB_log2o.png">
                  </div> -->
                  <div id="research_description">
                      Under the guidance of Kiwon Yun, Profs. Dimitris Samaras and Greg Zelinsky at the SBU Image Analysis Lab,
                      I researched the application of human gaze data to computer vision algorithms for action recognizing in
                      still images. Using gaze data collected with a tower-mounted eye tracker, I created novel gaze features that,
                      when used to train SVM classifiers, improved on those trained with state-of-the-art visual features. Moreover,
                      I identified behaviorally meaningful groups of action classes that elicit similar gaze patterns.By
                      blurring the border between psychology and computer vision, I uncovered new insights into the way humans
                      interpret images while opening a new direction for the advancement of image analysis algorithms.
                  </div>
                  <div Style="text-align: justify; width: 45%; display: table; margin: auto auto; padding: 5px;">
                      <img id="flowchart" src="images/research/flowchart_rounded.png">
                  </div>
                  <div id="publications">
                      <div Style="font-size: 25px;">Publications</div>
                      <p>
                          <div Style="color: gold;">Action Recognition in Still Images Using Human Eye Movements</div>
                          <u>Gary Ge</u>, Kiwon Yun, Dimitris Samaras, and Gregory J. Zelinsky
                          <br>The 2nd Vision Meets Cognition Workshop at Conference on Computer Vision and Pattern Recognition (CVPR) 2015 (Boston/USA)
                          <br>[<a href="http://www.cv-foundation.org/openaccess/content_cvpr_workshops_2015/W06/papers/Ge_Action_Classification_in_2015_CVPR_paper.pdf" Style="color: gold;" target="_blank"><u>PDF</u></a>]
                      </p>
                      <p>
                          <div Style="color: gold;">How We Look Tells Us What We Do: Action Recognition Using Human Gaze</div>
                          Kiwon Yun, <u>Gary Ge</u>, Dimitris Samaras, and Gregory J. Zelinsky
                          <br>Vision Sciences Society (VSS) 2015 (Florida/USA)
                          <br>[<a href="http://jov.arvojournals.org/article.aspx?articleid=2433159" Style="color: gold;" target="_blank"><u>Abstract</u></a>]
                              [<a href="documents/VSS_Poster.pdf" Style="color: gold;" target="_blank"><u>Poster</u></a>]
                      </p>
                  </div>
              </div>
          </div>
      </div>

      <!---Contact Section-------->
      <div class='divider' id="contact">
          Contact
      </div>

      <div class='section' id="contact_body">
          <div id='contact_container' style='height: auto;'>
              <div id="contactform">
                  <div id="contact_section_text">
                      <div style='font-size: 65px; font-family: Josefin Sans;'>
                          Hello.
                      </div>
                      <div>
                          <p>A simple hello can lead to a million things. Ask about my work, talk shop, meet me for coffee, chat about life, or just say hi.
                             Send a message to connect.</p>
                          <p>Or, explore the links below to find out more about me.</p>
                      </div>
                      <div id="smlinks">
                          <a href="https://www.facebook.com/gary.ge.5" target="_blank">
                            <i class="fa fa-facebook-square fa-2x smlogo" aria-hidden="true"></i>
                          </a>
                          <a href="https://www.linkedin.com/pub/gary-ge/b8/898/898" target="_blank">
                            <i class="fa fa-linkedin-square fa-2x smlogo" aria-hidden="true"></i>
                          </a>
                          <a href="https://github.com/garyliangge" target="_blank">
                            <i class="fa fa-github-square fa-2x smlogo" aria-hidden="true"></i>
                          </a>
                          <a href="mailto:garyliangge@berkeley.edu">
                            <i class="fa fa-envelope-square fa-2x smlogo" aria-hidden="true"></i>
                          </a>
                      </div>
                  </div>
                  <?php include('contactform.php') ?>
                  <form id="htmlform" name="htmlform" method="post" action="index.php">
                      <div class="form-group">
                        <label for="first_name">First Name *</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" maxlength="50" size="30" placeholder="First">
                        <?php echo "<p class='text-danger'>$errFirstName</p>";?>
                      </div>
                      <div class="form-group">
                        <label for="last_name">Last Name *</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" maxlength="50" size="30" placeholder="Last">
                        <?php echo "<p class='text-danger'>$errLastName</p>";?>
                      </div>
                      <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" class="form-control" id="email" name="email" maxlength="80" size="30" placeholder="Email">
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                      </div>
                      <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea class="form-control" id="message" name="message" maxlength="1000" rows="3"></textarea>
                        <?php echo "<p class='text-danger'>$errMessage</p>";?>
                      </div>
                      <div class="form-group">
                        <label for="human">3 + 5 = ? *</label>
                        <input type="text" class="form-control" id="human" name="human" maxlength="30" size="30">
                        <?php echo "<p class='text-danger'>$errHuman</p>";?>
                      </div>
                      <div style='margin-bottom: 15px;'>
                        <input id="submit" class="btn btn-primary" name="submit" type="submit" value="Send">
                      </div>
                      <div class="form-group">
                    			<?php echo $result;?>
                  	  </div>
                  </form>
              </div>
          </div>

          <div id="footer">
              <img id="gary_logo" src="images/favicon.png">
              <div id="copyright">
                  © 2016 Gary Ge
              </div>
          </div>
      </div>
  </body>

</html>
