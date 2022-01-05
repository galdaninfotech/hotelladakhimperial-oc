<?php

/* /home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/header.htm */
class __TwigTemplate_1ff1f48915123210428e756283d19ac0be629794c2132a77dee5fc9d8551e2d6 extends Twig_Template
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
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/mainmenu"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "    
</header>";
    }

    public function getTemplateName()
    {
        return "/home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/header.htm";
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
        return new Twig_Source("<header>
    {% partial 'site/mainmenu' %}    
</header>", "/home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/header.htm", "");
    }
}
