<?php
$people = [
    ['name'=>'Glenn Klappfentrikel','img'=>'https://ollesab.mockelngymnasiet.com/res/image002.jpg','dept'=>'Styr','role'=>'VD'],
    ['name'=>'Helga Braun','img'=>'https://ollesab.mockelngymnasiet.com/res/image004.jpg','dept'=>'Styr','role'=>'Löner, Personal'],
    ['name'=>'Paulina Olsson','img'=>'https://ollesab.mockelngymnasiet.com/res/image006.jpg','dept'=>'Styr','role'=>'Sekreterare, Telefonväxel'],
    ['name'=>'Greger Andersson','img'=>'https://ollesab.mockelngymnasiet.com/res/image008.jpg','dept'=>'Produktion','role'=>'Avdelningschef, Produktionsansvarig'],
    ['name'=>'Bob "Lillen" Mkumba','img'=>'https://ollesab.mockelngymnasiet.com/res/image010.jpg','dept'=>'Produktion','role'=>'CNC-programmering, CNC'],
    ['name'=>'Pekka Miillikainen','img'=>'https://ollesab.mockelngymnasiet.com/res/image012.jpg','dept'=>'Produktion','role'=>'CNC, Lager/Truck'],
    ['name'=>'Gunilla Eriksson','img'=>'https://ollesab.mockelngymnasiet.com/res/image014.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Eva Braun','img'=>'https://ollesab.mockelngymnasiet.com/res/image016.jpg','dept'=>'Produktion','role'=>'CNC, Facklig företrädare för IF Metall'],
    ['name'=>'Patrik Svensson','img'=>'https://ollesab.mockelngymnasiet.com/res/image018.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Lisbeth Puktrumma','img'=>'https://ollesab.mockelngymnasiet.com/res/image020.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Henry Mitäpää','img'=>'https://ollesab.mockelngymnasiet.com/res/image022.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Omar Muhammed','img'=>'https://ollesab.mockelngymnasiet.com/res/image024.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Bruce Bannerhag','img'=>'https://ollesab.mockelngymnasiet.com/res/image026.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Hans von Lilleskog','img'=>'https://ollesab.mockelngymnasiet.com/res/image028.jpg','dept'=>'Utveckling','role'=>'Utvecklingsledare, Designer'],
    ['name'=>'Pamela Andersson','img'=>'https://ollesab.mockelngymnasiet.com/res/image030.jpg','dept'=>'Utveckling','role'=>'Designer/Beräkningar, Ritningsunderlag'],
    ['name'=>'Peter Norrut','img'=>'https://ollesab.mockelngymnasiet.com/res/image032.jpg','dept'=>'Utveckling','role'=>'Ritningsunderlag, Forskning'],
    ['name'=>'Muhammed Ahdmin','img'=>'https://ollesab.mockelngymnasiet.com/res/image034.jpg','dept'=>'IT','role'=>'Datorsystem, Telefonväxelprogrammering, Hemsida'],
    ['name'=>'Åke "CZ" Carlzon','img'=>'https://ollesab.mockelngymnasiet.com/res/image036.jpg','dept'=>'Säljare','role'=>'Säljchef, Marknadsföring'],
    ['name'=>'Lisa Karlsson','img'=>'https://ollesab.mockelngymnasiet.com/res/image038.jpg','dept'=>'Säljare','role'=>'Säljare, Marknadsföring'],
];
?>
<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Olles AB — Om oss</title>
    <link rel="stylesheet" href="style/om.css">
</head>
<body>
  <div class="container">
    <header>
        <a href="index.html">Hem</a> | <a href="pic.html">Bilder</a>
        <h1>Olles AB</h1>
        <p>Företaget är verksamt sedan 1948. Organisation: STYR (3), PROD (10), UTV (3), IT (1), SALG (2).</p>
    </header>

    <section class="grid" aria-label="Medarbetare">
      <?php foreach($people as $p): ?>
        <article class="card" role="article">
          <img src="<?=htmlspecialchars($p['img'])?>" alt="<?=htmlspecialchars($p['name'])?>">
          <h3><?=htmlspecialchars($p['name'])?></h3>
          <div class="meta"><?=htmlspecialchars($p['dept'])?> — <?=htmlspecialchars($p['role'])?></div>
        </article>
      <?php endforeach; ?>
    </section>
  </div>
</body>
</html>