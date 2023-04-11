<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="img/sensor4.png" class="card-img" alt="BMP280 Weather Sensor">
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">BMP280 Weather Sensor</h5>
              <p class="card-text">The BMP280 is a digital barometric pressure sensor that can measure both atmospheric pressure and temperature. It works by sensing changes in air pressure and converting these changes into a digital output that can be read by a microcontroller. This sensor is commonly used in weather stations and can be used to measure altitude, as well as other environmental variables.</p>
              <table class="table table-bordered">
            <tbody>
              <tr>
                <td>Pressure range</td>
                <td>300 - 1100 hPa</td>
              </tr>
              <tr>
                <td>Pressure accuracy</td>
                <td>±1 hPa</td>
              </tr>
              <tr>
                <td>Temperature range</td>
                <td>-40°C to 85°C</td>
              </tr>
              <tr>
                <td>Temperature accuracy</td>
                <td>±1°C</td>
              </tr>
              <tr>
                <td>Interface</td>
                <td>I2C and SPI</td>
              </tr>
              <tr>
                <td>Dimensions</td>
                <td>2.5mm x 2.5mm x 0.93mm</td>
              </tr>
            </tbody>
          </table>
              <p class="card-text">Reference: <a href="https://cdn.sparkfun.com/assets/learn_tutorials/4/1/9/BST-BMP280-DS001-11.pdf">BMP280 Datasheet</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="img/sensor3.png" class="card-img" alt="Anemometer Weather Sensor">
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Anemometer Weather Sensor</h5>
              <p class="card-text">An anemometer is a device used for measuring wind speed and direction. The most common type of anemometer is the cup anemometer, which consists of three or four cups mounted on a vertical shaft. As the wind blows, the cups rotate and this rotation is converted into a digital output that can be read by a microcontroller.</p>
                <table class="table table-bordered">
                <tbody>
                <tr>
                    <td>Wind speed range</td>
                    <td>0 - 32.4 m/s</td>
                </tr>
                <tr>
                    <td>Wind speed accuracy</td>
                    <td>±0.5 m/s</td>
                </tr>
                <tr>
                    <td>Wind direction range</td>
                    <td>0 - 359 degrees</td>
                </tr>
                <tr>
                    <td>Wind direction accuracy</td>
                    <td>±10 degrees</td>
                </tr>
                <tr>
                    <td>Output signal</td>
                    <td>Pulse output (2 pulses per revolution of anemometer cups)</td>
                </tr>
                <tr>
                    <td>Dimensions</td>
                    <td>134mm x 134mm x 321mm</td>
                </tr>
                </tbody>
            </table>
              <p class="card-text">Reference: <a href="https://www.campbellsci.com/anemometer">Campbell Scientific Anemometer</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="img/sensor2.png" class="card-img" alt="DHT22 Weather Sensor">
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">DHT22 Weather Sensor</h5>
              <p class="card-text">The DHT22 is a digital temperature and humidity sensor that uses a capacitive humidity sensor and a thermistor to measure the surrounding air. It works by sensing changes in capacitance and temperature, and can provide accurate and reliable data in a wide range of applications.</p>
              <table class="table table-bordered">
                <tbody>
                    <tr>
                    <td>Temperature range</td>
                    <td>-40°C to 80°C</td>
                    </tr>
                    <tr>
                    <td>Temperature accuracy</td>
                    <td>±0.5°C</td>
                    </tr>
                    <tr>
                    <td>Humidity range</td>
                    <td>0% to 100% RH</td>
                    </tr>
                    <tr>
                    <td>Humidity accuracy</td>
                    <td>±2% RH</td>
                    </tr>
                    <tr>
                    <td>Interface</td>
                    <td>One-wire digital interface</td>
                    </tr>
                    <tr>
                    <td>Dimensions</td>
                    <td>15.1mm x 25mm x 7.7mm</td>
                    </tr>
                </tbody>
                </table>
              <p class="card-text">Reference: <a href="https://cdn.sparkfun.com/assets/learn_tutorials/1/4/4/DHT22.pdf">DHT22 Datasheet</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="img/sensor1.png" class="card-img" alt="Rain Gauge Weather Sensor">
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Rain Gauge Weather Sensor</h5>
              <p class="card-text">A rain gauge is a device used for measuring the amount of rainfall in a specific area over a certain period of time. The most common type of rain gauge is the tipping bucket rain gauge, which uses a seesaw-like mechanism to measure rainfall. As rain falls into the gauge, it fills up a small bucket that tips when it reaches a certain weight, sending a signal to a microcontroller to record the amount of rainfall.</p>
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Measurement range</td>
                    <td>0 - 500 mm/hr</td>
                  </tr>
                  <tr>
                    <td>Accuracy</td>
                    <td>±5%</td>
                  </tr>
                  <tr>
                    <td>Resolution</td>
                    <td>0.1 mm</td>
                  </tr>
                  <tr>
                    <td>Material</td>
                    <td>Plastic or metal</td>
                  </tr>
                  <tr>
                    <td>Dimensions</td>
                    <td>10cmx20cm/3.94incx7.87inch</td>
                  </tr>
                </tbody>
              </table>
              <p class="card-text">Reference: <a href="https://www.campbellsci.com/rain-gauge">Campbell Scientific Rain Gauge</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
