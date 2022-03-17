<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h2 class="m-2">Form Nilai Siswa</h2>
    <hr>
    <div class="d-flex justify-content-center w-100">
        <form class="w-50" method="POST" action="nilai_siswa.php">
            <div class="form-group row">
                <label for="" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div>
                                
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control" aria-describedby="HelpBlock">
                    </div>
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="select1" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select" required="required" aria-describedby="select1HelpBlock">
                        <option value="DDP">Dasar-Dasar Pemrogaman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemrogaman Web</option>
                    </select>
                   
                </div>
            </div>
            <div class="form-group row">
                <label for="text2" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai UTS</label>
                <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" type="text" class="form-control" required="required" aria-describedby="text2HelpBlock">
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai UAS</label>
                <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" type="text" class="form-control" required="required" aria-describedby="text3HelpBlock">
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai Tugas/Praktikum</label>
                <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control" required="required" aria-describedby="text1HelpBlock">
                   
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    
</body>

</html>



<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <form >
      <div class="form-group row" method="POST" action="nilai_siswa.php">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
          <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
          <select id="matkul" name="matkul" class="custom-select">
            <option value="DDP">Dasar Dasar Pemograman</option>
            <option value="BDI">Basis Data I</option>
            <option value="WEB1">Pemograman Web</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
          <input id="nilai_uts" name="nilaiUTS" placeholder="Nilai UTS" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
          <input id="nilai_uas" name="nilaiUAS" placeholder="Nilai UAS" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-8">
          <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>

    
      

  </body>
</html> -->
