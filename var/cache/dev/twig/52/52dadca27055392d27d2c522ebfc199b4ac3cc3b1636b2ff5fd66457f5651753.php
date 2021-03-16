<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contact/index.html.twig */
class __TwigTemplate_523afd2753f15eac1f226e65247573bbb1e9882ea02f25ac0e6b3e5ff326fc03 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact Good Morning";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"container-fluid\">
 <div id=\"carouselExampleSlidesOnly\" class=\"  carousel slide\" data-ride=\"carousel\" style=\"margin-top:10px ;\">
  <div class=\"carousel-inner\" style=\"border-radius: 20px;\">
    <div class=\"carousel-item active\" >
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/contact1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 \" >
    </div> 

    
    <div class=\"carousel-item\">
      <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/contactc.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" >
    </div>
    <div class=\"carousel-item\">
      <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/contactb.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" >
    </div>
  </div>
 </div>

 <div class=\"row mt-4 justify-content-center\">
  <div class=\"col-sm-6 col-md-10 col-lg-10 \"  >
    <h2>Nous contacter</h2>
    <p>N'hésitez pas à prendre contact avec notre équipe.</p>
    <hr>
     ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "       <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form');
        echo "
         </div>
 </div>
 <div class=\"row justify-content-around\">
   <div class=\"col mt-5 \" style=\"text-align: center;\">
       
         <img  src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Ellipse 1.png"), "html", null, true);
        echo "\" >
         <h5>PISTON SANDRA</h5>
          <p style=\"font-size: 14px;\">RESPONSABLE  COMMERCIAL <br> 01 48 26 34 55
        <br>piston.sandra@goodmorning.fr</p>
      
    </div>
    
    <div class=\"col mt-5 \" style=\"text-align: center;\">
         
         <img  src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Ellipse 2.png"), "html", null, true);
        echo "\" >
         <h5>NGUYEN ERIC</h5>
         <p style=\"font-size: 14px;\">RESPONSABLE  COMMERCIAL <br> 01 48 26 34 56
        <br>nguyen.eric@goodmorning.fr</p>
         
    </div>
   </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 46,  144 => 37,  134 => 31,  125 => 29,  121 => 28,  108 => 18,  102 => 15,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact Good Morning{% endblock %}

{% block content %}
<div class=\"container-fluid\">
 <div id=\"carouselExampleSlidesOnly\" class=\"  carousel slide\" data-ride=\"carousel\" style=\"margin-top:10px ;\">
  <div class=\"carousel-inner\" style=\"border-radius: 20px;\">
    <div class=\"carousel-item active\" >
        <img src=\"{{asset('assets/images/contact1.jpg')}}\" class=\"d-block w-100 \" >
    </div> 

    
    <div class=\"carousel-item\">
      <img src=\"{{asset('assets/images/contactc.jpg')}}\" class=\"d-block w-100\" >
    </div>
    <div class=\"carousel-item\">
      <img src=\"{{asset('assets/images/contactb.jpg')}}\" class=\"d-block w-100\" >
    </div>
  </div>
 </div>

 <div class=\"row mt-4 justify-content-center\">
  <div class=\"col-sm-6 col-md-10 col-lg-10 \"  >
    <h2>Nous contacter</h2>
    <p>N'hésitez pas à prendre contact avec notre équipe.</p>
    <hr>
     {% for message in app.flashes('notice') %}
       <div class=\"alert alert-info\">{{message}}</div>
     {% endfor %}
      {{form(form)}}
         </div>
 </div>
 <div class=\"row justify-content-around\">
   <div class=\"col mt-5 \" style=\"text-align: center;\">
       
         <img  src=\"{{asset('assets/images/Ellipse 1.png')}}\" >
         <h5>PISTON SANDRA</h5>
          <p style=\"font-size: 14px;\">RESPONSABLE  COMMERCIAL <br> 01 48 26 34 55
        <br>piston.sandra@goodmorning.fr</p>
      
    </div>
    
    <div class=\"col mt-5 \" style=\"text-align: center;\">
         
         <img  src=\"{{asset('assets/images/Ellipse 2.png')}}\" >
         <h5>NGUYEN ERIC</h5>
         <p style=\"font-size: 14px;\">RESPONSABLE  COMMERCIAL <br> 01 48 26 34 56
        <br>nguyen.eric@goodmorning.fr</p>
         
    </div>
   </div>
</div>


{% endblock %}
", "contact/index.html.twig", "/Applications/MAMP/filrouge/fil_rouge_good_morning/templates/contact/index.html.twig");
    }
}
