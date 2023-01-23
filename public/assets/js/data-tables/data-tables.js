! function (e) {
    "use strict";
    e.DataTable = function (e, a) {
        let t = document.querySelectorAll(e);
        "undefined" != t && null != t && t.forEach(e => {
            let a = e.dataset.showPerPage ? parseInt(e.dataset.showPerPage) : 10,
                t = new simpleDatatables.DataTable(e, {
                    labels: {
                        perPage: "{select} Per page"
                    },
                    perPage: a,
                    prevText: '<em class="icon ni ni-chevron-left"></em>',
                    nextText: '<em class="icon ni ni-chevron-right"></em>',
                    lastText: '<em class="icon ni ni-chevrons-right"></em>'
                }),
                n = e.dataset.nkContainer ? e.dataset.nkContainer : "",
                i = n.split(" ");
            n && t.container.classList.add(...i)
        })
    }, e.DataTable.init = function () {
        e.DataTable(".datatable-init")
    }, e.winLoad(e.DataTable.init)
}(NioApp);
