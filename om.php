<?php
$people = [
    ['name'=>'Glenn Klappfentrikel','img'=>'res/image002.jpg','dept'=>'Styr','role'=>'VD'],
    ['name'=>'Helga Braun','img'=>'res/image004.jpg','dept'=>'Styr','role'=>'Löner, Personal'],
    ['name'=>'Paulina Olsson','img'=>'res/image006.jpg','dept'=>'Styr','role'=>'Sekreterare, Telefonväxel'],
    ['name'=>'Greger Andersson','img'=>'res/image008.jpg','dept'=>'Produktion','role'=>'Avdelningschef, Produktionsansvarig'],
    ['name'=>'Bob "Lillen" Mkumba','img'=>'res/image010.jpg','dept'=>'Produktion','role'=>'CNC-programmering, CNC'],
    ['name'=>'Pekka Miillikainen','img'=>'res/image012.jpg','dept'=>'Produktion','role'=>'CNC, Lager/Truck'],
    ['name'=>'Gunilla Eriksson','img'=>'res/image014.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Eva Braun','img'=>'res/image016.jpg','dept'=>'Produktion','role'=>'CNC, Facklig företrädare för IF Metall'],
    ['name'=>'Patrik Svensson','img'=>'res/image018.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Lisbeth Puktrumma','img'=>'res/image020.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Henry Mitäpää','img'=>'res/image022.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Omar Muhammed','img'=>'res/image024.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Bruce Bannerhag','img'=>'res/image026.jpg','dept'=>'Produktion','role'=>'CNC'],
    ['name'=>'Hans von Lilleskog','img'=>'res/image028.jpg','dept'=>'Utveckling','role'=>'Utvecklingsledare, Designer'],
    ['name'=>'Pamela Andersson','img'=>'res/image030.jpg','dept'=>'Utveckling','role'=>'Designer/Beräkningar, Ritningsunderlag'],
    ['name'=>'Peter Norrut','img'=>'res/image032.jpg','dept'=>'Utveckling','role'=>'Ritningsunderlag, Forskning'],
    ['name'=>'Muhammed Ahdmin','img'=>'res/image034.jpg','dept'=>'IT','role'=>'Datorsystem, Telefonväxelprogrammering, Hemsida'],
    ['name'=>'Åke "CZ" Carlzon','img'=>'res/image036.jpg','dept'=>'Säljare','role'=>'Säljchef, Marknadsföring'],
    ['name'=>'Lisa Karlsson','img'=>'res/image038.jpg','dept'=>'Säljare','role'=>'Säljare, Marknadsföring'],
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