<?php 
$links = array("Hell yeah!", "Go there!", "Visit that place!", "Go for it!", "Let me see!");

function getLinkTitle(){
	global $links;
	echo($links[rand(0, count($links)-1)]);
}
?>



<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile|o2|opera m(ob|in)i|palm( os)?|p(ixi|re)\/|plucker|pocket|psp|smartphone|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce; (iemobile|ppc)|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v)|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
	echo 'mobillllllle';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bastien Colmard - Portfolio, CV & Contact</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!--[if IE]>
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE 7]>
    	<link rel="stylesheet" href="style/ie7.css" type="text/css" media="screen" />
    <![endif]-->

    <link rel="stylesheet" href="style/global.css" type="text/css" media="screen" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.smooth-scroll.js" type="text/javascript"></script>
</head>

<body id="top">
    <header> <!-- HTML5 header tag -->
    	<div id="headercontainer">
    		<h1><a id="homeLink" class="introlink anchorLink" href="#top">Bastien Colmard</a></h1>
    		<nav> <!-- HTML5 navigation tag -->
    			<ul>
    				<li><a class="introlink anchorLink" href="#intro">Intro</a></li>
    				<li><a class="portfoliolink anchorLink" href="#portfolio">Portfolio</a></li>
    			</ul>				
    		</nav>
    	</div>
    </header>
	
	<div class="badge" id="twitter-badge"> 
		<a href="http://twitter.com/baztoune"><img src="images/twitter-badge.png" alt="Follow Me on Twitter" /></a> 
	</div>
	<div class="badge" id="feedback-badge"> 
		<a href="http://twitter.com/baztoune"><img src="images/feedback-badge.png" alt="Follow Me on Twitter" /></a> 
	</div>
	
    <section id="contentcontainer"> <!-- HTML5 section tag for the content 'section' -->
		
    	<section>
			<section id="introFloatRight">
				<div class="introBlock">
					<ul>
						<li>LinkedIn</li>
						<li>Viadeo</li>
						<li>CV (fr)/(en)</li>
						<li>vCard</li>
					</ul>
				</div>
				<div class="introBlock">
					<ul>
						<li>Flickr</li>
						<li>Vimeo</li>
						<li>Grooveshark</li>
						<li>Deezer</li>
						<li>GReader</li>
					</ul>
				</div>
			</section>
			<section id="intro">
				<h2 class="intro">Welcome on my portfolio</h2>
				<p>Hi! I'm Bastien Colmard, a 23 year old french web developer. I currently live in Paris where I'm hired as a Java EE developer in an IT services company. You can find here some places where I'm present on the web -music, pictures, social media-, my résumé, my personal and professional blogs.</p>
			</section>
    	</section>

    	<section id="portfolio"> <!-- HTML5 section tag for the portfolio 'section' -->
    		<h2 class="work">Portfolio</h2>
    		<div class="project">
				<div class="featured project-logo"><img src="images/project-userscript.png" class="inactive" alt="Inspect Element large preview" /></div>
				<div class="project-content">
					<p class="project-link"><a href="http://userscripts.org/users/Baztoune"><span><?php getLinkTitle();?></span></a></p>
					<p class="description">Userscipt is a place where we can publish the small scripts we develop for the Firefox add-on Greasemonkey. I've developed a few scripts for now, always for my personal needs, but just published one, which was <a href="http://lifehacker.com/5082396/gmail-superstars-turbo-adds-custom-stars-to-your-email">featured on the famous US blog Lifehacker</a>. I'd like to publish some new scripts but the problem is, most of the time, it wouldn't be useful for people and just fit my needs.</p>
				</div>
			</div>
			<div class="project">
				<div class="featured project-logo"><img src="images/project-stackoverflow.png" class="inactive" alt="Inspect Element large preview" /></div>
				<div class="project-content">
					<p class="project-link"><a href="http://stackoverflow.com/users/221236/baztoune"><span><?php getLinkTitle();?></span></a></p>
					<p class="description">Despite the policy is often too strict and makes the user experience limited (but hey, that's what makes it so efficient), StackOverflow is an incredible place where we can find a lot of answers to professional development problems. I use to spend some time here, looking for questions I can answer, but I admit that's a difficult deal! People here are really fast and most of the time experts.</p>
				</div>
			</div>
			<div class="project">
				<div class="featured project-logo"><img src="images/project-amo.png" class="inactive" alt="Inspect Element large preview" /></div>
				<div class="project-content">
					<p class="project-link"><a href="https://addons.mozilla.org/firefox/user/4922403"><span><?php getLinkTitle();?></span></a></p>
					<p class="description">Addon Mozilla .Org etc.</p>
				</div>
			</div>
			<div class="project">
				<div class="featured project-logo"><img src="images/project-googlecode.png" class="inactive" alt="Inspect Element large preview" /></div>
				<div class="project-content">
					<p class="project-link"><a href="http://code.google.com/u/baztoune/"><span><?php getLinkTitle();?></span></a></p>
					<p class="description">Google code repository</p>
				</div>
			</div>
			<div class="project">
				<div class="featured project-logo"><img src="images/project-blogpro.png" class="inactive" alt="Inspect Element large preview" /></div>
				<div class="project-content">
					<p class="project-link"><a href="http://pro.bastien-colmard.com/"><span><?php getLinkTitle();?></span></a></p>
					<p class="description">Yep, I agree, it's not a professional blog, it's just a personal technology oriented blog. But I don't care.</p>
				</div>
			</div>
			<div class="project">
				<div class="featured project-logo"><img src="images/project-blogperso.png" class="inactive" alt="Inspect Element large preview" /></div>
				<div class="project-content">
					<p class="project-link"><a href="http://perso.bastien-colmard.com/"><span><?php getLinkTitle();?></span></a></p>
					<p class="description">My personal blog, where I speak about photography, video, sports, and whatever.</p>
				</div>
			</div>
			<div class="project">
				<div class="featured project-logo"><img src="images/project-firefoxstory.png" class="inactive" alt="Inspect Element large preview" /></div>
				<div class="project-content">
					<p class="description">This was my first blog. Started in **** when Firefox was still a slowly growing project, we were -with my friend Amaury Blanc- writing articles about Firefox, inspired by our friends Zorgloob. This was the first french Firefox blog, and it was gaining more and more popularity. But studies and tiredness made us let the project go. And I just regret it now.</p>
				</div>
			</div>
    	</section>
		

    	<footer> <!-- HTML5 footer tag -->
    		<ul>
    			<li><a href="#">Buy me a beer</a></li>
				<li><a href="#">Don't fuck with the copyright</a></li>
    		</ul>
    	</footer>	
    </section>
    <script>
		$(document).ready(function(){
			// transforms anchors into smooth scroll anchors
			$('nav li a.anchorLink, #homeLink').smoothScroll({offset: -50});
			
			// hide every expandable descriptions
			$(".project-content").hide();

			$(".project-logo").click(function () {
				if(!$(this).children().first().hasClass("active")){
					/*make everything inactive but this*/
					$(".project-logo").children().removeClass('active').addClass("inactive");
					$(this).children().first().addClass("active");

					/*hide everything but this*/
					$(".project-content").animate({height: 'hide'},1000)
					$(this).parent().find(".project-content").animate({height: 'show'},1000);
				} else {
					$(".project-logo").children().removeClass('active').addClass("inactive");
					$(".project-content").animate({height: 'hide'},1000);
				}
			});
		});

	</script>
</body>
</html>