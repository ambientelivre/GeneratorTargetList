<?php
require_once('include/MVC/View/views/view.list.php');

class ContactsViewList extends ViewList {

    function listViewProcess() {
        //echo $_SESSION['Contacts2_QUERY'];
        
        $this->processSearchForm();
        
        // Condição padrão de pesquisa,
        $test = false;
        foreach ($this->searchForm->searchFields as $field) {  
            if (!empty($field['value'])) {
                $test = true;
            }
        }
        if (!$test) {
            $this->params['custom_where'] = " limit 0";
        }
               
        if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
            $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
            //$savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);              // save the last search 
            echo $this->lv->display();
        }
    }
}
