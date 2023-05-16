<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 01</title>
</head>
<body>

    <form name="latihan01" method="POST" onsubmit="return checkform(this)">
    <div>
        NIM 
        <input type="text" name="txNIM">
    </div>
       <div>
        Nama
        <input type="text" name="txNAMA">
    </div>
    <div>
        jenis kelamin
        <input type="radio" name="txJK" value="L">laki-laki
        <input type="radio" name="txJK" value="P">perempuan
    </div>
   <div>
       jurusan 
            <select name="txJURUSAN">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
                <option value="DGM">DGM</option>
                <option value="TIPAR">TIPAR</option>
                <option value="SK">SK</option>
             </select>
    </div>

    <div>
        hobi 
        <input type="checkbox" name="musik">musik
        <input type="checkbox" name="tari">tari
        <input type="checkbox" name="membaca">membaca
        <input type="checkbox" name="tidur">tidur
        <input type="checkbox" name="joging">joging
        <input type="checkbox" name="lari">lari
        <input type="checkbox" name="menangis">menangis
    </div>
    <div>
        <button type="submit"> kirim data </button>
    </div>
    </form>

    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            let nama = f.namedItem("txNAMA").value;
            let jk = f.namedItem("txJK").value;
            let jurusan = f.namedItem("txJURUSAN").value;
            let hobi_musik = f.namedItem("musik").checked;
            let hobi_tari = f.namedItem("tari").checked;
            let hobi_membaca = f.namedItem("membaca").checked;
            let hobi_tidur = f.namedItem("tidur").checked;
            let hobi_joging = f.namedItem("joging").checked;
            let hobi_lari= f.namedItem("lari").checked;
            let hobi_menangis = f.namedItem("menangis").checked;

            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JENIS KELAMIN: "+jk);
            console.log("JURUSAN: "+jurusan);
            return false;
        }
    </script>
</body>
</html>