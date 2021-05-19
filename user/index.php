<html>

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITRE -->
    <title>Hello</title>

    <!-- LIENS -->
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">

    <script src="" async defer></script>

</head>

<body>

    <form method="POST">

        <label>
            <u>
                <b>
                    Choisir votre langue:
                </b>
            </u>
        </label>

        <br>

        <!-- LISTE DEROULANTE  -->
        <?php
        require('connexion_bdd.php'); //connexion au serveur de base de données
        $sql = "select* From langue";
        $result = $connect_bdd->query($sql);


        if ($result->num_rows > 0) { //si result affiche un nombre de ligne suppérieur à 0
            echo "<select name='langues' >";
                foreach ($result as $k => $v) {
                    echo " <option value= '". $v['translate']."'>";
                    echo $v['name'];
                    echo " </option>";
                }
            echo "</select>";
        } 

        // else {
        //     echo "pas de result";
        // }

        $connect_bdd->close();
        ?>

        <!-- fin
                 LISTE DEROULANTE  -->
        <input type='text' name='prenom' placeholder='Prénom'></input>
        <input type='submit' name='btnValider' value="Valider"></input>

        <br>

        <?php
        if (isset($_POST['btnValider'])) {
            $prenom = $_POST['prenom'];
            $langue = $_POST['langues'];
            echo $langue . "  ";
            echo $prenom;
        }
        ?>

    </form>

</body>

</html>