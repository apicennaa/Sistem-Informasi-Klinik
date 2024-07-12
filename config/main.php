return array(
    // ...
    'modules'=>array(
        // other modules configuration
        'srbac'=>array(
            'userclass'=>'User', // class name of your User model
            'userid'=>'id', // the attribute of the User model that is the primary key
            'username'=>'username', // the attribute of the User model that represents the username
            'debug'=>true, // enable debug mode for SRBAC
            'pageSize'=>10, // number of items per page in SRBAC views
            'superUser' =>'Authority', // name of the super user role (change as necessary)
            'css'=>'srbac.css', // CSS file for SRBAC
            'layout'=>'application.views.layouts.main', // layout file for SRBAC views
            'notAuthorizedView'=> 'srbac.views.authitem.unauthorized', // view file for unauthorized access
            'alwaysAllowed'=>array('SiteLogin','SiteLogout','SiteIndex','SiteError','SiteContact'), // actions that are always allowed
            'userActions'=>array('Show','View','List'), // actions related to user management
            'listBoxNumberOfLines' => 15, // number of lines displayed in list boxes
            'imagesPath' => 'srbac.images', // path to SRBAC images directory
            'imagesPack'=>'noia', // image pack for SRBAC
            'iconText'=>true, // display icons with text in SRBAC
            'header'=>'srbac.views.authitem.header', // header view file for SRBAC
            'footer'=>'srbac.views.authitem.footer', // footer view file for SRBAC
            'showHeader'=>true, // display header in SRBAC views
            'showFooter'=>true, // display footer in SRBAC views
            'alwaysAllowedPath'=>'srbac.components', // path to SRBAC components directory
        ),
    ),
    // ...
);
