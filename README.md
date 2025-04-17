<?
session_start(); 
require_once 'connect.php'; ?>
<!DOCTYPE html>

<html>
<head>

    <meta  content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTINENTAL</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="glav.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body class="body">

  <? include 'headerr.php'; ?>

  <div id="in" >

        <?
        $query = "SELECT * FROM category WHERE id=10";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        while ($row = mysqli_fetch_assoc($result)) {?>
          <a href="brand.php?id=<?=$row['id']?>">
            <img src="<? echo $row['picture']; ?>" height="300" width="230px">
          </a>
        <?}?>

        <div>
          <h2 class="h2">Комплексная диагностика ходовой части</h2>
             <ul class="ul1">
                         <?
                            $query = "SELECT * FROM product WHERE id"; 
                            $result = mysqli_query($link, $query);
                            $product = mysqli_fetch_assoc($result);
                            while ($product != null){?>
                                <li><?=$product['description']?></li>
                            <?
                            $product = mysqli_fetch_assoc($result);
                            }
                        ?>
                  </ul>
        </div>    
    </div>

 <? include 'footer.php'; ?>

</body>

</html>
