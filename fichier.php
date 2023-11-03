<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fichier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>
    <?php
    // $var="bonjour le monde";
    // $fp=fopen("essai.txt","a");
    // fputs($fp,$var);
    // fclose($fp);
  
    // $lignes=file("liens.txt");
    // echo $lignes;
    // foreach($lignes as $ligne){
    //     echo $ligne;
    // };
    // print_r(file("liens.txt"));
    // print_r(explode(",",$liste));

    $liste=file_get_contents("customers.csv");
   
    $toutLigne=explode("\n",$liste);
    echo "<table class='table table-striped table-dark' ><section><thead><tr>
    <th>Prénom</th>
    <th>Nom de famille</th>
    <th>Email</th>
    <th>Téléphone</th>
    <th>ville</th>
    <th>État</th></tr></thead><tbody>";
    foreach ($toutLigne as $ligne){
        $toutItem=explode(",",$ligne);
echo "<tr>";
foreach($toutItem as $item){ 
echo "<td>".$item."</td>";
};
echo"</tr>";
    };

    echo "</tbody></section></table>";

        


        
    ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


    <script src="customers.csv"></script>
        <script src="essai.txt" ><script>
       <script src="liens.txt" ><script>
</body>
</html>