<html>
    <body>
        <div>

<div class="obsah">
							
				<h2>Statistiky</h2>
				
				<?php
					
					// pripojeni k DB serveru a uložení relace do proměnné
					$spojeni = mysqli_connect("127.0.0.1", "root", "", "web");
					if (!$spojeni) die("Nepodařilo se připojit k DB serveru: " . mysqli_connect_error());
					
					// vytvoření dotazu: Výpis celé tabulky
					$dotaz = "SELECT * FROM users WHERE prumer = (SELECT MAX(prumer) FROM users);";
					
					// mysqli_query odešle dotaz na DB server, vráti dvojrozměrné pole dat
					$data = mysqli_query($spojeni, $dotaz);
					
					echo "<p>Předměty s nejhorším průměrem:</p>";
					echo "<p><table class='users'>";
					echo "<tr>
							<th>Jméno</th> <th>Předmět</th> <th>Známka</th> 
						  </tr>";
					
					// pole dat vyčteme po jednom řádku pomocí cyklu while
					while ($radek = mysqli_fetch_array($data, MYSQLI_ASSOC)){
						echo "<tr>";
						echo "<td>".$radek['jmeno']."</td>";
						echo "<td>".$radek['predmet']."</td>";
						echo "<td>".$radek['prumer']."</td>";
						echo "</tr>";
					}
					
    
                    // vytvoření dotazu: Výpis celé tabulky
					$dotaz = "SELECT * FROM users WHERE prumer = (SELECT MIN(prumer) FROM users);";
					
					// mysqli_query odešle dotaz na DB server, vráti dvojrozměrné pole dat
					$data = mysqli_query($spojeni, $dotaz);
                    
				    echo "</table></p>";
    
					echo "<p>Předměty s nejlepším průměrem:</p>";
                    echo "<p><table class='users'>";
                    echo "<tr>
							<th>Jméno</th> <th>Předmět</th> <th>Známka</th> 
						  </tr>";
					
                    while ($radek = mysqli_fetch_array($data, MYSQLI_ASSOC)){
						echo "<tr>";
						echo "<td>".$radek['jmeno']."</td>";
						echo "<td>".$radek['predmet']."</td>";
						echo "<td>".$radek['prumer']."</td>";
						echo "</tr>";
					}
    
                    echo "</table></p>";
                    
                    echo "<p>Průměr známek:</p>";
    
                    // vytvoření dotazu: Výpis celé tabulky
					$dotaz = "SELECT AVG(prumer) FROM users";
					
                    //mysqli_query odešle dotaz na DB server, vráti dvojrozměrné pole dat
					$data = mysqli_query($spojeni, $dotaz);
                    $avg=mysqli_fetch_assoc($data);
                    echo(implode(",", $avg));  

					// ukončíme spojení s DB serverem
					mysqli_close($spojeni);
					
				?>
				
			</div>
			
		</div>
		
	</body>
</html>


















