<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logo.png"  type="image/x-icon" />
    <title>Micro Weather Station</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB20pvEhakA02_0UsZl0V2VnmPy7wCthvo"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Include jQuery and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Include moment.js library for time zone conversion -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.32/moment-timezone-with-data.min.js"></script>
  <!-- Style for the clock -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
  $(document).ready(function() {
    var table = $('#example').DataTable({
      "paging": true,
      "searching": true,
      "lengthChange": false,
      "ordering": false
    });

    // create a new DataTable object for the search results table in the modal
    var searchResultsTable = $('#searchResultsTable').DataTable({
      "searching": false,
      "lengthChange": false,
      "ordering": false,
      "info": true,
      "scrollY": "400px",
      "scrollCollapse": true,
      "columns": [
        { "title": "Device ID" },
        { "title": "Lat" },
        { "title": "Long" },
        { "title": "Rain" },
        { "title": "Temperature" },
        { "title": "Humidity" },
        { "title": "Pressure" },
        { "title": "Timestamp" },
      ]
    });

    // add custom filtering function to filter based on "Rain" column value
    $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
      var searchValue = $('#example_filter input').val().toLowerCase();
      var rainValue = data[3].toLowerCase();
      if (searchValue === "raining" && rainValue !== "raining") {
        return false; // exclude rows where "Rain" column is not "Raining" when searching for "Raining"
      }
      return true;
    });

    // listen for search input changes
    $('#example_filter input').on('keyup', function(e) {
      if (e.keyCode === 13) { // check if Enter key was pressed
        // filter the table based on the search value
        table.draw();

        // show the modal with the search results
        $('#myModal').modal('show');
      }
    });

    // get the search results and display them in the modal
    $('#myModal').on('show.bs.modal', function() {
      var results = table.rows({search: 'applied'}).data();
      searchResultsTable.clear(); // clear any previous results

      // add the search results to the search results table
      if (results.length > 0) {
        searchResultsTable.rows.add(results).draw();
      } else {
        searchResultsTable.row.add(['No results found.', '', '', '', '', '', '', '']).draw();
      }
    });
  });
</script>

    <script>
      function initMap() {
      var myLatLng = {lat: 7.635433, lng: 124.978400 };
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 7.635433, lng: 124.978400 },
        zoom: 10
      });
      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'DAVAD Residence'
      });
   // Add click event listener to marker
        marker.addListener('click', function() {
        // Display modal when marker is clicked
        $('#exampleModal').modal('show');
    });
        }
    </script>
    <style>
     header {
  position: sticky;
  top: 0;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0,0,0,.1);
  z-index: 999;
}

.navbar {
  padding: 0 20px;
}

.navbar-brand img {
  height: 60px;
}

.navbar-nav .nav-link {
  font-size: 16px;
  font-weight: 600;
  color: #555;
  padding: 8px 16px;
  transition: all 0.2s ease-in-out;
}

.navbar-nav .nav-link:hover {
  color: #333;
}

.navbar-nav .active .nav-link {
  color: #333;
  border-bottom: 2px solid #333;
}

      #map {
        width: 100%;
        height:100%;
        margin-bottom:50px;
        } 
    th, td {
        text-align: center;
    }
    .dataTables_filter {
        float: right;
        margin-bottom: 20px;
    }
    .banner {
        background-color: #007bff;
        padding: 10px;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .banner img {
        height: 50px;
    }
    .banner a {
        color: #fff;
        margin-left: 10px;
    }
    .navbar-nav {
        margin-left: auto;
    }
    .navbar-nav .nav-item {
        margin-left: 10px;
    }
    @media (max-width: 767px) {
        .navbar-nav {
            margin-left: 0;
            margin-top: 10px;
        }
        .navbar-nav .nav-item {
            margin-left: 0;
            margin-top: 10px;
        }
    }
    .navbar-brand img{
        width: 120px;
        margin-left:20px;
    }
    .weather-header {
    padding: 20px;
    text-align: center;
    background:#28db9a;
  }
  
  h2 {
    color: #333;
    font-size: 25px;
    font-weight: bold;
    margin: 0;
    margin-bottom:10px
  }
  .team{
    margin-bottom:20px;
    text-align:center;
    font-size:50px;
    margin-top:30px;
  }
  
</style>
<style>
    #clock {
      font-size: 0.8rem;
      font-weight: bold;
      text-align: right;
      margin-bottom:15px;
    }
    .clock-box {
      background-color: white;
      color: #c0392b;
      padding: 10px;
      border-radius: 5px;
      border: 2px solid #c0392b;
      display: inline-block;
      margin: 3px;
      text-align: center;
      }
      /* custom css styles */
      .card1 {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding-top:20px;
        padding-bottom:50px;
        margin-bottom:50px;
      }

      .card-title {
        font-weight: bold;
        margin-bottom: 0.5rem;
      }

      .card-text {
        font-size: 0.9rem;
        line-height: 1.4;
        text-align: justify;
      }
      .container {
  margin-top: 50px;
}

