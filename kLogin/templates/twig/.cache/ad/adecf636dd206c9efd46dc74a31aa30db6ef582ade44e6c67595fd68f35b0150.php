<?php

/* home/home.html */
class __TwigTemplate_7c13a501815c4a73269fd6ffbd618071b5e5d4130863b0ea384d21aab249f15a extends Twig_Template
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
        $this->loadTemplate("overall/header", "home/home.html", 1)->display($context);
        // line 2
        echo "  <body>
      ";
        // line 4
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), twig_constant("SESS_APP_ID"), array(), "array", true, true)) {
            // line 5
            echo "      ";
            // line 6
            echo "<div class=\"login-wrap\">
  <div class=\"login-html\">
    <input id=\"tab-1\" type=\"radio\" name=\"tab\" class=\"sign-in\" checked><label for=\"tab-1\" class=\"tab\">Ingreso</label>
    <input id=\"tab-2\" type=\"radio\" name=\"tab\" class=\"sign-up\"><label for=\"tab-2\" class=\"tab\">Registro</label>
    <div class=\"login-form\">
      <div class=\"sign-in-htm\">      
        <div id=\"login\">
          <form role=\"form\" enctype=\"application/x-www-form-urlencoded\" id=\"login_form\">
            <div class=\"group\">
              <label for=\"user\" class=\"label\">Usuario</label>
              <input id=\"user\" name=\"user\" type=\"text\" class=\"input\" required=\"\"/>
            </div>
            <div class=\"group\">
              <label for=\"pass\" class=\"label\">Password</label>
              <input id=\"pass\" name=\"pass\" type=\"password\" class=\"input\" data-type=\"password\" required=\"\"/>
            </div>
            <div id=\"ajax_login\"></div>
            <div class=\"group\">
              <button type=\"button\" class=\"button\" id=\"loginStep1\">Entrar</button>
            </div>
            <div class=\"hr\"></div>
            <div class=\"foot-lnk\">
              <a href=\"#\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#lost_pass\">Olvidaste tu contraseña?</a>
            </div>
          </form>
        </div>
        ";
            // line 33
            echo "        <div id=\"auth1\">
          <form role=\"form\" enctype=\"application/x-www-form-urlencoded\" id=\"auth_form1\">
            <input type=\"hidden\" name=\"userAuth1\" id=\"userAuth1\">
            <div class=\"group\">
              <label for=\"npuertaAuth1\" class=\"label\">Puertas</label>
              <select name=\"npuertaAuth1\" id=\"npuertaAuth1\" class=\"input\">
                <option>Seleccione</option>
                <option value=\"1\">Dos puertas</option>
                <option value=\"2\">Cuatro puertas</option>
              </select>
            </div>
            <table>
              <tr>
                <td width=\"30%\"><label for=\"ventanasAuth1\">Ventanas</label></td>
                <td width=\"10%\">
                  <select name=\"ventanasAuth1\" id=\"ventanasAuth1\">
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 50
                echo "                      <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                  </select>
                </td>
                <td width=\"22%\"><label for=\"colorobjetoAuth1\">Color</label></td>
                <td width=\"10%\">
                  <select name=\"colorobjetoAuth1\" id=\"colorobjetoAuth1\">
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 58
                echo "                      <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                  </select>
                </td>
                <td width=\"25%\"><label for=\"ruedasAuth1\">Ruedas</label></td>
                <td width=\"10%\">
                  <select name=\"ruedasAuth1\" id=\"ruedasAuth1\">
                    ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 66
                echo "                      <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                  </select>
                </td>
              </tr>
            </table></br>
            <div class=\"group\">
              <button type=\"button\" class=\"button\" id=\"authbtn1\">Auntenticar</button>
            </div>
          </form>
          <div class=\"hr\"></div>
          <div id=\"ajax_login21\"></div>
          <div id=\"objetoAuth1\" style=\"text-align: center;\"></div> 
        </div>
        ";
            // line 81
            echo "        <div id=\"auth2\">
          <form role=\"form\" enctype=\"application/x-www-form-urlencoded\" id=\"auth_form2\">
            <input type=\"hidden\" name=\"userAuth1\" id=\"userAuth2\">
            <div class=\"group\">
              <label for=\"npuertaAuth2\" class=\"label\">Pisos</label>
              <select name=\"npuertaAuth2\" id=\"npuertaAuth2\" class=\"input\">
                <option>Seleccione</option>
                <option value=\"2\">Dos pisos</option>
                <option value=\"3\">Tres pisos</option>
                <option value=\"4\">Cuatro pisos</option>
                <option value=\"5\">Cinco pisos</option>
              </select>
            </div>
            <table>
              <tr>
                <td width=\"30%\"><label for=\"ventanasAuth2\">Ventanas</label></td>
                <td width=\"10%\">
                  <select name=\"ventanasAuth2\" id=\"ventanasAuth2\">
                    ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 100
                echo "                      <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                  </select>
                </td>
                <td width=\"22%\"><label for=\"colorobjetoAuth2\">Color</label></td>
                <td width=\"10%\">
                  <select name=\"colorobjetoAuth2\" id=\"colorobjetoAuth2\">
                    ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 108
                echo "                      <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                  </select>
                </td>
                <td width=\"25%\"><label for=\"ruedasAuth2\">Puerta</label></td>
                <td width=\"10%\">
                  <select name=\"ruedasAuth2\" id=\"ruedasAuth2\">
                    ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 116
                echo "                      <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                  </select>
                </td>
              </tr>
            </table></br>
            <div class=\"group\">
              <button type=\"button\" class=\"button\" id=\"authbtn2\">Auntenticar</button>
            </div>
          </form>
          <div class=\"hr\"></div>
          <div id=\"ajax_login22\"></div></br>
          <div id=\"objetoAuth2\" style=\"text-align: center;\"></div>
        </div>
      </div>
        ";
            // line 132
            echo "      <div class=\"sign-up-htm\">
        <div id=\"registro\">
          <form role=\"form\" enctype=\"application/x-www-form-urlencoded\" id=\"register_form\">
            <div class=\"alert hide\" id=\"ajax_register\"></div>
            <div class=\"group\">
              <label for=\"nombre\" class=\"label\">Nombre</label>
              <input id=\"nombre\" name=\"nombre\" type=\"text\" class=\"input\" required=\"\"/>
            </div>
            <div class=\"group\">
              <label for=\"email\" class=\"label\">Correo Electrónico</label>
              <input id=\"email\" name=\"email\" type=\"email\" class=\"input\" required=\"\"/>
            </div>
            <div class=\"group\">
              <label for=\"user\" class=\"label\">Usuario</label>
              <input id=\"user\" name=\"user\" type=\"text\" class=\"input\" required=\"\"/>
            </div>
            <div class=\"group\">
              <label for=\"pass\" class=\"label\">Contraseña</label>
              <input id=\"pass\" name=\"pass\" type=\"password\" class=\"input\" data-type=\"password\" required=\"\"/>
            </div>
            <div class=\"group\">
              <button type=\"button\" class=\"button\" id=\"register\">Siguiente</button>
            </div>
            <div class=\"hr\"></div>
            <div class=\"foot-lnk\">
              <label for=\"tab-1\">Ya tienes cuenta?</a>
            </div>
          </form>
        </div>
        ";
            // line 162
            echo "        <div id=\"registro2\">
          <form role=\"form\" enctype=\"application/x-www-form-urlencoded\" id=\"regAuth\">
            <div class=\"group\">
              <label for=\"regObj\" class=\"label\">Objeto</label>
              <select id=\"regObj\" name=\"regObj\" class=\"input\">
                <option value=\"1\" selected=\"\">Auto</option>
                <option value=\"2\">Casa</option>
              </select>
            </div>
            <div id=\"auto\">
              <div class=\"group\">
              <label for=\"regVar11\" class=\"label\">Puertas</label>
              <select name=\"regVar11\" id=\"regVar11\" class=\"input\">
                <option>Seleccione</option>
                <option value=\"1\">Dos puertas</option>
                <option value=\"2\">Cuatro puertas</option>
              </select>
              </div>
              <table>
                <tr>
                  <td width=\"30%\"><label for=\"regVar21\">Ventanas</label></td>
                  <td width=\"10%\">
                    <select name=\"regVar21\" id=\"regVar21\">
                      ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 186
                echo "                        <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                    </select>
                  </td>
                  <td width=\"22%\"><label for=\"regVar31\">Color</label></td>
                  <td width=\"10%\">
                    <select name=\"regVar31\" id=\"regVar31\">
                      ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 194
                echo "                        <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "                    </select>
                  </td>
                  <td width=\"25%\"><label for=\"regVar41\">Ruedas</label></td>
                  <td width=\"10%\">
                    <select name=\"regVar41\" id=\"regVar41\">
                      ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 202
                echo "                        <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "                    </select>
                  </td>
                </tr>
              </table></br>
              <div class=\"group\">
                <button type=\"button\" class=\"button\" id=\"regbtn1\">Guardar</button>
              </div>
            </div>
            <div id=\"casa\">
              <div class=\"group\">
                <label for=\"regVar12\" class=\"label\">Pisos</label>
                <select name=\"regVar12\" id=\"regVar12\" class=\"input\">
                  <option>Seleccione</option>
                  <option value=\"2\">Dos pisos</option>
                  <option value=\"3\">Tres pisos</option>
                  <option value=\"4\">Cuatro pisos</option>
                  <option value=\"5\">Cinco pisos</option>
                </select>
              </div>
              <table>
                <tr>
                  <td width=\"30%\"><label for=\"regVar22\">Ventanas</label></td>
                  <td width=\"10%\">
                    <select name=\"regVar22\" id=\"regVar22\">
                      ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 229
                echo "                        <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "                    </select>
                  </td>
                  <td width=\"22%\"><label for=\"regVar32\">Color</label></td>
                  <td width=\"10%\">
                    <select name=\"regVar32\" id=\"regVar32\">
                      ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 237
                echo "                        <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "                    </select>
                  </td>
                  <td width=\"25%\"><label for=\"regVar42\">Puerta</label></td>
                  <td width=\"10%\">
                    <select name=\"regVar42\" id=\"regVar42\">
                      ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 245
                echo "                        <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                    </select>
                  </td>
                </tr>
              </table></br>
              <div class=\"group\">
                <button type=\"button\" class=\"button\" id=\"regbtn2\">Guardar</button>
              </div>
            </div>
            <div class=\"alert hide\" id=\"ajax_register2\"></div>
            <div class=\"hr\"></div>
            <div id=\"objetoReg\" style=\"text-align: center;\"></div>
          </form>  
        </div>
      </div>
    </div>
  </div>
</div>
      ";
            // line 265
            echo "      ";
        } else {
            // line 266
            echo "        Bienvenido usuario de <b>id: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), twig_constant("SESS_APP_ID"), array(), "array"), "html", null, true);
            echo "</b>, <a href=\"logout/\">Salir</a>
      ";
        }
        // line 268
        echo "    ";
        $this->loadTemplate("overall/footer", "home/home.html", 268)->display($context);
        // line 269
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 269,  470 => 268,  464 => 266,  461 => 265,  442 => 247,  431 => 245,  427 => 244,  420 => 239,  409 => 237,  405 => 236,  398 => 231,  387 => 229,  383 => 228,  357 => 204,  346 => 202,  342 => 201,  335 => 196,  324 => 194,  320 => 193,  313 => 188,  302 => 186,  298 => 185,  273 => 162,  242 => 132,  227 => 118,  216 => 116,  212 => 115,  205 => 110,  194 => 108,  190 => 107,  183 => 102,  172 => 100,  168 => 99,  148 => 81,  134 => 68,  123 => 66,  119 => 65,  112 => 60,  101 => 58,  97 => 57,  90 => 52,  79 => 50,  75 => 49,  57 => 33,  29 => 6,  27 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/home.html", "C:\\xampp\\htdocs\\kLogin\\templates\\twig\\home\\home.html");
    }
}
