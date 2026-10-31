<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact</title>
    <link rel="stylesheet" href="nahida.css">
</head>
<body>
    <div class="banner">
        <div class="content">
            <h3>Nahida</h3>
            <img src="nahida.jpeg" height="100px"><br>
            <p>
                <?php
                echo "Nahida is a playable Dendro character in Genshin Impact. ";
                echo "As Lesser Lord Kusanali, she strives to have a stronger presence in Sumeru now that she has been freed from her extensive confinement in the Sanctuary of Surasthana.";
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
                $constellations = ["The Seed of Stored Knowledge", "The Root of all Fullness", "The Shoot of Conscious Attainment", "The Stem of Manifest Inference", "The Leaves of Enlightening Speech", "The Fruit of reason's Culmination"];
                $weapons = ["a Thousand Floating Dreams", "Kagura's Verity", "The Widsith", "Wandering Evenstar", "Solar Pearl", "skyward Atlas"];
                $talents = ["Normal attack: Akara", "All schemes to Know", "Illusory Heart", "Compassion Illuminated", "Awakening Elucidated", "On All Things Meditated"];

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
