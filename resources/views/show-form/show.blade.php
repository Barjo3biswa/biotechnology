@extends('website.portal.app')
@section('css')
    <style>
        .form-container {
            max-width: 100%;
            margin: 0 auto;
            background-color: #5d9b46;
            padding: 40px;
            border-radius: 5px;
            margin-bottom: 2rem;
        }

        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            color: #ffffff;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #fafafa;
            color: #333333;
            box-shadow: 0 2px 5px rgba(250, 250, 250, 0.1);
        }

        .error-msg {
            color: #e98181;
        }


        .loader {
            position: fixed;
            top: 50%;
            right: 40%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            /* background-color: white; */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            max-width: 400px;
        }


        .white-green .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            color: rgb(46, 43, 43);
        }
    </style>
    @livewireStyles
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
@section('content')
    <section class="pt-30">
        <div class="container pb-40 pt-30">
            <div class="section-content">
                <section>
                    <div class="col-md-12" style="width: 100%">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="text-align: center"><h3>The Assam Biotechnology Council</h3></th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center"><h5>{{ $application->applicationType->description }}</h5></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50%" colspan=2>Application No</th>
                                        <th width="50%" colspan=2></th>
                                    </tr>
                                    <tr>
                                        <th>NAME OF THE UNIT</th>
                                        <td width="30%">{{ $application->BasicInformation->unit_name }}</td>
                                        <th>Application No</th>
                                        <td width="30%">{{ $application->BasicInformation->phone_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>MOBILE</th>
                                        <td>{{ $application->BasicInformation->phone_no }}</td>
                                        <th>EMAIL</th>
                                        <td>{{ $application->BasicInformation->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>TYPE OF THE ENTITY </th>
                                        <td>{{ $application->BasicInformation->EntityType->name }}</td>
                                        <th>Unit/Agency/Institution Registered with DSIR/CSIR No.</th>
                                        <td>{{ $application->BasicInformation->dsr_csr_reg_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>GST NO </th>
                                        <td>{{ $application->BasicInformation->gst_no }}</td>
                                        <th>PAN NO</th>
                                        <td>{{ $application->BasicInformation->pan_no }}</td>
                                    </tr>
                                    <tr>
                                        <th colspan=4>DIRECTORS/ PROMOTORS Details:</th>
                                    </tr>
                                    @foreach ($application->Directors as $director)
                                        <tr>
                                            <th>NAME:</th>
                                            <td>{{ $director->name }}</td>
                                            <th>DIN /PAN No.:</th>
                                            <td>{{ $director->din_pan_no }}</td>
                                        </tr>
                                        <tr>
                                            <th>EMAIL:</th>
                                            <td>{{ $director->email }}</td>
                                            <th>CONTACT NO No.:</th>
                                            <td>{{ $director->contact_no }}</td>
                                        </tr>
                                        <tr>
                                            <th>ADDRESS:</th>
                                            <td>{{ $director->address }}</td>
                                        </tr>
                                    @endforeach

                                    @if ($application->BTUnitDetails)
                                        <tr>
                                            <th colspan=4><h3>Details of Eligible BT Unit:</h3></th>
                                        </tr>
                                        <tr>
                                            <th>NEW UNIT OR EXPANSION/DIVERSIFICATION: </th>
                                            <td>{{$application->BTUnitDetails->unit_expansion}}</td>
                                            <th>LOCATION ADDRESS:</th>
                                            <td>{{$application->BTUnitDetails->location_ib}}</td>
                                        </tr>
                                        <tr>
                                            <th>AREA OF THE LAND / OFFICE SPACE:: </th>
                                            <td>{{$application->BTUnitDetails->office_space}}</td>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach ($application->RecruitmentSchedule as $sche)
                                            <tr>
                                                <th>{{$sche->master->name}}</th>
                                                <td colspan="3">{{$sche->year_i}}, {{$sche->year_ii}}, {{$sche->year_iii}}, {{$sche->year_iv}}, {{$sche->year_v}}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    @if ($application->UndertakingExpansion)
                                        <tr>
                                            <th colspan=4>
                                                <h3>For Existing Units, undertaking Expansion/Diversification</h3></th>
                                        </tr>
                                        <tr>
                                            {{-- {{dd($application->UndertakingExpansion)}} --}}
                                            <th>NUMBER OF EMPLOYEES IN EXISTING UNIT:</th>
                                            <td>{{ $application->UndertakingExpansion->no_of_employee }}</td>
                                            <th>ESTIMATED ANNUAL EPF CONTRIBUTION FOR CURRENT EMPLOYEES :</th>
                                            <td>{{ $application->UndertakingExpansion->annual_epf??"NA" }}</td>
                                        </tr>
                                        <tr>
                                            <th>AVERAGE OF LAST ONE YEAR’S ELECTRICITY CONSUMPTION IN UNITS:</th>
                                            <td>{{ $application->UndertakingExpansion->electricity_consupt }}</td>
                                            <th></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>ANNUAL TURNOVER OF LAST THREE YEARS:</th>
                                            <td>Year I: {{ $application->UndertakingExpansion->year_i }}</td>
                                            <td>Year II: {{ $application->UndertakingExpansion->year_ii }}</td>
                                            <td>Year III: {{ $application->UndertakingExpansion->year_iii }}</td>
                                        </tr>
                                        <tr>
                                            <th>VAT/CST/GST PAID TO GOVERNMENT OF ASSAM OVER LAST THREE YEARS:</th>
                                            <td>Year I: {{ $application->UndertakingExpansion->vat_year_i }}</td>
                                            <td>Year II: {{ $application->UndertakingExpansion->vat_year_ii }}</td>
                                            <td>Year III: {{ $application->UndertakingExpansion->vat_year_iii }}</td>
                                        </tr>
                                    @endif

                                    @if ($application->FinancialProjection)
                                        <tr>
                                            <th colspan=4><h3>Financial Projections of the Project (in Rs.)</h3></th>
                                        </tr>
                                        @foreach ($application->FinancialProjection as $project)
                                        {{-- {{dd($project->master->name)}} --}}
                                            <tr>
                                                <th>{{$project->master->name??"NA"}}</th>
                                                <td colspan="3">{{$project->year_i}}, {{$project->year_ii}}, {{$project->year_iii}}, {{$project->year_iv}}, {{$project->year_v}}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    @if ($application->DetailsBTPark)
                                        <tr>
                                            <th colspan=4><h3>Details of Proposed BT Park / R&D Institute / Finishing School:</h3>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>LOCATION ADDRESS:</th>
                                            <td>{{ $application->DetailsBTPark->location }}</td>
                                            <th>FINALIZED AREA OF THE LAND:</th>
                                            <td>{{ $application->DetailsBTPark->area_of_land }}</td>
                                        </tr>
                                        <tr>
                                            <th>DESCRIPTION:</th>
                                            <th colspan="3">{{ $application->DetailsBTPark->description }}</th>
                                        </tr>
                                    @endif

                                    @if ($application->ProjectCoast)
                                        <tr>
                                            <th colspan=4><h3>Project Cost:</h3></th>
                                        </tr>
                                        @foreach ($application->ProjectCoast as $coast)
                                            <tr>
                                                <th>PROJECT COMPONENT:</th>
                                                <td>{{ $coast->component_name }}</td>
                                                <th>COST (IN RS.):</th>
                                                <td>{{ $coast->coast }}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    @if ($application->MeansOfFinancing)
                                        <tr>
                                            <th colspan=4><h3>Means of Financing the Project (in Rs.):<h3></th>
                                        </tr>
                                        <tr>
                                            <th>TOTAL PROJECT COST:</th>
                                            <td>{{ $application->MeansOfFinancing->tot_coast }}</td>
                                            <th>PROMOTORS CONTRIBUTION:</th>
                                            <td>{{ $application->MeansOfFinancing->promoters_contribution }}</td>
                                        </tr>
                                        <tr>
                                            <th>CONTRIBUTION FROM ENTERPRISES OCCUPYING PARK :</th>
                                            <td>{{ $application->MeansOfFinancing->enterprise_contribution }}</td>
                                            <th>EXPECTED ASSISTANCE FROM GOVERNMENT OF ASSAM:</th>
                                            <td>{{ $application->MeansOfFinancing->expect_from_ass_gov }}</td>
                                        </tr>
                                        <tr>
                                            <th>EXPECTED ASSISTANCE FROM OTHER GOVERNMENT ORGANIZATIONS::</th>
                                            <td>{{ $application->MeansOfFinancing->expect_from_oth_gov }}</td>
                                            <th>Total:</th>
                                            <td>{{ $application->MeansOfFinancing->total }}</td>
                                        </tr>
                                    @endif

                                    @if ($application->AssistanceSought)
                                        <tr>
                                            <th colspan=4><h3>Assistance Sought under the scheme:</h3></th>
                                        </tr>
                                        @foreach ($application->AssistanceSought as $sought)
                                            <tr>
                                                <th>{{ $sought->master->type }}</th>
                                                <td>{{ $sought->amount }}</td>
                                                <td colspan=2>{{ $sought->remarks }}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    @if ($application->BankACDetails)
                                        <tr>
                                            <th colspan=4><h3>Bank Account Details:</h3></th>
                                        </tr>
                                        <tr>
                                            <th>NAME OF ACCOUNT HOLDER:</th>
                                            <td>{{ $application->BankACDetails->ac_hol_name }}</td>
                                            <th>NAME AND ADDRESS OF BANK:</th>
                                            <td>{{ $application->BankACDetails->bank_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>BANK ACCOUNT NUMBER:</th>
                                            <td>{{ $application->BankACDetails->account_number }}</td>
                                            <th>IFSC CODE:</th>
                                            <td>{{ $application->BankACDetails->ifsc_code }}</td>
                                        </tr>
                                        <tr>
                                            <th>RTGS DETAILS:</th>
                                            <td>{{ $application->BankACDetails->rtgs_dts }}</td>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    @endif

                                </thead>
                                <tbody>

                                </tbody>
                            </table><br />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
