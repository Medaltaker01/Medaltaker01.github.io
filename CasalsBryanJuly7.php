<!DOCTYPE html>
<html>
  <head>
    <title>PAY ROLL</title>
  </head>
  
  <body>
    <h1>City Of Malabon University</h1>
    <h2>PHP Arithmetic Operations</h2>
    
    <form method="post">
      <label for="sahod">RATE PER DAY : </label> 
      <input type="number" name="sahod"><br>
      
      <label for="days">DAY/S : </label>
      <input type="number" name="days"><br>
      
      <label for="sss">SSS : </label>
      <input type="number" name="sss"><br>
      
      <label for="tax">TAX : </label>
      <input type="number" name="tax"><br>
      
      <label for="pagibig">Pag-ibig : </label>
      <input type="number" name="pagibig"><br>
      
      <input type="submit" value="Calculate">
    </form>
    
    <?php
      //get user input
      $sahod = $_POST['sahod']
      $days = $_POST['days']
      $sss = $_POST['sss']
      $tax = $_POST['tax']
      $pagibig = $_POST['pagibig']
    
      //perform arithmetic operation
      $totalPay = $sahod * $days
      $totalDeduction = $sss + $tax + $pagibig
      $netPay = $totalPay - $totalDeduction
    
      //output results
      echo "TOTAL :. $totalPay .<br>";
      echo "SSS :. $sss .<br>";
      echo "TAX :. $tax .<br>";
      echo "Pag-ibig :. $pagibig .<br>";
      echo "TOTAL DEDUCTION :. $totalDeduction .<br>";
      echo "NET PAY :. $netPay .<br>";
    ?>
  </body>
</html>
