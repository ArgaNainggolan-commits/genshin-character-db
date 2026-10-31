<?php

// Baca konten JSON dari file
$jsonContent = file_get_contents('diluc.json');
$varFile = "diluc.json";
// Konversi JSON ke array PHP
$data = json_decode($jsonContent, true);

// Tampilkan informasi karakter Diluc
echo "<h1>{$data['name']}</h1>";
echo "<p><strong>Title:</strong> {$data['title']}</p>";
echo "<p><strong>Vision:</strong> {$data['vision']}</p>";
echo "<p><strong>Weapon:</strong> {$data['weapon']}</p>";
echo "<p><strong>Gender:</strong> {$data['gender']}</p>";
echo "<p><strong>Nation:</strong> {$data['nation']}</p>";
echo "<p><strong>Affiliation:</strong> {$data['affiliation']}</p>";
echo "<p><strong>Rarity:</strong> {$data['rarity']}</p>";
echo "<p><strong>Release Date:</strong> {$data['release']}</p>";
echo "<p><strong>Constellation:</strong> {$data['constellation']}</p>";
echo "<p><strong>Birthday:</strong> {$data['birthday']}</p>";
echo "<p><strong>Description:</strong> {$data['description']}</p>";

// Tampilkan informasi skill talents
echo "<h2>Skill Talents</h2>";
foreach ($data['skillTalents'] as $talent) {
    echo "<h3>{$talent['name']}</h3>";
    echo "<p><strong>Unlock:</strong> {$talent['unlock']}</p>";
    echo "<p><strong>Description:</strong> {$talent['description']}</p>";
    echo "<p><strong>Type:</strong> {$talent['type']}</p>";
    echo "<h4>Upgrades:</h4>";
    echo "<ul>";
    foreach ($talent['upgrades'] as $upgrade) {
        echo "<li>{$upgrade['name']}: {$upgrade['value']}</li>";
    }
    echo "</ul>";
}

// Tampilkan informasi passive talents
echo "<h2>Passive Talents</h2>";
foreach ($data['passiveTalents'] as $talent) {
    echo "<h3>{$talent['name']}</h3>";
    echo "<p><strong>Unlock:</strong> {$talent['unlock']}</p>";
    echo "<p><strong>Description:</strong> {$talent['description']}</p>";
    if (isset($talent['level'])) {
        echo "<p><strong>Level:</strong> {$talent['level']}</p>";
    }
}

// Tampilkan informasi constellations
echo "<h2>Constellations</h2>";
foreach ($data['constellations'] as $constellation) {
    echo "<h3>{$constellation['name']}</h3>";
    echo "<p><strong>Unlock:</strong> {$constellation['unlock']}</p>";
    echo "<p><strong>Description:</strong> {$constellation['description']}</p>";
    if (isset($constellation['level'])) {
        echo "<p><strong>Level:</strong> {$constellation['level']}</p>";
    }
}

// Tampilkan informasi vision, weapon, dan outfits
echo "<p><strong>Vision Key:</strong> {$data['vision_key']}</p>";
echo "<p><strong>Weapon Type:</strong> {$data['weapon_type']}</p>";
echo "<h2>Outfits</h2>";
foreach ($data['outfits'] as $outfit) {
    echo "<h3>{$outfit['name']}</h3>";
    echo "<p><strong>Type:</strong> {$outfit['type']}</p>";
    echo "<p><strong>Description:</strong> {$outfit['description']}</p>";
    echo "<p><strong>Rarity:</strong> {$outfit['rarity']}</p>";
    echo "<p><strong>Price:</strong> {$outfit['price']}</p>";
}

?>
