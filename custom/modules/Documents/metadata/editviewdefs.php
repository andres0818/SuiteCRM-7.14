<?php
$viewdefs ['Documents'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
          0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
          1 => '<input type="hidden" name="contract_id" value="{$smarty.request.contract_id}">',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
{sugar_getscript file="modules/Documents/documents.js"}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'contract_name',
            'label' => 'LBL_CONTRACT_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'email_c',
            'label' => 'LBL_EMAIL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'campouno_c',
            'label' => 'LBL_CAMPOUNO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'campodos_c',
            'label' => 'LBL_CAMPODOS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cmapotres_c',
            'label' => 'LBL_CMAPOTRES',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'campocuatro_c',
            'label' => 'LBL_CAMPOCUATRO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'camposcinco_c',
            'label' => 'LBL_CAMPOSCINCO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'camposseis_c',
            'label' => 'LBL_CAMPOSSEIS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'campossiete_c',
            'label' => 'LBL_CAMPOSSIETE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'camposocho_c',
            'label' => 'LBL_CAMPOSOCHO',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'camposnueve_c',
            'label' => 'LBL_CAMPOSNUEVE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
