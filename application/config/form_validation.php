<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = [
    	
    //Admin panel Rules
    
    'add_client'=>[
    	['field' => 'company', 'label' => 'Company', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
    ],
     'edit_contact'=>[
        ['field' => 'firstname', 'label' => 'First Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
        ['field' => 'lastname', 'label' => 'Last Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
        ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'],
        
    ],
    'add_contact'=>[
        ['field' => 'firstname', 'label' => 'First Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
        ['field' => 'lastname', 'label' => 'Last Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
        ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'],
        ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required'],
    ],
     'add_source'=>[
        ['field' => 'name', 'label' => 'Source Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
    ],
    
     'edit_source'=>[
        ['field' => 'name', 'label' => 'Source Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
    ],
    
     'add_status'=>[
        ['field' => 'name', 'label' => 'Status Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
    ],
    'edit_status'=>[
        ['field' => 'name', 'label' => 'Status Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
    ],
     'add_lead'=>[
        ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
        ['field' => 'status', 'label' => 'Status ', 'rules' => 'required'],
        ['field' => 'source', 'label' => 'Source ', 'rules' => 'required'],
    ],
    'edit_lead'=>[
        ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
        ['field' => 'status', 'label' => 'Status ', 'rules' => 'required'],
        ['field' => 'source', 'label' => 'Source ', 'rules' => 'required'],
    ],
    'import_lead'=>[
        
        ['field' => 'status', 'label' => 'Status ', 'rules' => 'required'],
        ['field' => 'source', 'label' => 'Source ', 'rules' => 'required'],
    ],
     'add_group'=>[
        ['field' => 'name', 'label' => 'Group Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
    ],

     'edit_group'=>[
        ['field' => 'name', 'label' => 'Group Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
    ],
    'add_item_group'=>[
        ['field' => 'name', 'label' => 'Group Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
    ],
    'add_item'=>[
        ['field' => 'description', 'label' => 'Description', 'rules' => 'trim|required'],
    ],
    'edit_item'=>[
        ['field' => 'description', 'label' => 'Description', 'rules' => 'trim|required'],
    ],
    'add_tax'=>[
        ['field' => 'name', 'label' => 'Tax Name', 'rules' => 'trim|required'],
    ],
    'edit_tax'=>[
        ['field' => 'name', 'label' => 'Tax Name', 'rules' => 'trim|required'],
    ],
    'login'=>[
        ['field' => 'email', 'label' => 'Email Address', 'rules' => 'trim|required|valid_email'],
        ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required'],
    ]


];

