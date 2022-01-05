<?php

/* /home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/mainmenu.htm */
class __TwigTemplate_894146839fde6bc76ff8d9fe2f892ced2c6ef9fbd123010675f7063c16b3fcd3 extends Twig_Template
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
        echo "<div class=\"nav-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
                <!-- Main Navigation -->
            <nav class=\"navbar navbar-default\">
                <div class=\"col-md-10 col-xs-5\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse text-center\">
                        ";
        // line 15
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 16
        echo "                    </div>
                </div>
                <div class=\"visible-xs col-xs-3\">
                    <div id=\"site-logo\" class=\"btn-outline \"></div> <!-- #site-logo  -->
                </div>
                <div class=\"col-md-1 col-xs-2\">
                    <a href=\"javascript:void(0);\" id=\"triggerToggle\"><i class=\"fab fa-mixcloud\" aria-hidden=\"true\"></i></a>
                </div>
                <div class=\"col-md-1 col-xs-2\">
                    <a id=\"trigger-call\" href=\"tel:+919469223333\"><i class=\"fas fa-phone-volume\" aria-hidden=\"true\"></i></a>
                    <div id=\"div1\" style=\"display:none;\">
                        <div><iframe style=\"overflow:hidden;border:none\" allowtransparency=\"true\" width=\"398\" height=\"140\" src=\"http://www.weather-forecast.com/locations/Leh/forecasts/latest/threedayfree\" scrolling=\"no\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\"></iframe> </div>
                    </div>
                </div>
            </nav>
            <!-- End Main Navigation -->
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/mainmenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  35 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"nav-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
                <!-- Main Navigation -->
            <nav class=\"navbar navbar-default\">
                <div class=\"col-md-10 col-xs-5\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse text-center\">
                        {% component 'menu' %}
                    </div>
                </div>
                <div class=\"visible-xs col-xs-3\">
                    <div id=\"site-logo\" class=\"btn-outline \"></div> <!-- #site-logo  -->
                </div>
                <div class=\"col-md-1 col-xs-2\">
                    <a href=\"javascript:void(0);\" id=\"triggerToggle\"><i class=\"fab fa-mixcloud\" aria-hidden=\"true\"></i></a>
                </div>
                <div class=\"col-md-1 col-xs-2\">
                    <a id=\"trigger-call\" href=\"tel:+919469223333\"><i class=\"fas fa-phone-volume\" aria-hidden=\"true\"></i></a>
                    <div id=\"div1\" style=\"display:none;\">
                        <div><iframe style=\"overflow:hidden;border:none\" allowtransparency=\"true\" width=\"398\" height=\"140\" src=\"http://www.weather-forecast.com/locations/Leh/forecasts/latest/threedayfree\" scrolling=\"no\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\"></iframe> </div>
                    </div>
                </div>
            </nav>
            <!-- End Main Navigation -->
        </div>
    </div>
</div>", "/home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/mainmenu.htm", "");
    }
}
