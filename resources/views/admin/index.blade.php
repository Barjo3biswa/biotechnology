@extends('admin.layout.app')
@section('content')
    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">
                <div class="row">

                    <!-- order-card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-blue order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">BT Park/ R&D Institute / Finishing School</h6>
                                <h2 class="text-right"><i class="ti-reload f-left"></i><span>{{getDashboardCount("AnnexureIA",null)}}</span>
                                </h2>
                                <p class="m-b-0">Viewed<span class="f-right">{{getDashboardCount("AnnexureIA","viewed")}}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">ASSISTANCE FOR BT UNIT</h6>
                                <h2 class="text-right"><i class="ti-reload f-left"></i><span>{{getDashboardCount("AnnexureIB",null)}}</span></h2>
                                <p class="m-b-0">Viewed<span class="f-right">{{getDashboardCount("AnnexureIB","viewed")}}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">START UPS</h6>
                                <h2 class="text-right"><i class="ti-reload f-left"></i><span>{{getDashboardCount("AnnexureIC",null)}}</span>
                                </h2>
                                <p class="m-b-0">Viewed<span class="f-right">{{getDashboardCount("AnnexureIC","viewed")}}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Incubators/Incubation Centers</h6>
                                <h2 class="text-right"><i class="ti-reload f-left"></i><span>{{getDashboardCount("AnnexureID",null)}}</span>
                                </h2>
                                <p class="m-b-0">Viewed<span class="f-right">{{getDashboardCount("AnnexureID","viewed")}}</span></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="styleSelector">

            </div>
        </div>
    </div>
@endsection
