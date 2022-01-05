<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/layouts/default.htm */
class __TwigTemplate_e07482b97e513180dde35d214801391bec9548cc92fe2bc7cb8f8dc13d12a2e7 extends Twig_Template
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
        echo "<!DOCTYPE html>

<html lang=\"en-US\">

<head>



";
        // line 9
        $context['__placeholder_meta_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('meta', $context['__placeholder_meta_default_contents']);
        unset($context['__placeholder_meta_default_contents']);        // line 10
        echo "
";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">

<link href='http://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet' type='text/css'>



<script defer src=\"https://use.fontawesome.com/releases/v5.0.2/js/all.js\"></script>

<link href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.css", 1 => "assets/css/style.css", 2 => "assets/css/booking-form.css", 3 => "assets/scss/_custom.scss"));
        // line 31
        echo "\" rel=\"stylesheet\">



<!-- <link href=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.css");
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/sl2.css");
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/reservation-panel.css");
        echo "\" rel=\"stylesheet\"> -->





<!-- <link rel=\"stylesheet\" href=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/scss/_custom.scss"));
        // line 51
        echo "\">

 -->





";
        // line 59
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 60
        echo "
        

<!-- for IE6-8 support of HTML5 elements -->

<!--[if lt IE 9]>

    <script src=\"http://html5shiv .googlecode.com/svn/trunk/html5.js\"></script>

<![endif]-->







</head>

    

<body>

     

    <!-- Header -->

    <header id=\"layout-header\">

        ";
        // line 89
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 90
        echo "
    </header>



    <!-- Slideshow and Reservation Panel-->

    <header id=\"layout-slideshow\">

        ";
        // line 99
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/slideshow"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 100
        echo "
    </header>

    

    ";
        // line 105
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/quick-booking"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 106
        echo "
    

    <!-- Content -->

    <section id=\"layout-content\">

        ";
        // line 113
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 114
        echo "
    </section>



    ";
        // line 119
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/xs-contact"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 120
        echo "


    <!-- Footer -->

    <footer id=\"layout-footer\">

        ";
        // line 127
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 128
        echo "
    </footer>



    <!-- Scripts -->



    <script src=\"";
        // line 137
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/bootstrap.js", 2 => "assets/javascript/custom.js", 3 => "@framework", 4 => "@framework.extras"));
        // line 149
        echo "\"></script>

    ";
        // line 151
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 152
        echo "




















<script type=\"text/javascript\">

\$(function(){

  \$('#triggerToggle').click(function(){

     \$('#div1').slideToggle();

  });

});

</script>




</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 152,  217 => 151,  213 => 149,  211 => 137,  200 => 128,  196 => 127,  187 => 120,  183 => 119,  176 => 114,  174 => 113,  165 => 106,  161 => 105,  154 => 100,  150 => 99,  139 => 90,  135 => 89,  104 => 60,  101 => 59,  91 => 51,  89 => 49,  80 => 43,  75 => 41,  70 => 39,  65 => 37,  60 => 35,  54 => 31,  52 => 21,  41 => 13,  38 => 12,  34 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"en-US\">

<head>



{% placeholder meta %}

{% component 'SeoCmsPage' %}

<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">

<link href='http://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet' type='text/css'>



<script defer src=\"https://use.fontawesome.com/releases/v5.0.2/js/all.js\"></script>

<link href=\"{{ [

    'assets/css/bootstrap.css',

    'assets/css/style.css',

    'assets/css/booking-form.css',

    'assets/scss/_custom.scss'

]|theme }}\" rel=\"stylesheet\">



<!-- <link href=\"{{'assets/css/font-awesome.css'|theme}}\" rel=\"stylesheet\">

<link href=\"{{'assets/css/bootstrap.css'|theme}}\" rel=\"stylesheet\">

<link href=\"{{'assets/css/sl2.css'|theme}}\" rel=\"stylesheet\">

<link href=\"{{'assets/css/style.css'|theme}}\" rel=\"stylesheet\">

<link href=\"{{'assets/css/reservation-panel.css'|theme}}\" rel=\"stylesheet\"> -->





<!-- <link rel=\"stylesheet\" href=\"{{ [

    'assets/scss/_custom.scss']|theme }}\">

 -->





{% styles %}

        

<!-- for IE6-8 support of HTML5 elements -->

<!--[if lt IE 9]>

    <script src=\"http://html5shiv .googlecode.com/svn/trunk/html5.js\"></script>

<![endif]-->







</head>

    

<body>

     

    <!-- Header -->

    <header id=\"layout-header\">

        {% partial 'site/header' %}

    </header>



    <!-- Slideshow and Reservation Panel-->

    <header id=\"layout-slideshow\">

        {% partial 'site/slideshow' %}

    </header>

    

    {% partial 'site/quick-booking' %}

    

    <!-- Content -->

    <section id=\"layout-content\">

        {% page %}

    </section>



    {% partial 'site/xs-contact' %}



    <!-- Footer -->

    <footer id=\"layout-footer\">

        {% partial 'site/footer' %}

    </footer>



    <!-- Scripts -->



    <script src=\"{{ [

        'assets/javascript/jquery.js',

        'assets/javascript/bootstrap.js',

        'assets/javascript/custom.js',

        '@framework',

        '@framework.extras',

    ]|theme }}\"></script>

    {% scripts %}





















<script type=\"text/javascript\">

\$(function(){

  \$('#triggerToggle').click(function(){

     \$('#div1').slideToggle();

  });

});

</script>




</body>

</html>", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/layouts/default.htm", "");
    }
}
