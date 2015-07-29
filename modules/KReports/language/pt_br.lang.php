<?php
/* * *******************************************************************************
 * This file is part of KReporter. KReporter is an enhancement developed
 * by Christian Knoll. All rights are (c) 2012 by Christian Knoll
 *
 * This Version of the KReporter is licensed software and may only be used in
 * alignment with the License Agreement received with this Software.
 * This Software is copyrighted and may not be further distributed without
 * witten consent of Christian Knoll
 *
 * You can contact us at info@kreporter.org
 * 
 * 
 * Traduzido por Ramon Marcondes (Ramon91rm)
 * ****************************************************************************** */
if (!defined('sugarEntry') || !sugarEntry) die('Não é um ponto de entrada válido');

$mod_strings = array(
    'LBL_SAVE_BUTTON_LABEL' => 'Pré-vizualiar',
    'LBL_CANCEL_BUTTON_LABEL' => 'Cancelar',
    'LBL_REPORT_NAME_LABEL' => 'Nome',
    'LBL_LOADMASK' => '... carregando dados ...',
    'LBL_ASSIGNED_USER_LABEL' => 'Usuário',
    'LBL_ASSIGNED_TEAM_LABEL' => 'Time',
    'LBL_KORGOBJECTS_LABEL' => 'Território',
    'LBL_REPORT_OPTIONS' => 'Opções',
    'LBL_DEFAULT_NAME' => 'novo relatório',
    'LBL_SEARCHING' => 'procurando ...',
    'LBL_LONGTEXT_LABEL' => 'Descrição',
    'LBL_DEFAULT_NAME' => 'Novo Relatório',
    'LBL_CHART_NODATA' => 'não há DATA do K Reporter disponível para mostrar',
    'LBL_REPORT_RELOAD' => 'Aplicar Filtros',
    'LBL_LIST_LISTTYPE' => 'Tipo de lista',
    'LBL_LIST_CHART_LAYOUT' => 'Layout de gráfico',
    'LBL_LIST_DATEENTERED' => 'Data criada',
    'LBL_LIST_DATEMODIFIED' => 'Data modificada',
    'LBL_SEARCHING' => 'Procurando...',
    'LBL_AUTH_CHECK' => 'Verificação de Autorização',
    'LBL_AUTH_FULL' => 'Em todos os nós',
    'LBL_AUTH_TOP' => 'Somente nó do topo',
    'LBL_AUTH_NONE' => 'Desabilitado',
    'LBL_SHOW_DELETED' => 'Mostrar deletados',
    'LBL_FOLDED_PANELS' => 'Painéis Flexíveis',
    'LBL_DYNOPTIONS' => 'Opções dinâmicas',
    'LBL_RESULTS' => 'Resultados ocultados',
    'LBL_PANEL_OPEN' => 'abrir',
    'LBL_PANEL_COLLAPSED' => 'ocultado',
    'LBL_OPTIONS_MENUITEMS' => 'Itens de barra de ferramentas',
    'LBL_ADVANCEDOPTIONS_MENUITEMS' => 'Opções avançadas',
    'LBL_AOP_EXPORTTOPLANNING' => 'Exportar para Nós de Planejamento',
    'LBL_TOOLBARITEMS_FS' => 'Itens de barra de ferramentas',
    'LBL_TOOLBARITEMS_SHOW' => 'Mostrar',
    'LBL_SHOW_EXPORT' => 'Exportar',
    'LBL_SHOW_SNAPSHOTS' => 'Snapshots',
    'LBL_SHOW_TOOLS' => 'Ferramentas',
    'LBL_DATA_UPDATE' => 'Atualização de dados',
    'LBL_UPDATE_ON_REQUEST' => 'em Requisição do Usuário',
    'LBL_MODULE_NAME' => 'K Reports',
    'LBL_REPORT_STATUS' => 'Status do Relatório',
    'LBL_MODULE_TITLE' => 'K Reports',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisa de Relatório',
    'LBL_LIST_FORM_TITLE' => 'Lista de Relatório',
    'LBL_NEW_FORM_TITLE' => 'Criar K Report',
    'LBL_LIST_CLOSE' => 'Fechar',
    'LBL_LIST_SUBJECT' => 'Título',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LNK_NEW_REPORT' => 'Criar novo Relatório',
    'LNK_REPORT_LIST' => 'Listar Relatórios',
    'LBL_UNIONTREE' => 'módulos de União',
    'LBL_UNIONLISTFIELDS' => 'Lista de campos de união',
    'LBL_UNIONFIELDDISPLAYPATH' => 'Caminho de união',
    'LBL_UNIONFIELDNAME' => 'Nome do campo de união',
    'LBL_SELECT_MODULE' => 'Selecione um módulo',
    'LBL_SELECT_TAB' => 'Selecione uma aba',
    'LBL_ENTER_SEARCH_TERM' => 'Entre com o termo de pesquisa',
    'LBL_LIST_MODULE' => 'Módulo',
    'LBL_LIST_ASSIGNED_USER_NAME' => 'Usuário assinalado',
    'LBL_DEFINITIONS' => 'Definição de Relatório',
    'LBL_MODULES' => 'Módulos',
    'LBL_LISTFIELDS' => 'manipular',
    'LBL_PRESENTATION' => 'presente',
    'LBL_CHARTDEFINITION' => 'Detalhes do gráfico',
    'LBL_TARGETLIST_NAME' => 'Nome da lista de alvos',
    'LBL_TARGETLIST_PROMPT' => 'Nome da nova lista de alvos',
    'LBL_DUPLICATE_NAME' => 'Novo nome de Relatório',
    'LBL_DUPLICATE_PROMPT' => 'Entre com o nome do novo Relatório',
    'LBL_DYNAMIC_OPTIONS' => 'Critério de Pesquisa/Filtro',
    // Grid headers
    'LBL_FIELDNAME' => 'Nome do campo',
    'LBL_NAME' => 'Nome',
    'LBL_OPERATOR' => 'Operador',
    'LBL_VALUE_FROM' => 'Igual/De',
    'LBL_VALUE_TO' => 'Para',
    'LBL_JOIN_TYPE' => 'Obrigatório',
    'LBL_TYPE' => 'Tipo',
    'LBL_WIDTH' => 'Largura',
    'LBL_SORTPRIORITY' => 'Prioridade de classificação.',
    'LBL_SORTSEQUENCE' => 'Classificação',
    'LBL_EXPORTPDF' => 'mostrar em PDF',
    'LBL_DISPLAY' => 'Mostrar',
    'LBL_OVERRIDETYPE' => 'sobrescrever tipo',
    'LBL_LINK' => 'Link',
    'LBL_WIDGET' => 'Ferramenta',
    'LBL_FIXEDVALUE' => 'Valor fixo',
    'LBL_ASSIGNTOVALUE' => 'Armazenar',
    'LBL_FORMULAVALUE' => 'Fórmula',
    'LBL_FORMULASEQUENCE' => 'Sequência',
    'LBL_PATH' => 'Caminho',
    'LBL_FULLPATH' => 'caminho técnico',
    'LBL_SEQUENCE' => 'Sequência',
    'LBL_GROUPBY' => 'Agrupar por',
    'LBL_SQLFUNCTION' => 'Função',
    'LBL_CUSTOMSQLFUNCTION' => 'Função customizada',
    'LBL_VALUETYPE' => 'Tipo de valor',
    'LBL_DISPLAYFUNCTION' => 'Mostrar função',
    'LBL_USEREDITABLE' => 'Permitir edição',
    'LBL_DASHLETEDITABLE' => 'Opção de dashlet',
    'LBL_QUERYCONTEXT' => 'Contexto',
    'LBL_QUERYREFERENCE' => 'Referência',
    'LBL_UEOPTION_YES' => 'sim',
    'LBL_UEOPTION_NO' => 'não',
    'LBL_UEOPTION_YFO' => 'somente valores',
    'LBL_UEOPTION_YO1' => 'ligado/(desligado)',
    'LBL_UEOPTION_YO2' => '(ligado)/desligado',
    'LBL_DEOPTION_YES' => 'sim',
    'LBL_DEOPTION_NO' => 'não',
    'LBL_ONOFF_YO1' => 'sim',
    'LBL_ONOFF_YO2' => 'não',
    'LBL_ONOFF_COLUMN' => 's/n',
    // Title and Headers for Multiselect Popup
    'LBL_MUTLISELECT_POPUP_TITLE' => 'Selecionar valores',
    'LBL_MULTISELECT_VALUE_HEADER' => 'ID',
    'LBL_MULTISELECT_TEXT_HEADER' => 'Valor',
    'LBL_MUTLISELECT_CLOSE_BUTTON' => 'Atualizar',
    'LBL_MUTLISELECT_CANCEL_BUTTON' => 'Cancelar',
    // Title and Headers for Datetimepicker Popup
    'LBL_DATETIMEPICKER_POPUP_TITLE' => 'Selecionar Data/Hora',
    'LBL_DATETIMEPICKER_CLOSE_BUTTON' => 'Atualizar',
    'LBL_DATETIMEPICKER_CANCEL_BUTTON' => 'Cancelar',
    'LBL_DATETIMEPICKER_DATE' => 'Data',
    // for the Snapshot Comaprison
    'LBL_SNAPSHOTCOMPARISON_POPUP_TITLE' => 'Gráfico por gráfico',
    'LBL_SNAPSHOTTRENDANALYSIS_POPUP_TITLE' => 'Análise de tendências',
    'LBL_SNAPSHOTCOMPARISON_SNAPHOT_HEADER' => 'Instantâneo',
    'LBL_SNAPSHOTCOMPARISON_DESCRIPTION_HEADER' => 'Descrição',
    'LBL_SNAPSHOTCOMPARISON_SELECT_CHART' => 'Selecionar Gráfico:',
    'LBL_SNAPSHOTCOMPARISON_SELECT_LEFT' => 'Selecionar fonte à esquerda:',
    'LBL_SNAPSHOTCOMPARISON_SELECT_RIGHT' => 'Select fonte à direita:',
    'LBL_SNAPSHOTCOMPARISON_DATASERIES' => 'Dado',
    'LBL_SNAPSHOTCOMPARISON_DATADIMENSION' => 'Dimensão',
    'LBL_SNAPSHOTCOMPARISON_CHARTTYPE' => 'Tipo de gráfico',
    'LBL_BASIC_TRENDLINE_BUTTON_LABEL' => 'Análise de tendências',
    'LBL_SNAPSHOTCOMPARISON_CHARTTYPE_MSLINE' => 'Linha',
    'LBL_SNAPSHOTCOMPARISON_CHARTTYPE_STACKEDAREA2D' => 'Área',
    'LBL_SNAPSHOTCOMPARISON_CHARTTYPE_MSBAR2D' => 'Barras 2D',
    'LBL_SNAPSHOTCOMPARISON_CHARTTYPE_MSBAR3D' => 'Barras 3D',
    'LBL_SNAPSHOTCOMPARISON_CHARTTYPE_MSCOLUMN2D' => 'Coluna 2D',
    'LBL_SNAPSHOTCOMPARISON_CHARTTYPE_MSCOLUMN3D' => 'Coluna 3D',
    'LBL_SNAPSHOTCOMPARISON_LOADINGCHARTMSG' => 'carregando gráfico',
    // Operator Names
    'LBL_OP_IGNORE' => 'ignorar',
    'LBL_OP_EQUALS' => '=',
    'LBL_OP_AUTOCOMPLETE' => 'autocompletar nome',
    'LBL_OP_SOUNDSLIKE' => 'parece',
    'LBL_OP_NOTEQUAL' => '≠',
    'LBL_OP_STARTS' => 'começa com',
    'LBL_OP_CONTAINS' => 'contém',
    'LBL_OP_NOTSTARTS' => 'não começa com',
    'LBL_OP_NOTCONTAINS' => 'não contém',
    'LBL_OP_BETWEEN' => 'está entre',
    'LBL_OP_ISEMPTY' => 'está vazio',
    'LBL_OP_ISEMPTYORNULL' => 'é vazio ou NULO',
    'LBL_OP_ISNULL' => 'é NULO',
    'LBL_OP_ISNOTEMPTY' => 'não é vazio',
    'LBL_OP_FIRSTDAYOFMONTH' => 'primeiro dia do mês atual',
    'LBL_OP_FIRSTDAYNEXTMONTH' => 'primeiro dia do próximo mês',
    'LBL_OP_NTHDAYOFMONTH' => 'dia do mês atual',
    'LBL_OP_THISMONTH' => 'mês atual',
    'LBL_OP_NOTTHISMONTH' => 'não é o mês atual',
    'LBL_OP_THISWEEK' => 'semana atual',
    'LBL_OP_NEXT3MONTH' => 'nos próximos 3 meses',
    'LBL_OP_NEXT3MONTHDAILY' => 'todo dia nos próximos 3 meses', 
    'LBL_OP_NEXT6MONTH' => 'no próximo 6º mês', 
    'LBL_OP_NEXT6MONTHDAILY' => 'todo dia nos próximo mês 6', 
    'LBL_OP_LAST3MONTHDAILY' => 'todo dia nos últimos 6 meses', 
    'LBL_OP_LAST6MONTH' => 'dento do último 6º mês', 
    'LBL_OP_LAST6MONTHDAILY' => 'todo dia dento do último 6º mês',
    'LBL_OP_LASTNFMONTH' => 'no último n mês inteiro',
    'LBL_OP_TODAY' => 'hoje',
    'LBL_OP_PAST' => 'no passado',
    'LBL_OP_FUTURE' => 'no futuro',
    'LBL_OP_LASTNDAYS' => 'nos últimos n dias (quantidade)',
    'LBL_OP_LASTNFDAYS' => 'nos últimos n dias inteiros (quantidade)',
    'LBL_OP_LASTNDDAYS' => 'nos últimos n days (Data)',
    'LBL_OP_LASTNWEEKS' => 'nas últimas n semanas',
    'LBL_OP_NOTLASTNWEEKS' => 'não mas próximas n semanas',
    'LBL_OP_LASTNFWEEKS' => 'não nas próximas n semana inteiras',
    'LBL_OP_NEXTNDAYS' => 'não nos próximos n days (quantidade)',
    'LBL_OP_NEXTNDDAYS' => 'nos próximos n dias (Data)',
    'LBL_OP_NEXTNWEEKS' => 'nas próximas n semanas',
    'LBL_OP_NOTNEXTNWEEKS' => 'não nas próximas n semanas',
    'LBL_OP_BETWNDAYS' => 'entre n dias (quantidade)',
    'LBL_OP_BETWNDDAYS' => 'entre n dias (Data)',
    'LBL_OP_BEFORE' => 'antes',
    'LBL_OP_AFTER' => 'depois',
    'LBL_OP_LASTMONTH' => 'último mês',
    'LBL_OP_LAST3MONTH' => 'no último 3º mês',
    'LBL_OP_THISYEAR' => 'esse ano',
    'LBL_OP_LASTYEAR' => 'útimo ano',
    'LBL_OP_TYYTD' => 'YTD',
    'LBL_OP_LYYTD' => 'último ano YTD',
    'LBL_OP_GREATER' => '>',
    'LBL_OP_LESS' => '<',
    'LBL_OP_GREATEREQUAL' => '>=',
    'LBL_OP_LESSEQUAL' => '<=',
    'LBL_OP_ONEOF' => 'é um de',
    'LBL_OP_ONEOFNOT' => 'não é um de',
    'LBL_OP_ONEOFNOTORNULL' => 'não é um de ou NULO',
    'LBL_OP_PARENT_ASSIGN' => 'assinalar do Pai',
    'LBL_OP_FUNCTION' => 'função',
    'LBL_OP_REFERENCE' => 'referência',
    'LBL_BOOL_0' => 'falso',
    'LBL_BOOL_1' => 'verdadeiro',
    // for the List view Menu
    'LBL_LISTVIEW_OPTIONS' => 'Listar Opções',
    // List Limits
    'LBL_LI_TOP10' => 'top 10',
    'LBL_LI_TOP20' => 'top 20',
    'LBL_LI_TOP50' => 'top 50',
    'LBL_LI_TOP250' => 'top 250',
    'LBL_LI_BOTTOM50' => 'últimos 50',
    'LBL_LI_BOTTOM10' => 'últimos 10',
    'LBL_LI_NOLIMIT' => 'sem limite',

    // buttons
    'LBL_CHANGE_GROUP_NAME' => 'Mudar nome do grupo',
    'LBL_CHANGE_GROUP_NAME_PROMPT' => 'Nome :',
    'LBL_ADD_GROUP_NAME' => 'Criar novo grupo',

    'LBL_SELECTION_CLAUSE' => 'Selecionar Cláusula: ',
    'LBL_SELECTION_LIMIT' => 'Limitar Lista para:',
    'LBL_RECORDS' => 'Registros', 
    'LBL_PERCENTAGE' => '%',
    'LBL_EDIT_BUTTON_LABEL' => 'Editar',
    'LBL_DELETE_BUTTON_LABEL' => 'Deletar',
    'LBL_ADD_BUTTON_LABEL' => 'Adicionar',
    'LBL_ADDEMTPY_BUTTON_LABEL' => 'Adicionar fixo',
    'LBL_DOWN_BUTTON_LABEL' => '',
    'LBL_UP_BUTTON_LABEL' => '',
    'LBL_SNAPSHOT_BUTTON_LABEL' => 'Tirar Instantâneo',
    'LBL_CURRENT_SNAPSHOT' => 'atual',
    'LBL_SNAPSHOTMENU_BUTTON_LABEL' => 'Instantâneos',
    'LBL_TOOLSMENU_BUTTON_LABEL' => 'Ferramentas',
    'LBL_EXPORTMENU_BUTTON_LABEL' => 'Exportar',
    'LBL_COMPARE_SNAPSHOTS_BUTTON_LABEL' => 'Comparação Gráfico por Gráfico',
    'LBL_EXPORT_TO_EXCEL_BUTTON_LABEL' => 'EXCEL',
    'LBL_EXPORT_TO_KLM_BUTTON_LABEL' => 'Google Earth KML',
    'LBL_EXPORT_TO_PDF_BUTTON_LABEL' => 'PDF',
    'LBL_EXPORT_TO_PDFWCHART_BUTTON_LABEL' => 'PDF com gráfico',
    'LBL_EXPORT_TO_TARGETLIST_BUTTON_LABEL' => 'Lista de alvos',
    'LBL_SQL_BUTTON_LABEL' => 'SQL',
    'LBL_DUPLICATE_REPORT_BUTTON_LABEL' => 'Duplicar',
    'LBL_LISTTYPE' => 'Tipo d elista',
    'LBL_CHART_LAYOUTS' => 'Layout',
    'LBL_CHART_TYPE' => 'Tipo',
    'LBL_CHART_DIMENSION' => 'Dimensão',
    'LBL_CHART_INDEX_LABEL' => 'Índice de gráfico',
    'LBL_CHART_INDEX_EMPTY_TEXT' => 'Selecione um ID de gráfico',
    'LBL_CHART_LABEL' => 'Gráfico',
    'LBL_CHART_HEIGHT_LABEL' => 'Altura do gráfico',
     
    // Dropdown Values
    'LBL_DD_1' => 'sim',
    'LBL_DD_0' => 'não',

    // DropDownValues
    'LBL_DD_SEQ_YES' => 'Sim',
    'LBL_DD_SEQ_NO' => 'Não',
    'LBL_DD_SEQ_PRIMARY' => '1',
    'LBL_DD_SEQ_2' => '2',
    'LBL_DD_SEQ_3' => '3',
    'LBL_DD_SEQ_4' => '4',
    'LBL_DD_SEQ_5' => '5',
    // Panel Titles
    'LBL_WHERRE_CLAUSE_TITLE' => 'selecionar',
    //Confirm Dialog
    'LBL_DIALOG_CONFIRM' => 'Confirmar',
    'LBL_DIALOG_DELETE_YN' => 'você tem certeza que quer deletar esse Relatório?',

    // for the views options
    'LBL_RESET_BUTTON' => 'Resetar',
    'LBL_TREESTRCUTUREGRID_TITLE' => 'Árvore de Hierarquia',
    'LBL_REPOSITORYGRID_TITLE' => 'campos disponíveis',
    'LBL_CANCEL_BUTTON' => 'Cancelar',
    'LBL_CLOSE_BUTTON' => 'Fechar',
    'LBL_LISTTYPEPROPERTIES' => 'Propriedades',
    'LBL_XAXIS_TITLE' => 'Campos de eixo X',
    'LBL_YAXIS_TITLE' => 'Campos de eixo Y',
    'LBL_VALUES_TITLE' => 'Valor dos campos',
    'LBL_SUMMARIZATION_TITLE' => 'Campos de sumarização',
    'LBL_FUNCTION' => 'Função',
    'LBL_FUNCTION_SUM' => 'Soma',
    'LBL_FUNCTION_CUMSUM' => 'Soma acumulada',
    'LBL_FUNCTION_COUNT' => 'Quantidade',
    'LBL_FUNCTION_COUNT_DISTINCT' => 'Quantidade distinta',
    'LBL_FUNCTION_AVG' => 'Média',
    'LBL_FUNCTION_MIN' => 'Mínimo',
    'LBL_FUNCTION_MAX' => 'Máximo',
    'LBL_FUNCTION_GROUP_CONCAT' => 'Concatenar Grupo',
    //2013-03-01 Sort function for Group Concat
    'LBL_FUNCTION_GROUP_CONASC' => 'Concatenar Grupo (crescente)',
    'LBL_FUNCTION_GROUP_CONDSC' => 'Group Concat (decrescente)',
    // Value Types
    'LBL_VALUETYPE_TOFSUM' => 'mostrar Soma',
    'LBL_VALUETYPE_POFSUM' => '% da Soma',
    'LBL_VALUETYPE_POFCOUNT' => '% da Quantidade',
    'LBL_VALUETYPE_POFAVG' => '% da Média',
    'LBL_VALUETYPE_DOFSUM' => 'Δ para Soma',
    'LBL_VALUETYPE_DOFCOUNT' => 'Δ para Quantidade',
    'LBL_VALUETYPE_DOFAVG' => 'Δ para Média',
    'LBL_VALUETYPE_C' => 'Acumulado',
    // panel title
    'LBL_STANDARDGRIDPANELTITLE' => 'Resultado do Relatório',
    'LBL_STANDRDGRIDPANEL_FOOTERWCOUNT' => 'Resultados {0} - {1} de {2}',
    'LBL_STANDRDGRIDPANEL_FOOTERWOCOUNT' => 'Resultados {0} - {1}',
    'LBL_STANDARDGRIDPROPERTIES_COUNT' => 'processar Quantidade',
    'LBL_STANDARDGRIDPROPERTIES_SYNCHRONOUSCOUNT' => 'síncrono',
    'LBL_STANDARDGRIDPROPERTIES_ASYNCHRONOUSCOUNT' => 'assíncrono',
    'LBL_STANDARDGRIDPROPERTIES_NOCOUNT' => 'sem quantidade',
    'LBL_STANDARDGRIDENTRIES_COUNT' => 'registros por página',
    // General Labels
    'LBL_YES' => 'sim',
    'LBL_NO' => 'não',
    'LBL_HID' => 'escondido',
    'LBL_SORT_ASC' => 'cresc.',
    'LBL_SORT_DESC' => 'decresc.',
    'LBL_SORT_SORTABLE' => 'classificável',
    'LBL_JT_OPTIONAL' => 'opcional',
    'LBL_JT_REQUIRED' => 'obrigatório',
    //Trendlines
    'LBL_TRENDLINE_STARTVALUE' => 'Valor inicial',
    'LBL_TRENDLINE_ENDVALUE' => 'Valor final',
    'LBL_ADD_TRENDLINE' => 'adicionar Linha de tendência',
    'LBL_DELETE_TRENDLINE' => 'deletar Linha de tendência',
    'LBL_TRENDLINE_MIN' => 'Mínimo',
    'LBL_TRENDLINE_MAX' => 'Máximo',
    'LBL_TRENDLINE_AVG' => 'Média',
    'LBL_TRENDLINE_AMM' => 'Área Min/Max',
    'LBL_TRENDLINE_LRG' => 'Regressão linear',
    'LBL_TRENDLINE_CST' => 'Customizado',
    'LBL_STANDARDTYPE' => 'Tipo',
    'LBL_TRENDLINE_STYLE' => 'Estilo',
    'LBL_TRENDLINE_VAL' => 'Valor',
    'LBL_TRENDLINE_TXT' => 'Nome',
    'LBL_TRENDLINE_NOT' => '-',
    'LBL_TRENDLINE_DISPLAY' => 'Informação',
    // for report publishing
    'LBL_PUBLISH_OPTION' => 'publicar Relatório',
    'LBL_PUBLISHPOPUP_TITLE' => 'Publicar opções de Relatório',
    'LBL_PUBLISHPOPUP_SUBPANEL' => 'Subpainel',
    'LBL_PUBLISHPOPUP_DASHLET' => 'Dashlet',
    'LBL_PUBLISHPOPUP_GRID' => 'publicar Grid',
    'LBL_PUBLISHPOPUP_CHART' => 'publicar Gráfico',
    'LBL_PUBLISHPOPUP_SUBPANELORDER' => 'Ordem do subpainel',
    'LBL_PUBLISHPOPUP_CLOSE' => 'Fechar',
    'LBL_PUBLISHPOPUP_MENU' => 'publicar como item de menu',
    // for Export to Planning
    'LBL_EXPORTTOPLANINGPOPUP_TITLE' => 'Exportar para config. de Nó de Planejamento',
    // for the pdf
    'LBL_PDF_DATE_LEADIN' => ' criado em ',
    'LBL_PDF_DATE_LEADOUT' => '',
    'LBL_PDF_PAGE_LEADIN' => 'Página ',
    'LBL_PDF_PAGE_SEPARATOR' => ' de ',
    // for the targetlist Export
    'LBL_TARGETLISTEXPORTPOPUP_TITLE' => 'Exportar para Lista de alvos',
    'LBL_TARGETLISTPOUPFIELDSET_LABEL' => 'Exportar Opções',
    'LBL_TGLLISTPOPUP_CLOSE' => 'Fechar',
    'LBL_TGLLISTPOPUP_EXEC' => 'Rodar',
    'LBL_TARGETLISTPOUP_OPTIONS' => 'Ação',
    'LBL_TGLEXP_NEW' => 'criar novo',
    'LBL_TGLEXP_UPD' => 'atualizar existente',
    'LBL_TARGETLISTPOUPNEWFIELDSET_LABEL' => 'Nova Lista de Alvos',
    'LBL_TARGETLISTPERFSETTINGS_LABEL' => 'Configurações de desempenho',
    'LBL_TARGETLISTPERFCHECKBOX_LABEL' => 'criar direta',
    'LBL_TARGETLISTPOUP_NEWNAME' => 'Nome da Lista de Alvos',
    'LBL_TARGETLISTPOUPCHANGEFIELDSET_LABEL' => 'Atualizar Lista de alvos',
    'LBL_TARGETLISTPOUP_LISTS' => 'Listas de Alvos',
    'LBL_TARGETLISTPOUP_ACTIONS' => 'Ação',
    'LBL_TGLACT_REP' => 'atualizar',
    'LBL_TGLACT_ADD' => 'adicionar',
    'LBL_TGLACT_SUB' => 'subtrair',
    'LBL_TARGETLISTPOUP_CAMPAIGNS' => 'adicionar para campanha',
    'LBL_LAST_DAY_OF_MONTH' => 'último dia do mês',
    'LBL_EXPORT_TO_PLANNER_BUTTON_LABEL' => 'Exportar para KPlanner',
    'LBL_PLANNEREXPORTPOPUP_TITLE' => 'Exportar para KPlanner',
    'LBL_EXPORTPOPUP_CLOSE' => 'Cancelar',
    'LBL_EXPORTPOPUP_EXEC' => 'Exportar para KPlanner',
    'LBL_PLANNEREXPORTPOPUP_SCOPESETS' => 'Conjunto escopo',
    'LBL_PLANNINCHARACTERISTICSGRID_TITLE' => 'Características de planejamento',
    'LBL_CHARFIELDVALUE' => 'Valor característico',
    'LBL_CHARFIELDNAME' => 'Nome característico',
    'LBL_CHARFIXEDVALUE' => 'Valor fixo',
    'LBL_PLANNEREXPORTPOPUP_NODENAME' => 'Nome do nó',
    
    // for the Viualization
    'LBL_VISUALIZATION' => 'visualizar',
    'LBL_VISUALIZATIONPLUGIN' => 'tipo',
    'LBL_VISUALIZATIONTOOLBAR_LAYOUT' => 'Layout',
    'LBL_VISUALIZATION_HEIGHT' => 'altura (px)',
    'LBL_GOOGLECHARTS' => 'Google Charts', 
    'LBL_CHARTFS_DATA' => 'Dado de gráfico',
    'LBL_CHARTFS_SERIES' => 'Série de dados', 
    'LBL_CHARTFS_VALUES' => 'Valores', 
    'LBL_DIMENSIONS' => 'Dimensões',
    'LBL_DIMENSION_111' => 'unidimensional (série)',
    'LBL_DIMENSION_10N' => 'bidimensional (valores)',
    'LBL_DIMENSION_220' => 'bidimensional (sem valores)',
    'LBL_DIMENSION_221' => 'bidimensional (série)',
    'LBL_DIMENSION_21N' => 'bidimensional (valores)',
    'LBL_DIMENSION_331' => 'tridimensional (série)',
    'LBL_DIMENSION_32N' => 'tridimensional (valores)',
    'LBL_CHARTTYPE_DIMENSION1' => 'Dimensão 1',
    'LBL_CHARTTYPE_DIMENSION2' => 'Dimensão 2',
    'LBL_CHARTTYPE_DIMENSION3' => 'Dimensão 3',
    'LBL_CHARTTYPE_MULTIPLIER' => 'Multiplicador',
    'LBL_CHARTTYPE_COLORS' => 'Cores',
    'LBL_CHARTTYPE_DATASERIES' => 'Séries de dados',
    'LBL_CHARTTYPES' => 'Tipo',
    'LBL_CHARTTYPE_AREA' => 'Gráfico de área', 
    'LBL_CHARTTYPE_STEPPEDAREA' => 'Gráfico de área pisoteada', 
    'LBL_CHARTTYPE_BAR' => 'Gráfico de barras',
    'LBL_CHARTTYPE_BUBBLE' => 'Gráfico de bolha',
    'LBL_CHARTTYPE_COLUMN' => 'Gráfico de coluna',
    'LBL_CHARTTYPE_GAUGE' => 'Medidores',
    'LBL_CHARTTYPE_PIE' => 'Gráfico de pizza', 
    'LBL_CHARTTYPE_LINE' => 'Gráfico de linha', 
    'LBL_CHARTTYPE_SCATTER' => 'Gráfico de dispersão', 
    'LBL_CHARTTYPE_COMBO' => 'Gráfico de Combinação',
    'LBL_CHARTTYPE_CANDLESTICK' => 'Castiçal', 
    'LBL_CHARTFUNCTION' => 'Função', 
    'LBL_MEANING' => 'Significado', 
    'LBL_COLOR' => 'Cor',
    'LBL_AXIS' => 'Eixo',
    'LBL_CHARTAXIS_P' => 'Primário',
    'LBL_CHARTAXIS_S' => 'Secundário',
    'LBL_RENDERER' => 'renderizar como', 
    'LBL_CHARTRENDER_DEFAULT' => 'padrão',
    'LBL_CHARTRENDER_BARS' => 'Barras',
    'LBL_CHARTRENDER_COLUMN' => 'Coluna',
    'LBL_CHARTRENDER_LINE' => 'Linha',
    'LBL_CHARTRENDER_AREA' => 'Área',
    'LBL_CHARTRENDER_STEPPEDAREA' => 'Áre pisoteada',
    'LBL_CHARTOPTIONS_FS' => 'Opções de gráfico',
    'LBL_CHARTOPTIONS_TITLE' => 'Título',
    'LBL_CHARTOPTIONS_CONTEXT' => 'Contexto',
    'LBL_CHARTOPTIONS_VMINMAX' => 'Eixo Vertical Min/Max', 
    'LBL_CHARTOPTIONS_HMINMAX' => 'Eixo Horizontal Min/Max', 
    'LBL_CHARTOPTIONS_GREEN' => 'Verde de/para',
    'LBL_CHARTOPTIONS_YELLOW' => 'Amarelo de/para',
    'LBL_CHARTOPTIONS_RED' => 'Vermelho de/para',
    'LBL_CHARTOPTIONS_LEGEND' => 'mostrar Legenda', 
    'LBL_CHARTOPTIONS_EMTPY' => 'valores vazios',
    'LBL_CHARTOPTIONS_NOVLABLES' => 'esconder rótulos de eixo vertical',
    'LBL_CHARTOPTIONS_NOHLABLES' => 'esconder rótulos de eixo horizontal',
    'LBL_CHARTOPTIONS_LOGV' => 'escala vertical logarítmica',
    'LBL_CHARTOPTIONS_LOGH' => 'escala horizontal logarítmica',
    'LBL_CHARTOPTIONS_3D' => 'tridimensional', 
    'LBL_CHARTOPTIONS_STACKED' => 'Séries empilhadas', 
    'LBL_CHARTOPTIONS_REVERSED' => 'Séries reversas', 
    'LBL_CHARTOPTIONS_CTFUNCTION' => 'Linha suavizada', 
    'LBL_CHARTOPTIONS_POINTS' => 'mostrar Pontos',
    
    // for Fusion Charts ... needs to be moved
    'LBL_CHARTTYPE_COLUMN2D' => 'Coluna 2D',
    'LBL_CHARTTYPE_COLUMN3D' => 'Coluna 3D',
    'LBL_CHARTTYPE_PIE2D' => 'Pizza 2D',
    'LBL_CHARTTYPE_PIE3D' => 'Pizza 3D',
    'LBL_CHARTTYPE_DOUGNUT2D' => 'Rosquinha 2D',
    'LBL_CHARTTYPE_DOUGNUT3D' => 'Rosquinha 3D',
    'LBL_CHARTTYPE_BAR2D' => 'Barra 2D',
    'LBL_CHARTTYPE_AREA2D' => 'Área 2D', 
    'LBL_CHARTTYPE_STACKEDAREA2D' => 'Área empilhada 2D',
    'LBL_CHARTTYPE_PARETO2D' => 'Pareto 2D', 
    'LBL_CHARTTYPE_PARETO3D' => 'Pareto 3D', 
    'LBL_CHARTTYPE_STACKEDCOLUMN2D' => 'Coluna empilhada 2D',
    'LBL_CHARTTYPE_STACKEDCOLUMN3D' => 'Coluna empilhada 3D',
    'LBL_CHARTTYPE_MSCOLUMN2D' => 'Coluna multi-série 2D',
    'LBL_CHARTTYPE_MSCOLUMN3D' => 'Coluna multi-série 3D',
    'LBL_CHARTTYPE_MSBAR2D' => 'Barra Multi-série 2D',
    'LBL_CHARTTYPE_MSBAR3D' => 'Barra Multi-série 3D',
    'LBL_CHARTTYPE_STACKEDBAR2D' => 'Barra empilhada 2D',
    'LBL_CHARTTYPE_STACKEDBAR3D' => 'Barra emplihada 3D',
    'LBL_CHARTTYPE_MARIMEKKO' => 'Gráfico de Marimekko',
    'LBL_CHARTTYPE_MSLINE' => 'Linha multi-série',
    'LBL_CHARTTYPE_MSAREA' => 'Área multi-série',
    'LBL_CHARTTYPE_MSCOMBIDY2D' => 'Combinação de multi-séries duplas',
    'LBL_CHARTOPTIONS_ROUNDEDGES' => 'Cantos arredondados', 
    'LBL_CHARTOPTIONS_HIDELABELS' => 'esconder rótulos', 
    'LBL_CHARTOPTIONS_HIDEVALUES' => 'esconder valores', 
    'LBL_CHARTOPTIONS_FORMATNUMBERSCALE' => 'escalar números',
    'LBL_CHARTOPTIONS_ROTATEVALUES' => 'rotacionar valor', 
    'LBL_CHARTOPTIONS_PLACEVALUESINSIDE' => 'colocar valores dentro',
    'LBL_CHARTOPTIONS_SHOWSHADOE' => 'mostrar sombra',
    'LBL_CHARTOPTIONS_LPOS' => 'Legenda',
    'LBL_LPOS_NONE' => 'nenhum', 
    'LBL_LPOS_RIGHT' => 'direita', 
    'LBL_LPOS_LEFT' => 'esquerda', 
    'LBL_LPOS_BOTTOM' => 'inferior',
    'LBL_LPOS_TOP' => 'superior',
    
    
    'LBL_STANDARDPLUGIN' => 'Visão padrão',
    
    
    // for the Google Maps
    'LBL_GOOGLEMAPSFS_GEOCODEBY' => 'Geo por',
    'LBL_GOOGLEMAPSFS_GEOCODELATLONG' => 'Latitude/Longitude',
    'LBL_GOOGLEMAPSFS_GEOCODEADDRESS' => 'Endereço',
    'LBL_GOOGLEMAPS_LONGITUDE' => 'Longitude', 
    'LBL_GOOGLEMAPS_LATITUDE' => 'Latitude', 
    'LBL_GOOGLEMAPSFS_LATLONG' => 'Geocoordenadas', 
    'LBL_GOOGLEMAPS_STREET' => 'Rua',
    'LBL_GOOGLEMAPS_CITY' => 'Cidade',
    'LBL_GOOGLEMAPS_PC' => 'Código postal',
    'LBL_GOOGLEMAPS_COUNTRY' => 'País',
    'LBL_GOOGLEMAPS_ADDRESS' => 'Endereço', 
    'LBL_GOOGLEMAPSFS_TITLE' => 'Fixar informação', 
    'LBL_GOOGLEMAPS_TITLE' => 'Título',
    'LBL_GOOGLEMAPS_CLUSTER' => 'Fragmentos fixos',
    
    // for the Plugins
    'LBL_PRESENTATION_PLUGIN' => 'Plugin',
    'LBL_PRESENTATION_PARAMS' => 'Parâmetros de apresentação',
    'LBL_DEFAULT_GROUPBY' => 'Agrupar por padrão',
    'LBL_INTEGRATION' => 'integrar',
    'LBL_INTEGRATION_PLUGINNAME' => 'Plugin',
    'LBL_CSV_EXPORT' => 'Exportar para CSV', 
    'LBL_EXCEL_EXPORT' => 'Exportar para Excel',
    'LBL_TARGETLIST_EXPORT' => 'Exportar para Lista de alvos', 
    'LBL_SNAPSHOT_EXPORT' => 'tirar instantâneo',
    'LBL_QUERY_ANALIZER' => 'Analisador de consulta',
    'LBL_SCHEDULE_REPORT' => 'agendar relatório', 
    'LBL_PUBLISH_REPORT' => 'publicar relatório', 
    'LBL_PUBLISH_DASHLET' => 'Publicar como dashlet',
    'LBL_PUBLISH_DASHLETREPORT' => 'Selecionar relatório',
    'LBL_PUBLISH_DASHLETTITLE' => 'Título de dashlet',
    'LBL_PUBLISH_DASHLET_PRESENTATION' => 'Apresentação',
    'LBL_PUBLISH_DASHLET_PRESENTATION_VISUALIZATION' => 'Visualização', 
    'LBL_PUBLISH_SUBPANEL_SEQUENCE' => 'Sequência',
    'LBL_PUBLISH_SUBPANEL_MODULE' => 'Módulo',
    'LBL_PUBLISH_SUBPANEL_TAB' => 'Aba',
    
    // PDF Export Option
    'LBL_PDF_EXPORT' => 'Exportar PDF', 
    'LBL_PDF_EXPORTOPTIONS_GENERAL' => 'Geral', 
    'LBL_PDF_LAYOUT' => 'Layout PDF',
    'LBL_PDF_FORMAT' => 'Formato',
    'LBL_PDFFORMAT_LTR' => 'Carta',
    'LBL_PDFFORMAT_LGL' => 'Legal',
    'LBL_PDFFORMAT_A4' => 'A4',
    'LBL_PDFFORMAT_A5' => 'A5', 
    'LBL_PDF_ORIENTATION' => 'Orientação',
    'LBL_PDF_MULTILINE' => 'multi-linha',
    'LBL_PDFORIENT_P' => 'Retrato',
    'LBL_PDFORIENT_L' => 'Paisagem', 
    'LBL_PDF_PALIGNMENT' => 'Alinhamento de dados', 
    'LBL_PDFPALIGNMENT_L' => 'Esquerda',
    'LBL_PDFPALIGNMENT_R' => 'Direita',
    'LBL_PDFPALIGNMENT_C' => 'Centro',
    'LBL_PDFPALIGNMENT_S' => 'Alongar', 
    'LBL_PDF_NEWPAGEPERGROUP' => 'nova página por grupo',
    'LBL_PDF_HEADERPERPAGE' => 'cabaçalho em cada página',
    
    // Pivot Plugin ... to be moved later
    'LBL_PIVOT_SETTINGS' => 'Ajustes da tabela pivô', 
    'LBL_PIVOT_ADVANCED' => 'Configurações avançadas',
    'LBL_PIVOT_REPOSITORY' => 'campos disponíveis', 
    'LBL_PIVOT_COLUMNS' => 'Colunas', 
    'LBL_PIVOT_ROWS' => 'Linhas',
    'LBL_PIVOT_ADDROWINFO' => 'informação adicional de coluna',
    'LBL_PIVOT_VALUES' => 'Valores', 
    'LBL_PIVOT_FUNCTiON' => 'Função', 
    'LBL_PIVOT_TOTALS' => 'mostrar torais', 
    'LBL_PIVOT_SUMS' => 'mostrar soma',
    'LBL_PIVOT_ROTATEHEADERS' => 'rotacionar Cabeçalhos',
    'LBL_PIVOT_EMPTYCOLUMNS' => 'mostrar colunas vazias', 
    'LBL_PIVOT_ADJUSTCOLUMNS' => 'ajustar largura de coluna',
    'LBL_PIVOT_SORTCOLUMNS' => 'classificar colunas',
    'LBL_PIVOT_LBLPIVOTDATA' => 'Dados pivô',
    'LBL_PIVOT_NAMECOLUMNWIDTH' => 'Largura de item de coluna', 
    'LBL_PIVOT_MINCOLUMNWIDTH' => 'Largura mínima de item de coluna',
    
    // the field renderer
    'LBL_RENDERER_CURRENCY' => 'Moeda', 
    'LBL_RENDERER_PERCENTAGE' => 'Porcentagem', 
    'LBL_RENDERER_NUMBER' => 'Número', 
    'LBL_RENDERER_INT' => 'Inteiro', 
    'LBL_RENDERER_DATE' => 'Data', 
    'LBL_RENDERER_DATETIME' => 'Date/hora',
    'LBL_RENDERER_DATETUTC' => 'Data/hora (UTC)',
    'LBL_RENDERER_FLOAT' => 'Flutuante',
    'LBL_RENDERER_BOOL' => 'Booleano',
    'LBL_RENDERER_TEXT' => 'Texto',
    'LBL_RENDERER_NONE' => 'não formatar', 
    
    // override Alignment
    'LBL_OVERRIDEALIGNMENT' => 'sobrescrever Alinhamento',
    'LBL_ALIGNMENT_LEFT' => 'esquerda',
    'LBL_ALIGNMENT_RIGHT' => 'direita',
    'LBL_ALIGNMENT_CENTER' => 'centro', 
    
    'LBL_REPORTTIMEOUT' => 'Tempo esgotado',
    'LBL_RT30' => '30 segundos',
    'LBL_RT60' => '1 minuto',
    'LBL_RT120' => '2 minutos',
    'LBL_RT240' => '3 minutos',
    'LBL_RT300' => '4 minutos',
    
    'LBL_KSNAPSHOTS' => 'Instantâneo',
    'LBL_KSNAPSHOT' => 'Instantâneo', 
    'LBL_TAKING_SNAPSHOT' => 'tirando instantâneo ... '
    
);