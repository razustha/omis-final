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
                            <div class="card">
                                        <div class="card-body">
                                            {{BibClass::addButton("settings/dictonary","Cancel")}}
                                            {{BibClass::tableEntryForm($tableName)}}
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
