    @extends('layouts.admin') 
@section('content')    

<section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart" style="min-height: 365px;"><div id="apexchartsxdiwh174" class="apexcharts-canvas apexchartsxdiwh174 apexcharts-theme-light" style="width: 611px; height: 350px;"><svg id="SvgjsSvg1162" width="611" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="611" height="350"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;"><div class="apexcharts-legend-series" rel="1" seriesname="Sales" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Sales" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Revenue" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Revenue" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span></div><div class="apexcharts-legend-series" rel="3" seriesname="Customers" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Customers" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Customers</span></div></div><style type="text/css">	
    	
      .apexcharts-legend {	
        display: flex;	
        overflow: auto;	
        padding: 0 10px;	
      }	
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
        flex-wrap: wrap	
      }	
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
        flex-direction: column;	
        bottom: 0;	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
        justify-content: flex-start;	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
        justify-content: center;  	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
        justify-content: flex-end;	
      }	
      .apexcharts-legend-series {	
        cursor: pointer;	
        line-height: normal;	
      }	
      .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
        display: flex;	
        align-items: center;	
      }	
      .apexcharts-legend-text {	
        position: relative;	
        font-size: 14px;	
      }	
      .apexcharts-legend-text *, .apexcharts-legend-marker * {	
        pointer-events: none;	
      }	
      .apexcharts-legend-marker {	
        position: relative;	
        display: inline-block;	
        cursor: pointer;	
        margin-right: 3px;	
        border-style: solid;
      }	
      	
      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
        display: inline-block;	
      }	
      .apexcharts-legend-series.apexcharts-no-click {	
        cursor: auto;	
      }	
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
        display: none !important;	
      }	
      .apexcharts-inactive-legend {	
        opacity: 0.45;	
      }</style></foreignObject><g id="SvgjsG1164" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)"><defs id="SvgjsDefs1163"><clipPath id="gridRectMaskxdiwh174"><rect id="SvgjsRect1174" width="561.640625" height="272.2" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskxdiwh174"></clipPath><clipPath id="nonForecastMaskxdiwh174"></clipPath><clipPath id="gridRectMarkerMaskxdiwh174"><rect id="SvgjsRect1175" width="603.640625" height="318.2" x="-24" y="-24" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1193" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1194" stop-opacity="0.3" stop-color="rgba(65,84,241,0.3)" offset="0"></stop><stop id="SvgjsStop1195" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1196" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1215" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1216" stop-opacity="0.3" stop-color="rgba(46,202,106,0.3)" offset="0"></stop><stop id="SvgjsStop1217" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1218" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1237" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1238" stop-opacity="0.3" stop-color="rgba(255,119,29,0.3)" offset="0"></stop><stop id="SvgjsStop1239" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1240" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1170" x1="0" y1="0" x2="0" y2="270.2" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="270.2" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1243" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1244" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1246" font-family="Helvetica, Arial, sans-serif" x="0" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1247">00:00</tspan><title>00:00</title></text><text id="SvgjsText1249" font-family="Helvetica, Arial, sans-serif" x="85.48317307692308" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1250">01:00</tspan><title>01:00</title></text><text id="SvgjsText1252" font-family="Helvetica, Arial, sans-serif" x="170.96634615384616" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1253">02:00</tspan><title>02:00</title></text><text id="SvgjsText1255" font-family="Helvetica, Arial, sans-serif" x="256.4495192307692" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1256">03:00</tspan><title>03:00</title></text><text id="SvgjsText1258" font-family="Helvetica, Arial, sans-serif" x="341.9326923076923" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1259">04:00</tspan><title>04:00</title></text><text id="SvgjsText1261" font-family="Helvetica, Arial, sans-serif" x="427.4158653846154" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1262">05:00</tspan><title>05:00</title></text><text id="SvgjsText1264" font-family="Helvetica, Arial, sans-serif" x="512.8990384615385" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1265">06:00</tspan><title>06:00</title></text></g><line id="SvgjsLine1266" x1="0" y1="271.2" x2="555.640625" y2="271.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1287" class="apexcharts-grid"><g id="SvgjsG1288" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1297" x1="0" y1="0" x2="555.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1298" x1="0" y1="54.04" x2="555.640625" y2="54.04" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1299" x1="0" y1="108.08" x2="555.640625" y2="108.08" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1300" x1="0" y1="162.12" x2="555.640625" y2="162.12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1301" x1="0" y1="216.16" x2="555.640625" y2="216.16" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1302" x1="0" y1="270.2" x2="555.640625" y2="270.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1289" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1290" x1="0" y1="271.2" x2="0" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1291" x1="85.48317307692308" y1="271.2" x2="85.48317307692308" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1292" x1="170.96634615384616" y1="271.2" x2="170.96634615384616" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1293" x1="256.4495192307692" y1="271.2" x2="256.4495192307692" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1294" x1="341.9326923076923" y1="271.2" x2="341.9326923076923" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1295" x1="427.4158653846154" y1="271.2" x2="427.4158653846154" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1296" x1="512.8990384615385" y1="271.2" x2="512.8990384615385" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1304" x1="0" y1="270.2" x2="555.640625" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1303" x1="0" y1="1" x2="0" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1176" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1177" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1197" d="M 0 270.2L 0 186.438C 44.87866586538461 186.438 83.34609375 162.12 128.2247596153846 162.12C 158.1438701923077 162.12 183.78882211538462 194.54399999999998 213.7079326923077 194.54399999999998C 243.62704326923077 194.54399999999998 269.2719951923077 132.398 299.1911057692308 132.398C 329.11021634615383 132.398 354.7551682692308 156.716 384.67427884615387 156.716C 414.5933894230769 156.716 440.2383413461539 48.635999999999996 470.15745192307696 48.635999999999996C 500.0765625 48.635999999999996 525.721514423077 118.88799999999998 555.640625 118.88799999999998C 555.640625 118.88799999999998 555.640625 118.88799999999998 555.640625 270.2M 555.640625 118.88799999999998z" fill="url(#SvgjsLinearGradient1193)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskxdiwh174)" pathTo="M 0 270.2L 0 186.438C 44.87866586538461 186.438 83.34609375 162.12 128.2247596153846 162.12C 158.1438701923077 162.12 183.78882211538462 194.54399999999998 213.7079326923077 194.54399999999998C 243.62704326923077 194.54399999999998 269.2719951923077 132.398 299.1911057692308 132.398C 329.11021634615383 132.398 354.7551682692308 156.716 384.67427884615387 156.716C 414.5933894230769 156.716 440.2383413461539 48.635999999999996 470.15745192307696 48.635999999999996C 500.0765625 48.635999999999996 525.721514423077 118.88799999999998 555.640625 118.88799999999998C 555.640625 118.88799999999998 555.640625 118.88799999999998 555.640625 270.2M 555.640625 118.88799999999998z" pathFrom="M -1 270.2L -1 270.2L 128.2247596153846 270.2L 213.7079326923077 270.2L 299.1911057692308 270.2L 384.67427884615387 270.2L 470.15745192307696 270.2L 555.640625 270.2"></path><path id="SvgjsPath1198" d="M 0 186.438C 44.87866586538461 186.438 83.34609375 162.12 128.2247596153846 162.12C 158.1438701923077 162.12 183.78882211538462 194.54399999999998 213.7079326923077 194.54399999999998C 243.62704326923077 194.54399999999998 269.2719951923077 132.398 299.1911057692308 132.398C 329.11021634615383 132.398 354.7551682692308 156.716 384.67427884615387 156.716C 414.5933894230769 156.716 440.2383413461539 48.635999999999996 470.15745192307696 48.635999999999996C 500.0765625 48.635999999999996 525.721514423077 118.88799999999998 555.640625 118.88799999999998" fill="none" fill-opacity="1" stroke="#4154f1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskxdiwh174)" pathTo="M 0 186.438C 44.87866586538461 186.438 83.34609375 162.12 128.2247596153846 162.12C 158.1438701923077 162.12 183.78882211538462 194.54399999999998 213.7079326923077 194.54399999999998C 243.62704326923077 194.54399999999998 269.2719951923077 132.398 299.1911057692308 132.398C 329.11021634615383 132.398 354.7551682692308 156.716 384.67427884615387 156.716C 414.5933894230769 156.716 440.2383413461539 48.635999999999996 470.15745192307696 48.635999999999996C 500.0765625 48.635999999999996 525.721514423077 118.88799999999998 555.640625 118.88799999999998" pathFrom="M -1 270.2L -1 270.2L 128.2247596153846 270.2L 213.7079326923077 270.2L 299.1911057692308 270.2L 384.67427884615387 270.2L 470.15745192307696 270.2L 555.640625 270.2"></path><g id="SvgjsG1178" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1180" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1181" r="4" cx="0" cy="186.438" class="apexcharts-marker no-pointer-events wnwmcqxbt" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="4"></circle><circle id="SvgjsCircle1182" r="4" cx="128.2247596153846" cy="162.12" class="apexcharts-marker no-pointer-events wc023eviq" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1183" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1184" r="4" cx="213.7079326923077" cy="194.54399999999998" class="apexcharts-marker no-pointer-events w7uqshin5l" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1185" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1186" r="4" cx="299.1911057692308" cy="132.398" class="apexcharts-marker no-pointer-events wej6wq5tc" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1187" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1188" r="4" cx="384.67427884615387" cy="156.716" class="apexcharts-marker no-pointer-events wiouy8w1y" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1189" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1190" r="4" cx="470.15745192307696" cy="48.635999999999996" class="apexcharts-marker no-pointer-events wjq8c92kz" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1191" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1192" r="4" cx="555.640625" cy="118.88799999999998" class="apexcharts-marker no-pointer-events w5hrhrsuh" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1199" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1219" d="M 0 270.2L 0 240.47799999999998C 44.87866586538461 240.47799999999998 83.34609375 183.736 128.2247596153846 183.736C 158.1438701923077 183.736 183.78882211538462 148.60999999999999 213.7079326923077 148.60999999999999C 243.62704326923077 148.60999999999999 269.2719951923077 183.736 299.1911057692308 183.736C 329.11021634615383 183.736 354.7551682692308 178.332 384.67427884615387 178.332C 414.5933894230769 178.332 440.2383413461539 129.696 470.15745192307696 129.696C 500.0765625 129.696 525.721514423077 159.418 555.640625 159.418C 555.640625 159.418 555.640625 159.418 555.640625 270.2M 555.640625 159.418z" fill="url(#SvgjsLinearGradient1215)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskxdiwh174)" pathTo="M 0 270.2L 0 240.47799999999998C 44.87866586538461 240.47799999999998 83.34609375 183.736 128.2247596153846 183.736C 158.1438701923077 183.736 183.78882211538462 148.60999999999999 213.7079326923077 148.60999999999999C 243.62704326923077 148.60999999999999 269.2719951923077 183.736 299.1911057692308 183.736C 329.11021634615383 183.736 354.7551682692308 178.332 384.67427884615387 178.332C 414.5933894230769 178.332 440.2383413461539 129.696 470.15745192307696 129.696C 500.0765625 129.696 525.721514423077 159.418 555.640625 159.418C 555.640625 159.418 555.640625 159.418 555.640625 270.2M 555.640625 159.418z" pathFrom="M -1 270.2L -1 270.2L 128.2247596153846 270.2L 213.7079326923077 270.2L 299.1911057692308 270.2L 384.67427884615387 270.2L 470.15745192307696 270.2L 555.640625 270.2"></path><path id="SvgjsPath1220" d="M 0 240.47799999999998C 44.87866586538461 240.47799999999998 83.34609375 183.736 128.2247596153846 183.736C 158.1438701923077 183.736 183.78882211538462 148.60999999999999 213.7079326923077 148.60999999999999C 243.62704326923077 148.60999999999999 269.2719951923077 183.736 299.1911057692308 183.736C 329.11021634615383 183.736 354.7551682692308 178.332 384.67427884615387 178.332C 414.5933894230769 178.332 440.2383413461539 129.696 470.15745192307696 129.696C 500.0765625 129.696 525.721514423077 159.418 555.640625 159.418" fill="none" fill-opacity="1" stroke="#2eca6a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskxdiwh174)" pathTo="M 0 240.47799999999998C 44.87866586538461 240.47799999999998 83.34609375 183.736 128.2247596153846 183.736C 158.1438701923077 183.736 183.78882211538462 148.60999999999999 213.7079326923077 148.60999999999999C 243.62704326923077 148.60999999999999 269.2719951923077 183.736 299.1911057692308 183.736C 329.11021634615383 183.736 354.7551682692308 178.332 384.67427884615387 178.332C 414.5933894230769 178.332 440.2383413461539 129.696 470.15745192307696 129.696C 500.0765625 129.696 525.721514423077 159.418 555.640625 159.418" pathFrom="M -1 270.2L -1 270.2L 128.2247596153846 270.2L 213.7079326923077 270.2L 299.1911057692308 270.2L 384.67427884615387 270.2L 470.15745192307696 270.2L 555.640625 270.2"></path><g id="SvgjsG1200" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG1202" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1203" r="4" cx="0" cy="240.47799999999998" class="apexcharts-marker no-pointer-events w2wm18j5f" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="4"></circle><circle id="SvgjsCircle1204" r="4" cx="128.2247596153846" cy="183.736" class="apexcharts-marker no-pointer-events w6yqwlx8df" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1205" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1206" r="4" cx="213.7079326923077" cy="148.60999999999999" class="apexcharts-marker no-pointer-events wln2xrqvy" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1207" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1208" r="4" cx="299.1911057692308" cy="183.736" class="apexcharts-marker no-pointer-events wr929uy5b" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1209" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1210" r="4" cx="384.67427884615387" cy="178.332" class="apexcharts-marker no-pointer-events wrbtecoaw" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1211" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1212" r="4" cx="470.15745192307696" cy="129.696" class="apexcharts-marker no-pointer-events wkotn6ct2" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1213" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1214" r="4" cx="555.640625" cy="159.418" class="apexcharts-marker no-pointer-events wg6e0dsji" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1221" class="apexcharts-series" seriesName="Customers" data:longestSeries="true" rel="3" data:realIndex="2"><path id="SvgjsPath1241" d="M 0 270.2L 0 229.67C 44.87866586538461 229.67 83.34609375 240.47799999999998 128.2247596153846 240.47799999999998C 158.1438701923077 240.47799999999998 183.78882211538462 183.736 213.7079326923077 183.736C 243.62704326923077 183.736 269.2719951923077 221.564 299.1911057692308 221.564C 329.11021634615383 221.564 354.7551682692308 245.88199999999998 384.67427884615387 245.88199999999998C 414.5933894230769 245.88199999999998 440.2383413461539 205.35199999999998 470.15745192307696 205.35199999999998C 500.0765625 205.35199999999998 525.721514423077 240.47799999999998 555.640625 240.47799999999998C 555.640625 240.47799999999998 555.640625 240.47799999999998 555.640625 270.2M 555.640625 240.47799999999998z" fill="url(#SvgjsLinearGradient1237)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskxdiwh174)" pathTo="M 0 270.2L 0 229.67C 44.87866586538461 229.67 83.34609375 240.47799999999998 128.2247596153846 240.47799999999998C 158.1438701923077 240.47799999999998 183.78882211538462 183.736 213.7079326923077 183.736C 243.62704326923077 183.736 269.2719951923077 221.564 299.1911057692308 221.564C 329.11021634615383 221.564 354.7551682692308 245.88199999999998 384.67427884615387 245.88199999999998C 414.5933894230769 245.88199999999998 440.2383413461539 205.35199999999998 470.15745192307696 205.35199999999998C 500.0765625 205.35199999999998 525.721514423077 240.47799999999998 555.640625 240.47799999999998C 555.640625 240.47799999999998 555.640625 240.47799999999998 555.640625 270.2M 555.640625 240.47799999999998z" pathFrom="M -1 270.2L -1 270.2L 128.2247596153846 270.2L 213.7079326923077 270.2L 299.1911057692308 270.2L 384.67427884615387 270.2L 470.15745192307696 270.2L 555.640625 270.2"></path><path id="SvgjsPath1242" d="M 0 229.67C 44.87866586538461 229.67 83.34609375 240.47799999999998 128.2247596153846 240.47799999999998C 158.1438701923077 240.47799999999998 183.78882211538462 183.736 213.7079326923077 183.736C 243.62704326923077 183.736 269.2719951923077 221.564 299.1911057692308 221.564C 329.11021634615383 221.564 354.7551682692308 245.88199999999998 384.67427884615387 245.88199999999998C 414.5933894230769 245.88199999999998 440.2383413461539 205.35199999999998 470.15745192307696 205.35199999999998C 500.0765625 205.35199999999998 525.721514423077 240.47799999999998 555.640625 240.47799999999998" fill="none" fill-opacity="1" stroke="#ff771d" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskxdiwh174)" pathTo="M 0 229.67C 44.87866586538461 229.67 83.34609375 240.47799999999998 128.2247596153846 240.47799999999998C 158.1438701923077 240.47799999999998 183.78882211538462 183.736 213.7079326923077 183.736C 243.62704326923077 183.736 269.2719951923077 221.564 299.1911057692308 221.564C 329.11021634615383 221.564 354.7551682692308 245.88199999999998 384.67427884615387 245.88199999999998C 414.5933894230769 245.88199999999998 440.2383413461539 205.35199999999998 470.15745192307696 205.35199999999998C 500.0765625 205.35199999999998 525.721514423077 240.47799999999998 555.640625 240.47799999999998" pathFrom="M -1 270.2L -1 270.2L 128.2247596153846 270.2L 213.7079326923077 270.2L 299.1911057692308 270.2L 384.67427884615387 270.2L 470.15745192307696 270.2L 555.640625 270.2"></path><g id="SvgjsG1222" class="apexcharts-series-markers-wrap" data:realIndex="2"><g id="SvgjsG1224" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1225" r="4" cx="0" cy="229.67" class="apexcharts-marker no-pointer-events wru5c4a9c" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="4"></circle><circle id="SvgjsCircle1226" r="4" cx="128.2247596153846" cy="240.47799999999998" class="apexcharts-marker no-pointer-events wj64dcpws" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1227" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1228" r="4" cx="213.7079326923077" cy="183.736" class="apexcharts-marker no-pointer-events wrqi5x9lv" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1229" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1230" r="4" cx="299.1911057692308" cy="221.564" class="apexcharts-marker no-pointer-events wsy1l7kiv" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1231" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1232" r="4" cx="384.67427884615387" cy="245.88199999999998" class="apexcharts-marker no-pointer-events wbh08oqymi" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1233" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1234" r="4" cx="470.15745192307696" cy="205.35199999999998" class="apexcharts-marker no-pointer-events wz376o9ydh" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1235" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskxdiwh174)"><circle id="SvgjsCircle1236" r="4" cx="555.640625" cy="240.47799999999998" class="apexcharts-marker no-pointer-events wbbuqx1i1" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="2" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1179" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1201" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1223" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine1305" x1="0" y1="0" x2="555.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1306" x1="0" y1="0" x2="555.640625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1307" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1308" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1309" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1310" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1311" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1169" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1267" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)"><g id="SvgjsG1268" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1270" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1271">100</tspan><title>100</title></text><text id="SvgjsText1273" font-family="Helvetica, Arial, sans-serif" x="20" y="85.53999999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1274">80</tspan><title>80</title></text><text id="SvgjsText1276" font-family="Helvetica, Arial, sans-serif" x="20" y="139.57999999999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1277">60</tspan><title>60</title></text><text id="SvgjsText1279" font-family="Helvetica, Arial, sans-serif" x="20" y="193.61999999999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1280">40</tspan><title>40</title></text><text id="SvgjsText1282" font-family="Helvetica, Arial, sans-serif" x="20" y="247.65999999999997" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1283">20</tspan><title>20</title></text><text id="SvgjsText1285" font-family="Helvetica, Arial, sans-serif" x="20" y="301.7" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1286">0</tspan><title>0</title></text></g></g><g id="SvgjsG1165" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(65, 84, 241);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(46, 202, 106);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 119, 29);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label><select class="dataTable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table table-borderless datatable dataTable-table">
                    <thead>
                      <tr><th scope="col" data-sortable="" style="width: 10.9477%;"><a href="#" class="dataTable-sorter">#</a></th><th scope="col" data-sortable="" style="width: 24.0196%;"><a href="#" class="dataTable-sorter">Customer</a></th><th scope="col" data-sortable="" style="width: 40.0327%;"><a href="#" class="dataTable-sorter">Product</a></th><th scope="col" data-sortable="" style="width: 9.80392%;"><a href="#" class="dataTable-sorter">Price</a></th><th scope="col" data-sortable="" style="width: 15.1961%;"><a href="#" class="dataTable-sorter">Status</a></th></tr>
                    </thead>
                    <tbody><tr><th scope="row"><a href="#">#2457</a></th><td>Brandon Jacob</td><td><a href="#" class="text-primary">At praesentium minu</a></td><td>$64</td><td><span class="badge bg-success">Approved</span></td></tr><tr><th scope="row"><a href="#">#2147</a></th><td>Bridie Kessler</td><td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td><td>$47</td><td><span class="badge bg-warning">Pending</span></td></tr><tr><th scope="row"><a href="#">#2049</a></th><td>Ashleigh Langosh</td><td><a href="#" class="text-primary">At recusandae consectetur</a></td><td>$147</td><td><span class="badge bg-success">Approved</span></td></tr><tr><th scope="row"><a href="#">#2644</a></th><td>Angus Grady</td><td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td><td>$67</td><td><span class="badge bg-danger">Rejected</span></td></tr><tr><th scope="row"><a href="#">#2644</a></th><td>Raheem Lehner</td><td><a href="#" class="text-primary">Sunt similique distinctio</a></td><td>$165</td><td><span class="badge bg-success">Approved</span></td></tr></tbody>
                  </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 5 of 5 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"></ul></nav></div></div>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Selling <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Budget Report <span>| This Month</span></h5>

              <div id="budgetChart" style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" class="echart" _echarts_instance_="ec_1693420556278"><div style="position: relative; width: 274px; height: 400px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;"><canvas data-zr-dom-id="zr_0" width="274" height="400" style="position: absolute; left: 0px; top: 0px; width: 274px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" class="echart" _echarts_instance_="ec_1693420556279"><div style="position: relative; width: 274px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="274" height="400" style="position: absolute; left: 0px; top: 0px; width: 274px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

















 @endsection

