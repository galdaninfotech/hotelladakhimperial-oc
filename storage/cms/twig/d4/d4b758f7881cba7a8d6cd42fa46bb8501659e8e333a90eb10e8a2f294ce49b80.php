<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/themes/demo/partials/site/address.htm */
class __TwigTemplate_50a1f928e1f48d8928a7cd3073beb16d20d9d4461071d16a399a4a0759016815 extends Twig_Template
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
\t<div id=\"address-building\"></div>
    <span>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["addressline1"]) ? $context["addressline1"] : null), "html", null, true);
        echo "<br></span>
    <span>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["addressline2"]) ? $context["addressline2"] : null), "html", null, true);
        echo "<br></span>


    Mobile : ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["mobile1"]) ? $context["mobile1"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["mobile2"]) ? $context["mobile2"] : null), "html", null, true);
        echo "<br>
    Phone : ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
        echo "<br>
    E-mail:<a href=\"mailto: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["email1"]) ? $context["email1"] : null), "html", null, true);
        echo ", \">";
        echo twig_escape_filter($this->env, (isset($context["email1"]) ? $context["email1"] : null), "html", null, true);
        echo "</a></a>
</div>

<!-- Request::getBaseUrl() -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/address.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  46 => 12,  40 => 11,  34 => 8,  30 => 7,  22 => 2,  19 => 1,);
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
\t<div id=\"address-building\"></div>
    <span>{{ addressline1 }}<br></span>
    <span>{{ addressline2 }}<br></span>


    Mobile : {{ mobile1 }} {{ mobile2 }}<br>
    Phone : {{ phone }}<br>
    E-mail:<a href=\"mailto: {{email1}}, \">{{email1}}</a></a>
</div>

<!-- Request::getBaseUrl() -->", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/address.htm", "");
    }
}
