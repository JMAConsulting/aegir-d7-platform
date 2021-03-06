<?php
return [
  [
    'name' => 'SavedSearch_Administer_Custom_Fields',
    'entity' => 'SavedSearch',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Administer_Custom_Fields',
        'label' => 'Administer Custom Fields',
        'form_values' => NULL,
        'search_custom_id' => NULL,
        'api_entity' => 'CustomField',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'label',
            'data_type:label',
            'html_type:label',
            'is_required',
            'is_searchable',
            'is_active',
            'option_group_id:label',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [],
          'join' => [],
          'having' => [],
        ],
        'expires_date' => NULL,
        'description' => NULL,
        'mapping_id' => NULL,
      ],
    ],
  ],
  [
    'name' => 'SavedSearch_Administer_Custom_Fields_SearchDisplay_Table',
    'entity' => 'SearchDisplay',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Table',
        'label' => 'Table',
        'saved_search_id.name' => 'Administer_Custom_Fields',
        'type' => 'table',
        'settings' => [
          'actions' => FALSE,
          'limit' => 50,
          'classes' => [
            'table',
            'table-striped',
          ],
          'pager' => [
            'show_count' => TRUE,
            'expose_limit' => TRUE,
          ],
          'sort' => [],
          'columns' => [
            [
              'type' => 'field',
              'key' => 'id',
              'dataType' => 'String',
              'label' => 'ID',
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'label',
              'dataType' => 'String',
              'label' => 'Field Label',
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'data_type:label',
              'dataType' => 'String',
              'label' => 'Data Type',
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'html_type:label',
              'dataType' => 'String',
              'label' => 'Input Type',
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'is_required',
              'dataType' => 'Boolean',
              'label' => 'Required',
              'sortable' => TRUE,
              'editable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'is_active',
              'dataType' => 'Boolean',
              'label' => 'Enabled',
              'sortable' => TRUE,
              'editable' => TRUE,
            ],
            [
              'size' => 'btn-xs',
              'links' => [
                [
                  'entity' => 'CustomField',
                  'action' => 'update',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-pencil',
                  'text' => 'Edit Field',
                  'style' => 'default',
                  'path' => '',
                  'condition' => [],
                ],
              ],
              'type' => 'buttons',
              'alignment' => 'text-right',
            ],
            [
              'text' => 'Actions',
              'style' => 'default',
              'size' => 'btn-xs',
              'icon' => 'fa-bars',
              'links' => [
                [
                  'entity' => 'CustomField',
                  'action' => 'preview',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-eye',
                  'text' => 'Preview Field',
                  'style' => 'default',
                  'path' => '',
                  'condition' => [],
                ],
                [
                  'entity' => '',
                  'action' => '',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-list-ol',
                  'text' => 'Multiple Choice Options',
                  'style' => 'default',
                  'path' => 'civicrm/admin/custom/group/field/option?reset=1&action=browse&gid=[custom_group_id]&fid=[id]',
                  'condition' => [
                    'option_group_id:label',
                    'IS NOT EMPTY',
                  ],
                ],
                [
                  'entity' => 'CustomField',
                  'action' => 'move',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-random',
                  'text' => 'Move Field',
                  'style' => 'default',
                  'path' => '',
                  'condition' => [],
                ],
                [
                  'entity' => 'CustomField',
                  'action' => 'delete',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-trash',
                  'text' => 'Delete Field',
                  'style' => 'danger',
                  'path' => '',
                  'condition' => [],
                ],
              ],
              'type' => 'menu',
              'alignment' => 'text-right',
            ],
          ],
          'draggable' => 'weight',
          'cssRules' => [
            [
              'disabled',
              'is_active',
              '=',
              FALSE,
            ],
          ],
        ],
        'acl_bypass' => FALSE,
      ],
    ],
  ],
];
