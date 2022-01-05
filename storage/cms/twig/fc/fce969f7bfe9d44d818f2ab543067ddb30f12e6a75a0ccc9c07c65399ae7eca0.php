<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/themes/demo/partials/site/address.htm */
class __TwigTemplate_9d60ce1e78399bf94c8b34074cb01ca93d1fc54d1f668ef38b2955f7ba53d5ee extends Twig_Template
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
        echo "<div class=\"foot_head\">
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
        echo "
<span><small>(Registered under J&amp;K Tourism)</small></span>
</div>
<div id=\"foot_address\">
    Mobile : ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["mobile1"]) ? $context["mobile1"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["mobile2"]) ? $context["mobile2"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["mobile3"]) ? $context["mobile3"] : null), "html", null, true);
        echo "<br>
    Phone : ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
        echo "<br>
    E-mail:<a href=\"mailto: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["email1"]) ? $context["email1"] : null), "html", null, true);
        echo ", \">";
        echo twig_escape_filter($this->env, (isset($context["email1"]) ? $context["email1"] : null), "html", null, true);
        echo "</a></a>
</div>

<!-- Request::getBaseUrl() -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/partials/site/address.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  37 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"foot_head\">
{{ company }}
<span><small>(Registered under J&amp;K Tourism)</small></span>
</div>
<div id=\"foot_address\">
    Mobile : {{ mobile1 }} {{ mobile2 }} {{ mobile3 }}<br>
    Phone : {{ phone }}<br>
    E-mail:<a href=\"mailto: {{email1}}, \">{{email1}}</a></a>
</div>

<!-- Request::getBaseUrl() -->", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/partials/site/address.htm", "");
    }
}
