
<html>

<head>
	<title>PAGASA</title>
	<meta name="viewport" content="width=device-width, initial-scale=.8">
	<link rel="shortcut icon" href="https://bagong.pagasa.dost.gov.ph/themes/hiraia/assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/css/ol.css"
    type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/ol-popup@4.0.0/src/ol-popup.css" />
	<link href="https://bagong.pagasa.dost.gov.ph/combine/f7ef8c9f0a2812ec72b9674537a19748-1672119430.css" rel="stylesheet">
	</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top gov-ph">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://www.gov.ph/">
                <img src="https://bagong.pagasa.dost.gov.ph/themes/hiraia//assets/images/layout/coa.png" width="25" style="margin-top:-5px;" class="pull-left">
                <span class="pull-right color-white" style="margin-top:-23px;margin-left:10px;"><h3 class="gov-text">GOVPH</h3></span>
            </a>
        </div>
        <style type="text/css">
            .mobile-links .sidemenu a {
                color: white !important;
            }
            .mobile-links li {
                padding: .25em;
            }
            .mobile-links .sub-level li {
                padding: .5em;
            }
            .mobile-links>li>a {
                padding-top: 9px;
                padding-bottom: 5px;
            }
            .mobile-links .sub-level {
                padding-left: 3em;
            }
        </style>
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://bagong.pagasa.dost.gov.ph/accessibility" class="color-white">Accessibility</a></li>
                <li><a href="https://bagong.pagasa.dost.gov.ph/contact-us" class="color-white">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<style type="text/css">
    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1; 
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888; 
    }
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555; 
    }
