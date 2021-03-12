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
    'import_item'=>[
        ['field' => 'file', 'label' => 'File', 'rules' => 'required'],
    ],
    'add_paymentmode'=>[
        ['field' => 'name', 'label' => 'Paymentmode Name', 'rules' => 'trim|required'],
    ],
    'edit_paymentmode'=>[
        ['field' => 'name', 'label' => 'Paymentmode Name', 'rules' => 'trim|required'],
    ],
      'add_c_type'=>[
        ['field' => 'name', 'label' => 'Contract Type Name', 'rules' => 'trim|required'],
    ],
    'add_contract'=>[
        ['field' => 'subject', 'label' => 'Subject', 'rules' => 'trim|required'],
        ['field' => 'client', 'label' => 'Customer', 'rules' => 'required'],
    ],
     'edit_contract'=>[
        ['field' => 'subject', 'label' => 'Subject', 'rules' => 'trim|required'],
        ['field' => 'client', 'label' => 'Customer', 'rules' => 'required'],
    ],
    'add_proposal'=>[
        ['field' => 'subject', 'label' => 'Subject', 'rules' => 'trim|required'],
        ['field' => 'rel_type', 'label' => 'Related To', 'rules' => 'required'],
        ['field' => 'proposal_to', 'label' => 'To', 'rules' => 'required'],
        ['field' => 'email', 'label' => 'Email Address', 'rules' => 'trim|required|valid_email'],
    ],
    'add_project'=>[
        ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required'],
        ['field' => 'customer', 'label' => 'Customer', 'rules' => 'required']
       
    ],
    'edit_project'=>[
        ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required'],
        ['field' => 'customer', 'label' => 'Customer', 'rules' => 'required']
       
    ],
    'login'=>[
        ['field' => 'email', 'label' => 'Email Address', 'rules' => 'trim|required|valid_email'],
        ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required'],
    ]


];

