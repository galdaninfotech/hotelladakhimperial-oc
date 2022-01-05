<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/themes/demo/partials/site/header.htm */
class __TwigTemplate_295732ebf29f17cfaa6ad92816faf66422f0deaca17d4dca12d7aeb2141a7eb7 extends Twig_Template
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
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/partials/site/header.htm";
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
</header>", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/partials/site/header.htm", "");
    }
}
