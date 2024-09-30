<?php
    session_start();

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "quotes";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote Generator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <script src="script.js" defer></script>

</head>
<body>
    <div>
        <!--header navigation tab-->
        <header>
            <nav>
                    <a href="index.html" class="cabin">Home</a>
                    <a href="saved.php" class="cabin">Saved</a>
            </nav>
        </header>

        <!--main content-->
        <article>
            <span>
            <h1 id="title" class="cabin">Saved Quotes</h1>
            <div>
                <?php
                    $sql = "SELECT * FROM saved";
                    $result = $conn->query($sql);
                    $blogs = array();
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            unset($row['ID']);
                            $quotes[] = $row;
                        }
                        foreach ($quotes as $quote) {
                            echo "<section>
                                <p class='cabin'>Saved on: ".$quote['dateTime']."</p>
                                <p class='cabin'>".$quote['quote']."</p>
                                <p class='cabin'>".$quote['author']."</p>
                            </section>";
                            echo "<hr>";
                            echo "<br>";
                        }
                    }else {
                        echo "No saved quotes";
                    }
        
                ?>
                
            </div>
            </span>
        </article>


    </div>

</body>
</html>