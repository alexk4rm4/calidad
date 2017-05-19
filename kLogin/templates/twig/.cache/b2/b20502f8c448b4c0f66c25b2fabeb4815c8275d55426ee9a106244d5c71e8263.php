<?php

/* error/error.html */
class __TwigTemplate_47cb3c27ebd2a0e94284441498edc2da8741f88117bed9b0f8d1fa1c772fa2e4 extends Twig_Template
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
        $this->loadTemplate("overall/header", "error/error.html", 1)->display($context);
        // line 2
        echo "  <body>
    <div class=\"container\">
      <div class=\"presentacion center\">
        <div class=\"row\">
          <div class=\"col-xs-12\">
            <h1>404 ERROR</h1>
            Controlador <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["route"] ?? null), "controller", array()), array("Controller" => "")), "html", null, true);
        echo "</b> no encontrado.
          </div>
        </div>
      </div>
    </div>
    ";
        // line 13
        $this->loadTemplate("overall/footer", "error/error.html", 13)->display($context);
        // line 14
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "error/error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  37 => 13,  29 => 8,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error/error.html", "C:\\xampp\\htdocs\\kLogin\\templates\\twig\\error\\error.html");
    }
}
