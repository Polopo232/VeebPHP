<h1>Require. PHP konspekt</h1>

<link rel="stylesheet" href="../style/style.css">

<div class="blocks-container">
        <div class="blocks">
            <h3>Media</h3>
            Kõige olulisem osa asus @media plokis. Just see võimaldab luua eraldi stiile telefonile. <br><br>
            Laiematele ekraanidele sobib
            <pre>@media (max-width: 640px) { ... }</pre>

            kuid tuleb arvestada, et kõige kitsamad telefoniekraanid on umbes 400px
            <pre>@media (max-width: 400px) { ... }</pre>

            Optimaalsed mõõtmed algavad 600 ja lõpevad 1200 pikslitega. Kõik sõltub teksti pikkusest jms.
        </div>
        <div class="pretty-img">
            <img src="../image/mobilli_prev.png" alt="">
        </div>
</div>
