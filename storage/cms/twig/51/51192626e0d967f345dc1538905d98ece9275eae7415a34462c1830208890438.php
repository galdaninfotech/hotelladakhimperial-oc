<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/themes/demo/partials/site/header-left-top-links.htm */
class __TwigTemplate_9ad8ee6cd8d8ce62a695eb7c1ad21f2250657033d897039ed14d712fee5fa5f1 extends Twig_Template
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
        echo "<ul class=\"header-top-left\">
    <li><a href=\"";
        // line 2
        echo url("ladakh-festival");
        echo "\">Ladakh Festivals</a></li>
    <li><a href=\"";
        // line 3
        echo url("ladakh/about-ladakh");
        echo "\">Ladakh</a></li>
    <li><a href=\"";
        // line 4
        echo url("contact");
        echo "\">Contact</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/header-left-top-links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"header-top-left\">
    <li><a href=\"{{ url('ladakh-festival') }}\">Ladakh Festivals</a></li>
    <li><a href=\"{{ url('ladakh/about-ladakh') }}\">Ladakh</a></li>
    <li><a href=\"{{ url('contact') }}\">Contact</a></li>
</ul>", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/header-left-top-links.htm", "");
    }
}
