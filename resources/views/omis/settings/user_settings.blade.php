@include("omis/partials/headerincludes")

@push('styles')


@endpush
<?php
$usersetting = $usersetting->where('user_id',auth()->user()->id);
?>
@if(!empty($usersetting->first()))
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg"   style="font-size: {{usersetting('font_size')}}px!important;background-color: {{usersetting('background_color')}}!important">
@else
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" >
@endif
    <div class="nk-app-root">
        <div class="nk-main">
            @include("omis/partials/sidebar")
            <div class="nk-wrap">
                @include("omis/partials/header")
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                            <div class="card">
                                <form action="{{route('usersettings.update')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-head d-flex p-2">
                                                    <header>General User Settings</header>
                                                    <div class="tools ml-auto float-right">
                                                        <input type="submit" class="btn btn-primary" value="Save All">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-head">
                                                            <header class="p-2">General</header>
                                                        </div>
                                                        <div class="card-body tab-content">
                                                            {{-- <div class="form-group">
                                                                <label for="usersetting[background_color]">Background Color</label>
                                                                <input type="text" name="usersetting[background_color]" class="form-control" id="" value="{{ old('background_color', usersetting('background_color') ? usersetting('background_color') : '') }}">

                                                            </div> --}}
                                                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                            <div class="form-group mt-2">
                                                                {{-- <label for="usersetting[background_color]">Background Color</label> --}}
                                                                {{createInput('text','usersetting[background_color]','background_color','Background Color','test', old('background_color', usersetting('background_color') ? usersetting('background_color') : ''),"Enter Background Color")}}
                                                                {{createInput('number','usersetting[font_size]','font_size','Font Size','test', old('font_size', usersetting('font_size') ? usersetting('font_size') : ''),"Enter Font Size","12")}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@include("omis/partials/footerincludes");

