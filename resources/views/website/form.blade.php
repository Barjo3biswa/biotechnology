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
        .error-msg{
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


        .white-green .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            color: white;
        }
    </style>
    @livewireStyles
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
@section('content')
    <livewire:annexure-i />
@endsection
@section('js')
@livewireScripts
<script>
    window.addEventListener('alert', event => {
                 toastr[event.detail.type](event.detail.message,
                 event.detail.title ?? ''), toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                    }
                });

    // Livewire.on('pageChanged', () => {
    //     const targetElement = document.getElementById('your-div-id');
    //     if (targetElement) {
    //         targetElement.scrollIntoView({
    //             behavior: 'smooth'
    //         });
    //     }
    // });

    </script>
@endsection
