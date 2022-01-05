<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/about-ladakh.htm */
class __TwigTemplate_2ec6787365026769a2aa6ecac7c3d198e2d04784ea9617d290ab280ab4bdc5f1 extends Twig_Template
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
        echo "<div class=\"container\" id=\"main-content-wrapper\">

  <div class=\"row\">

    <div class=\"col-md-9 main-content\">

        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>

        <img src=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/about-ladakh_img.jpg");
        echo "\" title=\"This is about Ladakh title\" alt=\"This is about Ladakh images 1\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">

        <p> Ladakh, a word which means \"Land of passes\", is a mountainous region in northwest Jammu &amp; Kashmir, in North India and in the area known as Trans-Himalaya. The settled population lives at an altitude between 2700m and 4500m, and nomadic encampments even higher. The temperature hardly gets any warmer than 27Degree Celsius while in winter they may plummet to minus 20 degree celcius . Buddhism culture dominates in Ladakh.</p>

        <p>&nbsp;“Little Tibet”, “ Heaven of Adventure”,  “The Moon Land” are the words Ladakh is often associated with. The well preserved Tibetan culture is a main attraction in Ladakh. It has an amazing history too. The land is mysterious enough and it’s several monasteries and local stories intrigue the listeners even more. This land holds and preserves an ancient civilization for numerous years.</p>

        <p>A hill station and a cold desert, Ladakh is one of those places with unparalled beauty. This Land of mountains, its picturesque location of monasteries, monks, the traditional folk songs and folk dance that come down the age almost unchanged, the colorful masked dances of the monastic festivals, the grandeur of snow-capped mountains around small and narrow mountain abode of man, a great attraction for tourist of all categories.</p>

        <p>Ladakh is not only home to some of the most beautiful and serene monasteries you'll ever see, but it also a land of rich natural beauty - and it's this natural beauty that hits you so hard, because it's a barren beauty. Many travelers find themselves at a loss to understand how something so barren can yet be so beautiful. Be respectful, these are holy places and active monks in most of them. So come and explore the Treasure-Trove of Mystic Ladakh. Touring this place will surely leave you spell-bounded. </p>



    </div><!-- Main Content -->



    <div class=\"col-md-3\">

        <div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>

            ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("tourCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "
        <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>

            ";
        // line 33
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 34
        echo "
        ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/right1"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "
    </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/about-ladakh.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 36,  71 => 35,  68 => 34,  64 => 33,  59 => 30,  55 => 29,  32 => 9,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\" id=\"main-content-wrapper\">
  <div class=\"row\">
    <div class=\"col-md-9 main-content\">
        <h1>{{ this.page.title }}</h1>
        <img src=\"{{'assets/images/about-ladakh_img.jpg'|theme}}\" title=\"This is about Ladakh title\" alt=\"This is about Ladakh images 1\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">
        <p> Ladakh, a word which means \"Land of passes\", is a mountainous region in northwest Jammu &amp; Kashmir, in North India and in the area known as Trans-Himalaya. The settled population lives at an altitude between 2700m and 4500m, and nomadic encampments even higher. The temperature hardly gets any warmer than 27Degree Celsius while in winter they may plummet to minus 20 degree celcius . Buddhism culture dominates in Ladakh.</p>
        <p>&nbsp;“Little Tibet”, “ Heaven of Adventure”,  “The Moon Land” are the words Ladakh is often associated with. The well preserved Tibetan culture is a main attraction in Ladakh. It has an amazing history too. The land is mysterious enough and it’s several monasteries and local stories intrigue the listeners even more. This land holds and preserves an ancient civilization for numerous years.</p>
        <p>A hill station and a cold desert, Ladakh is one of those places with unparalled beauty. This Land of mountains, its picturesque location of monasteries, monks, the traditional folk songs and folk dance that come down the age almost unchanged, the colorful masked dances of the monastic festivals, the grandeur of snow-capped mountains around small and narrow mountain abode of man, a great attraction for tourist of all categories.</p>
        <p>Ladakh is not only home to some of the most beautiful and serene monasteries you'll ever see, but it also a land of rich natural beauty - and it's this natural beauty that hits you so hard, because it's a barren beauty. Many travelers find themselves at a loss to understand how something so barren can yet be so beautiful. Be respectful, these are holy places and active monks in most of them. So come and explore the Treasure-Trove of Mystic Ladakh. Touring this place will surely leave you spell-bounded. </p>

    </div><!-- Main Content -->

    <div class=\"col-md-3\">
        <div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>
            {% component 'tourCategories' %}
        <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>
            {% component 'blogCategories' %}
        {% partial 'site/right1' %}
    </div>
    </div>
</div>", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/about-ladakh.htm", "");
    }
}
