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
        // Check input
        if (empty($_POST["username"]) || empty($_POST["password"]))
        {
            apologize("You must provide your username and password.");
        }
        
        //check password
        if  ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("The password and confirmation didn't match");
        }
        
        //Insert new user to database
        $row = CS50::query("INSERT IGNORE INTO users (username, hash, cash) VALUES(?, ?, 10000.0000)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
        
        // if ($row[0]["id"] === $id) {
        //     // code...
        //     apologize("user already exist");
        // }
        
        //session
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        $_SESSION["id"] = $row["id"];

        // redirect
        //redirect("/");
        render("portfolio.php", ["title" => "Portfolio"]);
    }

?>