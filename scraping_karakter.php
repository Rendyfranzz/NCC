<?php
include 'config.php';
include 'simple_html_dom.php';

$karakter="https://www.gensh.in/characters";
$html =file_get_html($karakter);
$variable=$html->find('div[class=row character-list]',0);

for($i=0; $i < 42; $i++)
{

        $link=$variable->children($i)->children(0)->children(0)->children(0)->children(0)->src;
        $name=$variable->children($i)->children(0)->children(1)->children(0)->plaintext;
        $type=$variable->children($i)->children(0)->children(1)->children(1)->plaintext;
        mysqli_query($db_connection,"INSERT INTO karakter (link_img,nama_karakter,tipe_karakter) VALUES ('https://www.gensh.in$link','$name','$type')");
        echo $name;
        echo $type;
        echo "https://www.gensh.in$link";
        echo "<br/>";
    
}
  
?>
