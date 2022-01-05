<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/themes/demo/pages/company/our-services.htm */
class __TwigTemplate_59f72262aff401f84372f9a13d258922835e572bd9d1dbaa22bd98992e008e66 extends Twig_Template
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
        echo "<div id=\"hli-content-wrapper-services\">
    <div  id=\"hli-content-wrapper\" class=\"container 401d3d\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6 col-md-offset-3\">
                <div class=\"hli-main-content\">
                    <h1 class=\"centre\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Airport pick up and drop service (on request)</li>
\t\t\t\t\t\t<li>In House Laundry Service</li>
\t\t\t\t\t\t<li>Ample Car Parking Space</li>
\t\t\t\t\t\t<li>LED TV in all room with digital connection</li>
\t\t\t\t\t\t<li>Running hot & cold water</li>
\t\t\t\t\t\t<li>Cultural Evening With Folk Dancers (on request)</li>
\t\t\t\t\t\t<li>Wi-Fi Broadband Internet</li>
\t\t\t\t\t\t<li>24 hour Room Service</li>
\t\t\t\t\t\t<li>DTH Cable connection</li>
\t\t\t\t\t\t<li>Doctor on call</li>
\t\t\t\t\t\t<li>Buffet Meals</li>
\t\t\t\t\t</ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- #hli-content-wrapper-services  -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/pages/company/our-services.htm";
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
        return new Twig_Source("<div id=\"hli-content-wrapper-services\">
    <div  id=\"hli-content-wrapper\" class=\"container 401d3d\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6 col-md-offset-3\">
                <div class=\"hli-main-content\">
                    <h1 class=\"centre\">{{this.page.title }}</h1>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Airport pick up and drop service (on request)</li>
\t\t\t\t\t\t<li>In House Laundry Service</li>
\t\t\t\t\t\t<li>Ample Car Parking Space</li>
\t\t\t\t\t\t<li>LED TV in all room with digital connection</li>
\t\t\t\t\t\t<li>Running hot & cold water</li>
\t\t\t\t\t\t<li>Cultural Evening With Folk Dancers (on request)</li>
\t\t\t\t\t\t<li>Wi-Fi Broadband Internet</li>
\t\t\t\t\t\t<li>24 hour Room Service</li>
\t\t\t\t\t\t<li>DTH Cable connection</li>
\t\t\t\t\t\t<li>Doctor on call</li>
\t\t\t\t\t\t<li>Buffet Meals</li>
\t\t\t\t\t</ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- #hli-content-wrapper-services  -->", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/pages/company/our-services.htm", "");
    }
}
