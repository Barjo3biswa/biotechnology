@extends('admin.layout.app')
@section('content')
<div class="main-body">
    <div class="page-wrapper">
        <div class="card">
            <div class="card-header">
                <h5>
                    @if ($decrypted == "AnnexureIA")
                        Application Form for Availing Assistance for BT Park/ R&D Institute / Finishing School
                    @elseif ($decrypted == "AnnexureIB")
                        Application Form for AVAILING ASSISTANCE FOR BT UNIT
                    @elseif ($decrypted == "AnnexureIC")
                        Application Form for AVAILING ASSISTANCE FOR START UPS
                    @elseif ($decrypted == "AnnexureID")
                        Application Form for Availing Assistance for BT Incubators/Incubation Centers
                    @endif
                    {{-- {{$decrypted}} --}}
                </h5>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Application No</th>
                                <th>Application Type</th>
                                <th>Unit Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($application as $key=>$app)
                            @php
                            // if($app->application_status=="created")
                            //     $colour = "rgba(10, 199, 20, 0.63)";
                            // elseif($app->application_status=="viewed")
                            //     $colour = "rgba(190, 89, 30, 0.63)";
                            @endphp
                                <tr {{-- style="color: rgba(190, 89, 30, 0.63)" --}}>
                                    <th>{{ ++$key }}</th>
                                    <th>{{$app->application_no}}</th>
                                    <th>{{$app->application_type}}</th>
                                    <th>{{$app->BasicInformation->unit_name}}</th>
                                    <th>
                                        @if($app->application_status=="created")
                                            <span class="label label-success">created</span>
                                        @elseif($app->application_status=="viewed")
                                            <span class="label label-warning">viewed</span>
                                        @endif
                                    </th>
                                    <th>
                                        <a href="{{route('view-application-admin',Crypt::encrypt($app->id))}}" class="btn btn-primary btn-sm">View</a>
                                    </th>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan=3>No Item found</th>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
