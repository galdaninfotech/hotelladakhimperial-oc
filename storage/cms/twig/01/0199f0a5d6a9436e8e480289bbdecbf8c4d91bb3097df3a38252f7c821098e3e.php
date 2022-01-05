<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/plugins/galdan/bookings/components/form/default.htm */
class __TwigTemplate_e04841b210609daa8bb19d2bafe6b855df249b14213a05b951bc8ff472bceb0d extends Twig_Template
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
        $context["tours"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tours", array());
        // line 3
        echo "
<form 
\tid=\"booking-form\" 
\tdata-request=\"onBooking\" 
\tdata-request-success=\"
\t\t\$('#booking-form').fadeOut();
\t\t\$('.col-md-9 h1').html('Thank You!');
\t\t\$('.col-md-9').append('<p>Congratulation '+\$('#name').val()+'!</p>');
\t\t\$('.col-md-9').append('<p>Your booking has been sent. You will shortly receive mail with booking information.</p>');
\t\tconsole.log('";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["text_messages"]) ? $context["text_messages"] : null), "html", null, true);
        echo "');
\t\">
    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"other2\">
    <tbody>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Name :&nbsp;&nbsp;<font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <input name=\"name\" type=\"text\" id=\"name\" value=\"\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Email :&nbsp;&nbsp;<font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <input name=\"email\" type=\"email\" id=\"email\" value=\"\" size=\"30\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Contact No. : &nbsp;&nbsp; <font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
      <div align=\"left\">
        <input name=\"phone\" type=\"text\" id=\"phone\" value=\"\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Check-In :</td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
          <input name=\"checkin\" id=\"checkin\" class=\"required form-control\" placeholder=\"Check-In\" type=\"date\" value=\"\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Check-Out :</td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
          <input name=\"checkout\" id=\"checkout\" class=\"required form-control\" placeholder=\"Check-Out\" type=\"date\" value=\"\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Total No. of Persons :</td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <input name=\"num_persons\" type=\"number\" min=\"1\" id=\"num_persons\" value=\"\" size=\"2\" class=\"form-control\" style=\"width:100px;\">
        </div>
       </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Your Requirements :&nbsp;&nbsp;</td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"10\"></textarea>
        </div>
      </td>
    </tr>              
    <tr>
      <td height=\"40\" align=\"left\" valign=\"middle\">&nbsp;</td>
      <td height=\"40\" align=\"right\" valign=\"middle\">
        <input type=\"submit\" name=\"submit_book_now_form\" value=\"Submit\" class=\"button medium orange\">
        <input type=\"hidden\" name=\"Submit\" value=\"Submit\">
      </td>
    </tr>
  </tbody>
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/galdan/bookings/components/form/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  24 => 3,  22 => 2,  19 => 1,);
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
{% set tours = form.tours %}

<form 
\tid=\"booking-form\" 
\tdata-request=\"onBooking\" 
\tdata-request-success=\"
\t\t\$('#booking-form').fadeOut();
\t\t\$('.col-md-9 h1').html('Thank You!');
\t\t\$('.col-md-9').append('<p>Congratulation '+\$('#name').val()+'!</p>');
\t\t\$('.col-md-9').append('<p>Your booking has been sent. You will shortly receive mail with booking information.</p>');
\t\tconsole.log('{{ text_messages }}');
\t\">
    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"other2\">
    <tbody>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Name :&nbsp;&nbsp;<font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <input name=\"name\" type=\"text\" id=\"name\" value=\"\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Email :&nbsp;&nbsp;<font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <input name=\"email\" type=\"email\" id=\"email\" value=\"\" size=\"30\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Contact No. : &nbsp;&nbsp; <font color=\"#FF3300\">*</font></td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
      <div align=\"left\">
        <input name=\"phone\" type=\"text\" id=\"phone\" value=\"\" class=\"form-control\" required=\"required\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Check-In :</td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
          <input name=\"checkin\" id=\"checkin\" class=\"required form-control\" placeholder=\"Check-In\" type=\"date\" value=\"\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Check-Out :</td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
          <input name=\"checkout\" id=\"checkout\" class=\"required form-control\" placeholder=\"Check-Out\" type=\"date\" value=\"\">
        </div>
      </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Total No. of Persons :</td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <input name=\"num_persons\" type=\"number\" min=\"1\" id=\"num_persons\" value=\"\" size=\"2\" class=\"form-control\" style=\"width:100px;\">
        </div>
       </td>
    </tr>
    <tr>
      <td height=\"25\" align=\"left\" valign=\"middle\">Your Requirements :&nbsp;&nbsp;</td>
      <td height=\"25\" align=\"left\" valign=\"middle\">
        <div align=\"left\">
            <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"10\"></textarea>
        </div>
      </td>
    </tr>              
    <tr>
      <td height=\"40\" align=\"left\" valign=\"middle\">&nbsp;</td>
      <td height=\"40\" align=\"right\" valign=\"middle\">
        <input type=\"submit\" name=\"submit_book_now_form\" value=\"Submit\" class=\"button medium orange\">
        <input type=\"hidden\" name=\"Submit\" value=\"Submit\">
      </td>
    </tr>
  </tbody>
</table>
</form>
", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/galdan/bookings/components/form/default.htm", "");
    }
}
