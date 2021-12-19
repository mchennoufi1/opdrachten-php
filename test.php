<!DOCTYPE html>
<html>
    <head>

        <?php 
            include("includes/head.php");
        ?>

        <title> Test pagina </title>
    </head>

    <?php 
        $page = "test";
    ?>
    <body>

        <?php 
            include("includes/header.php"); 
        ?>
        <br>
        <h3>Test</h3>
        <br>
        <form action="#">
            <div>
                <label>
                    Gender:
                </label>   
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div>
                <label>
                    Age:
                </label>   
                <input type="number"  name="age">
            </div>
            <div>
                <label>
                    Birthday:
                </label>   
                <input type="date"  name="date">
            </div>
            <div>
                <label>
                    First Name:
                </label>   
                <input type="text"  name="fname">
            </div>
            <div>
                <label>
                    Last Name:
                </label>   
                <input type="text"  name="lname">
            </div>
            <div>
                <label>
                    Email:
                </label>   
                <input type="email"  name="email">
            </div>
            <div>
                <label>
                    Message:
                </label>   
                <textarea name="message" col="20" rows="5">
                </textarea>
            </div>
            <div>
                <input type="submit"  name="submit" value="submit">
            </div>
        </form>
    </body>

    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
<html>