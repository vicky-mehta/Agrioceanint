<?php

class CT_CtHistoryCarousel_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_history_carousel';
    protected $title = 'Case History Carousel';
    protected $icon = 'eicon-flip-box';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"content_list","label":"History","tab":"content","controls":[{"name":"history","label":"Add Item","type":"repeater","controls":[{"name":"year","label":"Year","type":"text"},{"name":"month","label":"Month","type":"text"},{"name":"description","label":"Description","type":"textarea","rows":10},{"name":"color_gr_from","label":"Color Gradient From","type":"color"},{"name":"color_gr_to","label":"Color Gradient To","type":"color"}],"title_field":"{{{ year }}}"}]},{"name":"style_section","label":"Style","tab":"settings","controls":[{"name":"year_color","label":"Year Color","type":"color","selectors":{"{{WRAPPER}} .ct-history-carousel .item--year":"color: {{VALUE}};"}},{"name":"month_color","label":"Month Color","type":"color","selectors":{"{{WRAPPER}} .ct-history-carousel .item--month":"color: {{VALUE}};"}},{"name":"description_color","label":"Description Color","type":"color","selectors":{"{{WRAPPER}} .ct-history-carousel .item--description":"color: {{VALUE}};"}}]},{"name":"section_carousel_settings","label":"Carousel Settings","tab":"settings","controls":[{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"col_xs","label":"Columns XS Devices","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_sm","label":"Columns SM Devices","type":"select","default":"2","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_md","label":"Columns MD Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_lg","label":"Columns LG Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","5":"5","6":"6"}},{"name":"col_xl","label":"Columns XL Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","5":"5","6":"6"}},{"name":"slides_to_scroll","label":"Slides to scroll","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","5":"5","6":"6"}},{"name":"arrows","label":"Show Arrows","type":"switcher"},{"name":"dots","label":"Show Dots","type":"switcher"},{"name":"pause_on_hover","label":"Pause on Hover","type":"switcher"},{"name":"autoplay","label":"Autoplay","type":"switcher"},{"name":"autoplay_speed","label":"Autoplay Speed","type":"number","default":5000,"condition":{"autoplay":"true"}},{"name":"infinite","label":"Infinite Loop","type":"switcher"},{"name":"speed","label":"Animation Speed","type":"number","default":500}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'ct-inline-css-js','jquery-slick','ct-post-carousel-widget-js' );
}