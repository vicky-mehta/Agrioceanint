<?php

class CT_CtParticleAnimate_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_particle_animate';
    protected $title = 'Case Particle Animate';
    protected $icon = 'eicon-barcode';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"content_section","label":"Source Settings","tab":"content","controls":[{"name":"content_list","label":"List","type":"repeater","default":[],"controls":[{"name":"particle","label":"Particle","type":"media"},{"name":"img_type","label":"Image Type","type":"select","options":{"img":"Image","bg":"Background"},"default":"img"},{"name":"bg_pos","label":"Background Position","type":"select","options":{"bg-image":"Center Center","bg-top-left":"Top Left","bg-top-right":"Top Right","bg-top-center":"Top Center","bg-bottom-left":"Bottom Left","bg-bottom-right":"Bottom Right","bg-bottom-center":"Bottom Center"},"default":"bg-image","condition":{"img_type":"bg"}},{"name":"particle_animate","label":"Animate","type":"select","options":{"shape-animate1":"Animate 1","shape-animate2":"Animate 2","shape-animate3":"Animate 3","shape-animate4":"Animate 4","shape-animate5":"Animate 5","shape-animate6":"Animate 6","shape-rotate-3d":"Rotate 3D","shape-right-left":"Loop Right to Left","shape-left-right":"Loop Left to Right","shape-top-bottom":"Loop Top to Bottom","shape-parallax":"Parallax","animate-none":"None"},"default":"shape-animate1"},{"name":"top_positioon","label":"Top Position","type":"slider","size_units":["px","%"],"default":{"size":0,"unit":"%"},"range":{"%":{"min":0,"max":100}}},{"name":"left_positioon","label":"Left Position","type":"slider","size_units":["px","%"],"default":{"size":0,"unit":"%"},"range":{"%":{"min":0,"max":100}}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"ct_animate_delay","label":"Animate Delay","type":"text","default":"0","description":"Enter number. Default 0ms"}]},{"name":"particle_section","label":"Particle Section","type":"select","options":{"outside":"Outside Column","inside":"Inside Column"},"default":"outside"},{"name":"hidde_md","label":"Hidden Screen Medium","type":"select","options":{"hide-md":"Yes","show-all":"No"},"default":"hide-md"}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'ct-elementor-js','ct-inline-css-js' );
}