form {
  background-color: #f5f5f5;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

form input[type="submit"] {
  background-color: #007bff;
  color: #fff;
}

form input[type="submit"]:hover {
  background-color: #0069d9;
}
#rainLegend {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 10px;
  font-size: 16px;
}

#rainLegend .box {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin-right: 5px;
  margin-left:10px;
}

#rainLegend .legend-text {
  margin-left: 10px;
}
.card {
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.5);
  padding-top:40px;
  padding-bottom:90px;
}

.container {
  padding: 20px;
}

.content {
  display: flex;
}

.left-side, .right-side {
  flex: 1;
  padding: 10px;
}

.left-side {
  border-right: 1px solid #ccc;
}

.right-side {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.details {
  margin-bottom: 20px;
}

.topic {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

.text-one, .text-two {
  font-size: 16px;
  margin-bottom: 3px;
}

.topic-text {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}
.carousel-inner img {
        width: 100%;
        height: 40%;
      }
      .carousel-caption {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        border-radius: 10px;
      }
      .radio-container {
  display: flex;
  justify-content: center;
  padding-left: 30px;
}

.radio-container input[type="radio"] {
  margin: 0 10px;
}

  </style>
</head>
<body onload="initMap()">

<header>
	<nav class="navbar navbar-expand-md navbar-light bg-light">
		<a class="navbar-brand" href="#"><img src="img/3.png" alt="Company Logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item<?php if($page == 'home') echo ' active'; ?>">
					<a class="nav-link" href="?page=home">Home</a>
				</li>
				<li class="nav-item<?php if($page == 'about') echo ' active'; ?>">
					<a class="nav-link" href="?page=about">About Us</a>
				</li>
				<li class="nav-item<?php if($page == 'contact') echo ' active'; ?>">
					<a class="nav-link" href="?page=contact">Contact</a>
				</li>
				<li class="nav-item <?php if($page == 'weather') echo ' active'; ?>">
					<a class="nav-link" href="?page=weather">Weather Sensors</a>
				</li>
			</ul>
		</div>
	</nav>
</header>

	<main>
		<?php 
			if(isset($_GET['page'])) {
				$page = $_GET['page'];
				if($page == 'about') {
					include 'aboutus.php';
				} else if($page == 'contact') {
					include 'contact.php';
        } else if($page == 'weather') {
					include 'weather.php';
				} else {
					include 'home.php';
				}
			} else {
				include 'home.php';
			}
		?>
	</main>

  <!-- JavaScript to update the clock every second -->
  <script>
    $(document).ready(function() {
      setInterval(function() {
        var currentTime = moment().tz("Asia/Manila").format("h:mm:ss A");
        var currentDate = moment().tz("Asia/Manila").format("MMMM DD, YYYY");
        $("#clock").html("<div class='clock-box'><div>Philippine Standard Time:</div>" + currentTime + "<div>" + currentDate + "</div></div>");
      }, 1000);
    });
  </script>
  <footer class="py-3" style="background-color:#212529; color:white;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod semper justo, sit amet venenatis odio rutrum vel.</p>
      </div>
      <div class="col-md-3">
        <h3>Quick Links</h3>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>Contact Us</h3>
        <ul class="list-unstyled">
          <li><i class="fas fa-map-marker-alt"></i> 123 Main St, New York, NY 10001</li>
          <li><i class="fas fa-phone"></i> (123) 456-7890</li>
          <li><i class="fas fa-envelope"></i> info@example.com</li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-6">
      <p>&copy; Micro Weather Station</p>
      </div>
      <div class="col-md-6">
        <ul class="list-inline text-md-end">
          <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<script>
// Initialize the chart with the retrieved data and options
var ctx = document.getElementById('rainValueChart').getContext('2d');
var rainValueChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($timestamps); ?>,
    datasets: [{
      label: 'Rain',
      data: <?php echo json_encode($rainValues); ?>,
      borderColor: 'rgba(54, 162, 235, 1)',
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderWidth: 1,
      pointBackgroundColor: function(context) {
        var value = context.dataset.data[context.dataIndex];
        if (value >= 800) {
          return 'blue';
        } else if (value >= 300 && value < 800) {
          return 'yellow';
        } else {
          return 'red';
        }
      }
    }]
  },
  options: {
    scales: {
      xAxes: [{
        type: 'time',
        time: {
          unit: 'hour',
          displayFormats: {
            hour: 'MMM D hA'
          }
        },
        distribution: 'linear'
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: true,
      labels: {
        fontColor: 'black',
        fontSize: 16,
        usePointStyle: true,
        generateLabels: function(chart) {
          var labels = [];
          var data = chart.data;
          var datasets = data.datasets;
          var dataset = datasets[0];
          var values = dataset.data;
          var colors = dataset.pointBackgroundColor;
          var valueLabels = [
            { text: 'Not Raining', min: 0, max: 299 },
            { text: 'Light Rain', min: 300, max: 799 },
            { text: 'Heavy Rain', min: 800, max: 2040 }
          ];
          valueLabels.forEach(function(label) {
            labels.push({
              text: label.text,
              fillStyle: colors[0],
              strokeStyle: colors[0],
              pointStyle: 'circle'
            });
          });
          return labels;
        }
      }
    }
  }
});
</script>

<script>
// Initialize the chart with the retrieved data and options
var ctx = document.getElementById('temperatureValueChart').getContext('2d');
var temperatureValueChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($timestamps); ?>,
    datasets: [{
      label: 'Temperature',
      data: <?php echo json_encode($temperatureValues); ?>,
      borderColor: 'rgba(255, 99, 132, 1)',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderWidth: 1,
      pointBackgroundColor: function(context) {
        var value = context.dataset.data[context.dataIndex];
        if (value >= 30) {
          return 'red';
        } else if (value >= 15 && value < 30) {
          return 'yellow';
        } else {
          return 'blue';
        }
      }
    }]
  },
  options: {
    scales: {
      xAxes: [{
        type: 'time',
        time: {
          unit: 'hour',
          displayFormats: {
            hour: 'MMM D hA'
          }
        },
        distribution: 'linear'
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: true,
      labels: {
        fontColor: 'black',
        fontSize: 16,
        usePointStyle: true,
        generateLabels: function(chart) {
          var labels = [];
          var data = chart.data;
          var datasets = data.datasets;
          var dataset = datasets[0];
          var values = dataset.data;
          var colors = dataset.pointBackgroundColor;
          var valueLabels = [
            { text: 'Cool', min: 0, max: 14 },
            { text: 'Warm', min: 15, max: 29 },
            { text: 'Hot', min: 30, max: 100 }
          ];
          valueLabels.forEach(function(label) {
            labels.push({
              text: label.text,
              fillStyle: colors[0],
              strokeStyle: colors[0],
              pointStyle: 'circle'
            });
          });
          return labels;
        }
      }
    }
  }
});
</script>
<script>
// Initialize the chart with the retrieved data and options
var ctx = document.getElementById('humidityChart').getContext('2d');
var humidityChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($timestamps); ?>,
    datasets: [{
      label: 'Humidity',
      data: <?php echo json_encode($humidityValues); ?>,
      borderColor: 'rgba(255, 159, 64, 1)',
      backgroundColor: 'rgba(255, 159, 64, 0.2)',
      borderWidth: 1,
      pointBackgroundColor: function(context) {
        var value = context.dataset.data[context.dataIndex];
        if (value >= 41) {
          return 'red';
        } else if (value >= 21 && value < 41) {
          return 'yellow';
        } else {
          return 'blue';
        }
      }
    }]
  },
  options: {
    scales: {
      xAxes: [{
        type: 'time',
        time: {
          unit: 'hour',
          displayFormats: {
            hour: 'MMM D hA'
          }
        },
        distribution: 'linear'
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: true,
      labels: {
        fontColor: 'black',
        fontSize: 16,
        usePointStyle: true,
        generateLabels: function(chart) {
          var labels = [];
          var data = chart.data;
          var datasets = data.datasets;
          var dataset = datasets[0];
          var values = dataset.data;
          var colors = dataset.pointBackgroundColor;
          var valueLabels = [
            { text: 'Low', min: 0, max: 20 },
            { text: 'Moderate', min: 21, max: 40 },
            { text: 'High', min: 41, max: 100 }
          ];
          valueLabels.forEach(function(label) {
            labels.push({
              text: label.text,
              fillStyle: colors[0],
              strokeStyle: colors[0],
              pointStyle: 'circle'
            });
          });
          return labels;
        }
      }
    }
  }
});
</script>
<script>
// Initialize the chart with the retrieved data and options
var ctx = document.getElementById('pressureChart').getContext('2d');
var pressureChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($timestamps); ?>,
    datasets: [{
      label: 'Pressure',
      data: <?php echo json_encode($pressureValues); ?>,
      borderColor: function(context) {
        var value = context.dataset.data[context.dataIndex];
        if (value >= 10000) {
          return 'blue';
        } else if (value >= 1006 && value < 1013) {
          return 'yellow';
        } else {
          return 'red';
        }
      },
      backgroundColor: function(context) {
        var value = context.dataset.data[context.dataIndex];
        if (value >= 1013) {
          return 'rgba(54, 162, 235, 0.2)';
        } else if (value >= 1006 && value < 1013) {
          return 'rgba(255, 206, 86, 0.2)';
        } else {
          return 'rgba(255, 99, 132, 0.2)';
        }
      },
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      xAxes: [{
        type: 'time',
        time: {
          unit: 'hour',
          displayFormats: {
            hour: 'MMM D hA'
          }
        },
        distribution: 'linear'
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: true,
      labels: {
        fontColor: 'black',
        fontSize: 16,
        usePointStyle: true,
        generateLabels: function(chart) {
          var labels = [];
          var data = chart.data;
          var datasets = data.datasets;
          var dataset = datasets[0];
          var values = dataset.data;
          var colors = dataset.borderColor;
          var valueLabels = [
            { text: 'Low', min: 0, max: 1006 },
            { text: 'Moderate', min: 1006, max: 1013 },
            { text: 'High', min: 1013, max: 2000 }
          ];
          valueLabels.forEach(function(label, index) {
            labels.push({
              text: label.text,
              fillStyle: colors[index],
              strokeStyle: colors[index],
              pointStyle: 'circle'
            });
          });
          return labels;
        }
      }
    }
  }
});
</script>

