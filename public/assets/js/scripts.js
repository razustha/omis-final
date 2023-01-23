! function (NioApp) {
    "use strict";
    let menu = {
            classes: {
                main: "nk-menu",
                item: "nk-menu-item",
                link: "nk-menu-link",
                toggle: "nk-menu-toggle",
                sub: "nk-menu-sub",
                subparent: "has-sub",
                active: "active",
                current: "current-page"
            }
        },
        nav = {
            classes: {
                main: "nk-nav",
                item: "nk-nav-item",
                link: "nk-nav-link",
                toggle: "nk-nav-toggle",
                sub: "nk-nav-sub",
                subparent: "has-sub",
                active: "active",
                current: "current-page"
            }
        };
    NioApp.Dropdown = {
        load: function (e, t) {
            let a = e.parentElement;
            a.classList.contains(t) || a.classList.add(t)
        },
        toggle: function (e, t) {
            let a = e.parentElement,
                s = e.nextElementSibling,
                o = s.children.length > 5 ? 400 + 10 * s.children.length : 400;
            a.classList.contains(t) ? (a.classList.remove(t), NioApp.SlideUp(s, o)) : (a.classList.add(t), NioApp.SlideDown(s, o))
        },
        extended: function (elm, active) {
            let parent = elm.parentElement,
                nextelm = elm.nextElementSibling,
                navbarCollapse = NioApp.body.dataset.navbarCollapse ? NioApp.body.dataset.navbarCollapse : NioApp.Break.lg;
            NioApp.Win.width > eval("NioApp.Break." + navbarCollapse) && elm.addEventListener("mouseenter", e => {
                let t = NioApp.getParents(elm, "." + nav.classes.main, nav.classes.sub).length > 0 ? "right-start" : "bottom-start";
                Popper.createPopper(elm, nextelm, {
                    placement: t,
                    boundary: ".nk-wrap"
                })
            })
        },
        closeSiblings: function (e, t, a, s) {
            let o = e.parentElement,
                i = o.parentElement.children;
            Array.from(i).forEach(e => {
                if (e !== o && (e.classList.remove(t), e.classList.contains(a))) {
                    e.querySelectorAll("." + s).forEach(e => {
                        e.parentElement.classList.remove(t), NioApp.SlideUp(e, 400)
                    })
                }
            })
        }
    }, NioApp.Dropdown.sidebar = function (e) {
        const t = document.querySelectorAll(e);
        let a = menu.classes.active,
            s = menu.classes.subparent,
            o = menu.classes.sub;
        t.forEach(e => {
            NioApp.Dropdown.load(e, s), e.addEventListener("click", (function (t) {
                t.preventDefault(), NioApp.Dropdown.toggle(e, a), NioApp.Dropdown.closeSiblings(e, a, s, o)
            }))
        })
    }, NioApp.Dropdown.header = function (selector) {
        const elm = document.querySelectorAll(selector);
        let active = nav.classes.active,
            subparent = nav.classes.subparent,
            submenu = nav.classes.sub,
            navbarCollapse = NioApp.body.dataset.navbarCollapse ? NioApp.body.dataset.navbarCollapse : NioApp.Break.lg;
        elm.forEach(item => {
            NioApp.Dropdown.load(item, subparent), NioApp.Dropdown.extended(item), item.addEventListener("click", (function (e) {
                e.preventDefault(), NioApp.Win.width < eval("NioApp.Break." + navbarCollapse) && (NioApp.Dropdown.toggle(item, active), NioApp.Dropdown.closeSiblings(item, active, subparent, submenu))
            }))
        })
    };
    let sidebar = {
        classes: {
            base: "nk-sidebar",
            toggle: "sidebar-toggle",
            toggleActive: "active",
            active: "sidebar-active",
            overlay: "sidebar-overlay",
            body: "sidebar-shown",
            compact: "is-compact",
            compactToggle: "compact-toggle",
            compactToggleActive: "active",
            compactBody: "sidebar-compact"
        },
        break: {
            main: NioApp.body.dataset.sidebarCollapse ? eval("NioApp.Break." + NioApp.body.dataset.sidebarCollapse) : NioApp.Break.lg
        }
    };
    NioApp.Sidebar = {
        show: function (e, t) {
            e.forEach(e => {
                e.classList.add(sidebar.classes.toggleActive)
            }), t.classList.add(sidebar.classes.active), NioApp.body.classList.add(sidebar.classes.body);
            let a = `<div class='${sidebar.classes.overlay}'></div>`;
            t.insertAdjacentHTML("beforebegin", a)
        },
        hide: function (e, t) {
            e.forEach(e => {
                e.classList.remove(sidebar.classes.toggleActive)
            }), t.classList.remove(sidebar.classes.active), NioApp.body.classList.remove(sidebar.classes.body);
            let a = document.querySelector("." + sidebar.classes.overlay);
            setTimeout(() => {
                a && a.remove()
            }, 300)
        },
        compact: function (e, t) {
            e.classList.toggle(sidebar.classes.compactToggleActive), t.classList.toggle(sidebar.classes.compact), NioApp.body.classList.toggle(sidebar.classes.compactBody)
        }
    }, NioApp.Sidebar.init = function () {
        let e = document.querySelector("." + sidebar.classes.base),
            t = document.querySelectorAll("." + sidebar.classes.toggle),
            a = document.querySelector("." + sidebar.classes.compactToggle);
        t.forEach(a => {
            a.addEventListener("click", (function (a) {
                a.preventDefault(), sidebar.break.main > NioApp.Win.width && (e.classList.contains(sidebar.classes.active) ? NioApp.Sidebar.hide(t, e) : NioApp.Sidebar.show(t, e))
            })), window.addEventListener("resize", (function (a) {
                sidebar.break.main < NioApp.Win.width && NioApp.Sidebar.hide(t, e)
            })), document.addEventListener("mouseup", (function (a) {
                null === a.target.closest("." + sidebar.classes.base) && NioApp.Sidebar.hide(t, e)
            }))
        }), a && a.addEventListener("click", (function (t) {
            t.preventDefault(), sidebar.break.main < NioApp.Win.width && NioApp.Sidebar.compact(a, e)
        }))
    };
    let navbar = {
        classes: {
            base: "nk-navbar",
            toggle: "navbar-toggle",
            toggleActive: "active",
            active: "navbar-active",
            overlay: "navbar-overlay",
            body: "navbar-shown"
        },
        break: {
            main: NioApp.body.dataset.navbarCollapse ? eval("NioApp.Break." + NioApp.body.dataset.navbarCollapse) : NioApp.Break.lg
        }
    };
    NioApp.Navbar = {
        show: function (e, t) {
            e.forEach(e => {
                e.classList.add(navbar.classes.toggleActive)
            }), t.classList.add(navbar.classes.active), NioApp.body.classList.add(navbar.classes.body);
            let a = `<div class='${navbar.classes.overlay}'></div>`;
            t.insertAdjacentHTML("beforebegin", a)
        },
        hide: function (e, t) {
            e.forEach(e => {
                e.classList.remove(navbar.classes.toggleActive)
            }), t.classList.remove(navbar.classes.active), NioApp.body.classList.remove(navbar.classes.body);
            let a = document.querySelector("." + navbar.classes.overlay);
            setTimeout(() => {
                a && a.remove()
            }, 300)
        },
        mobile: function (e) {
            navbar.break.main < NioApp.Win.width ? e.classList.remove("navbar-mobile") : setTimeout(() => {
                e.classList.add("navbar-mobile")
            }, 500)
        }
    }, NioApp.Navbar.init = function () {
        let e = document.querySelector("." + navbar.classes.base),
            t = document.querySelectorAll("." + navbar.classes.toggle);
        t.forEach(a => {
            NioApp.Navbar.mobile(e), a.addEventListener("click", (function (a) {
                a.preventDefault(), navbar.break.main > NioApp.Win.width && (e.classList.contains(navbar.classes.active) ? NioApp.Navbar.hide(t, e) : NioApp.Navbar.show(t, e))
            })), window.addEventListener("resize", (function (a) {
                navbar.break.main < NioApp.Win.width && NioApp.Navbar.hide(t, e), NioApp.Navbar.mobile(e)
            })), document.addEventListener("mouseup", (function (a) {
                null === a.target.closest("." + navbar.classes.base) && NioApp.Navbar.hide(t, e)
            }))
        })
    }, NioApp.CurrentLink = function (e, t, a, s, o, i) {
        let n = document.querySelectorAll(e),
            l = document.location.href,
            r = l.substring(0, -1 == l.indexOf("#") ? l.length : l.indexOf("#")),
            c = r.substring(0, -1 == r.indexOf("?") ? r.length : r.indexOf("?"));
        n.forEach((function (e) {
            var n = e.getAttribute("href");
            if (c.match(n)) {
                NioApp.getParents(e, "." + s, t).forEach(e => {
                    e.classList.add(...o);
                    let t = e.querySelector("." + a);
                    null !== t && (t.style.display = "block")
                }), i && e.scrollIntoView({
                    block: "end"
                })
            } else e.parentElement.classList.remove(...o)
        }))
    }, NioApp.Clipboard = function (e) {
        let t = document.querySelectorAll(e),
            a = {
                selector: e.slice(1) + "-tooltip",
                init: "Copy",
                success: "Copied"
            },
            s = {
                init: "copy",
                success: "copy-fill"
            };
        t.forEach(e => {
            let t = new ClipboardJS(e),
                o = `<em class="icon ni ni-${s.init}"></em><span class="${a.selector}">${a.init}</span>`,
                i = `<em class="icon ni ni-${s.success}"></em><span class="${a.selector}">${a.success}</span>`;
            e.innerHTML = o, t.on("success", (function (e) {
                let t = e.trigger;
                t.innerHTML = i, setTimeout((function () {
                    t.innerHTML = o
                }), 1e3)
            }))
        })
    }, NioApp.Select = function (e, t) {
        let a = document.querySelectorAll(e);
        a.length > 0 && a.forEach(e => {
            let t = !!e.dataset.search && JSON.parse(e.dataset.search),
                a = !!e.dataset.sort && JSON.parse(e.dataset.sort),
                s = !e.dataset.cross || JSON.parse(e.dataset.cross);
            new Choices(e, {
                silent: !0,
                allowHTML: !1,
                searchEnabled: t,
                placeholder: !0,
                placeholderValue: null,
                searchPlaceholderValue: "Search",
                shouldSort: a,
                removeItemButton: s
            })
        })
    }, NioApp.Tags = function (e) {
        let t = document.querySelectorAll(e);
        t.length > 0 && t.forEach(e => {
            let t = !e.dataset.cross || JSON.parse(e.dataset.cross),
                a = e.classList.contains("form-control-plaintext") && "choices__inner-plaintext";
            new Choices(e, {
                silent: !0,
                allowHTML: !1,
                placeholder: !0,
                placeholderValue: null,
                removeItemButton: t,
                classNames: {
                    containerInner: "choices__inner " + (a && a)
                }
            })
        })
    }, NioApp.TimePicker = function (e, t) {
        let a = document.querySelectorAll(e);
        a.length > 0 && a.forEach(e => {
            let a = {
                    format: e.dataset.format ? parseInt(e.dataset.format) : 12,
                    interval: e.dataset.interval ? parseInt(e.dataset.interval) : 30,
                    start: e.dataset.startTime ? e.dataset.startTime : "12:00",
                    end: e.dataset.endTime ? e.dataset.endTime : "23:00"
                },
                s = t ? NioApp.extendObject(a, t) : a;
            NioApp.Custom.timePicker(e, s)
        })
    }, NioApp.DatePicker = function (e, t) {
        let a = document.querySelectorAll(e);
        a.length > 0 && a.forEach(e => {
            let a = !e.dataset.autoHide || JSON.parse(e.dataset.autoHide),
                s = !!e.dataset.clearBtn && JSON.parse(e.dataset.clearBtn),
                o = e.dataset.format ? e.dataset.format : "mm/dd/yyyy",
                i = e.dataset.maxView ? parseInt(e.dataset.maxView) : 3,
                n = e.dataset.pickLevel ? parseInt(e.dataset.pickLevel) : 0,
                l = e.dataset.startView ? parseInt(e.dataset.startView) : 0,
                r = e.dataset.title ? e.dataset.title : "",
                c = !!e.dataset.todayBtn && JSON.parse(e.dataset.todayBtn),
                p = e.dataset.todayBtnMode ? parseInt(e.dataset.todayBtnMode) : 0,
                d = e.dataset.weekStart ? parseInt(e.dataset.weekStart) : 0,
                u = !!e.dataset.range,
                m = t || {
                    buttonClass: "btn btn-md",
                    autohide: a,
                    clearBtn: s,
                    format: o,
                    maxView: i,
                    pickLevel: n,
                    startView: l,
                    title: r,
                    todayBtn: c,
                    todayBtnMode: p,
                    weekStart: d
                };
            u ? new DateRangePicker(e, m) : new Datepicker(e, m)
        })
    }, NioApp.Pureknob = function (e) {
        document.querySelectorAll(e).forEach(e => {
            let t = e.dataset.size ? parseInt(e.dataset.size) : 100,
                a = e.dataset.angleStart ? e.dataset.angleStart : 1,
                s = e.dataset.angleEnd ? e.dataset.angleEnd : 1,
                o = !!e.dataset.angleOffset && e.dataset.angleOffset,
                i = e.dataset.colorBg ? e.dataset.colorBg : NioApp.Colors.gray200,
                n = e.dataset.colorFg ? e.dataset.colorFg : NioApp.Colors.primary,
                l = e.dataset.trackWidth ? e.dataset.trackWidth : .2,
                r = e.dataset.min ? e.dataset.min : 0,
                c = e.dataset.max ? e.dataset.max : 100,
                p = !e.dataset.readonly || JSON.parse(e.dataset.readonly),
                d = e.dataset.value ? parseInt(e.dataset.value) : 0,
                u = e.dataset.hideValue ? 0 : 1,
                m = pureknob.createKnob(t, t);
            m.setProperty("angleStart", -a * Math.PI), m.setProperty("angleEnd", s * Math.PI), m.setProperty("angleOffset", o * Math.PI), m.setProperty("colorFG", n), m.setProperty("colorBG", i), m.setProperty("trackWidth", l), m.setProperty("valMin", r), m.setProperty("valMax", c), m.setProperty("readonly", p), m.setProperty("textScale", u), m.setValue(d);
            let g = m.node();
            e.appendChild(g)
        })
    }, NioApp.Dropzone = function (e) {
        let t = document.querySelectorAll(e);
        "undefined" != t && null != t && t.forEach(e => {
            let t = e.id,
                a = e.dataset.maxFiles ? parseInt(e.dataset.maxFiles) : null,
                s = e.dataset.maxFilesize ? parseInt(e.dataset.maxFilesize) : 256,
                o = e.dataset.messageIcon ? e.dataset.messageIcon : 1 === a ? "file" : "files",
                i = e.dataset.acceptedFiles ? e.dataset.acceptedFiles : null;
            e.classList.add("dropzone");
            let n = e.querySelector(".dz-message-text");
            e.dataset.maxFilesize && n.insertAdjacentHTML("beforeend", `<small>Max ${s} MiB</small>`);
            let l = e.querySelector(".dz-message-icon:empty"),
                r = `<em class="icon icon-lg ni ni-${o}"></em>`;
            l && (l.innerHTML = r);
            new Dropzone("#" + t, {
                url: "image",
                maxFilesize: s,
                maxFiles: a,
                acceptedFiles: i
            })
        })
    }, NioApp.Range = function (e, t) {
        let a = document.querySelectorAll(e);
        "undefined" != a && null != a && a.forEach(e => {
            e.id;
            let a = e.dataset.start;
            a = /\s/g.test(a) ? a.split(" ") : a, a = a || 0;
            let s = e.dataset.connect;
            s = /\s/g.test(s) ? s.split(" ") : s, s = void 0 === s ? "lower" : s, s = "true" == s || "false" == s ? JSON.parse(s) : s;
            let o = e.dataset.min ? parseInt(e.dataset.min) : 0,
                i = e.dataset.max ? parseInt(e.dataset.max) : 100,
                n = e.dataset.minDistance ? parseInt(e.dataset.minDistance) : null,
                l = e.dataset.maxDistance ? parseInt(e.dataset.maxDistance) : null,
                r = e.dataset.step ? parseInt(e.dataset.step) : 1,
                c = e.dataset.orientation ? e.dataset.orientation : "horizontal",
                p = !!e.dataset.tooltip && JSON.parse(e.dataset.tooltip);
            console.log(a, s);
            var d = {
                    start: a,
                    connect: s,
                    direction: NioApp.State.isRTL ? "rtl" : "ltr",
                    range: {
                        min: o,
                        max: i
                    },
                    margin: n,
                    limit: l,
                    step: r,
                    orientation: c,
                    tooltips: p
                },
                u = t ? NioApp.extendObject(d, t) : d;
            noUiSlider.create(e, u)
        })
    }, NioApp.FormValidate = function (e) {
        let t = document.querySelectorAll(e);
        "undefined" != t && null != t && t.forEach(e => {
            let t = e.id;
            var a = document.getElementById(t),
                s = new Pristine(a, {
                    classTo: "form-group",
                    errorClass: "is-invalid",
                    successClass: "is-valid",
                    errorTextParent: "form-control-wrap",
                    errorTextTag: "div",
                    errorTextClass: "form-error"
                });
            a.addEventListener("submit", (function (e) {
                e.preventDefault();
                s.validate();
                a.classList.add("validated")
            }))
        })
    }, NioApp.Addons.init = function () {
        NioApp.Clipboard(".js-copy"), NioApp.Select(".js-select"), NioApp.Tags(".js-tags"), NioApp.DatePicker(".js-datepicker"), NioApp.TimePicker(".js-timepicker"), NioApp.Pureknob(".js-pureknob"), NioApp.Dropzone(".js-upload"), NioApp.Range(".js-range"), NioApp.FormValidate(".js-validate")
    }, NioApp.Custom.progress = function () {
        document.querySelectorAll("[data-progress]").forEach(e => {
            let t = e.dataset.progress;
            e.style.width = t
        })
    }, NioApp.Custom.showHidePassword = function (e) {
        let t = document.querySelectorAll(e);
        t.length > 0 && t.forEach(e => {
            e.addEventListener("click", (function (t) {
                t.preventDefault();
                let a = document.getElementById(e.getAttribute("href"));
                "password" == a.type ? (a.type = "text", e.classList.add("is-shown")) : (a.type = "password", e.classList.remove("is-shown"))
            }))
        })
    }, NioApp.Custom.uploadImage = function (e) {
        let t = document.querySelectorAll(e);
        t.length > 0 && t.forEach(e => {
            e.addEventListener("change", (function () {
                if (e.files && e.files[0]) {
                    let o = document.getElementById(e.dataset.target);
                    o.onload = function () {
                        URL.revokeObjectURL(o.src)
                    }, o.src = URL.createObjectURL(e.files[0]);
                    let i = ["jpg", "JPEG", "JPG", "png"],
                        n = this.value.split(".").pop();
                    var t = this.value.lastIndexOf("."),
                        a = this.value.substring(t + 1),
                        s = o.value = a;
                    i.includes(n) || (alert(s + " file type not allowed, Please upload jpg, JPG, JPEG, or png file"), o.src = " ")
                }
            }))
        })
    }, NioApp.Custom.setBg = function () {
        document.querySelectorAll("[data-bg]").forEach(e => {
            let t = e.dataset.bg;
            e.style.backgroundImage = "url('" + t + "')"
        })
    }, NioApp.Custom.todoCheckboxToggle = function (e) {
        let t = document.querySelectorAll(e);
        t && t.forEach(e => {
            e.addEventListener("change", (function (t) {
                let a = NioApp.getParents(e, ".nk-todo-list", "nk-todo-item");
                t.target.checked ? a.forEach(e => {
                    e.classList.add("task-done")
                }) : a.forEach(e => {
                    e.classList.remove("task-done")
                })
            }))
        })
    }, NioApp.Custom.init = function () {
        NioApp.Custom.progress(), NioApp.Custom.showHidePassword(".password-toggle"), NioApp.Custom.uploadImage(".upload-image"), NioApp.Sidebar.init(), NioApp.Navbar.init(), NioApp.CurrentLink("." + menu.classes.link, menu.classes.item, menu.classes.sub, menu.classes.main, [menu.classes.active, menu.classes.current], !0), NioApp.Dropdown.sidebar("." + menu.classes.toggle), NioApp.Dropdown.header("." + nav.classes.toggle), NioApp.Toggle.class(".toggle-ibx-aside", "toggle-active", "show-aside"), NioApp.Toggle.class(".toggle-ibx-view", "view-active", "show-ibx"), NioApp.Toggle.class(".toggle-chat-profile", "active", "show-profile", "profile-shown"), NioApp.Custom.setBg(), NioApp.Custom.todoCheckboxToggle(".todo-check-toggle"), NioApp.Toggle.class(".toggle-todo-aside", "toggle-active", "show-aside")
    }, NioApp.BS.init = function () {
        NioApp.BS.tooltip('[data-bs-toggle="tooltip"]'), NioApp.BS.popover('[data-bs-toggle="popover"]'), NioApp.BS.toast('[data-bs-toggle="toast"]'), NioApp.BS.alert('[data-bs-toggle="alert"]'), NioApp.BS.alert(".custom-alert-trigger", {
            target: "customAlertPlaceholder",
            variant: "warning",
            content: "Some aweosme alert text from JavaScript!"
        }), NioApp.BS.validate(".form-validate")
    }, NioApp.init = function () {
        NioApp.winLoad(NioApp.BS.init), NioApp.winLoad(NioApp.Addons.init), NioApp.winLoad(NioApp.Custom.init)
    }, NioApp.init()
}(NioApp);