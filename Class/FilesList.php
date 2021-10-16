<!-- 
    in this class you must set the pages and alias name to display into the navbar
 -->
<?php
    class FilesList{
        protected static $items_list = [
            ['index.php'        ,   'home'          ],
            ['index_2.php'      ,   'contact'       ],
            ['index_3.php'      ,   'about_me'      ]
        ];
           
        protected static $brand_list = [
            'design\svg\fcb.svg',
            'design\svg\cat.svg'
        ];
    }