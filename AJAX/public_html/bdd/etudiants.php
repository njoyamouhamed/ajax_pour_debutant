<?php
$connexion_bdd=mysqli_connect("localhost","super","123456789","ecole");
    if($connexion_bdd==true){
        //echo "Connexion reussi";
        //Faire une requête a la bdd
        $sql="SELECT * FROM classe";
        
        //recuperer le resultat de la requête
        $resultat=mysqli_query($connexion_bdd,$sql);
        
        //afficher les resultat de ma requête
            if(mysqli_num_rows($resultat)>0){
                echo "<table class='table table-striped'>
                    <tr>
                        <th>MATRICULES</th>
                        <th>NOMS</th>
                        <th>PRENOMS</th>
                        <th>AGES</th>
                        <th>NIVEAUX</th>
                        <th>TELEPHONES</th>
                    </tr>
                    ";
                while($row=mysqli_fetch_assoc($resultat)){
                    echo "
                        <tr>
                            <td>".$row["matricule"]."</td>
                            <td>".$row["nom"]."</td>
                            <td>".$row["prenom"]."</td>
                            <td>".$row["age"]."</td>
                            <td>".$row["niveau"]."</td>
                            <td>".$row["telephone"]."</td>

                        </tr>
                        ";
                } echo "</table>";
            }
    }
    else{
        echo "Connexion echouée".mysqli_error($connexion_bdd);
    }


?>
