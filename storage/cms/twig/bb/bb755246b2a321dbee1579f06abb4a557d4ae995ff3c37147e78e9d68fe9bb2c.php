<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/themes/demo/pages/home.htm */
class __TwigTemplate_21276a5faa3df8b9482bbf9c658f080c001a196949fe01547fadbceeaa7f258e extends Twig_Template
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
    <div class=\"col-md-12 main-content\">
        ";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("quickform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/sl1"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "\t    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/sl2"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div><!-- Main Content -->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 6,  28 => 5,  24 => 4,  19 => 1,);
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
    <div class=\"col-md-12 main-content\">
        {% component 'quickform' %}
        {% partial 'site/sl1' %}
\t    {% partial 'site/sl2' %}
    </div><!-- Main Content -->
    </div>
</div>", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/pages/home.htm", "");
    }
}
