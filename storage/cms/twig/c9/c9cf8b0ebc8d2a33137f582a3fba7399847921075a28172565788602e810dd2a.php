<?php

/* /home/galdanin/public_html/hotelladakhimperial.in/themes/demo/pages/contact.htm */
class __TwigTemplate_0cf44ec98ecfcceb28c9ab7caec0ee1b69743ca9c07f54c9424905db2f3961a3 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"col-md-6\">
                <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " Us</h1>
                <div id=\"contact-us\"> ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("address"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " </div>
            </div>
        </div>
        
        <div class=\"col-md-6 contact\">
            <h1>Send us a mail.</h1>
            <div id=\"contact-us\"> ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("contact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " </div></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/galdanin/public_html/hotelladakhimperial.in/themes/demo/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"col-md-6\">
                <h1>{{this.page.title }} Us</h1>
                <div id=\"contact-us\"> {% component 'address' %} </div>
            </div>
        </div>
        
        <div class=\"col-md-6 contact\">
            <h1>Send us a mail.</h1>
            <div id=\"contact-us\"> {% component 'contact' %} </div></div>
    </div>
</div>", "/home/galdanin/public_html/hotelladakhimperial.in/themes/demo/pages/contact.htm", "");
    }
}
