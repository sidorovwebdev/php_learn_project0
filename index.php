<?php
    require_once ('./functions.php');
    $data = require_once('./data.php');
    $careerData = require_once('./career_data.php');
    $educations = getSortedArray($data['education']);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>/
    <title>Responsive Resume/CV Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.png" alt="" />
                <h1 class="name"><?=$data['about']['name']?></h1>
                <h3 class="tagline"><?=$data['about']['post']?></h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto:<?=$data['about']['email']?>"><?=$data['about']['email']?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?=$data['about']['phone']?>"><?=$data['about']['phone']?></a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="<?=$data['about']['site']?>" target="_blank"><?=$data['about']['site']?></a></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <? foreach ($educations as $education) : ?>
                <div class="item">
                    <h4 class="degree"><?=$education['speciality']?></h4>
                    <h5 class="meta"><?=$education['title']?></h5>
                    <div class="time"><?=$education['start']?> - <?=$education['end']?></div>
                </div>
                <?endforeach;?>
            </div><!--//education-container-->
            <div class="languages-container container-block">
                <h2 class="container-block-title">Языки</h2>
                <ul class="list-unstyled interests-list">
                    <? foreach($data['languages'] as $language) :?>
                    <li><?=$language['title']?> <span class="lang-desc"> (<?=$language['level']?>)</span></li>
                    <?endforeach;?>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Интересы</h2>
                <? foreach($data['interests'] as $interests) {?>
                <ul class="list-unstyled interests-list">
                    <li><?=$interests?></li>
                </ul>
                <?}?>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Обо мне</h2>
                <div class="summary">
                    <p><?=$careerData['about']?></p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Опыт работы</h2>
                <? foreach($careerData['experience'] as $experience) :?>
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?=$experience['post']?></h3>
                            <div class="time"><?=$experience['start']?> - <?=$experience['end']?></div>
                        </div><!--//upper-row-->
                        <div class="company"><?=$experience['company']?>, <?=$experience['city']?></div>
                    </div><!--//meta-->
                    <div class="details">
                        <p><?=$experience['about']?></p>
                    </div><!--//details-->
                </div><!--//item-->
                <?endforeach;?>
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Проекты</h2>
                <div class="intro">
                    <p>Таким образом постоянный количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Равным образом сложившаяся структура организации способствует подготовки и реализации модели развития.</p>
                </div><!--//intro-->
                <? foreach( $careerData['projects'] as $careers):?>
                <div class="item">
                    <span class="project-title"><a href="<?=$careers['link']?>"><?=$careers['title']?></a></span> - <span class="project-tagline"><?=$careers['about']?></span>
                </div><!--//item-->
                <? endforeach; ?>
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Скиллы</h2>
                <div class="skillset">
                    <? foreach ($careerData['skills'] as $skills):?>
                    <div class="item">
                        <h3 class="level-title"><?=$skills['title']?></h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="<?=$skills['level']?>%">
                            </div>                                      
                        </div><!--//level-bar-->
                    </div><!--//item-->
                    <?endforeach;?>
                </div>
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

