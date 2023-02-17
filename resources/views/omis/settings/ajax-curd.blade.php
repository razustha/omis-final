@include("omis/partials/headerincludes")

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
        <div class="nk-main">
            @include("omis/partials/sidebar")
            <div class="nk-wrap">
                @include("omis/partials/header")

           
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Migrations Code Content</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::migrationContent($tableName)}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Route Code Content</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">
                                            {{BibClass::routeContent($tableName, $directoryName)}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Model Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::modelContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Controllers Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::controllerContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div>
                                {{-- <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">List File Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::listContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div> --}}
                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Create File Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::addContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Edit File Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::editContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">List File Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::listContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Ajax Complete List File Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::ajaxCompleteListContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Ajax List File Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::ajaxListContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Ajax Add File Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::ajaxAddContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Ajax Edit File Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::ajaxEditContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group"> <label for="exampleFormControlTextarea8" class="form-label">Ajax Show File Code</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="exampleFormControlTextarea8" rows="5">{{BibClass::ajaxShowContent($tableName, $directoryName)}}</textarea>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
          
                @include("omis/partials/footer")
            </div>
        </div>
    </div>
</body>
@include("omis/partials/footerincludes");