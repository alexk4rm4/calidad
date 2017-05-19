<?php

/* home/home.html */
class __TwigTemplate_cfe0b44d1194f442aeed98fa091e3fb8790c69926943edf20a2f4b929977ff6c extends Twig_Template
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
            echo "        <div id=\"login\">
          <form role=\"form\" class=\"form-signin\" enctype=\"application/x-www-form-urlencoded\" id=\"login_form\">
            <h2 class=\"form-signin-heading\">Autentificación</h2>
            <div class=\"form-group\">
               <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\" id=\"user\" name=\"user\" required=\"\"/>
               <i class=\"fa fa-user\"></i>
            </div>
            <div class=\"form-group\">
               <input type=\"password\" class=\"form-control\" placeholder=\"Contraseña\" name=\"pass\" required=\"\"/>
               <i class=\"fa fa-lock\"></i>
            </div>
            <div id=\"ajax_login\"></div>
              <a href=\"#\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#lost_pass\">Olvidaste tu contraseña?</a></br>
              <a id=\"cuenta\" href=\"#\">No tengo cuenta</a>
            <button type=\"button\" class=\"btn btn-lg btn-primary btn-block\" id=\"loginStep1\">Entrar</button>
          </form>
        </div>
        ";
            // line 24
            echo "        <div id=\"auth1\">
              <div class=\"row\">
                <form role=\"form\" class=\"form-auth\" enctype=\"application/x-www-form-urlencoded\" id=\"auth_form1\">
                  <h2 class=\"form-signin-heading\">Autentificación</h2>
                  <p>En esta sección tiene que seleccionar las características con la que registró su objeto en el sistema.</p>
                  <input type=\"hidden\" name=\"userAuth1\" id=\"userAuth1\">
                  <div class=\"col-sm-6\">
                    <div class=\"form-group \">
                      <label>Puertas</label>
                      <select name=\"npuertaAuth1\" id=\"npuertaAuth1\" class=\"form-control\">
                        <option>Seleccione</option>
                        <option value=\"1\">Dos puertas</option>
                        <option value=\"2\">Cuatro puertas</option>
                      </select>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-sm-3\">
                        <label>Ventanas</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"ventanasAuth1\" id=\"ventanasAuth1\">
                          ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 46
                echo "                            <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                        </select>
                      </div>
                      <div class=\"col-sm-2\">
                        <label>Color</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"colorobjetoAuth1\" id=\"colorobjetoAuth1\">
                          ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 56
                echo "                            <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                        </select>
                      </div>
                      <div class=\"col-sm-3\">
                        <label>Ruedas</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"ruedasAuth1\" id=\"ruedasAuth1\">
                          ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 66
                echo "                            <option value=\"#";
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
            echo "                        </select>
                      </div>
                    </div></br>
                    <div id=\"ajax_login21\"></div>
                    <button type=\"button\"  class=\"btn btn-sm btn-primary\" id=\"authbtn1\">Auntenticar</button>
                  </div>
              </form> 
                  <div class=\"col-sm-6\">
                    <div id=\"objetoAuth1\"></div>
                  </div>
              </div>
        </div>
        ";
            // line 81
            echo "        <div id=\"auth2\">
              <div class=\"row\">
                <form role=\"form\" class=\"form-auth\" enctype=\"application/x-www-form-urlencoded\" id=\"auth_form2\">
                  <h2 class=\"form-signin-heading\">Autentificación</h2>
                  <p>En esta sección tiene que seleccionar las características con la que registró su objeto en el sistema.</p>
                  <input type=\"hidden\" name=\"userAuth2\" id=\"userAuth2\">
                  <div class=\"col-sm-6\">
                    <div class=\"form-group \">
                      <label>Puertas</label>
                      <select name=\"npuertaAuth2\" id=\"npuertaAuth2\" class=\"form-control\">
                        <option value=\"2\">Dos pisos</option>
                        <option value=\"3\">Tres pisos</option>
                        <option value=\"4\">Cuatro pisos</option>
                        <option value=\"5\">Cinco pisos</option>
                      </select>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-sm-3\">
                        <label>Ventanas</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"ventanasAuth2\" id=\"ventanasAuth2\">
                          ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 104
                echo "                            <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                        </select>
                      </div>
                      <div class=\"col-sm-2\">
                        <label>Color</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"colorobjetoAuth2\" id=\"colorobjetoAuth2\">
                          ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 114
                echo "                            <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                        </select>
                      </div>
                      <div class=\"col-sm-3\">
                        <label>Puerta</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"ruedasAuth2\" id=\"ruedasAuth2\">
                          ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 124
                echo "                            <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                        </select>
                      </div>
                    </div></br>
                    <div id=\"ajax_login22\"></div>
                    <button type=\"button\"  class=\"btn btn-sm btn-primary\" id=\"authbtn2\">Auntenticar</button>
                  </div>
              </form> 
                  <div class=\"col-sm-6\">
                    <div id=\"objetoAuth2\"></div>
                  </div>
              </div>
        </div>
        ";
            // line 139
            echo "        <div id=\"registro\">
          <div class=\"row\">
            <form role=\"form\" class=\"form-auth\" enctype=\"application/x-www-form-urlencoded\" id=\"register_form\">
              <h2 class=\"form-signin-heading\">Registro</h2>
              <p>En esta sección debes ingresar tu información básica como usuario y correo eléctronico que no puede repetirse.</p>
              <div class=\"alert hide\" id=\"ajax_register\"></div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label>Usuario:</label>
                    <input type=\"text\" name=\"user\" class=\"form-control\" required=\"\" />
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label>Email:</label>
                    <input type=\"email\" name=\"email\" class=\"form-control\" required=\"\" />
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label>Contraseña:</label>
                    <input type=\"password\" name=\"pass\" class=\"form-control\" required=\"\" />
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label>Teléfono:</label>
                    <input type=\"tel\" name=\"telefono\" class=\"form-control numeric\" required=\"\" />
                  </div>
                </div>
            <button type=\"button\" id=\"register\" class=\"btn btn-sm btn-primary\">Siguiente</button>
          </form>
        </div>
      </div>
        ";
            // line 174
            echo "        <div id=\"registro2\">
          <form role=\"form\" class=\"form-auth\" enctype=\"application/x-www-form-urlencoded\" id=\"regAuth\">
              <h2 class=\"form-signin-heading\">Autentificación</h2>
              <p>En esta sección puedes seleccionar un objeto y darles características unicas como color entre otras que necesitar en un futuro para poder ingresar al sistema.</p>
              <div class=\"alert hide\" id=\"ajax_register2\"></div>
              <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <div class=\"form-group \">
                      <label>Objeto</label>
                      <select id=\"regObj\" name=\"regObj\" class=\"form-control\">
                        <option value=\"1\" selected=\"\">Auto</option>
                        <option value=\"2\">Casa</option>
                      </select>
                    </div>
                    <div id=\"auto\">
                      <div class=\"form-group \">
                        <label>Puertas</label>
                        <select name=\"regVar11\" id=\"regVar11\" class=\"form-control\">
                          <option value=\"1\">Dos puertas</option>
                          <option value=\"2\">Cuatro puertas</option>
                        </select>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-sm-3\">
                          <label>Ventanas</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar21\" id=\"regVar21\">
                            ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 203
                echo "                              <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                          </select>
                        </div>
                        <div class=\"col-sm-2\">
                          <label>Color</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar31\" id=\"regVar31\">
                            ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 213
                echo "                              <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                          </select>
                        </div>
                        <div class=\"col-sm-3\">
                          <label>Puerta</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar41\" id=\"regVar41\">
                            ";
            // line 222
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 223
                echo "                              <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                          </select>
                        </div>
                      </div></br>
                      <button type=\"button\"  class=\"btn btn-sm btn-primary\" id=\"regbtn1\">Guardar</button>
                    </div>

                    <div id=\"casa\">
                      <div class=\"form-group \">
                        <label>Pisos</label>
                        <select name=\"regVar12\" id=\"regVar12\" class=\"form-control\">
                          <option>Seleccione</option>
                          <option value=\"2\">Dos pisos</option>
                          <option value=\"3\">Tres pisos</option>
                          <option value=\"4\">Cuatro pisos</option>
                          <option value=\"5\">Cinco pisos</option>
                        </select>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-sm-3\">
                          <label>Ventanas</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar22\" id=\"regVar22\">
                            ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 249
                echo "                              <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "                          </select>
                        </div>
                        <div class=\"col-sm-2\">
                          <label>Color</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar32\" id=\"regVar32\">
                            ";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 259
                echo "                              <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "                          </select>
                        </div>
                        <div class=\"col-sm-3\">
                          <label>Puerta</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar42\" id=\"regVar42\">
                            ";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 269
                echo "                              <option value=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "codcolor", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "nombrecolor", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "                          </select>
                        </div>
                      </div></br>
                      <button type=\"button\"  class=\"btn btn-sm btn-primary\" id=\"regbtn2\">Guardar</button>
                    </div>
                  </div>
                  <div class=\"col-sm-6\">
                    <div id=\"objetoReg\"></div>
                  </div>
              </div>
          </form>
        </div>
      ";
            // line 284
            echo "      ";
        } else {
            // line 285
            echo "        Bienvenido usuario de <b>id: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), twig_constant("SESS_APP_ID"), array(), "array"), "html", null, true);
            echo "</b>, <a href=\"logout/\">Salir</a>
      ";
        }
        // line 287
        echo "    ";
        $this->loadTemplate("overall/footer", "home/home.html", 287)->display($context);
        // line 288
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
        return array (  492 => 288,  489 => 287,  483 => 285,  480 => 284,  466 => 271,  455 => 269,  451 => 268,  442 => 261,  431 => 259,  427 => 258,  418 => 251,  407 => 249,  403 => 248,  378 => 225,  367 => 223,  363 => 222,  354 => 215,  343 => 213,  339 => 212,  330 => 205,  319 => 203,  315 => 202,  285 => 174,  249 => 139,  235 => 126,  224 => 124,  220 => 123,  211 => 116,  200 => 114,  196 => 113,  187 => 106,  176 => 104,  172 => 103,  148 => 81,  134 => 68,  123 => 66,  119 => 65,  110 => 58,  99 => 56,  95 => 55,  86 => 48,  75 => 46,  71 => 45,  48 => 24,  29 => 6,  27 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'overall/header' %}
  <body>
      {# Si la constante de sesión no está definida #}
      {% if session[constant('SESS_APP_ID')] is not defined %}
      {# Login de usuario y contraseña #}
        <div id=\"login\">
          <form role=\"form\" class=\"form-signin\" enctype=\"application/x-www-form-urlencoded\" id=\"login_form\">
            <h2 class=\"form-signin-heading\">Autentificación</h2>
            <div class=\"form-group\">
               <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\" id=\"user\" name=\"user\" required=\"\"/>
               <i class=\"fa fa-user\"></i>
            </div>
            <div class=\"form-group\">
               <input type=\"password\" class=\"form-control\" placeholder=\"Contraseña\" name=\"pass\" required=\"\"/>
               <i class=\"fa fa-lock\"></i>
            </div>
            <div id=\"ajax_login\"></div>
              <a href=\"#\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#lost_pass\">Olvidaste tu contraseña?</a></br>
              <a id=\"cuenta\" href=\"#\">No tengo cuenta</a>
            <button type=\"button\" class=\"btn btn-lg btn-primary btn-block\" id=\"loginStep1\">Entrar</button>
          </form>
        </div>
        {# Autentifiacion auto #}
        <div id=\"auth1\">
              <div class=\"row\">
                <form role=\"form\" class=\"form-auth\" enctype=\"application/x-www-form-urlencoded\" id=\"auth_form1\">
                  <h2 class=\"form-signin-heading\">Autentificación</h2>
                  <p>En esta sección tiene que seleccionar las características con la que registró su objeto en el sistema.</p>
                  <input type=\"hidden\" name=\"userAuth1\" id=\"userAuth1\">
                  <div class=\"col-sm-6\">
                    <div class=\"form-group \">
                      <label>Puertas</label>
                      <select name=\"npuertaAuth1\" id=\"npuertaAuth1\" class=\"form-control\">
                        <option>Seleccione</option>
                        <option value=\"1\">Dos puertas</option>
                        <option value=\"2\">Cuatro puertas</option>
                      </select>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-sm-3\">
                        <label>Ventanas</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"ventanasAuth1\" id=\"ventanasAuth1\">
                          {% for e in colores %}
                            <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                          {% endfor %}
                        </select>
                      </div>
                      <div class=\"col-sm-2\">
                        <label>Color</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"colorobjetoAuth1\" id=\"colorobjetoAuth1\">
                          {% for e in colores %}
                            <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                          {% endfor %}
                        </select>
                      </div>
                      <div class=\"col-sm-3\">
                        <label>Ruedas</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"ruedasAuth1\" id=\"ruedasAuth1\">
                          {% for e in colores %}
                            <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                          {% endfor %}
                        </select>
                      </div>
                    </div></br>
                    <div id=\"ajax_login21\"></div>
                    <button type=\"button\"  class=\"btn btn-sm btn-primary\" id=\"authbtn1\">Auntenticar</button>
                  </div>
              </form> 
                  <div class=\"col-sm-6\">
                    <div id=\"objetoAuth1\"></div>
                  </div>
              </div>
        </div>
        {# Autentifiacion casa #}
        <div id=\"auth2\">
              <div class=\"row\">
                <form role=\"form\" class=\"form-auth\" enctype=\"application/x-www-form-urlencoded\" id=\"auth_form2\">
                  <h2 class=\"form-signin-heading\">Autentificación</h2>
                  <p>En esta sección tiene que seleccionar las características con la que registró su objeto en el sistema.</p>
                  <input type=\"hidden\" name=\"userAuth2\" id=\"userAuth2\">
                  <div class=\"col-sm-6\">
                    <div class=\"form-group \">
                      <label>Puertas</label>
                      <select name=\"npuertaAuth2\" id=\"npuertaAuth2\" class=\"form-control\">
                        <option value=\"2\">Dos pisos</option>
                        <option value=\"3\">Tres pisos</option>
                        <option value=\"4\">Cuatro pisos</option>
                        <option value=\"5\">Cinco pisos</option>
                      </select>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-sm-3\">
                        <label>Ventanas</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"ventanasAuth2\" id=\"ventanasAuth2\">
                          {% for e in colores %}
                            <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                          {% endfor %}
                        </select>
                      </div>
                      <div class=\"col-sm-2\">
                        <label>Color</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"colorobjetoAuth2\" id=\"colorobjetoAuth2\">
                          {% for e in colores %}
                            <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                          {% endfor %}
                        </select>
                      </div>
                      <div class=\"col-sm-3\">
                        <label>Puerta</label>
                      </div>
                      <div class=\"col-sm-1\">
                        <select name=\"ruedasAuth2\" id=\"ruedasAuth2\">
                          {% for e in colores %}
                            <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                          {% endfor %}
                        </select>
                      </div>
                    </div></br>
                    <div id=\"ajax_login22\"></div>
                    <button type=\"button\"  class=\"btn btn-sm btn-primary\" id=\"authbtn2\">Auntenticar</button>
                  </div>
              </form> 
                  <div class=\"col-sm-6\">
                    <div id=\"objetoAuth2\"></div>
                  </div>
              </div>
        </div>
        {# Registro basico #}
        <div id=\"registro\">
          <div class=\"row\">
            <form role=\"form\" class=\"form-auth\" enctype=\"application/x-www-form-urlencoded\" id=\"register_form\">
              <h2 class=\"form-signin-heading\">Registro</h2>
              <p>En esta sección debes ingresar tu información básica como usuario y correo eléctronico que no puede repetirse.</p>
              <div class=\"alert hide\" id=\"ajax_register\"></div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label>Usuario:</label>
                    <input type=\"text\" name=\"user\" class=\"form-control\" required=\"\" />
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label>Email:</label>
                    <input type=\"email\" name=\"email\" class=\"form-control\" required=\"\" />
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label>Contraseña:</label>
                    <input type=\"password\" name=\"pass\" class=\"form-control\" required=\"\" />
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label>Teléfono:</label>
                    <input type=\"tel\" name=\"telefono\" class=\"form-control numeric\" required=\"\" />
                  </div>
                </div>
            <button type=\"button\" id=\"register\" class=\"btn btn-sm btn-primary\">Siguiente</button>
          </form>
        </div>
      </div>
        {# Registro Autentifiacion #}
        <div id=\"registro2\">
          <form role=\"form\" class=\"form-auth\" enctype=\"application/x-www-form-urlencoded\" id=\"regAuth\">
              <h2 class=\"form-signin-heading\">Autentificación</h2>
              <p>En esta sección puedes seleccionar un objeto y darles características unicas como color entre otras que necesitar en un futuro para poder ingresar al sistema.</p>
              <div class=\"alert hide\" id=\"ajax_register2\"></div>
              <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <div class=\"form-group \">
                      <label>Objeto</label>
                      <select id=\"regObj\" name=\"regObj\" class=\"form-control\">
                        <option value=\"1\" selected=\"\">Auto</option>
                        <option value=\"2\">Casa</option>
                      </select>
                    </div>
                    <div id=\"auto\">
                      <div class=\"form-group \">
                        <label>Puertas</label>
                        <select name=\"regVar11\" id=\"regVar11\" class=\"form-control\">
                          <option value=\"1\">Dos puertas</option>
                          <option value=\"2\">Cuatro puertas</option>
                        </select>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-sm-3\">
                          <label>Ventanas</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar21\" id=\"regVar21\">
                            {% for e in colores %}
                              <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                            {% endfor %}
                          </select>
                        </div>
                        <div class=\"col-sm-2\">
                          <label>Color</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar31\" id=\"regVar31\">
                            {% for e in colores %}
                              <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                            {% endfor %}
                          </select>
                        </div>
                        <div class=\"col-sm-3\">
                          <label>Puerta</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar41\" id=\"regVar41\">
                            {% for e in colores %}
                              <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div></br>
                      <button type=\"button\"  class=\"btn btn-sm btn-primary\" id=\"regbtn1\">Guardar</button>
                    </div>

                    <div id=\"casa\">
                      <div class=\"form-group \">
                        <label>Pisos</label>
                        <select name=\"regVar12\" id=\"regVar12\" class=\"form-control\">
                          <option>Seleccione</option>
                          <option value=\"2\">Dos pisos</option>
                          <option value=\"3\">Tres pisos</option>
                          <option value=\"4\">Cuatro pisos</option>
                          <option value=\"5\">Cinco pisos</option>
                        </select>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-sm-3\">
                          <label>Ventanas</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar22\" id=\"regVar22\">
                            {% for e in colores %}
                              <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                            {% endfor %}
                          </select>
                        </div>
                        <div class=\"col-sm-2\">
                          <label>Color</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar32\" id=\"regVar32\">
                            {% for e in colores %}
                              <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                            {% endfor %}
                          </select>
                        </div>
                        <div class=\"col-sm-3\">
                          <label>Puerta</label>
                        </div>
                        <div class=\"col-sm-1\">
                          <select name=\"regVar42\" id=\"regVar42\">
                            {% for e in colores %}
                              <option value=\"#{{ e.codcolor }}\">{{ e.nombrecolor }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div></br>
                      <button type=\"button\"  class=\"btn btn-sm btn-primary\" id=\"regbtn2\">Guardar</button>
                    </div>
                  </div>
                  <div class=\"col-sm-6\">
                    <div id=\"objetoReg\"></div>
                  </div>
              </div>
          </form>
        </div>
      {# Pero si está definida #}
      {% else %}
        Bienvenido usuario de <b>id: {{ session[constant('SESS_APP_ID')] }}</b>, <a href=\"logout/\">Salir</a>
      {% endif %}
    {% include 'overall/footer' %}
  </body>
</html>
", "home/home.html", "C:\\xampp\\htdocs\\kLogin\\templates\\twig\\home\\home.html");
    }
}
