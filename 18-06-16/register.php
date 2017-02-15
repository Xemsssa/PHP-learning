<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        //if (($_POST["username"] == NULL && $_POST["password"] == NULL))
        if (empty($_POST["username"]) || empty($_POST["password"]))
        {
            apologize("You must provide your username and password.");
        }
        
        //or ($_POST["password"] !== $_POST["confirmation"])
        if  ($_POST["password"] != $_POST["confirmation"])
        {
            /*error*/
            //render("apology.php", ["title" => "Register"]);
            //return alert("ERROR") ;
            apologize("The password and confirmation didn't match");
        }

        //Insert new user to database
        $rows = CS50::query("INSERT IGNORE INTO users (username, hash, cash) VALUES(?, ?, 10000.0000)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
        
        if ($rows === false) {
            # code...
             apologize("The user already exist");
        }
        //$new_user = CS50::query("INSERT IGNORE INTO users (username, hash, cash) VALUES(?, ?, 10000.0000)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
    }

?>