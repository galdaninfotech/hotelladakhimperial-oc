<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/themes/demo/layouts/default.htm */
class __TwigTemplate_e50ef777b465d52c0b83161f0f9e711859fdf42750a4c58a4f0c85a298d1214c extends Twig_Template
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
        // line 5
        $context['__placeholder_meta_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('meta', $context['__placeholder_meta_default_contents']);
        unset($context['__placeholder_meta_default_contents']);        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "<link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">
<link href='http://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet' type='text/css'>

<link href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/font-awesome.css", 1 => "assets/css/bootstrap.css", 2 => "assets/css/sl2.css", 3 => "assets/css/style.css", 4 => "assets/css/reservation-panel.css", 5 => "assets/scss/_custom.scss"));
        // line 17
        echo "\" rel=\"stylesheet\">

<!-- <link href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/sl2.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/reservation-panel.css");
        echo "\" rel=\"stylesheet\"> -->


<!-- <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/scss/_custom.scss"));
        // line 27
        echo "\">
 -->


";
        // line 31
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 32
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
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "    </header>

    <!-- Slideshow and Reservation Panel-->
    <header id=\"layout-slideshow\">
        ";
        // line 51
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()) == "Home")) {
            // line 52
            echo "            ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("homeslideshow"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 53
            echo "        ";
        }
        // line 54
        echo "    </header>

    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 58
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 59
        echo "    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "    </footer>
    
    <div class=\"container\">
        <p id=\"footer-bottom-about\">Ladakh Bike Safari has been playing host to thousands of visitors to Ladakh. Our goal is to provide complete information about Ladakh, \" the land the of endless discoveries\" in addition to the best holidays possible whilst benefiting our host communities. We aim to leave the environment in at least as good a state as we find it. We train our staff to be ecological. Despite remoteness of the region we provide best equipments.</p>
    </div>

    <!-- Scripts -->
    <!-- <script src=\"";
        // line 71
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/bootstrap.js");
        echo "\"></script> -->

    <script src=\"";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/bootstrap.js", 2 => "@framework", 3 => "@framework.extras", 4 => "assets/javascript/sl2/jquery_009.js", 5 => "assets/javascript/sl2/jquery_014.js"));
        // line 81
        echo "\"></script>
    ";
        // line 82
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 83
        echo "
<!--     sl2
<script type=\"text/javascript\" src=\"";
        // line 85
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/sl2/jquery_009.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 86
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/sl2/jquery_014.js");
        echo "\"></script> -->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 86,  161 => 85,  157 => 83,  154 => 82,  151 => 81,  149 => 74,  144 => 72,  140 => 71,  131 => 64,  127 => 63,  121 => 59,  119 => 58,  113 => 54,  110 => 53,  105 => 52,  103 => 51,  97 => 47,  93 => 46,  77 => 32,  74 => 31,  68 => 27,  66 => 26,  60 => 23,  56 => 22,  52 => 21,  48 => 20,  44 => 19,  40 => 17,  38 => 10,  31 => 7,  27 => 6,  25 => 5,  19 => 1,);
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

<link href=\"{{ [
    'assets/css/font-awesome.css',
    'assets/css/bootstrap.css',
    'assets/css/sl2.css',
    'assets/css/style.css',
    'assets/css/reservation-panel.css',
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
        {% if this.page.title == 'Home' %}
            {% component 'homeslideshow' %}
        {% endif %}
    </header>

    <!-- Content -->
    <section id=\"layout-content\">
        {% page %}
    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
    </footer>
    
    <div class=\"container\">
        <p id=\"footer-bottom-about\">Ladakh Bike Safari has been playing host to thousands of visitors to Ladakh. Our goal is to provide complete information about Ladakh, \" the land the of endless discoveries\" in addition to the best holidays possible whilst benefiting our host communities. We aim to leave the environment in at least as good a state as we find it. We train our staff to be ecological. Despite remoteness of the region we provide best equipments.</p>
    </div>

    <!-- Scripts -->
    <!-- <script src=\"{{ 'assets/javascript/jquery.js'|theme }}\"></script>
    <script src=\"{{ 'assets/javascript/bootstrap.js'|theme }}\"></script> -->

    <script src=\"{{ [
        'assets/javascript/jquery.js',
        'assets/javascript/bootstrap.js',
        '@framework',
        '@framework.extras',
        'assets/javascript/sl2/jquery_009.js',
        'assets/javascript/sl2/jquery_014.js',
    ]|theme }}\"></script>
    {% scripts %}

<!--     sl2
<script type=\"text/javascript\" src=\"{{ 'assets/javascript/sl2/jquery_009.js'|theme}}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/javascript/sl2/jquery_014.js'|theme}}\"></script> -->

</body>
</html>", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/layouts/default.htm", "");
    }
}
