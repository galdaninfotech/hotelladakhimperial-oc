<?php

/* C:\xampp\htdocs\hotelladakhimperial/themes/demo/pages/gallery.htm */
class __TwigTemplate_d54ed9506a22c476b7e7b0805be4e9e9e26da81e565738df57b7bfc7207949fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
/** * @package OS Gallery * @copyright 2016 OrdaSoft * @author 2016 Andrey Kvasnevskiy(akbet@mail.ru),Roman Akoev (akoevroman@gmail.com) * @license This component is released under License from included LICENSE.txt file * @description Ordasoft Image Gallery */ /*=================---------------------Gallery--------------------======================*/ [class^=os-gallery-album-tabs-main], [class^=os-gallery-all-in-one-main], [class^=os-gallery-tabs-main] .os-cat-tab-images { overflow: hidden; } [class^=os-gallery-tabs-main] .os-cat-tab-images { width:100%; } [class^=os-gallery-album-tabs-main] img, [class^=os-gallery-all-in-one-main] img, [class^=os-gallery-tabs-main] img { width:100%; max-width: 100%; height: auto; } /*=================---------------------Gallery category tab--------------------======================*/ [class^=os-gallery-tabs-main] .osgalery-cat-tabs { // border-bottom: 1px solid #eee; padding: 0 0 0 10px; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li.active a { border: 1px solid #eee; border-bottom-color: transparent; border-radius: 0; -webkit-border-radius: 0; -moz-border-radius: 0; -o-border-radius: 0; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a:hover { background: #eee; border-radius: 0; -webkit-border-radius: 0; -moz-border-radius: 0; -o-border-radius: 0; } // [class^=os-gallery-all-in-one-main] .all-in-one-block .os-gallery-caption { // height: 30px; // } // [class^=os-gallery-all-in-one-main] .all-in-one-block .os-gallery-caption .os-gallery-img-category { // margin: 20px 0 5px 0; // text-align: center; // } /*-------------------------------------------------------------------------------os-cat-tab-images------------------------------------------------------*/ .os-cat-tab-images { } [class^=os-gallery-tabs-main] .os-cat-tab-images .img-block { float: left; position: relative; overflow: hidden; -webkit-box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); -moz-box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); } [class^=os-gallery-all-in-one-main] .os-cat-tab-images .img-block { position: relative; } [class^=os-gallery-all-in-one-main] .os-cat-tab-images .img-block, [class^=os-gallery-album-tabs-main] .os-cat-tab-images .img-block { position: relative; display: inline-block; float: left; overflow: hidden; -webkit-box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); -moz-box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); } //[class^=os-gallery-album-tabs-main] .os-cat-tab-images .img-block:last-child [class^=os-gallery-all-in-one-main] .os-cat-tab-images .img-block:last-child { clear: both; } [class^=os-gallery-album-tabs-main] .back-to-albums { background: #354052; color: #fff; font-weight: bold; font-size: 15px; line-height: 15px; padding: 10px; margin: 10px 0; cursor: pointer; display: inline-block; } [class^=os-gallery-tabs-main] .os-cat-tab-images .img-block .os-gallery-caption { position: absolute; width: 100%; height: 100%; top: 0; left: 0; } [class^=os-gallery-tabs-main] .os-cat-tab-images .img-block a { display: inline-block; width: 100%; } /*****------------------------------------------------- none ----------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.none-effect, [class^=os-gallery-album-tabs-main] .img-block.none-effect, [class^=os-gallery-tabs-main] .img-block.none-effect { background: #2f3238; overflow: hidden; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption h3.os-gallery-img-title { position: relative; padding: 0.5em 0; color: #fff; text-align: center; font-size: 100%; line-height: 100%; font-weight: bold; margin: 0; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption p { display: inline-block; margin: 1% 5px 1% 11%; padding: 0.4em 1em; background: rgba(255,255,255,0.9); color: #2f3238; text-transform: none; font-weight: bold; font-size: 70%; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: translate3d(-360px,0,0); transform: translate3d(-360px,0,0); opacity: 0; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption p:first-child, [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption p:first-child, [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption p:first-child { -webkit-transition-delay: 0.15s; transition-delay: 0.15s; position: absolute; top: 50px; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(2) { -webkit-transition-delay: 0.1s; transition-delay: 0.1s; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(3) { -webkit-transition-delay: 0.05s; transition-delay: 0.05s; } [class^=os-gallery-all-in-one-main] .img-block.none-effect:hover .os-gallery-caption p:first-child, [class^=os-gallery-album-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:first-child, [class^=os-gallery-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:first-child { -webkit-transition-delay: 0s; transition-delay: 0s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-album-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(2) { -webkit-transition-delay: 0.05s; transition-delay: 0.05s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-album-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(3) { -webkit-transition-delay: 0.1s; transition-delay: 0.1s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.none-effect:hover .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.none-effect:hover .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.none-effect:hover .os-gallery-caption p { opacity: 1; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } /*****------------------------------------------------- dimas ----------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.dimas-effect, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect, [class^=os-gallery-tabs-main] .img-block.dimas-effect { background: #2f3238; overflow: hidden; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect img, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect img, [class^=os-gallery-tabs-main] .img-block.dimas-effect img { -webkit-transition: opacity 1s, -webkit-transform 1s; transition: opacity 1s, transform 1s; -webkit-backface-visibility: hidden; backface-visibility: hidden; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption h3.os-gallery-img-title { position: relative; padding: 0.5em 0; color: #fff; text-align: center; font-size: 100%; line-height: 100%; font-weight: bold; margin: 0; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption p { display: inline-block; margin: 1% 5px 1% 11%; padding: 0.4em 1em; background: rgba(255,255,255,0.9); color: #2f3238; text-transform: none; font-weight: bold; font-size: 70%; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: translate3d(-360px,0,0); transform: translate3d(-360px,0,0); opacity: 0; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption p:first-child, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption p:first-child, [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption p:first-child { -webkit-transition-delay: 0.15s; transition-delay: 0.15s; position: absolute; top: 50px; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(2) { -webkit-transition-delay: 0.1s; transition-delay: 0.1s; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(3) { -webkit-transition-delay: 0.05s; transition-delay: 0.05s; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect:hover .os-gallery-caption p:first-child, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:first-child, [class^=os-gallery-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:first-child { -webkit-transition-delay: 0s; transition-delay: 0s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-album-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(2) { -webkit-transition-delay: 0.05s; transition-delay: 0.05s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-album-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(3) { -webkit-transition-delay: 0.1s; transition-delay: 0.1s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect:hover img, [class^=os-gallery-tabs-main] .img-block.dimas-effect:hover img { opacity: 0.4; -webkit-transform: scale3d(1.1,1.1,1); transform: scale3d(1.1,1.1,1); } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect:hover .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p { opacity: 1; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } /*****------------------------------------------------------------- anet ------------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.anet-effect img, [class^=os-gallery-album-tabs-main] .img-block.anet-effect img, [class^=os-gallery-tabs-main] .img-block.anet-effect img, [class^=os-gallery-all-in-one-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title { -webkit-transition: -webkit-transform 0.35s; transition: transform 0.35s; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect, [class^=os-gallery-album-tabs-main] .img-block.anet-effect, [class^=os-gallery-tabs-main] .img-block.anet-effect { background: #788aa8; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.anet-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.anet-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect img, [class^=os-gallery-album-tabs-main] .img-block.anet-effect img, [class^=os-gallery-tabs-main] .img-block.anet-effect img { -webkit-backface-visibility: hidden; backface-visibility: hidden; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.anet-effect h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.anet-effect h3.os-gallery-img-title { position: absolute; bottom: 0; left: 0; padding: 30px; font-size: 100%; line-height: 100%; font-weight: bold; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.anet-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.anet-effect .os-gallery-caption p { position: absolute; bottom: 0; left: 0; padding: 30px; font-size: 80%; line-height: 80%; color: #fff; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; font-weight: bold; margin: 0 0 10px 0; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.anet-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.anet-effect .os-gallery-caption p { text-transform: none; font-size: 70%; line-height: 80%; opacity: 0; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: translate3d(0,50px,0); transform: translate3d(0,50px,0); } [class^=os-gallery-all-in-one-main] .img-block.anet-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.anet-effect:hover img, [class^=os-gallery-tabs-main] .img-block.anet-effect:hover img { -webkit-transform: translate3d(0,-80px,0); transform: translate3d(0,-80px,0); } [class^=os-gallery-all-in-one-main] .img-block.anet-effect:hover .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.anet-effect:hover .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.anet-effect:hover .os-gallery-caption h3.os-gallery-img-title { -webkit-transform: translate3d(0,-100px,0); transform: translate3d(0,-100px,0); } [class^=os-gallery-all-in-one-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title { color: #fff; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-category, [class^=os-gallery-album-tabs-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-category, [class^=os-gallery-tabs-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-category { opacity: 1; -webkit-transform: translate3d(0,-5px,0); transform: translate3d(0,-5px,0); } [class^=os-gallery-all-in-one-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-desc, [class^=os-gallery-album-tabs-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-desc, [class^=os-gallery-tabs-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-desc { opacity: 1; -webkit-transform: translate3d(0,20px,0); transform: translate3d(0,20px,0); } /*****--------------------------------------------------- sergio --------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.sergio-effect, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect, [class^=os-gallery-tabs-main] .img-block.sergio-effect { background: #fff; cursor: pointer; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.sergio-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect img, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect img, [class^=os-gallery-tabs-main] .img-block.sergio-effect img { opacity: 0.95; -webkit-transition: -webkit-transform 0.35s; transition: transform 0.35s; -webkit-transform-origin: 50% 50%; transform-origin: 50% 50%; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect:hover img, [class^=os-gallery-tabs-main] .img-block.sergio-effect:hover img { -webkit-transform: scale3d(0.95,0.95,1); transform: scale3d(0.95,0.95,1); } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.sergio-effect .os-gallery-caption { position: absolute; width: 100%; height: 100%; top: 25px; left: 0; z-index: 9; text-align: center; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.sergio-effect .os-gallery-caption h3.os-gallery-img-title { -webkit-transition: -webkit-transform 0.35s; transition: transform 0.35s; -webkit-transform: translate3d(0,20px,0); transform: translate3d(0,20px,0); color: #fff; font-size: 100%; line-height: 30px; font-weight: bold; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.sergio-effect .os-gallery-caption p { opacity: 0; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: perspective(1000px) rotate3d(1,0,0,90deg); transform: perspective(1000px) rotate3d(1,0,0,90deg); -webkit-transform-origin: 50% 0%; transform-origin: 50% 0%; color: #fff; text-shadow: 1px 2px 4px #505050; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect:hover .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect:hover .os-gallery-caption h3, [class^=os-gallery-tabs-main] .img-block.sergio-effect:hover .os-gallery-caption h3 { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect:hover .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect:hover .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.sergio-effect:hover .os-gallery-caption p { opacity: 1; -webkit-transform: perspective(1000px) rotate3d(1,0,0,0); transform: perspective(1000px) rotate3d(1,0,0,0); color: #fff; font-size: 70%; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; } /*****---------------------------------------------------- ariana -------------------------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.ariana-effect, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect, [class^=os-gallery-tabs-main] .img-block.ariana-effect { z-index: auto; overflow: visible; background: transparent; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect:before, [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before { position: absolute; top: 0; left: 0; z-index: -1; width: 100%; height: 100%; background: transparent; content: ''; -webkit-transition: opacity 0.35s; transition: opacity 0.35s; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect:before { // box-shadow: 0 3px 30px rgba(0,0,0,0.8); opacity: 0; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption { z-index: 1; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect img, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect img, [class^=os-gallery-tabs-main] .img-block.ariana-effect img { opacity: 1; -webkit-transition: -webkit-transform 0.35s; transition: transform 0.35s; -webkit-transform: perspective(1000px) translate3d(0,0,0); transform: perspective(1000px) translate3d(0,0,0); } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title { font-size: 100%; line-height: 100%; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption p { background: rgba(255, 255, 255, 0.62); color: #2d434e; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title { position: relative; margin: 15px; padding: 5px; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before { box-shadow: 0 1px 10px rgba(0,0,0,0.5); } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption p { margin: 20px 30px 0 30px; padding: 5px; font-weight: 800; opacity: 0; font-size: 60%; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: scale3d(0.9,0.9,1); transform: scale3d(0.9,0.9,1); } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:hover:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:hover:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect:hover:before { opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:hover img, [class^=os-gallery-tabs-main] .img-block.ariana-effect:hover img { -webkit-transform: perspective(1000px) translate3d(0,0,21px); transform: perspective(1000px) translate3d(0,0,21px); } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:hover .os-gallery-caption h3os-gallery-img-title:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:hover .os-gallery-caption h3os-gallery-img-title:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect:hover .os-gallery-caption h3os-gallery-img-title:before { opacity: 0; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:hover .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:hover .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.ariana-effect:hover .os-gallery-caption p { opacity: 1; -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1); } /*****----------------------------------------------------- taras --------------------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.taras-effect, [class^=os-gallery-album-tabs-main] .img-block.taras-effect, [class^=os-gallery-tabs-main] .img-block.taras-effect { background: #030c17; } [class^=os-gallery-album-tabs-main] .album-block .img-block.taras-effect .os-gallery-caption p { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:30%; left:0; } [class^=os-gallery-all-in-one-main] .img-block.taras-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.taras-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.taras-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.taras-effect img, [class^=os-gallery-album-tabs-main] .img-block.taras-effect img, [class^=os-gallery-tabs-main] .img-block.taras-effect img { opacity: 0.9; -webkit-transition: opacity 0.35s; transition: opacity 0.35s; } [class^=os-gallery-all-in-one-main] .img-block.taras-effect .os-gallery-caption::before, [class^=os-gallery-album-tabs-main] .img-block.taras-effect .os-gallery-caption::before, [class^=os-gallery-tabs-main] .img-block.taras-effect .os-gallery-caption::before { position: absolute; top: 50px; right: 50px; bottom: 50px; left: 50px; border: 2px solid #fff; box-shadow: 0 0 0 30px rgba(255,255,255,0.2); content: ''; opacity: 0; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: scale3d(1.4,1.4,1); transform: scale3d(1.4,1.4,1); } [class^=os-gallery-all-in-one-main] .img-block.taras-effect .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.taras-effect .os-gallery-caption h3, [class^=os-gallery-tabs-main] .img-block.taras-effect .os-gallery-caption h3 { margin: 20% 0 10px 0; -webkit-transition: -webkit-transform 0.35s; transition: transform 0.35s; } [class^=os-gallery-all-in-one-main] .img-block.taras-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.taras-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.taras-effect .os-gallery-caption p { padding: 0; text-align: center; color: #fff; font-size: 70%; line-height: 30px; margin: 0; opacity: 0; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: scale(1.5); transform: scale(1.5); } [class^=os-gallery-all-in-one-main] .img-block.taras-effect:hover .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.taras-effect:hover .os-gallery-caption h3, [class^=os-gallery-tabs-main] .img-block.taras-effect:hover .os-gallery-caption h3 { // -webkit-transform: scale(1.1); // transform: scale(1.1); color: #fff; font-size: 100%; text-align: center; } [class^=os-gallery-all-in-one-main] .img-block.taras-effect:hover .os-gallery-caption::before, [class^=os-gallery-album-tabs-main] .img-block.taras-effect:hover .os-gallery-caption::before, [class^=os-gallery-tabs-main] .img-block.taras-effect:hover .os-gallery-caption::before, [class^=os-gallery-all-in-one-main] .img-block.taras-effect:hover .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.taras-effect:hover .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.taras-effect:hover .os-gallery-caption p { opacity: 1; -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1); } [class^=os-gallery-all-in-one-main] .img-block.taras-effect:hover .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.taras-effect:hover .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.taras-effect:hover .os-gallery-caption { background-color: rgba(58,52,42,0); } [class^=os-gallery-all-in-one-main] .img-block.taras-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.taras-effect:hover img, [class^=os-gallery-tabs-main] .img-block.taras-effect:hover img { opacity: 0.4; } /*****-----------------------------------------------------------andrea--------------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.andrea-effect, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect, [class^=os-gallery-tabs-main] .img-block.andrea-effect { overflow: hidden; } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.andrea-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } // .img-block.andrea-effect a { // position: relative; // width: 100%; // height: 100%; // z-index: 11; // } // [class^=os-gallery-all-in-one-main] .img-block.andrea-effect a:after, // [class^=os-gallery-album-tabs-main] .img-block.andrea-effect a:after, // [class^=os-gallery-tabs-main] .img-block.andrea-effect a:after { // content: \"\\f00e\"; // font-family: fontAwesome; // display: inline-block; // font-size: 40px; // color: #fff; // position: absolute; // top: 100%; // opacity: 0; // left: 45%; // transition: all 0.3s ease; // -webkit-transition: all 0.3s ease; // -moz-transition: all 0.3s ease; // -o-transition: all 0.3s ease; // z-index: 9; // } // [class^=os-gallery-all-in-one-main] .img-block.andrea-effect:hover a:after, // [class^=os-gallery-album-tabs-main] .img-block.andrea-effect:hover a:after, // [class^=os-gallery-tabs-main] .img-block.andrea-effect:hover a:after { // top: 43%; // opacity: 1; // transition: all 0.3s ease; // -webkit-transition: all 0.3s ease; // -moz-transition: all 0.3s ease; // -o-transition: all 0.3s ease; // } // [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .fa-search-plus, // [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .fa-search-plus, // [class^=os-gallery-tabs-main] .img-block.andrea-effect .fa-search-plus { // font-family: fontAwesome; // display: inline-block; // // font-size: 30px; // color: #fff; // position: absolute; // top: 100%; // opacity: 0; // left: 45%; // transition: all 0.3s ease; // -webkit-transition: all 0.3s ease; // -moz-transition: all 0.3s ease; // -o-transition: all 0.3s ease; // z-index: 9; // } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .andrea-zoom-in, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .andrea-zoom-in, [class^=os-gallery-tabs-main] .img-block.andrea-effect .andrea-zoom-in { // font-family: fontAwesome; display: inline-block; // font-size: 30px; background: url(../images/zoom.svg) no-repeat; background-size: cover; color: #fff; position: absolute; top: 100%; opacity: 0; left: 45%; transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; z-index: 9; } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect:hover .andrea-zoom-in, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect:hover .andrea-zoom-in, [class^=os-gallery-tabs-main] .img-block.andrea-effect:hover .andrea-zoom-in { top: 43%; opacity: 1; transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.andrea-effect .os-gallery-caption { position: absolute; top: -100%; left: 0; width:100%; height: 100%; background: rgba(0, 0, 0, 0.0); opacity: 0; transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; z-index: 9; } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect:hover .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect:hover .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.andrea-effect:hover .os-gallery-caption { top: 0; cursor: pointer; opacity: 1; transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; background: rgba(0, 0, 0, 0.55); } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .os-gallery-caption h3, [class^=os-gallery-tabs-main] .img-block.andrea-effect .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .os-gallery-caption h3, [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.andrea-effect .os-gallery-caption p { display: none; } /*****----------------------------------------------------------------zema-------------------------------------------------------------------------*****/ @-webkit-keyframes foto { 0% { opacity: .4; } 100% { opacity: 1; } } @keyframes foto { 0% { opacity: .4; } 100% { opacity: 1; } } [class^=os-gallery-all-in-one-main] .img-block.zema-effect .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.zema-effect .os-gallery-caption h3, [class^=os-gallery-tabs-main] .img-block.zema-effect .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.zema-effect .os-gallery-caption p, [class^=os-gallery-all-in-one-main] .img-block.zema-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.zema-effect .os-gallery-caption p { display: none; } [class^=os-gallery-all-in-one-main] .img-block.zema-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.zema-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.zema-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.zema-effect img, [class^=os-gallery-album-tabs-main] .img-block.zema-effect img, [class^=os-gallery-tabs-main] .img-block.zema-effect img { -webkit-filter: grayscale(100%); filter: grayscale(100%); transform: scale(1.1); } [class^=os-gallery-all-in-one-main] .img-block.zema-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.zema-effect:hover img, [class^=os-gallery-tabs-main] .img-block.zema-effect:hover img { cursor: pointer; animation-name: foto; animation-duration: 0.2s; -webkit-filter: grayscale(0); filter: grayscale(0); transform: scale(1); } /*****-------------------------------------------------------pytiton-effect-----------------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.pytiton-effect .os-gallery-caption { position: absolute; top: 0; left: 0; width: 100%; height: 100%; transition: all 0.6s ease; -webkit-transition: all 0.6s ease; -moz-transition: all 0.6s ease; -o-transition: all 0.6s ease; background: rgba(28, 86, 136, 0.52); } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.pytiton-effect .os-gallery-caption h3.os-gallery-img-title { opacity: 0; position: absolute; top:20%; left: -100%; background: #fff; padding: 10px 20px; font-size: 100%; color: #2F3238; transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect:hover .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect:hover .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.pytiton-effect:hover .os-gallery-caption { transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; background: rgba(170, 173, 4, 0.35); } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect:hover h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect:hover h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.pytiton-effect:hover h3.os-gallery-img-title { transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; left: 0; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-desc, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-desc, [class^=os-gallery-tabs-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-desc { opacity: 0; position: absolute; top: 60%; right: -100%; background: #fff; padding: 10px 20px; font-size: 70%; color: #2F3238; transition: all 1s ease; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect:hover p.os-gallery-img-desc, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect:hover p.os-gallery-img-desc, [class^=os-gallery-tabs-main] .img-block.pytiton-effect:hover p.os-gallery-img-desc { transition: all 1s ease; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; right: 0; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-category, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-category, [class^=os-gallery-tabs-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-category { display: none; } .os_fancybox-wrap .os_fancybox-title-outside-wrap h2 { color: #fff; text-shadow: 1px 2px 4px #505050; font-weight: bold; } @media (max-width: 768px){ [class^=os-gallery-all-in-one-main] .img-block .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block .os-gallery-caption p { display: none !important; } [class^=os-gallery-all-in-one-main] .anet-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .anet-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .anet-effect .os-gallery-caption p { display: block !important; } } /*--------------------------------------gallery tabs-------------------------------------------*/ [class^=os-gallery-tabs-main] .osgalery-cat-tabs { list-style: none; margin:0; padding: 0; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li { display: inline-block; height: 35px; margin:0; padding: 0; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a { height: 100%; display: block; text-align: center; line-height: 33px; padding: 0 5px; color: #555; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a.active { background: #ccc; color: #333; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a:active, [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a:focus, [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a:hover { text-decoration: none; } /*-------------------------load more button-----------------*/ .osGallery-button-box .load-more-button { border: none; width: 100%; padding: 10px; color: #fff; font-size: 14px; font-weight: 600; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1); -webkit-text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1); -moz-text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1); -o-text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1); } .osGallery-button-box .load-more-button:hover { background: #788aa8 !important; } .add-zoomIn { -webkit-animation-name: zoomIn; animation-name: zoomIn; } .add-animated { -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-fill-mode: both; animation-fill-mode: both; } /* clear fix */ .grid:after { content: ''; display: block; clear: both; } .grid-item { float: left; } .grid-item img { display: block; width: 100%; } [class=sharing] { position: absolute; top: 0; z-index: 10000; width: 100%; text-align: right; padding: 4px 0; min-height: 20px; } [class=sharing] a { width: auto !important; margin-left: 2px; } [class=sharing] .soc1{ -webkit-animation-duration: 0.5s; -moz-animation-duration: 0.5s; animation-duration: 0.5s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc2{ -webkit-animation-duration: 0.8s; -moz-animation-duration: 0.8s; animation-duration: 0.8s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc3{ -webkit-animation-duration: 1.1s; -moz-animation-duration: 1.1s; animation-duration: 1.1s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc4{ -webkit-animation-duration: 1.4s; -moz-animation-duration: 1.4s; animation-duration: 1.4s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc5{ -webkit-animation-duration: 1.7s; -moz-animation-duration: 1.7s; animation-duration: 1.7s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc6{ -webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc7{ -webkit-animation-duration: 2.3s; -moz-animation-duration: 2.3s; animation-duration: 2.3s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc7.zoomOut { -webkit-animation-duration: 0.5s; -moz-animation-duration: 0.5s; animation-duration: 0.5s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc6.zoomOut { -webkit-animation-duration: 0.8s; -moz-animation-duration: 0.8s; animation-duration: 0.8s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc5.zoomOut { -webkit-animation-duration: 1.1s; -moz-animation-duration: 1.1s; animation-duration: 1.1s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc4.zoomOut { -webkit-animation-duration: 1.4s; -moz-animation-duration: 1.4s; animation-duration: 1.4s; webkit-animation-fill-mode: both; animation-fill-mode: both } [class=sharing] .soc3.zoomOut { -webkit-animation-duration: 1.7s; -moz-animation-duration: 1.7s; animation-duration: 1.7s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc2.zoomOut { -webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc1.zoomOut { -webkit-animation-duration: 2.3s; -moz-animation-duration: 2.3s; animation-duration: 2.3s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .act { display: none; } [class=sharing] .act.zoomIn { display: block; } [class=sharing] .zoomIn, [class=sharing] .zoomOut { display: block; float: right; } .animated { -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-fill-mode: both; animation-fill-mode: both; } .icons_os_image { background: url(../images/shareLink.png) no-repeat; width: 32px; height: 32px; position: absolute; top: 4px; right: 5px; cursor: pointer; } .icons_os { margin-right: 39px; overflow: hidden; } .icons_download { background: url(../images/downloadButton.png) no-repeat; width: 32px; height: 32px; position: absolute; top: 40px; right: 5px; cursor: pointer; } @-webkit-keyframes zoomIn { 0% { opacity: 0; -webkit-transform: scale3d(.3, .3, .3); transform: scale3d(.3, .3, .3); } 50% { opacity: 1; } } @keyframes zoomIn { 0% { opacity: 0; -webkit-transform: scale3d(.3, .3, .3); transform: scale3d(.3, .3, .3); } 50% { opacity: 1; } } .zoomIn { -webkit-animation-name: zoomIn; animation-name: zoomIn; } @-webkit-keyframes zoomOut { 0% { opacity: 1; } 50% { opacity: 0; -webkit-transform: scale3d(.3, .3, .3); transform: scale3d(.3, .3, .3); } 100% { opacity: 0; } } @keyframes zoomOut { 0% { opacity: 1; } 50% { opacity: 0; -webkit-transform: scale3d(.3, .3, .3); transform: scale3d(.3, .3, .3); } 100% { opacity: 0; } } .zoomOut { -webkit-animation-name: zoomOut; animation-name: zoomOut; } .os_fancybox-outer a.os_fancybox-nav { width: 10%; }

/*! os_fancybox v2.1.5 fancyapps.com | fancyapps.com/os_fancybox/#license */ .os_fancybox-wrap, .os_fancybox-skin, .os_fancybox-outer, .os_fancybox-inner, .os_fancybox-image, .os_fancybox-wrap iframe, .os_fancybox-wrap object, .os_fancybox-nav, .os_fancybox-nav span, .os_fancybox-tmp { padding: 0; margin: 0; border: 0; outline: none; vertical-align: top; } .os_fancybox-wrap { position: absolute; top: 0; left: 0; z-index: 8020; } .os_fancybox-skin { position: relative; background: #f9f9f9; color: #444; text-shadow: none; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; } .os_fancybox-opened { z-index: 8030; } .os_fancybox-opened .os_fancybox-skin { -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); } .os_fancybox-outer, .os_fancybox-inner { position: relative; } .os_fancybox-inner { overflow: hidden; } .os_fancybox-type-iframe .os_fancybox-inner { -webkit-overflow-scrolling: touch; } .os_fancybox-error { color: #444; font: 14px/20px \"Helvetica Neue\",Helvetica,Arial,sans-serif; margin: 0; padding: 15px; white-space: nowrap; } .os_fancybox-image, .os_fancybox-iframe { display: block; width: 100%; height: 100%; } .os_fancybox-image { max-width: 100%; max-height: 100%; } #os_fancybox-loading, .os_fancybox-close, .os_fancybox-prev span, .os_fancybox-next span,.gallery-fanc-prev span,.gallery-fanc-next span { background-image: url('os_fancybox_sprite.png'); } #os_fancybox-loading { position: fixed; top: 50%; left: 50%; margin-top: -22px; margin-left: -22px; background-position: 0 -108px; opacity: 0.8; cursor: pointer; z-index: 8060; } #os_fancybox-loading div { width: 44px; height: 44px; background: url('os_fancybox_loading.gif') center center no-repeat; } .os_fancybox-close { position: absolute; top: -18px; right: -18px; width: 36px; height: 36px; cursor: pointer; z-index: 8040; } .os_fancybox-nav { position: absolute; top: 0; width: 40%; height: 100%; cursor: pointer; text-decoration: none; background: transparent url('blank.gif'); /* helps IE */ -webkit-tap-highlight-color: rgba(0,0,0,0); z-index: 8040; } .gallery-fanc-prev{ position: absolute; top: 10%; width: 40%; height: 80%; cursor: pointer; text-decoration: none; background: transparent url('blank.gif'); /* helps IE */ -webkit-tap-highlight-color: rgba(0,0,0,0); z-index: 8040; left: 0; } .gallery-fanc-next{ position: fixed; top: 10%; width: 40%; height: 80%; cursor: pointer; text-decoration: none; background: transparent url('blank.gif'); /* helps IE */ -webkit-tap-highlight-color: rgba(0,0,0,0); z-index: 8040; right: 0; top: 43% !important; height: 27% !important; } .gallery-fanc-next span, .gallery-fanc-prev span{ position: fixed; top: 50%; width: 36px; height: 35px; margin-top: -18px; cursor: pointer; z-index: 8040; } .gallery-fanc-prev span { left: 10px; background-position: 0 -36px; } .gallery-fanc-next span { right: 10px; background-position: 0 -72px; } .os_fancybox-prev { left: 0; } .os_fancybox-next { right: 0; } .os_fancybox-nav span { position: absolute; top: 50%; width: 36px; height: 34px; margin-top: -18px; cursor: pointer; z-index: 8040; visibility: hidden; } .os_fancybox-prev span { left: 10px; background-position: 0 -36px; } .os_fancybox-next span { right: 10px; background-position: 0 -72px; } .os_fancybox-nav:hover span { visibility: visible; } .os_fancybox-tmp { position: absolute; top: -99999px; left: -99999px; visibility: hidden; max-width: 99999px; max-height: 99999px; overflow: visible !important; } /* Overlay helper */ .os_fancybox-lock { overflow: hidden !important; width: auto; } .os_fancybox-lock body { overflow: hidden !important; } .os_fancybox-lock-test { overflow-y: hidden !important; } .os_fancybox-overlay { position: absolute; top: 0; left: 0; overflow: hidden; display: none; z-index: 8010; background: url('os_fancybox_overlay.png'); } .os_fancybox-overlay-fixed { position: fixed; bottom: 0; right: 0; } .os_fancybox-lock .os_fancybox-overlay { overflow: auto; overflow-y: scroll; } /* Title helper */ .os_fancybox-title { visibility: hidden; font: normal 13px/20px \"Helvetica Neue\",Helvetica,Arial,sans-serif; position: relative; text-shadow: none; z-index: 8050; } .os_fancybox-opened .os_fancybox-title { visibility: visible; } .os_fancybox-title-float-wrap { position: absolute; bottom: 0; right: 50%; margin-bottom: -35px; z-index: 8050; text-align: center; } .os_fancybox-title-float-wrap .child { display: inline-block; margin-right: -100%; padding: 2px 20px; background: transparent; /* Fallback for web browsers that doesn't support RGBa */ background: rgba(0, 0, 0, 0.8); -webkit-border-radius: 15px; -moz-border-radius: 15px; border-radius: 15px; text-shadow: 0 1px 2px #222; color: #FFF; font-weight: bold; line-height: 24px; white-space: nowrap; } .os_fancybox-title-outside-wrap { position: relative; margin-top: 10px; color: #fff; } .os_fancybox-title-inside-wrap { padding-top: 10px; } .os_fancybox-title-over-wrap { position: absolute; bottom: 0; left: 0; color: #fff; padding: 10px; background: #000; background: rgba(0, 0, 0, .8); } /*Retina graphics!*/ @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min--moz-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5){ #os_fancybox-loading, .os_fancybox-close, .os_fancybox-prev span, .os_fancybox-next span,.gallery-fanc-prev span,.gallery-fanc-next span{ background-image: url('os_fancybox_sprite@2x.png'); background-size: 44px 152px; /*The size of the normal image, half the size of the hi-res image*/ } #os_fancybox-loading div { background-image: url('os_fancybox_loading@2x.gif'); background-size: 24px 24px; /*The size of the normal image, half the size of the hi-res image*/ } }


#os_fancybox-thumbs { position: fixed; left: 0; width: 100%; overflow: hidden; z-index: 8050; } #os_fancybox-thumbs.bottom { bottom: 40px; } #os_fancybox-thumbs.top { top: 2px; } #os_fancybox-thumbs ul { position: relative; list-style: none; margin: 0; padding: 0; } #os_fancybox-thumbs ul li { float: left; padding: 1px; opacity: 0.5; } #os_fancybox-thumbs ul li.active { opacity: 0.75; padding: 0; border: 1px solid #fff; } #os_fancybox-thumbs ul li:hover { opacity: 1; } #os_fancybox-thumbs ul li a { display: block; position: relative; overflow: hidden; border: 1px solid #222; background: #111; outline: none; } #os_fancybox-thumbs ul li img { display: block; position: relative; border: 0; padding: 0; max-width: none; }


#os_fancybox-buttons { position: fixed; left: 0; width: 100%; z-index: 8050; } #os_fancybox-buttons.top { top: 10px; } #os_fancybox-buttons.bottom { bottom: 10px; } #os_fancybox-buttons ul { display: block; width: 166px; height: 30px; margin: 0 auto; padding: 0; list-style: none; border: 1px solid #111; border-radius: 3px; -webkit-box-shadow: inset 0 0 0 1px rgba(255,255,255,.05); -moz-box-shadow: inset 0 0 0 1px rgba(255,255,255,.05); box-shadow: inset 0 0 0 1px rgba(255,255,255,.05); background: rgb(50,50,50); background: -moz-linear-gradient(top, rgb(68,68,68) 0%, rgb(52,52,52) 50%, rgb(41,41,41) 50%, rgb(51,51,51) 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(68,68,68)), color-stop(50%,rgb(52,52,52)), color-stop(50%,rgb(41,41,41)), color-stop(100%,rgb(51,51,51))); background: -webkit-linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%); background: -o-linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%); background: -ms-linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%); background: linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#444444', endColorstr='#222222',GradientType=0 ); } #os_fancybox-buttons ul li { float: left; margin: 0; padding: 0; } #os_fancybox-buttons a { display: block; width: 30px; height: 30px; text-indent: -9999px; background-color: transparent; background-image: url('os_fancybox_buttons.png'); background-repeat: no-repeat; outline: none; opacity: 0.8; } #os_fancybox-buttons a:hover { opacity: 1; } #os_fancybox-buttons a.btnPrev { background-position: 5px 0; } #os_fancybox-buttons a.btnNext { background-position: -33px 0; border-right: 1px solid #3e3e3e; } #os_fancybox-buttons a.btnPlay { background-position: 0 -30px; } #os_fancybox-buttons a.btnPlayOn { background-position: -30px -30px; } #os_fancybox-buttons a.btnToggle { background-position: 3px -60px; border-left: 1px solid #111; border-right: 1px solid #3e3e3e; width: 35px } #os_fancybox-buttons a.btnToggleOn { background-position: -27px -60px; } #os_fancybox-buttons a.btnClose { border-left: 1px solid #111; width: 35px; background-position: -56px 0px; } #os_fancybox-buttons a.btnDisabled { opacity : 0.4; cursor: default; }
</style>

<link rel=\"stylesheet\" href=\"";
        // line 13
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/gallery/os-gallery.css"));
        echo "\" type=\"text/css\">



<link rel=\"stylesheet\" href=\"";
        // line 17
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/gallery/jquery.os_fancyboxGall.css"));
        echo "\" type=\"text/css\">

<link rel=\"stylesheet\" href=\"";
        // line 19
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/gallery/jquery.os_fancybox-thumbs.css"));
        echo "\" type=\"text/css\">

<link rel=\"stylesheet\" href=\"";
        // line 21
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/gallery/jquery.os_fancybox-buttons.css"));
        echo "\" type=\"text/css\">





<script type=\"text/javascript\" src=\"";
        // line 27
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/jquery.js.download"));
        echo "\"></script>

<script type=\"text/javascript\">

    jQuery.noConflict();

</script>





<script src=\"";
        // line 39
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/jQuerGall-2.2.4.js.download"));
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 41
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/jquery.os_fancyboxGall.js.download"));
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 43
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/imagesloadedGall.pkgd.min.js.download"));
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 45
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/isotope.pkgd.min.js.download"));
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 47
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/jquery.os_fancyboxGall-thumbs.js.download"));
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 49
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/jquery.mousewheel-3.0.6.pack.js.download"));
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 51
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/jquery.os_fancyboxGall-buttons.js.download"));
        echo "\" type=\"text/javascript\"></script>



<script src=\"";
        // line 55
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/jquery-noconflict.js.download"));
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 57
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/jquery-migrate.min.js.download"));
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 59
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/caption.js.download"));
        echo "\" type=\"text/javascript\"></script>



<script src=\"";
        // line 63
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/gallery/custom.js.download"));
        echo "\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">

    jQuerGall = jQuerGall.noConflict();

    jQuerGall = jQuerGall.noConflict();

    jQuerGall = jQuerGall.noConflict();

    jQuery(window).on('load', function() {

        new JCaption('img.caption');

    });

</script>








<div id=\"wrapper\" class=\"container\">

    <div id=\"globalContent\">

        <div class=\"row\">

            <div id=\"contentBox\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">

                <div>
                    <div id=\"system-message-container\">
                    </div>
                </div>
                <h1 class=\"my-2 text-center pt-4\">Check Out Our ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "!</h1>
                <div>
                    <div class=\"item-page\" itemscope=\"\" itemtype=\"https://schema.org/Article\">
                        <meta itemprop=\"inLanguage\" content=\"en-GB\">

                        <div itemprop=\"articleBody\">
                            <p><span style=\"font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, sans-serif; font-size: 13px; text-align: center; background-color: #b6c0d0;\">    </span></p>
                            <div class=\"os-gallery-tabs-main-59\">

                                <div class=\"os-cat-tab-images\">
                                    <!-- Simple category mode-->
                                    <div class=\"grid\" id=\"cat-79\" data-cat-id=\"79\" style=\"padding: 2.5px; height: 1315.27px; position: relative;\">
                                        <div class=\"grid-sizer\" style=\"width: 33%;\" ;=\"\"></div>
      

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 2.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-540\" rel=\"group\" target=\"\" href=\"";
        // line 116
        echo url("/themes/demo/assets/images/gallery/gallery1.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 118
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery1.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 65.9211%; top: 2.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-541\" rel=\"group\" target=\"\" href=\"";
        // line 124
        echo url("/themes/demo/assets/images/gallery/gallery2.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 126
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery2.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"";
        // line 132
        echo url("/themes/demo/assets/images/gallery/gallery3.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 134
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery3.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 65.9211%; top: 217.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-537\" rel=\"group\" target=\"\" href=\"";
        // line 141
        echo url("/themes/demo/assets/images/gallery/gallery4.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"";
        // line 144
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery4.jpg"));
        echo "\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 65.9211%; top: 433.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-542\" rel=\"group\" target=\"\" href=\"";
        // line 153
        echo url("/themes/demo/assets/images/gallery/gallery5.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"";
        // line 156
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery5.jpg"));
        echo "\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 65.9211%; top: 649.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-543\" rel=\"group\" target=\"\" href=\"";
        // line 165
        echo url("/themes/demo/assets/images/gallery/gallery6.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"";
        // line 168
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery6.jpg"));
        echo "\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 0.219298%; top: 664.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-538\" rel=\"group\" target=\"\" href=\"";
        // line 177
        echo url("/themes/demo/assets/images/gallery/gallery7.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"";
        // line 180
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery7.jpg"));
        echo "\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 0.219298%; top: 880.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-539\" rel=\"group\" target=\"\" href=\"";
        // line 189
        echo url("/themes/demo/assets/images/gallery/gallery9.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"";
        // line 192
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery9.jpg"));
        echo "\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 880.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-533\" rel=\"group\" target=\"\" href=\"";
        // line 201
        echo url("/themes/demo/assets/images/gallery/gallery8.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"";
        // line 204
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery8.jpg"));
        echo "\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 0.219298%; top: 1096.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-536\" rel=\"group\" target=\"\" href=\"";
        // line 213
        echo url("/themes/demo/assets/images/gallery/gallery11.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"";
        // line 216
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery11.jpg"));
        echo "\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 1096.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-535\" rel=\"group\" target=\"\" href=\"";
        // line 224
        echo url("/themes/demo/assets/images/gallery/gallery10.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 226
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery10.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 2.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-540\" rel=\"group\" target=\"\" href=\"";
        // line 232
        echo url("/themes/demo/assets/images/gallery/gallery12.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 234
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery12.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>
                                        
                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 65.9211%; top: 2.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-541\" rel=\"group\" target=\"\" href=\"";
        // line 240
        echo url("/themes/demo/assets/images/gallery/gallery13.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 242
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery13.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>
                                        
                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"";
        // line 248
        echo url("/themes/demo/assets/images/gallery/gallery14.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 250
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery14.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"";
        // line 256
        echo url("/themes/demo/assets/images/gallery/gallery15.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 258
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery15.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"";
        // line 264
        echo url("/themes/demo/assets/images/gallery/gallery16.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 266
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery16.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"";
        // line 272
        echo url("/themes/demo/assets/images/gallery/gallery17.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 274
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery17.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>
                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"";
        // line 279
        echo url("/themes/demo/assets/images/gallery/gallery18.jpg");
        echo "\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"";
        // line 281
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/gallery/gallery18.jpg"));
        echo "\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        
                                    </div>
                                    <!-- END simple mod-->

                                </div>

                                <script type=\"text/javascript\" charset=\"utf-8\" async=\"\" defer=\"\">
                                    (function() {
                                        var osGallery59 = function(container, params) {
                                            if (!(this instanceof osGallery59)) return new osGallery59(container, params);

                                            var defaults = {
                                                minImgEnable: 1,
                                                spaceBetween: 2.5,
                                                minImgSize: 200,
                                                numColumns: 3,
                                                fancSettings: {
                                                    wrapCSS: 'os-os_fancybox-window',
                                                    openEffect: '',
                                                    openSpeed: 500,
                                                    closeEffect: '',
                                                    closeSpeed: 500,
                                                    prevEffect: '',
                                                    nextEffect: '',
                                                    nextSpeed: 800,
                                                    prevSpeed: 800,
                                                    loop: 0,
                                                    closeBtn: 1,
                                                    arrows: 1,
                                                    arrowsPosition: 1,
                                                    nextClick: 0,
                                                    mouseWheel: 0,
                                                    autoPlay: 0,
                                                    playSpeed: 3000,
                                                    buttons: new Array(),
                                                    downloadButton: 0
                                                }
                                            };

                                            for (var param in defaults) {
                                                if (!params[param]) {
                                                    params[param] = defaults[param];
                                                }
                                            }
                                            // gallery settings
                                            var osg = this;
                                            // Params
                                            osg.params = params || defaults;

                                            osg.getImgBlockWidth = function(numColumns) {
                                                if (typeof(numColumns) == 'undefined') numColumns = osg.params.numColumns;
                                                var checkSpaceBetween = 2.5;
                                                spaceBetween = osg.params.spaceBetween * 2;
                                                mainBlockW = jQuerGall(container).width();

                                                var percentGridSizer = Math.round(100 / numColumns);
                                                var gridSizer = Math.round(mainBlockW / numColumns);

                                                imgBlockWpx = Math.floor(((mainBlockW - (spaceBetween * numColumns)) / numColumns - 1));

                                                imgBlockW = percentGridSizer * imgBlockWpx / gridSizer - 0.25;

                                                if (!checkSpaceBetween) imgBlockW = percentGridSizer;

                                                jQuerGall(\".grid-sizer\").css('width', percentGridSizer + \"%\");
                                                jQuerGall(\".grid-item\").css('width', imgBlockW + \"%\");
                                                var sizeAwesome = ((imgBlockW * mainBlockW) / 100) / 11 + \"px\";
                                                jQuerGall(container + \" .andrea-effect .andrea-zoom-in\").css({
                                                    'width': sizeAwesome,
                                                    'height': sizeAwesome
                                                });

                                                var fontSizetext = ((imgBlockW * mainBlockW) / 100) / 15 + \"px\";
                                                jQuerGall(container + \" .grid-item\").css({
                                                    'font-size': fontSizetext,
                                                    'line-height': fontSizetext
                                                });

                                                return imgBlockW;
                                            }

                                            osg.isotope = function() {
                                                jQuerGall(container + ' .grid').isotope({
                                                    itemSelector: '.grid-item',
                                                    percentPosition: true,
                                                    masonry: {
                                                        columnWidth: '.grid-sizer'
                                                    },
                                                });
                                            }

                                            osg.reloadIsotope = function() {
                                                jQuerGall(container + ' .grid').isotope();
                                            }

                                            osg.reloadAfterLazyLoad = function() {
                                                jQuerGall('.grid').isotope('reloadItems');
                                                osg.resizeGallery();
                                                jQuerGall(container + ' .grid').imagesLoaded(function() {
                                                    osg.isotope();
                                                });
                                            }

                                            //initialize function
                                            osg.init = function() {
                                                    imgBlockW = osg.getImgBlockWidth();
                                                    jQuerGall(container + \" .grid-item\").css(\"width\", imgBlockW + \"%\");

                                                    jQuerGall(container + \" .os-cat-tab-images div[id^='cat-']\").each(function(index, el) {
                                                        catId = jQuerGall(this).data(\"cat-id\");
                                                        if (catId) {
                                                            jQuerGall(this).find(\".os_fancybox-\" + catId).os_fancybox({
                                                                beforeShow: function() {
                                                                    if (osg.params.fancSettings.arrows && osg.params.fancSettings.arrowsPosition == 0 && !jQuerGall(\".gallery-fanc-next\").length) {
                                                                        jQuerGall(\".os_fancybox-nav.os_fancybox-prev,.os_fancybox-nav.os_fancybox-next\").remove();
                                                                        html = '<span title=\"Previous\" class=\"gallery-fanc-next\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                                                        html += '<span title=\"Next\" class=\"gallery-fanc-prev\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                                                        jQuerGall(\"body\").prepend(html);
                                                                    }
                                                                },
                                                                beforeClose: function() {
                                                                    var href = window.location.href;
                                                                    jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").remove();
                                                                    if (href.indexOf('&os_image_id') > -1)
                                                                        history.pushState(href, null, href.substring(0, href.indexOf('&os_image_id')));
                                                                    else
                                                                        history.pushState(href, null, href.substring(0, href.indexOf('?os_image_id')));
                                                                },
                                                                beforeLoad: function() {
                                                                    var id = this.element.attr('id');
                                                                    var href = window.location.href;

                                                                    if (href.indexOf('&os_image_id') > -1)
                                                                        history.pushState(null, null, href.substring(0, href.indexOf('&os_image_id')) + \"&\" + id);
                                                                    else if (href.indexOf('?os_image_id') > -1)
                                                                        history.pushState(href, null, href.substring(0, href.indexOf('?os_image_id')) + \"?\" + id);
                                                                    else if (href.indexOf('?') > -1 && href.indexOf('&') > -1 && href.indexOf('&os_image_id') == -1)
                                                                        history.pushState(null, null, href + '&' + id);
                                                                    else if (href.indexOf('&') == -1 && href.indexOf('?os_image_id') == -1)
                                                                        history.pushState(null, null, href + '?' + id);

                                                                },
                                                                afterShow: function() {
                                                                    var button = osg.params.fancSettings.buttons;
                                                                    var id = this.element.attr('id');
                                                                    var naturalWidth = jQuerGall(\"#img-\" + id.split('-')[1]).prop('naturalWidth');
                                                                    var fancAlias = this.element.attr('data-os_fancybox-alias');
                                                                    var divText = jQuerGall(\"#text-\" + id.split('-')[1]);
                                                                    var dataHtml = jQuerGall(\"#data-html-\" + id.split('-')[1]).html();

                                                                    if (fancAlias !== '') {
                                                                        var textSpan = jQuerGall(\".os_fancybox-title span\");
                                                                        if (textSpan.length > 0) {
                                                                            jQuerGall(\".os_fancybox-title span\").text(fancAlias);
                                                                        } else {
                                                                            jQuerGall(\".os_fancybox-title\").text(fancAlias);
                                                                        }
                                                                    }

                                                                    divText.css({
                                                                        'width': naturalWidth,
                                                                        'max-width': '100%'
                                                                    }).html(dataHtml);

                                                                    jQuerGall(\".os_fancybox-skin .os_fancybox-outer .os_fancybox-inner\").each(function() {

                                                                        var image = jQuerGall(\"img\", this);

                                                                        if (!jQuerGall.isEmptyObject(button)) {
                                                                            jQuerGall(this).css('position', 'relative');
                                                                            jQuerGall(this).append('<div id=\"sharing' + id.split('-')[1] + '\" class=\"sharing\"><div class=\"icons_os\" id=\"icons_os' + id.split('-')[1] + '\"></div><div class=\"icons_os_image\"></div>' + '</div>');

                                                                            for (var i = 0; i < button[id].length; i++) {
                                                                                jQuerGall(\"#icons_os\" + id.split('-')[1]).append(button[id][i]);
                                                                            };

                                                                            jQuerGall('[id^=icons_os] a').each(function() {
                                                                                jQuerGall(this).on('click', function(e) {
                                                                                    e.preventDefault();
                                                                                    window.open(this.href, 'default', \"height=800,width=600\");
                                                                                });
                                                                            });

                                                                            jQuerGall(\".icons_os_image\", this).on('click', function(event) {
                                                                                event.stopPropagation();
                                                                                if (jQuerGall(this).parent().find('.icons_os a').hasClass(\"zoomIn\")) {
                                                                                    jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomIn\");
                                                                                    jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomOut\");
                                                                                } else {
                                                                                    jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomOut\");
                                                                                    jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomIn\");
                                                                                }
                                                                            });
                                                                        }

                                                                        if (osg.params.fancSettings.downloadButton === 1 && image.length !== 0) {
                                                                            if (jQuerGall('#sharing' + id.split('-')[1]).length === 0) {
                                                                                jQuerGall(this).css('position', 'relative');
                                                                                jQuerGall(this).append('<div id=\"sharing' + id.split('-')[1] + '\" class=\"sharing\"></div>');
                                                                            }
                                                                            jQuerGall('#sharing' + id.split('-')[1]).append(
                                                                                '<a href=\"' + image.attr(\"src\") + '\" download>' + '<div class=\"icons_download\">' + '</div>' + '</a>');
                                                                            if (jQuerGall.isEmptyObject(button)) {
                                                                                jQuerGall('.icons_download').css('top', '5px');
                                                                            }
                                                                        }
                                                                    });

                                                                    jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").on('click', function() {
                                                                        jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").unbind();
                                                                    });
                                                                },
                                                                wrapCSS: osg.params.fancSettings.wrapCSS,
                                                                openEffect: osg.params.fancSettings.openEffect,
                                                                openSpeed: osg.params.fancSettings.openSpeed,

                                                                closeEffect: osg.params.fancSettings.closeEffect,
                                                                closeSpeed: osg.params.fancSettings.closeSpeed,

                                                                prevEffect: osg.params.fancSettings.prevEffect,
                                                                nextEffect: osg.params.fancSettings.nextEffect,

                                                                nextSpeed: osg.params.fancSettings.nextSpeed,
                                                                prevSpeed: osg.params.fancSettings.prevSpeed,

                                                                loop: osg.params.fancSettings.loop,
                                                                closeBtn: osg.params.fancSettings.closeBtn,
                                                                arrows: osg.params.fancSettings.arrows,
                                                                arrowsPosition: osg.params.fancSettings.arrowsPosition,
                                                                nextClick: osg.params.fancSettings.nextClick,
                                                                mouseWheel: osg.params.fancSettings.mouseWheel,
                                                                autoPlay: osg.params.fancSettings.autoPlay,
                                                                playSpeed: osg.params.fancSettings.playSpeed,

                                                                helpers: {
                                                                    title: {
                                                                        type: 'inside'
                                                                    },
                                                                    overlay: {
                                                                        locked: false,
                                                                        closeClick: 1,
                                                                        css: {
                                                                            'background': 'rgba(238,238,238,0)'
                                                                        }
                                                                    },
                                                                    thumbs: {
                                                                        width: 50,
                                                                        height: 50
                                                                    }
                                                                }
                                                            });
                                                        }
                                                    });
                                                    jQuerGall(container + \" .os-cat-tab-images div:first-child\").show();
                                                    jQuerGall(container + \" .osgalery-cat-tabs li:first-child a\").addClass(\"active\");
                                                    var curCatId = jQuerGall(container + \" .osgalery-cat-tabs a.active\").attr('data-cat-id');
                                                    var curEnd = jQuerGall(container + \" .osgalery-cat-tabs a.active\").attr('data-end');
                                                    jQuerGall(\"#load-more-59\").attr('data-cat-id', curCatId);
                                                    jQuerGall(\"#load-more-59\").attr('data-end', curEnd);

                                                    jQuerGall(container + \" .osgalery-cat-tabs a\").click(function(e) {
                                                        e.preventDefault();
                                                        jQuerGall('li a').removeClass(\"active\");
                                                        jQuerGall(container + \" .os-cat-tab-images>div\").hide();
                                                        jQuerGall(this).addClass(\"active\");
                                                        curCatId = jQuerGall(container + \" .osgalery-cat-tabs a.active\").attr('data-cat-id');
                                                        jQuerGall(\"#load-more-59\").attr('data-cat-id', curCatId);
                                                        curEnd = jQuerGall(container + \" .osgalery-cat-tabs a.active\").attr('data-end');
                                                        if (curEnd != -1)
                                                            jQuerGall(\"#load-more-59\").removeAttr(\"disabled\");
                                                        jQuerGall(\"#load-more-59\").attr('data-end', curEnd);
                                                        jQuerGall(jQuerGall(this).attr(\"href\")).fadeTo(500, 1);
                                                        osg.reloadIsotope();
                                                    });

                                                    osg.resizeGallery = function() {
                                                        imgBlockW = osg.getImgBlockWidth();
                                                        jQuerGall(container + \" .grid-item\").css(\"width\", imgBlockW + \"%\");
                                                    }

                                                    jQuerGall(window).resize(function(event) {
                                                        osg.resizeGallery();
                                                    });
                                                    osg.isotope();
                                                }
                                                // jQuerGall(container + ' .grid').imagesLoaded(function(){
                                            osg.init();
                                            // });
                                        }
                                        window.osGallery59 = osGallery59;
                                    })();

                                    jQuery(window).on('load', function(\$) {
                                        var gallery = new osGallery59(\".os-gallery-tabs-main-59\", {
                                            minImgEnable: 1,
                                            spaceBetween: 2.5,
                                            minImgSize: 200,
                                            numColumns: 3,
                                            fancSettings: {
                                                wrapCSS: 'os-os_fancybox-window',
                                                openEffect: \"fade\",
                                                openSpeed: 500,
                                                closeEffect: \"fade\",
                                                closeSpeed: 500,
                                                prevEffect: \"elastic\",
                                                nextEffect: \"elastic\",
                                                nextSpeed: 500,
                                                prevSpeed: 500,
                                                loop: 1,
                                                closeBtn: 1,
                                                arrows: 1,
                                                arrowsPosition: 0,
                                                nextClick: 1,
                                                mouseWheel: 1,
                                                autoPlay: 0,
                                                playSpeed: 3000,
                                                buttons: {
                                                    \"os_image_id-537\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery4.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery4.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery4.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery4.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery4.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-536\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery11.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery11.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery11.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery11.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery11.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-535\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery10.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery10.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery10.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery10.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery10.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-534\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534&amp;title=My Favorite house&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2F806-1e6f343e6-74dc-52aa-555b-ececcbe926d7-minF5592C00-C95C-244E-DD3A-8DEBADC3EA4C.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534&amp;st.comments=My Favorite house&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2F806-1e6f343e6-74dc-52aa-555b-ececcbe926d7-minF5592C00-C95C-244E-DD3A-8DEBADC3EA4C.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534&amp;text=My Favorite house&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2F806-1e6f343e6-74dc-52aa-555b-ececcbe926d7-minF5592C00-C95C-244E-DD3A-8DEBADC3EA4C.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534&amp;description=My Favorite house&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2F806-1e6f343e6-74dc-52aa-555b-ececcbe926d7-minF5592C00-C95C-244E-DD3A-8DEBADC3EA4C.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534&amp;title=My Favorite house&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2F806-1e6f343e6-74dc-52aa-555b-ececcbe926d7-minF5592C00-C95C-244E-DD3A-8DEBADC3EA4C.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-533\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery8.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery8.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery8.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery8.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery8.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-532\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery3.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery3.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery3.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery3.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery3.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-538\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery7.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery7.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery7.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery7.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery7.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-539\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-540\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery1.jpg\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery1.jpg\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery1.jpg\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery1.jpg\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery1.jpg\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-541\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery2.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery2.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery2.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery2.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery2.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-542\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery5.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery5.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery5.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery5.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery5.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-543\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery6.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery6.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery6.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery6.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery6.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"]
                                                },
                                                downloadButton: 1
                                            }
                                        });
                                        // add load more script
                                        var limEnd = 5;
                                        jQuerGall(\"#load-more-59\").on(\"click\", function() {
                                            var path = \"index.php?option=com_osgallery&format=raw\";
                                            jQuerGall.post(
                                                path, {
                                                    task: \"loadMoreButton\",
                                                    Itemid: '101',
                                                    end: jQuerGall(\"#load-more-59\").attr('data-end'),
                                                    catId: jQuerGall(\"#load-more-59\").attr('data-cat-id'),
                                                    galId: 59
                                                },
                                                function(data) {
                                                    if (data.success) {
                                                        jQuerGall(\"#cat-\" + data.catId).append(data.html);
                                                        jQuerGall(\"#cat-\" + data.catId + \", #load-more-59\").attr('data-end', data.limEnd);
                                                        if (data.limEnd == -1)
                                                            jQuerGall(\"#load-more-59\").attr(\"disabled\", \"disabled\");
                                                        limEnd = data.limEnd;
                                                        gallery.reloadAfterLazyLoad();
                                                    }
                                                }, 'json');
                                        });
                                        // end load more script

                                        // add social sharing script
                                        var href = window.location.href;
                                        var img_el_id = '';
                                        var pos = href.indexOf('os_image_id');
                                        if (pos > -1)
                                            img_el_id = href.substring(pos);

                                        if (img_el_id && img_el_id.indexOf('os_image_id') > -1) {
                                            if (document.getElementById(img_el_id) !== null) {
                                                jQuerGall('#' + img_el_id).trigger('click');
                                            }
                                        }
                                        // end sharing script
                                    });
                                </script>
                            </div>

                            <h3>    <div class=\"os-gallery-tabs-main-63\">


    <script>
        (function () {
            var osGallery63 = function (container, params) {
                if (!(this instanceof osGallery63)) return new osGallery63(container, params);

                var defaults = {
                    minImgEnable : 1,
                    spaceBetween: 2.5,
                    minImgSize: 200,
                    numColumns: 3,
                    fancSettings:{
                        wrapCSS: 'os-os_fancybox-window',
                        openEffect: '',
                        openSpeed: 500,
                        closeEffect: '',
                        closeSpeed: 500,
                        prevEffect: '',
                        nextEffect: '',
                        nextSpeed: 800,
                        prevSpeed: 800,
                        loop: 0,
                        closeBtn: 1,
                        arrows: 1,
                        arrowsPosition: 1,
                        nextClick: 0,
                        mouseWheel: 0,
                        autoPlay: 0,
                        playSpeed: 3000,
                        buttons: new Array(),
                        downloadButton: 0                        
                    }
                };

                for (var param in defaults) {
                  if (!params[param]){
                    params[param] = defaults[param];
                  }
                }
                // gallery settings
                var osg = this;
                // Params
                osg.params = params || defaults;

                osg.getImgBlockWidth = function (numColumns){
                    if(typeof(numColumns) == 'undefined')numColumns = osg.params.numColumns;
                    spaceBetween = osg.params.spaceBetween*2;
                    mainBlockW = jQuerGall(container).width();
                    imgBlockW = ((((mainBlockW-(spaceBetween*numColumns))/numColumns)-1)*100)/mainBlockW;
                    if(osg.params.minImgEnable){
                        if(((imgBlockW*mainBlockW)/100) < osg.params.minImgSize){
                            numColumns--;
                            osg.getImgBlockWidth(numColumns);
                        }
                    }

                    var sizeAwesome = ((imgBlockW*mainBlockW)/100)/11+\"px\";
                    jQuerGall(container +\" .andrea-effect .andrea-zoom-in\").css({'width': sizeAwesome, 'height': sizeAwesome });

                    var fontSizetext = ((imgBlockW*mainBlockW)/100)/15+\"px\";
                    jQuerGall(container +\" .img-block\").css({'font-size': fontSizetext, 'line-height': fontSizetext });

                    return imgBlockW;
                }

                //initialize function
                osg.init = function (){
                    imgBlockW = osg.getImgBlockWidth();
                    jQuerGall(container+\" .img-block\").css(\"width\",imgBlockW+\"%\");

                    jQuerGall(container+\" .os-cat-tab-images div[id^='cat-']\").each(function(index, el) {
                        catId = jQuerGall(this).data(\"cat-id\");
                        if(catId){

                            jQuerGall(this).find(\".os_fancybox-\"+catId ).os_fancybox({
                                beforeShow: function(){

                                    if(osg.params.fancSettings.arrows && osg.params.fancSettings.arrowsPosition == 0 
                                        && !jQuerGall(\".gallery-fanc-next\").length ){
                                        jQuerGall(\".os_fancybox-nav.os_fancybox-prev,.os_fancybox-nav.os_fancybox-next\").remove();
                                        html = '<span title=\"Previous\" class=\"gallery-fanc-next\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                        html+= '<span title=\"Next\" class=\"gallery-fanc-prev\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                        jQuerGall(\"body\").prepend(html);
                                    }   
                                },
                                beforeClose: function(){
                                    var href = window.location.href;
                                    jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").remove();
                                    if (href.indexOf('&os_image_id') > -1)
                                        history.pushState (href, null, href.substring(0, href.indexOf('&os_image_id')));
                                    else 
                                        history.pushState (href, null, href.substring(0, href.indexOf('?os_image_id')));
                                },
                                beforeLoad: function() {
                                    var id = this.element.attr('id');
                                    var href = window.location.href;

                                    if (href.indexOf('&os_image_id') > -1) 
                                        history.pushState (null, null, href.substring(0, href.indexOf('&os_image_id') )+ \"&\" + id);
                                    else if (href.indexOf('?os_image_id') > -1) 
                                        history.pushState (href, null, href.substring(0, href.indexOf('?os_image_id')) + \"?\" + id);
                                    else if (href.indexOf('?') > -1 && href.indexOf('&') > -1 && href.indexOf('&os_image_id') == -1)
                                        history.pushState(null, null, href + '&' + id);
                                    else if ( href.indexOf('&') == -1 && href.indexOf('?os_image_id') == -1)
                                        history.pushState(null, null, href + '?' + id);

                                },
                                afterShow: function() {

                                    var button = osg.params.fancSettings.buttons;
                                    var id = this.element.attr('id');
                                    var naturalWidth = jQuerGall(\"#img-\" + id.split('-')[1]).prop('naturalWidth') ;
                                    var fancAlias = this.element.attr('data-os_fancybox-alias');
                                    var divText = jQuerGall(\"#text-\" + id.split('-')[1]);
                                    var dataHtml = jQuerGall(\"#data-html-\" + id.split('-')[1]).html();

                                    if (fancAlias !== '') {
                                        var textSpan = jQuerGall(\".os_fancybox-title span\");
                                        if (textSpan.length > 0) {
                                            jQuerGall(\".os_fancybox-title span\").text(fancAlias);
                                        } else {
                                            jQuerGall(\".os_fancybox-title\").text(fancAlias);
                                        }
                                    }

                                    divText.css({'width': naturalWidth, 'max-width': '100%'} ).html(dataHtml);

                                    jQuerGall(\".os_fancybox-skin .os_fancybox-outer .os_fancybox-inner\").each(function(){

                                        if (!jQuerGall.isEmptyObject(button)) {

                                            jQuerGall(this).css('position', 'relative');
                                            jQuerGall(this).append('<div id=\"sharing'+ id.split('-')[1] + '\" class=\"sharing\"><div class=\"icons_os\" id=\"icons_os'
                                                + id.split('-')[1]+'\"></div><div class=\"icons_os_image\"></div>'
                                                + '</div>');

                                            for (var i = 0; i < button[id].length; i++) {
                                                jQuerGall(\"#icons_os\"+id.split('-')[1]).append(button[id][i]);
                                            };

                                            jQuerGall('[id^=icons_os] a').each(function(){
                                                jQuerGall(this).on('click', function(e){
                                                    e.preventDefault();
                                                    window.open(this.href, 'default', \"height=800,width=600\");
                                                });
                                            });

                                            jQuerGall(\".icons_os_image\", this).on('click', function(event){
                                                event.stopPropagation();
                                                if (jQuerGall(this).parent().find('.icons_os a').hasClass(\"zoomIn\")) {
                                                    jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomIn\");
                                                    jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomOut\");
                                                } else {
                                                    jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomOut\");
                                                    jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomIn\");
                                                }
                                            });
                                        }

                                        if ( osg.params.fancSettings.downloadButton === 1) {
                                            if (jQuerGall('#sharing' + id.split('-')[1]).length === 0) {
                                                jQuerGall(this).css('position', 'relative');
                                                jQuerGall(this).append('<div id=\"sharing'+ id.split('-')[1] + '\" class=\"sharing\"></div>');
                                            } 
                                            jQuerGall('#sharing' + id.split('-')[1]).append(
                                                '<a href=\"' + jQuerGall(\"img\", this).attr(\"src\") 
                                                + '\" download>'
                                                + '<div class=\"icons_download\">' 
                                                + '</div>' 
                                                + '</a>');
                                            if (jQuerGall.isEmptyObject(button)) {
                                                jQuerGall('.icons_download').css('top', '5px');
                                            }
                                        }

                                    });

                                    jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").on('click', function(){
                                        jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").unbind();
                                    });                            
                                },
                                wrapCSS    : osg.params.fancSettings.wrapCSS,
                                openEffect : osg.params.fancSettings.openEffect,
                                openSpeed  : osg.params.fancSettings.openSpeed,

                                closeEffect : osg.params.fancSettings.closeEffect,
                                closeSpeed  : osg.params.fancSettings.closeSpeed,

                                prevEffect : osg.params.fancSettings.prevEffect,
                                nextEffect : osg.params.fancSettings.nextEffect,

                                nextSpeed: osg.params.fancSettings.nextSpeed,
                                prevSpeed: osg.params.fancSettings.prevSpeed,

                                loop: osg.params.fancSettings.loop,
                                closeBtn: osg.params.fancSettings.closeBtn,
                                arrows: osg.params.fancSettings.arrows,
                                arrowsPosition: osg.params.fancSettings.arrowsPosition,
                                nextClick: osg.params.fancSettings.nextClick,
                                mouseWheel: osg.params.fancSettings.mouseWheel,
                                autoPlay: osg.params.fancSettings.autoPlay,
                                playSpeed: osg.params.fancSettings.playSpeed,

                                helpers : {
                                    title : {type : 'inside'},
                                    overlay : {locked: false,closeClick : 1,css : {'background' : 'rgba(238,238,238,0)'}}
                                                                            ,thumbs : {width  : 50,height : 50}                                    },
                            });
                        }
                    });

                    jQuerGall(container+\" .os-cat-tab-images div:first-child\").show();
                    jQuerGall(container+\" .osgalery-cat-tabs li:first-child a\").addClass(\"active\");
                    var curCatId = jQuerGall(container+\" .osgalery-cat-tabs a.active\").attr('data-cat-id');
                    var curEnd = jQuerGall(container+\" .osgalery-cat-tabs a.active\").attr('data-end');
                    jQuerGall(\"#load-more-63\").attr('data-cat-id', curCatId);
                    jQuerGall(\"#load-more-63\").attr('data-end', curEnd);

                    jQuerGall(container+\" .osgalery-cat-tabs a\").click(function(e) {
                        e.preventDefault();
                        jQuerGall('li a').removeClass(\"active\");
                        jQuerGall(container+\" .os-cat-tab-images>div\").hide();
                        jQuerGall(this).addClass(\"active\");
                        curCatId = jQuerGall(container+\" .osgalery-cat-tabs a.active\").attr('data-cat-id');
                        jQuerGall(\"#load-more-63\").attr('data-cat-id', curCatId);
                        curEnd = jQuerGall(container+\" .osgalery-cat-tabs a.active\").attr('data-end');
                        if(curEnd != -1)
                            jQuerGall(\"#load-more-63\").removeAttr(\"disabled\");
                        jQuerGall(\"#load-more-63\").attr('data-end', curEnd);
                        jQuerGall(jQuerGall(this).attr(\"href\")).fadeTo(500, 1);

                    });

                    osg.resizeGallery = function (){
                        imgBlockW = osg.getImgBlockWidth();
                        jQuerGall(container+\" .img-block\").css(\"width\",imgBlockW+\"%\");
                    }

                    jQuerGall(window).resize(function(event) {
                        osg.resizeGallery();
                    });
                }
                osg.loadMore = function() {

                }
                osg.init();
            }
            window.osGallery63 = osGallery63;
        })();
        jQuery(window).on('load',function(\$) {
            var gallery= new osGallery63(\".os-gallery-tabs-main-63\",{
                minImgEnable : 1,
                spaceBetween: 2.5,
                minImgSize: 200,
                numColumns: 3,
                fancSettings:{
                    wrapCSS: 'os-os_fancybox-window',
                    openEffect: \"fade\",
                    openSpeed: 500,
                    closeEffect: \"fade\",
                    closeSpeed: 500,
                    prevEffect: \"elastic\",
                    nextEffect: \"elastic\",
                    nextSpeed: 500,
                    prevSpeed: 500,
                    loop: 1,
                    closeBtn: 1,
                    arrows: 1,
                    arrowsPosition: 0,
                    nextClick: 0,
                    mouseWheel: 1,
                    autoPlay: 0,
                    playSpeed: 3000,
                    buttons: [],
                    downloadButton: 0                    }
            });

            // add load more script
            var limEnd = 5;
            jQuerGall(\"#load-more-63\").on(\"click\", function() {
                var path = \"index.php?option=com_osgallery&format=raw\";
                jQuerGall.post(
                    path,
                    {
                        task : \"loadMoreButton\",
                        Itemid: '101',
                        end : jQuerGall(\"#load-more-63\").attr('data-end'),
                        catId : jQuerGall(\"#load-more-63\").attr('data-cat-id'),
                        galId : 63                        },
                    function(data) {
                        if(data.success){
                            jQuerGall(\"#cat-\"+data.catId).append(data.html);
                            jQuerGall(\"#cat-\"+ data.catId+ \", #load-more-63\").attr('data-end', data.limEnd);
                            if(data.limEnd == -1)
                                jQuerGall(\"#load-more-63\").attr(\"disabled\",\"disabled\");
                            limEnd = data.limEnd;
                            gallery.resizeGallery();
                        }
                    }, 'json');
            });
            // end load more script

            // add social sharing script
            var href = window.location.href;
            var img_el_id = '';
            var pos = href.indexOf('os_image_id'); 
            if (pos > -1) 
                img_el_id = href.substring(pos);

            if(img_el_id && img_el_id.indexOf('os_image_id') > -1)  {
                 if(document.getElementById(img_el_id) !== null){
                     jQuerGall('#' + img_el_id).trigger('click');
                 }
            }
            // end sharing script               
        });
    </script>
</div>
</h3>
                           
                            <div class=\"os-gallery-all-in-one-main-1\">
       
                                <script>
                                    (function() {
                                        var osGallery1 = function(container, params) {
                                            if (!(this instanceof osGallery1)) return new osGallery1(container, params);

                                            var defaults = {
                                                minImgEnable: 1,
                                                spaceBetween: 2.5,
                                                minImgSize: 200,
                                                numColumns: 3,
                                                fancSettings: {
                                                    wrapCSS: 'os-os_fancybox-window',
                                                    openEffect: '',
                                                    openSpeed: 500,
                                                    closeEffect: '',
                                                    closeSpeed: 500,
                                                    prevEffect: '',
                                                    nextEffect: '',
                                                    nextSpeed: 800,
                                                    prevSpeed: 800,
                                                    loop: 0,
                                                    closeBtn: 1,
                                                    arrows: 1,
                                                    arrowsPosition: 1,
                                                    nextClick: 0,
                                                    mouseWheel: 0,
                                                    autoPlay: 0,
                                                    playSpeed: 3000,
                                                    buttons: new Array(),
                                                    downloadButton: 0
                                                }
                                            };

                                            for (var param in defaults) {
                                                if (!params[param]) {
                                                    params[param] = defaults[param];
                                                }
                                            }
                                            // gallery settings
                                            var osg = this;
                                            // Params
                                            osg.params = params || defaults;

                                            osg.getImgBlockWidth = function(numColumns) {
                                                if (typeof(numColumns) == 'undefined') numColumns = osg.params.numColumns;
                                                spaceBetween = osg.params.spaceBetween * 2;
                                                mainBlockW = jQuerGall(container).width();
                                                imgBlockW = ((((mainBlockW - (spaceBetween * numColumns)) / numColumns) - 1) * 100) / mainBlockW;
                                                if (osg.params.minImgEnable) {
                                                    if (((imgBlockW * mainBlockW) / 100) < osg.params.minImgSize) {
                                                        numColumns--;
                                                        osg.getImgBlockWidth(numColumns);
                                                    }
                                                }

                                                var sizeAwesome = ((imgBlockW * mainBlockW) / 100) / 11 + \"px\";
                                                jQuerGall(container + \" .andrea-effect .andrea-zoom-in\").css({
                                                    'width': sizeAwesome,
                                                    'height': sizeAwesome
                                                });

                                                var fontSizetext = ((imgBlockW * mainBlockW) / 100) / 15 + \"px\";
                                                jQuerGall(container + \" .img-block\").css({
                                                    'font-size': fontSizetext,
                                                    'line-height': fontSizetext
                                                });

                                                return imgBlockW;
                                            }

                                            //initialize function
                                            osg.init = function() {
                                                imgBlockW = osg.getImgBlockWidth();
                                                jQuerGall(container + \" .all-in-one-block .img-block:first-child\").css(\"width\", imgBlockW + \"%\");
                                                jQuerGall(container + \" .os-cat-tab-images\").show();

                                                jQuerGall(container + \" .os-cat-tab-images div[id^='cat-']\").each(function(index, el) {
                                                    catId = jQuerGall(this).data(\"cat-id\");
                                                    if (catId) {
                                                        jQuerGall(this).find(\".os_fancybox-\" + catId).os_fancybox({
                                                            beforeShow: function() {
                                                                if (osg.params.fancSettings.arrows && osg.params.fancSettings.arrowsPosition == 0 && !jQuerGall(\".gallery-fanc-next\").length) {
                                                                    jQuerGall(\".os_fancybox-nav.os_fancybox-prev,.os_fancybox-nav.os_fancybox-next\").remove();
                                                                    html = '<span title=\"Previous\" class=\"gallery-fanc-next\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                                                    html += '<span title=\"Next\" class=\"gallery-fanc-prev\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                                                    jQuerGall(\"body\").prepend(html);
                                                                }
                                                            },
                                                            beforeClose: function() {
                                                                var href = window.location.href;
                                                                jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").remove();
                                                                if (href.indexOf('&os_image_id') > -1)
                                                                    history.pushState(href, null, href.substring(0, href.indexOf('&os_image_id')));
                                                                else
                                                                    history.pushState(href, null, href.substring(0, href.indexOf('?os_image_id')));
                                                            },
                                                            beforeLoad: function() {
                                                                var id = this.element.attr('id');
                                                                var href = window.location.href;

                                                                if (href.indexOf('&os_image_id') > -1)
                                                                    history.pushState(null, null, href.substring(0, href.indexOf('&os_image_id')) + \"&\" + id);
                                                                else if (href.indexOf('?os_image_id') > -1)
                                                                    history.pushState(href, null, href.substring(0, href.indexOf('?os_image_id')) + \"?\" + id);
                                                                else if (href.indexOf('?') > -1 && href.indexOf('&') > -1 && href.indexOf('&os_image_id') == -1)
                                                                    history.pushState(null, null, href + '&' + id);
                                                                else if (href.indexOf('&') == -1 && href.indexOf('?os_image_id') == -1)
                                                                    history.pushState(null, null, href + '?' + id);

                                                            },
                                                            afterShow: function() {
                                                                var button = osg.params.fancSettings.buttons;
                                                                var id = this.element.attr('id');
                                                                var naturalWidth = jQuerGall(\"#img-\" + id.split('-')[1]).prop('naturalWidth');
                                                                var fancAlias = this.element.attr('data-os_fancybox-alias');
                                                                var divText = jQuerGall(\"#text-\" + id.split('-')[1]);
                                                                var dataHtml = jQuerGall(\"#data-html-\" + id.split('-')[1]).html();

                                                                if (fancAlias !== '') {
                                                                    var textSpan = jQuerGall(\".os_fancybox-title span\");
                                                                    if (textSpan.length > 0) {
                                                                        jQuerGall(\".os_fancybox-title span\").text(fancAlias);
                                                                    } else {
                                                                        jQuerGall(\".os_fancybox-title\").text(fancAlias);
                                                                    }
                                                                }

                                                                divText.css({
                                                                    'width': naturalWidth,
                                                                    'max-width': '100%'
                                                                }).html(dataHtml);

                                                                jQuerGall(\".os_fancybox-skin .os_fancybox-outer .os_fancybox-inner\").each(function() {

                                                                    if (!jQuerGall.isEmptyObject(button)) {
                                                                        jQuerGall(this).css('position', 'relative');
                                                                        jQuerGall(this).append('<div id=\"sharing' + id.split('-')[1] + '\" class=\"sharing\"><div class=\"icons_os\" id=\"icons_os' + id.split('-')[1] + '\"></div><div class=\"icons_os_image\"></div>' + '</div>');

                                                                        for (var i = 0; i < button[id].length; i++) {
                                                                            jQuerGall(\"#icons_os\" + id.split('-')[1]).append(button[id][i]);
                                                                        };

                                                                        jQuerGall('[id^=icons_os] a').each(function() {
                                                                            jQuerGall(this).on('click', function(e) {
                                                                                e.preventDefault();
                                                                                window.open(this.href, 'default', \"height=800,width=600\");
                                                                            });
                                                                        });

                                                                        jQuerGall(\".icons_os_image\", this).on('click', function(event) {
                                                                            event.stopPropagation();
                                                                            if (jQuerGall(this).parent().find('.icons_os a').hasClass(\"zoomIn\")) {
                                                                                jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomIn\");
                                                                                jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomOut\");
                                                                            } else {
                                                                                jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomOut\");
                                                                                jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomIn\");
                                                                            }
                                                                        });
                                                                    }

                                                                    if (osg.params.fancSettings.downloadButton === 1) {
                                                                        if (jQuerGall('#sharing' + id.split('-')[1]).length === 0) {
                                                                            jQuerGall(this).css('position', 'relative');
                                                                            jQuerGall(this).append('<div id=\"sharing' + id.split('-')[1] + '\" class=\"sharing\"></div>');
                                                                        }
                                                                        jQuerGall('#sharing' + id.split('-')[1]).append(
                                                                            '<a href=\"' + jQuerGall(\"img\", this).attr(\"src\") + '\" download>' + '<div class=\"icons_download\">' + '</div>' + '</a>');
                                                                        if (jQuerGall.isEmptyObject(button)) {
                                                                            jQuerGall('.icons_download').css('top', '5px');
                                                                        }
                                                                    }
                                                                });

                                                                jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").on('click', function() {
                                                                    jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").unbind();
                                                                });
                                                            },
                                                            wrapCSS: osg.params.fancSettings.wrapCSS,
                                                            openEffect: osg.params.fancSettings.openEffect,
                                                            openSpeed: osg.params.fancSettings.openSpeed,

                                                            closeEffect: osg.params.fancSettings.closeEffect,
                                                            closeSpeed: osg.params.fancSettings.closeSpeed,

                                                            prevEffect: osg.params.fancSettings.prevEffect,
                                                            nextEffect: osg.params.fancSettings.nextEffect,

                                                            nextSpeed: osg.params.fancSettings.nextSpeed,
                                                            prevSpeed: osg.params.fancSettings.prevSpeed,

                                                            loop: osg.params.fancSettings.loop,
                                                            closeBtn: osg.params.fancSettings.closeBtn,
                                                            arrows: osg.params.fancSettings.arrows,
                                                            arrowsPosition: osg.params.fancSettings.arrowsPosition,
                                                            nextClick: osg.params.fancSettings.nextClick,
                                                            mouseWheel: osg.params.fancSettings.mouseWheel,
                                                            autoPlay: osg.params.fancSettings.autoPlay,
                                                            playSpeed: osg.params.fancSettings.playSpeed,

                                                            helpers: {
                                                                title: {
                                                                    type: 'inside'
                                                                },
                                                                overlay: {
                                                                    locked: false,
                                                                    closeClick: 1,
                                                                    css: {
                                                                        'background': 'rgba(0, 0, 0, 0.75)'
                                                                    }
                                                                },
                                                                buttons: {},
                                                                thumbs: {
                                                                    width: 200,
                                                                    height: 200
                                                                }
                                                            }
                                                        });
                                                    }
                                                });

                                                osg.resizeGallery = function() {
                                                    imgBlockW = osg.getImgBlockWidth();
                                                    jQuerGall(container + \" .all-in-one-block .img-block:first-child\").css(\"width\", imgBlockW + \"%\");
                                                }

                                                jQuerGall(window).resize(function(event) {
                                                    osg.resizeGallery();
                                                });
                                            }

                                            osg.init();
                                        }
                                        window.osGallery1 = osGallery1;
                                    })();
                                    jQuery(window).on('load', function(\$) {
                                        var gallery = new osGallery1(\".os-gallery-all-in-one-main-1\", {
                                            minImgEnable: 1,
                                            spaceBetween: 0,
                                            minImgSize: 225,
                                            numColumns: 1,
                                            fancSettings: {
                                                wrapCSS: 'os-os_fancybox-window',
                                                openEffect: \"elastic\",
                                                openSpeed: 500,
                                                closeEffect: \"elastic\",
                                                closeSpeed: 500,
                                                prevEffect: \"elastic\",
                                                nextEffect: \"elastic\",
                                                nextSpeed: 500,
                                                prevSpeed: 500,
                                                loop: 1,
                                                closeBtn: 1,
                                                arrows: 1,
                                                arrowsPosition: 0,
                                                nextClick: 0,
                                                mouseWheel: 1,
                                                autoPlay: 0,
                                                playSpeed: 3000,
                                                buttons: {
                                                    \"os_image_id-127\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-6A19A243D-8038-23DF-2E09-A19BD7C275FE.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-6A19A243D-8038-23DF-2E09-A19BD7C275FE.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-6A19A243D-8038-23DF-2E09-A19BD7C275FE.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-6A19A243D-8038-23DF-2E09-A19BD7C275FE.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-6A19A243D-8038-23DF-2E09-A19BD7C275FE.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-126\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-5B1222FCE-FF9C-F742-E752-E452E51BE7ED.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-5B1222FCE-FF9C-F742-E752-E452E51BE7ED.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-5B1222FCE-FF9C-F742-E752-E452E51BE7ED.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-5B1222FCE-FF9C-F742-E752-E452E51BE7ED.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-5B1222FCE-FF9C-F742-E752-E452E51BE7ED.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-125\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-446DFBCD2-2A80-A3C4-5186-B47C0595F177.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-446DFBCD2-2A80-A3C4-5186-B47C0595F177.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-446DFBCD2-2A80-A3C4-5186-B47C0595F177.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-446DFBCD2-2A80-A3C4-5186-B47C0595F177.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-446DFBCD2-2A80-A3C4-5186-B47C0595F177.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-124\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124&amp;title=Aenean quis&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-289214C81-5555-DB88-0712-7DF4B2278BE9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124&amp;st.comments=Aenean quis&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-289214C81-5555-DB88-0712-7DF4B2278BE9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124&amp;text=Aenean quis&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-289214C81-5555-DB88-0712-7DF4B2278BE9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124&amp;description=Aenean quis&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-289214C81-5555-DB88-0712-7DF4B2278BE9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124&amp;title=Aenean quis&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-289214C81-5555-DB88-0712-7DF4B2278BE9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-123\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-199778C1C-756E-B1BD-3FC5-C9DC7A5AA40B.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-199778C1C-756E-B1BD-3FC5-C9DC7A5AA40B.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-199778C1C-756E-B1BD-3FC5-C9DC7A5AA40B.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-199778C1C-756E-B1BD-3FC5-C9DC7A5AA40B.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-199778C1C-756E-B1BD-3FC5-C9DC7A5AA40B.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-122\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-35CDBA93D-48EA-58E4-DE5E-61C4A0239472.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-35CDBA93D-48EA-58E4-DE5E-61C4A0239472.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-35CDBA93D-48EA-58E4-DE5E-61C4A0239472.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-35CDBA93D-48EA-58E4-DE5E-61C4A0239472.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-35CDBA93D-48EA-58E4-DE5E-61C4A0239472.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"]
                                                },
                                                downloadButton: 1
                                            }
                                        });

                                        // add social sharing script
                                        var href = window.location.href;
                                        var img_el_id = '';
                                        var pos = href.indexOf('os_image_id');
                                        if (pos > -1)
                                            img_el_id = href.substring(pos);

                                        if (img_el_id && img_el_id.indexOf('os_image_id') > -1) {
                                            if (document.getElementById(img_el_id) !== null) {
                                                jQuerGall('#' + img_el_id).trigger('click');
                                            }
                                        }
                                        // end sharing script
                                    });
                                </script>
                            </div>
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--globalContent-->

</div>
<!--wrapper-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotelladakhimperial/themes/demo/pages/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 281,  452 => 279,  444 => 274,  439 => 272,  430 => 266,  425 => 264,  416 => 258,  411 => 256,  402 => 250,  397 => 248,  388 => 242,  383 => 240,  374 => 234,  369 => 232,  360 => 226,  355 => 224,  344 => 216,  338 => 213,  326 => 204,  320 => 201,  308 => 192,  302 => 189,  290 => 180,  284 => 177,  272 => 168,  266 => 165,  254 => 156,  248 => 153,  236 => 144,  230 => 141,  220 => 134,  215 => 132,  206 => 126,  201 => 124,  192 => 118,  187 => 116,  168 => 100,  128 => 63,  121 => 59,  116 => 57,  111 => 55,  104 => 51,  99 => 49,  94 => 47,  89 => 45,  84 => 43,  79 => 41,  74 => 39,  59 => 27,  50 => 21,  45 => 19,  40 => 17,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
/** * @package OS Gallery * @copyright 2016 OrdaSoft * @author 2016 Andrey Kvasnevskiy(akbet@mail.ru),Roman Akoev (akoevroman@gmail.com) * @license This component is released under License from included LICENSE.txt file * @description Ordasoft Image Gallery */ /*=================---------------------Gallery--------------------======================*/ [class^=os-gallery-album-tabs-main], [class^=os-gallery-all-in-one-main], [class^=os-gallery-tabs-main] .os-cat-tab-images { overflow: hidden; } [class^=os-gallery-tabs-main] .os-cat-tab-images { width:100%; } [class^=os-gallery-album-tabs-main] img, [class^=os-gallery-all-in-one-main] img, [class^=os-gallery-tabs-main] img { width:100%; max-width: 100%; height: auto; } /*=================---------------------Gallery category tab--------------------======================*/ [class^=os-gallery-tabs-main] .osgalery-cat-tabs { // border-bottom: 1px solid #eee; padding: 0 0 0 10px; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li.active a { border: 1px solid #eee; border-bottom-color: transparent; border-radius: 0; -webkit-border-radius: 0; -moz-border-radius: 0; -o-border-radius: 0; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a:hover { background: #eee; border-radius: 0; -webkit-border-radius: 0; -moz-border-radius: 0; -o-border-radius: 0; } // [class^=os-gallery-all-in-one-main] .all-in-one-block .os-gallery-caption { // height: 30px; // } // [class^=os-gallery-all-in-one-main] .all-in-one-block .os-gallery-caption .os-gallery-img-category { // margin: 20px 0 5px 0; // text-align: center; // } /*-------------------------------------------------------------------------------os-cat-tab-images------------------------------------------------------*/ .os-cat-tab-images { } [class^=os-gallery-tabs-main] .os-cat-tab-images .img-block { float: left; position: relative; overflow: hidden; -webkit-box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); -moz-box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); } [class^=os-gallery-all-in-one-main] .os-cat-tab-images .img-block { position: relative; } [class^=os-gallery-all-in-one-main] .os-cat-tab-images .img-block, [class^=os-gallery-album-tabs-main] .os-cat-tab-images .img-block { position: relative; display: inline-block; float: left; overflow: hidden; -webkit-box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); -moz-box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); box-shadow: 1px 1px 3px 0px rgba(0,0,0,0.75); } //[class^=os-gallery-album-tabs-main] .os-cat-tab-images .img-block:last-child [class^=os-gallery-all-in-one-main] .os-cat-tab-images .img-block:last-child { clear: both; } [class^=os-gallery-album-tabs-main] .back-to-albums { background: #354052; color: #fff; font-weight: bold; font-size: 15px; line-height: 15px; padding: 10px; margin: 10px 0; cursor: pointer; display: inline-block; } [class^=os-gallery-tabs-main] .os-cat-tab-images .img-block .os-gallery-caption { position: absolute; width: 100%; height: 100%; top: 0; left: 0; } [class^=os-gallery-tabs-main] .os-cat-tab-images .img-block a { display: inline-block; width: 100%; } /*****------------------------------------------------- none ----------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.none-effect, [class^=os-gallery-album-tabs-main] .img-block.none-effect, [class^=os-gallery-tabs-main] .img-block.none-effect { background: #2f3238; overflow: hidden; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption h3.os-gallery-img-title { position: relative; padding: 0.5em 0; color: #fff; text-align: center; font-size: 100%; line-height: 100%; font-weight: bold; margin: 0; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption p { display: inline-block; margin: 1% 5px 1% 11%; padding: 0.4em 1em; background: rgba(255,255,255,0.9); color: #2f3238; text-transform: none; font-weight: bold; font-size: 70%; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: translate3d(-360px,0,0); transform: translate3d(-360px,0,0); opacity: 0; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption p:first-child, [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption p:first-child, [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption p:first-child { -webkit-transition-delay: 0.15s; transition-delay: 0.15s; position: absolute; top: 50px; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(2) { -webkit-transition-delay: 0.1s; transition-delay: 0.1s; } [class^=os-gallery-all-in-one-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-album-tabs-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-tabs-main] .img-block.none-effect .os-gallery-caption p:nth-of-type(3) { -webkit-transition-delay: 0.05s; transition-delay: 0.05s; } [class^=os-gallery-all-in-one-main] .img-block.none-effect:hover .os-gallery-caption p:first-child, [class^=os-gallery-album-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:first-child, [class^=os-gallery-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:first-child { -webkit-transition-delay: 0s; transition-delay: 0s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-album-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(2) { -webkit-transition-delay: 0.05s; transition-delay: 0.05s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-album-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-tabs-main] .img-block.none-effect:hover .os-gallery-caption p:nth-of-type(3) { -webkit-transition-delay: 0.1s; transition-delay: 0.1s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.none-effect:hover .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.none-effect:hover .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.none-effect:hover .os-gallery-caption p { opacity: 1; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } /*****------------------------------------------------- dimas ----------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.dimas-effect, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect, [class^=os-gallery-tabs-main] .img-block.dimas-effect { background: #2f3238; overflow: hidden; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect img, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect img, [class^=os-gallery-tabs-main] .img-block.dimas-effect img { -webkit-transition: opacity 1s, -webkit-transform 1s; transition: opacity 1s, transform 1s; -webkit-backface-visibility: hidden; backface-visibility: hidden; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption h3.os-gallery-img-title { position: relative; padding: 0.5em 0; color: #fff; text-align: center; font-size: 100%; line-height: 100%; font-weight: bold; margin: 0; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption p { display: inline-block; margin: 1% 5px 1% 11%; padding: 0.4em 1em; background: rgba(255,255,255,0.9); color: #2f3238; text-transform: none; font-weight: bold; font-size: 70%; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: translate3d(-360px,0,0); transform: translate3d(-360px,0,0); opacity: 0; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption p:first-child, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption p:first-child, [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption p:first-child { -webkit-transition-delay: 0.15s; transition-delay: 0.15s; position: absolute; top: 50px; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(2) { -webkit-transition-delay: 0.1s; transition-delay: 0.1s; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-album-tabs-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-tabs-main] .img-block.dimas-effect .os-gallery-caption p:nth-of-type(3) { -webkit-transition-delay: 0.05s; transition-delay: 0.05s; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect:hover .os-gallery-caption p:first-child, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:first-child, [class^=os-gallery-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:first-child { -webkit-transition-delay: 0s; transition-delay: 0s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-album-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(2), [class^=os-gallery-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(2) { -webkit-transition-delay: 0.05s; transition-delay: 0.05s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-album-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(3), [class^=os-gallery-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p:nth-of-type(3) { -webkit-transition-delay: 0.1s; transition-delay: 0.1s; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect:hover img, [class^=os-gallery-tabs-main] .img-block.dimas-effect:hover img { opacity: 0.4; -webkit-transform: scale3d(1.1,1.1,1); transform: scale3d(1.1,1.1,1); } [class^=os-gallery-all-in-one-main] .img-block.dimas-effect:hover .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.dimas-effect:hover .os-gallery-caption p { opacity: 1; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } /*****------------------------------------------------------------- anet ------------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.anet-effect img, [class^=os-gallery-album-tabs-main] .img-block.anet-effect img, [class^=os-gallery-tabs-main] .img-block.anet-effect img, [class^=os-gallery-all-in-one-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title { -webkit-transition: -webkit-transform 0.35s; transition: transform 0.35s; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect, [class^=os-gallery-album-tabs-main] .img-block.anet-effect, [class^=os-gallery-tabs-main] .img-block.anet-effect { background: #788aa8; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.anet-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.anet-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect img, [class^=os-gallery-album-tabs-main] .img-block.anet-effect img, [class^=os-gallery-tabs-main] .img-block.anet-effect img { -webkit-backface-visibility: hidden; backface-visibility: hidden; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.anet-effect h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.anet-effect h3.os-gallery-img-title { position: absolute; bottom: 0; left: 0; padding: 30px; font-size: 100%; line-height: 100%; font-weight: bold; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.anet-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.anet-effect .os-gallery-caption p { position: absolute; bottom: 0; left: 0; padding: 30px; font-size: 80%; line-height: 80%; color: #fff; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; font-weight: bold; margin: 0 0 10px 0; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.anet-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.anet-effect .os-gallery-caption p { text-transform: none; font-size: 70%; line-height: 80%; opacity: 0; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: translate3d(0,50px,0); transform: translate3d(0,50px,0); } [class^=os-gallery-all-in-one-main] .img-block.anet-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.anet-effect:hover img, [class^=os-gallery-tabs-main] .img-block.anet-effect:hover img { -webkit-transform: translate3d(0,-80px,0); transform: translate3d(0,-80px,0); } [class^=os-gallery-all-in-one-main] .img-block.anet-effect:hover .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.anet-effect:hover .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.anet-effect:hover .os-gallery-caption h3.os-gallery-img-title { -webkit-transform: translate3d(0,-100px,0); transform: translate3d(0,-100px,0); } [class^=os-gallery-all-in-one-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.anet-effect .os-gallery-caption h3.os-gallery-img-title { color: #fff; } [class^=os-gallery-all-in-one-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-category, [class^=os-gallery-album-tabs-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-category, [class^=os-gallery-tabs-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-category { opacity: 1; -webkit-transform: translate3d(0,-5px,0); transform: translate3d(0,-5px,0); } [class^=os-gallery-all-in-one-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-desc, [class^=os-gallery-album-tabs-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-desc, [class^=os-gallery-tabs-main] .img-block.anet-effect:hover .os-gallery-caption p.os-gallery-img-desc { opacity: 1; -webkit-transform: translate3d(0,20px,0); transform: translate3d(0,20px,0); } /*****--------------------------------------------------- sergio --------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.sergio-effect, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect, [class^=os-gallery-tabs-main] .img-block.sergio-effect { background: #fff; cursor: pointer; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.sergio-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect img, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect img, [class^=os-gallery-tabs-main] .img-block.sergio-effect img { opacity: 0.95; -webkit-transition: -webkit-transform 0.35s; transition: transform 0.35s; -webkit-transform-origin: 50% 50%; transform-origin: 50% 50%; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect:hover img, [class^=os-gallery-tabs-main] .img-block.sergio-effect:hover img { -webkit-transform: scale3d(0.95,0.95,1); transform: scale3d(0.95,0.95,1); } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.sergio-effect .os-gallery-caption { position: absolute; width: 100%; height: 100%; top: 25px; left: 0; z-index: 9; text-align: center; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.sergio-effect .os-gallery-caption h3.os-gallery-img-title { -webkit-transition: -webkit-transform 0.35s; transition: transform 0.35s; -webkit-transform: translate3d(0,20px,0); transform: translate3d(0,20px,0); color: #fff; font-size: 100%; line-height: 30px; font-weight: bold; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.sergio-effect .os-gallery-caption p { opacity: 0; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: perspective(1000px) rotate3d(1,0,0,90deg); transform: perspective(1000px) rotate3d(1,0,0,90deg); -webkit-transform-origin: 50% 0%; transform-origin: 50% 0%; color: #fff; text-shadow: 1px 2px 4px #505050; } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect:hover .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect:hover .os-gallery-caption h3, [class^=os-gallery-tabs-main] .img-block.sergio-effect:hover .os-gallery-caption h3 { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } [class^=os-gallery-all-in-one-main] .img-block.sergio-effect:hover .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.sergio-effect:hover .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.sergio-effect:hover .os-gallery-caption p { opacity: 1; -webkit-transform: perspective(1000px) rotate3d(1,0,0,0); transform: perspective(1000px) rotate3d(1,0,0,0); color: #fff; font-size: 70%; text-shadow: 1px 2px 4px #505050; -webkit-text-shadow: 1px 2px 4px #505050; -moz-text-shadow: 1px 2px 4px #505050; } /*****---------------------------------------------------- ariana -------------------------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.ariana-effect, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect, [class^=os-gallery-tabs-main] .img-block.ariana-effect { z-index: auto; overflow: visible; background: transparent; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect:before, [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before { position: absolute; top: 0; left: 0; z-index: -1; width: 100%; height: 100%; background: transparent; content: ''; -webkit-transition: opacity 0.35s; transition: opacity 0.35s; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect:before { // box-shadow: 0 3px 30px rgba(0,0,0,0.8); opacity: 0; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption { z-index: 1; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect img, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect img, [class^=os-gallery-tabs-main] .img-block.ariana-effect img { opacity: 1; -webkit-transition: -webkit-transform 0.35s; transition: transform 0.35s; -webkit-transform: perspective(1000px) translate3d(0,0,0); transform: perspective(1000px) translate3d(0,0,0); } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title { font-size: 100%; line-height: 100%; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption p { background: rgba(255, 255, 255, 0.62); color: #2d434e; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title { position: relative; margin: 15px; padding: 5px; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption h3.os-gallery-img-title:before { box-shadow: 0 1px 10px rgba(0,0,0,0.5); } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.ariana-effect .os-gallery-caption p { margin: 20px 30px 0 30px; padding: 5px; font-weight: 800; opacity: 0; font-size: 60%; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: scale3d(0.9,0.9,1); transform: scale3d(0.9,0.9,1); } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:hover:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:hover:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect:hover:before { opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:hover img, [class^=os-gallery-tabs-main] .img-block.ariana-effect:hover img { -webkit-transform: perspective(1000px) translate3d(0,0,21px); transform: perspective(1000px) translate3d(0,0,21px); } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:hover .os-gallery-caption h3os-gallery-img-title:before, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:hover .os-gallery-caption h3os-gallery-img-title:before, [class^=os-gallery-tabs-main] .img-block.ariana-effect:hover .os-gallery-caption h3os-gallery-img-title:before { opacity: 0; } [class^=os-gallery-all-in-one-main] .img-block.ariana-effect:hover .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.ariana-effect:hover .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.ariana-effect:hover .os-gallery-caption p { opacity: 1; -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1); } /*****----------------------------------------------------- taras --------------------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.taras-effect, [class^=os-gallery-album-tabs-main] .img-block.taras-effect, [class^=os-gallery-tabs-main] .img-block.taras-effect { background: #030c17; } [class^=os-gallery-album-tabs-main] .album-block .img-block.taras-effect .os-gallery-caption p { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:30%; left:0; } [class^=os-gallery-all-in-one-main] .img-block.taras-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.taras-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.taras-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.taras-effect img, [class^=os-gallery-album-tabs-main] .img-block.taras-effect img, [class^=os-gallery-tabs-main] .img-block.taras-effect img { opacity: 0.9; -webkit-transition: opacity 0.35s; transition: opacity 0.35s; } [class^=os-gallery-all-in-one-main] .img-block.taras-effect .os-gallery-caption::before, [class^=os-gallery-album-tabs-main] .img-block.taras-effect .os-gallery-caption::before, [class^=os-gallery-tabs-main] .img-block.taras-effect .os-gallery-caption::before { position: absolute; top: 50px; right: 50px; bottom: 50px; left: 50px; border: 2px solid #fff; box-shadow: 0 0 0 30px rgba(255,255,255,0.2); content: ''; opacity: 0; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: scale3d(1.4,1.4,1); transform: scale3d(1.4,1.4,1); } [class^=os-gallery-all-in-one-main] .img-block.taras-effect .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.taras-effect .os-gallery-caption h3, [class^=os-gallery-tabs-main] .img-block.taras-effect .os-gallery-caption h3 { margin: 20% 0 10px 0; -webkit-transition: -webkit-transform 0.35s; transition: transform 0.35s; } [class^=os-gallery-all-in-one-main] .img-block.taras-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.taras-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.taras-effect .os-gallery-caption p { padding: 0; text-align: center; color: #fff; font-size: 70%; line-height: 30px; margin: 0; opacity: 0; -webkit-transition: opacity 0.35s, -webkit-transform 0.35s; transition: opacity 0.35s, transform 0.35s; -webkit-transform: scale(1.5); transform: scale(1.5); } [class^=os-gallery-all-in-one-main] .img-block.taras-effect:hover .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.taras-effect:hover .os-gallery-caption h3, [class^=os-gallery-tabs-main] .img-block.taras-effect:hover .os-gallery-caption h3 { // -webkit-transform: scale(1.1); // transform: scale(1.1); color: #fff; font-size: 100%; text-align: center; } [class^=os-gallery-all-in-one-main] .img-block.taras-effect:hover .os-gallery-caption::before, [class^=os-gallery-album-tabs-main] .img-block.taras-effect:hover .os-gallery-caption::before, [class^=os-gallery-tabs-main] .img-block.taras-effect:hover .os-gallery-caption::before, [class^=os-gallery-all-in-one-main] .img-block.taras-effect:hover .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.taras-effect:hover .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.taras-effect:hover .os-gallery-caption p { opacity: 1; -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1); } [class^=os-gallery-all-in-one-main] .img-block.taras-effect:hover .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.taras-effect:hover .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.taras-effect:hover .os-gallery-caption { background-color: rgba(58,52,42,0); } [class^=os-gallery-all-in-one-main] .img-block.taras-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.taras-effect:hover img, [class^=os-gallery-tabs-main] .img-block.taras-effect:hover img { opacity: 0.4; } /*****-----------------------------------------------------------andrea--------------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.andrea-effect, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect, [class^=os-gallery-tabs-main] .img-block.andrea-effect { overflow: hidden; } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.andrea-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } // .img-block.andrea-effect a { // position: relative; // width: 100%; // height: 100%; // z-index: 11; // } // [class^=os-gallery-all-in-one-main] .img-block.andrea-effect a:after, // [class^=os-gallery-album-tabs-main] .img-block.andrea-effect a:after, // [class^=os-gallery-tabs-main] .img-block.andrea-effect a:after { // content: \"\\f00e\"; // font-family: fontAwesome; // display: inline-block; // font-size: 40px; // color: #fff; // position: absolute; // top: 100%; // opacity: 0; // left: 45%; // transition: all 0.3s ease; // -webkit-transition: all 0.3s ease; // -moz-transition: all 0.3s ease; // -o-transition: all 0.3s ease; // z-index: 9; // } // [class^=os-gallery-all-in-one-main] .img-block.andrea-effect:hover a:after, // [class^=os-gallery-album-tabs-main] .img-block.andrea-effect:hover a:after, // [class^=os-gallery-tabs-main] .img-block.andrea-effect:hover a:after { // top: 43%; // opacity: 1; // transition: all 0.3s ease; // -webkit-transition: all 0.3s ease; // -moz-transition: all 0.3s ease; // -o-transition: all 0.3s ease; // } // [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .fa-search-plus, // [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .fa-search-plus, // [class^=os-gallery-tabs-main] .img-block.andrea-effect .fa-search-plus { // font-family: fontAwesome; // display: inline-block; // // font-size: 30px; // color: #fff; // position: absolute; // top: 100%; // opacity: 0; // left: 45%; // transition: all 0.3s ease; // -webkit-transition: all 0.3s ease; // -moz-transition: all 0.3s ease; // -o-transition: all 0.3s ease; // z-index: 9; // } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .andrea-zoom-in, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .andrea-zoom-in, [class^=os-gallery-tabs-main] .img-block.andrea-effect .andrea-zoom-in { // font-family: fontAwesome; display: inline-block; // font-size: 30px; background: url(../images/zoom.svg) no-repeat; background-size: cover; color: #fff; position: absolute; top: 100%; opacity: 0; left: 45%; transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; z-index: 9; } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect:hover .andrea-zoom-in, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect:hover .andrea-zoom-in, [class^=os-gallery-tabs-main] .img-block.andrea-effect:hover .andrea-zoom-in { top: 43%; opacity: 1; transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.andrea-effect .os-gallery-caption { position: absolute; top: -100%; left: 0; width:100%; height: 100%; background: rgba(0, 0, 0, 0.0); opacity: 0; transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; z-index: 9; } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect:hover .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect:hover .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.andrea-effect:hover .os-gallery-caption { top: 0; cursor: pointer; opacity: 1; transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; background: rgba(0, 0, 0, 0.55); } [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .os-gallery-caption h3, [class^=os-gallery-tabs-main] .img-block.andrea-effect .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .os-gallery-caption h3, [class^=os-gallery-all-in-one-main] .img-block.andrea-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block.andrea-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.andrea-effect .os-gallery-caption p { display: none; } /*****----------------------------------------------------------------zema-------------------------------------------------------------------------*****/ @-webkit-keyframes foto { 0% { opacity: .4; } 100% { opacity: 1; } } @keyframes foto { 0% { opacity: .4; } 100% { opacity: 1; } } [class^=os-gallery-all-in-one-main] .img-block.zema-effect .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.zema-effect .os-gallery-caption h3, [class^=os-gallery-tabs-main] .img-block.zema-effect .os-gallery-caption h3, [class^=os-gallery-album-tabs-main] .img-block.zema-effect .os-gallery-caption p, [class^=os-gallery-all-in-one-main] .img-block.zema-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block.zema-effect .os-gallery-caption p { display: none; } [class^=os-gallery-all-in-one-main] .img-block.zema-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.zema-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.zema-effect .os-gallery-caption { position: absolute; padding: 0; margin: 0; width: 100%; height: 100%; top:0; left:0; } [class^=os-gallery-all-in-one-main] .img-block.zema-effect img, [class^=os-gallery-album-tabs-main] .img-block.zema-effect img, [class^=os-gallery-tabs-main] .img-block.zema-effect img { -webkit-filter: grayscale(100%); filter: grayscale(100%); transform: scale(1.1); } [class^=os-gallery-all-in-one-main] .img-block.zema-effect:hover img, [class^=os-gallery-album-tabs-main] .img-block.zema-effect:hover img, [class^=os-gallery-tabs-main] .img-block.zema-effect:hover img { cursor: pointer; animation-name: foto; animation-duration: 0.2s; -webkit-filter: grayscale(0); filter: grayscale(0); transform: scale(1); } /*****-------------------------------------------------------pytiton-effect-----------------------------------------------------------*****/ [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.pytiton-effect .os-gallery-caption { position: absolute; top: 0; left: 0; width: 100%; height: 100%; transition: all 0.6s ease; -webkit-transition: all 0.6s ease; -moz-transition: all 0.6s ease; -o-transition: all 0.6s ease; background: rgba(28, 86, 136, 0.52); } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect .os-gallery-caption h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.pytiton-effect .os-gallery-caption h3.os-gallery-img-title { opacity: 0; position: absolute; top:20%; left: -100%; background: #fff; padding: 10px 20px; font-size: 100%; color: #2F3238; transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect:hover .os-gallery-caption, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect:hover .os-gallery-caption, [class^=os-gallery-tabs-main] .img-block.pytiton-effect:hover .os-gallery-caption { transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; background: rgba(170, 173, 4, 0.35); } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect:hover h3.os-gallery-img-title, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect:hover h3.os-gallery-img-title, [class^=os-gallery-tabs-main] .img-block.pytiton-effect:hover h3.os-gallery-img-title { transition: all 0.3s ease; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; left: 0; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-desc, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-desc, [class^=os-gallery-tabs-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-desc { opacity: 0; position: absolute; top: 60%; right: -100%; background: #fff; padding: 10px 20px; font-size: 70%; color: #2F3238; transition: all 1s ease; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect:hover p.os-gallery-img-desc, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect:hover p.os-gallery-img-desc, [class^=os-gallery-tabs-main] .img-block.pytiton-effect:hover p.os-gallery-img-desc { transition: all 1s ease; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; right: 0; opacity: 1; } [class^=os-gallery-all-in-one-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-category, [class^=os-gallery-album-tabs-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-category, [class^=os-gallery-tabs-main] .img-block.pytiton-effect .os-gallery-caption p.os-gallery-img-category { display: none; } .os_fancybox-wrap .os_fancybox-title-outside-wrap h2 { color: #fff; text-shadow: 1px 2px 4px #505050; font-weight: bold; } @media (max-width: 768px){ [class^=os-gallery-all-in-one-main] .img-block .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .img-block .os-gallery-caption p, [class^=os-gallery-tabs-main] .img-block .os-gallery-caption p { display: none !important; } [class^=os-gallery-all-in-one-main] .anet-effect .os-gallery-caption p, [class^=os-gallery-album-tabs-main] .anet-effect .os-gallery-caption p, [class^=os-gallery-tabs-main] .anet-effect .os-gallery-caption p { display: block !important; } } /*--------------------------------------gallery tabs-------------------------------------------*/ [class^=os-gallery-tabs-main] .osgalery-cat-tabs { list-style: none; margin:0; padding: 0; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li { display: inline-block; height: 35px; margin:0; padding: 0; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a { height: 100%; display: block; text-align: center; line-height: 33px; padding: 0 5px; color: #555; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a.active { background: #ccc; color: #333; } [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a:active, [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a:focus, [class^=os-gallery-tabs-main] .osgalery-cat-tabs li a:hover { text-decoration: none; } /*-------------------------load more button-----------------*/ .osGallery-button-box .load-more-button { border: none; width: 100%; padding: 10px; color: #fff; font-size: 14px; font-weight: 600; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1); -webkit-text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1); -moz-text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1); -o-text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1); } .osGallery-button-box .load-more-button:hover { background: #788aa8 !important; } .add-zoomIn { -webkit-animation-name: zoomIn; animation-name: zoomIn; } .add-animated { -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-fill-mode: both; animation-fill-mode: both; } /* clear fix */ .grid:after { content: ''; display: block; clear: both; } .grid-item { float: left; } .grid-item img { display: block; width: 100%; } [class=sharing] { position: absolute; top: 0; z-index: 10000; width: 100%; text-align: right; padding: 4px 0; min-height: 20px; } [class=sharing] a { width: auto !important; margin-left: 2px; } [class=sharing] .soc1{ -webkit-animation-duration: 0.5s; -moz-animation-duration: 0.5s; animation-duration: 0.5s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc2{ -webkit-animation-duration: 0.8s; -moz-animation-duration: 0.8s; animation-duration: 0.8s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc3{ -webkit-animation-duration: 1.1s; -moz-animation-duration: 1.1s; animation-duration: 1.1s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc4{ -webkit-animation-duration: 1.4s; -moz-animation-duration: 1.4s; animation-duration: 1.4s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc5{ -webkit-animation-duration: 1.7s; -moz-animation-duration: 1.7s; animation-duration: 1.7s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc6{ -webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc7{ -webkit-animation-duration: 2.3s; -moz-animation-duration: 2.3s; animation-duration: 2.3s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc7.zoomOut { -webkit-animation-duration: 0.5s; -moz-animation-duration: 0.5s; animation-duration: 0.5s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc6.zoomOut { -webkit-animation-duration: 0.8s; -moz-animation-duration: 0.8s; animation-duration: 0.8s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc5.zoomOut { -webkit-animation-duration: 1.1s; -moz-animation-duration: 1.1s; animation-duration: 1.1s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc4.zoomOut { -webkit-animation-duration: 1.4s; -moz-animation-duration: 1.4s; animation-duration: 1.4s; webkit-animation-fill-mode: both; animation-fill-mode: both } [class=sharing] .soc3.zoomOut { -webkit-animation-duration: 1.7s; -moz-animation-duration: 1.7s; animation-duration: 1.7s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc2.zoomOut { -webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .soc1.zoomOut { -webkit-animation-duration: 2.3s; -moz-animation-duration: 2.3s; animation-duration: 2.3s; webkit-animation-fill-mode: both; animation-fill-mode: both; } [class=sharing] .act { display: none; } [class=sharing] .act.zoomIn { display: block; } [class=sharing] .zoomIn, [class=sharing] .zoomOut { display: block; float: right; } .animated { -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-fill-mode: both; animation-fill-mode: both; } .icons_os_image { background: url(../images/shareLink.png) no-repeat; width: 32px; height: 32px; position: absolute; top: 4px; right: 5px; cursor: pointer; } .icons_os { margin-right: 39px; overflow: hidden; } .icons_download { background: url(../images/downloadButton.png) no-repeat; width: 32px; height: 32px; position: absolute; top: 40px; right: 5px; cursor: pointer; } @-webkit-keyframes zoomIn { 0% { opacity: 0; -webkit-transform: scale3d(.3, .3, .3); transform: scale3d(.3, .3, .3); } 50% { opacity: 1; } } @keyframes zoomIn { 0% { opacity: 0; -webkit-transform: scale3d(.3, .3, .3); transform: scale3d(.3, .3, .3); } 50% { opacity: 1; } } .zoomIn { -webkit-animation-name: zoomIn; animation-name: zoomIn; } @-webkit-keyframes zoomOut { 0% { opacity: 1; } 50% { opacity: 0; -webkit-transform: scale3d(.3, .3, .3); transform: scale3d(.3, .3, .3); } 100% { opacity: 0; } } @keyframes zoomOut { 0% { opacity: 1; } 50% { opacity: 0; -webkit-transform: scale3d(.3, .3, .3); transform: scale3d(.3, .3, .3); } 100% { opacity: 0; } } .zoomOut { -webkit-animation-name: zoomOut; animation-name: zoomOut; } .os_fancybox-outer a.os_fancybox-nav { width: 10%; }

/*! os_fancybox v2.1.5 fancyapps.com | fancyapps.com/os_fancybox/#license */ .os_fancybox-wrap, .os_fancybox-skin, .os_fancybox-outer, .os_fancybox-inner, .os_fancybox-image, .os_fancybox-wrap iframe, .os_fancybox-wrap object, .os_fancybox-nav, .os_fancybox-nav span, .os_fancybox-tmp { padding: 0; margin: 0; border: 0; outline: none; vertical-align: top; } .os_fancybox-wrap { position: absolute; top: 0; left: 0; z-index: 8020; } .os_fancybox-skin { position: relative; background: #f9f9f9; color: #444; text-shadow: none; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; } .os_fancybox-opened { z-index: 8030; } .os_fancybox-opened .os_fancybox-skin { -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); } .os_fancybox-outer, .os_fancybox-inner { position: relative; } .os_fancybox-inner { overflow: hidden; } .os_fancybox-type-iframe .os_fancybox-inner { -webkit-overflow-scrolling: touch; } .os_fancybox-error { color: #444; font: 14px/20px \"Helvetica Neue\",Helvetica,Arial,sans-serif; margin: 0; padding: 15px; white-space: nowrap; } .os_fancybox-image, .os_fancybox-iframe { display: block; width: 100%; height: 100%; } .os_fancybox-image { max-width: 100%; max-height: 100%; } #os_fancybox-loading, .os_fancybox-close, .os_fancybox-prev span, .os_fancybox-next span,.gallery-fanc-prev span,.gallery-fanc-next span { background-image: url('os_fancybox_sprite.png'); } #os_fancybox-loading { position: fixed; top: 50%; left: 50%; margin-top: -22px; margin-left: -22px; background-position: 0 -108px; opacity: 0.8; cursor: pointer; z-index: 8060; } #os_fancybox-loading div { width: 44px; height: 44px; background: url('os_fancybox_loading.gif') center center no-repeat; } .os_fancybox-close { position: absolute; top: -18px; right: -18px; width: 36px; height: 36px; cursor: pointer; z-index: 8040; } .os_fancybox-nav { position: absolute; top: 0; width: 40%; height: 100%; cursor: pointer; text-decoration: none; background: transparent url('blank.gif'); /* helps IE */ -webkit-tap-highlight-color: rgba(0,0,0,0); z-index: 8040; } .gallery-fanc-prev{ position: absolute; top: 10%; width: 40%; height: 80%; cursor: pointer; text-decoration: none; background: transparent url('blank.gif'); /* helps IE */ -webkit-tap-highlight-color: rgba(0,0,0,0); z-index: 8040; left: 0; } .gallery-fanc-next{ position: fixed; top: 10%; width: 40%; height: 80%; cursor: pointer; text-decoration: none; background: transparent url('blank.gif'); /* helps IE */ -webkit-tap-highlight-color: rgba(0,0,0,0); z-index: 8040; right: 0; top: 43% !important; height: 27% !important; } .gallery-fanc-next span, .gallery-fanc-prev span{ position: fixed; top: 50%; width: 36px; height: 35px; margin-top: -18px; cursor: pointer; z-index: 8040; } .gallery-fanc-prev span { left: 10px; background-position: 0 -36px; } .gallery-fanc-next span { right: 10px; background-position: 0 -72px; } .os_fancybox-prev { left: 0; } .os_fancybox-next { right: 0; } .os_fancybox-nav span { position: absolute; top: 50%; width: 36px; height: 34px; margin-top: -18px; cursor: pointer; z-index: 8040; visibility: hidden; } .os_fancybox-prev span { left: 10px; background-position: 0 -36px; } .os_fancybox-next span { right: 10px; background-position: 0 -72px; } .os_fancybox-nav:hover span { visibility: visible; } .os_fancybox-tmp { position: absolute; top: -99999px; left: -99999px; visibility: hidden; max-width: 99999px; max-height: 99999px; overflow: visible !important; } /* Overlay helper */ .os_fancybox-lock { overflow: hidden !important; width: auto; } .os_fancybox-lock body { overflow: hidden !important; } .os_fancybox-lock-test { overflow-y: hidden !important; } .os_fancybox-overlay { position: absolute; top: 0; left: 0; overflow: hidden; display: none; z-index: 8010; background: url('os_fancybox_overlay.png'); } .os_fancybox-overlay-fixed { position: fixed; bottom: 0; right: 0; } .os_fancybox-lock .os_fancybox-overlay { overflow: auto; overflow-y: scroll; } /* Title helper */ .os_fancybox-title { visibility: hidden; font: normal 13px/20px \"Helvetica Neue\",Helvetica,Arial,sans-serif; position: relative; text-shadow: none; z-index: 8050; } .os_fancybox-opened .os_fancybox-title { visibility: visible; } .os_fancybox-title-float-wrap { position: absolute; bottom: 0; right: 50%; margin-bottom: -35px; z-index: 8050; text-align: center; } .os_fancybox-title-float-wrap .child { display: inline-block; margin-right: -100%; padding: 2px 20px; background: transparent; /* Fallback for web browsers that doesn't support RGBa */ background: rgba(0, 0, 0, 0.8); -webkit-border-radius: 15px; -moz-border-radius: 15px; border-radius: 15px; text-shadow: 0 1px 2px #222; color: #FFF; font-weight: bold; line-height: 24px; white-space: nowrap; } .os_fancybox-title-outside-wrap { position: relative; margin-top: 10px; color: #fff; } .os_fancybox-title-inside-wrap { padding-top: 10px; } .os_fancybox-title-over-wrap { position: absolute; bottom: 0; left: 0; color: #fff; padding: 10px; background: #000; background: rgba(0, 0, 0, .8); } /*Retina graphics!*/ @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min--moz-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5){ #os_fancybox-loading, .os_fancybox-close, .os_fancybox-prev span, .os_fancybox-next span,.gallery-fanc-prev span,.gallery-fanc-next span{ background-image: url('os_fancybox_sprite@2x.png'); background-size: 44px 152px; /*The size of the normal image, half the size of the hi-res image*/ } #os_fancybox-loading div { background-image: url('os_fancybox_loading@2x.gif'); background-size: 24px 24px; /*The size of the normal image, half the size of the hi-res image*/ } }


#os_fancybox-thumbs { position: fixed; left: 0; width: 100%; overflow: hidden; z-index: 8050; } #os_fancybox-thumbs.bottom { bottom: 40px; } #os_fancybox-thumbs.top { top: 2px; } #os_fancybox-thumbs ul { position: relative; list-style: none; margin: 0; padding: 0; } #os_fancybox-thumbs ul li { float: left; padding: 1px; opacity: 0.5; } #os_fancybox-thumbs ul li.active { opacity: 0.75; padding: 0; border: 1px solid #fff; } #os_fancybox-thumbs ul li:hover { opacity: 1; } #os_fancybox-thumbs ul li a { display: block; position: relative; overflow: hidden; border: 1px solid #222; background: #111; outline: none; } #os_fancybox-thumbs ul li img { display: block; position: relative; border: 0; padding: 0; max-width: none; }


#os_fancybox-buttons { position: fixed; left: 0; width: 100%; z-index: 8050; } #os_fancybox-buttons.top { top: 10px; } #os_fancybox-buttons.bottom { bottom: 10px; } #os_fancybox-buttons ul { display: block; width: 166px; height: 30px; margin: 0 auto; padding: 0; list-style: none; border: 1px solid #111; border-radius: 3px; -webkit-box-shadow: inset 0 0 0 1px rgba(255,255,255,.05); -moz-box-shadow: inset 0 0 0 1px rgba(255,255,255,.05); box-shadow: inset 0 0 0 1px rgba(255,255,255,.05); background: rgb(50,50,50); background: -moz-linear-gradient(top, rgb(68,68,68) 0%, rgb(52,52,52) 50%, rgb(41,41,41) 50%, rgb(51,51,51) 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(68,68,68)), color-stop(50%,rgb(52,52,52)), color-stop(50%,rgb(41,41,41)), color-stop(100%,rgb(51,51,51))); background: -webkit-linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%); background: -o-linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%); background: -ms-linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%); background: linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#444444', endColorstr='#222222',GradientType=0 ); } #os_fancybox-buttons ul li { float: left; margin: 0; padding: 0; } #os_fancybox-buttons a { display: block; width: 30px; height: 30px; text-indent: -9999px; background-color: transparent; background-image: url('os_fancybox_buttons.png'); background-repeat: no-repeat; outline: none; opacity: 0.8; } #os_fancybox-buttons a:hover { opacity: 1; } #os_fancybox-buttons a.btnPrev { background-position: 5px 0; } #os_fancybox-buttons a.btnNext { background-position: -33px 0; border-right: 1px solid #3e3e3e; } #os_fancybox-buttons a.btnPlay { background-position: 0 -30px; } #os_fancybox-buttons a.btnPlayOn { background-position: -30px -30px; } #os_fancybox-buttons a.btnToggle { background-position: 3px -60px; border-left: 1px solid #111; border-right: 1px solid #3e3e3e; width: 35px } #os_fancybox-buttons a.btnToggleOn { background-position: -27px -60px; } #os_fancybox-buttons a.btnClose { border-left: 1px solid #111; width: 35px; background-position: -56px 0px; } #os_fancybox-buttons a.btnDisabled { opacity : 0.4; cursor: default; }
</style>

<link rel=\"stylesheet\" href=\"{{ url('assets/css/gallery/os-gallery.css'|theme) }}\" type=\"text/css\">



<link rel=\"stylesheet\" href=\"{{ url('assets/css/gallery/jquery.os_fancyboxGall.css'|theme) }}\" type=\"text/css\">

<link rel=\"stylesheet\" href=\"{{ url('assets/css/gallery/jquery.os_fancybox-thumbs.css'|theme) }}\" type=\"text/css\">

<link rel=\"stylesheet\" href=\"{{ url('assets/css/gallery/jquery.os_fancybox-buttons.css'|theme) }}\" type=\"text/css\">





<script type=\"text/javascript\" src=\"{{ url('assets/javascript/gallery/jquery.js.download'|theme)}}\"></script>

<script type=\"text/javascript\">

    jQuery.noConflict();

</script>





<script src=\"{{ url('assets/javascript/gallery/jQuerGall-2.2.4.js.download'|theme)}}\" type=\"text/javascript\"></script>

<script src=\"{{ url('assets/javascript/gallery/jquery.os_fancyboxGall.js.download'|theme)}}\" type=\"text/javascript\"></script>

<script src=\"{{ url('assets/javascript/gallery/imagesloadedGall.pkgd.min.js.download'|theme)}}\" type=\"text/javascript\"></script>

<script src=\"{{ url('assets/javascript/gallery/isotope.pkgd.min.js.download'|theme)}}\" type=\"text/javascript\"></script>

<script src=\"{{ url('assets/javascript/gallery/jquery.os_fancyboxGall-thumbs.js.download'|theme)}}\" type=\"text/javascript\"></script>

<script src=\"{{ url('assets/javascript/gallery/jquery.mousewheel-3.0.6.pack.js.download'|theme)}}\" type=\"text/javascript\"></script>

<script src=\"{{ url('assets/javascript/gallery/jquery.os_fancyboxGall-buttons.js.download'|theme)}}\" type=\"text/javascript\"></script>



<script src=\"{{ url('assets/javascript/gallery/jquery-noconflict.js.download'|theme)}}\" type=\"text/javascript\"></script>

<script src=\"{{ url('assets/javascript/gallery/jquery-migrate.min.js.download'|theme)}}\" type=\"text/javascript\"></script>

<script src=\"{{ url('assets/javascript/gallery/caption.js.download'|theme)}}\" type=\"text/javascript\"></script>



<script src=\"{{ url('assets/javascript/gallery/custom.js.download'|theme)}}\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">

    jQuerGall = jQuerGall.noConflict();

    jQuerGall = jQuerGall.noConflict();

    jQuerGall = jQuerGall.noConflict();

    jQuery(window).on('load', function() {

        new JCaption('img.caption');

    });

</script>








<div id=\"wrapper\" class=\"container\">

    <div id=\"globalContent\">

        <div class=\"row\">

            <div id=\"contentBox\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">

                <div>
                    <div id=\"system-message-container\">
                    </div>
                </div>
                <h1 class=\"my-2 text-center pt-4\">Check Out Our {{ this.page.title }}!</h1>
                <div>
                    <div class=\"item-page\" itemscope=\"\" itemtype=\"https://schema.org/Article\">
                        <meta itemprop=\"inLanguage\" content=\"en-GB\">

                        <div itemprop=\"articleBody\">
                            <p><span style=\"font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, sans-serif; font-size: 13px; text-align: center; background-color: #b6c0d0;\">    </span></p>
                            <div class=\"os-gallery-tabs-main-59\">

                                <div class=\"os-cat-tab-images\">
                                    <!-- Simple category mode-->
                                    <div class=\"grid\" id=\"cat-79\" data-cat-id=\"79\" style=\"padding: 2.5px; height: 1315.27px; position: relative;\">
                                        <div class=\"grid-sizer\" style=\"width: 33%;\" ;=\"\"></div>
      

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 2.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-540\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery1.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery1.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 65.9211%; top: 2.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-541\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery2.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery2.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery3.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery3.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 65.9211%; top: 217.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-537\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery4.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"{{ url('assets/images/gallery/gallery4.jpg'|theme) }}\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 65.9211%; top: 433.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-542\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery5.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"{{ url('assets/images/gallery/gallery5.jpg'|theme) }}\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 65.9211%; top: 649.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-543\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery6.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"{{ url('assets/images/gallery/gallery6.jpg'|theme) }}\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 0.219298%; top: 664.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-538\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery7.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"{{ url('assets/images/gallery/gallery7.jpg'|theme) }}\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 0.219298%; top: 880.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-539\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery9.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"{{ url('assets/images/gallery/gallery9.jpg'|theme) }}\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 880.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-533\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery8.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"{{ url('assets/images/gallery/gallery8.jpg'|theme) }}\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 0.219298%; top: 1096.5px;\">

                                            <a class=\"os_fancybox-79\" id=\"os_image_id-536\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery11.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\">
                                                </div>
                                                <img src=\"{{ url('assets/images/gallery/gallery11.jpg'|theme) }}\">

                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>

                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 1096.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-535\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery10.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery10.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 2.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-540\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery12.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery12.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>
                                        
                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 65.9211%; top: 2.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-541\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery13.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery13.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>
                                        
                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery14.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery14.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery15.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery15.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery16.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery16.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery17.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery17.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>
                                        <div class=\"grid-item img-block dimas-effect\" style=\"margin: 2.5px; width: 32.2289%; font-size: 24.494px; line-height: 24.494px; position: absolute; left: 33.0263%; top: 217.5px;\">
                                            <a class=\"os_fancybox-79\" id=\"os_image_id-532\" rel=\"group\" target=\"\" href=\"{{ url('/themes/demo/assets/images/gallery/gallery18.jpg') }}\" data-os_fancybox-title=\"\" data-os_fancybox-alias=\"\">
                                                <div class=\"os-gallery-caption\"></div>
                                                <img src=\"{{ url('assets/images/gallery/gallery18.jpg'|theme) }}\">
                                                <span class=\"andrea-zoom-in\"></span>
                                            </a>
                                        </div>

                                        
                                    </div>
                                    <!-- END simple mod-->

                                </div>

                                <script type=\"text/javascript\" charset=\"utf-8\" async=\"\" defer=\"\">
                                    (function() {
                                        var osGallery59 = function(container, params) {
                                            if (!(this instanceof osGallery59)) return new osGallery59(container, params);

                                            var defaults = {
                                                minImgEnable: 1,
                                                spaceBetween: 2.5,
                                                minImgSize: 200,
                                                numColumns: 3,
                                                fancSettings: {
                                                    wrapCSS: 'os-os_fancybox-window',
                                                    openEffect: '',
                                                    openSpeed: 500,
                                                    closeEffect: '',
                                                    closeSpeed: 500,
                                                    prevEffect: '',
                                                    nextEffect: '',
                                                    nextSpeed: 800,
                                                    prevSpeed: 800,
                                                    loop: 0,
                                                    closeBtn: 1,
                                                    arrows: 1,
                                                    arrowsPosition: 1,
                                                    nextClick: 0,
                                                    mouseWheel: 0,
                                                    autoPlay: 0,
                                                    playSpeed: 3000,
                                                    buttons: new Array(),
                                                    downloadButton: 0
                                                }
                                            };

                                            for (var param in defaults) {
                                                if (!params[param]) {
                                                    params[param] = defaults[param];
                                                }
                                            }
                                            // gallery settings
                                            var osg = this;
                                            // Params
                                            osg.params = params || defaults;

                                            osg.getImgBlockWidth = function(numColumns) {
                                                if (typeof(numColumns) == 'undefined') numColumns = osg.params.numColumns;
                                                var checkSpaceBetween = 2.5;
                                                spaceBetween = osg.params.spaceBetween * 2;
                                                mainBlockW = jQuerGall(container).width();

                                                var percentGridSizer = Math.round(100 / numColumns);
                                                var gridSizer = Math.round(mainBlockW / numColumns);

                                                imgBlockWpx = Math.floor(((mainBlockW - (spaceBetween * numColumns)) / numColumns - 1));

                                                imgBlockW = percentGridSizer * imgBlockWpx / gridSizer - 0.25;

                                                if (!checkSpaceBetween) imgBlockW = percentGridSizer;

                                                jQuerGall(\".grid-sizer\").css('width', percentGridSizer + \"%\");
                                                jQuerGall(\".grid-item\").css('width', imgBlockW + \"%\");
                                                var sizeAwesome = ((imgBlockW * mainBlockW) / 100) / 11 + \"px\";
                                                jQuerGall(container + \" .andrea-effect .andrea-zoom-in\").css({
                                                    'width': sizeAwesome,
                                                    'height': sizeAwesome
                                                });

                                                var fontSizetext = ((imgBlockW * mainBlockW) / 100) / 15 + \"px\";
                                                jQuerGall(container + \" .grid-item\").css({
                                                    'font-size': fontSizetext,
                                                    'line-height': fontSizetext
                                                });

                                                return imgBlockW;
                                            }

                                            osg.isotope = function() {
                                                jQuerGall(container + ' .grid').isotope({
                                                    itemSelector: '.grid-item',
                                                    percentPosition: true,
                                                    masonry: {
                                                        columnWidth: '.grid-sizer'
                                                    },
                                                });
                                            }

                                            osg.reloadIsotope = function() {
                                                jQuerGall(container + ' .grid').isotope();
                                            }

                                            osg.reloadAfterLazyLoad = function() {
                                                jQuerGall('.grid').isotope('reloadItems');
                                                osg.resizeGallery();
                                                jQuerGall(container + ' .grid').imagesLoaded(function() {
                                                    osg.isotope();
                                                });
                                            }

                                            //initialize function
                                            osg.init = function() {
                                                    imgBlockW = osg.getImgBlockWidth();
                                                    jQuerGall(container + \" .grid-item\").css(\"width\", imgBlockW + \"%\");

                                                    jQuerGall(container + \" .os-cat-tab-images div[id^='cat-']\").each(function(index, el) {
                                                        catId = jQuerGall(this).data(\"cat-id\");
                                                        if (catId) {
                                                            jQuerGall(this).find(\".os_fancybox-\" + catId).os_fancybox({
                                                                beforeShow: function() {
                                                                    if (osg.params.fancSettings.arrows && osg.params.fancSettings.arrowsPosition == 0 && !jQuerGall(\".gallery-fanc-next\").length) {
                                                                        jQuerGall(\".os_fancybox-nav.os_fancybox-prev,.os_fancybox-nav.os_fancybox-next\").remove();
                                                                        html = '<span title=\"Previous\" class=\"gallery-fanc-next\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                                                        html += '<span title=\"Next\" class=\"gallery-fanc-prev\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                                                        jQuerGall(\"body\").prepend(html);
                                                                    }
                                                                },
                                                                beforeClose: function() {
                                                                    var href = window.location.href;
                                                                    jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").remove();
                                                                    if (href.indexOf('&os_image_id') > -1)
                                                                        history.pushState(href, null, href.substring(0, href.indexOf('&os_image_id')));
                                                                    else
                                                                        history.pushState(href, null, href.substring(0, href.indexOf('?os_image_id')));
                                                                },
                                                                beforeLoad: function() {
                                                                    var id = this.element.attr('id');
                                                                    var href = window.location.href;

                                                                    if (href.indexOf('&os_image_id') > -1)
                                                                        history.pushState(null, null, href.substring(0, href.indexOf('&os_image_id')) + \"&\" + id);
                                                                    else if (href.indexOf('?os_image_id') > -1)
                                                                        history.pushState(href, null, href.substring(0, href.indexOf('?os_image_id')) + \"?\" + id);
                                                                    else if (href.indexOf('?') > -1 && href.indexOf('&') > -1 && href.indexOf('&os_image_id') == -1)
                                                                        history.pushState(null, null, href + '&' + id);
                                                                    else if (href.indexOf('&') == -1 && href.indexOf('?os_image_id') == -1)
                                                                        history.pushState(null, null, href + '?' + id);

                                                                },
                                                                afterShow: function() {
                                                                    var button = osg.params.fancSettings.buttons;
                                                                    var id = this.element.attr('id');
                                                                    var naturalWidth = jQuerGall(\"#img-\" + id.split('-')[1]).prop('naturalWidth');
                                                                    var fancAlias = this.element.attr('data-os_fancybox-alias');
                                                                    var divText = jQuerGall(\"#text-\" + id.split('-')[1]);
                                                                    var dataHtml = jQuerGall(\"#data-html-\" + id.split('-')[1]).html();

                                                                    if (fancAlias !== '') {
                                                                        var textSpan = jQuerGall(\".os_fancybox-title span\");
                                                                        if (textSpan.length > 0) {
                                                                            jQuerGall(\".os_fancybox-title span\").text(fancAlias);
                                                                        } else {
                                                                            jQuerGall(\".os_fancybox-title\").text(fancAlias);
                                                                        }
                                                                    }

                                                                    divText.css({
                                                                        'width': naturalWidth,
                                                                        'max-width': '100%'
                                                                    }).html(dataHtml);

                                                                    jQuerGall(\".os_fancybox-skin .os_fancybox-outer .os_fancybox-inner\").each(function() {

                                                                        var image = jQuerGall(\"img\", this);

                                                                        if (!jQuerGall.isEmptyObject(button)) {
                                                                            jQuerGall(this).css('position', 'relative');
                                                                            jQuerGall(this).append('<div id=\"sharing' + id.split('-')[1] + '\" class=\"sharing\"><div class=\"icons_os\" id=\"icons_os' + id.split('-')[1] + '\"></div><div class=\"icons_os_image\"></div>' + '</div>');

                                                                            for (var i = 0; i < button[id].length; i++) {
                                                                                jQuerGall(\"#icons_os\" + id.split('-')[1]).append(button[id][i]);
                                                                            };

                                                                            jQuerGall('[id^=icons_os] a').each(function() {
                                                                                jQuerGall(this).on('click', function(e) {
                                                                                    e.preventDefault();
                                                                                    window.open(this.href, 'default', \"height=800,width=600\");
                                                                                });
                                                                            });

                                                                            jQuerGall(\".icons_os_image\", this).on('click', function(event) {
                                                                                event.stopPropagation();
                                                                                if (jQuerGall(this).parent().find('.icons_os a').hasClass(\"zoomIn\")) {
                                                                                    jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomIn\");
                                                                                    jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomOut\");
                                                                                } else {
                                                                                    jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomOut\");
                                                                                    jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomIn\");
                                                                                }
                                                                            });
                                                                        }

                                                                        if (osg.params.fancSettings.downloadButton === 1 && image.length !== 0) {
                                                                            if (jQuerGall('#sharing' + id.split('-')[1]).length === 0) {
                                                                                jQuerGall(this).css('position', 'relative');
                                                                                jQuerGall(this).append('<div id=\"sharing' + id.split('-')[1] + '\" class=\"sharing\"></div>');
                                                                            }
                                                                            jQuerGall('#sharing' + id.split('-')[1]).append(
                                                                                '<a href=\"' + image.attr(\"src\") + '\" download>' + '<div class=\"icons_download\">' + '</div>' + '</a>');
                                                                            if (jQuerGall.isEmptyObject(button)) {
                                                                                jQuerGall('.icons_download').css('top', '5px');
                                                                            }
                                                                        }
                                                                    });

                                                                    jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").on('click', function() {
                                                                        jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").unbind();
                                                                    });
                                                                },
                                                                wrapCSS: osg.params.fancSettings.wrapCSS,
                                                                openEffect: osg.params.fancSettings.openEffect,
                                                                openSpeed: osg.params.fancSettings.openSpeed,

                                                                closeEffect: osg.params.fancSettings.closeEffect,
                                                                closeSpeed: osg.params.fancSettings.closeSpeed,

                                                                prevEffect: osg.params.fancSettings.prevEffect,
                                                                nextEffect: osg.params.fancSettings.nextEffect,

                                                                nextSpeed: osg.params.fancSettings.nextSpeed,
                                                                prevSpeed: osg.params.fancSettings.prevSpeed,

                                                                loop: osg.params.fancSettings.loop,
                                                                closeBtn: osg.params.fancSettings.closeBtn,
                                                                arrows: osg.params.fancSettings.arrows,
                                                                arrowsPosition: osg.params.fancSettings.arrowsPosition,
                                                                nextClick: osg.params.fancSettings.nextClick,
                                                                mouseWheel: osg.params.fancSettings.mouseWheel,
                                                                autoPlay: osg.params.fancSettings.autoPlay,
                                                                playSpeed: osg.params.fancSettings.playSpeed,

                                                                helpers: {
                                                                    title: {
                                                                        type: 'inside'
                                                                    },
                                                                    overlay: {
                                                                        locked: false,
                                                                        closeClick: 1,
                                                                        css: {
                                                                            'background': 'rgba(238,238,238,0)'
                                                                        }
                                                                    },
                                                                    thumbs: {
                                                                        width: 50,
                                                                        height: 50
                                                                    }
                                                                }
                                                            });
                                                        }
                                                    });
                                                    jQuerGall(container + \" .os-cat-tab-images div:first-child\").show();
                                                    jQuerGall(container + \" .osgalery-cat-tabs li:first-child a\").addClass(\"active\");
                                                    var curCatId = jQuerGall(container + \" .osgalery-cat-tabs a.active\").attr('data-cat-id');
                                                    var curEnd = jQuerGall(container + \" .osgalery-cat-tabs a.active\").attr('data-end');
                                                    jQuerGall(\"#load-more-59\").attr('data-cat-id', curCatId);
                                                    jQuerGall(\"#load-more-59\").attr('data-end', curEnd);

                                                    jQuerGall(container + \" .osgalery-cat-tabs a\").click(function(e) {
                                                        e.preventDefault();
                                                        jQuerGall('li a').removeClass(\"active\");
                                                        jQuerGall(container + \" .os-cat-tab-images>div\").hide();
                                                        jQuerGall(this).addClass(\"active\");
                                                        curCatId = jQuerGall(container + \" .osgalery-cat-tabs a.active\").attr('data-cat-id');
                                                        jQuerGall(\"#load-more-59\").attr('data-cat-id', curCatId);
                                                        curEnd = jQuerGall(container + \" .osgalery-cat-tabs a.active\").attr('data-end');
                                                        if (curEnd != -1)
                                                            jQuerGall(\"#load-more-59\").removeAttr(\"disabled\");
                                                        jQuerGall(\"#load-more-59\").attr('data-end', curEnd);
                                                        jQuerGall(jQuerGall(this).attr(\"href\")).fadeTo(500, 1);
                                                        osg.reloadIsotope();
                                                    });

                                                    osg.resizeGallery = function() {
                                                        imgBlockW = osg.getImgBlockWidth();
                                                        jQuerGall(container + \" .grid-item\").css(\"width\", imgBlockW + \"%\");
                                                    }

                                                    jQuerGall(window).resize(function(event) {
                                                        osg.resizeGallery();
                                                    });
                                                    osg.isotope();
                                                }
                                                // jQuerGall(container + ' .grid').imagesLoaded(function(){
                                            osg.init();
                                            // });
                                        }
                                        window.osGallery59 = osGallery59;
                                    })();

                                    jQuery(window).on('load', function(\$) {
                                        var gallery = new osGallery59(\".os-gallery-tabs-main-59\", {
                                            minImgEnable: 1,
                                            spaceBetween: 2.5,
                                            minImgSize: 200,
                                            numColumns: 3,
                                            fancSettings: {
                                                wrapCSS: 'os-os_fancybox-window',
                                                openEffect: \"fade\",
                                                openSpeed: 500,
                                                closeEffect: \"fade\",
                                                closeSpeed: 500,
                                                prevEffect: \"elastic\",
                                                nextEffect: \"elastic\",
                                                nextSpeed: 500,
                                                prevSpeed: 500,
                                                loop: 1,
                                                closeBtn: 1,
                                                arrows: 1,
                                                arrowsPosition: 0,
                                                nextClick: 1,
                                                mouseWheel: 1,
                                                autoPlay: 0,
                                                playSpeed: 3000,
                                                buttons: {
                                                    \"os_image_id-537\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery4.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery4.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery4.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery4.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-537&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery4.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-536\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery11.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery11.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery11.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery11.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-536&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery11.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-535\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery10.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery10.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery10.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery10.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-535&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery10.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-534\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534&amp;title=My Favorite house&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2F806-1e6f343e6-74dc-52aa-555b-ececcbe926d7-minF5592C00-C95C-244E-DD3A-8DEBADC3EA4C.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534&amp;st.comments=My Favorite house&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2F806-1e6f343e6-74dc-52aa-555b-ececcbe926d7-minF5592C00-C95C-244E-DD3A-8DEBADC3EA4C.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534&amp;text=My Favorite house&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2F806-1e6f343e6-74dc-52aa-555b-ececcbe926d7-minF5592C00-C95C-244E-DD3A-8DEBADC3EA4C.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534&amp;description=My Favorite house&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2F806-1e6f343e6-74dc-52aa-555b-ececcbe926d7-minF5592C00-C95C-244E-DD3A-8DEBADC3EA4C.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-534&amp;title=My Favorite house&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2F806-1e6f343e6-74dc-52aa-555b-ececcbe926d7-minF5592C00-C95C-244E-DD3A-8DEBADC3EA4C.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-533\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery8.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery8.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery8.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery8.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-533&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery8.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-532\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery3.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery3.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery3.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery3.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-532&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery3.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-538\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery7.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery7.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery7.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery7.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-538&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery7.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-539\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-539&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-540\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery1.jpg\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery1.jpg\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery1.jpg\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery1.jpg\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-540&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery1.jpg\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-541\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery2.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery2.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery2.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery2.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-541&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery2.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-542\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery5.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery5.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery5.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery5.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-542&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery5.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-543\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery6.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery6.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery6.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery6.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-543&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-59%2Foriginal%2Fgallery6.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"]
                                                },
                                                downloadButton: 1
                                            }
                                        });
                                        // add load more script
                                        var limEnd = 5;
                                        jQuerGall(\"#load-more-59\").on(\"click\", function() {
                                            var path = \"index.php?option=com_osgallery&format=raw\";
                                            jQuerGall.post(
                                                path, {
                                                    task: \"loadMoreButton\",
                                                    Itemid: '101',
                                                    end: jQuerGall(\"#load-more-59\").attr('data-end'),
                                                    catId: jQuerGall(\"#load-more-59\").attr('data-cat-id'),
                                                    galId: 59
                                                },
                                                function(data) {
                                                    if (data.success) {
                                                        jQuerGall(\"#cat-\" + data.catId).append(data.html);
                                                        jQuerGall(\"#cat-\" + data.catId + \", #load-more-59\").attr('data-end', data.limEnd);
                                                        if (data.limEnd == -1)
                                                            jQuerGall(\"#load-more-59\").attr(\"disabled\", \"disabled\");
                                                        limEnd = data.limEnd;
                                                        gallery.reloadAfterLazyLoad();
                                                    }
                                                }, 'json');
                                        });
                                        // end load more script

                                        // add social sharing script
                                        var href = window.location.href;
                                        var img_el_id = '';
                                        var pos = href.indexOf('os_image_id');
                                        if (pos > -1)
                                            img_el_id = href.substring(pos);

                                        if (img_el_id && img_el_id.indexOf('os_image_id') > -1) {
                                            if (document.getElementById(img_el_id) !== null) {
                                                jQuerGall('#' + img_el_id).trigger('click');
                                            }
                                        }
                                        // end sharing script
                                    });
                                </script>
                            </div>

                            <h3>    <div class=\"os-gallery-tabs-main-63\">


    <script>
        (function () {
            var osGallery63 = function (container, params) {
                if (!(this instanceof osGallery63)) return new osGallery63(container, params);

                var defaults = {
                    minImgEnable : 1,
                    spaceBetween: 2.5,
                    minImgSize: 200,
                    numColumns: 3,
                    fancSettings:{
                        wrapCSS: 'os-os_fancybox-window',
                        openEffect: '',
                        openSpeed: 500,
                        closeEffect: '',
                        closeSpeed: 500,
                        prevEffect: '',
                        nextEffect: '',
                        nextSpeed: 800,
                        prevSpeed: 800,
                        loop: 0,
                        closeBtn: 1,
                        arrows: 1,
                        arrowsPosition: 1,
                        nextClick: 0,
                        mouseWheel: 0,
                        autoPlay: 0,
                        playSpeed: 3000,
                        buttons: new Array(),
                        downloadButton: 0                        
                    }
                };

                for (var param in defaults) {
                  if (!params[param]){
                    params[param] = defaults[param];
                  }
                }
                // gallery settings
                var osg = this;
                // Params
                osg.params = params || defaults;

                osg.getImgBlockWidth = function (numColumns){
                    if(typeof(numColumns) == 'undefined')numColumns = osg.params.numColumns;
                    spaceBetween = osg.params.spaceBetween*2;
                    mainBlockW = jQuerGall(container).width();
                    imgBlockW = ((((mainBlockW-(spaceBetween*numColumns))/numColumns)-1)*100)/mainBlockW;
                    if(osg.params.minImgEnable){
                        if(((imgBlockW*mainBlockW)/100) < osg.params.minImgSize){
                            numColumns--;
                            osg.getImgBlockWidth(numColumns);
                        }
                    }

                    var sizeAwesome = ((imgBlockW*mainBlockW)/100)/11+\"px\";
                    jQuerGall(container +\" .andrea-effect .andrea-zoom-in\").css({'width': sizeAwesome, 'height': sizeAwesome });

                    var fontSizetext = ((imgBlockW*mainBlockW)/100)/15+\"px\";
                    jQuerGall(container +\" .img-block\").css({'font-size': fontSizetext, 'line-height': fontSizetext });

                    return imgBlockW;
                }

                //initialize function
                osg.init = function (){
                    imgBlockW = osg.getImgBlockWidth();
                    jQuerGall(container+\" .img-block\").css(\"width\",imgBlockW+\"%\");

                    jQuerGall(container+\" .os-cat-tab-images div[id^='cat-']\").each(function(index, el) {
                        catId = jQuerGall(this).data(\"cat-id\");
                        if(catId){

                            jQuerGall(this).find(\".os_fancybox-\"+catId ).os_fancybox({
                                beforeShow: function(){

                                    if(osg.params.fancSettings.arrows && osg.params.fancSettings.arrowsPosition == 0 
                                        && !jQuerGall(\".gallery-fanc-next\").length ){
                                        jQuerGall(\".os_fancybox-nav.os_fancybox-prev,.os_fancybox-nav.os_fancybox-next\").remove();
                                        html = '<span title=\"Previous\" class=\"gallery-fanc-next\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                        html+= '<span title=\"Next\" class=\"gallery-fanc-prev\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                        jQuerGall(\"body\").prepend(html);
                                    }   
                                },
                                beforeClose: function(){
                                    var href = window.location.href;
                                    jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").remove();
                                    if (href.indexOf('&os_image_id') > -1)
                                        history.pushState (href, null, href.substring(0, href.indexOf('&os_image_id')));
                                    else 
                                        history.pushState (href, null, href.substring(0, href.indexOf('?os_image_id')));
                                },
                                beforeLoad: function() {
                                    var id = this.element.attr('id');
                                    var href = window.location.href;

                                    if (href.indexOf('&os_image_id') > -1) 
                                        history.pushState (null, null, href.substring(0, href.indexOf('&os_image_id') )+ \"&\" + id);
                                    else if (href.indexOf('?os_image_id') > -1) 
                                        history.pushState (href, null, href.substring(0, href.indexOf('?os_image_id')) + \"?\" + id);
                                    else if (href.indexOf('?') > -1 && href.indexOf('&') > -1 && href.indexOf('&os_image_id') == -1)
                                        history.pushState(null, null, href + '&' + id);
                                    else if ( href.indexOf('&') == -1 && href.indexOf('?os_image_id') == -1)
                                        history.pushState(null, null, href + '?' + id);

                                },
                                afterShow: function() {

                                    var button = osg.params.fancSettings.buttons;
                                    var id = this.element.attr('id');
                                    var naturalWidth = jQuerGall(\"#img-\" + id.split('-')[1]).prop('naturalWidth') ;
                                    var fancAlias = this.element.attr('data-os_fancybox-alias');
                                    var divText = jQuerGall(\"#text-\" + id.split('-')[1]);
                                    var dataHtml = jQuerGall(\"#data-html-\" + id.split('-')[1]).html();

                                    if (fancAlias !== '') {
                                        var textSpan = jQuerGall(\".os_fancybox-title span\");
                                        if (textSpan.length > 0) {
                                            jQuerGall(\".os_fancybox-title span\").text(fancAlias);
                                        } else {
                                            jQuerGall(\".os_fancybox-title\").text(fancAlias);
                                        }
                                    }

                                    divText.css({'width': naturalWidth, 'max-width': '100%'} ).html(dataHtml);

                                    jQuerGall(\".os_fancybox-skin .os_fancybox-outer .os_fancybox-inner\").each(function(){

                                        if (!jQuerGall.isEmptyObject(button)) {

                                            jQuerGall(this).css('position', 'relative');
                                            jQuerGall(this).append('<div id=\"sharing'+ id.split('-')[1] + '\" class=\"sharing\"><div class=\"icons_os\" id=\"icons_os'
                                                + id.split('-')[1]+'\"></div><div class=\"icons_os_image\"></div>'
                                                + '</div>');

                                            for (var i = 0; i < button[id].length; i++) {
                                                jQuerGall(\"#icons_os\"+id.split('-')[1]).append(button[id][i]);
                                            };

                                            jQuerGall('[id^=icons_os] a').each(function(){
                                                jQuerGall(this).on('click', function(e){
                                                    e.preventDefault();
                                                    window.open(this.href, 'default', \"height=800,width=600\");
                                                });
                                            });

                                            jQuerGall(\".icons_os_image\", this).on('click', function(event){
                                                event.stopPropagation();
                                                if (jQuerGall(this).parent().find('.icons_os a').hasClass(\"zoomIn\")) {
                                                    jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomIn\");
                                                    jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomOut\");
                                                } else {
                                                    jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomOut\");
                                                    jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomIn\");
                                                }
                                            });
                                        }

                                        if ( osg.params.fancSettings.downloadButton === 1) {
                                            if (jQuerGall('#sharing' + id.split('-')[1]).length === 0) {
                                                jQuerGall(this).css('position', 'relative');
                                                jQuerGall(this).append('<div id=\"sharing'+ id.split('-')[1] + '\" class=\"sharing\"></div>');
                                            } 
                                            jQuerGall('#sharing' + id.split('-')[1]).append(
                                                '<a href=\"' + jQuerGall(\"img\", this).attr(\"src\") 
                                                + '\" download>'
                                                + '<div class=\"icons_download\">' 
                                                + '</div>' 
                                                + '</a>');
                                            if (jQuerGall.isEmptyObject(button)) {
                                                jQuerGall('.icons_download').css('top', '5px');
                                            }
                                        }

                                    });

                                    jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").on('click', function(){
                                        jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").unbind();
                                    });                            
                                },
                                wrapCSS    : osg.params.fancSettings.wrapCSS,
                                openEffect : osg.params.fancSettings.openEffect,
                                openSpeed  : osg.params.fancSettings.openSpeed,

                                closeEffect : osg.params.fancSettings.closeEffect,
                                closeSpeed  : osg.params.fancSettings.closeSpeed,

                                prevEffect : osg.params.fancSettings.prevEffect,
                                nextEffect : osg.params.fancSettings.nextEffect,

                                nextSpeed: osg.params.fancSettings.nextSpeed,
                                prevSpeed: osg.params.fancSettings.prevSpeed,

                                loop: osg.params.fancSettings.loop,
                                closeBtn: osg.params.fancSettings.closeBtn,
                                arrows: osg.params.fancSettings.arrows,
                                arrowsPosition: osg.params.fancSettings.arrowsPosition,
                                nextClick: osg.params.fancSettings.nextClick,
                                mouseWheel: osg.params.fancSettings.mouseWheel,
                                autoPlay: osg.params.fancSettings.autoPlay,
                                playSpeed: osg.params.fancSettings.playSpeed,

                                helpers : {
                                    title : {type : 'inside'},
                                    overlay : {locked: false,closeClick : 1,css : {'background' : 'rgba(238,238,238,0)'}}
                                                                            ,thumbs : {width  : 50,height : 50}                                    },
                            });
                        }
                    });

                    jQuerGall(container+\" .os-cat-tab-images div:first-child\").show();
                    jQuerGall(container+\" .osgalery-cat-tabs li:first-child a\").addClass(\"active\");
                    var curCatId = jQuerGall(container+\" .osgalery-cat-tabs a.active\").attr('data-cat-id');
                    var curEnd = jQuerGall(container+\" .osgalery-cat-tabs a.active\").attr('data-end');
                    jQuerGall(\"#load-more-63\").attr('data-cat-id', curCatId);
                    jQuerGall(\"#load-more-63\").attr('data-end', curEnd);

                    jQuerGall(container+\" .osgalery-cat-tabs a\").click(function(e) {
                        e.preventDefault();
                        jQuerGall('li a').removeClass(\"active\");
                        jQuerGall(container+\" .os-cat-tab-images>div\").hide();
                        jQuerGall(this).addClass(\"active\");
                        curCatId = jQuerGall(container+\" .osgalery-cat-tabs a.active\").attr('data-cat-id');
                        jQuerGall(\"#load-more-63\").attr('data-cat-id', curCatId);
                        curEnd = jQuerGall(container+\" .osgalery-cat-tabs a.active\").attr('data-end');
                        if(curEnd != -1)
                            jQuerGall(\"#load-more-63\").removeAttr(\"disabled\");
                        jQuerGall(\"#load-more-63\").attr('data-end', curEnd);
                        jQuerGall(jQuerGall(this).attr(\"href\")).fadeTo(500, 1);

                    });

                    osg.resizeGallery = function (){
                        imgBlockW = osg.getImgBlockWidth();
                        jQuerGall(container+\" .img-block\").css(\"width\",imgBlockW+\"%\");
                    }

                    jQuerGall(window).resize(function(event) {
                        osg.resizeGallery();
                    });
                }
                osg.loadMore = function() {

                }
                osg.init();
            }
            window.osGallery63 = osGallery63;
        })();
        jQuery(window).on('load',function(\$) {
            var gallery= new osGallery63(\".os-gallery-tabs-main-63\",{
                minImgEnable : 1,
                spaceBetween: 2.5,
                minImgSize: 200,
                numColumns: 3,
                fancSettings:{
                    wrapCSS: 'os-os_fancybox-window',
                    openEffect: \"fade\",
                    openSpeed: 500,
                    closeEffect: \"fade\",
                    closeSpeed: 500,
                    prevEffect: \"elastic\",
                    nextEffect: \"elastic\",
                    nextSpeed: 500,
                    prevSpeed: 500,
                    loop: 1,
                    closeBtn: 1,
                    arrows: 1,
                    arrowsPosition: 0,
                    nextClick: 0,
                    mouseWheel: 1,
                    autoPlay: 0,
                    playSpeed: 3000,
                    buttons: [],
                    downloadButton: 0                    }
            });

            // add load more script
            var limEnd = 5;
            jQuerGall(\"#load-more-63\").on(\"click\", function() {
                var path = \"index.php?option=com_osgallery&format=raw\";
                jQuerGall.post(
                    path,
                    {
                        task : \"loadMoreButton\",
                        Itemid: '101',
                        end : jQuerGall(\"#load-more-63\").attr('data-end'),
                        catId : jQuerGall(\"#load-more-63\").attr('data-cat-id'),
                        galId : 63                        },
                    function(data) {
                        if(data.success){
                            jQuerGall(\"#cat-\"+data.catId).append(data.html);
                            jQuerGall(\"#cat-\"+ data.catId+ \", #load-more-63\").attr('data-end', data.limEnd);
                            if(data.limEnd == -1)
                                jQuerGall(\"#load-more-63\").attr(\"disabled\",\"disabled\");
                            limEnd = data.limEnd;
                            gallery.resizeGallery();
                        }
                    }, 'json');
            });
            // end load more script

            // add social sharing script
            var href = window.location.href;
            var img_el_id = '';
            var pos = href.indexOf('os_image_id'); 
            if (pos > -1) 
                img_el_id = href.substring(pos);

            if(img_el_id && img_el_id.indexOf('os_image_id') > -1)  {
                 if(document.getElementById(img_el_id) !== null){
                     jQuerGall('#' + img_el_id).trigger('click');
                 }
            }
            // end sharing script               
        });
    </script>
</div>
</h3>
                           
                            <div class=\"os-gallery-all-in-one-main-1\">
       
                                <script>
                                    (function() {
                                        var osGallery1 = function(container, params) {
                                            if (!(this instanceof osGallery1)) return new osGallery1(container, params);

                                            var defaults = {
                                                minImgEnable: 1,
                                                spaceBetween: 2.5,
                                                minImgSize: 200,
                                                numColumns: 3,
                                                fancSettings: {
                                                    wrapCSS: 'os-os_fancybox-window',
                                                    openEffect: '',
                                                    openSpeed: 500,
                                                    closeEffect: '',
                                                    closeSpeed: 500,
                                                    prevEffect: '',
                                                    nextEffect: '',
                                                    nextSpeed: 800,
                                                    prevSpeed: 800,
                                                    loop: 0,
                                                    closeBtn: 1,
                                                    arrows: 1,
                                                    arrowsPosition: 1,
                                                    nextClick: 0,
                                                    mouseWheel: 0,
                                                    autoPlay: 0,
                                                    playSpeed: 3000,
                                                    buttons: new Array(),
                                                    downloadButton: 0
                                                }
                                            };

                                            for (var param in defaults) {
                                                if (!params[param]) {
                                                    params[param] = defaults[param];
                                                }
                                            }
                                            // gallery settings
                                            var osg = this;
                                            // Params
                                            osg.params = params || defaults;

                                            osg.getImgBlockWidth = function(numColumns) {
                                                if (typeof(numColumns) == 'undefined') numColumns = osg.params.numColumns;
                                                spaceBetween = osg.params.spaceBetween * 2;
                                                mainBlockW = jQuerGall(container).width();
                                                imgBlockW = ((((mainBlockW - (spaceBetween * numColumns)) / numColumns) - 1) * 100) / mainBlockW;
                                                if (osg.params.minImgEnable) {
                                                    if (((imgBlockW * mainBlockW) / 100) < osg.params.minImgSize) {
                                                        numColumns--;
                                                        osg.getImgBlockWidth(numColumns);
                                                    }
                                                }

                                                var sizeAwesome = ((imgBlockW * mainBlockW) / 100) / 11 + \"px\";
                                                jQuerGall(container + \" .andrea-effect .andrea-zoom-in\").css({
                                                    'width': sizeAwesome,
                                                    'height': sizeAwesome
                                                });

                                                var fontSizetext = ((imgBlockW * mainBlockW) / 100) / 15 + \"px\";
                                                jQuerGall(container + \" .img-block\").css({
                                                    'font-size': fontSizetext,
                                                    'line-height': fontSizetext
                                                });

                                                return imgBlockW;
                                            }

                                            //initialize function
                                            osg.init = function() {
                                                imgBlockW = osg.getImgBlockWidth();
                                                jQuerGall(container + \" .all-in-one-block .img-block:first-child\").css(\"width\", imgBlockW + \"%\");
                                                jQuerGall(container + \" .os-cat-tab-images\").show();

                                                jQuerGall(container + \" .os-cat-tab-images div[id^='cat-']\").each(function(index, el) {
                                                    catId = jQuerGall(this).data(\"cat-id\");
                                                    if (catId) {
                                                        jQuerGall(this).find(\".os_fancybox-\" + catId).os_fancybox({
                                                            beforeShow: function() {
                                                                if (osg.params.fancSettings.arrows && osg.params.fancSettings.arrowsPosition == 0 && !jQuerGall(\".gallery-fanc-next\").length) {
                                                                    jQuerGall(\".os_fancybox-nav.os_fancybox-prev,.os_fancybox-nav.os_fancybox-next\").remove();
                                                                    html = '<span title=\"Previous\" class=\"gallery-fanc-next\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                                                    html += '<span title=\"Next\" class=\"gallery-fanc-prev\" style=\"width: 10%\" href=\"javascript:;\"><span></span></span>';
                                                                    jQuerGall(\"body\").prepend(html);
                                                                }
                                                            },
                                                            beforeClose: function() {
                                                                var href = window.location.href;
                                                                jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").remove();
                                                                if (href.indexOf('&os_image_id') > -1)
                                                                    history.pushState(href, null, href.substring(0, href.indexOf('&os_image_id')));
                                                                else
                                                                    history.pushState(href, null, href.substring(0, href.indexOf('?os_image_id')));
                                                            },
                                                            beforeLoad: function() {
                                                                var id = this.element.attr('id');
                                                                var href = window.location.href;

                                                                if (href.indexOf('&os_image_id') > -1)
                                                                    history.pushState(null, null, href.substring(0, href.indexOf('&os_image_id')) + \"&\" + id);
                                                                else if (href.indexOf('?os_image_id') > -1)
                                                                    history.pushState(href, null, href.substring(0, href.indexOf('?os_image_id')) + \"?\" + id);
                                                                else if (href.indexOf('?') > -1 && href.indexOf('&') > -1 && href.indexOf('&os_image_id') == -1)
                                                                    history.pushState(null, null, href + '&' + id);
                                                                else if (href.indexOf('&') == -1 && href.indexOf('?os_image_id') == -1)
                                                                    history.pushState(null, null, href + '?' + id);

                                                            },
                                                            afterShow: function() {
                                                                var button = osg.params.fancSettings.buttons;
                                                                var id = this.element.attr('id');
                                                                var naturalWidth = jQuerGall(\"#img-\" + id.split('-')[1]).prop('naturalWidth');
                                                                var fancAlias = this.element.attr('data-os_fancybox-alias');
                                                                var divText = jQuerGall(\"#text-\" + id.split('-')[1]);
                                                                var dataHtml = jQuerGall(\"#data-html-\" + id.split('-')[1]).html();

                                                                if (fancAlias !== '') {
                                                                    var textSpan = jQuerGall(\".os_fancybox-title span\");
                                                                    if (textSpan.length > 0) {
                                                                        jQuerGall(\".os_fancybox-title span\").text(fancAlias);
                                                                    } else {
                                                                        jQuerGall(\".os_fancybox-title\").text(fancAlias);
                                                                    }
                                                                }

                                                                divText.css({
                                                                    'width': naturalWidth,
                                                                    'max-width': '100%'
                                                                }).html(dataHtml);

                                                                jQuerGall(\".os_fancybox-skin .os_fancybox-outer .os_fancybox-inner\").each(function() {

                                                                    if (!jQuerGall.isEmptyObject(button)) {
                                                                        jQuerGall(this).css('position', 'relative');
                                                                        jQuerGall(this).append('<div id=\"sharing' + id.split('-')[1] + '\" class=\"sharing\"><div class=\"icons_os\" id=\"icons_os' + id.split('-')[1] + '\"></div><div class=\"icons_os_image\"></div>' + '</div>');

                                                                        for (var i = 0; i < button[id].length; i++) {
                                                                            jQuerGall(\"#icons_os\" + id.split('-')[1]).append(button[id][i]);
                                                                        };

                                                                        jQuerGall('[id^=icons_os] a').each(function() {
                                                                            jQuerGall(this).on('click', function(e) {
                                                                                e.preventDefault();
                                                                                window.open(this.href, 'default', \"height=800,width=600\");
                                                                            });
                                                                        });

                                                                        jQuerGall(\".icons_os_image\", this).on('click', function(event) {
                                                                            event.stopPropagation();
                                                                            if (jQuerGall(this).parent().find('.icons_os a').hasClass(\"zoomIn\")) {
                                                                                jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomIn\");
                                                                                jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomOut\");
                                                                            } else {
                                                                                jQuerGall(this).parent().find('.icons_os a').removeClass(\"zoomOut\");
                                                                                jQuerGall(this).parent().find('.icons_os a').addClass(\"zoomIn\");
                                                                            }
                                                                        });
                                                                    }

                                                                    if (osg.params.fancSettings.downloadButton === 1) {
                                                                        if (jQuerGall('#sharing' + id.split('-')[1]).length === 0) {
                                                                            jQuerGall(this).css('position', 'relative');
                                                                            jQuerGall(this).append('<div id=\"sharing' + id.split('-')[1] + '\" class=\"sharing\"></div>');
                                                                        }
                                                                        jQuerGall('#sharing' + id.split('-')[1]).append(
                                                                            '<a href=\"' + jQuerGall(\"img\", this).attr(\"src\") + '\" download>' + '<div class=\"icons_download\">' + '</div>' + '</a>');
                                                                        if (jQuerGall.isEmptyObject(button)) {
                                                                            jQuerGall('.icons_download').css('top', '5px');
                                                                        }
                                                                    }
                                                                });

                                                                jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").on('click', function() {
                                                                    jQuerGall(\".gallery-fanc-next,.gallery-fanc-prev\").unbind();
                                                                });
                                                            },
                                                            wrapCSS: osg.params.fancSettings.wrapCSS,
                                                            openEffect: osg.params.fancSettings.openEffect,
                                                            openSpeed: osg.params.fancSettings.openSpeed,

                                                            closeEffect: osg.params.fancSettings.closeEffect,
                                                            closeSpeed: osg.params.fancSettings.closeSpeed,

                                                            prevEffect: osg.params.fancSettings.prevEffect,
                                                            nextEffect: osg.params.fancSettings.nextEffect,

                                                            nextSpeed: osg.params.fancSettings.nextSpeed,
                                                            prevSpeed: osg.params.fancSettings.prevSpeed,

                                                            loop: osg.params.fancSettings.loop,
                                                            closeBtn: osg.params.fancSettings.closeBtn,
                                                            arrows: osg.params.fancSettings.arrows,
                                                            arrowsPosition: osg.params.fancSettings.arrowsPosition,
                                                            nextClick: osg.params.fancSettings.nextClick,
                                                            mouseWheel: osg.params.fancSettings.mouseWheel,
                                                            autoPlay: osg.params.fancSettings.autoPlay,
                                                            playSpeed: osg.params.fancSettings.playSpeed,

                                                            helpers: {
                                                                title: {
                                                                    type: 'inside'
                                                                },
                                                                overlay: {
                                                                    locked: false,
                                                                    closeClick: 1,
                                                                    css: {
                                                                        'background': 'rgba(0, 0, 0, 0.75)'
                                                                    }
                                                                },
                                                                buttons: {},
                                                                thumbs: {
                                                                    width: 200,
                                                                    height: 200
                                                                }
                                                            }
                                                        });
                                                    }
                                                });

                                                osg.resizeGallery = function() {
                                                    imgBlockW = osg.getImgBlockWidth();
                                                    jQuerGall(container + \" .all-in-one-block .img-block:first-child\").css(\"width\", imgBlockW + \"%\");
                                                }

                                                jQuerGall(window).resize(function(event) {
                                                    osg.resizeGallery();
                                                });
                                            }

                                            osg.init();
                                        }
                                        window.osGallery1 = osGallery1;
                                    })();
                                    jQuery(window).on('load', function(\$) {
                                        var gallery = new osGallery1(\".os-gallery-all-in-one-main-1\", {
                                            minImgEnable: 1,
                                            spaceBetween: 0,
                                            minImgSize: 225,
                                            numColumns: 1,
                                            fancSettings: {
                                                wrapCSS: 'os-os_fancybox-window',
                                                openEffect: \"elastic\",
                                                openSpeed: 500,
                                                closeEffect: \"elastic\",
                                                closeSpeed: 500,
                                                prevEffect: \"elastic\",
                                                nextEffect: \"elastic\",
                                                nextSpeed: 500,
                                                prevSpeed: 500,
                                                loop: 1,
                                                closeBtn: 1,
                                                arrows: 1,
                                                arrowsPosition: 0,
                                                nextClick: 0,
                                                mouseWheel: 1,
                                                autoPlay: 0,
                                                playSpeed: 3000,
                                                buttons: {
                                                    \"os_image_id-127\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-6A19A243D-8038-23DF-2E09-A19BD7C275FE.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-6A19A243D-8038-23DF-2E09-A19BD7C275FE.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-6A19A243D-8038-23DF-2E09-A19BD7C275FE.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-6A19A243D-8038-23DF-2E09-A19BD7C275FE.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-127&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-6A19A243D-8038-23DF-2E09-A19BD7C275FE.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-126\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-5B1222FCE-FF9C-F742-E752-E452E51BE7ED.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-5B1222FCE-FF9C-F742-E752-E452E51BE7ED.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-5B1222FCE-FF9C-F742-E752-E452E51BE7ED.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-5B1222FCE-FF9C-F742-E752-E452E51BE7ED.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-126&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-5B1222FCE-FF9C-F742-E752-E452E51BE7ED.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-125\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-446DFBCD2-2A80-A3C4-5186-B47C0595F177.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-446DFBCD2-2A80-A3C4-5186-B47C0595F177.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-446DFBCD2-2A80-A3C4-5186-B47C0595F177.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-446DFBCD2-2A80-A3C4-5186-B47C0595F177.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-125&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-446DFBCD2-2A80-A3C4-5186-B47C0595F177.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-124\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124&amp;title=Aenean quis&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-289214C81-5555-DB88-0712-7DF4B2278BE9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124&amp;st.comments=Aenean quis&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-289214C81-5555-DB88-0712-7DF4B2278BE9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124&amp;text=Aenean quis&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-289214C81-5555-DB88-0712-7DF4B2278BE9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124&amp;description=Aenean quis&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-289214C81-5555-DB88-0712-7DF4B2278BE9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-124&amp;title=Aenean quis&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-289214C81-5555-DB88-0712-7DF4B2278BE9.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-123\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-199778C1C-756E-B1BD-3FC5-C9DC7A5AA40B.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-199778C1C-756E-B1BD-3FC5-C9DC7A5AA40B.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-199778C1C-756E-B1BD-3FC5-C9DC7A5AA40B.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-199778C1C-756E-B1BD-3FC5-C9DC7A5AA40B.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-123&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-199778C1C-756E-B1BD-3FC5-C9DC7A5AA40B.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"],
                                                    \"os_image_id-122\": [\"<a class=\\\"animated act soc1\\\" rel=\\\"noindex, nofollow\\\" href=\\\"http:\\/\\/www.facebook.com\\/sharer.php?u=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/facebook.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc2\\\" href=\\\"https:\\/\\/plus.google.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px;\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/google-plus.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc3\\\" href=\\\"http:\\/\\/vk.com\\/share.php?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-35CDBA93D-48EA-58E4-DE5E-61C4A0239472.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/vkontakte.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc4\\\" href=\\\"http:\\/\\/www.odnoklassniki.ru\\/dk?st.cmd=addShare&st.s=1&st._surl=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122&amp;st.comments=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-35CDBA93D-48EA-58E4-DE5E-61C4A0239472.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/odnoklassniki.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc5\\\" href=\\\"https:\\/\\/twitter.com\\/share?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122&amp;text=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-35CDBA93D-48EA-58E4-DE5E-61C4A0239472.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/twitter.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc6\\\" href=\\\"http:\\/\\/pinterest.com\\/pin\\/create\\/button\\/?url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122&amp;description=&amp;media=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-35CDBA93D-48EA-58E4-DE5E-61C4A0239472.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/pinterest.png\\\" \\/><\\/a>\", \"<a class=\\\"animated act soc7\\\" href=\\\"http:\\/\\/www.linkedin.com\\/shareArticle?mini=true&amp;url=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2F%3Fos_image_id-122&amp;title=&amp;image=http%3A%2F%2Fordasvit.com%2Fos-responsive-image-gallery%2Fimages%2Fcom_osgallery%2Fgal-1%2Foriginal%2Fdemo-hover-35CDBA93D-48EA-58E4-DE5E-61C4A0239472.png\\\" target=\\\"_blanck\\\"><img style=\\\"width: 32px; height:32px\\\" src=\\\"http:\\/\\/ordasvit.com\\/os-responsive-image-gallery\\/components\\/com_osgallery\\/assets\\/images\\/social\\/linkedin.png\\\" \\/><\\/a>\"]
                                                },
                                                downloadButton: 1
                                            }
                                        });

                                        // add social sharing script
                                        var href = window.location.href;
                                        var img_el_id = '';
                                        var pos = href.indexOf('os_image_id');
                                        if (pos > -1)
                                            img_el_id = href.substring(pos);

                                        if (img_el_id && img_el_id.indexOf('os_image_id') > -1) {
                                            if (document.getElementById(img_el_id) !== null) {
                                                jQuerGall('#' + img_el_id).trigger('click');
                                            }
                                        }
                                        // end sharing script
                                    });
                                </script>
                            </div>
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--globalContent-->

</div>
<!--wrapper-->", "C:\\xampp\\htdocs\\hotelladakhimperial/themes/demo/pages/gallery.htm", "");
    }
}
