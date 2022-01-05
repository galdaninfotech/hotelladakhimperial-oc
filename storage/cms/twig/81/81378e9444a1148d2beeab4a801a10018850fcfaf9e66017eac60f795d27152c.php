<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/404.htm */
class __TwigTemplate_cbf865b4e5c3969bfa4aa43ec35eb29ceae28e4295a58d8310c6e8b855d13909 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/404.htm", "");
    }
}
