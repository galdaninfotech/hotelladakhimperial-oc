<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/company/booking.htm */
class __TwigTemplate_77ed72491fe46f310f64e791182c922badb30ce20616c6c83d6b52664e0e3ce1 extends Twig_Template
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
        echo "<div id=\"hli-content-wrapper-reservation\">

    <div  id=\"hli-content-wrapper\" class=\"container 401d3d\">

        <div class=\"row\">

            <div class=\"col-xs-12 col-md-6 col-md-offset-3\">

                <div class=\"hli-main-content\">

                    <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>

                    ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("form"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "


                </div>

            </div>

        </div>

    </div>

</div> <!-- #hli-content-wrapper-reservation  -->";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/company/booking.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  36 => 13,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"hli-content-wrapper-reservation\">
    <div  id=\"hli-content-wrapper\" class=\"container 401d3d\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6 col-md-offset-3\">
                <div class=\"hli-main-content\">
                    <h1>{{ this.page.title }}</h1>
                    {% component 'form' %}

                </div>
            </div>
        </div>
    </div>
</div> <!-- #hli-content-wrapper-reservation  -->", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/company/booking.htm", "");
    }
}