</style>
<nav id="sidebar" class="hidden-xs"> 
    <ul class="list-unstyled components">
                <li>
            <a href="#" class="sidemenu sidehide" id="show-sidebar">&nbsp; <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/bars.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"></a>
        </li>
                        <li>
             
            <a href='#weather' class='sidemenu'>Weather <span class="caret"></span> <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/weather.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
            <ul class="collapse list-unstyled sub-menu" id="weather">
                 
                <li>
                     
                    <a href="#general-weather" style="padding-left:20px;" class="submenu sidemenu-level">General Weather <span class="caret"></span></a>
                    <ul class="collapse list-unstyled sub-level" id="general-weather">
                                                                                    <li><a href="/weather#daily-weather-forecast" class="anchor-link">Daily Weather Forecast</a></li>
                                                                                                                <li><a href="/weather/weather-outlook-selected-philippine-cities" class="anchor-link">Weather Outlook Selected Philippine Cities</a></li>
                                                                                                                <li><a href="/weather/philippine-cities-weather-forecast" class="anchor-link">Philippine Cities Weather Forecast</a></li>
                                                                                                                <li><a href="/weather/weather-asian-cities-weather-forecast" class="anchor-link">Asian Cities Weather Forecast</a></li>
                                                                                                                <li><a href="/weather/weather-outlook-selected-tourist-areas" class="anchor-link">Weather Outlook Selected Tourist Areas</a></li>
                                                                                                                <li><a href="/weather/weather-outlook-weekly" class="anchor-link">Weekly Weather Outlook</a></li>
                                                                                                                <li><a href="/weather/weather-advisory" class="anchor-link">Weather Advisory</a></li>
                                                                        </ul>
                                    </li>
                 
                <li>
                     
                    <a href="#aviation" style="padding-left:20px;" class="submenu sidemenu-level">Aviation <span class="caret"></span></a>
                    <ul class="collapse list-unstyled sub-level" id="aviation">
                                                                                    <li><a href="/aviation#airways-and-terminal-forecast" class="anchor-link">Airways and Terminal Forecast</a></li>
                                                                                                                <li><a href="/aviation#terminal-aerodome-forecast" class="anchor-link">Terminal Aerodome Forecast</a></li>
                                                                                                                <li><a href="/aviation#sigmet" class="anchor-link">SIGMET</a></li>
                                                                                                                <li><a href="/aviation/icao-codes" class="anchor-link">ICAO Codes</a></li>
                                                                                                                <li><a href="/aviation/metar" class="anchor-link">METAR</a></li>
                                                                        </ul>
                                    </li>
                 
                <li>
                     
                    <a href="#marine" style="padding-left:20px;" class="submenu sidemenu-level">Marine <span class="caret"></span></a>
                    <ul class="collapse list-unstyled sub-level" id="marine">
                                                                                    <li><a href="/marine#shipping-forecast" class="anchor-link">Shipping Forecast</a></li>
                                                                                                                <li><a href="/marine#gale-warning" class="anchor-link">Gale Warning</a></li>
                                                                        </ul>
                                    </li>
                 
                <li>
                     
                                                    <a href="/climate/climate-heat-index" style="padding-left:20px;" class="submenu   anchor-link">Heat Index</a>
                          
                        <!-- <a href="/climate/climate-heat-index" style="padding-left:20px;" class="submenu   anchor-link">Heat Index</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/weather/low-high-temperature" style="padding-left:20px;" class="submenu   anchor-link">Daily Temperature</a>
                          
                        <!-- <a href="/weather/low-high-temperature" style="padding-left:20px;" class="submenu   anchor-link">Daily Temperature</a> -->
                                    </li>
                            </ul>
                    </li>
                <li>
             
            <a href='#flood' class='sidemenu'>Flood <span class="caret"></span> <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/flood.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
            <ul class="collapse list-unstyled sub-menu" id="flood">
                 
                <li>
                     
                                                    <a href="/flood#flood-information" style="padding-left:20px;" class="submenu   anchor-link">Flood Information</a>
                          
                        <!-- <a href="/flood#flood-information" style="padding-left:20px;" class="submenu   anchor-link">Flood Information</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/flood#dam-information" style="padding-left:20px;" class="submenu   anchor-link">Dam Information</a>
                          
                        <!-- <a href="/flood#dam-information" style="padding-left:20px;" class="submenu   anchor-link">Dam Information</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/flood#projects" style="padding-left:20px;" class="submenu   anchor-link">Projects</a>
                          
                        <!-- <a href="/flood#projects" style="padding-left:20px;" class="submenu   anchor-link">Projects</a> -->
                                    </li>
                            </ul>
                    </li>
                <li>
             
            <a href='#tropical-cyclone' class='sidemenu'>Tropical Cyclone <span class="caret"></span> <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/tropical-cyclone.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
            <ul class="collapse list-unstyled sub-menu" id="tropical-cyclone">
                 
                <li>
                     
                                                    <a href="/tropical-cyclone-advisory-iframe" style="padding-left:20px;" class="submenu   anchor-link">Tropical Cyclone Advisory</a>
                          
                        <!-- <a href="/tropical-cyclone/tropical-cyclone-advisory" style="padding-left:20px;" class="submenu   anchor-link">Tropical Cyclone Advisory</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/tropical-cyclone/severe-weather-bulletin" style="padding-left:20px;" class="submenu   anchor-link">Tropical Cyclone Bulletin</a>
                          
                        <!-- <a href="/tropical-cyclone/severe-weather-bulletin" style="padding-left:20px;" class="submenu   anchor-link">Tropical Cyclone Bulletin</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/tropical-cyclone/tropical-cyclone-warning-for-shipping" style="padding-left:20px;" class="submenu   anchor-link">Tropical Cyclone Warning for Shipping</a>
                          
                        <!-- <a href="/tropical-cyclone/tropical-cyclone-warning-for-shipping" style="padding-left:20px;" class="submenu   anchor-link">Tropical Cyclone Warning for Shipping</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/tropical-cyclone/forecast-storm-surge" style="padding-left:20px;" class="submenu   anchor-link">Forecast Storm Surge</a>
                          
                        <!-- <a href="/tropical-cyclone/forecast-storm-surge" style="padding-left:20px;" class="submenu   anchor-link">Forecast Storm Surge</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/tropical-cyclone/tropical-cyclone-warning-for-agriculture" style="padding-left:20px;" class="submenu   anchor-link">Tropical Cyclone Warning for Agriculture</a>
                          
                        <!-- <a href="/tropical-cyclone/tropical-cyclone-warning-for-agriculture" style="padding-left:20px;" class="submenu   anchor-link">Tropical Cyclone Warning for Agriculture</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/tropical-cyclone/tc-threat-potential-forecast" style="padding-left:20px;" class="submenu   anchor-link">TC-Threat Potential Forecast</a>
                          
                        <!-- <a href="/tropical-cyclone/tc-threat-potential-forecast" style="padding-left:20px;" class="submenu   anchor-link">TC-Threat Potential Forecast</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/climate/tropical-cyclone-associated-rainfall" style="padding-left:20px;" class="submenu   anchor-link">Tropical Cyclone Associated Rainfall</a>
                          
                        <!-- <a href="/climate/tropical-cyclone-associated-rainfall" style="padding-left:20px;" class="submenu   anchor-link">Tropical Cyclone Associated Rainfall</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/tropical-cyclone/preliminary-tropical-cyclone-summary" style="padding-left:20px;" class="submenu   anchor-link">Preliminary Tropical Cyclone Summary</a>
                          
                        <!-- <a href="/tropical-cyclone/preliminary-tropical-cyclone-summary" style="padding-left:20px;" class="submenu   anchor-link">Preliminary Tropical Cyclone Summary</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/tropical-cyclone/annual-report" style="padding-left:20px;" class="submenu   anchor-link">Annual Report on Philippine Tropical Cyclones</a>
                          
                        <!-- <a href="/tropical-cyclone/annual-report" style="padding-left:20px;" class="submenu   anchor-link">Annual Report on Philippine Tropical Cyclones</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/information/about-tropical-cyclone" style="padding-left:20px;" class="submenu   anchor-link">About Tropical Cyclone</a>
                          
                        <!-- <a href="/information/about-tropical-cyclone" style="padding-left:20px;" class="submenu   anchor-link">About Tropical Cyclone</a> -->
                                    </li>
                            </ul>
                    </li>
                <li>
             
            <a href='#climate' class='sidemenu'>Climate <span class="caret"></span> <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/climate.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
            <ul class="collapse list-unstyled sub-menu" id="climate">
                 
                <li>
                     
                    <a href="#climate-monitoring" style="padding-left:20px;" class="submenu sidemenu-level">Climate Monitoring <span class="caret"></span></a>
                    <ul class="collapse list-unstyled sub-level" id="climate-monitoring">
                                                                                    <li><a href="/climate/climate-monitoring#daily-rainfall-and-temperature" class="anchor-link">Daily Rainfall and Temperature</a></li>
                                                                                                                <li><a href="/climate/climate-monthly-monitoring-products" class="anchor-link">Monthly Monitoring Products</a></li>
                                                                                                                <li><a href="http://seacm.pagasa.dost.gov.ph/" class="anchor-link">Southeast Asia Climate Monitoring</a></li>
                                                                        </ul>
                                    </li>
                 
                <li>
                     
                                                    <a href="/climate" style="padding-left:20px;" class="submenu   anchor-link">Climate Forum</a>
                          
                        <!-- <a href="/climate" style="padding-left:20px;" class="submenu   anchor-link">Climate Forum</a> -->
                                    </li>
                 
                <li>
                     
                    <a href="#climate-prediction" style="padding-left:20px;" class="submenu sidemenu-level">Climate Prediction <span class="caret"></span></a>
                    <ul class="collapse list-unstyled sub-level" id="climate-prediction">
                                                                                    <li><a href="/climate/climate-prediction/10-day-climate-forecast" class="anchor-link">10 Day Climate Forecast</a></li>
                                                                                                                <li><a href="/climate/climate-prediction/sub-seasonal2" class="anchor-link">Sub Seasonal</a></li>
                                                                                                                <li><a href="/climate/climate-prediction/seasonal-forecast" class="anchor-link">Seasonal Forecast</a></li>
                                                                                                                <li><a href="/climate/climate-prediction/specialized-forecast" class="anchor-link">Specialized Forecast</a></li>
                                                                        </ul>
                                    </li>
                 
                <li>
                     
                                                    <a href="/climate/climate-advisories" style="padding-left:20px;" class="submenu   anchor-link">Climate Advisories</a>
                          
                        <!-- <a href="/climate/climate-advisories" style="padding-left:20px;" class="submenu   anchor-link">Climate Advisories</a> -->
                                    </li>
                 
                <li>
                     
                    <a href="#el-nino-la-nina" style="padding-left:20px;" class="submenu sidemenu-level">El Niño / La Niña <span class="caret"></span></a>
                    <ul class="collapse list-unstyled sub-level" id="el-nino-la-nina">
                                                                                    <li><a href="/climate/el-nino-la-nina/monitoring" class="anchor-link">Monitoring</a></li>
                                                                                                                <li><a href="/climate/el-nino-la-nina/advisories" class="anchor-link">Advisories</a></li>
                                                                        </ul>
                                    </li>
                 
                <li>
                     
                    <a href="#climate-projection" style="padding-left:20px;" class="submenu sidemenu-level">Climate Projection <span class="caret"></span></a>
                    <ul class="collapse list-unstyled sub-level" id="climate-projection">
                                                                                    <li><a href="/climate/climate-change/dynamic-downscaling" class="anchor-link">Dynamic Downscaling</a></li>
                                <li><a href="/climate/climate-change/dynamic-downscaling/climap" class="anchor-link">CliMap</a></li>
                                                                                                                <li><a href="/climate/climate-change/statistical-downscaling" class="anchor-link">Statistical Downscaling</a></li>
                                                                        </ul>
                                    </li>
                 
                <li>
                     
                                                    <a href="/climate/climate-data" style="padding-left:20px;" class="submenu   anchor-link">Climate Data</a>
                          
                        <!-- <a href="/climate/climate-data" style="padding-left:20px;" class="submenu   anchor-link">Climate Data</a> -->
                                    </li>
                            </ul>
                    </li>
                <li>
             
            <a href='#agri-weather' class='sidemenu'>Agri-Weather <span class="caret"></span> <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/agri-weather.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
            <ul class="collapse list-unstyled sub-menu" id="agri-weather">
                 
                <li>
                     
                    <a href="#climate-information-for-agriculture" style="padding-left:20px;" class="submenu sidemenu-level">Climate Information for Agriculture <span class="caret"></span></a>
                    <ul class="collapse list-unstyled sub-level" id="climate-information-for-agriculture">
                                                                                    <li><a href="/agri-weather#farm-weather-forecast" class="anchor-link">Farm Weather Forecast</a></li>
                                                                                                                <li><a href="/weekend-special-outlook" class="anchor-link">Weekend/Special Farm Weather Forecast</a></li>
                                                                                                                <li><a href="/ten-day-regional-agri-weather" class="anchor-link">Ten-Day Regional Agri-Weather Information</a></li>
                                                                                                                <li><a href="/agri-weather/monthly-agroclimatic-review-and-outlook" class="anchor-link">Monthly Philippine Agro-Climatic Review and Outlook</a></li>
                                                                        </ul>
                                    </li>
                 
                <li>
                     
                                                    <a href="/agri-weather/impact-assessment-for-agriculture" style="padding-left:20px;" class="submenu   anchor-link">Impact Assessment for Agriculture</a>
                          
                        <!-- <a href="/agri-weather/impact-assessment-for-agriculture" style="padding-left:20px;" class="submenu   anchor-link">Impact Assessment for Agriculture</a> -->
                                    </li>
                            </ul>
                    </li>
                <li>
             
            <a href='#astronomy' class='sidemenu'>Astronomy <span class="caret"></span> <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/astronomy.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
            <ul class="collapse list-unstyled sub-menu" id="astronomy">
                 
                <li>
                     
                                                    <a href="/astronomy#telescoping-and-stargazing" style="padding-left:20px;" class="submenu   anchor-link">Telescoping and Stargazing</a>
                          
                        <!-- <a href="/astronomy#telescoping-and-stargazing" style="padding-left:20px;" class="submenu   anchor-link">Telescoping and Stargazing</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/astronomy#astronomy-in-the-philippines" style="padding-left:20px;" class="submenu   anchor-link">Astronomy in the Philippines</a>
                          
                        <!-- <a href="/astronomy#astronomy-in-the-philippines" style="padding-left:20px;" class="submenu   anchor-link">Astronomy in the Philippines</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/astronomy#planetarium" style="padding-left:20px;" class="submenu   anchor-link">Planetarium</a>
                          
                        <!-- <a href="/astronomy#planetarium" style="padding-left:20px;" class="submenu   anchor-link">Planetarium</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/astronomy#astronomical-observatory" style="padding-left:20px;" class="submenu   anchor-link">Astronomical Observatory</a>
                          
                        <!-- <a href="/astronomy#astronomical-observatory" style="padding-left:20px;" class="submenu   anchor-link">Astronomical Observatory</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/astronomy#time-service" style="padding-left:20px;" class="submenu   anchor-link">Time Service</a>
                          
                        <!-- <a href="/astronomy#time-service" style="padding-left:20px;" class="submenu   anchor-link">Time Service</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/astronomy#philippine-standard-time" style="padding-left:20px;" class="submenu   anchor-link">Philippine Standard Time</a>
                          
                        <!-- <a href="/astronomy#philippine-standard-time" style="padding-left:20px;" class="submenu   anchor-link">Philippine Standard Time</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/astronomy/astronomical-diary" style="padding-left:20px;" class="submenu   anchor-link">Astronomical Diary</a>
                          
                        <!-- <a href="/astronomy/astronomical-diary" style="padding-left:20px;" class="submenu   anchor-link">Astronomical Diary</a> -->
                                    </li>
                            </ul>
                    </li>
                <li>
             
            <a href='#regional-forecast' class='sidemenu'>Regional Forecast <span class="caret"></span> <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/regional-forecast.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
            <ul class="collapse list-unstyled sub-menu" id="regional-forecast">
                 
                <li>
                     
                                                    <a href="https://prsd.pagasa.dost.gov.ph/index.php/regional-forecasts/northern-luzon-prsd" style="padding-left:20px;" class="submenu   anchor-link">Northern Luzon</a>
                          
                        <!-- <a href="https://prsd.pagasa.dost.gov.ph/index.php/regional-forecasts/northern-luzon-prsd" style="padding-left:20px;" class="submenu   anchor-link">Northern Luzon</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="https://prsd.pagasa.dost.gov.ph/index.php/regional-forecasts/ncr-prsd" style="padding-left:20px;" class="submenu   anchor-link">National Capital Region</a>
                          
                        <!-- <a href="https://prsd.pagasa.dost.gov.ph/index.php/regional-forecasts/ncr-prsd" style="padding-left:20px;" class="submenu   anchor-link">National Capital Region</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="https://prsd.pagasa.dost.gov.ph/index.php/regional-forecasts/southern-luzon-prsd" style="padding-left:20px;" class="submenu   anchor-link">Southern Luzon</a>
                          
                        <!-- <a href="https://prsd.pagasa.dost.gov.ph/index.php/regional-forecasts/southern-luzon-prsd" style="padding-left:20px;" class="submenu   anchor-link">Southern Luzon</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="https://prsd.pagasa.dost.gov.ph/index.php/regional-forecasts/visayas-prsd" style="padding-left:20px;" class="submenu   anchor-link">Visayas</a>
                          
                        <!-- <a href="https://prsd.pagasa.dost.gov.ph/index.php/regional-forecasts/visayas-prsd" style="padding-left:20px;" class="submenu   anchor-link">Visayas</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="https://prsd.pagasa.dost.gov.ph/index.php/regional-forecasts/mindanao-prsd" style="padding-left:20px;" class="submenu   anchor-link">Mindanao</a>
                          
                        <!-- <a href="https://prsd.pagasa.dost.gov.ph/index.php/regional-forecasts/mindanao-prsd" style="padding-left:20px;" class="submenu   anchor-link">Mindanao</a> -->
                                    </li>
                            </ul>
                    </li>
                <li>
             
            <a href='#products-and-services' class='sidemenu'>Products and Services <span class="caret"></span> <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/products-and-services.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
            <ul class="collapse list-unstyled sub-menu" id="products-and-services">
                 
                <li>
                     
                                                    <a href="/products-and-services/engineering-services" style="padding-left:20px;" class="submenu   anchor-link">Engineering Services</a>
                          
                        <!-- <a href="/products-and-services/engineering-services" style="padding-left:20px;" class="submenu   anchor-link">Engineering Services</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/products-and-services/calibration-services" style="padding-left:20px;" class="submenu   anchor-link">Calibration Services</a>
                          
                        <!-- <a href="/products-and-services/calibration-services" style="padding-left:20px;" class="submenu   anchor-link">Calibration Services</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/products-and-services/numerical-modelling-system" style="padding-left:20px;" class="submenu   anchor-link">Numerical Prediction Model</a>
                          
                        <!-- <a href="/products-and-services/numerical-modelling-system" style="padding-left:20px;" class="submenu   anchor-link">Numerical Prediction Model</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/products-and-services/satellite" style="padding-left:20px;" class="submenu   anchor-link">Satellites</a>
                          
                        <!-- <a href="/products-and-services/satellite" style="padding-left:20px;" class="submenu   anchor-link">Satellites</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="http://121.58.193.173:8080/" style="padding-left:20px;" class="submenu   anchor-link">Flood Monitoring for Metro Manila</a>
                          
                        <!-- <a href="http://121.58.193.173:8080/" style="padding-left:20px;" class="submenu   anchor-link">Flood Monitoring for Metro Manila</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/products-and-services/risk-analysis-maps" style="padding-left:20px;" class="submenu   anchor-link">Risk Analysis Map</a>
                          
                        <!-- <a href="/products-and-services/risk-analysis-maps" style="padding-left:20px;" class="submenu   anchor-link">Risk Analysis Map</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/products-and-services/flood-hazard-maps" style="padding-left:20px;" class="submenu   anchor-link">Flood Hazard Map</a>
                          
                        <!-- <a href="/products-and-services/flood-hazard-maps" style="padding-left:20px;" class="submenu   anchor-link">Flood Hazard Map</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/products-and-services/severe-wind-maps" style="padding-left:20px;" class="submenu   anchor-link">Regional Severe Wind Hazard Maps</a>
                          
                        <!-- <a href="/products-and-services/severe-wind-maps" style="padding-left:20px;" class="submenu   anchor-link">Regional Severe Wind Hazard Maps</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/products-and-services/hfdr" style="padding-left:20px;" class="submenu   anchor-link">High Frequency Doppler Radar</a>
                          
                        <!-- <a href="/products-and-services/hfdr" style="padding-left:20px;" class="submenu   anchor-link">High Frequency Doppler Radar</a> -->
                                    </li>
                            </ul>
                    </li>
                <li>
                        <a href='/vacancy' class='sidemenu'>Vacancy <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/vacancy.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
                    </li>
                <li>
                        <a href='/gad-corner' class='sidemenu'>GAD Corner <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/gad-corner.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
                    </li>
                <li>
             
            <a href='#learnings' class='sidemenu'>Learnings <span class="caret"></span> <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/learnings.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
            <ul class="collapse list-unstyled sub-menu" id="learnings">
                 
                <li>
                     
                                                    <a href="/learnings/publication" style="padding-left:20px;" class="submenu   anchor-link">Publication</a>
                          
                        <!-- <a href="/learnings/publication" style="padding-left:20px;" class="submenu   anchor-link">Publication</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/learnings/faqs-and-trivias" style="padding-left:20px;" class="submenu   anchor-link">FAQs and Trivias</a>
                          
                        <!-- <a href="/learnings/faqs-and-trivias" style="padding-left:20px;" class="submenu   anchor-link">FAQs and Trivias</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/learnings/learning-tools" style="padding-left:20px;" class="submenu   anchor-link">Learning Tools</a>
                          
                        <!-- <a href="/learnings/learning-tools" style="padding-left:20px;" class="submenu   anchor-link">Learning Tools</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/learnings/research-and-development" style="padding-left:20px;" class="submenu   anchor-link">Research and Development</a>
                          
                        <!-- <a href="/learnings/research-and-development" style="padding-left:20px;" class="submenu   anchor-link">Research and Development</a> -->
                                    </li>
                 
                <li>
                     
                    <a href="#information" style="padding-left:20px;" class="submenu sidemenu-level">Information <span class="caret"></span></a>
                    <ul class="collapse list-unstyled sub-level" id="information">
                                                                                    <li><a href="/learnings/legend" class="anchor-link">Rainfall and Thunderstorm Warning System</a></li>
                                                                                                                <li><a href="/information/weather-terminologies" class="anchor-link">Weather Terminologies</a></li>
                                                                                                                <li><a href="/information/flood-forecasting-and-warning-system-river-basins" class="anchor-link">Flood Forecasting and Warning System for River Basins</a></li>
                                                                                                                <li><a href="/information/climate-philippines" class="anchor-link">Climate of the Philippines</a></li>
                                                                                                                <li><a href="/information/climate-change-in-the-philippines" class="anchor-link">Climate Change in the Philippines</a></li>
                                                                                                                <li><a href="/astronomy" class="anchor-link">Astronomy in the Philippines</a></li>
                                                                                                                <li><a href="/information/field-station-categories" class="anchor-link">Field Station Categories</a></li>
                                                                                                                <li><a href="/information/basic-cloud-seeding-operations" class="anchor-link">Basic Cloud Seeding Operations</a></li>
                                                                                                                <li><a href="/information/storm-surge" class="anchor-link">Storm Surge Information</a></li>
                                                                        </ul>
                                    </li>
                 
                <li>
                     
                                                    <a href="/learnings/legend" style="padding-left:20px;" class="submenu   anchor-link">Legend</a>
                          
                        <!-- <a href="/learnings/legend" style="padding-left:20px;" class="submenu   anchor-link">Legend</a> -->
                                    </li>
                            </ul>
                    </li>
                <li>
             
            <a href='#about-us' class='sidemenu'>About Us <span class="caret"></span> <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/icons/sidebar/about-us.png" alt="" class="menu-icon pull-right" style="margin-top:-6px;"/></a>
            <ul class="collapse list-unstyled sub-menu" id="about-us">
                 
                <li>
                     
                                                    <a href="/contact-us" style="padding-left:20px;" class="submenu   anchor-link">Contact Us</a>
                          
                        <!-- <a href="/contact-us" style="padding-left:20px;" class="submenu   anchor-link">Contact Us</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/about-us/national-meteorological-and-hydrological-services" style="padding-left:20px;" class="submenu   anchor-link">National Meteorological and Hydrological Services</a>
                          
                        <!-- <a href="/about-us/national-meteorological-and-hydrological-services" style="padding-left:20px;" class="submenu   anchor-link">National Meteorological and Hydrological Services</a> -->
                                    </li>
                 
                <li>
                     
                                                    <a href="/about-us/related-linkages" style="padding-left:20px;" class="submenu   anchor-link">Related Linkages</a>
                          
                        <!-- <a href="/about-us/related-linkages" style="padding-left:20px;" class="submenu   anchor-link">Related Linkages</a> -->
                                    </li>
                            </ul>
                    </li>
            </ul>
