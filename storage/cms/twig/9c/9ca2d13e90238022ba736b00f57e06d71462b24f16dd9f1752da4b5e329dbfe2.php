<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/themes/demo/partials/site/mainmenu.htm */
class __TwigTemplate_3594025e9d358906a6d42beff467ff8ff8734face50e2cb62ddca4c47c34f08a extends Twig_Template
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
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

                <div class=\"col-md-12z col-sm-12z\">
                    <div id=\"navbar\" class=\"navbar-collapse collapse text-center\">
                        ";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "                    </div>
                </div>
            </nav>
            <!-- End Main Navigation -->
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/mainmenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  36 => 16,  19 => 1,);
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
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

                <div class=\"col-md-12z col-sm-12z\">
                    <div id=\"navbar\" class=\"navbar-collapse collapse text-center\">
                        {% component 'menu' %}
                    </div>
                </div>
            </nav>
            <!-- End Main Navigation -->
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/mainmenu.htm", "");
    }
}
