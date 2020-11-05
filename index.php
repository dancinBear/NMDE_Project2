<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Rosie's Recipes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="home.css" />
  </head>
  <body>

    <!--
    <div class='navMenu' id='navMenuId'>
        <a href='' class='main_links'>Home</a>
        <a href='' class='main_links'>All Recipes</a>
        <a href='' class='main_links'>About Rosie</a>
        <a class='icon' href='javascript:void(0);' onclick='openMenu()'>&#9776;</a>
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
    </div>
    -->
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
            <a href="#home" class="active">Home</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
          </div> 

    <div class="grid-main">
         
        <div class="welcome">
            <div class="grid-bio">
                    <div class="bioWrapper">
                        <div class="bio">
                            <h1> Welcome! </h1>
                            <p>
                                This site is dedicated to Rosalie Cooper, my great-grandmother. She's one of the most incredible people 
                                I've ever had the pleasure of knowing, and her cooking shaped my childhood. I hope that by sharing her 
                                recipes here, I can keep my family's culinary legacy around for the next generation.
                            </p>
                            <h2> -Dancin Feldman </h2>
                        </div>
                    </div>
                    <div class="portraitWrapper">
                        <img class="portrait" src="images/image.png" style="max-width:300px; border-radius: 14px;"></img>
                    </div>
            </div>
        </div>
        <div class="recipeDay">
            <div class="grid-recipeDay">
                <div class="rDBIOWrapper">
                    <div class="recipeDayBio">
                        <h1>Recipe of the Day</h1>
						<?php
						include "database.php";
						$recipe = $all[array_rand($all)];
                        echo '<div class="howManyMin" style="float:left">';
						echo "<p>".$recipe["name"]." - 45 Minutes (cook time needs proper implementation)</p></div>";
						echo "<p>".$recipe["intro"][0]."</p>";
                        echo '<button><a class="nounderline" style="color:white !important" href="recipe.php?recipe='.rawurlencode($recipe["name"]).'">View Full Recipe</a></button>';
						
						echo '</div></div>';
						echo '<div class="rDIMGWrapper">
								<img class="recipeDayImage" src="'.$recipe["img"].'" alt="'.$recipe["name"].'" style="height: auto; width: 85%; border-radius: 14px;"></img>
							</div>';
				?>
            </div>
        </div>
        <div class="moreRecipes">

                <h1>More Recipes</h1>
                <div class="grid-moreRecipe">
                    <div class="recipe1">
                        <div class="moreRecipeIcons1">
                            <a href="recipe.php?recipe=Baked%20Mac%20%26%20Cheese">
                                <img src="images/macCheese.png" style="max-width:100px; border-radius: 14px;"></img>
                            </a>
                            <p>SAVORY ENTRE</p>
                            <h4>Baked Mac & Cheese</h4>
                        </div>
                    </div>
                    <div class="recipe2">
                        <div class="moreRecipeIcons1">
                            <a href="recipe.php?recipe=Peach%20Cobbler">
                                <img src="images/peachCobbler.png" style="max-width:100px; border-radius: 14px;"></img>
                            </a>
                            <p>SWEET PASTRY</p>
                            <h4>Peach Cobbler</h4>
                        </div>
                    </div>
                    <div class="recipe3">
                        <div class="moreRecipeIcons1">
                            <a href="recipe.php?recipe=Grandma%20Ann%27s%20Hamentashen">
                                <img src="images/hamentashen.png" style="max-width:100px; border-radius: 14px;"></img>
                            </a>
                            <p>SWEET PASTRY</p>
                            <h4>Grandma Ann's Hamentashen</h4>
                        </div>
                    </div>
                </div>
                <div class="marquee">
                    <div class="marquee--inner">
                        <span>
                            <div class="item">
                                <div class="moreRecipeIcons">
                                    <a href="recipe.php?recipe=Baked%20Mac%20%26%20Cheese">
                                        <img src="images/macCheese.png" style="max-width:230px; border-radius: 24px;"></img>
                                    </a>
                                    <p>SAVORY ENTRE</p>
                                    <h4>Baked Mac & Cheese</h4>
                                </div>
                            </div>
                        </span>
                        <span>
                            <div class="item">
                                <div class="moreRecipeIcons">
                                    <a href="recipe.php?recipe=Peach%20Cobbler">
                                        <img src="images/peachCobbler.png" style="max-width:230px; border-radius: 24px;"></img>
                                    </a>
                                    <p>SWEET PASTRY</p>
                                    <h4>Peach Cobbler</h4>
                                </div>
                            </div>
                        </span>
                        <span>
                            <div class="item">
                                <div class="moreRecipeIcons">
                                    <a href="recipe.php?recipe=Grandma%20Ann%27s%20Hamentashen">
                                        <img src="images/hamentashen.png" style="max-width:230px; border-radius: 24px;"></img>
                                    </a>
                                    <p>SWEET PASTRY</p>
                                    <h4>Grandma Ann's Hamentashen</h4>
                                </div>
                            </div>
                        </span>
                        <span>
                            <div class="item">
                                <div class="moreRecipeIcons">
                                    <a href="recipe.php?recipe=Baked%20Mac%20%26%20Cheese">
                                        <img src="images/macCheese.png" style="max-width:230px; border-radius: 24px;"></img>
                                    </a>
                                    <p>SAVORY ENTRE</p>
                                    <h4>Baked Mac & Cheese</h4>
                                </div>
                            </div>
                        </span>
                        <span>
                            <div class="item">
                                <div class="moreRecipeIcons">
                                    <a href="recipe.php?recipe=Peach%20Cobbler">
                                        <img src="images/peachCobbler.png" style="max-width:230px; border-radius: 24px;"></img>
                                    </a>
                                    <p>SWEET PASTRY</p>
                                    <h4>Peach Cobbler</h4>
                                </div>
                            </div>
                        </span>
                        <span>
                            <div class="item">
                                <div class="moreRecipeIcons">
                                    <a href="recipe.php?recipe=Grandma%20Ann%27s%20Hamentashen">
                                        <img src="images/hamentashen.png" style="max-width:230px; border-radius: 24px;"></img>
                                    </a>
                                    <p>SWEET PASTRY</p>
                                    <h4>Grandma Ann's Hamentashen</h4>
                                </div>
                            </div>
                        </span>
                        <span>
                            <div class="item">
                                <div class="moreRecipeIcons">
                                    <a href="recipe.php?recipe=Baked%20Mac%20%26%20Cheese">
                                        <img src="images/macCheese.png" style="max-width:230px; border-radius: 24px;"></img>
                                    </a>
                                    <p>SAVORY ENTRE</p>
                                    <h4>Baked Mac & Cheese</h4>
                                </div>
                            </div>
                        </span>
                        <span>
                            <div class="item">
                                <div class="moreRecipeIcons">
                                    <a href="recipe.php?recipe=Peach%20Cobbler">
                                        <img src="images/peachCobbler.png" style="max-width:230px; border-radius: 24px;"></img>
                                    </a>
                                    <p>SWEET PASTRY</p>
                                    <h4>Peach Cobbler</h4>
                                </div>
                            </div>
                        </span>
                        <span>
                            <div class="item">
                                <div class="moreRecipeIcons">
                                    <a href="recipe.php?recipe=Grandma%20Ann%27s%20Hamentashen">
                                        <img src="images/hamentashen.png" style="max-width:230px; border-radius: 24px;"></img>
                                    </a>
                                    <p>SWEET PASTRY</p>
                                    <h4>Grandma Ann's Hamentashen</h4>
                                </div>
                            </div>
                        </span>
                    
                    </div>
                </div>
                <button class="viewAllRecipesBTN">View All Recipes</button>

        </div>
        <div class="searchBy">
            <h1>Search Recipes By Meal</h1>
            <ul class="navMenu">
                <li><a href="/" class="nounderline"><img src="images/breakfastIcon.png" style="width:10vw; max-width:100px;"><p>Breakfast</p></a></li>
                <li><a href="/" class="nounderline"><img src="images/lunchIcon.png" style="width:10vw; max-width:100px;"><p>Lunch</p></a></li>
                <li><a href="/" class="nounderline"><img src="images/dinnerIcon.png" style="width:10vw; max-width:100px;"><p>Dinner</p></a></li>
                <li><a href="/" class="nounderline"><img src="images/dessertIcon.png" style="width:10vw; max-width:100px;"><p>Dessert</p></a></li>
                <li><a href="/" class="nounderline"><img src="images/snackIcon.png" style="width:10vw; max-width:100px;"><p>Snack</p></a></li>
              </ul>
        </div>
        <div class="footer">
            <p>© 2020</p>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        function openMenu() {  
            var navMain = document.getElementById('navMenuId');  
            if (navMain.className=== 'navMenu') {    
                navMain.className += ' mobileView';  
            } 
            else {    
                navMain.className = 'navMenu';  
            }
        }



        // duration of scroll animation
        var scrollDuration = 300;
        // paddles
        var leftPaddle = document.getElementsByClassName('left-paddle');
        var rightPaddle = document.getElementsByClassName('right-paddle');
        // get items dimensions
        var itemsLength = $('.item').length;
        var itemSize = $('.item').outerWidth(true);
        // get some relevant size for the paddle triggering point
        var paddleMargin = 20;

        // get wrapper width
        var getMenuWrapperSize = function() {
            return $('.menu-wrapper').outerWidth();
        }
        var menuWrapperSize = getMenuWrapperSize();
        // the wrapper is responsive
        $(window).on('resize', function() {
            menuWrapperSize = getMenuWrapperSize();
        });
        // size of the visible part of the menu is equal as the wrapper size 
        var menuVisibleSize = menuWrapperSize;

        // get total width of all menu items
        var getMenuSize = function() {
            return itemsLength * itemSize;
        };
        var menuSize = getMenuSize();
        // get how much of menu is invisible
        var menuInvisibleSize = menuSize - menuWrapperSize;

        // get how much have we scrolled to the left
        var getMenuPosition = function() {
            return $('.menu').scrollLeft();
        };

        // finally, what happens when we are actually scrolling the menu
        $('.menu').on('scroll', function() {

            // get how much of menu is invisible
            menuInvisibleSize = menuSize - menuWrapperSize;
            // get how much have we scrolled so far
            var menuPosition = getMenuPosition();

            var menuEndOffset = menuInvisibleSize - paddleMargin;

            // show & hide the paddles 
            // depending on scroll position
            if (menuPosition <= paddleMargin) {
                $(leftPaddle).addClass('hidden');
                $(rightPaddle).removeClass('hidden');
            } else if (menuPosition < menuEndOffset) {
                // show both paddles in the middle
                $(leftPaddle).removeClass('hidden');
                $(rightPaddle).removeClass('hidden');
            } else if (menuPosition >= menuEndOffset) {
                $(leftPaddle).removeClass('hidden');
                $(rightPaddle).addClass('hidden');
        }

            // print important values
            $('#print-wrapper-size span').text(menuWrapperSize);
            $('#print-menu-size span').text(menuSize);
            $('#print-menu-invisible-size span').text(menuInvisibleSize);
            $('#print-menu-position span').text(menuPosition);

        });

        // scroll to left
        $(rightPaddle).on('click', function() {
            $('.menu').animate( { scrollLeft: menuInvisibleSize}, scrollDuration);
        });

        // scroll to right
        $(leftPaddle).on('click', function() {
            $('.menu').animate( { scrollLeft: '0' }, scrollDuration);

        });


        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
        } 
    </script>
  </body>
</html>