</nav>	<style>
    .tc-badge {
        float: right;
        margin-top: -25px;
        margin-right: 5px;
        background: green;
    }
</style>
<div class="header">
    <div class="pagasa-logo redirect-link">
        <img src="https://pubfiles.pagasa.dost.gov.ph/pagasaweb/images/pagasa-logo.png">
    </div>
    <div class="pagasa-text redirect-link">
        <div class="republic">Department of Science and Technology</div>
        <div class="pagasa">Philippine Atmospheric, Geophysical and<br>Astronomical Services Administration</div>
    </div>
    <a href="https://bagong.pagasa.dost.gov.ph/astronomy#philippine-standard-time" class="hidden-xs">
        <div class='pagasa-phst'>
            <div class="title">Philippine Standard Time</div>
            <div class="time" id='time'>08:10:56 AM</div>
            <div class="date">9 March 2023</div>
        </div>
    </a>
    
           
    </div>
</div>	<div class="container-fluid container-space">
		<div class="row"> 
    <div class="col-md-12 fixed-sidebar col-lg-10 col-lg-offset-1"> 
        <div class="col-md-12 article-header" id="">
             Latest Automated Weather Stations
        </div>
        <div class="col-md-12 article-content">
            <div class="">
                <div class="col-md-12">

    <div class="row">
        <div class="col-md-6">
      </div>
        
    </div>
