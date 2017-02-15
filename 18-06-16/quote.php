<?php

    // configuration
    require("../includes/config.php");
    
    //display form
    //RENDER
    render("quote_form.php", ["title" => "Search"]);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //get stock symbol
        $stock = lookup($_POST["symbol"]);

        if ($stock === false) {
            # code...
            //check for valid symbol
            apologise("You entered invalid symbol");
        }
        else
        {
            //display stock quote
            //render("quote.php", ["title" => "Search"]);
            redirect("quote.php");   
        }
    }
?>
retrive stock quote

