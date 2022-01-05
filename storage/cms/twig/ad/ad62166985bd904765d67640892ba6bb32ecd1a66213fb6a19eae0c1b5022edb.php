<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/geography.htm */
class __TwigTemplate_d3c3bd34e4759c47e415ec8a1c793a195a7e106a33f22b5481e9c0cf0e811fd3 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/geography.jpg");
        echo "\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">

        <p>Ladakh is the highest plateau of state of Kashmir with much of it being over 3,000 m (9,800 ft).] It spans the Himalayan and Karakoram mountain ranges and the upper Indus River valley.</p>

        <p> The mountain ranges in this region were formed over a period of 45 million years by the folding of the Indian plate into the more stationary Eurasian Plate. The drift continues, causing frequent earthquakes in the Himalayan region.The peaks in the Ladakh range are at a medium altitude close to the Zoji-la (5,000–5,500 m or 16,000–18,050 ft), and increase towards south-east, culminating in the twin summits of Nun-Kun (7000 m or 23,000 ft).</p>

        <p>The Indus river is the backbone of Ladakh. The Siachan Glacier is located in the eastern Karakoram range in the Himalaya Mountains along the disputed India-Pakistan border. The Karakoram range forms a great watershed that separates China from the Indian subcontinent and is sometimes called the \"Third Pole.\" The glacier lies between the Saltoro Ridge immediately to the west and the main Karakoram range to the east. At 70 km long, it is the longest glacier in the Karakoram and second-longest in the world's non-polar areas. It falls from an altitude of 5,753 m (18,875 ft) above sea level at its source at Indira Col on the China border down to 3,620 m (11,875 ft) at its snout. The passes and some dominating heights on the Saltoro ridge, which has a crestline with heights from 5,450 to 7,720 m (17,880 to 25,330 feet), are occupied by troops on both sides.<br>

        Saser Kangri is the highest peak in the Saser Muztagh, the easternmost subrange of the Karakoram range in India, Saser Kangri I having an altitude of 7,672 m (25,171 ft).</p>

        <p> The Ladakh range has no major peaks; its average height is a little less than 6,000 m (19,700 ft), and few of its passes are less than 5,000 m (16,400 ft). North of the Karakoram lies the Kunlun. Thus, between Leh and eastern Central Asia there is a triple barrier - the Ladakh range, Karakoram range, and Kunlun. Nevertheless, a major trade route was established between Leh and Yarkand.</p>

        <p> Ladakh is a high altitude desert as the Himalayas create a rain shadow, denying entry to monsoon clouds. The main source of water is the winter snowfall on the mountains. Recent flooding in the region (e.g., the 2010 floods) has been attributed to abnormal rain patterns and retreating glaciers, both of which might be linked to global warming. The Leh Nutrition Project, headed by Chewang Norphel, also known as the 'Glacier Man', currently creates artificial glaciers as one solution for retreating glaciers.<br>

        The regions on the north flank of the Himalayas - Dras, the Suru valley and Zangskar - experience heavy snowfall and remain cut off from the rest of the region for several months in the year, as the whole region remains cut off by road from the rest of the country. Summers are short, though they are long enough to grow crops. The summer weather is dry and pleasant. Temperature ranges are from 3 to 35  °C in summer and minimums range from -20 to -35 °C in winter.</p>

    </div><!-- Main Content -->



    <div class=\"col-md-3\">

        <div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>

            ";
        // line 33
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("tourCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 34
        echo "
        <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>

            ";
        // line 37
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 38
        echo "
        ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/right1"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "
    </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/geography.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 40,  75 => 39,  72 => 38,  68 => 37,  63 => 34,  59 => 33,  32 => 9,  27 => 7,  19 => 1,);
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
        <img src=\"{{'assets/images/geography.jpg'|theme}}\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">
        <p>Ladakh is the highest plateau of state of Kashmir with much of it being over 3,000 m (9,800 ft).] It spans the Himalayan and Karakoram mountain ranges and the upper Indus River valley.</p>
        <p> The mountain ranges in this region were formed over a period of 45 million years by the folding of the Indian plate into the more stationary Eurasian Plate. The drift continues, causing frequent earthquakes in the Himalayan region.The peaks in the Ladakh range are at a medium altitude close to the Zoji-la (5,000–5,500 m or 16,000–18,050 ft), and increase towards south-east, culminating in the twin summits of Nun-Kun (7000 m or 23,000 ft).</p>
        <p>The Indus river is the backbone of Ladakh. The Siachan Glacier is located in the eastern Karakoram range in the Himalaya Mountains along the disputed India-Pakistan border. The Karakoram range forms a great watershed that separates China from the Indian subcontinent and is sometimes called the \"Third Pole.\" The glacier lies between the Saltoro Ridge immediately to the west and the main Karakoram range to the east. At 70 km long, it is the longest glacier in the Karakoram and second-longest in the world's non-polar areas. It falls from an altitude of 5,753 m (18,875 ft) above sea level at its source at Indira Col on the China border down to 3,620 m (11,875 ft) at its snout. The passes and some dominating heights on the Saltoro ridge, which has a crestline with heights from 5,450 to 7,720 m (17,880 to 25,330 feet), are occupied by troops on both sides.<br>
        Saser Kangri is the highest peak in the Saser Muztagh, the easternmost subrange of the Karakoram range in India, Saser Kangri I having an altitude of 7,672 m (25,171 ft).</p>
        <p> The Ladakh range has no major peaks; its average height is a little less than 6,000 m (19,700 ft), and few of its passes are less than 5,000 m (16,400 ft). North of the Karakoram lies the Kunlun. Thus, between Leh and eastern Central Asia there is a triple barrier - the Ladakh range, Karakoram range, and Kunlun. Nevertheless, a major trade route was established between Leh and Yarkand.</p>
        <p> Ladakh is a high altitude desert as the Himalayas create a rain shadow, denying entry to monsoon clouds. The main source of water is the winter snowfall on the mountains. Recent flooding in the region (e.g., the 2010 floods) has been attributed to abnormal rain patterns and retreating glaciers, both of which might be linked to global warming. The Leh Nutrition Project, headed by Chewang Norphel, also known as the 'Glacier Man', currently creates artificial glaciers as one solution for retreating glaciers.<br>
        The regions on the north flank of the Himalayas - Dras, the Suru valley and Zangskar - experience heavy snowfall and remain cut off from the rest of the region for several months in the year, as the whole region remains cut off by road from the rest of the country. Summers are short, though they are long enough to grow crops. The summer weather is dry and pleasant. Temperature ranges are from 3 to 35  °C in summer and minimums range from -20 to -35 °C in winter.</p>
    </div><!-- Main Content -->

    <div class=\"col-md-3\">
        <div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>
            {% component 'tourCategories' %}
        <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>
            {% component 'blogCategories' %}
        {% partial 'site/right1' %}
    </div>
    </div>
</div>", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/geography.htm", "");
    }
}