</div>



<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading"></div> 


       
    </div>
</div>            </div>
        </div>
    </div>
</div>		<style type="text/css">
    .image-modal-container .image-container>img {
        /* width: auto; */
        position: absolute;
        top: -9999px;
        bottom: -9999px;
        left: -9999px;
        right: -9999px;
        max-height: 100%;
        max-width: 100%;
        margin: auto;
	    height: auto;
	    width: auto;
    }
    .image-modal-container .image-container {
	    overflow: hidden;
	    /* height: 250px; */
	    position: relative;
	    height: 94%;
	    width: 94%;
	    margin: 3vh 3vw;
    }
    .image-modal-container .image-close {
		position: absolute;
		top: 0px;
		right: 5px;
		font-size: 34px;
    }
	.image-modal-container .image-preview {
		cursor: pointer;
	}
        .close{
            margin-top:20px;
            opacity:1;
            text-shadow:none;
        }
        .fa-close{
            background:#ffffff;
            border-radius:7px;
        }
        .fa-close:hover{
             background:#ffffff;
            border-radius:7px;
        }
</style>
<div class="modal fade image-modal-container" id="image-modal" tabindex="-1" role="dialog" aria-labelledby="image-modal-label">
	<div class="image-container" data-dismiss="modal">
        <button type="button" class="close p-image-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa-close fa fa-times fa-2x" aria-hidden="true"></i></span></button>
        <img src="" class="image-container" alt="">
	</div>
