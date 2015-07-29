Ext.namespace("K.kreports.DetailView");

var ajaxMask = new Ext.LoadMask(Ext.getBody(), {
    msg: "loading"
});

Ext.onReady(function() {
    Ext.Ajax.timeout = 9e4;
    if ("" != document.getElementById("reportoptions").value) bI = Ext.JSON.decode(document.getElementById("reportoptions").value); else bI = new Object();
    K.kreports.DetailView.bl = [ {
        name: "fieldid",
        mapping: "fieldid"
    }, {
        name: "sequence",
        mapping: "sequence"
    }, {
        name: "name",
        mapping: "name"
    }, {
        name: "groupid",
        mapping: "groupid"
    }, {
        name: "path",
        mapping: "path"
    }, {
        name: "displaypath",
        mapping: "displaypath"
    }, {
        name: "operator",
        mapping: "operator"
    }, {
        name: "type",
        mapping: "type"
    }, {
        name: "value",
        mapping: "value"
    }, {
        name: "valuekey",
        mapping: "valuekey"
    }, {
        name: "valueto",
        mapping: "valueto"
    }, {
        name: "valuetokey",
        mapping: "valuetokey"
    }, {
        name: "jointype",
        mapping: "jointype"
    }, {
        name: "include",
        mapping: "include"
    }, {
        name: "usereditable",
        mapping: "usereditable"
    } ];
    Ext.define("K.kreports.DetailView.bj", {
        extend: "Ext.data.Model",
        fields: K.kreports.DetailView.bl
    });
    K.kreports.DetailView.af = new Ext.data.JsonStore({
        model: K.kreports.DetailView.bj,
        paramsAsHash: true,
        sorters: [ {
            property: "sequence",
            direction: "ASC"
        } ],
        listeners: {
            add: function(a) {
                this.updatewherefield();
            },
            update: function(a) {
                this.updatewherefield();
            },
            remove: function(a) {
                this.updatewherefield();
            }
        },
        updatewherefield: function() {
            var a = "[";
            function b(b) {
                if ("[" != a) a += ",";
                a += Ext.JSON.encode(b.data);
            }
            K.kreports.DetailView.af.each(b);
            a += "]";
            document.getElementById("dynamicoptions").value = a;
        }
    });
    K.kreports.DetailView.ae = function(a) {
        var b = "[";
        function c(a) {
            if ("[" != b) b += ",";
            b += Ext.JSON.encode(a.data);
        }
        K.kreports.DetailView.af.each(c);
        b += "]";
        return b;
    };
    K.kreports.DetailView.updatewherefield = function() {
        var a = "[";
        function b(b) {
            if ("[" != a) a += ",";
            a += Ext.JSON.encode(b.data);
        }
        K.kreports.DetailView.af.each(b);
        a += "]";
        document.getElementById("dynamicoptions").value = a;
    };
    if ("" != document.getElementById("dynamicoptions").value) {
        var dynamicoptions;
        eval("dynamicoptions = " + document.getElementById("dynamicoptions").value);
        K.kreports.DetailView.af.loadData(dynamicoptions);
        var hideDynamicOperators = true;
        if (K.kreports.DetailView.af.findExact("usereditable", "yes") != -1) hideDynamicOperators = false;
        var hideOnOffSwitch = true;
        if (K.kreports.DetailView.af.findExact("usereditable", "yo1") != -1 || K.kreports.DetailView.af.findExact("usereditable", "yo2") != -1) hideOnOffSwitch = false;
        var bf = [ {
            header: bi("LBL_FIELDNAME"),
            readOnly: true,
            dataIndex: "displaypath",
            width: 150,
            sortable: true,
            hidden: true
        }, {
            id: "name",
            header: bi("LBL_NAME"),
            dataIndex: "name",
            sortable: true,
            width: 150
        }, {
            id: "onoffswitch",
            header: bi("LBL_ONOFF_COLUMN"),
            readOnly: true,
            dataIndex: "usereditable",
            width: 40,
            sortable: true,
            hidden: hideDynamicOperators,
            renderer: function(a) {
                if ("yo1" == a || "yo2" == a) return bi("LBL_ONOFF_" + a.toUpperCase()); else return "";
            },
            editor: new Ext.form.TextField()
        }, {
            id: "operator",
            header: bi("LBL_OPERATOR"),
            readOnly: true,
            dataIndex: "operator",
            width: 150,
            sortable: true,
            hidden: hideDynamicOperators,
            renderer: function(a) {
                return bi("LBL_OP_" + a.toUpperCase());
            },
            editor: new Ext.form.TextField()
        }, {
            id: "value",
            header: bi("LBL_VALUE_FROM"),
            dataIndex: "value",
            sortable: true,
            hidden: false,
            width: 150,
            editor: new Ext.form.TextField()
        }, {
            id: "valueto",
            header: bi("LBL_VALUE_TO"),
            dataIndex: "valueto",
            sortable: true,
            hidden: false,
            width: 150,
            editor: new Ext.form.TextField()
        } ];
        if (void 0 != bI.optionsFolded && "open" == bI.optionsFolded) optionsCollapsed = false; else optionsCollapsed = true;
        var cW = function() {
            if (void 0 != bI.updateOnRequest && true == bI.updateOnRequest) return [ {
                type: "search",
                handler: function() {
                    reloadWhereGridStore();
                }
            } ]; else return [ {
                type: "search",
                handler: function() {
                    reloadWhereGridStore();
                }
            } ];
            return null;
        };
        var reloadWhereGridStore = function() {
            if (void 0 != K.kreports.visualizationmanager) K.kreports.visualizationmanager.update();
            Ext.getCmp("kReporterPresentation").reloadPresentation(K.kreports.DetailView.ae(), 0);
        };
        K.kreports.DetailView.bH = new Ext.grid.Panel({
            store: K.kreports.DetailView.af,
            columns: bf,
            titleCollapse: true,
            maxHeight: 300,
            collapsed: optionsCollapsed,
            collapsible: true,
            renderTo: "optionsArea",
            title: bi("LBL_DYNAMIC_OPTIONS"),
            tools: cW(),
            viewConfig: {
                markDirty: false,
                stripeRows: true
            },
            plugins: [ Ext.create("Ext.grid.plugin.CellEditing", {
                id: "whereeditplugin",
                clicksToEdit: 1,
                listeners: {
                    beforeedit: function(a, b, c) {
                        bM(b, K.kreports.DetailView.bH);
                    },
                    edit: function(a, b) {
                        aL(b);
                        if ("usereditable" == b.field || "value" == b.field || "valueto" == b.field || "operator" == b.field && ("ignore" == b.value || "isempty" == b.value || "isemptyornull" == b.value || "isnull" == b.value || "isnotempty" == b.value || "today" == b.value || "past" == b.value || "future" == b.value || "thismonth" == b.value || "next3month" == b.value || "thisyear" == b.value || "lastmonth" == b.value || "last3month" == b.value || "lastyear" == b.value)) if (void 0 == bI.updateOnRequest || void 0 != bI.updateOnRequest && false == bI.updateOnRequest) reloadWhereGridStore();
                    }
                }
            }) ],
            listeners: {
                viewready: function() {
                    K.kreports.DetailView.bH.setHeight();
                },
                afteredit: function() {
                    alert("edited");
                }
            }
        });
    }
    if (void 0 != bI.showTools && false == bI.showTools) showTools = true; else showTools = false;
    var ReportGridToolbar = new Ext.Toolbar({
        renderTo: "toolbarArea",
        items: [ {
            text: bi("LBL_EDIT_BUTTON_LABEL"),
            icon: "modules/KReports/images/report_edit.png",
            handler: function() {
                var a = document.getElementById("form");
                if (!a) var a = document.getElementById("formDetailView");
                a.return_module.value = "KReports";
                a.return_action.value = "DetailView";
                a.action.value = "EditView";
                a.submit();
            },
            id: "KReportsEditReportButton",
            disabled: accessLevel > 0 ? false : true
        }/*, {
            text: bi("LBL_DUPLICATE_REPORT_BUTTON_LABEL"),
            id: "KReportsDuplicateReportButton",
            icon: "modules/KReports/images/copy.png",
            handler: function() {
                Ext.Msg.prompt(bi("LBL_DUPLICATE_NAME"), bi("LBL_DUPLICATE_PROMPT"), function(a, b) {
                    if ("ok" == a) Ext.Ajax.request({
                        url: "index.php?module=KReports&to_pdf=true&action=duplicate_report",
                        params: {
                            newName: b,
                            record: document.getElementById("recordid").value
                        }
                    });
                });
            },
            disabled: accessLevel > 0 ? false : true
        }, {
            text: bi("LBL_DELETE_BUTTON_LABEL"),
            icon: "modules/KReports/images/report_delete.png",
            handler: function() {
                Ext.MessageBox.confirm(bi("LBL_DIALOG_CONFIRM"), bi("LBL_DIALOG_DELETE_YN"), function(a) {
                    if ("yes" == a) {
                        var b = document.getElementById("form");
                        if (!b) var b = document.getElementById("formDetailView");
                        b.return_module.value = "KReports";
                        b.return_action.value = "ListView";
                        b.action.value = "Delete";
                        b.submit();
                    }
                });
            },
            id: "KReportsDeleteReportButton",
            disabled: accessLevel > 1 ? false : true
        }*/, "-", {
            text: bi("LBL_EXPORTMENU_BUTTON_LABEL"),
            icon: "modules/KReports/images/export.png",
            menu: {
                items: kintegrationpluginsarray["export"]
            },
            disabled: 0 == kintegrationpluginsarray["export"].length ? true : false
        }, "-", {
            text: bi("LBL_TOOLSMENU_BUTTON_LABEL"),
            icon: "modules/KReports/images/tools.png",
            menu: {
                items: kintegrationpluginsarray["tool"]
            },
            disabled: 0 == kintegrationpluginsarray["tool"].length ? true : false
        }, "->", {
            xtype: "tbtext",
            text: K.kreports.decode64(K.kreports.M),
            style: {
                fontWeight: "bold",
                fontStyle: "italic"
            }
        }, new Ext.toolbar.Item({
            width: 38,
            html: K.kreports.decode64(K.kreports.H),
            style: {
                "margin-right": "5px"
            }
        }) ]
    });
    Ext.getCmp("kReporterPresentation").renderPresentation();
    if (Ext.getCmp("kReporterPresentation").loadPresentation) Ext.getCmp("kReporterPresentation").loadPresentation(K.kreports.DetailView.ae());
    Ext.fly(Ext.getBody().dom.parentNode).removeCls("x-border-box");
    Ext.fly("content").addCls("x-border-box");
});