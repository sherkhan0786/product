<?php
    $products = array(
        "Electronics" => array(
                            "Television" => array(
                                                array(
                                                    "id" => "PR001", 
                                                    "name" => "MAX-001",
                                                    "brand" => "Samsung",
                                                    "image" => "<img class='proImg' src='images/tv1.png'>"
                                                ),
                                                array(
                                                    "id" => "PR002", 
                                                    "name" => "BIG-301",
                                                    "brand" => "Bravia",
                                                    "image" => "<img class='proImg' src='images/tv2.png'>"
                                                ),
                                                array(
                                                    "id" => "PR003", 
                                                    "name" => "APL-02",
                                                    "brand" => "Apple",
                                                    "image" => "<img class='proImg' src='images/tv3.png'>"
                                                )
                                            ),
                            "Mobile" => array(
                                                array(
                                                    "id" => "PR004", 
                                                    "name" => "GT-1980",
                                                    "brand" => "Samsung",
                                                    "image" => "<img class='proImg' src='images/m1.png'>"
                                                ),
                                                array(
                                                    "id" => "PR005", 
                                                    "name" => "IG-5467",
                                                    "brand" => "Motorola",
                                                    "image" => "<img class='proImg' src='images/m2.png'>"
                                                ),
                                                array(
                                                    "id" => "PR006", 
                                                    "name" => "IP-8930",
                                                    "brand" => "Apple",
                                                    "image" => "<img class='proImg' src='images/m3.png'>"
                                                )
                                            )
                        ),
        "Jewelry" => array(
                            "Earrings" => array(
                                                array(
                                                    "id" => "PR007", 
                                                    "name" => "ER-001",
                                                    "brand" => "Chopard",
                                                    "image" => "<img class='proImg' src='images/er1.png'>"
                                                ),
                                                array(
                                                    "id" => "PR008", 
                                                    "name" => "ER-002",
                                                    "brand" => "Mikimoto",
                                                    "image" => "<img class='proImg' src='images/er2.png'>"
                                                ),
                                                array(
                                                    "id" => "PR009", 
                                                    "name" => "ER-003",
                                                    "brand" => "Bvlgari",
                                                    "image" => "<img class='proImg' src='images/er3.png'>"
                                                )
                                            ),
                            "Necklaces" => array(
                                                array(
                                                    "id" => "PR010", 
                                                    "name" => "NK-001",
                                                    "brand" => "Piaget",
                                                    "image" => "<img class='proImg' src='images/n1.png'>"
                                                ),
                                                array(
                                                    "id" => "PR011", 
                                                    "name" => "NK-002",
                                                    "brand" => "Graff",
                                                    "image" => "<img class='proImg' src='images/n2.png'>"
                                                ),
                                                array(
                                                    "id" => "PR012", 
                                                    "name" => "NK-003",
                                                    "brand" => "Tiffany",
                                                    "image" => "<img class='proImg' src='images/n3.png'>"
                                                )
                                            )				
                  		  )
					);
?>
<!-- <img src='images/football.png'> -->

	<?php require 'header.php'; ?>
	<div id="main">
		<div id="products" class="products">
            <?php 
                foreach($products as $proKey => $ProVal){
                    if($proKey == 'Electronics'){
                    echo  "<h1 style='color:red'>$proKey -</h1>";
                    foreach($ProVal as $catKey => $catVal){
                        if($catKey == 'Television'){
                        echo "<h4>$catKey</h4>";
                        foreach($catVal as $subKey => $subVal){
                            
                            echo "<div id='product-101' class='product'>"
                            .$subVal['image']."<h3 class='title'><a href='#'></a></h3>
                            <span>ID:".$subVal['id']."<br>Name:".$subVal['name'] ."<br>Brand:".$subVal['brand']."<br></span>
                            <a class='add-to-cart' href='#'>Add To Cart</a>
                        </div>";
                        }
                    }
                }   
            }
        }
    ?>
     </div>
	</div>
            


<div id="main">
		<div id="products" class="products">
            <?php 
                foreach($products as $proKey => $ProVal){
                    if($proKey == 'Electronics'){
                    // echo  "<h2>$proKey</h2>";
                    foreach($ProVal as $catKey => $catVal){
                        if($catKey == 'Mobile'){
                        echo "<h4>$catKey</h4>";
                        foreach($catVal as $subKey => $subVal){
                            
                            echo "<div id='product-101' class='product'>"
                            .$subVal['image']."<h3 class='title'><a href='#'></a></h3>
                            <span>ID:".$subVal['id']."<br>Name:".$subVal['name'] ."<br>Brand:".$subVal['brand']."<br></span>
                            <a class='add-to-cart' href='#'>Add To Cart</a>
                        </div>";
                        }
                    }
                }
            }
        }
       ?>
		</div>
    </div>
    



    

<div id="main">
	<div id="products" class="products">
        <?php 
                foreach($products as $proKey => $ProVal){
                    if($proKey == 'Jewelry'){
                    echo "<h1 style='color:red'>$proKey -</h1>";
                    foreach($ProVal as $catKey => $catVal){
                        if($catKey == 'Earrings'){
                        echo "<h4>$catKey</h4>";
                        foreach($catVal as $subKey => $subVal){
                            echo "<div id='product-101' class='product'>"
                            .$subVal['image']."<h3 class='title'><a href='#'></a></h3>
                            <span>ID:".$subVal['id']."<br>Name:".$subVal['name'] ."<br>Brand:".$subVal['brand']."<br></span>
                            <a class='add-to-cart' href='#'>Add To Cart</a>
                        </div>";
                        }
                    }
                }
            }
        }
     ?>
		</div>
    </div>
    


    <div id="main">
	<div id="products" class="products">
        <?php 
                foreach($products as $proKey => $ProVal){
                    if($proKey == 'Jewelry'){
                    // echo  "<h2>$proKey</h2>";
                    foreach($ProVal as $catKey => $catVal){
                        if($catKey == 'Necklaces'){
                        echo "<h4>$catKey</h4>";
                        foreach($catVal as $subKey => $subVal){
                            echo "<div id='product-101' class='product'>"
                            .$subVal['image']."<h3 class='title'><a href='#'></a></h3>
                            <span>ID:".$subVal['id']."<br>Name:".$subVal['name'] ."<br>Brand:".$subVal['brand']."<br></span>
                            <a class='add-to-cart' href='#'>Add To Cart</a>
                        </div>";
                        }
                    }
                }
            }
        }
     ?>
		</div>
	</div>
<?php require 'footer.php' ?>

