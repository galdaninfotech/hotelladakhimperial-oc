<?php

/* C:\xampp\htdocs\hli/plugins/anandpatel/seoextension/components/cmspage/default.htm */
class __TwigTemplate_bbda6745117a864118dc19e8038e44ae27519412fb6888074c59ad7bb67e2fd6 extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["hasTour"]) ? $context["hasTour"] : null)) {
            // line 3
            echo "    ";
            $context['__placeholder_meta_default_contents'] = null;            ob_start();            // line 4
            echo "
    ";
            $context['__placeholder_meta_default_contents'] = ob_get_clean();            // line 3
            echo $this->env->getExtension('CMS')->displayBlock('meta', $context['__placeholder_meta_default_contents']);
            unset($context['__placeholder_meta_default_contents']);            // line 6
            echo "
";
        } else {
            // line 8
            echo "
    ";
            // line 9
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "redirect_url", array())) {
                // line 10
                echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "redirect_url", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_title", array())) {
                // line 14
                echo "        <title>";
                echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_title", array())));
                echo "</title>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_description", array())) {
                // line 18
                echo "        <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_description", array()), "html", null, true);
                echo "\">

";
            }
            // line 21
            echo "    ";
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_keywords", array())) {
                // line 22
                echo "        <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_keywords", array()), "html", null, true);
                echo "\">
    ";
            }
            // line 24
            echo "
    ";
            // line 25
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "canonical_url", array())) {
                // line 26
                echo "        <link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "canonical_url", array()), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 28
                echo "        ";
                echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), array(""));
                echo "
    ";
            }
            // line 30
            echo "
    <meta name=\"robots\" content=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "robot_index", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "robot_follow", array()), "html", null, true);
            echo "\">

    ";
            // line 33
            echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), array(""));
            echo "

    ";
            // line 35
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogTitle", array())) {
                // line 36
                echo "        <meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogTitle", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 38
            echo "
    ";
            // line 39
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogUrl", array())) {
                // line 40
                echo "        <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogUrl", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 42
            echo "
    ";
            // line 43
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogSiteName", array())) {
                // line 44
                echo "        <meta property=\"og:site_name\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogSiteName", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 46
            echo "
    ";
            // line 47
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogDescription", array())) {
                // line 48
                echo "        <meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogDescription", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 50
            echo "
    ";
            // line 51
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogFbAppId", array())) {
                // line 52
                echo "        <meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogFbAppId", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 54
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hli/plugins/anandpatel/seoextension/components/cmspage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 54,  156 => 52,  154 => 51,  151 => 50,  145 => 48,  143 => 47,  140 => 46,  134 => 44,  132 => 43,  129 => 42,  123 => 40,  121 => 39,  118 => 38,  112 => 36,  110 => 35,  105 => 33,  98 => 31,  95 => 30,  89 => 28,  83 => 26,  81 => 25,  78 => 24,  72 => 22,  69 => 21,  62 => 18,  60 => 17,  57 => 16,  51 => 14,  49 => 13,  46 => 12,  40 => 10,  38 => 9,  35 => 8,  31 => 6,  29 => 3,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% if hasTour %}
    {% placeholder meta default %}

    {% endplaceholder %}

{% else %}

    {% if __SELF__.redirect_url %}
        <meta http-equiv=\"refresh\" content=\"0; url={{__SELF__.redirect_url}}\" />
    {% endif %}

    {% if __SELF__.seo_title %}
        <title>{{__SELF__.seo_title | generateTitle}}</title>
    {% endif %}

    {% if __SELF__.seo_description %}
        <meta name=\"description\" content=\"{{__SELF__.seo_description}}\">

{% endif %}
    {% if __SELF__.seo_keywords %}
        <meta name=\"keywords\" content=\"{{__SELF__.seo_keywords}}\">
    {% endif %}

    {% if __SELF__.canonical_url %}
        <link rel=\"canonical\" href=\"{{__SELF__.canonical_url}}\" />
    {% else %}
        {{ '' | generateCanonicalUrl}}
    {% endif %}

    <meta name=\"robots\" content=\"{{__SELF__.robot_index}},{{__SELF__.robot_follow}}\">

    {{ ''|otherMetaTags|raw }}

    {% if __SELF__.ogTitle %}
        <meta property=\"og:title\" content=\"{{ __SELF__.ogTitle }}\" />
    {% endif %}

    {% if __SELF__.ogUrl %}
        <meta property=\"og:url\" content=\"{{ __SELF__.ogUrl }}\" />
    {% endif %}

    {% if __SELF__.ogSiteName %}
        <meta property=\"og:site_name\" content=\"{{ __SELF__.ogSiteName }}\" />
    {% endif %}

    {% if __SELF__.ogDescription %}
        <meta property=\"og:description\" content=\"{{ __SELF__.ogDescription }}\" />
    {% endif %}

    {% if __SELF__.ogFbAppId %}
        <meta property=\"fb:app_id\" content=\"{{ __SELF__.ogFbAppId  }}\" />
    {% endif %}

{% endif %}
", "C:\\xampp\\htdocs\\hli/plugins/anandpatel/seoextension/components/cmspage/default.htm", "");
    }
}
