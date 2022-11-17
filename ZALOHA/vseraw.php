<html>
    <body>
        <div>

<div class="obsah">
							
				<h2>Výpis všech dosažených výsledků</h2>
				
				<?php
					
					// pripojeni k DB serveru a uložení relace do proměnné
					$spojeni = mysqli_connect("127.0.0.1", "root", "", "web");
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
				
			</div>
			
		</div>
		
	</body>
</html>


















