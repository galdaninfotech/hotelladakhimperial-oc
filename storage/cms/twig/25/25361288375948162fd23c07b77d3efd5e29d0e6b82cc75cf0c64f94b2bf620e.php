<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/themes/demo/partials/site/header-right-top-links.htm */
class __TwigTemplate_95a97f3ec6f413c7687a6000cc72331ce600867de6348de21ed264aa37a19923 extends Twig_Template
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
\t";
        // line 2
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 3
            echo "\t    <li><a href=\"";
            echo url("client-bookings");
            echo "\">Dashboard</a></li>
\t    <li><a href=\"";
            // line 4
            echo url("account");
            echo "\">Account</a></li>
\t    <li><a href=\"#\" data-request=\"onLogout\">Logout</a></li>
\t";
        } else {
            // line 7
            echo "\t    <li><a href=\"";
            echo url("account");
            echo "\">Login</a></li>
\t    <li><a href=\"";
            // line 8
            echo url("account");
            echo "\">Register</a></li>
\t";
        }
        // line 10
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/header-right-top-links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  40 => 8,  35 => 7,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
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
\t{% if user %}
\t    <li><a href=\"{{ url('client-bookings') }}\">Dashboard</a></li>
\t    <li><a href=\"{{ url('account') }}\">Account</a></li>
\t    <li><a href=\"#\" data-request=\"onLogout\">Logout</a></li>
\t{% else %}
\t    <li><a href=\"{{ url('account')}}\">Login</a></li>
\t    <li><a href=\"{{ url('account')}}\">Register</a></li>
\t{% endif %}
</ul>", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/header-right-top-links.htm", "");
    }
}
