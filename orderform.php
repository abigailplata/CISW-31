<!DOCTYPE html>
<html>
    <head>
        <title> Bob's Burgers - Order Results </title>
    </head>
    <body>
        <h1> Bob's Burgers</h1>
        <h2>Order Results</h2>
        <p>What would you like to order today?</p>

        <?php echo "<p> Order processed at ".date('H:i, jS F Y')."</p>";
        ?>

        <?php 
        // create short variable names
        $burgerqty = $_POST['burgerqty'];
        $friesqty = $_POST['friesqty'];
        $sodaqty = $_POST['sodaqty'];
        $ccfriesqty = $_POST['ccfriesqty'];
        $icecreamqty = $_POST['icecreamqty'];
        ?>

        echo '<p>Your order is as follows: </p>';
        echo htmlspecialchars($burgerqty).' cheeseburger<br />';
        echo htmlspecialchars($friesqty).' french fries<br />';
        echo htmlspecialchars($sodaqty).' 12oz soft drink<br />';
        echo htmlspecialchars($ccfriesqty).' chili cheese fries<br />';
        echo htmlspecialchars($icecreamqty).' soft serve cone<br />';
        
            $totalqty = 0;
            $totalqty = $burgerqty + $friesqty + $sodaqty + $ccfriesqty + $icecreamqty;
            echo "<p> Items ordered: ".$totalqty."<br />";

            $totalamount = 0.00;

            define('BURGERPRICE', 5);
            define('FRIESPRICE', 2);
            define('SODAPRICE', 1);
            define('CCFRIESPRICE', 4);
            define('ICECREAMPRICE', 2);

            $totalamount = $burgerqty * BURGERPRICE
                        + $friesqty * FRIESPRICE    
                        + $sodaqty * SODAPRICE
                        + $ccfriesqty * CCFRIESPRICE
                        + $icecreamqty * ICECREAMPRICE;
            
            echo "Subtotal: $".number_format($totalamount, 2)."<br />";

            $taxrate = 0.20; //local sales tax is 20%

            $totalamount = $totalamount * (1 + $taxrate);

            echo "Total including tax: $".number_format($totalamount,2)."</p>";
    </body>
</html>
