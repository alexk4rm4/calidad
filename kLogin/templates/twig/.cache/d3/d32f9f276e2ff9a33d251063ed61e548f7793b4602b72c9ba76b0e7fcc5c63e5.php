<?php

/* overall/footer.html */
class __TwigTemplate_a324f6439b223d6ae40d11833898e4987d3ebfede1f5270bcea0c7067b457eb8 extends Twig_Template
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
        if (twig_constant("DEBUG")) {
            // line 2
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
            echo "views/app/js/jdev.js\"></script>
";
        } else {
            // line 4
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
            echo "views/app/js/jquery.js\"></script>
";
        }
        // line 6
        echo "
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/js/jquery.numeric.js\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/js/jquery.js\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/js/control.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/js/jquery.simplecolorpicker.js\" type=\"text/javascript\"></script>

";
        // line 13
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), twig_constant("SESS_APP_ID"), array(), "array", true, true)) {
            // line 14
            echo "  ";
            // line 15
            echo "  ";
            $this->loadTemplate("overall/login", "overall/footer.html", 15)->display($context);
            // line 16
            echo "  ";
            $this->loadTemplate("overall/register", "overall/footer.html", 16)->display($context);
            // line 17
            echo "  ";
            $this->loadTemplate("overall/lostpass", "overall/footer.html", 17)->display($context);
            // line 18
            echo "
  ";
            // line 20
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
            echo "views/app/js/login.js\" type=\"text/javascript\"></script>
  <script src=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
            echo "views/app/js/register.js\" type=\"text/javascript\"></script>
  <script src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
            echo "views/app/js/lostpass.js\" type=\"text/javascript\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "overall/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  78 => 21,  73 => 20,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  57 => 13,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  33 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if constant('DEBUG') %}
  <script src=\"{{ constant('URL') }}views/app/js/jdev.js\"></script>
{% else %}
  <script src=\"{{ constant('URL') }}views/app/js/jquery.js\"></script>
{% endif %}

<script src=\"{{ constant('URL') }}views/app/js/jquery.numeric.js\"></script>
<script src=\"{{ constant('URL') }}views/app/js/jquery.js\"></script>
<script src=\"{{ constant('URL') }}views/app/js/bootstrap.min.js\"></script>
<script src=\"{{ constant('URL') }}views/app/js/control.js\" type=\"text/javascript\"></script>
<script src=\"{{ constant('URL') }}views/app/js/jquery.simplecolorpicker.js\" type=\"text/javascript\"></script>

{% if session[constant('SESS_APP_ID')] is not defined %}
  {# Incluimos las plantillas de login, registro y recuperar contraseña #}
  {% include 'overall/login' %}
  {% include 'overall/register' %}
  {% include 'overall/lostpass' %}

  {# Incluimos el javascript necesario #}
  <script src=\"{{ constant('URL') }}views/app/js/login.js\" type=\"text/javascript\"></script>
  <script src=\"{{ constant('URL') }}views/app/js/register.js\" type=\"text/javascript\"></script>
  <script src=\"{{ constant('URL') }}views/app/js/lostpass.js\" type=\"text/javascript\"></script>
{% endif %}
", "overall/footer.html", "C:\\xampp\\htdocs\\kLogin\\templates\\twig\\overall\\footer.html");
    }
}
