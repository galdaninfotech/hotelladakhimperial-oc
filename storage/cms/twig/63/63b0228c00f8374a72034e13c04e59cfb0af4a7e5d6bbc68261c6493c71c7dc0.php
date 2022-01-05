<?php

/* C:\xampp\htdocs\hotelladakhimperial/themes/demo/partials/site/header.htm */
class __TwigTemplate_c8651d64d56ee364ef588cb05591d0d4cd8ec52b740ec1296ce98beb1e4375d3 extends Twig_Template
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
        echo "<header>

    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/mainmenu"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "    

</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotelladakhimperial/themes/demo/partials/site/header.htm";
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
        return new Twig_Source("<header>
    {% partial 'site/mainmenu' %}    
</header>", "C:\\xampp\\htdocs\\hotelladakhimperial/themes/demo/partials/site/header.htm", "");
    }
}
