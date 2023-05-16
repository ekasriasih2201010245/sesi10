<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 02</title>
</head>
<body>

    <form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform()">
    <div>
        NIM 
        <input type="text" id="nim" name="txNIM">
    </div>
       <div>
        Nama
        <input type="text" id="nama" name="txNAMA">
    </div>
    <div>
        jenis kelamin
        <input type="radio" id="jk" name="txJK" value="L">laki-laki
        <input type="radio" id="jk" name="txJK" value="P">perempuan
    </div>
   <div>
       jurusan 
            <select id="jurusan" name="txJURUSAN">
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
        <input type="checkbox" id="txhobi" name="musik">musik
        <input type="checkbox" id="txhobi" name="tari">tari
        <input type="checkbox" id="txhobi" name="membaca">membaca
        <input type="checkbox" id="txhobi" name="tidur">tidur
        <input type="checkbox" id="txhobi" name="joging">joging
        <input type="checkbox" id="txhobi" name="lari">lari
        <input type="checkbox" id="txhobi" name="menangis">menangis
    </div>
    <div>
        <button type="submit"> kirim data </button>
    </div>
    </form>

    <script>
        function checkform(){
            let f = document.getElementById("Latihan02").elements;
            let nim = f.nim.value;
            let nama = f.nama.value;
            let jk = f.jk.value;
            let jurusan = f.jurusan.value;
            let hobi_musik = f.txhobi[0].checked;
            let hobi_tari = f.txhobi[1].checked;
            let hobi_membaca = f.txhobi[2].checked;
            let hobi_tidur = f.txhobi[3].checked;
            let hobi_joging = f.txhobi[4].checked;
            let hobi_lari= f.txhobi[5].checked;
            let hobi_menangis = f.txhobi[06].checked;

            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JURUSAN: "+jurusan);
            console.log("JENIS KELAMIN: "+jk);
            console.log("hobi musik: "+hobi_musik);
            console.log("hobi tari: "+hobi_tari);
            console.log("hobi membaca: "+hobi_membaca);
            console.log("hobi tidur: "+hobi_tidur);
            console.log("hobi joging: "+hobi_joging);
            console.log("hobi lari: "+hobi_lari);
            console.log("hobi menangis: "+hobi_menangis);
            return false;
        }
    </script>
</body>
</html>