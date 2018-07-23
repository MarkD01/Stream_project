<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/cart_style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script type="text/javascript">

    $(document).ready(function(){

      $.ajax({
        type:'post',
        url:'store_items.php',
        data:{
          total_cart_items:"totalitems"
        },
        success:function(response) {
          document.getElementById("total_items").value=response;
        }
      });

    });

    function cart(id)
    {
	  var ele=document.getElementById(id);
	  var img_src=ele.getElementsByTagName("img")[0].src;
	  var name=document.getElementById(id+"_name").value;
	  var price=document.getElementById(id+"_price").value;
	
	  $.ajax({
        type:'post',
        url:'store_items.php',
        data:{
          item_src:img_src,
          item_name:name,
          item_price:price
        },
        success:function(response) {
          document.getElementById("total_items").value=response;
        }
      });
	
    }

    function show_cart()
    {
      $.ajax({
      type:'post',
      url:'store_items.php',
      data:{
        showcart:"cart"
      },
      success:function(response) {
        document.getElementById("mycart").innerHTML=response;
        $("#mycart").slideToggle();
      }
     });
    }
	
</script>
  
</head>

<body>

<p id="cart_button" onclick="show_cart();">
  <img src="./images/cart-icon.png">
  <input type="button" id="total_items" value="">
</p>

<div id="mycart">
</div>

<h1>Products</h1>

<div id="item_div">

  <div class="items" id="item1">
    <img src="./images/product1.jpg">
    <input type="button" value="Add To CART" onclick="cart('item1')">
    <p>Simple website #1</p>
    <p>Price - $95</p>
    <input type="hidden" id="item1_name" value="Simple website #1">
    <input type="hidden" id="item1_price" value="$95">
  </div>

  <div class="items" id="item2">
    <img src="./images/product2.jpg">
    <input type="button" value="Add To CART" onclick="cart('item2')">
    <p>Simple website #2</p>
    <p>Price - $105</p>
    <input type="hidden" id="item2_name" value="Simple website #2">
    <input type="hidden" id="item2_price" value="$105">
  </div>
  
  <div class="items" id="item3">
    <img src="./images/product3.jpg">
    <input type="button" value="Add To CART" onclick="cart('item3')">
    <p>Simple website #3</p>
    <p>Price - $120</p>
    <input type="hidden" id="item3_name" value="Simple website #3">
    <input type="hidden" id="item3_price" value="$120">
  </div>

  <div class="items" id="item4">
    <img src="./images/product4.jpg">
    <input type="button" value="Add To CART" onclick="cart('item4')">
    <p>Simple website #4</p>
    <p>Price - $140</p>
    <input type="hidden" id="item4_name" value="Simple website #4">
    <input type="hidden" id="item4_price" value="$140">
  </div>

  <div class="items" id="item5">
    <img src="./images/product5.jpg">
    <input type="button" value="Add To CART" onclick="cart('item5')">
    <p>Simple website #5</p>
    <p>Price - $130</p>
    <input type="hidden" id="item5_name" value="Simple website #5">
    <input type="hidden" id="item5_price" value="$130">
  </div>

  <div class="items" id="item6">
    <img src="./images/product6.jpg">
    <input type="button" value="Add To CART" onclick="cart('item6')">
    <p>Simple website #6</p>
    <p>Price - $90</p>
    <input type="hidden" id="item6_name" value="Simple website #6">
    <input type="hidden" id="item6_price" value="$90">
  </div>

</div>

</body>
</html>