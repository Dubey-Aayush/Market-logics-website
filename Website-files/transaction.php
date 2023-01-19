<script>
var tab = document.getElementById("myTransactions");

var row = tab.insertRow(1);

var particulars = row.insertCell(0);
var bs = row.insertCell(1);
var qty = row.insertCell(2);
var price = row.insertCell(3);
var total = row.insertCell(4);

particulars.innerHTML = <?php echo $company ?>
bs.innerHTML = <?php echo $transaction ?>
qty.innerHTML = <?php echo  $_COOKIE['quantity'] ?>
price.innerHTML = <?php echo $Tata_price ?>
total.innerHTML = <?php echo $new ?>

table.deleteRow(9);
</script>