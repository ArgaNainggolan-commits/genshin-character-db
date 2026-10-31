<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact</title>
    <link rel="stylesheet" href="klee.css">
</head>
<body>
    <div class="banner">
        <div class="content">
            <h3>Klee</h3>
            <img src="klee.jpeg" height="100px"><br>
            <p>
                <?php
                echo "Klee is a playable Pyro character in Genshin Impact. ";
                echo "The daughter of the intrepid and often quite destructive adventurer Alice, Klee takes after her mother in many ways, much to the dismay of the Knights of Favonius whom she has been entrusted to.";
                ?>
            </p>
            <h3>Information</h3>
            <table border="1">
                <tr>
                    <th>Constellation</th>
                    <th>Weapon</th>
                    <th>Talents</th>
                </tr>
                <?php
                $constellations = ["Chained Reactions", "Explosive Frags", "Exquisite Compound", "Sparkly explosion", "Nova Burst", "Blazzing Delight"];
                $weapons = ["Kagura's Verity", "Skyward Atlas", "Memory of Dust", "Solar Pearl", "Docodo Tales", "Magic Guide"];
                $talents = ["Normal attack: Kaboom!", "Jumpy Dumpty", "Sparks 'n' Splash", "Pounding Surprise", "Sparkling Burst", "All of My Treasures"];

                for ($i = 0; $i < count($constellations); $i++) {
                    echo "<tr>";
                    echo "<td>{$constellations[$i]}</td>";
                    echo "<td>{$weapons[$i]}</td>";
                    echo "<td>{$talents[$i]}</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <div>
                <a href="character.html"><button type="button"><span></span>Back</button></a>
            </div>
        </div>
    </div>
</body>
</html>
