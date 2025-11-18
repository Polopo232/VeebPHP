<h1>Videokaardi veebikalkalator</h1>
<table>
    <tr>
        <td>
            <form id="videokaart_form">
                <label>
                    <input type="radio" name="videokaart" value="1050" onchange="muudaVideokaart()" checked> NVIDIA GTX 1050
                </label><br>
                <label>
                    <input type="radio" name="videokaart" value="1660s" onchange="muudaVideokaart()"> NVIDIA GTX 1660 Super
                </label><br>
                <label>
                    <input type="radio" name="videokaart" value="4060ti" onchange="muudaVideokaart()"> NVIDIA RTX 4060 Ti
                </label><br>
                <label>
                    <input type="radio" name="videokaart" value="5090" onchange="muudaVideokaart()"> NVIDIA RTX 5090
                </label><br>
            </form>
        </td>


        <td>
            <img id="videokaart_pilt"  class="videokaart_img" src="" alt="">
        </td>


        <td>
            <label for="kogus_video">Mitu tk soovid osta?</label><br>
            <input type="number" id="kogus_video" min="1" max="100" value="0" onchange="arvutaVideoHind()">
        </td>

        <td>
            Summa: <span id="videosumma"></span>
        </td>
    </tr>
</table>

<script src="videoScript.js"></script>