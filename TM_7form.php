<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

	<div class="container">		
		<h1>Biodata Mahasiswa</h1> 
		<form action="TM_7hasil.php"  method="post" class="form-horizontal">

			<div class="form-group">
				<label class="control-label col-sm-2" for="nama">Nama Anda:</label>
				<div class="col-sm-10">
                    <input class="form-control" type="text" name="nama" required/>
				</div>
			</div>

            <div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Alamat anda:</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="alamat"/>
				</div>
            </div>	


            <div class="form-group">
				<label class="control-label col-sm-2" for="jenis">Jenis Kelamin:<br>
                    <input type="radio" name="jenis_kelamin" value="laki-laki"> laki-laki <br>
                    <input type="radio" name="jenis_kelamin" value="perempuan"> perempuan <br>
                </label>
            </div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="jenis">Golongan Darah:</label>
				<div  class="col-sm-10">
                        <select class="form-control" name="golongan_darah">
                            <option >Pilih Golongan Darah</option>
							<option value="O"> O</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
                        </select>
				</div>
            </div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="nama">Hobby :</label>
				<div class="col-sm-10">
                    <input  type="checkbox" name="hobi" value="sepak_bola"/>Sepak Bola <br>
					<input  type="checkbox" name="hobi" value="berenang"/>Berenang <br>
					<input  type="checkbox" name="hobi" value="traveling"/>Traveling <br>

				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="keterangan">Keterangan:</label>
				<div class="col-sm-10">
                <textarea class="form-control" name="keterangan" id="" cols="20" rows="4"></textarea>
				</div>
            </div>	
	

            
            <button type="submit" name="submit" class="btn btn-danger" >Simpan</button>
		
            
        </form>
        <br>

        </div>

</body>
</html>