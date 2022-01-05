<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/themes/demo/partials/site/header-contact.htm */
class __TwigTemplate_caea8087f33b15bd96fa8ea92aa9f6179ea0f38ebcb6f80657a76eec5682de9c extends Twig_Template
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
        echo "<ul id=\"header-contact\">
    <li class=\"pull-right\"><i class=\"fa fa-phone\"></i>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["mobile1"]) ? $context["mobile1"] : null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["mobile2"]) ? $context["mobile2"] : null), "html", null, true);
        echo "</li>
    <li class=\"pull-right\"><i class=\"fa fa-envelope-o\"></i> <span>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["email1"]) ? $context["email1"] : null), "html", null, true);
        echo "</span></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/partials/site/header-contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul id=\"header-contact\">
    <li class=\"pull-right\"><i class=\"fa fa-phone\"></i>{{ mobile1 }} / {{ mobile2 }}</li>
    <li class=\"pull-right\"><i class=\"fa fa-envelope-o\"></i> <span>{{ email1 }}</span></li>
</ul>", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/partials/site/header-contact.htm", "");
    }
}
