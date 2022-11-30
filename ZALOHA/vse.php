<!DOCTYPE HTML>
<!--
	Paradigm Shift by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
					<section id="first">
						<header>
							<h2>Studenti na VUT</h2>
						</header>
						<div class="content">
   	
				<h2>Výpis všech dosažených výsledků</h2>
				
				<?php
					
					// pripojeni k DB serveru a uložení relace do proměnné
					$spojeni = mysqli_connect("127.0.0.1", "root", "", "web");
                    //$spojeni = mysqli_connect("sql.endora.cz:3310", "amax456","Neumimto123","pisweb");
					if (!$spojeni) die("Nepodařilo se připojit k DB serveru: " . mysqli_connect_error());
					
					// vytvoření dotazu: Výpis celé tabulky
					$dotaz = "SELECT * FROM users";
					
					// mysqli_query odešle dotaz na DB server, vráti dvojrozměrné pole dat
					$data = mysqli_query($spojeni, $dotaz);
					
					echo "<p>Výpis všech známek:</p>";
					echo "<p><table class='users'>";
					echo "<tr>
							<th>Jméno</th> <th>Předmět</th> <th>Známka</th> <th>Datum</th>
						  </tr>";
					
					// pole dat vyčteme po jednom řádku pomocí cyklu while
					while ($radek = mysqli_fetch_array($data, MYSQLI_ASSOC)){
						echo "<tr>";
						echo "<td>".$radek['jmeno']."</td>";
						echo "<td>".$radek['predmet']."</td>";
						echo "<td>".$radek['prumer']."</td>";
                        echo "<td>".$radek['datum']."</td>";
						echo "</tr>";
					}
					
					echo "</table></p>";
					
					// ukončíme spojení s DB serverem
					mysqli_close($spojeni);
					
				?>
                        
                </section>
        
        
			     <section>
                     <footer>
                        <p>Napsal Wittner Alex, Valíček Matěj, Klimková Natálie</p>
				    </footer>
				</section>
            </div>
    </body>
</html>

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