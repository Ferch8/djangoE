<?php

/* ciudad/show.html.twig */
class __TwigTemplate_82fafc98f017a381aaad9a643b834f69ac83f2d00cbd04a8932df84da5d5dfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ciudad/show.html.twig", 1);
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
        $__internal_d0c92053351a51c14a168ee10bd69dff74a36c77bac60f4c5569ec16b8db7454 = $this->env->getExtension("native_profiler");
        $__internal_d0c92053351a51c14a168ee10bd69dff74a36c77bac60f4c5569ec16b8db7454->enter($__internal_d0c92053351a51c14a168ee10bd69dff74a36c77bac60f4c5569ec16b8db7454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ciudad/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0c92053351a51c14a168ee10bd69dff74a36c77bac60f4c5569ec16b8db7454->leave($__internal_d0c92053351a51c14a168ee10bd69dff74a36c77bac60f4c5569ec16b8db7454_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50c1010f0c0b2c1460e767619a5568d50ac40bc8cb9f0e0bce4b352e1d98a414 = $this->env->getExtension("native_profiler");
        $__internal_50c1010f0c0b2c1460e767619a5568d50ac40bc8cb9f0e0bce4b352e1d98a414->enter($__internal_50c1010f0c0b2c1460e767619a5568d50ac40bc8cb9f0e0bce4b352e1d98a414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ciudad</h1>

    <table>
      <tbody>
          <tr>
              <th>Id ciudad</th>
              <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "idCiudad", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Postal ciudad</th>
              <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "postalCiudad", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Ciudad</th>
              <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "ciudad", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Estado</th>
              <td>";
        // line 22
        if ($this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "estadoCiudad", array())) {
            echo "Activo";
        } else {
            echo "No";
        }
        echo "</td>
          </tr>
      </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ciudad_index");
        echo "\">Regresar al Listado</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ciudad_edit", array("id" => $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "idCiudad", array()))), "html", null, true);
        echo "\">Editar</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Eliminar\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_50c1010f0c0b2c1460e767619a5568d50ac40bc8cb9f0e0bce4b352e1d98a414->leave($__internal_50c1010f0c0b2c1460e767619a5568d50ac40bc8cb9f0e0bce4b352e1d98a414_prof);

    }

    public function getTemplateName()
    {
        return "ciudad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  95 => 35,  89 => 32,  83 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Ciudad</h1>*/
/* */
/*     <table>*/
/*       <tbody>*/
/*           <tr>*/
/*               <th>Id ciudad</th>*/
/*               <td>{{ ciudad.idCiudad }}</td>*/
/*           </tr>*/
/*           <tr>*/
/*               <th>Postal ciudad</th>*/
/*               <td>{{ ciudad.postalCiudad }}</td>*/
/*           </tr>*/
/*           <tr>*/
/*               <th>Ciudad</th>*/
/*               <td>{{ ciudad.ciudad }}</td>*/
/*           </tr>*/
/*           <tr>*/
/*               <th>Estado</th>*/
/*               <td>{% if ciudad.estadoCiudad %}Activo{% else %}No{% endif %}</td>*/
/*           </tr>*/
/*       </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ciudad_index') }}">Regresar al Listado</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('ciudad_edit', { 'id': ciudad.idCiudad }) }}">Editar</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Eliminar">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
