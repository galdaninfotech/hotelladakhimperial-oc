<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/plugins/galdan/sitetools/components/contact/default.htm */
class __TwigTemplate_21e8cf0b74cb90697603507e8329e96565efbe6d20fc4b1f63a4e3dd117b3020 extends Twig_Template
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
        echo "<form 
\tid=\"contact-form\" 
\tdata-request=\"onContact\" 
\tdata-request-success=\"
\t\t\$('#contact-form').fadeOut();
\t\t\$('.contact h1').html('Thank You!');
\t\t\$('.contact').append('<p>Hi '+\$('#name').val()+'!</p>');
\t\t\$('.contact').append('<p>Your message has been sent. You will be shortly contacted by our customer support.</p>');
\t\tconsole.log('";
        // line 9
        echo twig_escape_filter($this->env, ($context["text_messages"] ?? null), "html", null, true);
        echo "');
\t\">
    <div class=\"form-group\"> <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Name\" class=\"form-control\" required> </div>
    <div class=\"form-group\"><input type=\"text\" name=\"email\" placeholder=\"Email\" class=\"form-control\" required></div>
\t<div class=\"form-group\"><textarea name=\"message\" placeholder=\"Your Message\" rows=\"12\" class=\"form-control\" required></textarea></div>
\t<div class=\"form-group\">
\t\t<input type=\"submit\" name=\"submit_book_now_form\" value=\"Submit\" class=\"button medium orange\">
        <input type=\"hidden\" name=\"Submit\" value=\"Submit\">
\t</div>

</form>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/plugins/galdan/sitetools/components/contact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form 
\tid=\"contact-form\" 
\tdata-request=\"onContact\" 
\tdata-request-success=\"
\t\t\$('#contact-form').fadeOut();
\t\t\$('.contact h1').html('Thank You!');
\t\t\$('.contact').append('<p>Hi '+\$('#name').val()+'!</p>');
\t\t\$('.contact').append('<p>Your message has been sent. You will be shortly contacted by our customer support.</p>');
\t\tconsole.log('{{ text_messages }}');
\t\">
    <div class=\"form-group\"> <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Name\" class=\"form-control\" required> </div>
    <div class=\"form-group\"><input type=\"text\" name=\"email\" placeholder=\"Email\" class=\"form-control\" required></div>
\t<div class=\"form-group\"><textarea name=\"message\" placeholder=\"Your Message\" rows=\"12\" class=\"form-control\" required></textarea></div>
\t<div class=\"form-group\">
\t\t<input type=\"submit\" name=\"submit_book_now_form\" value=\"Submit\" class=\"button medium orange\">
        <input type=\"hidden\" name=\"Submit\" value=\"Submit\">
\t</div>

</form>", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/plugins/galdan/sitetools/components/contact/default.htm", "");
    }
}
