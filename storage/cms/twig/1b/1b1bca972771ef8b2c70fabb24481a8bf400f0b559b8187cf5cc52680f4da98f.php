<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/partials/site/slideshow.htm */
class __TwigTemplate_be38cca69054de3426b72aa1d20b0d3a1616fd0870ed58f72eb78c415465d037 extends Twig_Template
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
        echo "<div id=\"hli-slideshow\">

\t<img class=\"\" src=\"";
        // line 3
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/carousel/slide1.jpg"));
        echo "\">

</div> <!-- #hli-slideshow  -->";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/partials/site/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"hli-slideshow\">

\t<img class=\"\" src=\"{{ url('assets/images/carousel/slide1.jpg'|theme) }}\">

</div> <!-- #hli-slideshow  -->", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/partials/site/slideshow.htm", "");
    }
}
