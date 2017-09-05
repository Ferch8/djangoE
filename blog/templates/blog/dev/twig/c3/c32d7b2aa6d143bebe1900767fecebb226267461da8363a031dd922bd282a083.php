<?php

/* estadosciviles/index.html.twig */
class __TwigTemplate_fc753c8b0931f808ec9ca17395458abb52a21f9653f6a1807295ac24d60408a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "estadosciviles/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c99e490331cc7cd202b5a93b74945f6de737b816e66fbc95bc3727b51968e622 = $this->env->getExtension("native_profiler");
        $__internal_c99e490331cc7cd202b5a93b74945f6de737b816e66fbc95bc3727b51968e622->enter($__internal_c99e490331cc7cd202b5a93b74945f6de737b816e66fbc95bc3727b51968e622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estadosciviles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c99e490331cc7cd202b5a93b74945f6de737b816e66fbc95bc3727b51968e622->leave($__internal_c99e490331cc7cd202b5a93b74945f6de737b816e66fbc95bc3727b51968e622_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc0bf1408ecb6d161bd71e9cad6f7f9e9d5c28c5d8433c47a1f8b7619b9d699b = $this->env->getExtension("native_profiler");
        $__internal_fc0bf1408ecb6d161bd71e9cad6f7f9e9d5c28c5d8433c47a1f8b7619b9d699b->enter($__internal_fc0bf1408ecb6d161bd71e9cad6f7f9e9d5c28c5d8433c47a1f8b7619b9d699b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <h1>Listado de Estados civiles </h1>

    <table>
      <thead>
          <tr>
              <th>Id estado civil</th>
              <th>Estado civil</th>
              <th>Estado</th>
              <th>opciones</th>
          </tr>
      </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estadosciviles"]) ? $context["estadosciviles"] : $this->getContext($context, "estadosciviles")));
        foreach ($context['_seq'] as $context["_key"] => $context["estadoscivile"]) {
            // line 17
            echo "        <tr>
            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadosciviles_show", array("id" => $this->getAttribute($context["estadoscivile"], "idEstadocivil", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estadoscivile"], "idEstadocivil", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["estadoscivile"], "estadocivil", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            if ($this->getAttribute($context["estadoscivile"], "estadoEstadocivil", array())) {
                echo "Activo";
            } else {
                echo "No";
            }
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadosciviles_show", array("id" => $this->getAttribute($context["estadoscivile"], "idEstadocivil", array()))), "html", null, true);
            echo "\">Mostrar</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadosciviles_edit", array("id" => $this->getAttribute($context["estadoscivile"], "idEstadocivil", array()))), "html", null, true);
            echo "\">editar</a>
                    </li>
                </ul>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estadoscivile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("estadosciviles_new");
        echo "\">Crear Nuevo estado civil</a>
        </li>
    </ul>
";
        
        $__internal_fc0bf1408ecb6d161bd71e9cad6f7f9e9d5c28c5d8433c47a1f8b7619b9d699b->leave($__internal_fc0bf1408ecb6d161bd71e9cad6f7f9e9d5c28c5d8433c47a1f8b7619b9d699b_prof);

    }

    public function getTemplateName()
    {
        return "estadosciviles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  100 => 33,  88 => 27,  82 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*       <h1>Listado de Estados civiles </h1>*/
/* */
/*     <table>*/
/*       <thead>*/
/*           <tr>*/
/*               <th>Id estado civil</th>*/
/*               <th>Estado civil</th>*/
/*               <th>Estado</th>*/
/*               <th>opciones</th>*/
/*           </tr>*/
/*       </thead>*/
/*         <tbody>*/
/*         {% for estadoscivile in estadosciviles %}*/
/*         <tr>*/
/*             <td><a href="{{ path('estadosciviles_show', { 'id': estadoscivile.idEstadocivil }) }}">{{ estadoscivile.idEstadocivil }}</a></td>*/
/*             <td>{{ estadoscivile.estadocivil }}</td>*/
/*             <td>{% if estadoscivile.estadoEstadocivil %}Activo{% else %}No{% endif %}</td>*/
/*             <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('estadosciviles_show', { 'id': estadoscivile.idEstadocivil }) }}">Mostrar</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('estadosciviles_edit', { 'id': estadoscivile.idEstadocivil }) }}">editar</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estadosciviles_new') }}">Crear Nuevo estado civil</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
