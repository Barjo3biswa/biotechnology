@extends('admin.layout.app')
@section('css')


<style>
th, td{
    white-space: pre-wrap !important;
}
@media print {
            .noPrint{
                display:none;
            }
        }
</style>

@endsection
@section('content')
<div class="main-body">
    <div class="page-wrapper">
        <div class="card">
            <div class="card-header">
                <h5></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <button onclick="printDiv('printableArea')" class="btn btn-primary btn-sm noPrint">
                        Print Application
                    </button> &nbsp;&nbsp;
                    <a href="{{route('change-status', Crypt::encrypt($application->id))}}" class="btn btn-primary btn-sm noPrint">
                        Mark As Viewed
                    </a>
                </div><br/>
                @include('admin.common.application-show')
                {{-- <table class="table table-bordered" >
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
                        <th>Unit/Agency/Institution <br/>Registered with DSIR/CSIR No.</th>
                        <td>{{ $application->BasicInformation->dsr_csr_reg_no }}</td>
                    </tr>
                    <tr>
                        <th>GST NO </th>
                        <td>{{ $application->BasicInformation->gst_no }}</td>
                        <th>PAN NO</th>
                        <td>{{ $application->BasicInformation->pan_no }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="{{ Storage::disk('public')->url($application->BasicInformation->certificate_of_incorporation) }}"
                                 target="_blank"><i class="fa fa-download"
                                    aria-hidden="true"></i> CERTIFICATE OF INCORPORATION</a></td>
                        <td><a href="{{ Storage::disk('public')->url($application->BasicInformation->pan_coppy) }}"
                                target="_blank"><i class="fa fa-download"
                                    aria-hidden="true"></i> PAN CARD</a></td>
                        <td><a href="{{ Storage::disk('public')->url($application->BasicInformation->registration_coppy) }}"
                                 target="_blank"><i class="fa fa-download"
                                    aria-hidden="true"></i> GST REGISTRATION NO</a></td>

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


                </table> --}}


            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    window.onload = function () {
        var elementToClick = document.getElementById('mobile-collapse');

        if (elementToClick) {
            elementToClick.click();
        }
    };
</script>
<script>
    function printDiv(divName) {
        // alert("ok");
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection

