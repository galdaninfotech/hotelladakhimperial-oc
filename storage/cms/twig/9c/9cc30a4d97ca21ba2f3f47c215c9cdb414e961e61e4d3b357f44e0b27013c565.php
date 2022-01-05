<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/themes/demo/partials/site/header.htm */
class __TwigTemplate_0fddd719d44ef56da04c9f400a6c67e5b9d589304743fd09e0ccc7ca1425a366 extends Twig_Template
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
        echo "<header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    
                </div>
                <div class=\"col-md-6\">
                    <div class=\"pull-right\">";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header-right-top-links"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "</div>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"col-md-3\"><img id=\"logo\" src=\"";
        // line 11
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.png"));
        echo "\"></div>
                <div class=\"col-md-6\">
                    <div id=\"img-round-square1\" class=\"image-hover img-round-square\"></div>
                    <div id=\"img-round-square2\" class=\"image-hover img-round-square\"></div>
                    <div id=\"img-round-square3\" class=\"image-hover img-round-square\"></div>
                    <div id=\"img-round-square4\" class=\"image-hover img-round-square\"></div>
                    <div id=\"img-round-square5\" class=\"image-hover img-round-square\"></div>
                </div>
                <div class=\"col-md-3\">
                    ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/social"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "                    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header-contact"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "                </div>
            </div>
        </div>
        ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/mainmenu"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "        
    </header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 26,  62 => 25,  57 => 22,  52 => 21,  48 => 20,  36 => 11,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    
                </div>
                <div class=\"col-md-6\">
                    <div class=\"pull-right\">{% partial 'site/header-right-top-links' %}</div>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"col-md-3\"><img id=\"logo\" src=\"{{ url('assets/images/logo.png'|theme) }}\"></div>
                <div class=\"col-md-6\">
                    <div id=\"img-round-square1\" class=\"image-hover img-round-square\"></div>
                    <div id=\"img-round-square2\" class=\"image-hover img-round-square\"></div>
                    <div id=\"img-round-square3\" class=\"image-hover img-round-square\"></div>
                    <div id=\"img-round-square4\" class=\"image-hover img-round-square\"></div>
                    <div id=\"img-round-square5\" class=\"image-hover img-round-square\"></div>
                </div>
                <div class=\"col-md-3\">
                    {% partial 'site/social' %}
                    {% partial 'site/header-contact' %}
                </div>
            </div>
        </div>
        {% partial 'site/mainmenu' %}
        
    </header>", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/header.htm", "");
    }
}
