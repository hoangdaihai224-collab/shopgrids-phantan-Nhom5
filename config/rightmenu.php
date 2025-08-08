<?php
    return[
        [
            'label'=>'Danh Mục',
            'route'=>'admin.list.category',
            'item'=> [
                [
                   'lable'=>'Thêm Mới  Danh Mục',
                   'route'=>'admin.add.category' 
                ],
                [
                    'lable'=>'Danh sách Danh Mục',
                    'route'=>'admin.list.category' 
                ],
            ]
        ],
        [
            'label'=>'Sản Phẩm',
            'route'=>'admin.list.product',
            'item'=> [
                [
                   'lable'=>'Danh Sách Sản Phẩm',
                   'route'=>'admin.list.product' 
                ],
                [
                    'lable'=>'Thêm Mới Sản Phẩm',
                    'route'=>'admin.add.product' 
                ],
            ]
        ],
        [
            'label'=>'Tài Khoản Quản trị',
            'route'=>'admin.list.user',
            'item'=> [
                [
                   'lable'=>'Danh sách nhóm quyèn',
                   'route'=>'admin.list.roles' 
                ],
                [
                    'lable'=>'thêm nhóm quyèn',
                    'route'=>'admin.add.roles' 
                ],
                [
                    'lable'=>'Danh sách quản trị viên',
                    'route'=>'admin.list.user' 
                ],
                
            ]
        ],
        [
            'label'=>'Thư viện',
            'route'=>'admin.list.user',
            'item'=> [
                [
                   'lable'=>'Thêm Mới Brand',
                   'route'=>'admin.add.Brand' 
                ],
                [
                    'lable'=>'Thêm Mới Color',
                    'route'=>'admin.add.color' 
                ],
        
                
            ]
        ],
    ]
?>