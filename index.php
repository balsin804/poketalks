<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poketalks</title>
    <link href="style.css" rel="stylesheet">
    <?php
    function creatNavList(){
        $nav_list = scandir('./data');
        $i = 0;
        
        while($i < count($nav_list)){
            if (!($nav_list[$i] == '.' || $nav_list[$i] == '..')){
            echo "<li><a href=\"index.php?nav_name=$nav_list[$i]\">".$nav_list[$i]."</a></li>";
            }
            $i = $i + 1;
        }
    }
    ?>
</head>
<body>
    <div class="header"><h1><a href="index.php">Poketalks</a></h1></div>
    <div class="gridbox">
        <div class="nav">
            <ul>
                <?php
                creatNavList();
                ?>
            </ul>
        </div>
        <div class="contents">
            <?php
            if(isset($_GET['nav_name'])){
                echo "<h2>".file_get_contents("data/".$_GET['nav_name'])."</h2>";
            }else{
                echo "<h2>Poketalks은 자유롭게 포켓몬에 대해 이야기 하는 사이트 입니다.</h2>";
            }
            ?>
        </div>
    </div>
</body>
</html>