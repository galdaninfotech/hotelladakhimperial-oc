<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/themes/demo/pages/tours/post.htm */
class __TwigTemplate_4eacc62fe6460d752b66e2c777c856722fdbd0158ded24aa6ee46c9df37f5121 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-9\">
        \t";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("tourPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "        \t";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['data'] = (isset($context["post"]) ? $context["post"] : null)        ;
        echo $this->env->getExtension('CMS')->componentFunction("SeoTourPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        </div>
        <div class=\"col-md-3\">
        \t<div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>
            ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("tourCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "            <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>
            ";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "        \t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/right1"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    \t</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/pages/tours/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  50 => 12,  46 => 11,  43 => 10,  39 => 9,  34 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-9\">
        \t{% component 'tourPost' %}
        \t{% component 'SeoTourPost' data=post %}
        </div>
        <div class=\"col-md-3\">
        \t<div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>
            {% component 'tourCategories' %}
            <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>
            {% component 'blogCategories' %}
        \t{% partial 'site/right1' %}
    \t</div>
    </div>
</div>", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/pages/tours/post.htm", "");
    }
}
