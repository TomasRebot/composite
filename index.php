<?php

include('classes/SimpleElement.php');
include('classes/CompositeElement.php');

    $element1 = new SimpleElement('simple item1','nav-link');
    $element2 = new SimpleElement('simple item2','nav-link');
    $element3 = new SimpleElement('simple item3','nav-link');
    $element4 = new SimpleElement('simple item4','nav-link');

    $compositeElement1 = new CompositeElement('complex menu 1 ','nav-link','dropright','complexMenu1');
    $compositeElement2 = new CompositeElement('complex menu 2 ','nav-link','dropright','complexMenu2');

    $compositeElement1->addElement($element1);
    $compositeElement1->addElement($element2);
    $compositeElement2->addElement($element3);
    $compositeElement2->addElement($element4);

    $compositeElement1->addElement($compositeElement2);





?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav>
    <ul class="nav nav-tabs">
        <li class="nav-item ">
            <?php  echo $element1->render();?>
        </li>
        <li class="nav-item ">
            <?php  echo $element2->render();?>
        </li>
        <li class="nav-item ">
            <?php  echo $element2->render();?>
        </li>
        <li class="nav-item ">
            <?php  echo $compositeElement1->render();?>
        </li>

   </ul>
</nav>

</body>
</html>
