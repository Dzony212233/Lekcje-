<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Witryna internetowa</title>
<style>
body {
  background-color: LightCyan;
  font-family: Arial, sans-serif;
  text-align: center;
  margin: 0;
}

header {
  background-color: SteelBlue;
  color: white;
  padding: 10px;
}

h1 {
  margin: 0;
  font-size: 20px;
}

h2 {
  font-size: 18px;
  margin: 10px 0;
}

/* tabela */
table {
  width: 70%;
  margin: 0 auto;
  border-collapse: collapse;
  background-color: white;
}

th, td {
  border: 1px solid SteelBlue;
  padding: 5px 10px;
}

th {
  background-color: LightSteelBlue;
}

tr:hover {
  background-color: SteelBlue;
  color: white;
}

/* sekcja artykułów */
main {
  display: flex;
  justify-content: space-around;
  align-items: flex-start;
  margin: 20px auto;
  width: 90%;
}

article {
  width: 30%;
  padding: 10px;
  box-sizing: border-box;
}

article img {
  width: 100%;
}

article:nth-of-type(1) { background-color: DodgerBlue; }
article:nth-of-type(2) { background-color: LimeGreen; }
article:nth-of-type(3) { background-color: DarkOrchid; }

p {
  padding: 10px;
  color: white;
  font-weight: bold;
  font-size: 14px;
}

/* stopka */
footer {
  background-color: SteelBlue;
  color: white;
  padding: 5px;
  font-size: 14px;
}
</style>
</head>
<body>

<h1>Witryna internetowa</h1>

<header>
  <h2>STRONA BIBLIOTEKI SZKOLNEJ WIEDZAMIN</h2>
</header>

<h3>Nasze dzisiejsze propozycje:</h3>


<table>
  <tr>
    <th>Autor</th>
    <th>Tytuł</th>
    <th>Katalog</th>
  </tr>

</table>
<main>
  <article>
    <img src="ksiazka1.png" alt="zdjęcie książki"> 
  </article>

    <article>
    <img src="ksiazka2.png" alt="zdjęcie książki">
  </article>

   <article>
    <img src="ksiazka3.png" alt="zdjęcie książki"> 
  </article>
</main>

<footer>
  Stronę wykonał: Jakub Bodzek
</footer>

</body>
</html>
