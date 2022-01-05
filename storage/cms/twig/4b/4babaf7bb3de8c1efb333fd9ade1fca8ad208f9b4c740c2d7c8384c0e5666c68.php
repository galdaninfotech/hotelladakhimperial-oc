<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/plugins/anandpatel/seoextension/components/tourpost/default.htm */
class __TwigTemplate_8f4003378219e9114727d830f65461b057d38e3120eeec3518ef54be0d2b7cee extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('meta'        );
        // line 3
        echo "
";
        // line 4
        echo '<!-- X_OCTOBER_DEFAULT_BLOCK_CONTENT -->';
        // line 5
        echo "
    ";
        // line 6
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "redirect_url", array())) {
            // line 7
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "redirect_url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_title", array())) {
            // line 11
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_title", array())));
            echo "</title>
    ";
        } else {
            // line 13
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array())));
            echo "</title>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_description", array())) {
            // line 17
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_description", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_keywords", array())) {
            // line 21
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "seo_keywords", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "canonical_url", array())) {
            // line 25
            echo "        <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "canonical_url", array()), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 27
            echo "        ";
            echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), array(""));
            echo "
    ";
        }
        // line 29
        echo "
        <meta name=\"robots\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "robot_index", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "robot_follow", array()), "html", null, true);
        echo "\">

    ";
        // line 32
        echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), array(""));
        echo "

    ";
        // line 34
        echo call_user_func_array($this->env->getFilter('generateOgTags')->getCallable(), array((isset($context["post"]) ? $context["post"] : null)));
        echo "
";
        // line 2
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/plugins/anandpatel/seoextension/components/tourpost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 2,  111 => 34,  106 => 32,  99 => 30,  96 => 29,  90 => 27,  84 => 25,  82 => 24,  79 => 23,  73 => 21,  71 => 20,  68 => 19,  62 => 17,  60 => 16,  57 => 15,  51 => 13,  45 => 11,  43 => 10,  40 => 9,  34 => 7,  32 => 6,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
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
{% put meta %}

{% default %}

    {% if post.redirect_url %}
        <meta http-equiv=\"refresh\" content=\"0; url={{post.redirect_url}}\" />
    {% endif %}

    {% if post.seo_title %}
        <title>{{ post.seo_title | generateTitle}}</title>
    {% else %}
        <title>{{ post.title | generateTitle }}</title>
    {% endif %}

    {% if post.seo_description %}
        <meta name=\"description\" content=\"{{post.seo_description}}\">
    {% endif %}

    {% if post.seo_keywords %}
        <meta name=\"keywords\" content=\"{{post.seo_keywords}}\">
    {% endif %}

    {% if post.canonical_url %}
        <link rel=\"canonical\" href=\"{{post.canonical_url}}\" />
    {% else %}
        {{ '' | generateCanonicalUrl}}
    {% endif %}

        <meta name=\"robots\" content=\"{{post.robot_index}},{{post.robot_follow}}\">

    {{ ''|otherMetaTags|raw }}

    {{ post|generateOgTags }}
{% endput %}
", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/plugins/anandpatel/seoextension/components/tourpost/default.htm", "");
    }
}
