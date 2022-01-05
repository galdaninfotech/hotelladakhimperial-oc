<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/plugins/galdan/testimonials/components/testimonial/default.htm */
class __TwigTemplate_a1be5a47c6f040e60df5c5cae885998be7325fceb47a52b6e4b6a1d3499f72de extends Twig_Template
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
        $context["testimonials"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "testimonials", array());
        // line 2
        echo "
<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
";
        // line 4
        if ($this->getAttribute((isset($context["testimonials"]) ? $context["testimonials"] : null), "count", array())) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testimonials"]) ? $context["testimonials"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 6
                echo "        <blockquote><span>\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "message", array()), "html", null, true);
                echo "\"</span><br>
        ";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "name", array()), "html", null, true);
                echo "<br>
        ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "country", array()), "html", null, true);
                echo "
        </blockquote>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 12
        echo "


<form data-request=\"onSubscription\" data-request-success=\"alert('";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["text_messages"]) ? $context["text_messages"] : null), "html", null, true);
        echo "')\">
    <div class=\"form-group\">
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"testimonialsName\" placeholder=\"Name\" required>
    </div>

    <div class=\"form-group\">
        <input name=\"country\" type=\"text\" class=\"form-control\" id=\"testimonialsCountry\" placeholder=\"Country\" required>
    </div>

    <div class=\"form-group\">
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"testimonialsEmail\" placeholder=\"Email\" required>
    </div>

    <div class=\"form-group\">
        <textarea name=\"message\" class=\"form-control\" id=\"testimonialsMessage\" placeholder=\"Your Message\" required></textarea>
    </div>

    <button type=\"submit\" class=\"btn btn-default\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["text_button"]) ? $context["text_button"] : null), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/galdan/testimonials/components/testimonial/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  59 => 15,  54 => 12,  44 => 8,  40 => 7,  35 => 6,  30 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set testimonials = __SELF__.testimonials %}

<h1>{{ this.page.title }}</h1>
{% if testimonials.count %}
    {% for testimonial in testimonials %}
        <blockquote><span>\"{{testimonial.message}}\"</span><br>
        {{ testimonial.name }}<br>
        {{ testimonial.country }}
        </blockquote>
    {% endfor %}
{% endif %}



<form data-request=\"onSubscription\" data-request-success=\"alert('{{ text_messages }}')\">
    <div class=\"form-group\">
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"testimonialsName\" placeholder=\"Name\" required>
    </div>

    <div class=\"form-group\">
        <input name=\"country\" type=\"text\" class=\"form-control\" id=\"testimonialsCountry\" placeholder=\"Country\" required>
    </div>

    <div class=\"form-group\">
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"testimonialsEmail\" placeholder=\"Email\" required>
    </div>

    <div class=\"form-group\">
        <textarea name=\"message\" class=\"form-control\" id=\"testimonialsMessage\" placeholder=\"Your Message\" required></textarea>
    </div>

    <button type=\"submit\" class=\"btn btn-default\">{{ text_button }}</button>
</form>
", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/galdan/testimonials/components/testimonial/default.htm", "");
    }
}
