<?php


// Safe fallbacks so no warnings
$productName      = $_SESSION['PRODUCT_NAME']        ?? 'Product';
$unitPrice        = $_SESSION['UNIT_PRICE']          ?? 0;
$productDesc      = $_SESSION['PRODUCT_DESCRIPTION'] ?? 'Product description coming soon.';
$productImageFile = $_SESSION['PRODUCT_IMAGE']       ?? 'bread-2649971_1280.jpg';
$productNumber    = $_SESSION['PRODUCT_NUMBER']      ?? 0;
?>

<div class="container my-2 product-details-page">

  <div class="row">

    <!-- PRODUCT IMAGE -->
    <div class="productImage col-md-7 col-sm-12 mb-3">
      <img
        class="img-fluid w-100 rounded shadow"
        src="images/aboutUs/<?php echo htmlspecialchars($productImageFile); ?>"
        alt="<?php echo htmlspecialchars($productName); ?>"
      >
    </div>

    <!-- PRODUCT DETAILS + FORM -->
    <div class="productDetails col-md-5 col-sm-12 mt-3">
      <form action="Processes/processShoppingCart.php" name="orderForm" method="post">

        <h3 class="itemName text-center">
          <?php echo htmlspecialchars($productName); ?>
        </h3>

        <br>

        <h3 class="any price text-center">
          $<?php echo number_format((float)$unitPrice, 2, '.', ''); ?>
        </h3>

        <!-- hidden unit price -->
        <div class="form-group row">
          <input class="d-none" type="text" name="unitPrice" id="unitPrice"
                 value="<?php echo htmlspecialchars($unitPrice); ?>">
        </div>

        <!-- quantity -->
        <div class="form-group row mt-3">
          <label for="tbQuantity">Quantity:</label>
          <div class="col-12">
            <input class="form-control" type="number" min="1" value="1"
                   id="tbQuantity" name="tbQuantity" required>
          </div>
        </div>

        <!-- pick-up date -->
        <div class="form-group my-4">
          <label for="tbPickUpDate">Pick-up date:</label>
          <div class="col-12">
            <input class="form-control" type="date"
                   id="tbPickUpDate" name="tbPickUpDate" required>
          </div>
        </div>

        <!-- pick-up time -->
        <div class="form-group my-4">
          <label for="tbPickUpTime">Pick-up time:</label>
          <div class="col-12">
            <input class="form-control" type="time"
                   id="tbPickUpTime" name="tbPickUpTime"
                   min="07:00" max="16:00" value="07:00" required>
          </div>
        </div>

        <!-- hidden product number -->
        <input class="d-none" type="text" name="productNumber"
               value="<?php echo htmlspecialchars($productNumber); ?>">

        <!-- submit -->
        <input
          type="submit"
          class="btn btn-primary col-12 mt-2"
          role="button"
          value="ADD TO SHOPPING CART"
          name="SHOPPINGCART"
          onclick="validateOrder();"
        >
      </form>
    </div>
  </div>

  <!-- DESCRIPTION -->
  <div class="row my-5">
    <div class="productDescription col-12">
      <h4>Description</h4>
      <p><?php echo nl2br(htmlspecialchars($productDesc)); ?></p>
    </div>
  </div>
</div>
