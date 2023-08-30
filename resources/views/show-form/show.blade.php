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
    {{-- @livewireStyles
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
@endsection
@section('content')
    <section class="pt-30">
        <div class="container pb-40 pt-30">
            <div class="section-content">
                <section>
                    <div class="col-md-12" style="width: 100%">
                        <button onclick="printDiv('printableArea')" class="btn btn-primary btn-sm noPrint">
                            Print Application
                        </button>
                        <br/>
                        @include('admin.common.application-show')
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
