<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Rosie's Recipes</title>
    <link rel="stylesheet" href="home.css" type="text/css">
    <script src="src/loader.js" type="module"></script>
</head>
    <div class="topnav" id="myTopnav">
            <div class="navLogo">
                <a href="#home"><img src="images/roiseLogo.png" style="width: 180px;"></a>
            </div>
            <a href="#">
                    <div id="cover">
                        <form method="get" action="">
                            <div class="tb">
                                <div class="td"><input type="text" placeholder="Search" required></div>
                                <div class="td" id="s-cover">
                                    <button class="searchbutton" type="submit">
                                    <div id="s-circle"></div>
                                    <span></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </a>
            <a href="about.html">About Rosie</a>
            <div class="dropdown">
                <button class="dropbtn">All Recipes
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <a href="#">Breakfast</a>
                <a href="#">Lunch</a>
                <a href="#">Dinner</a>
                <a href="#">Salads</a>
                <a href="#">Sides</a>
                <a href="#">Sweets & Cakes</a>
                </div>
            </div>
            <a href="index.php" class="active">Home</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
<body>    
    
    <section id="recipeWrapper">
	<?php
		include "database.php";
		$name;
		$recipe = "Nothing Here!";
		if(array_key_exists('recipe', $_GET)){
			$name = $_GET['recipe'];
			for($i = 0; $i < count($all); $i++) {
				if ($all[$i]['name'] == $name) {
					$recipe = $all[$i];
					break;
				}
			}
		}
		
		function ingredientParse($chunk) {
			for($i = 0; $i < count($chunk); $i++) {
				echo "<label class='container'>";
				echo "<p>".$chunk[$i]."</p>";
				echo "<input type='checkbox'>";
				echo "<span class='checkmark'> </span>";
				echo "</label>";
			}
		}
			
			if ($recipe != "Nothing here!") {
				echo "<div class='grid-intro'><div class='mainTitles'><h1>".$recipe["name"]."</h1>";
				echo "<p>Home/Recipes/Sweet & Cakes (breadcrumb trail isn't fully implemented - stay tuned!)</p>";
				deChunk($recipe["intro"], "p");
				echo "<button>Read More</button></div>";
				echo "<div class='foodImg'><img class='' src='".$recipe["img"]."' style='height: auto; width: 85%; float:right; border-radius: 14px; margin-top: 100px; margin-right: 20px;' alt='".$recipe["name"]."'></div></div>";
				echo "<div class='grid-guide'><div class='shoppingList'><div class='lists'><h2>What You'll Need:</h2>";
				ingredientParse($recipe["ingredients"]);
				echo "</div></div>";
				echo "<div class='directions'><div class='instructions'><h2>Directions:</h2><ol>";
				deChunk($recipe["procedure"], "li");
				echo "</ol></div></div></div>";
			} else {
				echo "<h1>".$recipe."</h1>";
			}
		?>
    </section>
	<div class="footer" style="margin-top:-15px">
        <p>© 2020</p>
    </div>
</body>
</html>