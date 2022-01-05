<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/themes/demo/layouts/default.htm */
class __TwigTemplate_a646e08991ec571a421b2a4eba640f8346eade55ddb5f14751df9eada341714c extends Twig_Template
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

<script defer src=\"https://use.fontawesome.com/releases/v5.0.2/js/all.js\"></script>
<link href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.css", 1 => "assets/css/style.css", 2 => "assets/css/booking-form.css", 3 => "assets/scss/_custom.scss"));
        // line 16
        echo "\" rel=\"stylesheet\">

<!-- <link href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/sl2.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/reservation-panel.css");
        echo "\" rel=\"stylesheet\"> -->


<!-- <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/scss/_custom.scss"));
        // line 26
        echo "\">
 -->


";
        // line 30
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 31
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
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "    </header>

    <!-- Slideshow and Reservation Panel-->
    <header id=\"layout-slideshow\">
        ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/slideshow"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "    </header>
    
    ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/quick-booking"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "    
    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 57
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 58
        echo "    </section>

    ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/xs-contact"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "
    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "    </footer>

    <!-- Scripts -->

    <script src=\"";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/bootstrap.js", 2 => "assets/javascript/custom.js", 3 => "@framework", 4 => "@framework.extras"));
        // line 75
        echo "\"></script>
    ";
        // line 76
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 77
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
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 77,  151 => 76,  148 => 75,  146 => 69,  140 => 65,  136 => 64,  131 => 61,  127 => 60,  123 => 58,  121 => 57,  116 => 54,  112 => 53,  108 => 51,  104 => 50,  98 => 46,  94 => 45,  78 => 31,  75 => 30,  69 => 26,  67 => 25,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  45 => 18,  41 => 16,  39 => 11,  31 => 7,  27 => 6,  25 => 5,  19 => 1,);
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
</html>", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/layouts/default.htm", "");
    }
}
