<?php

class CT_CtButton_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_button';
    protected $title = 'Case Button';
    protected $icon = 'eicon-button';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"source_section","label":"Source Settings","tab":"content","controls":[{"name":"style","label":"Style","type":"select","default":"btn-default","options":{"btn-default":"Default","btn-effect":"Default Effect 1","btn-effect2":"Default Effect 2","btn-primary":"Primary","btn-primary hover-white":"Primary Hover White","btn-secondary":"Secondary","btn-secondary2":"Secondary Hover Two","btn-third":"Third One","btn-third2":"Third Two","btn-white":"White","btn-white2":"White 2","btn-round":"Round 1","btn-round2":"Round 2","btn-round3":"Round 3","text-white":"Text White","line-white":"Line White 1","line-white2":"Line White 2","line-dark1":"Line Dark 1","btn-hover-outline":"Hover Outline","btn-arrow2":"Arrow","btn-outline-primary":"Outline Primary","btn-outline-secondary":"Outline Secondary","btn-half-circle1":"Half Circle 1","rev-btn-animate1":"Line Animate 1","line-animate-left":"Line Animate Left"}},{"name":"text","label":"Text","type":"text","default":"Click here","placeholder":"Click here"},{"name":"link","label":"Link","type":"url","placeholder":"https:\/\/your-link.com","default":{"url":"#"}},{"name":"align","label":"Alignment","type":"choose","control_type":"responsive","options":{"left":{"title":"Case Left","icon":"eicon-text-align-left"},"center":{"title":"Case Center","icon":"eicon-text-align-center"},"right":{"title":"Case Right","icon":"eicon-text-align-right"},"justify":{"title":"Case Justified","icon":"fa fa-align-justify"}},"prefix_class":"elementor-align-","default":"","selectors":{"{{WRAPPER}} .ct-button-wrapper":"text-align: {{VALUE}}"}},{"name":"btn_padding","label":"Padding","type":"dimensions","size_units":["px"],"selectors":{"{{WRAPPER}} .ct-button-wrapper .btn":"padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};"},"control_type":"responsive"},{"name":"btn_border_radius","label":"Border Radius","type":"dimensions","size_units":["px"],"selectors":{"{{WRAPPER}} .ct-button-wrapper .btn":"border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};"}},{"name":"border_type","label":"Border Type","type":"select","options":{"":"None","solid":"Solid","double":"Double","dotted":"Dotted","dashed":"Dashed","groove":"Groove"},"selectors":{"{{WRAPPER}} .ct-button-wrapper .btn":"border-style: {{VALUE}} !important;"}},{"name":"border_width","label":"Border Width","type":"dimensions","selectors":{"{{WRAPPER}} .ct-button-wrapper .btn":"border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;"},"condition":{"border_type!":""},"responsive":true},{"name":"border_color","label":"Border Color","type":"color","default":"","selectors":{"{{WRAPPER}} .ct-button-wrapper .btn":"border-color: {{VALUE}} !important;"},"condition":{"border_type!":""}},{"name":"border_color_hover","label":"Border Color Hover","type":"color","default":"","selectors":{"{{WRAPPER}} .ct-button-wrapper .btn:hover":"border-color: {{VALUE}} !important;"},"condition":{"border_type!":""}},{"name":"typography","label":"Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-button-wrapper .btn"},{"name":"btn_block","label":"Full Width","type":"select","default":"btn-inline-block","options":{"btn-inline-block":"No","btn-block":"Yes"}},{"name":"btn_display","label":"Display","type":"select","default":"btn--inline","options":{"btn--inline":"Inline","btn--flex":"Inline Flex"}},{"name":"btn_icon","label":"Icon","type":"icons","label_block":true,"fa4compatibility":"icon"},{"name":"icon_align","label":"Icon Position","type":"select","default":"left","options":{"left":"Before","right":"After"},"condition":{"btn_icon!":""}},{"name":"icon_font_size","label":"Icon Size","type":"slider","control_type":"responsive","size_units":["px"],"range":{"px":{"min":0,"max":300}},"selectors":{"{{WRAPPER}} .ct-button-wrapper .btn i":"font-size: {{SIZE}}{{UNIT}};"}},{"name":"icon_space_left","label":"Icon Space","type":"slider","control_type":"responsive","size_units":["px"],"range":{"px":{"min":0,"max":300}},"selectors":{"{{WRAPPER}} .ct-button-wrapper .btn .ct-align-icon-right i":"margin-left: {{SIZE}}{{UNIT}};"},"condition":{"icon_align":"right"}},{"name":"icon_space_right","label":"Icon Space","type":"slider","control_type":"responsive","size_units":["px"],"range":{"px":{"min":0,"max":300}},"selectors":{"{{WRAPPER}} .ct-button-wrapper .btn .ct-align-icon-left i":"margin-right: {{SIZE}}{{UNIT}};"},"condition":{"icon_align":"left"}},{"name":"btn_bg_color","label":"Background Color Main","type":"color","selectors":{"{{WRAPPER}} .ct-button-wrapper .btn":"background: {{VALUE}} !important;","{{WRAPPER}} .ct-button-wrapper .btn.btn-white2 i":"color: {{VALUE}} !important;","{{WRAPPER}} .ct-button-wrapper .btn.btn-third i":"color: {{VALUE}} !important;"}},{"name":"btn_bg_color_gradient","label":"Background Color Gradient","type":"color","condition":{"style":["btn-default","btn-effect","btn-effect2"]}},{"name":"icon_color","label":"Icon Color","type":"color","selectors":{"{{WRAPPER}} .ct-button-wrapper .btn i":"color: {{VALUE}} !important;"}},{"name":"icon_color_hover","label":"Icon Color Hover","type":"color","selectors":{"{{WRAPPER}} .ct-button-wrapper .btn:hover i":"color: {{VALUE}} !important;"}},{"name":"btn_color","label":"Text Color","type":"color","selectors":{"{{WRAPPER}} .ct-button-wrapper .btn":"color: {{VALUE}} !important;"}},{"name":"btn_bg_color_hover","label":"Background Color Hover","type":"color","selectors":{"{{WRAPPER}} .ct-button-wrapper .btn:hover":"background: {{VALUE}} !important;","{{WRAPPER}} .ct-button-wrapper .btn.btn-white2:hover i":"color: {{VALUE}} !important;","{{WRAPPER}} .ct-button-wrapper .btn.btn-third:hover i":"color: {{VALUE}} !important;"}},{"name":"btn_color_hover","label":"Text Color Hover","type":"color","selectors":{"{{WRAPPER}} .ct-button-wrapper .btn:hover":"color: {{VALUE}} !important;"}},{"name":"box_sh_color","label":"Box Shadow","type":"box-shadow","control_type":"group","selector":"{{WRAPPER}} .ct-button-wrapper .btn"},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"ct_animate_delay","label":"Animate Delay","type":"text","default":"0","description":"Enter number. Default 0ms"}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'ct-inline-css-js' );
}