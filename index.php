<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Traductor a morse</title>
</head>

<body>

<form class="container form" action="#" method="post">

    <h1 class="mt-3">Traductor de texto a codigo Morse</h1>

    <select name="tipo" id="" required>
        <option value="">ELIGE UNA OPCION</option>
        <option value="morse">Morse a texto</option>
        <option value="txt">Texto a morse</option>
    </select>

    <div class="form-group">

         <input class="form-control mt-4" type="text" name="txt" placeholder="Texto a traducir" required>
    </div>
    <div class="form form-group mb-4">
        <input type="submit" class="btn btn-primary mt-3" name="btn" value="Traducir">
    </div>
    
    <?php
    include_once 'includes/traductor.php';

    $obj = new traductor(); 

    if (isset($_POST['btn'])) {
        
        if (!strcmp($_POST['tipo'],"morse")) {
            $obj->morseTxt($_POST["txt"]);

        }else if(!strcmp($_POST['tipo'],"txt")) {
            $obj->txtMorse($_POST["txt"]); 
            
        }else {
            echo "<div class='alert alert-danger mt-2' role='alert'>
            Escoge una opcion
           </div> ";
        }

       /*  $obj->traducto($_POST["txt"],$_POST["tipo"]); */
                
    }
    
    ?>
     
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>