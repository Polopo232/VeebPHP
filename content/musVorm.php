<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Muusika küsitlus</title>
    <script src="../js/musScript.js"></script>
</head>
<body>
<h1>Muusika küsitlus</h1>
<form action="#" method="post">
<table>
  <tr>
    <td><label for="musband_">Milliseid muusikuid/ansambleid sa tead?</label> <br>
      <input type="checkbox" id="musband_" name="musband" value="AC/DC" onchange="bandChoice()">
      <label for="musband_">AC/DC</label> <br>
      <input type="checkbox" id="musband1" name="musband" value="The Beatles" onchange="bandChoice()">
      <label for="musband1">The Beatles</label> <br>
      <input type="checkbox" id="musband2" name="musband" value="Metallica" onchange="bandChoice()">
      <label for="musband2">Metallica</label> <br>
      <input type="checkbox" id="musband3" name="musband" value="Oasis" onchange="bandChoice()">
      <label for="musband3">Oasis</label>
    </td>
    <td>
      <div id="bandanswer"></div>
    </td>
  </tr>
  <tr>
    <td>
      <label for="interview">Mida arvad muusika kuulamisest koolis?</label> <br>
      <textarea name="ask1" id="interview" cols="35" rows="10" oninput="interviewText()"></textarea>
    </td>
    <td>
      <div id="interviewanswer"></div>
    </td>
  </tr>
  <tr>
    <td>
      <label for="numberask">Mitu tundi päevas sa kuulad muusikat?</label> <br>
      <input type="number" name="ask" id="numberask" min="1" max="100" value="1" oninput="numberAsk()">
    </td>
    <td>
      <div id="numberanswer"></div>
    </td>
  </tr>
  <tr>
    <td>
      <label>Kas sa kuulad raadiot?</label> <br>
      <input type="radio" name="ask" id="radioask1" value="Jah" oninput="radioAsk()">
      <label for="radioask1">Jah</label>
      <input type="radio" name="ask" id="radioask2" value="Ei" oninput="radioAsk()">
      <label for="radioask2">Ei</label>
    </td>
    <td>
      <div id="radioanswer"></div>
    </td>
  </tr>
  <tr>
    <td>
      <label for="radio-choice">Milliseid raadiojaamu oskad nimetada?:</label> <br>
      <input list="estonian-radios" id="radio-choice" name="radio-choice" oninput="datalistAsk()">

      <datalist id="estonian-radios">
        <option value="Sky Plus"></option>
        <option value="Retro FM"></option>
        <option value="Star FM"></option>
        <option value="Rock FM"></option>
        <option value="MyHits"></option>
        <option value="Narodnoe Radio"></option>
      </datalist>
    </td>
    <td>
      <div id="datalistanswer"></div>
    </td>
  </tr>
  <tr>
    <td>
      <label for="genres">Millist muusikat sa kõige rohkem kuulad?</label><br>
      <select id="genres" name="genres" oninput="genreAsk()">
        <option value="...">...</option>
        <option value="pop">Pop</option>
        <option value="rock">Rock</option>
        <option value="hiphop">Hip-Hop / Rap</option>
        <option value="jazz">Jazz</option>
        <option value="metal">Metal</option>
        <option value="blues">Blues</option>
      </select>
    </td>
    <td>
      <div id="genreanswer"></div>
    </td>
  </tr>
</table>

  <input type="button" value="Saada" onclick="ifSaada()">
  <input type="reset" value="Puhasta">
  <br>
  <div id="summary"></div>
</form>

</body>
</html>