</div>		<div class="row footer-frame  hidden-xs">
    <iframe src="https://gwhs.i.gov.ph/gwt-footer/footer-source.html" ></iframe>
</div>		<div id="back-to-top" onclick="topFunction()"></div>
	</div>
	<!-- ???? -->
	<script type="text/javascript">
		var id_ = "product-and-services-automated-weather-station",
		env_ = "production",
		muniV = 'v1',
			homeV = 'v1',
			houseV = 'v1',
			municipalityKey = 'municipality-' + muniV,
			homeSearchKey = 'homeSearch-' + homeV,
			housePopulation = 'housePopulation-' + houseV;
		var map_var = false;
		var auto_skip = false;
		var synop_id = 425;
	</script>
	<script>var server_timestamp = 1678320656;</script>
	<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/build/ol.js"></script>
	<script src="https://unpkg.com/ol-popup@4.0.0/dist/ol-popup.js"></script>
	<script type="text/javascript"
	  src="https://openlayersbook.github.io/openlayers_book_samples/assets/proj4js/proj4.js"></script>
	<script src="https://bagong.pagasa.dost.gov.ph/combine/50b4de534cb31925dc0cdeb26ad71b1d-1672119431.js"></script>
		<script type="text/javascript">
		window.onresize = function() {
		    var screen_width = $(window).width();
            if(typeof(map) != 'undefined') {
                if (screen_width < 764){
                    map.setTarget('map-canvas-mobile');
                }else {
                    map.setTarget('map-canvas');
                }
            }
		};
	</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110677925-1"></script>
	<script type="text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-110677925-1');
	</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153677671-1"></script>
	<script type="text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-153677671-1');
	</script>
</body>

</html>