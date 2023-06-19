@extends('website.portal.app')
@section('css')
    <style>
        /* .col-md-offset-2-right {
            margin-right: 16.66666667%;
        } */
        /* .form-container {
            max-width: 100%;
            margin: 0 auto;
            background-color: #e6e5e2;
            padding: 40px;
            border-radius: 5px;
            margin-bottom: 2rem;
        }
        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            color: #130d0d;
        }

        .form-control {
            border-radius: 5px;
            background-color: #ffffff;
        } */
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

        .alert {
            position: fixed;
            top: 10%;
            right: 1%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            max-width: 400px;
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

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }
        .alert-danger {
            background-color: #f7c1b4;
            color: #a73a19;
            border-color:  #f7c1b4;
        }


        /*.form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            color: #ffffff;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .form-col {
            width: calc(50% - 10px);
        }

        .form-group input[type="text"],
        .form-group input[type="tel"],
        .form-group input[type="email"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #fafafa;
            color: #333333;
            box-shadow: 0 2px 5px rgba(250, 250, 250, 0.1);
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="tel"]:focus,
        .form-group input[type="email"]:focus {
            outline: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .form-group input[type="file"] {
            margin-top: 5px;
            color: white;
            background: #2c6e2c;
            padding: 4px;
            border-radius: 3px;
        }

        .form-submit {
            text-align: center;
            margin-top: 30px;
        }

        .form-submit button {
            padding: 12px 30px;
            background-color: #333333;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .form-group .info-tooltip {
            font-size: 1em;
            margin-left: 5px;
            color: #fff;
            cursor: pointer;
        }

        .form-group select {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #ffffff;
            color: #333333;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("arrow-down.png");
            background-repeat: no-repeat;
            background-position: right center;
            background-size: 20px 20px;
            cursor: pointer;
        }

        .form-group select:focus {
            outline: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        @media screen and (max-width: 600px) {
            .form-container {
                padding: 20px;
            }

            .form-col {
                width: 100%;
                margin-bottom: 20px;
            }
        } */
    </style>
    @livewireStyles
@endsection
@section('content')
    <livewire:annexure-i />
@endsection
@section('js')
@livewireScripts
@endsection
