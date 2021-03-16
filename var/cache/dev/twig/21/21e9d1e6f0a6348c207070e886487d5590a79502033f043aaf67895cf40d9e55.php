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

/* base.html.twig */
class __TwigTemplate_61d2aac208ca8b4b978a87882347313500fe929228a3c8af81283450823331e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "</title>

    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\"
      integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\"
      crossorigin=\"anonymous\"
    />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <header>
      <div class=\"container-fluid headerhead\">
        
        <div class=\"col-12 \" style=\"text-align: left; \">

         ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "          <a class=\"btn-success \" style=\"border-radius:10px ; font-size:14px ; padding:3px ; font-family:exo2 \" href=\"compte\" role=\"button\">MON COMPTE <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "firstname", [], "any", false, false, false, 27), "html", null, true);
            echo ")</small></a>
          <a class=\" btn-success \" style=\"border-radius:10px ; font-size:14px ; padding:3px ; font-family:exo2 \"  href=\"/deconnexion\" role=\"button\">DÉCONNEXION</a>
           ";
        } else {
            // line 30
            echo "        
          <a class=\"btn-success \" style=\"border-radius:10px ; font-size:14px ; padding:3px ; font-family:exo2 \" href=\"register\" role=\"button\">S'INSCRIRE</a>
          <a class=\" btn-success \" style=\"border-radius:10px ; font-size:14px ; padding:3px ; font-family:exo2 \"  href=\"connexion\" role=\"button\">SE CONNECTER</a>
          ";
        }
        // line 34
        echo "        </div>
    
      
        <div class=\"container\">
          <div class=\"row \" style=\"padding:0px\">
            <div class=\"col-6 align-items-start \" style=\"padding:0px\">
               <nav class=\" mt-5  mynavbar  navbar navbar-expand-lg navbar-light \" >
                 <button class=\"navbar-toggler\"  ; type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"  ></span>
                  </button>
               
                      <div class=\"collapse navbar-collapse\"  id=\"navbarNav\">
                  <ul class=\"navbar-nav\">
                 <li class=\"nav-item active\">
               <a class=\"nav-link\" style=\"color: white;text-shadow: black 0.1em 0.1em 0.2em;\" href=\"/\">ACCUEIL <span class=\"sr-only\">(current)</span></a>
            </li>
              <li class=\"nav-item active\">
            <a class=\"nav-link\"  style=\"color: white;text-shadow: black 0.1em 0.1em 0.2em;\"  href=\"tarifs\">TARIFS<span class=\"sr-only\">(current)</span></span></a>
                </li>
            <li class=\"nav-item active\">
           <a class=\"nav-link\"  style=\"color: white;text-shadow: black 0.1em 0.1em 0.2em;\"  href=\"actu\">ACTU<span class=\"sr-only\">(current)</span></a>
            </li>
              <li class=\"nav-item active\">
            <a class=\"nav-link\"   style=\"color: white;text-shadow: black 0.1em 0.1em 0.2em;\"  href=\"contact\" >CONTACT<span class=\"sr-only\">(current)</span></a>
              </li>
            </ul>
             </div>
              
               
              </nav>
            </div>
            <div class=\"col-6 \" style=\"padding: 0px;\">
              <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logogoodmorningvectorisernetblanc1.svg"), "html", null, true);
        echo "\" class=\" img-responsive logogood\">
            </div>
            
          </div>
          
        </div>
      </div>
    </header>
        ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 175
        echo "     <footer>
       <div class=\"container-fluid footer-bas\" >
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-12\" style=\"text-align: center;\">
               <p class=\"suivnous\">SUIVEZ NOUS !</p>
              </div>
              <div class=\"col-12\" style=\"text-align: center;\">
                <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\" class=\"facebook\" />
           <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/snapchat.png"), "html", null, true);
        echo "\" alt=\"snapchat\" class=\"snap\" />
            <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/instagram.png"), "html", null, true);
        echo "\" alt=\"insta\" class=\"insta\" />
              </div>
          </div>
          <div class=\"row  justify-content-around\" >
            <div class=\"col-4   textfoot\">
             INFORMATION
               <p class=\"infotext\" >
               GOOD MORNING <br />6 rue de Gaulle <br />78140 Velizy <br />
              05 50 00 97 06
              </p>
            </div>
            <div class=\"col-4 textfoot \" >
            ACCÈS RAPIDE     <p class=\"infotext\">
            SE CONNECTER <br />
            TARIFS <br />
            ACTU <br />
             CONTACT
             </p>
            </div>
          </div>
          <div class=\"row justify-content-center\" style=\"font-size:6px; font-family:exo2; color:white ; margin-top:-15px;\" >
            goodmornig@2021
          </div>
          
        </div>
       </div>
     </footer>
    <script
      src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
      integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"
      integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js\"
      integrity=\"sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s\"
      crossorigin=\"anonymous\"
    ></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "      
   Good Morning Symphony   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 75
        echo "          
      
    <section>
      <div class=\"container-fluid imghaut\">
        <div class=\"container\">
          <div class=\"row-12 \">
           <div class=\"col bodyhaut \" >
            <p > LIVRAISON À DOMICILE <br />DE PAINS ET VIENNOISERIES ! </p>
           </div>
          </div>
        <div class=\"row-12\">
           <div class= \"col-12 d-sm-block d-md-none d-lg-none youtubemobi\">
          <iframe
            width=\"150px\"
            height=\"60px\"
            src=\"https://www.youtube.com/embed/aSjrFxkT7gE\"
            frameborder=\"0\"
            allow=\"accelerometer; autoplay=1 ;mute=0 ; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
            allowfullscreen
          ></iframe>
        </div> 
        <div class=\" col-12 align-self-center d-none d-sm-none d-md-block d-lg-none youtubeipad\">
          <iframe
            width=\"300px\"
            height=\"130px\"
            src=\"https://www.youtube.com/embed/aSjrFxkT7gE\"
            frameborder=\"0\"
            allow=\"accelerometer; autoplay=1;mute=0; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
            allowfullscreen
          ></iframe>
        </div> 
        <div class=\"col-12 d-none d-sm-none d-md-none d-lg-block youtube\" style=\"margin:0px;\">
          <iframe
            width=\"350px\"
            height=\"250px\"
            src=\"https://www.youtube.com/embed/aSjrFxkT7gE\"
            frameborder=\"0\"
            allow=\"accelerometer; autoplay=1;mute=0; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12 butinsc\" style=\"text-align: center; margin-top:25px ;\">
          <a class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\">NOS OFFRES</a>
          <a class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\">JE COMMANDE</a>
        </div>
      </div>

        
    </div>
  </div>
    </section>
    <section>
      <div class=\"contenair-fluid image-bas\" >
             <p class=\"rapide\">RAPIDE EN 3 ÉTAPES !</p>
      </div>
    </section>
     <section>
       <div class=\"container\" style=\"padding: 10px; margin-top:10px\">
        <div class=\"row\">
       
           <div class=\"col-lg   \" style=\"text-align: center;\">
           <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dekstop/iconesouris.png"), "html", null, true);
        echo "\" alt=\"INSCRISTOI\" class=\"icsou\" />
           
         
               <div class=\" texte-forfait\" >
                  <p>CHOISIS TON FORFAIT ! <br />ENVOI TA COMMANDE !</p>
               </div>
            </div>
         
          
          
         
            <div class=\"col-lg  \"style=\"text-align: center;\" >
          <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dekstop/iconepc.png"), "html", null, true);
        echo "\" alt=\"ICONEPC\" class=\"tailpc\" />
          

          
            <div class=\" texte2\" >
                  <p>CHOISIS TON FORFAIT ! <br />ENVOI TA COMMANDE !</p>
               </div>
                </div>
          
            <div class=\"col-lg  \" style=\"text-align: center;\">
           <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dekstop/iconelivreur.png"), "html", null, true);
        echo "\" alt=\"ICONELIV\" class=\"tailliv\" />

         
            <div class=\"texte3\" >
                  <p>C'EST PARTI ! <br />TU N'AS PLUS QU'À ATTENDRE !</p>
               </div>
           </div>

   
          </div>
          
         
       </div>
     </section>
       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 160,  330 => 150,  315 => 138,  250 => 75,  240 => 74,  229 => 8,  219 => 7,  205 => 227,  160 => 185,  156 => 184,  152 => 183,  142 => 175,  140 => 74,  129 => 66,  95 => 34,  89 => 30,  82 => 27,  80 => 26,  69 => 18,  65 => 17,  55 => 9,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>
    {% block title %}
      
   Good Morning Symphony   {% endblock %}</title>

    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\"
      integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\"
      crossorigin=\"anonymous\"
    />
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/bootstrap.min.css')}}\" />
   <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\" />
  </head>
  <body>
    <header>
      <div class=\"container-fluid headerhead\">
        
        <div class=\"col-12 \" style=\"text-align: left; \">

         {% if app.user %}
          <a class=\"btn-success \" style=\"border-radius:10px ; font-size:14px ; padding:3px ; font-family:exo2 \" href=\"compte\" role=\"button\">MON COMPTE <small>({{app.user.firstname}})</small></a>
          <a class=\" btn-success \" style=\"border-radius:10px ; font-size:14px ; padding:3px ; font-family:exo2 \"  href=\"/deconnexion\" role=\"button\">DÉCONNEXION</a>
           {% else %}
        
          <a class=\"btn-success \" style=\"border-radius:10px ; font-size:14px ; padding:3px ; font-family:exo2 \" href=\"register\" role=\"button\">S'INSCRIRE</a>
          <a class=\" btn-success \" style=\"border-radius:10px ; font-size:14px ; padding:3px ; font-family:exo2 \"  href=\"connexion\" role=\"button\">SE CONNECTER</a>
          {% endif %}
        </div>
    
      
        <div class=\"container\">
          <div class=\"row \" style=\"padding:0px\">
            <div class=\"col-6 align-items-start \" style=\"padding:0px\">
               <nav class=\" mt-5  mynavbar  navbar navbar-expand-lg navbar-light \" >
                 <button class=\"navbar-toggler\"  ; type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"  ></span>
                  </button>
               
                      <div class=\"collapse navbar-collapse\"  id=\"navbarNav\">
                  <ul class=\"navbar-nav\">
                 <li class=\"nav-item active\">
               <a class=\"nav-link\" style=\"color: white;text-shadow: black 0.1em 0.1em 0.2em;\" href=\"/\">ACCUEIL <span class=\"sr-only\">(current)</span></a>
            </li>
              <li class=\"nav-item active\">
            <a class=\"nav-link\"  style=\"color: white;text-shadow: black 0.1em 0.1em 0.2em;\"  href=\"tarifs\">TARIFS<span class=\"sr-only\">(current)</span></span></a>
                </li>
            <li class=\"nav-item active\">
           <a class=\"nav-link\"  style=\"color: white;text-shadow: black 0.1em 0.1em 0.2em;\"  href=\"actu\">ACTU<span class=\"sr-only\">(current)</span></a>
            </li>
              <li class=\"nav-item active\">
            <a class=\"nav-link\"   style=\"color: white;text-shadow: black 0.1em 0.1em 0.2em;\"  href=\"contact\" >CONTACT<span class=\"sr-only\">(current)</span></a>
              </li>
            </ul>
             </div>
              
               
              </nav>
            </div>
            <div class=\"col-6 \" style=\"padding: 0px;\">
              <img src=\"{{asset('assets/images/logogoodmorningvectorisernetblanc1.svg')}}\" class=\" img-responsive logogood\">
            </div>
            
          </div>
          
        </div>
      </div>
    </header>
        {% block content %}
          
      
    <section>
      <div class=\"container-fluid imghaut\">
        <div class=\"container\">
          <div class=\"row-12 \">
           <div class=\"col bodyhaut \" >
            <p > LIVRAISON À DOMICILE <br />DE PAINS ET VIENNOISERIES ! </p>
           </div>
          </div>
        <div class=\"row-12\">
           <div class= \"col-12 d-sm-block d-md-none d-lg-none youtubemobi\">
          <iframe
            width=\"150px\"
            height=\"60px\"
            src=\"https://www.youtube.com/embed/aSjrFxkT7gE\"
            frameborder=\"0\"
            allow=\"accelerometer; autoplay=1 ;mute=0 ; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
            allowfullscreen
          ></iframe>
        </div> 
        <div class=\" col-12 align-self-center d-none d-sm-none d-md-block d-lg-none youtubeipad\">
          <iframe
            width=\"300px\"
            height=\"130px\"
            src=\"https://www.youtube.com/embed/aSjrFxkT7gE\"
            frameborder=\"0\"
            allow=\"accelerometer; autoplay=1;mute=0; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
            allowfullscreen
          ></iframe>
        </div> 
        <div class=\"col-12 d-none d-sm-none d-md-none d-lg-block youtube\" style=\"margin:0px;\">
          <iframe
            width=\"350px\"
            height=\"250px\"
            src=\"https://www.youtube.com/embed/aSjrFxkT7gE\"
            frameborder=\"0\"
            allow=\"accelerometer; autoplay=1;mute=0; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12 butinsc\" style=\"text-align: center; margin-top:25px ;\">
          <a class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\">NOS OFFRES</a>
          <a class=\"btn btn-success btn-sm\" href=\"#\" role=\"button\">JE COMMANDE</a>
        </div>
      </div>

        
    </div>
  </div>
    </section>
    <section>
      <div class=\"contenair-fluid image-bas\" >
             <p class=\"rapide\">RAPIDE EN 3 ÉTAPES !</p>
      </div>
    </section>
     <section>
       <div class=\"container\" style=\"padding: 10px; margin-top:10px\">
        <div class=\"row\">
       
           <div class=\"col-lg   \" style=\"text-align: center;\">
           <img src=\"{{asset('assets/images/dekstop/iconesouris.png')}}\" alt=\"INSCRISTOI\" class=\"icsou\" />
           
         
               <div class=\" texte-forfait\" >
                  <p>CHOISIS TON FORFAIT ! <br />ENVOI TA COMMANDE !</p>
               </div>
            </div>
         
          
          
         
            <div class=\"col-lg  \"style=\"text-align: center;\" >
          <img src=\"{{asset('assets/images/dekstop/iconepc.png')}}\" alt=\"ICONEPC\" class=\"tailpc\" />
          

          
            <div class=\" texte2\" >
                  <p>CHOISIS TON FORFAIT ! <br />ENVOI TA COMMANDE !</p>
               </div>
                </div>
          
            <div class=\"col-lg  \" style=\"text-align: center;\">
           <img src=\"{{asset('assets/images/dekstop/iconelivreur.png')}}\" alt=\"ICONELIV\" class=\"tailliv\" />

         
            <div class=\"texte3\" >
                  <p>C'EST PARTI ! <br />TU N'AS PLUS QU'À ATTENDRE !</p>
               </div>
           </div>

   
          </div>
          
         
       </div>
     </section>
       {% endblock %}
     <footer>
       <div class=\"container-fluid footer-bas\" >
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-12\" style=\"text-align: center;\">
               <p class=\"suivnous\">SUIVEZ NOUS !</p>
              </div>
              <div class=\"col-12\" style=\"text-align: center;\">
                <img src=\"{{asset('assets/images/facebook.png')}}\" alt=\"facebook\" class=\"facebook\" />
           <img src=\"{{asset('assets/images/snapchat.png')}}\" alt=\"snapchat\" class=\"snap\" />
            <img src=\"{{asset('assets/images/instagram.png')}}\" alt=\"insta\" class=\"insta\" />
              </div>
          </div>
          <div class=\"row  justify-content-around\" >
            <div class=\"col-4   textfoot\">
             INFORMATION
               <p class=\"infotext\" >
               GOOD MORNING <br />6 rue de Gaulle <br />78140 Velizy <br />
              05 50 00 97 06
              </p>
            </div>
            <div class=\"col-4 textfoot \" >
            ACCÈS RAPIDE     <p class=\"infotext\">
            SE CONNECTER <br />
            TARIFS <br />
            ACTU <br />
             CONTACT
             </p>
            </div>
          </div>
          <div class=\"row justify-content-center\" style=\"font-size:6px; font-family:exo2; color:white ; margin-top:-15px;\" >
            goodmornig@2021
          </div>
          
        </div>
       </div>
     </footer>
    <script
      src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
      integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"
      integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js\"
      integrity=\"sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s\"
      crossorigin=\"anonymous\"
    ></script>
    <script src=\"{{asset('assets/js/bootstrap.bundle.js')}}\"></script>
  </body>
</html>
", "base.html.twig", "/Applications/MAMP/fil_rouge_good_morning/templates/base.html.twig");
    }
}
