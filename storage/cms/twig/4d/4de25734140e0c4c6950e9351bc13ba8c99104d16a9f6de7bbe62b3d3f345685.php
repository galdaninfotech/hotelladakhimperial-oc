<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/history.htm */
class __TwigTemplate_7fd8ce9b4ffb087baab7bec0c1a54038635283a4f94257ddc28f4f535ea23226 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/history.jpg");
        echo "\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">

        <p>Rock carvings found in many parts of Ladakh show that the area has been inhabited from Neolithic times. Ladakh's earliest inhabitants consisted of a mixed Indo-Aryan population of Mons and Dards. Around the 1st century, Ladakh was a part of theKushana empire. Buddhism spread into western Ladakh from Kashmir in the 2nd century when much of eastern Ladakh and western Tibet was still practising the Bon religion. <br />

        In the 8th century, Ladakh was involved in the clash between Tibetan expansion. In 842 Nyima-Gon, a Tibetan royal representative annexed Ladakh for himself after the break-up of the Tibetan empire, and founded a separate Ladakhi dynasty. During this period Ladakh acquired a predominantly Tibetan population. The dynasty spearheaded the second spreading of Buddhism, importing religious ideas from north-west India, particularly from Kashmir</p>

        <p>Faced with the Islamic conquest of South Asia in the 13th century, Ladakh chose to seek and accept guidance in religious matters from Tibet. For nearly two centuries till about 1600, Ladakh was subject to raids and invasions from neighbouring Muslim states, which led to the partial conversion of Ladakhis to Noorbakshi Islam. King Bhagan reunited and strengthened Ladakh and founded the Namgyal dynasty  which survives to today.Despite a defeat of Ladakh by the Mughals, who had already annexed Kashmir and Baltistan, Ladakh retained its independence.</p>

        <p>In 1949, China closed the border between Nubra and Xinjiang, blocking old trade routes. In 1955 China began to build roads connecting Xinjiang and Tibet through this area. It also built theKarakoram highway jointly with Pakistan. India built the Srinagar-Leh Highway during this period, cutting the journey time between Srinagar and Leh from 16 days to two. The route, however, remains closed during the winter months due to heavy snowfall. <br />

          The Kargil War of 1999, codenamed &quot;Operation Vijay&quot; by the Indian Army, saw infiltration by Pakistani troops into parts of Western Ladakh. Extensive operations were launched in high altitudes by the Indian Army with considerable artillery and air force support. Pakistani troops were evicted from the Indian side of the Line of Control which the Indian Government ordered was to be respected and which was not crossed by Indian troops. <br />

          The Ladakh region was bifurcated into the Kargil and Leh districts in 1979. In 1989, there were violent riots between Buddhists and Muslims. Following demands for autonomy from the Kashmiridominated state government, the Ladakh Autonomous Hill Development Council was created in the 1990s. Leh and Kargil Districts now each have their own locally elected Hill Councils with some control over local policy and development funds.</p>

    </div><!-- Main Content -->



    <div class=\"col-md-3\">

        <div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>

            ";
        // line 31
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("tourCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 32
        echo "
        <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>

            ";
        // line 35
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "
        ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/right1"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
    </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/history.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 38,  73 => 37,  70 => 36,  66 => 35,  61 => 32,  57 => 31,  32 => 9,  27 => 7,  19 => 1,);
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
        <img src=\"{{'assets/images/history.jpg'|theme}}\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">
        <p>Rock carvings found in many parts of Ladakh show that the area has been inhabited from Neolithic times. Ladakh's earliest inhabitants consisted of a mixed Indo-Aryan population of Mons and Dards. Around the 1st century, Ladakh was a part of theKushana empire. Buddhism spread into western Ladakh from Kashmir in the 2nd century when much of eastern Ladakh and western Tibet was still practising the Bon religion. <br />
        In the 8th century, Ladakh was involved in the clash between Tibetan expansion. In 842 Nyima-Gon, a Tibetan royal representative annexed Ladakh for himself after the break-up of the Tibetan empire, and founded a separate Ladakhi dynasty. During this period Ladakh acquired a predominantly Tibetan population. The dynasty spearheaded the second spreading of Buddhism, importing religious ideas from north-west India, particularly from Kashmir</p>
        <p>Faced with the Islamic conquest of South Asia in the 13th century, Ladakh chose to seek and accept guidance in religious matters from Tibet. For nearly two centuries till about 1600, Ladakh was subject to raids and invasions from neighbouring Muslim states, which led to the partial conversion of Ladakhis to Noorbakshi Islam. King Bhagan reunited and strengthened Ladakh and founded the Namgyal dynasty  which survives to today.Despite a defeat of Ladakh by the Mughals, who had already annexed Kashmir and Baltistan, Ladakh retained its independence.</p>
        <p>In 1949, China closed the border between Nubra and Xinjiang, blocking old trade routes. In 1955 China began to build roads connecting Xinjiang and Tibet through this area. It also built theKarakoram highway jointly with Pakistan. India built the Srinagar-Leh Highway during this period, cutting the journey time between Srinagar and Leh from 16 days to two. The route, however, remains closed during the winter months due to heavy snowfall. <br />
          The Kargil War of 1999, codenamed &quot;Operation Vijay&quot; by the Indian Army, saw infiltration by Pakistani troops into parts of Western Ladakh. Extensive operations were launched in high altitudes by the Indian Army with considerable artillery and air force support. Pakistani troops were evicted from the Indian side of the Line of Control which the Indian Government ordered was to be respected and which was not crossed by Indian troops. <br />
          The Ladakh region was bifurcated into the Kargil and Leh districts in 1979. In 1989, there were violent riots between Buddhists and Muslims. Following demands for autonomy from the Kashmiridominated state government, the Ladakh Autonomous Hill Development Council was created in the 1990s. Leh and Kargil Districts now each have their own locally elected Hill Councils with some control over local policy and development funds.</p>
    </div><!-- Main Content -->

    <div class=\"col-md-3\">
        <div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>
            {% component 'tourCategories' %}
        <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>
            {% component 'blogCategories' %}
        {% partial 'site/right1' %}
    </div>
    </div>
</div>", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/history.htm", "");
    }
}
