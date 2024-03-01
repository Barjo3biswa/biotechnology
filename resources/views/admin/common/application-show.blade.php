<div class="row" id="printableArea">
    <table class="table table-bordered">
            <tr>
                <th style="text-align: center; white-space: nowrap !important;" >
                    <h3>The Assam Biotechnology Council</h3>
                </th>
            </tr>
            <tr>
                <th style="text-align: center; white-space: nowrap !important;">
                    <h5>{{ $application->applicationType->description }}</h5>
                </th>
            </tr>
    </table>
    <table class="table table-bordered">
            <tr>
                <th width="50%" >Application No</th>
                <th width="50%" colspan=3>{{ $application->application_no }}</th>
            </tr>
            <tr>
                <th width="25%">NAME OF THE UNIT</th>
                <td width="25%">{{ $application->BasicInformation->unit_name }}</td>
                <th width="25%">Application No</th>
                <td width="25%">{{ $application->BasicInformation->phone_no }}</td>
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
            <tr class="noPrint">
                <td><a href="{{ Storage::disk('public')->url($application->BasicInformation->certificate_of_incorporation) }}"
                         target="_blank"><i class="fa fa-download"
                            aria-hidden="true"></i> CERTIFICATE OF INCORPORATION</a></td>
                <td><a href="{{ Storage::disk('public')->url($application->BasicInformation->pan_coppy) }}"
                         target="_blank"><i class="fa fa-download"
                            aria-hidden="true"></i> PAN CARD</a></td>
                <td><a href="{{ Storage::disk('public')->url($application->BasicInformation->registration_coppy) }}"
                         target="_blank"><i class="fa fa-download"
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

    </table>
    @if ($application->startUps)
        <table class="table table-bordered">

                <tr >
                    <th colspan=4 style="white-space: nowrap !important;" >
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

        </table>
    @endif
    @if ($application->incubation)
        <table class="table table-bordered">


                <tr>
                    <th colspan=6 style="white-space: nowrap !important;">
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
                <tr class="noPrint">
                    <td><a href="{{ Storage::disk('public')->url($application->incubation->detailed_project_report) }}"
                         target="_blank"><i class="fa fa-download"
                            aria-hidden="true"></i> DETAILED PROJECT REPORT</a></td>
                    <td colspan=5><a href="{{ Storage::disk('public')->url($application->incubation->incubator_noc) }}"
                         target="_blank"><i class="fa fa-download"
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

        </table>
    @endif
    @if ($application->BTUnitDetails)
        <table class="table table-bordered">

                <tr>
                    <th colspan=6 style="white-space: nowrap !important;" >
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
                <tr class="noPrint">
                    <td><a href="{{ Storage::disk('public')->url($application->BTUnitDetails->proff_of_land_doc) }}"
                         target="_blank"><i class="fa fa-download"
                            aria-hidden="true"></i> PROOF OF LAND</a>
                    </td>
                    <td>
                        <a href="{{ Storage::disk('public')->url($application->BTUnitDetails->noc_ib) }}"
                             target="_blank"><i class="fa fa-download"
                                aria-hidden="true"></i> NOC</a>
                    </td>
                    <td>
                        <a href="{{ Storage::disk('public')->url($application->BTUnitDetails->report_ib) }}"
                             target="_blank"><i class="fa fa-download"
                                aria-hidden="true"></i> PROJECT REPORT</a>
                    </td>
                    <td colspan="3">
                        <a href="{{ Storage::disk('public')->url($application->BTUnitDetails->description_ib) }}"
                             target="_blank"><i class="fa fa-download"
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

        </table>
    @endif
    @if ($application->UndertakingExpansion)
        <table class="table table-bordered">

                <tr>
                    <th colspan=4 style="white-space: nowrap !important;" >
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
                    <th colspan=2 class="noPrint">
                        <a href="{{ Storage::disk('public')->url($application->UndertakingExpansion->current_area) }}"
                             target="_blank"><i class="fa fa-download"
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

        </table>
    @endif
    @if ($application->FinancialProjection->count() > 0)
        <table class="table table-bordered">

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

        </table>
    @endif
    @if ($application->DetailsBTPark)
        <table class="table table-bordered">

                <tr>
                    <th colspan=4 style="white-space: nowrap !important;" >
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
                <tr class="noPrint">
                    <td><a href="{{ Storage::disk('public')->url($application->DetailsBTPark->proff_of_land) }}"
                             target="_blank"><i class="fa fa-download"
                                aria-hidden="true"></i> PROFF OF LAND</a></td>
                    <td><a href="{{ Storage::disk('public')->url($application->DetailsBTPark->project_report) }}"
                             target="_blank"><i class="fa fa-download"
                                aria-hidden="true"></i> PROJECT REPORT</a></td>
                    <td><a href="{{ Storage::disk('public')->url($application->DetailsBTPark->noc_certificate) }}"
                             target="_blank"><i class="fa fa-download"
                                aria-hidden="true"></i> NOC</a></td>
                    <td></td>
                </tr>

        </table>
    @endif
    @if ($application->ProjectCoast->count() > 0)
        <table class="table table-bordered">


                <tr>
                    <th colspan=4 style="white-space: nowrap !important;" >
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


        </table>
    @endif
    @if ($application->MeansOfFinancing)
        <table class="table table-bordered">

                <tr>
                    <th colspan=4 style="white-space: nowrap !important;" >
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
                <tr class="noPrint">
                    <th><a href="{{ Storage::disk('public')->url($application->MeansOfFinancing->loan_selection_letter) }}"
                         target="_blank"><i class="fa fa-download"
                            aria-hidden="true"></i> DEBT/BORROWING (LOAN SANCTION LETTER)</a></th>
                </tr>

        </table>
    @endif
    @if ($application->AssistanceSought->count() > 0)
        <table class="table table-bordered">

                <tr>
                    <th colspan=4 style="white-space: nowrap !important;" >
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

        </table>
    @endif

    @if ($application->AssistanceSoughtii->count() > 0)
        <table class="table table-bordered">

                <tr>
                    <th colspan=5 style="white-space: nowrap !important;" >
                        <h5>Assistance Sought under the scheme:</h5>
                    </th>
                </tr>
                @foreach ($application->AssistanceSoughtii as $sought)
                    <tr>
                        <th>{{ $sought->master->typeii }}</th>
                        <td>{{ $sought->expandi }}</td>
                        <td>{{ $sought->eligi_assis }}</td>
                        <td>{{ $sought->claimed_assis }}</td>
                        <td colspan=2>{{ $sought->remarks }}</td>
                    </tr>
                @endforeach

        </table>
    @endif


    <table class="table table-bordered">

            @if ($application->BankACDetails)
                <tr>
                    <th colspan=4 style="white-space: nowrap !important;" >
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

    </table><br />
</div>
