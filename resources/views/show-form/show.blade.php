@extends('website.portal.app')
@section('css')
    <style>
        @media print {
            .noPrint{
                display:none;
            }
        }
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
                        {{-- <button onclick="printDiv('printableArea')" class="noPrint">
                            Print Application
                        </button> --}}
                        <div class="row" id="printableArea">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">
                                            <h3>The Assam Biotechnology Council</h3>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center">
                                            <h5>{{ $application->applicationType->description }}</h5>
                                        </th>
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
                                        <td><a href="{{ Storage::disk('public')->url($application->BasicInformation->certificate_of_incorporation) }}"
                                                class="btn btn" target="_blank"><i class="fa fa-download"
                                                    aria-hidden="true"></i> CERTIFICATE OF INCORPORATION</a></td>
                                        <td><a href="{{ Storage::disk('public')->url($application->BasicInformation->pan_coppy) }}"
                                                class="btn btn" target="_blank"><i class="fa fa-download"
                                                    aria-hidden="true"></i> PAN CARD</a></td>
                                        <td><a href="{{ Storage::disk('public')->url($application->BasicInformation->registration_coppy) }}"
                                                class="btn btn" target="_blank"><i class="fa fa-download"
                                                    aria-hidden="true"></i> GST REGISTRATION NO</a></td>
                                        <td></td>
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
                                </thead>
                            </table>
                            @if ($application->startUps)
                                <table class="table table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan=4>
                                                <h5>Brief description of Start-up in terms of following:</h5>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>BUSINESS IDEA :</th>
                                            <td>{{ $application->startUps->business_idea }}</td>
                                            <th>PRODUCT / SERVICE :</th>
                                            <td>{{ $application->startUps->product_service }}</td>
                                        </tr>

                                        <tr>
                                            <th>TECHNOLOGY:</th>
                                            <td>{{ $application->startUps->technology }}</td>
                                            <th>MANAGEMENT APPROACH FOR EFFLUENT DISCHARGE :</th>
                                            <td>{{ $application->startUps->approach }}</td>
                                        </tr>

                                        <tr>
                                            <th>MENTORS NAME, IF AVAILABLE :</th>
                                            <td>{{ $application->startUps->mentor }}</td>
                                            <th>INCUBATOR NAME AND ADDRESS, IF APPLICABLE :</th>
                                            <td>{{ $application->startUps->incubator }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            @endif
                            @if ($application->incubation)
                                <table class="table table-responsive table-bordered">
                                    <thead>

                                        <tr>
                                            <th colspan=6>
                                                <h5>Details of Eligible Incubators:</h5>
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>LOCATION ADDRESS :</th>
                                            <td colspan=2>{{ $application->incubation->location_address }}</td>
                                            <th>AREA OF THE LAND / OFFICE SPACE :</th>
                                            <td colspan=2>{{ $application->incubation->area_office_space }}</td>
                                        </tr>

                                        <tr>
                                            <th>PROOF OF LAND/OFFICE SPACE POSSESSION:</th>
                                            <td colspan=2>{{ $application->incubation->proff_of_land_incubator }}</td>
                                            <th>BRIEF DESCRIPTION OF THE PROJECT:</th>
                                            <td colspan=2>{{ $application->incubation->incubator_description }}</td>
                                        </tr>

                                        <tr>
                                            <th>PROOF OF LAND/OFFICE SPACE POSSESSION:</th>
                                            <td colspan=2>{{ $application->incubation->proff_of_land_incubator }}</td>
                                            <th>BRIEF DESCRIPTION OF THE PROJECT:</th>
                                            <td colspan=2>{{ $application->incubation->incubator_description }}</td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ Storage::disk('public')->url($application->incubation->detailed_project_report) }}"
                                                class="btn btn" target="_blank"><i class="fa fa-download"
                                                    aria-hidden="true"></i> DETAILED PROJECT REPORT</a></td>
                                            <td colspan=5><a href="{{ Storage::disk('public')->url($application->incubation->incubator_noc) }}"
                                                class="btn btn" target="_blank"><i class="fa fa-download"
                                                    aria-hidden="true"></i> NOC</a></td>
                                        </tr>

                                        @foreach ($application->incubationSchedule as $sche)
                                        <tr>
                                            <th>{{$sche->master->name}}</th>
                                            <td>{{$sche->year_i}}</td>
                                            <td>{{$sche->year_ii}}</td>
                                            <td>{{$sche->year_ii}}</td>
                                            <td>{{$sche->year_iv}}</td>
                                            <td>{{$sche->year_v}}</td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                </table>
                            @endif
                            @if ($application->BTUnitDetails)
                                <table class="table table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan=6>
                                                <h5>Details of Eligible BT Unit:</h5>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>NEW UNIT OR EXPANSION/DIVERSIFICATION: </th>
                                            <td>{{ $application->BTUnitDetails->unit_expansion }}</td>
                                            <th>LOCATION ADDRESS:</th>
                                            <td>{{ $application->BTUnitDetails->location_ib }}</td>
                                            <th>AREA OF THE LAND / OFFICE SPACE:</th>
                                            <td>{{ $application->BTUnitDetails->office_space }}</td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ Storage::disk('public')->url($application->BTUnitDetails->proff_of_land_doc) }}"
                                                class="btn btn" target="_blank"><i class="fa fa-download"
                                                    aria-hidden="true"></i> PROOF OF LAND</a>
                                            </td>
                                            <td>
                                                <a href="{{ Storage::disk('public')->url($application->BTUnitDetails->noc_ib) }}"
                                                    class="btn btn" target="_blank"><i class="fa fa-download"
                                                        aria-hidden="true"></i> NOC</a>
                                            </td>
                                            <td>
                                                <a href="{{ Storage::disk('public')->url($application->BTUnitDetails->report_ib) }}"
                                                    class="btn btn" target="_blank"><i class="fa fa-download"
                                                        aria-hidden="true"></i> PROJECT REPORT</a>
                                            </td>
                                            <td colspan="3">
                                                <a href="{{ Storage::disk('public')->url($application->BTUnitDetails->description_ib) }}"
                                                    class="btn btn" target="_blank"><i class="fa fa-download"
                                                        aria-hidden="true"></i> BRIEF DESCRIPTION OF THE PROJECT</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>SL</th>
                                            <th>Year 1</th>
                                            <th>Year 2</th>
                                            <th>Year 3</th>
                                            <th>Year 4</th>
                                            <th width=10%>Year 5</th>
                                        </tr>
                                        @foreach ($application->RecruitmentSchedule as $sche)
                                            <tr>
                                                <th>{{ $sche->master->name }}</th>
                                                <td>{{ $sche->year_i }}</td>
                                                <td>{{ $sche->year_ii }}</td>
                                                <td>{{ $sche->year_iii }}</td>
                                                <td>{{ $sche->year_iv }}</td>
                                                <td>{{ $sche->year_v }}</td>
                                            </tr>
                                        @endforeach
                                    </thead>
                                </table>
                            @endif
                            @if ($application->UndertakingExpansion)
                                <table class="table table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan=4>
                                                <h5>For Existing Units, undertaking Expansion/Diversification</h5>
                                            </th>
                                        </tr>
                                        <tr>
                                            {{-- {{dd($application->UndertakingExpansion)}} --}}
                                            <th>NUMBER OF EMPLOYEES IN EXISTING UNIT:</th>
                                            <td>{{ $application->UndertakingExpansion->no_of_employee }}</td>
                                            <th>ESTIMATED ANNUAL EPF CONTRIBUTION FOR CURRENT EMPLOYEES :</th>
                                            <td>{{ $application->UndertakingExpansion->annual_epf ?? 'NA' }}</td>
                                        </tr>
                                        <tr>
                                            <th>AVERAGE OF LAST ONE YEAR’S ELECTRICITY CONSUMPTION IN UNITS:</th>
                                            <td>{{ $application->UndertakingExpansion->electricity_consupt }}</td>
                                            <th colspan=2>
                                                <a href="{{ Storage::disk('public')->url($application->UndertakingExpansion->current_area) }}"
                                                    class="btn btn" target="_blank"><i class="fa fa-download"
                                                        aria-hidden="true"></i> PROJECT REPORT</a>
                                            </th>
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
                                    </thead>
                                </table>
                            @endif
                            @if ($application->FinancialProjection->count() > 0)
                                <table class="table table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan=6>
                                                <h5>Financial Projections of the Project (in Rs.)</h5>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>SL</th>
                                            <th>Year 1</th>
                                            <th>Year 2</th>
                                            <th>Year 3</th>
                                            <th>Year 4</th>
                                            <th>Year 5</th>
                                        </tr>
                                        @foreach ($application->FinancialProjection as $project)
                                            <tr>
                                                <th>{{ $project->master->name ?? 'NA' }}</th>
                                                <td>{{ $project->year_i }}</td>
                                                <td>{{ $project->year_ii }}</td>
                                                <td>{{ $project->year_iii }}</td>
                                                <td>{{ $project->year_iv }}</td>
                                                <td>{{ $project->year_v }}</td>
                                            </tr>
                                        @endforeach
                                    </thead>
                                </table>
                            @endif
                            @if ($application->DetailsBTPark)
                                <table class="table table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan=4>
                                                <h5>Details of Proposed BT Park / R&D Institute / Finishing School:</h5>
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
                                        <tr>
                                            <td><a href="{{ Storage::disk('public')->url($application->DetailsBTPark->proff_of_land) }}"
                                                    class="btn btn" target="_blank"><i class="fa fa-download"
                                                        aria-hidden="true"></i> PROFF OF LAND</a></td>
                                            <td><a href="{{ Storage::disk('public')->url($application->DetailsBTPark->project_report) }}"
                                                    class="btn btn" target="_blank"><i class="fa fa-download"
                                                        aria-hidden="true"></i> PROJECT REPORT</a></td>
                                            <td><a href="{{ Storage::disk('public')->url($application->DetailsBTPark->noc_certificate) }}"
                                                    class="btn btn" target="_blank"><i class="fa fa-download"
                                                        aria-hidden="true"></i> NOC</a></td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                </table>
                            @endif
                            @if ($application->ProjectCoast->count() > 0)
                                <table class="table table-responsive table-bordered">
                                    <thead>

                                        <tr>
                                            <th colspan=4>
                                                <h5>Project Cost:</h5>
                                            </th>
                                        </tr>
                                        @foreach ($application->ProjectCoast as $coast)
                                            <tr>
                                                <th>PROJECT COMPONENT:</th>
                                                <td>{{ $coast->component_name }}</td>
                                                <th>COST (IN RS.):</th>
                                                <td>{{ $coast->coast }}</td>
                                            </tr>
                                        @endforeach

                                    </thead>
                                </table>
                            @endif
                            @if ($application->MeansOfFinancing)
                                <table class="table table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan=4>
                                                <h5>Means of Financing the Project (in Rs.):<h5>
                                            </th>
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
                                        <tr>
                                            <th><a href="{{ Storage::disk('public')->url($application->MeansOfFinancing->loan_selection_letter) }}"
                                                class="btn btn" target="_blank"><i class="fa fa-download"
                                                    aria-hidden="true"></i> DEBT/BORROWING (LOAN SANCTION LETTER)</a></th>
                                        </tr>
                                    </thead>
                                </table>
                            @endif
                            @if ($application->AssistanceSought->count() > 0)
                                <table class="table table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan=4>
                                                <h5>Assistance Sought under the scheme:</h5>
                                            </th>
                                        </tr>
                                        @foreach ($application->AssistanceSought as $sought)
                                            <tr>
                                                <th>{{ $sought->master->type }}</th>
                                                <td>{{ $sought->amount }}</td>
                                                <td colspan=2>{{ $sought->remarks }}</td>
                                            </tr>
                                        @endforeach
                                    </thead>
                                </table>
                            @endif
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    @if ($application->BankACDetails)
                                        <tr>
                                            <th colspan=4>
                                                <h5>Bank Account Details:</h5>
                                            </th>
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
                            </table><br />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
@section('js')
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection
