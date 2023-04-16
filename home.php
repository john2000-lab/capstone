<div style="background-image: url('img/background.jpg'); height: 500px; background-position: center; display: grid; grid-template-columns: repeat(3, 1fr); background-repeat: no-repeat; background-size: cover;">
  <div style="display: flex; flex-direction: column; justify-content: center; height: 100%; padding-left: 50px; grid-column: 1 / 2;">
    <h2 style="font-size: 45px; color: #fff; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Stay ahead of the weather, with our Micro Weather Station -</h2>
    <h6 style="color: #fff;">Your local source for accurate and reliable weather information in Bukidnon.</h6>
  </div>
</div>
<div class="container-fluid" style="margin: 5px;">
        <div class="row">
          <div class="col-md-10">
          <div class="weather-header">
  <marquee><h2>Daily Local Weather Update: Real-Time Data and Accurate Predictions to Plan Your Day  </h2></marquee>
</div>
          </div>
          <div class="col-md-2">
            <div id="clock"> </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-4">
          <div id="map" style="height:760px"></div>
          <!-- Modal for table display -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <?php
        // Establish a database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "weather_data";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve the device_id from the rain_data table
        $sql = "SELECT location FROM pressure_data LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $device_id = $row["location"];
        } else {
          $device_id = "Unknown Device";
        }

        // Close the database connection
        mysqli_close($conn);

        // Display the modal header with the device_id
        echo '<h5 class="modal-title" id="exampleModalLabel">' . $device_id . ' -  Current Weather Report</h5>';
        ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="width:100%;">
        <table class="table mt-3">
          <thead>
            <tr>
              <th>Temperature</th>
              <th>Humidity</th>
              <th>Pressure</th>
              <th>Wind Speed</th>
            </tr>
          </thead>
          <tbody>
            
            <?php
            // Establish a database connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

          // Retrieve the weather data from the three tables using JOIN statements
            $sql = "SELECT rain_data.rainStatus, rain_data.timestamp, temperature_data.temperatureStatus, humidity_data.humidityStatus, pressure_data.pressure, wind_speed_data.wind_speed FROM rain_data JOIN temperature_data ON rain_data.id = temperature_data.id JOIN humidity_data ON rain_data.id = humidity_data.id JOIN pressure_data ON rain_data.id = pressure_data.id JOIN wind_speed_data ON rain_data.id = wind_speed_data.id ORDER BY rain_data.timestamp DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
              echo '<tr>';
              echo '<td>' . $row["temperatureStatus"] . '</td>';
              echo '<td>' . $row["humidityStatus"] . '</td>';
              echo '<td>' . $row["pressure"] . '</td>';
              echo '<td>' . $row["wind_speed"]."km/h". '</td>';
              echo '</tr>';
            } else {
              echo '<tr><td colspan="4">No data found</td></tr>';
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
          </tbody>
        </table>
        <div class="radio-container">
          <input type="radio" name="chart" value="rainValueChart" onclick="showChart(this.value)">Rain
          <input type="radio" name="chart" value="temperatureValueChart" onclick="showChart(this.value)">Temperature
          <input type="radio" name="chart" value="humidityChart" onclick="showChart(this.value)">Humidity
          <input type="radio" name="chart" value="pressureChart" onclick="showChart(this.value)">Pressure
          <input type="radio" name="chart" value="windSpeedChart" onclick="showChart(this.value)">Wind
        </div>
          <canvas id="rainValueChart"></canvas>
          <canvas id="temperatureValueChart"></canvas>
          <canvas id="humidityChart"></canvas>
          <canvas id="pressureChart"></canvas>
          <canvas id="windSpeedChart"></canvas>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
          </div>
          </div>
          </div>
<!-- HTML code for the modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog custom-modal-dialog" role="document">
    <div class="modal-content" style="width:160%">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Search Results</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <table id="searchResultsTable" class="display" style="width:100%"></table>
      </div>
    </div>
  </div>
</div>
        <div class="col-md-8">
        <table id="example" class="table table-bordered table-hover" style="font-size: 14px;">
    <thead class="thead-dark">
        <tr>
            <th>Device</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Rain</th>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Pressure</th>
            <th>Wind Speed</th>
            <th>Date/Time</th>
        </tr>
    </thead>
    <tbody>
    <?php
        // Connect to the database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "weather_data";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the latest 20 records from the rain_data table
$sql = "SELECT rain_data.Id, rain_data.device_id, rain_data.latitude, rain_data.longitude, rain_data.rainfallIntensity, rain_data.rainStatus, temperature_data.temperatureStatus, humidity_data.humidityStatus, pressure_data.pressure, wind_speed_data.wind_speed, rain_data.timestamp FROM rain_data JOIN temperature_data ON rain_data.id = temperature_data.id JOIN humidity_data ON rain_data.id = humidity_data.id JOIN pressure_data ON rain_data.id = pressure_data.id JOIN wind_speed_data ON rain_data.id = wind_speed_data.id ORDER BY rain_data.timestamp DESC";
$result = mysqli_query($conn, $sql);

// Create the datatable rows
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['device_id']."</td>";          
    echo "<td>".$row['latitude']."</td>";
    echo "<td>".$row['longitude']."</td>";
    echo "<td>".$row['rainStatus']."</td>";
    echo "<td>".$row['temperatureStatus']."</td>";
    echo "<td>".$row['humidityStatus']."</td>";
    echo "<td>".$row['pressure']."</td>";
    echo "<td>".$row['wind_speed']."km/h"."</td>";
    echo "<td>".$row['timestamp']."</td>";
    echo "</tr>";
}

