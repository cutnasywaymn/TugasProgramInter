
<!DOCTYPE html>
<html>
<head>
	<title> Pendaftaran Beasiswa Fasilkom-TI</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>  
	<div class="container">
		<h1 class="text-center"> Pendaftaran Beasiswa Fasilkom-TI</h1>
			<h2 class="text-center"> Universitas Sumatera Utara</h2>

	<!-- form mahasiswa -->
<div class="card mt-5">
  <div class="card-header bg-primary text-white">
    	Data Mahasiswa
	  </div>

 <div class="card-body">
    <form method="post" action="">
    	<div class="form-group">
    		<label>NIM</label>
    		<input type="text" name="tnim" class="form-control" placeholder="Nomor Induk Mahasiswa" required> 
    	</div>
    	<div class="form-group">
    		<label>Nama Lengkap</label>
    		<input type="text" name="tnama" class="form-control" placeholder="" required> 
    	</div>
    	<div class="form-group">
    		<label>Alamat</label>
    		<textarea class="form-control" name="talamat" class="form-control" placeholder="alamat sekarang"></textarea>
        </div>
            <div class="form-group">
               <label>Program Studi</label>
               <select class="form-control" name="tprodi">
                  <option></option>
                  <option value="SI-ILKOM">Ilmu Komputer</option>
                  <option value="SI-TI">Teknologi Informasi</option>
                        </select>
                    </div>
                </div>
         </div>
     </div>
    </form>
  </div>
</div>
</body>
</html>
