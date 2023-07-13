<div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
        <div class="container">
            <nav {{-- id="menuzord-right" --}} class="menuzord orange">
              <ul class="menuzord-menu" style="float:left;">
                {{-- {{$edit_load}} --}}
                    @if($edit_load==null || $edit_load == 'AnnexureIA')
                        <li class="{{$step=="AnnexureIA"?"active":""}}"><a wire:click="formStep('AnnexureIA')" >ANNEXURE I A</a></li>
                    @endif
                    @if($edit_load==null || $edit_load == 'AnnexureIB')
                        <li class="{{$step=="AnnexureIB"?"active":""}}"><a wire:click="formStep('AnnexureIB')">ANNEXURE I B</a></li>
                    @endif
                    {{-- <li class="{{$step=="AnnexureIC"?"active":""}}"><a wire:click="formStep('AnnexureIC')">ANNEXURE I C</a></li>
                    <li class="{{$step=="AnnexureID"?"active":""}}"><a wire:click="formStep('AnnexureID')">ANNEXURE I D</a></li> --}}
                    <li {{-- class="{{$step=="AnnexureID"?"active":""}}" --}}><a wire:click="applicationStep('!apply')">List All Application</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
