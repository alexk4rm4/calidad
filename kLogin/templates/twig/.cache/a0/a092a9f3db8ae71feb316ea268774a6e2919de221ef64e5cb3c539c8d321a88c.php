<?php

/* overall/header.html */
class __TwigTemplate_440fdcbdf9138cd317fb961c0d63bb21d3a5b850f2a17766b9ca8808ef4c4a5b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <base href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "\" />
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"application-name\" content=\"kLogin\" />
    <meta name=\"author\" content=\"kLogin\" />
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'><link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/css/framework.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/css/jquery.simplecolorpicker.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/css/jquery.simplecolorpicker-regularfont.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/css/jquery.simplecolorpicker-glyphicons.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/css/jquery.simplecolorpicker-fontawesome.css\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/views/app/images/apple-touch-icon.png\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "views/app/views/favicon.ico\" />

    <title>";
        // line 18
        echo twig_escape_filter($this->env, twig_constant("APP"), "html", null, true);
        echo "</title>
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
";
    }

    public function getTemplateName()
    {
        return "overall/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall/header.html", "C:\\xampp\\htdocs\\kLogin\\templates\\twig\\overall\\header.html");
    }
}
