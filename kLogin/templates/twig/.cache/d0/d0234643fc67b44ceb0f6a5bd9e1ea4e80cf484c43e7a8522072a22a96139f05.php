<?php

/* lostpass/lostpass.html */
class __TwigTemplate_a2301d24483adeb82e41183268f11edf3101c7b0a5f0594c1ed8ff22e823dec7 extends Twig_Template
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
        $this->loadTemplate("overall/header", "lostpass/lostpass.html", 1)->display($context);
        // line 2
        echo "  <body>
    <div class=\"container\">
      <div class=\"presentacion center\">
        <div class=\"row\">
          <div class=\"col-xs-12\">
            <h1>Cambio de contraseña</h1>
          </div>
          <div class=\"col-xs-12 botones\">
            ";
        // line 10
        if ((false == ($context["pass"] ?? null))) {
            // line 11
            echo "              <div class=\"alert alert-danger\">¡Este enlace ha caducado!</div>
            ";
        } else {
            // line 13
            echo "              <div class=\"alert alert-success\">Tu nueva contraseña es <b>";
            echo twig_escape_filter($this->env, ($context["pass"] ?? null), "html", null, true);
            echo "</b> , puedes <a href=\"\" style=\"color: #023b32!important;\" data-toggle=\"modal\" data-target=\"#iniciar_sesion\">iniciar sesión</a></div>
            ";
        }
        // line 15
        echo "          </div>
        </div>
      </div>
    </div>
    ";
        // line 19
        $this->loadTemplate("overall/footer", "lostpass/lostpass.html", 19)->display($context);
        // line 20
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "lostpass/lostpass.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  49 => 19,  43 => 15,  37 => 13,  33 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'overall/header' %}
  <body>
    <div class=\"container\">
      <div class=\"presentacion center\">
        <div class=\"row\">
          <div class=\"col-xs-12\">
            <h1>Cambio de contraseña</h1>
          </div>
          <div class=\"col-xs-12 botones\">
            {% if false == pass %}
              <div class=\"alert alert-danger\">¡Este enlace ha caducado!</div>
            {% else %}
              <div class=\"alert alert-success\">Tu nueva contraseña es <b>{{ pass }}</b> , puedes <a href=\"\" style=\"color: #023b32!important;\" data-toggle=\"modal\" data-target=\"#iniciar_sesion\">iniciar sesión</a></div>
            {% endif %}
          </div>
        </div>
      </div>
    </div>
    {% include 'overall/footer' %}
  </body>
</html>
", "lostpass/lostpass.html", "C:\\xampp\\htdocs\\kLogin\\templates\\twig\\lostpass\\lostpass.html");
    }
}
