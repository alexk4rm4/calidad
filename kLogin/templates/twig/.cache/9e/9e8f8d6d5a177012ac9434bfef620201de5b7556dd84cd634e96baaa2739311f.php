<?php

/* overall/lostpass.html */
class __TwigTemplate_22ecca2b02470404c0d9b581847952abd1ced4ea89b9de1ffcb776847d4f9ef4 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"lost_pass\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog modal-sm\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Recuperar Contraseña</h4>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" enctype=\"application/x-www-form-urlencoded\" id=\"lostpass_form\">

          <div class=\"alert hide\" id=\"ajax_lostpass\"></div>

          <div class=\"form-group\">
            <label>Email:</label>
            <input type=\"email\" name=\"email\" class=\"form-control\" required=\"\" />
          </div>

        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"lostpass\" class=\"btn btn-sm btn-primary\">Recuperar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "overall/lostpass.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"lost_pass\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog modal-sm\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Recuperar Contraseña</h4>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" enctype=\"application/x-www-form-urlencoded\" id=\"lostpass_form\">

          <div class=\"alert hide\" id=\"ajax_lostpass\"></div>

          <div class=\"form-group\">
            <label>Email:</label>
            <input type=\"email\" name=\"email\" class=\"form-control\" required=\"\" />
          </div>

        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"lostpass\" class=\"btn btn-sm btn-primary\">Recuperar</button>
      </div>
    </div>
  </div>
</div>
", "overall/lostpass.html", "C:\\xampp\\htdocs\\kLogin\\templates\\twig\\overall\\lostpass.html");
    }
}
