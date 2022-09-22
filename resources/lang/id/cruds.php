<?php

return [
    'dashboard' =>[
        'title'          => 'Dashboard',
        'title_singular' => 'Dashboard',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',   
    ],  
    'userManagement' => [
        'title'          => 'Manajemen Pengguna',
        'title_singular' => 'Manajemen Pengguna',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',
    ],
    'permission' => [
        'title'          => 'Akses',
        'title_singular' => 'Akses',
        'is_parent'      => '0',
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1', 
        'can_create'     => '1',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'perm_type'         => 'Type',
            'perm_type_helper'  => ' ',
            'grp_title'         => 'Group Title',
            'grp_title_helper'  => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Hak Pengguna',
        'title_singular' => 'Hak Pengguna',
        'is_parent'      => '0',
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1',
        'can_create'     => '1', 
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Pengguna',
        'title_singular' => 'Pengguna',
        'is_parent'      => '0',
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1', 
        'can_create'     => '1',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'username'                 => 'Username',
            'username_helper'          => 'Username',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'is_parent'      => '0',
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'masterData' => [
        'title'          => 'Master Data',
        'title_singular' => 'Master Data',
        'is_parent'      => '1',
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',
    ],
    'partner' => [
        'title'          => 'Partner',
        'title_singular' => 'Partner',
        'is_parent'      => '0', 
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1',  
        'can_create'     => '1', 
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'partner_type'           => 'Partner Type',
            'partner_type_helper'    => 'vendor, donatur, badan',
            'partner_code'           => 'Partner Code',
            'partner_code_helper'    => 'Partner Code',
            'partner_name'           => 'Partner Name',
            'partner_name_helper'    => ' ',
            'partner_address'        => 'Partner Address',
            'partner_address_helper' => 'Address',
            'partner_email'          => 'Partner Email',
            'partner_email_helper'   => ' ',
            'partner_phone'          => 'Partner Phone',
            'partner_phone_helper'   => ' ',
            'partner_pic'            => 'Partner PIC',
            'partner_pic_helper'     => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'created_by'             => 'Created By',
            'created_by_helper'      => ' ',
        ],
    ],
    'coa' => [
        'title'          => 'COA',
        'title_singular' => 'COA',
        'is_parent'      => '0', 
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1',  
        'can_create'     => '1', 
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'coa_code'          => 'Coa Code',
            'coa_code_helper'   => ' ',
            'coa_name'          => 'Coa Name',
            'coa_name_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'coa_parent'        => 'Coa Parent',
            'coa_parent_helper' => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1',  
        'can_create'     => '1', 
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'nm_org'            => 'Nama Organisasi',
            'nm_org_helper'     => ' ',
            'alamat'            => 'Alamat',
            'alamat_helper'     => ' ',
            'telepon'           => 'Telepon',
            'telepon_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'profile' =>[
        'title'          => 'Profile',
        'title_singular' => 'Profile',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '1', 
        'can_delete'     => '0',  
        'can_access'     => '0',  
        'can_create'     => '0', 
    ],
];
