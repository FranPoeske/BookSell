<?php

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sell Books</title>
        <link rel="stylesheet" type="text/css" href="Main.css" />
    </head>
    <body>
        <h1>
            Sell Your Books Here!
        </h1>
        <table>
            <tr>
                
                    <p>Enter Book Information Here:</p>      
        </tr> 
            <tr>  
                <td><form action="Add_Book.php" method="post">
                        <label>Book ID:</label></td>
                    <td><input type="text" name="BookID">
                        
                </td>
                    </tr>
                    <tr>
                <td>
                    <label>Book Name:</label>
                    </td>
                    <td>
                    <input type="text" method="post">
                    </td>
                    <tr><td>
                    <input type="submit" name="Submit">
                        </td></tr>
                    </form>
                    
                    
        </table>
        
        <form action="index.php" method="post">
            <input type="submit" name="back">
        </form>
        
    </body>
</html>