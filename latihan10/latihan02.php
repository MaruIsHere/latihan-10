<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
</head>
<body>

 <!----- this mengarah data ke form --->
<form name="latihan1" id="latihan1" method="POST" onsubmit="return checkform()">
    <div> 
        NIM
        <input type="text" name="txNIM" id="txNIM">
    </div> 
    <div> 
        jenis Kelamin
        <input type="radio" name="txJK" id="txJK" value="L">Laki-Laki
        <input type="radio" name="txJK" id="txJK" value="P">Perempuan
    </div> 
    <div>
        Jurusan
        <select name="txJURUSAN" id="txJURUSAN">
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
            <option value="DSN">Desain</option>
        </select>
    </div>
    <div>
        Hobi
        <input type="checkbox" name="txhobibola" id="txhobibola" value="1">Sepak Bola
        <input type="checkbox" name="txhobibulutangkis" id="txhobibulutangkis" value="2">Bulu Tangkis
        <input type="checkbox" name="txhobirenang" id="txhobirenang" value="3">Renang
        <input type="checkbox" name="txhobivoly" id="txhobivoly" value="4">Bola Voly
        <input type="checkbox" name="txhobimenari" id="txhobimenari" value="5">Menari
    </div>

    <div>
        <button type="submit"> Kirim Data </button>
    </div>

</form>

<script type="text/javascript">

    function checkform() {
        let frm = document.getElementById('latihan1').elements;
        
        let NIM = frm.txNIM.value;
        let jnskel = frm.txJK.value;
        let jurusan = frm.txJURUSAN.value;
        let hobi = [

            frm.txhobibola.checked,
            frm.txhobibulutangkis.checked,
            frm.txhobirenang.checked,
            frm.txhobivoly.checked,
            frm.txhobimenari.checked

        ];

        console.log("NIM: " + NIM);
        console.log("jenis Kelamin: " + jnskel);
        console.log("jurusan: " + jurusan);
        console.log("hobi: " + hobi);
        
        return false;
    }


</script>

</body>
</html>