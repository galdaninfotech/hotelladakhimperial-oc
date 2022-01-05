<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/themes/demo/pages/company/testimonials.htm */
class __TwigTemplate_e23423d8e79548eea0c0456d8f5e8a03f05a2bba77a81ca12b1aca1acc108aac extends Twig_Template
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
        echo "<div id=\"hli-content-wrapper-testimonials\">
    <div  id=\"hli-content-wrapper\" class=\"container 401d3d\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6 col-md-offset-3\">
                <div class=\"hli-main-content\">
                    <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                    <blockquote>
                        <p><span class=\"apostrophy\">\"</span>Good: I love Hotel Ladakh Imperial's location, yet your a 5 minute drive from Waikiki. Food is superb in all of Hotel Ladakh Imperial's. I wouldn't stay anywhere else in Leh and always look forward to returning to the Hotel Ladakh Imperial.<span class=\"apostrophy\">\"</span></p>
                        <span><small>Navin Reddy - Andhra Pradesh, India</small></span>
                    </blockquote>
                    <blockquote>
                        <p><span class=\"apostrophy\">\"</span>Clean comfortable rooms and excellent hospitality. Dining here is delightful and I was pleased with the gluten free choices. Their staff are very friendly and professional.<span class=\"apostrophy\">\"</span></p>
                        <span><small>Sumit - Maharashtra, India</small></span>
                    </blockquote>
                    <blockquote>
                        <p><span class=\"apostrophy\">\"</span>Thank you to the Hotel Ladakh Imperial for sharing with us a piece of paradise, it was just what our family needed. Everything was breathtakingly beautiful. Each morning sunrise was a beautiful blessing. The staff showed us so much kindness from the moment we drove up to the hotel.<span class=\"apostrophy\">\"</span></p>
                        <span><small>Sumitra - West Bengal, India</small></span>
                    </blockquote>

                </div>
            </div>
        </div>
    </div>
</div> <!-- #hli-content-wrapper-testimonials  -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/pages/company/testimonials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"hli-content-wrapper-testimonials\">
    <div  id=\"hli-content-wrapper\" class=\"container 401d3d\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6 col-md-offset-3\">
                <div class=\"hli-main-content\">
                    <h1>{{ this.page.title }}</h1>
                    <blockquote>
                        <p><span class=\"apostrophy\">\"</span>Good: I love Hotel Ladakh Imperial's location, yet your a 5 minute drive from Waikiki. Food is superb in all of Hotel Ladakh Imperial's. I wouldn't stay anywhere else in Leh and always look forward to returning to the Hotel Ladakh Imperial.<span class=\"apostrophy\">\"</span></p>
                        <span><small>Navin Reddy - Andhra Pradesh, India</small></span>
                    </blockquote>
                    <blockquote>
                        <p><span class=\"apostrophy\">\"</span>Clean comfortable rooms and excellent hospitality. Dining here is delightful and I was pleased with the gluten free choices. Their staff are very friendly and professional.<span class=\"apostrophy\">\"</span></p>
                        <span><small>Sumit - Maharashtra, India</small></span>
                    </blockquote>
                    <blockquote>
                        <p><span class=\"apostrophy\">\"</span>Thank you to the Hotel Ladakh Imperial for sharing with us a piece of paradise, it was just what our family needed. Everything was breathtakingly beautiful. Each morning sunrise was a beautiful blessing. The staff showed us so much kindness from the moment we drove up to the hotel.<span class=\"apostrophy\">\"</span></p>
                        <span><small>Sumitra - West Bengal, India</small></span>
                    </blockquote>

                </div>
            </div>
        </div>
    </div>
</div> <!-- #hli-content-wrapper-testimonials  -->", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/pages/company/testimonials.htm", "");
    }
}
