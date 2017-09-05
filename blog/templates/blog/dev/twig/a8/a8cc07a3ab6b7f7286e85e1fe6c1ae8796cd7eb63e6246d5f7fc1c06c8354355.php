<?php

/* estadosciviles/show.html.twig */
class __TwigTemplate_7e752918e532978e6b073a48713f2c2cb97783104c9a80e1d7c6613716bbdb25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "estadosciviles/show.html.twig", 1);
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
        $__internal_4dccf4ebc0d5ee11a935c40e80760e6f71ad43dce01afac5b98b11a9daa4abc9 = $this->env->getExtension("native_profiler");
        $__internal_4dccf4ebc0d5ee11a935c40e80760e6f71ad43dce01afac5b98b11a9daa4abc9->enter($__internal_4dccf4ebc0d5ee11a935c40e80760e6f71ad43dce01afac5b98b11a9daa4abc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estadosciviles/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dccf4ebc0d5ee11a935c40e80760e6f71ad43dce01afac5b98b11a9daa4abc9->leave($__internal_4dccf4ebc0d5ee11a935c40e80760e6f71ad43dce01afac5b98b11a9daa4abc9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_874a697e462541025f6cd3c5d561cc2593c0126a8b906f5a47b60a3c4633b584 = $this->env->getExtension("native_profiler");
        $__internal_874a697e462541025f6cd3c5d561cc2593c0126a8b906f5a47b60a3c4633b584->enter($__internal_874a697e462541025f6cd3c5d561cc2593c0126a8b906f5a47b60a3c4633b584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Estados civiles</h1>

    <table>
      <tbody>
          <tr>
              <th>Id estadocivil</th>
              <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estadoscivile"]) ? $context["estadoscivile"] : $this->getContext($context, "estadoscivile")), "idEstadocivil", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Estado civil</th>
              <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estadoscivile"]) ? $context["estadoscivile"] : $this->getContext($context, "estadoscivile")), "estadocivil", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Estado</th>
              <td>";
        // line 18
        if ($this->getAttribute((isset($context["estadoscivile"]) ? $context["estadoscivile"] : $this->getContext($context, "estadoscivile")), "estadoEstadocivil", array())) {
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("estadosciviles_index");
        echo "\">Regresar al Listado</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadosciviles_edit", array("id" => $this->getAttribute((isset($context["estadoscivile"]) ? $context["estadoscivile"] : $this->getContext($context, "estadoscivile")), "idEstadocivil", array()))), "html", null, true);
        echo "\">Editar</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Eliminar\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_874a697e462541025f6cd3c5d561cc2593c0126a8b906f5a47b60a3c4633b584->leave($__internal_874a697e462541025f6cd3c5d561cc2593c0126a8b906f5a47b60a3c4633b584_prof);

    }

    public function getTemplateName()
    {
        return "estadosciviles/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  88 => 31,  82 => 28,  76 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*   <h1>Estados civiles</h1>*/
/* */
/*     <table>*/
/*       <tbody>*/
/*           <tr>*/
/*               <th>Id estadocivil</th>*/
/*               <td>{{ estadoscivile.idEstadocivil }}</td>*/
/*           </tr>*/
/*           <tr>*/
/*               <th>Estado civil</th>*/
/*               <td>{{ estadoscivile.estadocivil }}</td>*/
/*           </tr>*/
/*           <tr>*/
/*               <th>Estado</th>*/
/*               <td>{% if estadoscivile.estadoEstadocivil %}Activo{% else %}No{% endif %}</td>*/
/*           </tr>*/
/*       </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estadosciviles_index') }}">Regresar al Listado</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('estadosciviles_edit', { 'id': estadoscivile.idEstadocivil }) }}">Editar</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Eliminar">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
