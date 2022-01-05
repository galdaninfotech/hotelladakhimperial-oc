<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/plugins/indikator/news/components/subscribe/default.htm */
class __TwigTemplate_44b0ec284867bacdc2b320126e78fbbb7f1ad91cf114154c55e66c7d461d3ad7 extends Twig_Template
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSubscription1\" data-request-success=\"alert('";
        echo twig_escape_filter($this->env, (isset($context["text_messages"]) ? $context["text_messages"] : null), "html", null, true);
        echo "')\">
\t<div class=\"form-group\"><input name=\"name\" type=\"text\" class=\"form-control newsletter\" placeholder=\"Full Name\"  id=\"subscribersName\" required></div>
    <div class=\"form-group\"><input name=\"email\" type=\"text\" class=\"form-control newsletter\" placeholder=\"Your Email\"  id=\"subscribersEmail\" required></div>
    <button class=\"button medium orange pull-right\" type=\"submit\">Subscribe Now!</button>
</form>
<div class=\"row\">
    <div class=\"col-md-12\">
        <p class=\"subscribe-intro\">Please subscribe to our periodic newsletter to get latest updates about ongoing tours and other offers from ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
        echo ".</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/indikator/news/components/subscribe/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"{{ __SELF__ }}::onSubscription1\" data-request-success=\"alert('{{ text_messages }}')\">
\t<div class=\"form-group\"><input name=\"name\" type=\"text\" class=\"form-control newsletter\" placeholder=\"Full Name\"  id=\"subscribersName\" required></div>
    <div class=\"form-group\"><input name=\"email\" type=\"text\" class=\"form-control newsletter\" placeholder=\"Your Email\"  id=\"subscribersEmail\" required></div>
    <button class=\"button medium orange pull-right\" type=\"submit\">Subscribe Now!</button>
</form>
<div class=\"row\">
    <div class=\"col-md-12\">
        <p class=\"subscribe-intro\">Please subscribe to our periodic newsletter to get latest updates about ongoing tours and other offers from {{ company }}.</p>
    </div>
</div>", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/indikator/news/components/subscribe/default.htm", "");
    }
}
