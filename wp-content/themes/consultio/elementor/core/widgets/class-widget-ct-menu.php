<?php

class CT_CtMenu_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_menu';
    protected $title = 'Case Nav Menu';
    protected $icon = 'eicon-nav-menu';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"source_section","label":"Source Settings","tab":"content","controls":[{"name":"menu","label":"Select Menu","type":"select","options":{"":"Default","main-menu":"main-menu"}},{"name":"align","label":"Alignment","type":"choose","control_type":"responsive","condition":{"layout":["1"]},"options":{"left":{"title":"Case Left","icon":"eicon-text-align-left"},"center":{"title":"Case Center","icon":"eicon-text-align-center"},"right":{"title":"Case Right","icon":"eicon-text-align-right"}},"selectors":{"{{WRAPPER}} .ct-nav-menu .ct-main-menu":"text-align: {{VALUE}};","{{WRAPPER}} .ct-nav-menu .ct-main-menu > li":"float: none;"}}]},{"name":"first_section","label":"Style First Level","tab":"content","controls":[{"name":"style","label":"Style","type":"select","options":{"style1":"Default","style2":"Style Line","style3":"Style Hover Line 1","style4":"Style Hover Line 2"},"default":"style1"},{"name":"color","label":"Color","type":"color","selectors":{"{{WRAPPER}} .ct-nav-menu .ct-main-menu > li > a":"color: {{VALUE}};","{{WRAPPER}} .ct-nav-menu .ct-menu--plus::before, {{WRAPPER}} .ct-nav-menu .ct-menu--plus::after":"background-color: {{VALUE}};"}},{"name":"color_hover","label":"Color Hover","type":"color","selectors":{"{{WRAPPER}} .ct-nav-menu .ct-main-menu > li > a:hover":"color: {{VALUE}};","{{WRAPPER}} .ct-menu-item-marker":"background-color: {{VALUE}};","{{WRAPPER}} .ct-menu-item-marker::before":"border-color: {{VALUE}} transparent transparent transparent;"}},{"name":"color_active","label":"Color Active","type":"color","selectors":{"{{WRAPPER}} .ct-nav-menu .ct-main-menu > li.current_page_parent > a, {{WRAPPER}} .ct-nav-menu .ct-main-menu > li.current_page_item > a, .ct-nav-menu .ct-main-menu > li a.is-one-page.ct-onepage-active":"color: {{VALUE}};","{{WRAPPER}} .ct-menu-item-marker":"background-color: {{VALUE}};"}},{"name":"marker_color","label":"Marker Color","type":"color","selectors":{"{{WRAPPER}} .ct-menu-item-marker:before":"border-color: {{VALUE}} transparent transparent transparent !important;","{{WRAPPER}} .ct-menu-item-marker":"background-color: {{VALUE}} !important;"}},{"name":"line_color","label":"Line Color","type":"color","selectors":{"{{WRAPPER}} .ct-nav-menu1 .ct-main-menu > li > a::before":"background: {{VALUE}} !important;"},"condition":{"style":["style2","style4"]}},{"name":"typography","label":"Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-nav-menu .ct-main-menu > li > a"},{"name":"item_space","label":"Item Space","type":"dimensions","size_units":["px","em","%","rem"],"selectors":{"{{WRAPPER}} .ct-nav-menu .ct-main-menu > li":"margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};","{{WRAPPER}} .ct-nav-menu1.style2 .ct-main-menu > li::after":"right: -{{RIGHT}}{{UNIT}};"}}]},{"name":"sub_section","label":"Style Sub Level","tab":"content","controls":[{"name":"sub_color","label":"Color","type":"color","selectors":{"{{WRAPPER}} .ct-nav-menu .ct-main-menu li .sub-menu li > a":"color: {{VALUE}};"}},{"name":"sub_color_hover","label":"Color Hover\/Actvie","type":"color","selectors":{"{{WRAPPER}} .ct-nav-menu .ct-main-menu li .sub-menu li:hover > a, {{WRAPPER}} .ct-nav-menu .ct-main-menu li .sub-menu li.current_page_item > a, {{WRAPPER}} .ct-nav-menu .ct-main-menu li .sub-menu li.current-menu-item > a, {{WRAPPER}} .ct-nav-menu .ct-main-menu li .sub-menu li.current_page_ancestor > a, {{WRAPPER}} .ct-nav-menu .ct-main-menu li .sub-menu li.current-menu-ancestor > a":"color: {{VALUE}};"}},{"name":"sub_typography","label":"Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-nav-menu .ct-main-menu li .sub-menu a"}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}