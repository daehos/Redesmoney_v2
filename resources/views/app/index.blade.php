@extends('app.master')

@section('konten')

<div class="content-body">

  <div class="container-fluid mt-3">

  <div class="row">
      <div class="col-lg-12 col-sm-12">
      <div class="card" style="background-color: #118ab2">
          <div class="card-body">
            <h3 class="card-title text-white">Pilih Session</h3>
            <form method="get" action="">
              <select class="form-control" name="session" onchange="this.form.submit()">
                <option <?php if(isset($_GET['session'])){ if($_GET['session'] == "hari"){ echo "selected='selected'"; } }else{ echo "selected='selected'"; } ?> value="hari">Hari Ini</option>
                <option <?php if(isset($_GET['session'])){ if($_GET['session'] == "bulan"){ echo "selected='selected'"; } } ?> value="bulan">Bulan Ini</option>
                <option <?php if(isset($_GET['session'])){ if($_GET['session'] == "tahun"){ echo "selected='selected'"; } } ?> value="tahun">Tahun Ini</option>
                <option <?php if(isset($_GET['session'])){ if($_GET['session'] == "semua"){ echo "selected='selected'"; } } ?> value="semua">Semua</option>
              </select>
            </form>
          </div>
        </div>
      </div>
    </div>

    
    
    
    <div class="row">
      <?php 
      if(isset($_GET['session'])){
        if($_GET['session'] == "hari"){
          ?>

          <div class="col-lg-4 col-sm-12">
            <div class="card" style="background-color: #5f7847">
              <div class="card-body">
                <h3 class="card-title text-white">Pemasukan Hari Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pemasukan_hari_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">{{ date('d-m-Y') }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #b34127">
              <div class="card-body">
                <h3 class="card-title text-white">Pengeluaran Hari Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pengeluaran_hari_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">{{ date('d-m-Y') }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #3c979a">
              <div class="card-body">
                <h3 class="card-title text-white">Saldo Hari Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pemasukan_hari_ini->total - $pengeluaran_hari_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">Saldo</p>
                </div>
              </div>
            </div>
          </div>
          
         
          <?php
        }else if($_GET['session'] == "bulan"){
          ?>
          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #003049">
              <div class="card-body">
                <h3 class="card-title text-white">Pemasukan Bulan Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pemasukan_bulan_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">{{ date('M') }}</p>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #d62828">
              <div class="card-body">
                <h3 class="card-title text-white">Pengeluaran Bulan Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pengeluaran_bulan_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">{{ date('M') }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #f77f00">
              <div class="card-body">
                <h3 class="card-title text-white">Saldo Bulan</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pemasukan_bulan_ini->total - $pengeluaran_bulan_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">Saldo</p>
                </div>
              </div>
            </div>
          </div>

          
          <?php
        }else if($_GET['session'] == "tahun"){
          ?>
          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #06d6a0">
              <div class="card-body">
                <h3 class="card-title text-white">Pemasukan Tahun Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pemasukan_tahun_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">{{ date('Y') }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #ef476f">
              <div class="card-body">
                <h3 class="card-title text-white">Pengeluaran Tahun Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pengeluaran_tahun_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">{{ date('Y') }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #ffd166">
              <div class="card-body">
                <h3 class="card-title text-white">Saldo Tahun Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pemasukan_tahun_ini->total - $pengeluaran_tahun_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">Saldo</p>
                </div>
              </div>
            </div>
          </div>


          <?php
        }else if($_GET['session'] == "semua"){
          ?>
          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #43aa8b">
              <div class="card-body">
                <h3 class="card-title text-white">Seluruh Pemasukan</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($seluruh_pemasukan->total)." ,-" }}</h3>
                  <p class="text-white mb-0">Semua</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #f94144">
              <div class="card-body">
                <h3 class="card-title text-white">Seluruh Pengeluaran</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($seluruh_pengeluaran->total)." ,-" }}</h3>
                  <p class="text-white mb-0">Semua</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #577590">
              <div class="card-body">
                <h3 class="card-title text-white">Saldo Keseluruhan</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($seluruh_pemasukan->total - $seluruh_pengeluaran->total)." ,-" }}</h3>
                  <p class="text-white mb-0">Saldo</p>
                </div>
              </div>
            </div>
          </div>


          <?php
        }
      }else{
        ?>
                 <div class="col-lg-4 col-sm-12">
            <div class="card" style="background-color: #5f7847">
              <div class="card-body">
                <h3 class="card-title text-white">Pemasukan Hari Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pemasukan_hari_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">{{ date('d-m-Y') }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #b34127">
              <div class="card-body">
                <h3 class="card-title text-white">Pengeluaran Hari Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pengeluaran_hari_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">{{ date('d-m-Y') }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
          <div class="card" style="background-color: #3c979a">
              <div class="card-body">
                <h3 class="card-title text-white">Saldo Hari Ini</h3>
                <div class="d-inline-block">
                  <h3 class="text-white">{{ "Rp. ".number_format($pemasukan_hari_ini->total - $pengeluaran_hari_ini->total)." ,-" }}</h3>
                  <p class="text-white mb-0">Saldo</p>
                </div>
              </div>
            </div>
          </div>
        <?php 
      }
      ?>



      


    </div>


    <div class="row">

      <style type="text/css">
        .card-grafik canvas{
          width: 100% !important;
          position: relative !important;
          height: auto !important;
        }
      </style>

      <section class="col-lg-6">

        <div class="card card-grafik">
          <div class="card-header pt-4">
            <h5 class="card-title">Grafik Keuangan <b>Per Bulan</b> Di Tahun Ini</h5>
          </div>
          <div class="card-body">

            <canvas id="grafik1"></canvas>

          </div>
        </div>

      </section>


      <section class="col-lg-6">

        <div class="card card-grafik">
          <div class="card-header pt-4">
            <h5 class="card-title">Grafik Keuangan <b>Per Tahun</b></h5>
          </div>
          <div class="card-body">

           <canvas id="grafik2"></canvas>

         </div>
       </div>

     </section>


     
     <section class="col-lg-6">

       <div class="card card-grafik">
        <div class="card-header pt-4">
          <h5 class="card-title">Grafik Keuangan <b>Per Kategori</b> Bulan Ini</h5>
        </div>
        <div class="card-body">

          <canvas id="grafik4"></canvas>

       </div>
     </div>

   </section>

   
   <section class="col-lg-6">
     
     <div class="card card-grafik">
       <div class="card-header pt-4">
         <h5 class="card-title">Grafik Keuangan <b>Per Hari</b> Di Bulan Ini</h5>
        </div>
        <div class="card-body">

          <div style="overflow-x: scroll;">
            <canvas id="grafik3"></canvas>
          </div>
          
        </div>
      </div>
      
    </section>
    
    <section class="col-lg-12">
 
     <div class="card card-grafik">
       <div class="card-header pt-4">
         <h5 class="card-title">Grafik Profit <b>Per Hari</b> Di Bulan Ini</h5>
       </div>
       <div class="card-body">

          <div style="overflow-x: scroll;">
            <canvas id="grafik5"></canvas>
          </div>
        
       </div>
     </div>
 
   </section>


 </div>



