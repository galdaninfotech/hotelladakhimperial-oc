<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/wildlife.htm */
class __TwigTemplate_766a6b25342731b1eccf28b44c573a403e7843d9f338c00f7d691648d78135ae extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/wildlife_img.jpg");
        echo "\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">

        <p>Ladakh is a mystetious land shrouded in myths and legends. The fauna of Ladakh have much in common with that of Central Asia generally and especially with those of the Tibetan Plateau. An exception to this area are the birds , many of which migrate from warmer parts of India to spend the summer in Ladakh.</p>

                <p>Ladakh posses virtually no natural forests, though along river banks and valleys some greenery does exist.The lower mountain slopes are sparse but higher up near the snow line Wild Rose, Will and Herbacious plants have successfully colonized the slopes. Because of decrease in temperature ,vegetation becomes more sparse and stunted as one ascends the slopes .Several hardy animals and birds thrive together here in an exquisite equilibrium.</p>

                <p>Animals which have adapted to the rigorous condition however live on the minimal vegetation, poor shelter, rocky terrain and bitter cold. Nevertheless most creatures notably the Ungulates do migrate to lower region in winters while others like the Brown Bear choose to hibernate.</p>

                <p>The largest animal of this cold desert is Yak(Dong), a wild ox. The Ibex is found on higher craggy terrain and numbers thousand. Trekkers often spot them.The Bharal or Blue Sheep ia a rare goat found at lower elevations, mostly in river valleys. The Tibetan Argali Sheep is a relative of the Marco Polo Sheep of the Pamirs.</p>

                <p><img src=\"images/wildlife2.jpg\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\" /> The habitat of the extremely rare Tibetan Gazelle (Gowa) is near the Tibetan border in South-Eastern Ladakh. The Tibetan Antelope is also endangered. Tibetan Wild Ass is one animal that visitors can expect to see from the comfort of a vehicle,if they take a jeep safari.</p>

                <p>Snow Leopards reside at an elevation from 1800m to 5400m.They are extremely shy and hard to spot. Other cats in Ladakh are even rarer than the snow leopards like the <?php echo \$company; ?> and Palla’s cat which looks like somewhat house cat.</p>

                <p>The Tibetan wolf and Red fox is common and Tibetan San fox has recently been discovered. There are also a very brown Bears in the Suru Valley and the area around Drass. The wild horse unique to Ladakh.</p>

                <p>Ladakh has great density of birds , a total 225 species have been recorded.The Black-neck crane is one of the most charismatic birds of Ladakh. Many species of Finches, Robins, Redstarts and Hoopoe are common in summer.The Brown-headed gull is seen in summer on the river Indus.</p>

                <p>Resident water birds includethe Brahminy duck and the Bar-headed goose. Other birds include Red-billed cough, Raven, Tibetan Snowcock and Chukar.The Lammergier and the Golden Eagle are common raptors here.</p>

                <p>Among smaller animals marmots are common.There are also plenty of Hares and several types of Voles and Pika.<br />

                Urail, one of the smallest sheep in the world ,lives at the most grassy slopes.</p>

                <p>Overall Ladakh has a fascinating and most unique ecosystem.Most of the species are considered endangered or rare.<br />

                <?php echo \$company; ?>  take you on an eco-and animal-friendly tour in their natural habitat.Expertly led and passionately constructed, our tour aims to deliver the ultimate eco-tour.</p>

    </div><!-- Main Content -->



    <div class=\"col-md-3\">

        <div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>

            ";
        // line 45
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("tourCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 46
        echo "
        <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>

            ";
        // line 49
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 50
        echo "
        ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/right1"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "
    </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/wildlife.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 52,  87 => 51,  84 => 50,  80 => 49,  75 => 46,  71 => 45,  32 => 9,  27 => 7,  19 => 1,);
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
        <img src=\"{{'assets/images/wildlife_img.jpg'|theme}}\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">
        <p>Ladakh is a mystetious land shrouded in myths and legends. The fauna of Ladakh have much in common with that of Central Asia generally and especially with those of the Tibetan Plateau. An exception to this area are the birds , many of which migrate from warmer parts of India to spend the summer in Ladakh.</p>
                <p>Ladakh posses virtually no natural forests, though along river banks and valleys some greenery does exist.The lower mountain slopes are sparse but higher up near the snow line Wild Rose, Will and Herbacious plants have successfully colonized the slopes. Because of decrease in temperature ,vegetation becomes more sparse and stunted as one ascends the slopes .Several hardy animals and birds thrive together here in an exquisite equilibrium.</p>
                <p>Animals which have adapted to the rigorous condition however live on the minimal vegetation, poor shelter, rocky terrain and bitter cold. Nevertheless most creatures notably the Ungulates do migrate to lower region in winters while others like the Brown Bear choose to hibernate.</p>
                <p>The largest animal of this cold desert is Yak(Dong), a wild ox. The Ibex is found on higher craggy terrain and numbers thousand. Trekkers often spot them.The Bharal or Blue Sheep ia a rare goat found at lower elevations, mostly in river valleys. The Tibetan Argali Sheep is a relative of the Marco Polo Sheep of the Pamirs.</p>
                <p><img src=\"images/wildlife2.jpg\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\" /> The habitat of the extremely rare Tibetan Gazelle (Gowa) is near the Tibetan border in South-Eastern Ladakh. The Tibetan Antelope is also endangered. Tibetan Wild Ass is one animal that visitors can expect to see from the comfort of a vehicle,if they take a jeep safari.</p>
                <p>Snow Leopards reside at an elevation from 1800m to 5400m.They are extremely shy and hard to spot. Other cats in Ladakh are even rarer than the snow leopards like the <?php echo \$company; ?> and Palla’s cat which looks like somewhat house cat.</p>
                <p>The Tibetan wolf and Red fox is common and Tibetan San fox has recently been discovered. There are also a very brown Bears in the Suru Valley and the area around Drass. The wild horse unique to Ladakh.</p>
                <p>Ladakh has great density of birds , a total 225 species have been recorded.The Black-neck crane is one of the most charismatic birds of Ladakh. Many species of Finches, Robins, Redstarts and Hoopoe are common in summer.The Brown-headed gull is seen in summer on the river Indus.</p>
                <p>Resident water birds includethe Brahminy duck and the Bar-headed goose. Other birds include Red-billed cough, Raven, Tibetan Snowcock and Chukar.The Lammergier and the Golden Eagle are common raptors here.</p>
                <p>Among smaller animals marmots are common.There are also plenty of Hares and several types of Voles and Pika.<br />
                Urail, one of the smallest sheep in the world ,lives at the most grassy slopes.</p>
                <p>Overall Ladakh has a fascinating and most unique ecosystem.Most of the species are considered endangered or rare.<br />
                <?php echo \$company; ?>  take you on an eco-and animal-friendly tour in their natural habitat.Expertly led and passionately constructed, our tour aims to deliver the ultimate eco-tour.</p>
    </div><!-- Main Content -->

    <div class=\"col-md-3\">
        <div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>
            {% component 'tourCategories' %}
        <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>
            {% component 'blogCategories' %}
        {% partial 'site/right1' %}
    </div>
    </div>
</div>", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/wildlife.htm", "");
    }
}
