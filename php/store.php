<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script> alert ('Session not available. Please login');</script>";
    echo "<script> window.location.replace('login.php')</script";
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>GeraiNo.7</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="../style/style.css" />
    <script src="../script/store.js" async></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/1dd357b823.js" crossorigin="anonymous"></script>



</head>

<body>



    <header class="main-header">
        <nav class="main-nav nav">
            <ul>
                <li><a href="#Product">PRODUCT</a></li>
                <li><a href="#Cart">CART</a></li>
                <li><a href="login.php">LOGOUT</a></li>
            </ul>
        </nav>

        <h1 class="band-name band-name-large" id="Home">Kedai Roti Canai Pak Jabar</h1>

    </header>

   

    <section class="container content-section"><br>

    <i class="w3-center fas fa-search"></i>
        <input type="text" name="" id="search-item" placeholder="Search Product"onkeyup="search()">
        <h2 class="section-header" id="Product">Product</h2>
        <div class=" shop-items ">
            <div class="shop-item ">
                <span class="shop-item-title ">Bihun Goreng</span>
                <img class="shop-item-image " src="../Images/bihun-goreng.png ">
                <div class="shop-item-details ">
                    <span class="shop-item-price ">RM 4.00</span>
                    <button class="btn btn-primary shop-item-button " type="button ">ADD TO CART</button>
                </div>

                <div class="popup" id="p-1">
                    <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="togglePopup()">&times;</div>
                        <h1>Bihun Goreng</h1>
                        <img class="responsive" src="../Images/bihun-goreng.png "><br><br>
                        <span class="fa fa-star checked" ></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>  
                        <p>Price : RM 4.00</p>
                        <p>Description : Rice vermicelli, or bihun, is a type of thin rice noodle.</p>
                       
                    </div>
                    <button class="detail" onclick="togglePopup()">Show Details</button>
                </div>
            </div>

            <div class="shop-item ">
                <span class="shop-item-title ">Nasi Goreng</span>
                <img class="shop-item-image " src="../Images/nasi_goreng.jpg ">
                <div class="shop-item-details ">
                    <span class="shop-item-price ">RM 4.00</span>
                    <button class="btn btn-primary shop-item-button " type="button ">ADD TO CART</button>
                </div>
                <div class="popup" id="p-2">
                    <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="openForm()">&times;</div>
                        <h1>Nasi Goreng</h1>
                        <img class="responsive" src="../Images/nasi_goreng.jpg"><br><br>
                        <span class="fa fa-star checked" ></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>  
                        <p>Price : RM 4.00</p>
                           
                        <p>Description : Nasi goreng usually cooked with pieces of meat and vegetables.</p>
                    </div>
                </div>
                <button class="detail" onclick="openForm()">Show Details</button>
            </div>


            <div class="shop-item ">
                <span class="shop-item-title ">Mee Goreng</span>
                <img class="shop-item-image " src="../Images/mee_goreng.jpg ">
                <div class="shop-item-details ">
                    <span class="shop-item-price ">RM 4.00</span>
                    <button class="btn btn-primary shop-item-button " type="button ">ADD TO CART</button>
                </div>
                <div class="popup" id="p-3">
                    <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="popup1()">&times;</div>
                        <h1>Mee Goreng</h1>
                        <img class="responsive" src="../Images/mee_goreng.jpg"><br><br>
                        <span class="fa fa-star checked" ></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>  
                        <p>Price : RM 4.00</p>
                 
                        <p>Description : Stir-frying the noodles with vegetables, eggs, tofu and meat.</p>
                    </div>
                </div>
                <button class="detail" onclick="popup1()">Show Details</button>
            </div>


            <div class="shop-item ">
                <span class="shop-item-title ">Koey Teow Goreng</span>
                <img class="shop-item-image " src="../Images/koey_teow_goreng.jpg ">
                <div class="shop-item-details ">
                    <span class="shop-item-price ">RM 4.00</span>
                    <button class="btn btn-primary shop-item-button " type="button ">ADD TO CART</button>
                </div>
                <div class="popup" id="p-4">
                    <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="popup2()">&times;</div>
                        <h1>Koey Teow Goreng</h1>
                        <img class="responsive" src="../Images/koey_teow_goreng.jpg"><br><br>
                        <span class="fa fa-star checked" ></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>  
                        <p>Price : RM 4.00</p>
                      <p>Description : Kway teow refers to flat rice noodles. It is made from flat rice noodles </p>
                    </div>
                </div>
                <button class="detail" onclick="popup2()">Show Details</button>
            </div>


            <div class="shop-item ">
                <span class="shop-item-title ">Roti Canai</span>
                <img class="shop-item-image " src="../Images/roti_canai.jpg">
                <div class="shop-item-details ">
                    <span class="shop-item-price ">RM 1.00</span>
                    <button class="btn btn-primary shop-item-button " type="button ">ADD TO CART</button>
                </div>
                <div class="popup" id="p-5">
                    <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="popup3()">&times;</div>
                        <h1>Roti Canai</h1>
                        <img class="responsive" src="../Images/roti_canai.jpg"><br><br>
                        <span class="fa fa-star checked" ></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>  
                        <p>Price : RM 1.00</p>
                        <p>Description : Roti canai is a traditional Malaysian pan-fried flatbread made with flour, 
                            water, eggs, and fat.</p>
                    </div>
                </div>
                <button class="detail" onclick="popup3()">Show Details</button>
            </div>


            <div class="shop-item ">
                <span class="shop-item-title ">Ais Kacang</span>
                <img class="shop-item-image " src="../Images/ais_kacang.jpg ">
                <div class="shop-item-details ">
                    <span class="shop-item-price ">RM 2.00</span>
                    <button class="btn btn-primary shop-item-button " type="button ">ADD TO CART</button>
                </div>
                <div class="popup" id="p-6">
                    <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="popup4()">&times;</div>
                        <h1>Ais Kacang</h1>
                        <img class="responsive" src="../Images/ais_kacang.jpg"><br><br>
                        <span class="fa fa-star checked" ></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>  
                        <p>Price : RM 2.00</p>
                        <p>Description : Ais kacang was originally made of only shaved ice and red beans.</p>
                       

                    </div>
                </div>
                <button class="detail" onclick="popup4()">Show Details</button>
            </div>
        </div>
      
    </section>

