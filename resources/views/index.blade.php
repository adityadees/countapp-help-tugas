@extends('include.main')
@section('content')


<section class="jumbotron">
  <div class="container">
    <br />
    @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div><br />
    @endif
    <h1 class="jumbotron-heading">Buku Besar</h1>

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
          <input type="text" class="form-control" name="referensi" readonly="readonly" value="{{$newref}}">
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
</section>


<div class="container">
  <div class="col-md-12">
    <div class="table-responsive-lg"  style="font-size: 0.8rem;">
      <table class="table table-striped">
        <thead>
          <tr class="bg-info">
            <th>Referensi</th>
            <th>Kode</th>
            <th>Nama Akun</th>
            <th>Dept.</th>
            <th>Debit</th>
            <th>Kredit</th>
            <th>Job</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($buku_besars as $buku_besar)
          <tr>
            <td>{{$buku_besar['bb_referensi']}}</td>
            <td>{{$buku_besar['bb_kode']}}</td>
            <td>{{$buku_besar['bb_akun']}}</td>
            <td>{{$buku_besar['bb_dept']}}</td>
            <td>Rp. {{number_format($buku_besar['bb_debit'])}}</td>
            <td>Rp. {{number_format($buku_besar['bb_kredit'])}}</td>
            <td>{{$buku_besar['bb_job']}}</td>
            <td>{{date('d-m-Y',strtotime($buku_besar['bb_tanggal']))}}</td>
            <td>{{$buku_besar['bb_keterangan']}}</td>
            <td>
              <div class="col-md-12">


                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a href="{{action('Mycon_bb@edit', $buku_besar['bb_referensi'])}}" class="btn btn-warning">Edit</a>
                  </div>
                  <div class="btn-group" role="group" aria-label="Third group">
                   <form action="{{action('Mycon_bb@destroy', $buku_besar['bb_referensi'])}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </div>
              </div>

            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection
