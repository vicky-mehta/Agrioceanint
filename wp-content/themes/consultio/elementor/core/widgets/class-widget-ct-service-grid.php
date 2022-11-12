<?php

class CT_CtServiceGrid_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_service_grid';
    protected $title = 'Case Service Grid';
    protected $icon = 'eicon-posts-justified';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout2.jpg"},"3":{"label":"Layout 3","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout3.jpg"},"4":{"label":"Layout 4","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout4.jpg"},"5":{"label":"Layout 5","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout5.jpg"},"6":{"label":"Layout 6","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout6.jpg"},"7":{"label":"Layout 7","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout7.jpg"},"8":{"label":"Layout 8","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout8.jpg"},"9":{"label":"Layout 9","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout9.jpg"},"10":{"label":"Layout 10","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout10.jpg"},"11":{"label":"Layout 11","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout11.jpg"},"12":{"label":"Layout 12","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout12.jpg"},"13":{"label":"Layout 13","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout13.jpg"},"14":{"label":"Layout 14","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout14.jpg"},"15":{"label":"Layout 15","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout14.jpg"}}},{"name":"style","label":"Style","type":"select","options":{"style1":"Style 1","style2":"Style 2"},"default":"style1","condition":{"layout":"3"}},{"name":"el_title","label":"Title","type":"text","condition":{"layout":"2"}},{"name":"wg_title_color","label":"Title Color","type":"color","selectors":{"{{WRAPPER}} .item--body h3":"color: {{VALUE}};"},"condition":{"layout":"2"}},{"name":"el_link","label":"Link","type":"url","default":{"url":"#"},"condition":{"layout":"2"}},{"name":"el_color1","label":"Color Gradient From","type":"color","condition":{"layout":"4"}},{"name":"el_color2","label":"Color Gradient To","type":"color","condition":{"layout":"4"}}]},{"name":"source_section","label":"Source","tab":"content","controls":[{"name":"source","label":"Select Categories","type":"select2","multiple":true,"options":[]},{"name":"orderby","label":"Order By","type":"select","default":"date","options":{"date":"Date","ID":"ID","author":"Author","title":"Case Title","rand":"Random"}},{"name":"order","label":"Sort Order","type":"select","default":"desc","options":{"desc":"Descending","asc":"Ascending"}},{"name":"limit","label":"Total items","type":"number","default":"8"},{"name":"style_l10","label":"Style","type":"select","options":{"style1":"Style 1","style2":"Style 2"},"default":"style1","condition":{"layout":"10"}},{"name":"item_image","label":"Item Image First - Last","type":"media","description":"Select image.","condition":{"layout":"11"}}]},{"name":"grid_section","label":"Grid","tab":"content","controls":[{"name":"thumbnail","type":"image-size","control_type":"group","default":"custom","condition":{"layout":["1","2","6"]}},{"name":"filter","label":"Filter on Masonry","type":"select","default":"false","options":{"true":"Enable","false":"Disable"}},{"name":"filter_default_title","label":"Filter Default Title","type":"text","default":"All","condition":{"filter":"true"}},{"name":"filter_alignment","label":"Filter Alignment","type":"select","default":"center","options":{"center":"Center","left":"Left","right":"Right"},"condition":{"filter":"true"}},{"name":"pagination_type","label":"Pagination Type","type":"select","default":"false","options":{"pagination":"Pagination","loadmore":"Loadmore","false":"Disable"}},{"name":"loadmore_style","label":"Loadmore Style","type":"select","options":{"btn-default":"Style 1","btn-gray":"Style 2"},"default":"btn-default","condition":{"layout":"2","pagination_type":"loadmore"}},{"name":"col_xs","label":"Columns XS Devices","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_sm","label":"Columns SM Devices","type":"select","default":"2","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_md","label":"Columns MD Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_lg","label":"Columns LG Devices","type":"select","default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_xl","label":"Columns XL Devices","type":"select","default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""}]},{"name":"display_section","label":"Display Options","tab":"content","controls":[{"name":"show_title","label":"Show Title","type":"switcher","default":"true"},{"name":"show_excerpt","label":"Show Excerpt","type":"switcher","default":"true","condition":{"layout":["1","2","3","4","5","7","8","9","10","11","12","13","14","15"]}},{"name":"num_words","label":"Number of Words","type":"number","default":25,"condition":{"show_excerpt":"true","layout":["1","2","3","4","5","7","8","9","10","11","12","13","14","15"]},"separator":"after"},{"name":"show_button","label":"Show Read More","type":"switcher","default":"true","condition":{"layout":["1","2","6","7","9","10","12","13","15"]}},{"name":"button_text","label":"Read More Text","type":"text","condition":{"show_button":"true","layout":["1","2","6","7","9","10","12","13","15"]}},{"name":"item_color","label":"Item Colors","type":"repeater","condition":{"layout":["12"]},"controls":[{"name":"icon_color","label":"Icon Color","type":"color"},{"name":"icon_bg_color","label":"Icon Background Color","type":"color"},{"name":"btn_color","label":"Button Color","type":"color"},{"name":"btn_bg_color","label":"Button Background Color","type":"color"},{"name":"btn_color_hover","label":"Button Color Hover","type":"color"},{"name":"btn_bg_color_hover","label":"Button Background Color Hover","type":"color"}]}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'imagesloaded','isotope','ct-post-masonry-widget-js','ct-post-grid-widget-js' );
}