<br>
<br>
<br>
<br>
<br>

    <section class="container content-section ">
        <h2 class="section-header " id="Cart">CART</h2>
        <div class="cart-row ">
            <span class="cart-item cart-header cart-column ">ITEM</span>
            <span class="cart-price cart-header cart-column ">PRICE</span>
            <span class="cart-quantity cart-header cart-column ">QUANTITY</span>
        </div>
        <div class="cart-items ">
        </div>
        <div class="cart-total ">
            <strong class="cart-total-title ">Total</strong>
            <span class="cart-total-price ">$0</span>
        </div>
        <button class="btn btn-primary btn-purchase " type="button ">PURCHASE</button> 
        
    </section>



   

    <div class="popup" id="p-7">
                    <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="popup5()">&times;</div>
                        
    <section class="container content-section ">
        <h2 class="section-header " id="History">PURCHASE HISTORY</h2>
        <div style="overflow-x:auto;">
  
     
        <table>
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Nasi Goreng</td>
    <td>RM 4.00</td>
    <td>2</td>
    <td>RM 8.00</td>
    <td class="paid">Paid</td>
  </tr>
</table>

</div>
        
       
    </section>
     </div>
    </div>
    <button class="purchase btn-history btn btn-primary" onclick="popup5()">PURCHASE HISTORY</button>
                <br>
                <br>
              
                
            

     <!-- Footer -->
   <footer class="w3-center w3-dark-grey w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#Home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <p>Copyright: <br> GeraiNo.7@gmail.com</p>
    </footer>

</body>

</html>