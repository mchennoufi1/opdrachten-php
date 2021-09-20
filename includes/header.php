<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP</a>
        <br>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" 
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="index.php" 
                style="<?php if($page == "drie"){echo "color: black";}?>">Hoofdstuk 3</a>
                <a class="nav-link" href="vier.php" 
                style="<?php if($page == "vier"){echo "color: black";}?>">Hoofdstuk 4</a>
                <a class="nav-link" href="zeven.php" 
                style="<?php if($page == "zeven"){echo "color: black";}?>">Hoofdstuk 7</a>
                <a class="nav-link" href="acht.php" 
                style="<?php if($page == "acht"){echo "color: black";}?>">Hoofdstuk 8</a>
            </div>
        </div>
    </div>
</nav>