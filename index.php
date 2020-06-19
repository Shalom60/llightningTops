

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lightningTops</title>
    <link href="style.css" rel="stylesheet"></link>
    <!--fontawesome-->
    <script src="https://use.fontawesome.com/5b1ba0a395.js"></script>
</head>
<body>

   
    <header><h1><i class="fa fa-bolt" aria-hidden="true"> </i> lightningTops</h1></header>
    <section>

    <?php  
         if(isset($_SESSION['error1']) && !empty($_SESSION['error1'])) {
             echo "sshi";
             
         }
    
    ?>
        <p>Top up your Naija network with the speed of <i class="fa fa-bolt" aria-hidden="true"></i>ight</p>
        <form method="POST" action="process.php">

            <label for="number">Phone Number</label>
            <input type="text" name="Phone_number" placeholder="+2348150455581" id="number">
            <label for="Network Provider" >Network Provider</label>
            <select name="Network_Provider" id="Network Provider" >
                <option value="MTN">MTN</option>
                <option value="9mobile">9mobile</option>
                <option value="Airtel">Airtel</option>
                <option value="GLO">GLO</option>
            </select>
            <label for="Amount">How much in Naira do you want to Recharge?</label>
            <input type="number" name="Amount" id="Amount" placeholder="100"> 
            <input type="submit" value="Buy">
        </form>
    </section>
</body>
</html>