
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
 <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 100vw;
            margin: 40px auto;
            
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        input[type="number"] {
            width: 60px;
        }

        .total {
            text-align: right;
            font-size: 1.2rem;
            margin-top: 20px;
        }

        .cart-section{
            margin-top: 10rem;
            padding: 0 40px;
        }
    </style>
<body>
    <header>
    <?php include 'navbar.php';?>
  </header>
    
  <section class="cart-section">
    <h1>🛒 Shopping Cart</h1>

<table id="cart-table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <!-- Artikel -->
        <tr data-price="19.99">
            <td>Face Cream</td>
            <td>€ 19.99</td>
            <td>
                <input type="number" min="1" value="1" class="qty">
            </td>
            <td class="subtotal">€ 19.99</td>
        </tr>

        <tr data-price="9.50">
            <td>Lip Balm</td>
            <td>€ 9.50</td>
            <td>
                <input type="number" min="1" value="2" class="qty">
            </td>
            <td class="subtotal">€ 19.00</td>
        </tr>
    </tbody>
</table>

<div class="total">
    <strong>Total: € <span id="total-price">38.99</span></strong>
</div>
  </section>
  
</body>
</html>