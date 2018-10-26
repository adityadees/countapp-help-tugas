<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
  <div class="container">
    <h2>Employee List</h2><br/>
    <form method="post" action="{{url('buku_besars')}}" enctype="multipart/form-data">
      @csrf
      <?php
      $kdr="REF";
      $date=date('mdy');
      $rand=rand(0,999);
      $rand2=rand(0,99);
      $newref=$kdr.$date.$rand.$rand2;
      ?>

      <div class="row">
        <div class="col-md-12"></div>
        <div class="form-group col-md-4">
          <label for="Referensi">Referensi:</label>
          <input type="text" class="form-control" name="referensi" value="{{$newref}}">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"></div>
        <div class="form-group col-md-4">
          <label for="Tanggal">Tanggal:</label>
          <input type="date" class="form-control" name="tanggal">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"></div>
        <div class="form-group col-md-8">
          <label for="Keterangan">Keterangan:</label>
          <input type="text" class="form-control" name="keterangan">
        </div>
      </div>

      <div class="row">
        <div class="col-md-12"></div>
        <table class="table table-hovered">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Nama Akun</th>
              <th>Dept.</th>
              <th>Debit</th>
              <th>Kredit</th>
              <th>Job</th>
            </tr>
          </thead>
          <tbody>
           <tr>
            <td><input type="text" class="form-control" name="kode"></td>
            <td><input type="text" class="form-control" name="akun"></td>
            <td><input type="text" class="form-control" name="dept"></td>
            <td><input type="number" class="form-control" name="debit"></td>
            <td><input type="number" class="form-control" name="kredit"></td>
            <td><input type="text" class="form-control" name="job"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
      <div class="form-group col-md-4" style="margin-top:10px">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>