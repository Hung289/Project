<?php 
    return [
       
        [
            'label'=>'Người dùng',
            'route'=>'admin.user.index',
            'items' => [
                [
                    'label'=>'Danh sách người dùng',
                    'route'=>'admin.user.index'
                ],
                [
                    'label'=>'Thêm mới người dùng',
                    'route'=>'admin.user.create'
                ]
                
            ]
        ],
        [
            'label'=>'Danh Mục phòng',
            'route'=>'admin.categoryRoom.index',
            'items' => [
                [
                    'label'=>'Danh Sách danh mục phòng',
                    'route'=>'admin.categoryRoom.index'
                ],
                [
                    'label'=>'Thêm mới danh mục phòng',
                    'route'=>'admin.categoryRoom.create'
                ]       
            ]
        ],
        [
            'label'=>'Danh Mục dịch vụ',
            'route'=>'admin.categoryService.index',
            'items' => [
                [
                    'label'=>'Danh Sách danh dịch vụ',
                    'route'=>'admin.categoryService.index'
                ],
                [
                    'label'=>'Thêm mới danh dịch vụ',
                    'route'=>'admin.categoryService.create'
                ] 
            ]   
        ],[
            'label'=>'Danh Mục Blog',
            'route'=>'admin.categoryBlog.index',
            'items' => [
                [
                    'label'=>'Danh Sách danh Blog',
                    'route'=>'admin.categoryBlog.index'
                ],
                [
                    'label'=>'Thêm mới danh Blog',
                    'route'=>'admin.categoryBlog.create'
                ] 
            ]   
        ],[
            'label'=>'Phòng',
            'route'=>'admin.room.index',
            'items' => [
                [
                    'label'=>'Danh sách phòng Admin khách',
                    'route'=>'admin.room.indexAdmin'
                ],
                [
                    'label'=>'Danh sách phòng',
                    'route'=>'admin.room.index'
                ],
                [
                    'label'=>'Thêm mới phòng',
                    'route'=>'admin.room.create'
                ]
            ]   
        ],[
            'label'=>'Dịch vụ',
            'route'=>'admin.service.index',
            'items' => [
                [
                    'label'=>'Danh sách dịch vụ',
                    'route'=>'admin.service.index'
                ],
                [
                    'label'=>'Thêm mới dịch vụ',
                    'route'=>'admin.service.create'
                ]
            ]   
        ],[
            'label'=>'Blogs',
            'route'=>'admin.blog.index',
            'items' => [
                [
                    'label'=>'Danh sách Blogs',
                    'route'=>'admin.blog.index'
                ],
                [
                    'label'=>'Thêm mới Blogs',
                    'route'=>'admin.blog.create'
                ]
            ]   
        ],[
            'label'=>'Brands',
            'route'=>'admin.brand.index',
            'items' => [
                [
                    'label'=>'Danh sách Brands',
                    'route'=>'admin.brand.index'
                ],
                [
                    'label'=>'Thêm mới Brands',
                    'route'=>'admin.brand.create'
                ]
            ]   
        ],[
            'label'=>'Banner',
            'route'=>'admin.banner.index',
            'items' => [
                [
                    'label'=>'Danh sách Banner',
                    'route'=>'admin.banner.index'
                ],
                [
                    'label'=>'Thêm mới Banner',
                    'route'=>'admin.banner.create'
                ]
            ]   
        ],[
            'label'=>'Role',
            'route'=>'admin.role.index',
            'items' => [
                [
                    'label'=>'Danh sách Role',
                    'route'=>'admin.role.index'
                ],
                [
                    'label'=>'Thêm mới Role',
                    'route'=>'admin.role.create'
                ]
            ]   
        ],
    ]
?>