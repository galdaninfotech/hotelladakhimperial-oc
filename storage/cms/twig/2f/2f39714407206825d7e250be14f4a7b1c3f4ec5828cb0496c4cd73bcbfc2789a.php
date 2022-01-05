<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/locate-us-on-map.htm */
class __TwigTemplate_64d2576054b8ecd6b18954fd901eb2ef1323939c97d109c84ecc577a5c2b6899 extends Twig_Template
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
        echo "<div id=\"hli-content-wrapper-map\">

    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-xs-12\">

                <h1 class=\"center\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>

                <iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1868.5673622660968!2d77.57261655264216!3d34.153309935000046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m5!1s0x38fd9358a10ab027%3A0x3e5dc185bc664c04!2sLeh+Kushok+Bakula+Rimpochee+Airport%2C+Leh!3m2!1d34.1425376!2d77.5554792!4m3!3m2!1d34.1532797!2d77.5735241!5e1!3m2!1sen!2sin!4v1515989130159\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0; margin-bottom: 80px; margin-top: 20px\" allowfullscreen></iframe>





            </div>

        </div>

    </div>

</div> <!-- #hli-content-wrapper-services  -->";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/locate-us-on-map.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"hli-content-wrapper-map\">

    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-xs-12\">

                <h1 class=\"center\">{{ this.page.title }}</h1>

                <iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1868.5673622660968!2d77.57261655264216!3d34.153309935000046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m5!1s0x38fd9358a10ab027%3A0x3e5dc185bc664c04!2sLeh+Kushok+Bakula+Rimpochee+Airport%2C+Leh!3m2!1d34.1425376!2d77.5554792!4m3!3m2!1d34.1532797!2d77.5735241!5e1!3m2!1sen!2sin!4v1515989130159\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0; margin-bottom: 80px; margin-top: 20px\" allowfullscreen></iframe>





            </div>

        </div>

    </div>

</div> <!-- #hli-content-wrapper-services  -->", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/locate-us-on-map.htm", "");
    }
}
