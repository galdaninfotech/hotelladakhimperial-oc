<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/themes/demo/partials/site/banner.htm */
class __TwigTemplate_175286467f06508dd15bfa9ffa7de22f48754efab5690ec01aaac664e122b17f extends Twig_Template
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
        echo "<br><br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"hli-banner\">
                <img src=\"";
        // line 6
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/banner/first.jpg"));
        echo "\">
                <div id=\"parallelogram\"></div>
                <div class=\"details\">
                    <h6>ITS TIME TO BOOK</h6>
                    <p>Booking direct is guaranteed to save you <span id=\"discount\">5% off</span> your next stay with us. Book by 31 Jan 2018</p>
                    <div id=\"hli-banner-book-button\"><span>Book Now</span><div id=\"triangle-right\"></div></div>
                </div>
            </div> 
        </div><!-- .col-xs-12 col-md-4  -->

        <div class=\"col-xs-12 col-md-4\">
            <div class=\"hli-banner\">
                <img src=\"";
        // line 18
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/banner/second.jpg"));
        echo "\">
                <div id=\"parallelogram\"></div>
                <div class=\"details\">
                    <h6>Best Cuisine Available</h6>
                    <p>We serve all kinds of veg and non-veg foods items.</p>
                    <div id=\"hli-banner-book-button\"><span>Book Now</span><div id=\"triangle-right\"></div></div>
                </div>
            </div> 
        </div><!-- .col-xs-12 col-md-4  -->

        <div class=\"col-xs-12 col-md-4\">
            <div class=\"hli-banner\">
                <img src=\"";
        // line 30
        echo url($this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/banner/third.jpg"));
        echo "\">
                <div id=\"parallelogram\"></div>
                <div class=\"details\">
                    <h6>Wide Range Of Services</h6>
                    <p>We have every kind of facilities and services which will make your stay here enjoyable.</p>
                    <div id=\"hli-banner-book-button\"><span>Book Now</span><div id=\"triangle-right\"></div></div>
                </div>
            </div> 
        </div><!-- .col-xs-12 col-md-4  -->
    </div> <!-- .row  -->
</div> <!-- .container  -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/partials/site/banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 30,  41 => 18,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br><br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"hli-banner\">
                <img src=\"{{ url('assets/images/banner/first.jpg'|theme) }}\">
                <div id=\"parallelogram\"></div>
                <div class=\"details\">
                    <h6>ITS TIME TO BOOK</h6>
                    <p>Booking direct is guaranteed to save you <span id=\"discount\">5% off</span> your next stay with us. Book by 31 Jan 2018</p>
                    <div id=\"hli-banner-book-button\"><span>Book Now</span><div id=\"triangle-right\"></div></div>
                </div>
            </div> 
        </div><!-- .col-xs-12 col-md-4  -->

        <div class=\"col-xs-12 col-md-4\">
            <div class=\"hli-banner\">
                <img src=\"{{ url('assets/images/banner/second.jpg'|theme) }}\">
                <div id=\"parallelogram\"></div>
                <div class=\"details\">
                    <h6>Best Cuisine Available</h6>
                    <p>We serve all kinds of veg and non-veg foods items.</p>
                    <div id=\"hli-banner-book-button\"><span>Book Now</span><div id=\"triangle-right\"></div></div>
                </div>
            </div> 
        </div><!-- .col-xs-12 col-md-4  -->

        <div class=\"col-xs-12 col-md-4\">
            <div class=\"hli-banner\">
                <img src=\"{{ url('assets/images/banner/third.jpg'|theme) }}\">
                <div id=\"parallelogram\"></div>
                <div class=\"details\">
                    <h6>Wide Range Of Services</h6>
                    <p>We have every kind of facilities and services which will make your stay here enjoyable.</p>
                    <div id=\"hli-banner-book-button\"><span>Book Now</span><div id=\"triangle-right\"></div></div>
                </div>
            </div> 
        </div><!-- .col-xs-12 col-md-4  -->
    </div> <!-- .row  -->
</div> <!-- .container  -->", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/themes/demo/partials/site/banner.htm", "");
    }
}
