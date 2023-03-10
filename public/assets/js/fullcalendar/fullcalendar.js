! function(e) {
    "use strict";
    e.Event = {
        preview: function() {
            e.body.insertAdjacentHTML("beforeend", '\n                <div class="modal fade" tabindex="-1" id="eventPreviewModal">\n                    <div class="modal-dialog">\n                        <div class="modal-content">\n                            <div class="modal-header">\n                                <h4 class="modal-title event-title"></h4>\n                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>\n                            </div>\n                            <div class="modal-body">\n                                <div>\n                                <div class="row g-3">\n                                    <div class="col-6">\n                                        <h6 class="overline-title">Start Time</h6>\n                                        <p class="event-start small"></p>\n                                    </div>\n                                    <div class="col-6">\n                                        <h6 class="overline-title">End Time</h6>\n                                        <p class="event-end small"></p>\n                                    </div>\n                                    <div class="col-12">\n                                        <h6 class="overline-title">Event Details</h6>\n                                        <p class="event-description small"></p>\n                                    </div>\n                                </div>\n                                </div>\n                            </div>\n                            <div class="modal-footer">\n                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eventDeleteModal">Delete</button>\n                                <button type="button" class="btn btn-primary" id="editEvent">Edit Event</button>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            ')
        },
        delete: function() {
            e.body.insertAdjacentHTML("beforeend", '\n                <div class="modal fade" tabindex="-1" id="eventDeleteModal">\n                    <div class="modal-dialog">\n                        <div class="modal-content">\n                            <div class="modal-body p-5 text-center">\n                                <div class="media media-circle media-xxl media-middle mx-auto text-bg-danger mb-4"><em class="icon ni ni-cross"></em></div>\n                                <h3>Are You Sure?</h3>\n                                <p class="small">This event data will be removed permanently.</p>\n                                <ul class="d-flex gap g-3 justify-content-center pt-1">\n                                    <li><button type="button" class="btn btn-success" id="deleteEvent" data-bs-dismiss="modal">Yes Delete it!</button></li>\n                                    <li><button type="button" class="btn btn-danger btn-soft" data-bs-dismiss="modal">Cancel</button></li>\n                                </ul>\n                            </div>\n                            <button type="button" class="btn-close position-absolute top-0 end-0 p-3" data-bs-dismiss="modal" aria-label="Close"></button>\n                        </div>\n                    </div>\n                </div>\n            ')
        },
        form: function() {
            e.body.insertAdjacentHTML("beforeend", '\n                <div class="modal fade" tabindex="-1" id="eventFormModal">\n                    <div class="modal-dialog modal-lg">\n                        <div class="modal-content">\n                            <div class="modal-header">\n                                <h4 class="modal-title fc-form-title"></h4>\n                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>\n                            </div>\n                            <div class="modal-body">\n                                <div class="row g-gs">\n                                    <div class="col-12">\n                                        <div class="form-group">\n                                            <label for="eventTitle" class="form-label">Event Title</label>\n                                            <div class="form-control-wrap">\n                                                <input type="text" class="form-control" id="eventTitle" placeholder="Event Title">\n                                            </div>\n                                        </div>\n                                    </div>\n                                    <div class="col-sm-6">\n                                        <div class="form-group">\n                                            <label for="eventStartDate" class="form-label">Event Starts</label>\n                                            <div class="row g-2">\n                                                <div class="col-7">\n                                                    <div class="form-control-wrap">\n                                                        <input type="text" class="form-control fc-event-datepicker" id="eventStartDate" placeholder="yyyy-mm-dd">\n                                                    </div>\n                                                </div>\n                                                <div class="col-5">\n                                                    <div class="form-control-wrap">\n                                                        <input type="text" class="form-control fc-event-timepicker" id="eventStartTime" placeholder="hh-mm">\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n                                    <div class="col-sm-6">\n                                        <div class="form-group">\n                                            <label for="eventEndDate" class="form-label">Event Ends</label>\n                                            <div class="row g-2">\n                                                <div class="col-7">\n                                                    <div class="form-control-wrap">\n                                                        <input type="text" class="form-control fc-event-datepicker" id="eventEndDate" placeholder="yyyy-mm-dd">\n                                                    </div>\n                                                </div>\n                                                <div class="col-5">\n                                                    <div class="form-control-wrap">\n                                                        <input type="text" class="form-control fc-event-timepicker" id="eventEndTime" placeholder="hh-mm">\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n                                    <div class="col-12">\n                                        <div class="form-group">\n                                            <label for="eventDescription" class="form-label">Event Description</label>\n                                            <div class="form-control-wrap">\n                                                <textarea class="form-control" id="eventDescription" placeholder="Event Description"></textarea>\n                                            </div>\n                                        </div>\n                                    </div>\n                                    <div class="col-12">\n                                        <div class="form-group fc-category-select">\n                                            <label for="eventCategory" class="form-label">Event Category</label>\n                                            <div class="form-control-wrap">\n                                                <select id="eventCategory" class="form-control"></select>\n                                            </div>\n                                        </div>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class="modal-footer">\n                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Discard</button>\n                                <button type="button" class="btn btn-primary" id="eventAdd">Add Event</button>\n                                <button type="button" class="btn btn-primary" id="eventUpdate">Update Event</button>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            ')
        }
    }, e.Calendar = function(t, n) {
        document.querySelectorAll(t).forEach(t => {
            let a = t.id,
                i = document.getElementById(a),
                l = function() {
                    document.querySelectorAll(".event-popover").forEach(e => {
                        e.remove()
                    })
                };
            if ("undefined" != i && null != i) {
                let t = new FullCalendar.Calendar(i, {
                    timeZone: "UTC",
                    initialView: e.State.asMobile ? "listWeek" : "dayGridMonth",
                    themeSystem: "bootstrap",
                    headerToolbar: {
                        left: "title prev,next",
                        center: null,
                        right: "today dayGridMonth,timeGridWeek,timeGridDay,listWeek"
                    },
                    height: 800,
                    contentHeight: 780,
                    aspectRatio: 3,
                    editable: !0,
                    droppable: !0,
                    views: {
                        dayGridMonth: {
                            dayMaxEventRows: 2
                        }
                    },
                    direction: e.State.isRTL ? "rtl" : "ltr",
                    nowIndicator: !0,
                    eventMouseEnter: function(e) {
                        e.el;
                        let t = e.event._def.title,
                            n = e.event._def.extendedProps.description;
                        if (n) {
                            new bootstrap.Popover(e.el, {
                                template: '<div class="popover event-popover"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
                                title: t,
                                content: n || "",
                                placement: "top"
                            }).show()
                        }
                    },
                    eventMouseLeave: function() {
                        l()
                    },
                    eventDragStart: function() {
                        l()
                    },
                    eventClick: function(n) {
                        let a = n.event._def.title,
                            i = n.event._def.extendedProps.description,
                            l = n.event._instance.range.start,
                            v = (l.getFullYear(), String(l.getMonth() + 1).padStart(2, "0"), String(l.getDate()).padStart(2, "0"), String(l.getDate()).padStart(2, "0") + " " + e.monthList[l.getMonth()] + " " + l.getFullYear()),
                            u = l.toUTCString().split(" ");
                        u = u[u.length - 2], u = "00:00:00" == u ? "" : u;
                        let f = n.event._instance.range.end,
                            h = (f.getFullYear(), String(f.getMonth() + 1).padStart(2, "0"), String(f.getDate()).padStart(2, "0"), String(f.getDate()).padStart(2, "0") + " " + e.monthList[f.getMonth()] + " " + f.getFullYear()),
                            b = f.toUTCString().split(" ");
                        b = b[b.length - 2], b = "00:00:00" == b ? "" : b;
                        n.event._def.ui.classNames[0].slice(3);
                        let g = n.event._def.publicId;
                        m = t.getEventById(g), p = g, s.innerText = a, d.innerText = i, o.innerText = `${v}${u?" - "+e.to12(u):""}`, r.innerText = `${h}${b?" - "+e.to12(b):""}`, c.show()
                    },
                    events: n
                });
                t.render(), e.Event.preview(), e.Event.delete(), e.Event.form(), e.DatePicker(".fc-event-datepicker", {
                    buttonClass: "btn",
                    autohide: !0,
                    format: "yyyy-mm-dd"
                }), e.TimePicker(".fc-event-timepicker", {
                    format: 24,
                    interval: 30,
                    start: "00:00",
                    end: "23:30"
                });
                let a = document.getElementById("eventPreviewModal"),
                    s = a.querySelector(".event-title"),
                    d = a.querySelector(".event-description"),
                    o = a.querySelector(".event-start"),
                    r = a.querySelector(".event-end");
                const c = new bootstrap.Modal(a, {
                    keyboard: !1
                });
                let v = document.getElementById("eventCategory");
                const u = new Choices(v, {
                    silent: !0,
                    allowHTML: !1,
                    searchEnabled: !0,
                    placeholder: !0,
                    placeholderValue: null,
                    searchPlaceholderValue: "Search",
                    shouldSort: !1,
                    choices: [{
                        value: "event-primary",
                        label: "Company"
                    }, {
                        value: "event-success",
                        label: "Seminars"
                    }, {
                        value: "event-info",
                        label: "Conferences"
                    }, {
                        value: "event-warning",
                        label: "Meeting"
                    }, {
                        value: "event-danger",
                        label: "Business dinners"
                    }, {
                        value: "event-dark",
                        label: "Private"
                    }, {
                        value: "event-primary-soft",
                        label: "Auctions"
                    }, {
                        value: "event-success-soft",
                        label: "Networking events"
                    }, {
                        value: "event-info-soft",
                        label: "Product launches"
                    }, {
                        value: "event-warning-soft",
                        label: "Fundrising"
                    }, {
                        value: "event-danger-soft",
                        label: "Sponsored"
                    }, {
                        value: "event-dark-soft",
                        label: "Sports events"
                    }],
                    callbackOnCreateTemplates: function(e) {
                        return {
                            item: ({
                                classNames: t
                            }, n) => e(`\n                                <div class="${t.item} ${n.highlighted?t.highlightedState:t.itemSelectable} ${n.placeholder?t.placeholder:""}" data-item data-id="${n.id}" data-value="${n.value}" ${n.active?'aria-selected="true"':""} ${n.disabled?'aria-disabled="true"':""}>\n                                    <span class="fc-select-dot fc-${n.value}"></span> ${n.label}\n                                </div>\n                                `),
                            choice: ({
                                classNames: t
                            }, n) => e(`\n                                <div class="${t.item} ${t.itemChoice} ${n.disabled?t.itemDisabled:t.itemSelectable}" data-select-text="${this.config.itemSelectText}" data-choice ${n.disabled?'data-choice-disabled aria-disabled="true"':"data-choice-selectable"} data-id="${n.id}" data-value="${n.value}" ${n.groupId>0?'role="treeitem"':'role="option"'}>\n                                    <span class="fc-select-dot fc-${n.value}"></span> ${n.label}\n                                </div>\n                                `)
                        }
                    }
                });
                let m, p, f = document.getElementById("deleteEvent"),
                    h = document.getElementById("editEvent"),
                    b = document.getElementById("addEvent"),
                    g = document.getElementById("eventFormModal"),
                    y = g.querySelector(".fc-form-title"),
                    S = (g.querySelector(".fc-form-action"), g.querySelector("#eventTitle")),
                    M = g.querySelector("#eventDescription"),
                    T = g.querySelector("#eventCategory"),
                    E = g.querySelector("#eventStartDate"),
                    w = g.querySelector("#eventStartTime"),
                    D = g.querySelector("#eventEndDate"),
                    x = g.querySelector("#eventEndTime"),
                    k = g.querySelector("#eventAdd"),
                    C = g.querySelector("#eventUpdate");
                const L = new bootstrap.Modal(g, {
                    keyboard: !1
                });
                f.addEventListener("click", (function(e) {
                    e.preventDefault(), m.remove()
                })), h.addEventListener("click", (function(e) {
                    e.preventDefault(), c.hide(), L.show();
                    let t = m._instance.range.start,
                        n = t.getFullYear() + "-" + String(t.getMonth() + 1).padStart(2, "0") + "-" + String(t.getDate()).padStart(2, "0"),
                        a = t.toUTCString().split(" ");
                    a = a[a.length - 2], a = "00:00:00" == a ? "" : a;
                    let i = m._instance.range.end,
                        l = i.getFullYear() + "-" + String(i.getMonth() + 1).padStart(2, "0") + "-" + String(i.getDate()).padStart(2, "0"),
                        s = i.toUTCString().split(" ");
                    s = s[s.length - 2], s = "00:00:00" == s ? "" : s, y.innerText = "Edit Event", S.value = m._def.title, M.value = m._def.extendedProps.description ? m._def.extendedProps.description : "", E.value = n, w.value = a, D.value = l, x.value = s, u.setChoiceByValue(m._def.ui.classNames[0].slice(3)), k.style.display = "none", C.style.display = "block"
                })), b.addEventListener("click", (function(e) {
                    e.preventDefault(), y.innerText = "Add Event", S.value = "", M.value = "", E.value = "", w.value = "", D.value = "", x.value = "", u.setChoiceByValue("event-primary"), k.style.display = "block", C.style.display = "none"
                })), C.addEventListener("click", (function(e) {
                    e.preventDefault(), m.remove(), t.addEvent({
                        id: p,
                        title: S.value,
                        start: E.value + (w.value ? "T" + w.value + "Z" : ""),
                        end: D.value + (x.value ? "T" + x.value + "Z" : ""),
                        className: "fc-" + T.value,
                        description: M.value
                    }), L.hide()
                })), k.addEventListener("click", (function(e) {
                    e.preventDefault(), t.addEvent({
                        id: "added-event-id-" + Math.floor(9999999 * Math.random()),
                        title: S.value,
                        start: E.value + (w.value ? "T" + w.value + "Z" : ""),
                        end: D.value + (x.value ? "T" + x.value + "Z" : ""),
                        className: "fc-" + T.value,
                        description: M.value
                    }), L.hide()
                }))
            }
        })
    }, e.Time = {
        today: function() {
            let e = new Date,
                t = String(e.getDate()).padStart(2, "0"),
                n = String(e.getMonth() + 1).padStart(2, "0");
            return e.getFullYear() + "-" + n + "-" + t
        },
        yesterday: function() {
            let e = new Date,
                t = new Date(e);
            t.setDate(e.getDate() - 1);
            let n = String(t.getDate()).padStart(2, "0"),
                a = String(t.getMonth() + 1).padStart(2, "0");
            return t.getFullYear() + "-" + a + "-" + n
        },
        currentMonth: function() {
            let e = new Date,
                t = String(e.getMonth() + 1).padStart(2, "0");
            return e.getFullYear() + "-" + t
        }
    }, e.Calendar.init = function() {
        e.Calendar(".js-calendar", [{
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "Reader will be distracted",
            start: e.Time.currentMonth() + "-03T13:30:00",
            className: "fc-event-danger",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden. 1"
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "Rabfov va hezow.",
            start: e.Time.currentMonth() + "-14T13:30:00",
            end: e.Time.currentMonth() + "-14",
            className: "fc-event-success",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "The leap into electronic",
            start: e.Time.currentMonth() + "-05",
            end: e.Time.currentMonth() + "-06",
            className: "fc-event-primary",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "Lorem Ipsum passage - Product Release",
            start: e.Time.currentMonth() + "-02",
            end: e.Time.currentMonth() + "-04",
            className: "fc-event-primary",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            title: "Gibmuza viib hepobe.",
            start: e.Time.currentMonth() + "-12",
            end: e.Time.currentMonth() + "-10",
            className: "fc-event-dark-soft",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "Jidehse gegoj fupelone.",
            start: e.Time.currentMonth() + "-07T16:00:00",
            className: "fc-event-danger-soft",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "Ke uzipiz zip.",
            start: e.Time.currentMonth() + "-16T16:00:00",
            end: e.Time.currentMonth() + "-14",
            className: "fc-event-info-soft",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "Piece of classical Latin literature",
            start: e.Time.today(),
            end: e.Time.today() + "-01",
            className: "fc-event-primary",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "Nogok kewwib ezidbi.",
            start: e.Time.today() + "T10:00:00",
            className: "fc-event-info",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "Mifebi ik cumean.",
            start: e.Time.today() + "T14:30:00",
            className: "fc-event-warning-soft",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "Play Time",
            start: e.Time.today() + "T17:30:00",
            className: "fc-event-info",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "Rujfogve kabwih haznojuf.",
            start: e.Time.yesterday() + "T05:00:00",
            className: "fc-event-danger",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }, {
            id: "default-event-id-" + Math.floor(9999999 * Math.random()),
            title: "simply dummy text of the printing",
            start: e.Time.yesterday() + "T07:00:00",
            className: "fc-event-primary-soft",
            description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
        }])
    }, e.winLoad(e.Calendar.init)
}(NioApp);
