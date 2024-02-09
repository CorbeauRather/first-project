<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $pdo = new PDO("mysql:host=localhost;dbname=corbeaurather", 'CorbeauRather', 'Alexis');
        $rerequest = $pdo->query("SELECT * FROM `formulaire`");
        $resultats = $rerequest->fetchAll();

    
        
        
    ?>
<div class="table-wrapper">
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Like</th>
    <th>Message</th>
  </tr>
    <?php
    foreach ($resultats as $element) {
        echo "<tr>";
        echo "<td>".$element['id']." </td>";
        echo "<td>".$element['name']." </td>";
        echo "<td>".$element['email']." </td>";
        if ($element['Liked']== 1){
            echo "<td> Vrai </td>";
        }
        else{
            echo "<td> Faux</td>";
        }
        echo "<td>".$element['Message']." </td>";
        echo "</tr>";
    }
    ?>
</table>
</div>   
</body>
</html>