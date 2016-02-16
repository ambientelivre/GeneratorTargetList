# GeneratorTargetList
GeneratorTargetList  ( SugarCRM and SuiteCRM )
Description:

Features:

Author: Ramon Marcondes

* Criar campo para salvar sql dos relatórios: 'sql_query', na tabela 'prospect_lists' (a lógica para salvar está em modules/KReports/KReport.php)

* Caminhos para customização no Sugar:
- Painel de seleção agrupado: <b>modules/KReports/js/kreportsbase3_custom.js</b>
- Painel de pré-visualização: <b>modules/KReports/js/kreportsbase4_custom.js</b>
- Painéis do layout de consulta com seleção de campos: <b>modules/KReports/js/kreportsbase5_custom.js</b>
- Método para exportar target list: <b>modules/KReports/Plugins/Integration/ktargetlistexport/ktargetlistexport.js</b>

* Traduções :
- Geral: <b>modules/KReports/language/pt_BR.lang.php</b>
- Preview - paginação: <b>custom/k/extjs4/ext-all.js</b>
- Preview - resultados: <b>modules/KReports/Plugins/Presentation/standardview/js/viewstandard.js</b>
- Preview - outros: <b>custom/k/extjs4/ux/SlidingPager.js</b>

* Condição para admin ou usuario regular:
- <b>modules/KReports/tpls/EditViewFooter.tpl</b>
- <b>modules/KReports/tpls/DetailViewFooter.tpl</b>

* Para remover texto de versão e ícones sociais:
- Nos javascripts 'kreportsbase', procure por items que contenham o texto:
K.kreports.decode64(K.kreports.M)
K.kreports.decode64(K.kreports.H)
