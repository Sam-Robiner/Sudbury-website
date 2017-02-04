
<?php 
echo "<img src='banner.jpg' alt='Sudbury banner image' style='width:80%;height:200px;'>";
echo "<h1>Visit Sudbury, MA!</h1>";
echo "<h2>...&ldquo;the Paris of the central suburban Boston MetroWest area!&rdquo;</h2>";
echo "<nav role='navigation' class='navbar'>";
echo "<ul class='navbar'>";

$menu_items = array(
            "Home" => "index.php",
            "Attractions" => "attractions.php",
            "Restaurants" => "restaurants.php",
            "History" => "history.php",
            );

foreach($menu_items as $title => $url) {
    echo "<li class='navbar'><a href='$url' title='$title' class='navbar' id='$title'>$title</a></li>";
}

echo "</ul>";
echo "</nav>";

?>
