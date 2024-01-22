<div class="pcoded-inner-navbar main-menu">

    <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"></div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="active">
            <a href="{{route('dashboard')}}">
                <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                <span class="pcoded-mtext"
                    data-i18n="nav.basic-components.main">Applications</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="{{route('applications',Crypt::encrypt('AnnexureIA'))}}">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext"
                            data-i18n="nav.basic-components.alert">Application Form for Availing Assistance for BT Park/ R&D Institute / Finishing School</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('applications',Crypt::encrypt('AnnexureIB'))}}">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext"
                            data-i18n="nav.basic-components.breadcrumbs">Application Form for AVAILING ASSISTANCE FOR BT UNIT</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('applications',Crypt::encrypt('AnnexureIC'))}}">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext"
                            data-i18n="nav.basic-components.alert">Application Form for AVAILING ASSISTANCE FOR START UPS</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('applications',Crypt::encrypt('AnnexureID'))}}">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext"
                            data-i18n="nav.basic-components.alert">Application Form for Availing Assistance for BT Incubators/Incubation Centers</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                <span class="pcoded-mtext"
                    data-i18n="nav.basic-components.main">JOB CARD SECTION</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="#">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext"
                            data-i18n="nav.basic-components.alert">Job Card</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext"
                            data-i18n="nav.basic-components.alert">Job Order</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>

</div>
