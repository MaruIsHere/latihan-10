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
<form name="latihan1" method="POST" onsubmit="return checkform(this)">
    <div> 
        NIM
        <input type="text" name="txNIM">
    </div> 
    <div> 
        jenis Kelamin
        <input type="radio" name="txJK" value="L">Laki-Laki
        <input type="radio" name="txJK" value="P">Perempuan
    </div> 
    <div>
        Jurusan
        <select name="txJURUSAN">
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
            <option value="DSN">Desain</option>
        </select>
    </div>
    <div>
        Hobi
        <input type="checkbox" name="txhobibola" value="1">Sepak Bola
        <input type="checkbox" name="txhobibulutangkis" value="2">Bulu Tangkis
        <input type="checkbox" name="txhobirenang" value="3">Renang
        <input type="checkbox" name="txhobivoly" value="4">Bola Voly
        <input type="checkbox" name="txhobimenari" value="5">Menari
    </div>

    <div>
        <button type="submit"> Kirim Data </button>
    </div>

</form>


<script type="text/javascript">
    function checkform(frm){
        let form = frm.elements;
        let NIM = form.namedItem("txNIM").value;
        let jnskel = form.namedItem("txJK").value;
        let jurusan = form.namedItem("txJURUSAN").value;
        let hobi = [
            form.namedItem("txhobibola").checked,
            form.namedItem("txhobibulutangkis").checked,
            form.namedItem("txhobirenang").checked,
            form.namedItem("txhobivoly").checked,
            form.namedItem("txhobimenari").checked
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