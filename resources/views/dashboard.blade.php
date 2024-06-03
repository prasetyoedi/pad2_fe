<x-app-layout>
    @extends('layouts.layout')

    <body style="background-color: #F6F6F7;">
        <!-- <div class="shadow-box top-bar d-flex justify-content-between align-items-center">
        <img src="assets/logo-small.png" alt="Logo PDU">
        <div class="d-flex">
            <div class="tab-active d-flex align-items-center">
                <img src="assets/ic_monitor.svg" alt="ic_monitor">
                <span>Monitoring</span>
            </div>
            <div class="tab-inactive d-flex align-items-center">
                <img src="assets/ic_history.svg" alt="ic_history">
                <span>History</span>
            </div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <img src="assets/ic_admin.svg" alt="ic_admin">
            <div class="d-flex flex-column">
                <span class="title">Budi Bambang</span>
                <span class="bodytext gray">Admin</span>
            </div>
            <div class="d-flex justify-content-center align-items-center" style="height: 36px; width: 36px;">
                <a href="index.html">
                    <img src="assets/ic_logout.svg" alt="ic_logout">
                </a>
            </div>
        </div>
    </div> -->

        <!-- <div class="w3-sidebar w3-bar-block w3-xxlarge" style="width:80px">
            <a href="#" class="w3-bar-item w3-button"><img src="assets/img/logo.png" alt="Logo PDU"></a>
            <a href="#" class="w3-bar-item w3-button"><img src="assets/img/monitor.png" alt="ic_monitor"></a>
            <a href="#" class="w3-bar-item w3-button"><img src="assets/img/history.png" alt="ic_admin"></a>
            <a href="#" class="w3-bar-item w3-button" style="margin-top: 630px;"><img src="assets/img/account.png"
                    alt="ic_admin"></a>
        </div> -->

        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                style="color: rgba(41, 38, 65, 0.50); margin-left: 15px;">Organization</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                style="color: var(--Monochrome-100, #292641); font-weight: 500;">Pertamina</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="margin-left: 32px;">Well Name </a>
                        </li>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                IJN 9-1
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="margin-left: 32px;">Rig Name </a>
                        </li>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                EPI-9
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="margin-left: 32px; color: rgba(41, 38, 65, 0.50);">Rig
                                Activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rig
                                Tripping Out</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                style="margin-left: 32px; color: rgba(41, 38, 65, 0.50);">Date</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="currentDateTime"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->

        <!--* Sidebar -->
        <div class="row mt-3 sidebar">
            <div class="col-md-2 kol1">
                <div class="wrap">
                    <div class="row">
                        <div class="col-md-5 nama">Bit Depth</div>
                        <div class="col-md-4 nilai" id="bit_depth">1779.95</div>
                        <div class="col-md-3 satuan">m</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">AirRate</div>
                        <div class="col-md-4 nilai" id="air_rate">1779.95</div>
                        <div class="col-md-3 satuan">scfm</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">MudCondIn</div>
                        <div class="col-md-4 nilai" id="mud_cond_in">1779.95</div>
                        <div class="col-md-3 satuan">m</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">BlockPos</div>
                        <div class="col-md-4 nilai" id="block_pos">1779.95</div>
                        <div class="col-md-3 satuan">m</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">WOB</div>
                        <div class="col-md-4 nilai" id="wob">1779.95</div>
                        <div class="col-md-3 satuan">klb</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">ROP</div>
                        <div class="col-md-4 nilai" id="rop">1779.95</div>
                        <div class="col-md-3 satuan">m/hr</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">Bv Depth</div>
                        <div class="col-md-4 nilai" id="bv_depth">1779.95</div>
                        <div class="col-md-3 satuan">m</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">MudCondOut</div>
                        <div class="col-md-4 nilai" id="mud_cond_out">1779.95</div>
                        <div class="col-md-3 satuan">mmho</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">Torque</div>
                        <div class="col-md-4 nilai" id="torque">1779.95</div>
                        <div class="col-md-3 satuan">klbft</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">RPM</div>
                        <div class="col-md-4 nilai" id="rpm">1779.95</div>
                        <div class="col-md-3 satuan">rpm</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">Hookload</div>
                        <div class="col-md-4 nilai" id="hookload">1779.95</div>
                        <div class="col-md-3 satuan">klb</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">Log Depth</div>
                        <div class="col-md-4 nilai" id="log_depth">1779.95</div>
                        <div class="col-md-3 satuan">m</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">H2S-1</div>
                        <div class="col-md-4 nilai" id="h2s_1">1779.95</div>
                        <div class="col-md-3 satuan">ppm</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">MudFlowOut</div>
                        <div class="col-md-4 nilai" id="mud_flow_out">1779.95</div>
                        <div class="col-md-3 satuan">gpm</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">Total SPM</div>
                        <div class="col-md-4 nilai" id="total_spm">1779.95</div>
                        <div class="col-md-3 satuan">spm</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">Standpipe Press</div>
                        <div class="col-md-4 nilai" id="standpipe_press">1779.95</div>
                        <div class="col-md-3 satuan">psi</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">CO2-1</div>
                        <div class="col-md-4 nilai" id="mud_flow_in">1779.95</div>
                        <div class="col-md-3 satuan">spm</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">Gas</div>
                        <div class="col-md-4 nilai" id="gas">1779.95</div>
                        <div class="col-md-3 satuan">spm</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">MudTempIn</div>
                        <div class="col-md-4 nilai" id="mud_temp_in">1779.95</div>
                        <div class="col-md-3 satuan">&deg;C</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">MudTempOut</div>
                        <div class="col-md-4 nilai" id="mud_temp_out">1779.95</div>
                        <div class="col-md-3 satuan">&deg;C</div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-5 nama">Tank Vol.</div>
                        <div class="col-md-4 nilai" id="tank_vol">1779.95</div>
                        <div class="col-md-3 satuan">sbbl</div>
                    </div>
                </div>
            </div>

            <div class="col-md-10 kol2">
                <div class="d-flex gap-3 px-3 ">
                    <!-- Legenda chart 1 -->
                    <div class="w-100 shadow-box px-3 py-2">
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3 mt-2">
                                <span class="bodytext">Air Rate (scfm)</span>
                                <div class="tag" id="air_rate">0</div>
                            </div>
                            <div style="height: 2px; background-color: #1d1dff;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">2000</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Mud Conduct. In</span>
                                <div class="tag">512</div>
                            </div>
                            <div style="height: 2px; background-color:#00ff00;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">m m h o</span>
                                <span class="bodytext gray">10000</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Block Position</span>
                                <div class="tag">2479</div>
                            </div>
                            <div style="height: 2px; background-color: #ff00ff;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">m</span>
                                <span class="bodytext gray">150</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">WOB</span>
                                <div class="tag">27</div>
                            </div>
                            <div style="height: 2px; background-color: #800000;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">klb</span>
                                <span class="bodytext gray">50</span>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">ROP</span>
                                <div class="tag">1381</div>
                            </div>
                            <div style="height: 2px; background-color: #00ffff;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">m/hr</span>
                                <span class="bodytext gray">2000</span>
                            </div>
                        </div>
                    </div>

                    <!-- Legenda chart 2 -->
                    <div class="w-100 shadow-box px-3 py-2">
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3 mt-5">
                                <span class="bodytext">Mud Conduct. Out</span>
                                <div class="tag">512</div>
                            </div>
                            <div style="height: 2px; background-color: #0000ff;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">m m h o</span>
                                <span class="bodytext gray">10000</span>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Torque</span>
                                <div class="tag">512</div>
                            </div>
                            <div style="height: 2px; background-color: #00ff00;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">klb.ft</span>
                                <span class="bodytext gray">2000</span>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">RPM Total</span>
                                <div class="tag">2479</div>
                            </div>
                            <div style="height: 2px; background-color: #ff00ff"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">150</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Hookload</span>
                                <div class="tag">27</div>
                            </div>
                            <div style="height: 2px; background-color: #00ffff"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">klb</span>
                                <span class="bodytext gray">50</span>
                            </div>
                        </div>
                    </div>

                    <!-- Legenda chart 3 -->
                    <div class="w-100 shadow-box px-3 py-2">
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <span class="bodytext">H2S-1</span>
                                <div class="tag">512</div>
                            </div>
                            <div style="height: 2px; background-color: #0000ff;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">2000</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Mud Flow Out (%)</span>
                                <div class="tag">512</div>
                            </div>
                            <div style="height: 2px; background-color: #00ff00;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">10000</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Total SPM</span>
                                <div class="tag">2479</div>
                            </div>
                            <div style="height: 2px; background-color: #ff00ff;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">150</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Standpipe Press.</span>
                                <div class="tag">27</div>
                            </div>
                            <div style="height: 2px; background-color: #00ffff"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">50</span>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Mud Flow In</span>
                                <div class="tag">1381</div>
                            </div>
                            <div style="height: 2px; background-color: #800000"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">2000</span>
                            </div>
                        </div>
                    </div>

                    <!-- Legenda chart 4 -->
                    <div class="w-100 shadow-box px-3 py-2">
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <span class="bodytext">CO2-1</span>
                                <div class="tag">512</div>
                            </div>
                            <div style="height: 2px; background-color: #ff0000;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">2000</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Gas</span>
                                <div class="tag">512</div>
                            </div>
                            <div style="height: 2px; background-color: #00ff00"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">10000</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Mud Temperature In</span>
                                <div class="tag">2479</div>
                            </div>
                            <div style="height: 2px; background-color: #ff00ff"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">150</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Mud Temperature Out</span>
                                <div class="tag">27</div>
                            </div>
                            <div style="height: 2px; background-color: #00ffff"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="bodytext gray">0</span>
                                <span class="bodytext gray">50</span>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="bodytext">Tank Vol. (total)</span>
                                <div class="tag">1381</div>
                            </div>
                            <div style="height: 2px; background-color: #800000"></div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="bodytext gray">0</span>
                            <span class="bodytext gray">2000</span>
                        </div>
                    </div>
                </div>

                <!-- Chart section -->
                <div class="d-flex gap-3 p-3" style="height: 64vh">
                    <div class="shadow-box p-2 w-100">
                        <canvas class="chart" id="myChart1"></canvas>
                    </div>
                    <div class="shadow-box p-2 w-100">
                        <canvas class="chart" id="myChart2"></canvas>
                    </div>
                    <div class="shadow-box p-2 w-100">
                        <canvas class="chart" id="myChart3"></canvas>
                    </div>
                    <div class="shadow-box p-2 w-100">
                        <canvas class="chart" id="myChart4"></canvas>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>