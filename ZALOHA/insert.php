<?php
                       //$spojeni = mysqli_connect("127.0.0.1", "root", "", "web");
                    $spojeni = mysqli_connect("sql.endora.cz:3310", "amax456","Neumimto123","pisweb");
					       if (!$spojeni) die("Nepodařilo se připojit k DB serveru: " . mysqli_connect_error());
                        
                        
                        if (isset($_POST['submit'])){
                
                       
                        $jmeno = $_POST['fjmeno'];
                        $predmet = $_POST['fpredmet'];
                        $prumer = $_POST['fprumer'];
                        $datum = $_POST['fdatum'];
                            
                        if ($prumer > 5){
                            $prumer=5;
                        }
                            
                        $insert = "INSERT INTO users (jmeno, predmet, prumer, datum) VALUES ('$jmeno', '$predmet', '$prumer', '$datum')";
                        
                    $rs = mysqli_query($spojeni, $insert);

if($rs)
{   
    
	echo "Záznam vložen úspěšně.";
}    
                        }
                        ?>
                       <br>
                                <a href="form.php">Zpět</a>
                <?php
                mysqli_close($spojeni);
					
				?>