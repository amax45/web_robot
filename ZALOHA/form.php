<!DOCTYPE HTML>

<html>
	<head>
		<title>Project ICT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="Projekt do predmetu ICT" />
		<meta name="keywords" content="web,robot,detekce" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section class="intro">
						<header>
							<h1>Projekt ICT</h1>
							<p>tohle je naše webová stránka pro detekci robota. Autoři:<br>
                                <a href="https://www.vut.cz/lide/alex-wittner-230914">@Wittner</a>,
                                <a href="https://www.vut.cz/lide/matej-valicek-230903">@Valíček</a>,
                                <a href="https://www.vut.cz/lide/natalie-klimkova-231242">@Klimková</a>
                                <br>
                                <a href="index.html">Úvod</a>
                                <br>
                                <a href="stati.php">Statistiky</a>
                                    <br>
                                <a href="vse.php">Databáze</a>
                                    <br>
                                <a href="form.php">Přidání známek</a>
                                    </p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Dále</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="images/robot.jpg" alt="Obrazek robota" /></span>
						</div>
					</section>

				<!-- Section -->


					<!-- Section -->
					<section>
						<header>
							<h2>Přidání známky</h2>
						</header>
						<div class="content">
							<p>Zde můžete přidat známky, které se následně uloží v databázi. </p>
							<form action="insert.php" method="post">
								<div class="fields">
									<div class="field half">
										<input type="text" name="fjmeno" id="fjmeno" placeholder="Jméno" />
									</div>
									<div class="field half">
										<input type="text" name="fpredmet" id="fpredmet" placeholder="Předmět" />
									</div>
									<div class="field half">
										<input type="number" name="fprumer" id="fprumer" placeholder="Známka" />
									</div>
                                    <div class="field half">
										<input type="date" name="fdatum" id="fdatum" placeholder="Datum" />
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" name="submit" value="Přidat záznam" class="button primary"/></li>
								</ul>
							</form>
						</div>
                        
                 <section>
                        <footer>
                            <p>Napsal Wittner Alex, Valíček Matěj, Klimková Natálie</p>
						</footer>
					</section>     
                        
                        
				<!-- Copyright -->
				

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>