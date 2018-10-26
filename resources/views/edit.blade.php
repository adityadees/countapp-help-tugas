@extends('include.main')
@section('content')
<section class="jumbotron">
       <div class="container">
           <h1 class="jumbotron-heading">Update Buku Besar</h1>
    <form method="post" action="{{action('Mycon_bb@update', $bb_referensi)}}">
      @csrf
      <input name="_method" type="hidden" value="PATCH">


      <div class="row">
        <div class="col-md-12"></div>
        <div class="form-group col-md-4">
          <label for="Referensi">Referensi:</label>
          <input type="text" class="form-control" name="referensi" readonly="readonly" value="{{$buku_besars->bb_referensi}}">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"></div>
        <div class="form-group col-md-4">
          <label for="Tanggal">Tanggal:</label>
          <input type="date" class="form-control" name="tanggal" value="{{$buku_besars->bb_tanggal}}">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"></div>
        <div class="form-group col-md-8">
          <label for="Keterangan">Keterangan:</label>
          <input type="text" class="form-control" name="keterangan" value="{{$buku_besars->bb_keterangan}}">
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
            <td><input type="text" class="form-control" name="kode" value="{{$buku_besars->bb_kode}}"></td>
            <td><input type="text" class="form-control" name="akun" value="{{$buku_besars->bb_akun}}"></td>
            <td><input type="text" class="form-control" name="dept" value="{{$buku_besars->bb_dept}}"></td>
            <td><input type="number" class="form-control" name="debit" value="{{$buku_besars->bb_debit}}"></td>
            <td><input type="number" class="form-control" name="kredit" value="{{$buku_besars->bb_kredit}}"></td>
            <td><input type="text" class="form-control" name="job" value="{{$buku_besars->bb_job}}"></td>
          </tr>
        </tbody>
      </table>
    </div>


    <div class="row">
      <div class="col-md-12"></div>
      <div class="form-group col-md-12" style="margin-top:10px">
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </div>
  </form>
</div>
</section>
@endsection