// Close the database connection
mysqli_close($conn);

          ?>

        </tbody>
          </table>

          </div>
        </div>
    </div>
  </div>
 <!-- <div class="container-fluid">
  <div class="row">
        <div class="col-sm-6">
            <div id="rainLegend">
            <span class="box" style="background-color: blue;"></span>
            <span class="legend-text">Not Raining</span>
            <span class="box" style="background-color: yellow;"></span>
            <span class="legend-text">Light Rain</span>
            <span class="box" style="background-color: red;"></span>
            <span class="legend-text">Heavy Rain</span>
            </div>
            <canvas id="rainValueChart"></canvas>
                <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "weather_data";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query the rain_data table to retrieve the rainValue and timestamp data
                $sql = "SELECT rainfallIntensity, timestamp FROM rain_data ORDER BY timestamp DESC LIMIT 20";
                $result = $conn->query($sql);
                
                // Initialize empty arrays for rainValue and timestamp data
                $rainValues = array();
                $timestamps = array();
                
                // Store the retrieved data in the arrays
                while($row = $result->fetch_assoc()) {
                  array_unshift($rainValues, $row["rainfallIntensity"]);
                  array_unshift($timestamps, $row["timestamp"]);
                }

                // Close the database connection
                $conn->close();
                ?>
        </div>

        <div class="col-sm-6">
        <div id="rainLegend">
            <span class="box" style="background-color: blue;"></span>
            <span class="legend-text">Cool</span>
            <span class="box" style="background-color: orange;"></span>
            <span class="legend-text">Warm</span>
            <span class="box" style="background-color: red;"></span>
            <span class="legend-text">Hot</span>
            </div>
        <canvas id="temperatureValueChart"></canvas>
        <?php
            // Connect to the database
            $db_host = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "weather_data";

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve data from the temperature_data table
            $sql = "SELECT temperatureValue, timestamp FROM temperature_data ORDER BY timestamp DESC LIMIT 20";
            $result = mysqli_query($conn, $sql);

            // Create arrays to store the temperature values and timestamps
            $temperatureValues = array();
            $timestamps = array();

            // Populate the arrays with data from the database
            while ($row = mysqli_fetch_assoc($result)) {
                $temperatureValues[] = $row['temperatureValue'];
                $timestamps[] = $row['timestamp'];
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
</div>
<div class="container-fluid">
  <div class="row">
          <div class="col-6">
          <div id="rainLegend">
            <span class="box" style="background-color: blue;"></span>
            <span class="legend-text">Low</span>
            <span class="box" style="background-color: orange;"></span>
            <span class="legend-text">Moderate</span>
            <span class="box" style="background-color: red;"></span>
            <span class="legend-text">High</span>
            </div>
          <canvas id="humidityChart"></canvas>
          <?php
            // Connect to the database
            $db_host = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "weather_data";

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve data from the temperature_data table
            $sql = "SELECT humidityValue, timestamp FROM humidity_data ORDER BY timestamp DESC LIMIT 20";
            $result = mysqli_query($conn, $sql);

            // Create arrays to store the temperature values and timestamps
            $humidityValues = array();
            $timestamps = array();

            // Populate the arrays with data from the database
            while ($row = mysqli_fetch_assoc($result)) {
                $humidityValues[] = $row['humidityValue'];
                $timestamps[] = $row['timestamp'];
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>

        <div class="col-sm-6">
        <div id="rainLegend">
            <span class="box" style="background-color: blue;"></span>
            <span class="legend-text">Low</span>
            <span class="box" style="background-color: orange;"></span>
            <span class="legend-text">Moderate</span>
            <span class="box" style="background-color: red;"></span>
            <span class="legend-text">High</span>
            </div>
        <canvas id="pressureChart"></canvas>
                  <?php
          // Database connection
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "weather_data";
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // Query the pressure_data table to retrieve the pressureValue and timestamp data
          $sql = "SELECT pressure, timestamp FROM pressure_data ORDER BY timestamp DESC LIMIT 20";
          $result = $conn->query($sql);

          // Initialize empty arrays for pressureValue and timestamp data
          $pressureValues = array();
          $timestamps = array();

          // Store the retrieved data in the arrays
          while($row = $result->fetch_assoc()) {
            array_unshift($pressureValues, $row["pressure"]);
            array_unshift($timestamps, $row["timestamp"]);
          }

          // Close the database connection
          $conn->close();
          ?>
        </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
    <div id="rainLegend">
            <span class="box" style="background-color: blue;"></span>
            <span class="legend-text">Cool</span>
            <span class="box" style="background-color: orange;"></span>
            <span class="legend-text">Warm</span>
            <span class="box" style="background-color: red;"></span>
            <span class="legend-text">Hot</span>
            </div>
          <canvas id="windSpeedChart"></canvas>
          <?php
            // Connect to the database
            $db_host = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "weather_data";

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve data from the temperature_data table
            $sql = "SELECT wind_speed, timestamp FROM wind_speed_data ORDER BY timestamp DESC LIMIT 20";
            $result = mysqli_query($conn, $sql);

            // Create arrays to store the temperature values and timestamps
            $windSpeedValues = array();
            $timestamps = array();

            // Populate the arrays with data from the database
            while ($row = mysqli_fetch_assoc($result)) {
                $windSpeedValues[] = $row['wind_speed'];
                $timestamps[] = $row['timestamp'];
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
      </div>
  </div>
</div>-->

