<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/themes/demo/partials/site/slideshow.htm */
class __TwigTemplate_61ea33ab0930c92b87d83945d48e18821a20944f3d454280c5509fb498f4f110 extends Twig_Template
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
        // line 2
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/carousel/slide1.jpg"));
        echo "\">
</div> <!-- #hli-slideshow  -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/partials/site/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
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
</div> <!-- #hli-slideshow  -->", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/partials/site/slideshow.htm", "");
    }
}
