<!-- Page Heading -->
<?php 	
function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}
 ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800"><?= $tittle?></h1>
</div>
<div class="row">
	<div class="col-4">
	  <div class="card border-left-primary shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pesanan Hari ini</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pesanan['jumlah'] ?> Pesanan</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-calendar fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-4">
	  <div class="card border-left-success shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Masuk Hari ini</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_barang_masuk['jumlah'] ?> Barang</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-4">
	  <div class="card border-left-success shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Keluar Hari ini</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_barang_keluar['jumlah'] ?> Barang</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-cog fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-4">
	  <div class="card border-left-primary shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pesanan Minggu ini</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pesanan_minggu['jumlah'] ?> Pesanan</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-calendar fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-4">
	  <div class="card border-left-success shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Masuk Minggu ini</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_barang_masuk_minggu['jumlah'] ?> Barang</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-4">
	  <div class="card border-left-success shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Keluar Minggu ini</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_barang_keluar_minggu['jumlah'] ?> Barang</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-cog fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-4">
	  <div class="card border-left-primary shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pesanan Bulan ini</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pesanan_bulan['jumlah'] ?> Pesanan</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-calendar fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>


	<div class="col-4">
	  <div class="card border-left-success shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Masuk Bulan ini</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_barang_masuk_bulan['jumlah'] ?> Barang</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-4">
	  <div class="card border-left-success shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Keluar Bulan ini</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_barang_keluar_bulan['jumlah'] ?> Barang</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-cog fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-8">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Satatistik data barang keluar akhir ini</h6>
          
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-area">
            <canvas id="myAreaChartkategori"></canvas>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Katogori Paling Populer</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChartKategori"></canvas>
                  </div>
                  
                </div>
              </div>
            </div>

</div>
<script src="<?= base_url('assets/')?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/')?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/')?>js/demo/chart-pie-demo.js"></script>
<script type="text/javascript">
var ctx = document.getElementById("myAreaChartkategori");
const random_hex_color_code = () => {
  let n = (Math.random() * 0xfffff * 1000000).toString(16);
  return '#' + n.slice(0, 6);
};
var myLineChart = new Chart(ctx, {
  type: 'bar',
   data: {
        datasets: [
       	<?php $i=0;$j=0; foreach ($barang_barang_paling_laku_bulan as $a){
       	$jum = $this->db->query("select selected_date,
			IFNULL((select sum(jumlah) from t_barang_keluar_detail kd, t_barang_keluar k where kd.no_faktur = k.no_faktur and tanggal_keluar = selected_date and kd.id_barang = '$a[id]'),0) jumlah
			from 
			(select adddate('1970-01-01',t4.i*10000 + t3.i*1000 + t2.i*100 + t1.i*10 + t0.i) selected_date from
			 (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t0,
			 (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t1,
			 (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t2,
			 (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t3,
			 (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t4) v
			where selected_date between NOW() - INTERVAL 10 DAY and now()"
		)->result_array();

			$color = "#".substr(md5(rand()), 0, 6);
			$rgba = hex2rgba($color, 0.1);
       	?>
	        {
	            label: '<?= $a['nama_barang']?>',
	            data: [
	            	<?php foreach ($jum as $j) {
	            		echo "'".$j['jumlah']."',";
	            	}?>
	            ],
	            type: 'line',
	            lineTension: 0.3,
			    //fill: false,
			    fillOpacity: 0.1,
			    backgroundColor	:'<?= $rgba ?>',
			    borderColor: '<?= $color ?>',
			    pointRadius: 3,
			    pointBackgroundColor: '<?= $color ?>',
			    pointBorderColor: '<?= $color ?>',
			    pointHoverRadius: 3,
			    pointHoverBackgroundColor: '<?= $color ?>',
			    pointHoverBorderColor: '<?= $color ?>',
			    pointHitRadius: 10,
			    pointBorderWidth: 2,
	            // this dataset is drawn on top
	            order: 1
	        },
	    <?php }; ?>
        ],
        labels: [
        	<?php foreach ($jum as $j) {
        		echo "'".$j['selected_date']."',";
        	}?>
        ]
    },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      // xAxes: [{
      //   time: {
      //     unit: 'date'
      //   },
      //   gridLines: {
      //     display: false,
      //     drawBorder: false
      //   },
      //   ticks: {
      //     maxTicksLimit: 7
      //   }
      // }],
      // yAxes: [{
      //   ticks: {
      //     maxTicksLimit: 5,
      //     padding: 10,
      //     // Include a dollar sign in the ticks
      //     callback: function(value, index, values) {
      //       return '$' + number_format(value);
      //     }
      //   },
      //   gridLines: {
      //     color: "rgb(234, 236, 244)",
      //     zeroLineColor: "rgb(234, 236, 244)",
      //     drawBorder: false,
      //     borderDash: [2],
      //     zeroLineBorderDash: [2]
      //   }
      // }],
    },
    legend: {
      //display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      //intersect: false,
      //mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel +  number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});









var ct = document.getElementById("myPieChartKategori");
var myPieChart = new Chart(ct, {
  type: 'doughnut',
  data: {
    labels: [
    	<?php foreach ($barang_kategori_paling_laku_bulan as $data) {
    		echo "'".$data['nama_kategori']."',";
    	}?>
    ],
    datasets: [{
      data: [
      	<?php foreach ($barang_kategori_paling_laku_bulan as $data) {
    		echo $data['jumlah'].",";
    	}?>
      ],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      //display: false
    },
    cutoutPercentage: 0,
  },
});
</script>
