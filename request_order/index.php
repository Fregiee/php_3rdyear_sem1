<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>Menu</h2>

<table style="width:25%">
  <tr>
    <th>Order</th>
    <th>Amount</th>
  </tr>
  <tr>
    <td>Burger</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Fries</td>
    <td>75</td>
  </tr>
  <tr>
    <td>Steak</td>
    <td>150</td>
  </tr>
</table>

<p>Select an order 
<form action="receipt.php" method="POST">
        <select name="order">
            <option value="Burger">Burger</option>
            <option value="Fries">Fries</option>
            <option value="Steak">Steak</option>
        </select>
    </p>

    <p>Quantity
        <input type="text" name="quantity" size="15" maxlength="2" required />
    </p> 

    <p>Cash
        <input type="text" name="cash" size="15" maxlength="4" required />
    </p> 

    <p><input type="submit" value="Submit" name="submit"></p>
</form>

</body>
</html>
