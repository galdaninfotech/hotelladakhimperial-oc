<?php

/* /home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/footer.htm */
class __TwigTemplate_a8ec23021cd6bfbac7d2695ced7b6e944a3495b7580e92cd56723501f6cb1f5c extends Twig_Template
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
        echo "<footer>
    <div class=\"container\">  
        <div class=\"col-md-12\"><div class=\"dash-line gray\"></div></div>

        <div class=\"foot_bot row\">
            <div class=\"col-md-3\">
                <div id=\"payment-options\">
                    <ul class=\"footer-ul-link\">
                        <li><a href=\"";
        // line 9
        echo url("/");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 10
        echo url("/locate-us-on-map");
        echo "\">Locate Us On Map</a></li>
                        <li><a href=\"";
        // line 11
        echo url("/terms-and-conditions");
        echo "\">Terms & Conditions</a></li>
                    </ul>
                  </div>
            </div>
            <div class=\"col-md-3\">
                <div id=\"other\">

                </div>
            </div>
            <div class=\"col-md-3\">
                <h5>Get In Touch</h5><br>
                ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/social"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "            </div>
            <div class=\"col-md-3\">
                ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/address"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "            </div>
        </div>  
    </div> <!-- container --> 

 
</footer>";
    }

    public function getTemplateName()
    {
        return "/home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 26,  59 => 25,  55 => 23,  51 => 22,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <div class=\"container\">  
        <div class=\"col-md-12\"><div class=\"dash-line gray\"></div></div>

        <div class=\"foot_bot row\">
            <div class=\"col-md-3\">
                <div id=\"payment-options\">
                    <ul class=\"footer-ul-link\">
                        <li><a href=\"{{ url('/') }}\">Home</a></li>
                        <li><a href=\"{{ url('/locate-us-on-map') }}\">Locate Us On Map</a></li>
                        <li><a href=\"{{ url('/terms-and-conditions') }}\">Terms & Conditions</a></li>
                    </ul>
                  </div>
            </div>
            <div class=\"col-md-3\">
                <div id=\"other\">

                </div>
            </div>
            <div class=\"col-md-3\">
                <h5>Get In Touch</h5><br>
                {% partial 'site/social' %}
            </div>
            <div class=\"col-md-3\">
                {% partial 'site/address' %}
            </div>
        </div>  
    </div> <!-- container --> 

 
</footer>", "/home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/footer.htm", "");
    }
}