</div>
<!-- #/ container -->
</div>



<script>
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

  var barChartData = {
    labels : ["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des"],
    datasets : [
    {
      label: 'Pemasukan',
      fillColor : "rgba(51, 240, 113, 0.61)",
      strokeColor : "rgba(11, 246, 88, 0.61)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      data : [
        <?php
        for($bulan=1;$bulan<=12;$bulan++){
          $tahun = date('Y');
          $pemasukan_perbulan = DB::table('transaksi')
          ->select(DB::raw('SUM(nominal) as total'))
          ->where('jenis','Pemasukan')
          ->whereMonth('tanggal',$bulan)
          ->whereYear('tanggal',$tahun)
          ->first();
          $total = $pemasukan_perbulan->total;
          if($pemasukan_perbulan->total == ""){
            echo "0,";
          }else{
            echo $total.",";
          }
        }
        ?>
        ]
    },
    {
      label: 'Pengeluaran',
      fillColor : "rgba(255, 51, 51, 0.8)",
      strokeColor : "rgba(248, 5, 5, 0.8)",
      highlightFill : "rgba(151,187,205,0.75)",
      highlightStroke : "rgba(151,187,205,1)",
      data : [
        <?php
        for($bulan=1;$bulan<=12;$bulan++){
          $tahun = date('Y');
          $pengeluaran_perbulan = DB::table('transaksi')
          ->select(DB::raw('SUM(nominal) as total'))
          ->where('jenis','Pengeluaran')
          ->whereMonth('tanggal',$bulan)
          ->whereYear('tanggal',$tahun)
          ->first();
          $total = $pengeluaran_perbulan->total;
          if($pengeluaran_perbulan->total == ""){
            echo "0,";
          }else{
            echo $total.",";
          }
        }
        ?>
        ]
    }
    ]

  }




  var barChartData2 = {
    labels : [
      <?php 
      $thn2 = DB::table('transaksi')
      ->select(DB::raw('year(tanggal) as tahun'))
      ->distinct()
      ->orderBy('tahun','asc')
      ->get();
      foreach($thn2 as $t){
        ?>
        "<?php echo $t->tahun; ?>",
        <?php 
      }
      ?>
      ],
    datasets : [
    {
      label: 'Pemasukan',
      fillColor : "rgba(51, 240, 113, 0.61)",
      strokeColor : "rgba(11, 246, 88, 0.61)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      data : [
        <?php
        foreach($thn2 as $t){
          $thn = $t->tahun;
          $tahun = DB::table('transaksi')
          ->select(DB::raw('SUM(nominal) as total'))
          ->where('jenis','Pemasukan')
          ->whereYear('tanggal',$thn)
          ->first();
          $total = $tahun->total;
          if($tahun->total == ""){
            echo "0,";
          }else{
            echo $total.",";
          }

        }
        ?>
        ]
    },
    {
      label: 'Pengeluaran',
      fillColor : "rgba(255, 51, 51, 0.8)",
      strokeColor : "rgba(248, 5, 5, 0.8)",
      highlightFill : "rgba(151,187,205,0.75)",
      highlightStroke : "rgba(254, 29, 29, 0)",
      data : [
        <?php
        foreach($thn2 as $t){
          $thn = $t->tahun;
          $tahun = DB::table('transaksi')
          ->select(DB::raw('SUM(nominal) as total'))
          ->where('jenis','Pengeluaran')
          ->whereYear('tanggal',$thn)
          ->first();
          $total = $tahun->total;
          if($tahun->total == ""){
            echo "0,";
          }else{
            echo $total.",";
          }

        }
        ?>
        ]
    }
    ]

  }

  var barChartData3 = {
    <?php
    $dateBegin = strtotime("first day of this month");  
    $dateEnd = strtotime("last day of this month");

    $awal = date("Y-m-d", $dateBegin);         
    $akhir = date("Y-m-d", $dateEnd);
    ?>
    labels : [
      <?php 
      for($a=$awal;$a<=$akhir;$a++){
        ?>
        "<?php echo date('d-m-Y',strtotime($a)) ?>",
        <?php 
      }
      ?>
      ],
    datasets : [
    {
      label: 'Pemasukan',
      fillColor : "rgba(51, 240, 113, 0.61)",
      strokeColor : "rgba(11, 246, 88, 0.61)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      data : [
        <?php 
        for($a=$awal;$a<=$akhir;$a++){
          $tgl = $a;
          $pemasukan_perhari = DB::table('transaksi')
          ->select(DB::raw('SUM(nominal) as total'))
          ->where('jenis','Pemasukan')
          ->whereDate('tanggal',$tgl)
          ->first();
          $total = $pemasukan_perhari->total;
          if($pemasukan_perhari->total == ""){
            echo "0,";
          }else{
            echo $total.",";
          }
        }
        ?>
        ]
    },{
      label: 'Pengeluaran',
      fillColor : "rgba(255, 51, 51, 0.8)",
      strokeColor : "rgba(248, 5, 5, 0.8)",
      highlightFill : "rgba(151,187,205,0.75)",
      highlightStroke : "rgba(254, 29, 29, 0)",
      data : [
        <?php 
        for($a=$awal;$a<=$akhir;$a++){
          $tgl = $a;
          $pemasukan_perhari = DB::table('transaksi')
          ->select(DB::raw('SUM(nominal) as total'))
          ->where('jenis','Pengeluaran')
          ->whereDate('tanggal',$tgl)        ->first();
          $total = $pemasukan_perhari->total;
          if($pemasukan_perhari->total == ""){
            echo "0,";
          }else{
            echo $total.",";
          }

        }
        ?>
        ]
    }
    ]

  }


  var barChartData4 = {
    labels : [
      @foreach($kategori as $k)
      "{{ $k->kategori }}",
      @endforeach
      ],
    datasets : [
    {
      label: 'Pemasukan',
      fillColor : "rgba(51, 240, 113, 0.61)",
      strokeColor : "rgba(11, 246, 88, 0.61)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      data : [
        @foreach($kategori as $k)
        <?php 
        $id_kategori = $k->id;
        $pemasukan_perkategori = DB::table('transaksi')
        ->select(DB::raw('SUM(nominal) as total'))
        ->where('jenis','Pemasukan')
        ->where('kategori_id',$id_kategori)
        ->first();
        $total = $pemasukan_perkategori->total;
        if($pemasukan_perkategori->total == ""){
          echo "0,";
        }else{
          echo $total.",";
        }
        ?>
        @endforeach
        ]
    },{
      label: 'Pengeluaran',
      fillColor : "rgba(255, 51, 51, 0.8)",
      strokeColor : "rgba(248, 5, 5, 0.8)",
      highlightFill : "rgba(151,187,205,0.75)",
      highlightStroke : "rgba(254, 29, 29, 0)", 
      data : [
        @foreach($kategori as $k)
        <?php 
        $bln = date('m');
        $id_kategori = $k->id;
        $pemasukan_perkategori = DB::table('transaksi')
        ->select(DB::raw('SUM(nominal) as total'))
        ->where('jenis','Pengeluaran')
        ->where('kategori_id',$id_kategori)
        ->whereMonth('tanggal',$bln)
        ->first();
        $total = $pemasukan_perkategori->total;
        if($pemasukan_perkategori->total == ""){
          echo "0,";
        }else{
          echo $total.",";
        }
        ?>
        @endforeach
        ]
    }
    ]

  }



  window.onload = function(){
    var ctx = document.getElementById("grafik1").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
     responsive : true,
     animation: true,
     barValueSpacing : 5,
     barDatasetSpacing : 1,
     tooltipFillColor: "rgba(0,0,0,0.8)",
     multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
   });

    var ctx = document.getElementById("grafik2").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData2, {
     responsive : true,
     animation: true,
     barValueSpacing : 5,
     barDatasetSpacing : 1,
     tooltipFillColor: "rgba(0,0,0,0.8)",
     multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
   });

    var ctx = document.getElementById("grafik3").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData3, {
     responsive : true,
     animation: true,
     barValueSpacing : 5,
     barDatasetSpacing : 1,
     tooltipFillColor: "rgba(0,0,0,0.8)",
     multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
   });

    var ctx = document.getElementById("grafik4").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData4, {
     responsive : true,
     animation: true,
     barValueSpacing : 5,
     barDatasetSpacing : 1,
     tooltipFillColor: "rgba(0,0,0,0.8)",
     multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
   });

  }





</script>

@endsection