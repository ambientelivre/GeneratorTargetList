Ext.onReady(function() {
    Ext.fly(Ext.getBody().dom.parentNode).removeCls('x-border-box');
    Ext.fly('content').addCls('x-border-box');
    K.kreports.EditView = true;
    K.kreports.mainEditToolbar.Toolbar.render('toolbarArea');
    K.kreports.mainEditToolbar.Toolbar.initialize();
    K.kreports.EditViewWhereclause.A.loadDirect();
    initialTreeBuild();
    K.kreports.EditViewWhereclause.af.loadDirect();
    listGridStore.loadDirect();
    K.kreports.unionList.unionListGridStore.loadDirect();
    K.kreports.mainPanel = Ext.create('Ext.panel.Panel', {
        renderTo: 'layoutregion',
        monitorResize: true,
        height: 600,
        layout: 'border',
        border: false,
        layoutConfig: {
            align: 'stretch',
            pack: 'pack'
        },
        defaults: {},
        items: [Ext.create('Ext.panel.Panel', {
            region: 'west',
            width: 200,
            height: 600,
            layout: 'vbox',
            layoutConfig: {
                align: 'stretch',
                pack: 'center'
            },
            items: [new Ext.panel.Panel({
                title: bi('LBL_MODULES'),
                width: 200,
                flex: 1,
                border: false,
                layout: {
                    type: 'accordion',
                    titleCollapse: false,
                    animate: true,
                    activeOnTop: true
                },
                items: [mainModuleTreePanel, K.kreports.unionTree.unionTreePanel]
            }), FieldsListingEditorGrid]
        }), new Ext.tab.Panel({
            width: 600,
            flex: 1,
            height: 500,
            region: 'center',
            frame: false,
            activeTab: 1,
            items: [K.kreports.vboxWhere, {
                layout: 'fit',
                title: bi('LBL_LISTFIELDS'),
                icon: 'modules/KReports/images/manipulation.png',
                items: [K.kreports.mainListGrid.listGrid, K.kreports.unionList.unionListGrid]
            }, K.kreports.presentationpanel.mainpanel, K.kreports.visualizationpanel.mainpanel, K.kreports.integrationpanel.mainpanel]
        })]
    });
    K.kreports.unionTree.bK();
    K.kreports.EditViewModuletree.modulesCombo.initializeCombo();
    K.kreports.presentationpanel.mainpanel.initialize();
    K.kreports.visualizationpanel.mainpanel.initialize();
    K.kreports.integrationpanel.mainpanel.initialize();
    K.kreports.mainPanel.setHeight(Math.max(Math.max(document.body.scrollHeight, document.documentElement.scrollHeight), Math.max(document.body.offsetHeight, document.documentElement.offsetHeight), Math.max(document.body.clientHeight, document.documentElement.clientHeight)) - 145);
    window.onbeforeunload = null;
});