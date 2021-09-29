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
                <a class="nav-link" href="opdracht13.php" 
                style="<?php if($page == "opdracht13"){echo "color: black";}?>">Hoofdstuk 4 | Opdracht 13</a>
                <a class="nav-link" href="opdracht14.php" 
                style="<?php if($page == "opdracht14"){echo "color: black";}?>">Hoofdstuk 4 | Opdracht 14</a>
                <a class="nav-link" href="opdracht15.php" 
                style="<?php if($page == "opdracht15"){echo "color: black";}?>">Hoofdstuk 4 | Opdracht 15</a>
                <a class="nav-link" href="acht.php" 
                style="<?php if($page == "acht"){echo "color: black";}?>">Hoofdstuk 8</a>
                <a class="nav-link" href="negen.php" 
                style="<?php if($page == "negen"){echo "color: black";}?>">Hoofdstuk 9</a>
            </div>
        </div>
    </div>
</nav>