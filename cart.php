<?php
// database connection code

$userID = $_SESSION['userID'];

    $con = mysqli_connect('localhost', 'root', '', 'papsie_burger');

    // database insert SQL code
    $sql = "SELECT * FROM cart_List 
            INNER JOIN product_list ON cart_List.product_id = product_list.product_id
            WHERE User_ID = $userID";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $Total = 0;
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $itemTotal = floatval($row["Price"]) * floatval($row["Price"]);
            $Total = $Total + $itemTotal;
            echo
            '<h1>Shopping Cart</h1>

            <div class="shopping-cart">
            
              <div class="column-labels">
                <label class="product-image">Image</label>
                <label class="product-details">Product</label>
                <label class="product-price">Price</label>
                <label class="product-quantity">Quantity</label>
                <label class="product-removal">Remove</label>
                <label class="product-line-price">Total</label>
              </div>
            
              
              <div class="product">
                <div class="product-image">'.
                  '<img src="Images/' . $row["Image"] . '" alt="' . $row["Image"] . '" />' .
                '</div>
              <div class="product-details">
                  <div class="product-title">'. $row["Product_Name"] .'</div>
                  <p class="product-description">.
                  $row["Description"] .</p>
              </div>
              <div class="product-price">'. $row["Price"] .'</div>
              <div class="product-quantity">'.$row["Quantity"].
                  '<input type="number" value="1" min="1">
              </div>
              <div class="product-removal">
                      <button class="remove-product">
                        Remove
                      </button>
              </div>
              <div class="product-line-price">'.$itemTotal.'</div>
              </div>
            </div>';
        }

        echo              
        '<div class="totals">
            <div class="totals-item totals-item-total">
                <label>Grand Total</label>
                <div class="totals-value" id="cart-total">90.57</div>
            </div>

            <form action="script.php" method="post">
                <button class="checkout">Checkout</button>
            </form>
        </div>';

    } else {
        echo        
        '<h1>Shopping Cart</h1>

        <div class="shopping-cart">
        
          <div class="column-labels">
            <label class="product-image">Image</label>
            <label class="product-details">Product</label>
            <label class="product-price">Price</label>
            <label class="product-quantity">Quantity</label>
            <label class="product-removal">Remove</label>
            <label class="product-line-price">Total</label>
          </div>
          <div class="product-title">Cart is Empty</div>';
    }
    $con->close();
?>
