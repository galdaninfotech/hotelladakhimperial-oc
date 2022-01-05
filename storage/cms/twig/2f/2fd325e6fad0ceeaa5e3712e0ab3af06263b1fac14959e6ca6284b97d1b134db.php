<?php

/* /home/galdanin/public_html/hotelladakhimperial.in/plugins/galdan/sitetools/components/address/default.htm */
class __TwigTemplate_5a7603f2ce04484a54f93d17094ea00c3ed2c4ffcfda4937f257758d652c1a88 extends Twig_Template
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
        echo "<div id=\"address_head\">
\t<img src=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/building.png");
        echo "\" alt=\"\" class=\"fl\">
\t";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
        echo "
\t<span><small>(Registered under J&amp;K Tourism)</small></span>
</div>
<div id=\"address\">
    ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["addressline1"]) ? $context["addressline1"] : null), "html", null, true);
        echo "<br>
    ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["addressline2"]) ? $context["addressline2"] : null), "html", null, true);
        echo "<br><br>
    Mobile : ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["mobile1"]) ? $context["mobile1"] : null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["mobile2"]) ? $context["mobile2"] : null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["mobile3"]) ? $context["mobile3"] : null), "html", null, true);
        echo "<br>
    Phone : ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
        echo "<br>
    E-mail:<a href=\"mailto: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["email1"]) ? $context["email1"] : null), "html", null, true);
        echo ", \">";
        echo twig_escape_filter($this->env, (isset($context["email1"]) ? $context["email1"] : null), "html", null, true);
        echo "</a></a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/galdanin/public_html/hotelladakhimperial.in/plugins/galdan/sitetools/components/address/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  49 => 10,  41 => 9,  37 => 8,  33 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"address_head\">
\t<img src=\"{{'assets/images/building.png'|theme}}\" alt=\"\" class=\"fl\">
\t{{ company }}
\t<span><small>(Registered under J&amp;K Tourism)</small></span>
</div>
<div id=\"address\">
    {{ addressline1 }}<br>
    {{ addressline2 }}<br><br>
    Mobile : {{ mobile1 }} / {{ mobile2 }} / {{ mobile3 }}<br>
    Phone : {{ phone }}<br>
    E-mail:<a href=\"mailto: {{email1}}, \">{{email1}}</a></a>
</div>", "/home/galdanin/public_html/hotelladakhimperial.in/plugins/galdan/sitetools/components/address/default.htm", "");
    }
}
