<?php

class CT_CtClientGrid_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_client_grid';
    protected $title = 'Case Client Grid';
    protected $icon = 'eicon-person';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"https:\/\/agrioceanint.com\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_client_grid\/layout-image\/layout1.jpg"}}}]},{"name":"section_list","label":"Content","tab":"content","controls":[{"name":"clients","label":"Clients","type":"repeater","controls":[{"name":"client_name","label":"Client Name","type":"text","label_block":true},{"name":"client_link","label":"Client URL","type":"url","label_block":true},{"name":"client_image","label":"Client Logo\/Image","type":"media","label_block":true}],"title_field":"{{{ client_name }}}"},{"name":"item_btn_text","label":"Last Item Button Text","type":"text","label_block":true},{"name":"item_btn_link","label":"Last Item Button Link","type":"url","label_block":true},{"name":"item_desc","label":"Last Item Description","type":"textarea","label_block":true}]},{"name":"grid_section","label":"Grid","tab":"content","controls":[{"name":"col_xs","label":"Columns XS Devices","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_sm","label":"Columns SM Devices","type":"select","default":"2","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_md","label":"Columns MD Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_lg","label":"Columns LG Devices","type":"select","default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_xl","label":"Columns XL Devices","type":"select","default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'imagesloaded','isotope','ct-post-masonry-widget-js','ct-post-grid-widget-js' );
}