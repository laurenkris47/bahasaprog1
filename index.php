<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Diri</title>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: purple;
    background-size: cover;
    background-position: center;
    color: black;
}
.wrapper {
    background:rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    padding: 30px 50px;
    text-align: left;
    border-radius: 10px;
}
 /*judul form evalusi laurentius*/
h1 {
    font-size: 20px;
    text-align: center;
    background: transparent;
    background-color: #663399;
    padding:20px 20px;
    border-radius: 10px;
    color: white;
    
}
.btn{
    
    background:#663399;
    padding:10px 10px;
    border-radius: 10px;
    font-size: 12px;
    text-align: center;
    color: white;
    font-family: "Poppins", sans-serif;
}
.input-box input{
    width: 100%;
    height: 50%;
    background: transparent;
    border:none;
    outline: none;
    border: 2px solid rgb(255, 255, 255);
    font-size: 12px;
    color: black;
    padding: 5px 5px 5px 5px;}
    </style>
</head>
<body>
<div class="wrapper">
    <form action="proses.php" method="post">
        <header>
            <h1>Silahkan Isi Data Diri Anda</h1><br>
        </header>
        <div class="input-box">
        <div>
        <label for="nim">NIM    :</label>
        <input type="text" id="nim" name="nim" required><br><br>
        </div>
        <div>
        <label for="nama">Nama  :</label>
        <input type="text" id="nama" name="nama" required><br><br>
        </div>
        <div>
        <label for="tempat_lahir">Tempat Lahir  :</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required><br><br>
        </div>
        <div>
        <label for="tanggal_lahir">Tanggal Lahir    :</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>
        </div>
        <div>
        <label for="jenis_kelamin">Jenis Kelamin   :</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" required><br><br>
        </div>
        <div>
        <label for="agama">Agama    :</label>
        <input type="text" id="agama" name="agama" required><br><br>
        </div>
        <div>
        <label for="alamat">Alamat  :</label>
        <input type="text" id="alamat" name="alamat" required><br><br>
        </div>
        <div>
        <label for="email">Email    :</label>
        <input type="email" id="email" name="email" required><br><br>
        </div>
        <div>
        <label for="telepon">Telepon    :</label>
        <input type="text" id="telepon" name="telepon" required><br><br>
        </div>
       <button type="submit" class="btn">SUBMIT </button>
       </div>
    </form>

    
    </div>
</body>
</html>