<!-- Initialize the chart with the retrieved data and options -->
<script>
var ctx = document.getElementById('windSpeedChart').getContext('2d');
var windSpeedChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($timestamps); ?>,
    datasets: [{
      label: 'Wind Speed',
      data: <?php echo json_encode($windSpeedValues); ?>,
      borderColor: function(context) {
        var value = context.dataset.data[context.dataIndex];
        if (value >= 20) {
          return 'red';
        } else if (value >= 10 && value < 20) {
          return 'yellow';
        } else {
          return 'green';
        }
      },
      backgroundColor: function(context) {
        var value = context.dataset.data[context.dataIndex];
        if (value >= 20) {
          return 'rgba(255, 99, 132, 0.2)';
        } else if (value >= 10 && value < 20) {
          return 'rgba(255, 206, 86, 0.2)';
        } else {
          return 'rgba(75, 192, 192, 0.2)';
        }
      },
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      xAxes: [{
        type: 'time',
        time: {
          unit: 'hour',
          displayFormats: {
            hour: 'MMM D hA'
          }
        },
        distribution: 'linear'
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: true,
      labels: {
        fontColor: 'black',
        fontSize: 16,
        usePointStyle: true,
        generateLabels: function(chart) {
          var labels = [];
          var data = chart.data;
          var datasets = data.datasets;
          var dataset = datasets[0];
          var values = dataset.data;
          var colors = dataset.borderColor;
          var valueLabels = [
            { text: 'Low', min: 0, max: 10 },
            { text: 'Moderate', min: 10, max: 20 },
            { text: 'High', min: 20, max: 2000 }
          ];
          valueLabels.forEach(function(label, index) {
            labels.push({
              text: label.text,
              fillStyle: colors[index],
              strokeStyle: colors[index],
              pointStyle: 'circle'
            });
          });
          return labels;
        }
      }
    }
  }
});
</script>
<script>
  function showChart(chartId) {
  var charts = ['rainValueChart', 'temperatureValueChart', 'humidityChart', 'pressureChart', 'windSpeedChart'];
  
  // hide all charts
  for (var i = 0; i < charts.length; i++) {
    document.getElementById(charts[i]).style.display = 'none';
  }
  
  // show selected chart
  document.getElementById(chartId).style.display = 'block';
}

  </script>
</body>
</html>
