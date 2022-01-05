<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/plugins/galdan/slideshow/components/homeslideshow/default.htm */
class __TwigTemplate_c3e6d973e27bb9367fad9303dfdc74bf8e5fca514570cc76655220b48e118f5d extends Twig_Template
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
        $context["slideshows"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "slideshow", array());
        // line 2
        echo "
";
        // line 3
        $context["image_count"] = 1;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slideshows"]) ? $context["slideshows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slideshow"]) {
            // line 5
            echo "    <div class=\"carousel slide\" id=\"myCarousel\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    ";
            // line 7
            if ($this->getAttribute($this->getAttribute($context["slideshow"], "featured_images", array()), "count", array())) {
                // line 8
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["slideshow"], "featured_images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 9
                    echo "          <li data-target=\"#myCarousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, (isset($context["image_count"]) ? $context["image_count"] : null), "html", null, true);
                    echo "\"></li>
          ";
                    // line 10
                    $context["image_count"] = ((isset($context["image_count"]) ? $context["image_count"] : null) + 1);
                    // line 11
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "  ";
            }
            // line 13
            echo "  </ol>
  <div class=\"carousel-inner\">
    ";
            // line 15
            if ($this->getAttribute($this->getAttribute($context["slideshow"], "featured_images", array()), "count", array())) {
                // line 16
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["slideshow"], "featured_images", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 17
                    echo "          ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 18
                        echo "            <div class=\"item active\">
            <img
                    data-src=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "\"
                    src=\"";
                        // line 21
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                        echo "\"
                    alt=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                        echo "\"
                    style=\"max-width: 100%\"
                    class=\"img img-responsive d-block img-fluid\" />
          </div>
          ";
                    } else {
                        // line 27
                        echo "            <div class=\"item\">
              <img
                      data-src=\"";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "\"
                      src=\"";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                        echo "\"
                      alt=\"";
                        // line 31
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                        echo "\"
                      style=\"max-width: 100%\" 
                      class=\"img img-responsive d-block img-fluid\" />
            </div>
          ";
                    }
                    // line 36
                    echo "          
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "  ";
            }
            // line 39
            echo "  </div>
  <a href=\"#myCarousel\" data-slide=\"prev\" class=\"left carousel-control\"><span class=\"icon-prev\"></span></a>
  <a href=\"#myCarousel\" data-slide=\"next\" class=\"right carousel-control\"><span class=\"icon-next\"></span></a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slideshow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
";
        // line 45
        $context["slideshow"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "slideshow", array());
        // line 46
        echo "
<div style=\"background-color: green;\"></div> 

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/galdan/slideshow/components/homeslideshow/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 46,  155 => 45,  152 => 44,  142 => 39,  139 => 38,  124 => 36,  116 => 31,  112 => 30,  108 => 29,  104 => 27,  96 => 22,  92 => 21,  88 => 20,  84 => 18,  81 => 17,  63 => 16,  61 => 15,  57 => 13,  54 => 12,  48 => 11,  46 => 10,  41 => 9,  36 => 8,  34 => 7,  30 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set slideshows = __SELF__.slideshow %}

{% set image_count=1 %}
{% for slideshow in slideshows %}
    <div class=\"carousel slide\" id=\"myCarousel\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    {% if slideshow.featured_images.count %}
        {% for image in slideshow.featured_images %}
          <li data-target=\"#myCarousel\" data-slide-to=\"{{image_count}}\"></li>
          {% set image_count = image_count + 1 %}
        {% endfor %}
  {% endif %}
  </ol>
  <div class=\"carousel-inner\">
    {% if slideshow.featured_images.count %}
        {% for image in slideshow.featured_images %}
          {% if loop.first %}
            <div class=\"item active\">
            <img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\"
                    class=\"img img-responsive d-block img-fluid\" />
          </div>
          {% else %}
            <div class=\"item\">
              <img
                      data-src=\"{{ image.filename }}\"
                      src=\"{{ image.path }}\"
                      alt=\"{{ image.description }}\"
                      style=\"max-width: 100%\" 
                      class=\"img img-responsive d-block img-fluid\" />
            </div>
          {% endif %}
          
        {% endfor %}
  {% endif %}
  </div>
  <a href=\"#myCarousel\" data-slide=\"prev\" class=\"left carousel-control\"><span class=\"icon-prev\"></span></a>
  <a href=\"#myCarousel\" data-slide=\"next\" class=\"right carousel-control\"><span class=\"icon-next\"></span></a>
</div>
{% endfor %}

{% set slideshow = __SELF__.slideshow %}

<div style=\"background-color: green;\"></div> 

", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/galdan/slideshow/components/homeslideshow/default.htm", "");
    }
}
