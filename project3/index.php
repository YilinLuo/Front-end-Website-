<?php include 'inc/html-top.php';?>

<body>

		<header>  
				<div class="banner banner1">
				<figure class="logo">
						<img src="images/logo.png" alt="logo"></figure>
				<a href="index.php">
				<h1>Computer Science Giants</h1></a>
				<div class ="slogan">Significant figures in the fields of Internet and Computer Science</div>
				</div>
			</header>

			<?php include 'inc/nav.php';?>
<div class="slide-container">
			<ul class="rslides">
			<li><img src="images/lroberts1.jpg" alt= "Lawrence Roberts"></li>
			<li><img src="images/rw1.jpg" alt= "Lawrence Roberts"></li>
			<li><img src="images/rw2.jpg" alt= "Lawrence Roberts"></li>
			<li><img src="images/turing_machine.png" alt= "Turing Machine"></li>
			<li><img src="images/robertskleinrock.jpg" alt= "How the web was won"></li>
			</ul>

			<div class="text"><p>Internet is a system that interconnects the different computer systems across the world. It uses the Internet protocol suite to link devices located in different corners of the world.

The Internet system carries an extensive range of information resources and services including World Wide Web (WWW), telephony, electronic mail, etc. It uses standard internet protocols, such as TCP/IP and HTTP, etc.</p></div>
</div>
		<main class= "container">
	<article>
<div class= "article-container">
		<section class= "introduction">
				<figure class="img-intro-turing">
						<img src="images/alan_turing.png" alt= "Alan Turing">
						<figcaption> </figcaption>
				</figure>
		<a href="Alan-Turing.php"><h2>Alan Turing</h2></a>
				<p>In four inadequate words Alan Turing appears now as the founder of computer science, the originator of the dominant technology of the late twentieth century, but these words were not spoken in his own lifetime, and he may yet be seen in a different light in the future. They are also words very remote from the circumstances of his birth and infancy.

						The name of Turing was best known for the work of Julius' brother H. D. Turing on fly fishing, and had no connection with the scientific or academic worlds. The name of Stoney however was notable for a remote relative, the Irish physicist George Johnstone Stoney (1826-1911), today best known for his identification of the natural units of physical quantities. Possibly the engineering base of his mother's family, with its respect for applied science, had some influence, but if so it was subordinated to the demands of class, church and Empire. Certainly the elder brother John F. Turing, who became a London solicitor, showed no sign of it. Alan Turing's story was not one of family or tradition but of an isolated and autonomous mind.</p>
						<a href="Alan-Turing.php"><p>Read more about Alan Turing ></p></a>
				</section>

<section class= "Turing-WII">
<figure class="img-index-Tim">
		<img src="images/about.jpg" alt= "Time Berners-Lee">
		<figcaption> </figcaption>
</figure>
<div class="Tim" >
<a href="Tim-Berners-Lee.php"><h2>Tim Berners-Lee</h2></a>
<p>Sir Tim Berners-Lee invented the World Wide Web in 1989.

		He is the Director of the World Wide Web Consortium (W3C), a Web standards organization founded in 1994 which develops interoperable technologies (specifications, guidelines, software, and tools) to lead the Web to its full potential. He is a Director of the World Wide Web Foundation which was launched in 2009 to coordinate efforts to further the potential of the Web to benefit humanity.</p>
<p>A graduate of Oxford University, Sir Tim invented the Web while at CERN, the European Particle Physics Laboratory, in 1989. He wrote the first web client and server in 1990. His specifications of URIs, HTTP and HTML were refined as Web technology spread.

		He is the 3Com Founders Professor of Engineering in the School of Engineering with a joint appointment in the Department of Electrical Engineering and Computer Science at the Laboratory for Computer Science and Artificial Intelligence ( CSAIL) at the Massachusetts Institute of Technology (MIT) where he co-leads the Decentralized Information Group (DIG). He is also a Professor in the Computer Science Department at the University of Oxford, UK. He is President of and founded the Open Data Institute in London.
		
		In 2011 he was named to the Board of Trustees of the Ford Foundation, a globally oriented private foundation with the mission of advancing human welfare. He is President of London's Open Data Institute.</p>
	<a href="Tim-Berners-Lee.php"><p>Read more about Tim Berners-Lee ></p></a>
	</div>
</section>

<section class= "ACE">
		<figure class="img-index-Lawrence">
				<img src="images/rw1.jpg" alt= "Lawrence Roberts">
				<figcaption> </figcaption>
		</figure>
<a href="LawrenceRoberts.php"><h2>Lawrence Roberts</h2></a>
<p>Dr. Roberts designed and managed the first packet network, the ARPANET (the precursor to the Internet). At that time, in 1967, Dr. Roberts became the Chief Scientist of ARPA taking on the task of designing, funding, and managing the radically new communications network concept of packet switching. Since then Dr. Roberts has founded five startups; Telenet, NetExpress, ATM Systems, Caspian Networks, and Anagran. Dr. Roberts has BS, MS, and Ph.D. Degrees from MIT and has received numerous awards for his work, including the L.M. Ericsson prize for research in data communications, the ACM SIGCOMM Award, the IEEE Internet Award, the National Academy of Engineering Draper Award, the Principe de Asturias Award, and the NEC Computer and Communication Award.</p>
<a href="LawrenceRoberts.php"><p>Read more about Lawrence Roberts ></p></a>
</section>


<section class = "prosecution">
		<figure class="img-index-jeff">
				<img src="images/jeff.jpg" alt= "Jeff Bezos">
				<figcaption> </figcaption>
		</figure>
<a href="jeffBezos.php"><h2>Jeff Bezos</h2></a>
<p>Bezos is the founder of Amazon, the world's biggest online retailer. The Seattle-based company sells books, household goods and other products through its flagship website. It also controls the Whole Foods grocery chain and offers cloud computing and video streaming services. Amazon reported revenue of $233 billion in 2018.</p>
<a href="jeffBezos.php"><p>Read more about Jess Bezos ></p></a>
</section>
		</div>
</article>

<footer><div>Yilin Luo, CSC 170 Webpage Design and Development</div></footer>

</main>
<?php include 'inc/scripts.php'?>
<script src="js/responsiveslides.js"></script>
<script>
  $(function() {
    $(".rslides").responsiveSlides({ auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true});
  });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138300036-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138300036-1');
</script> 
</body>

</html>
