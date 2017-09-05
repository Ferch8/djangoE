<?php

/* trabajos/index.html.twig */
class __TwigTemplate_e76f932734dbd8ace45d238f98ac9a183cda5960158e910f3e36e54ab1ab5015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "trabajos/index.html.twig", 1);
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
        $__internal_d18d2670f9113b9d12b45c4d8f62033f45edf7a4505dd2a5f604270186dd4277 = $this->env->getExtension("native_profiler");
        $__internal_d18d2670f9113b9d12b45c4d8f62033f45edf7a4505dd2a5f604270186dd4277->enter($__internal_d18d2670f9113b9d12b45c4d8f62033f45edf7a4505dd2a5f604270186dd4277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trabajos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d18d2670f9113b9d12b45c4d8f62033f45edf7a4505dd2a5f604270186dd4277->leave($__internal_d18d2670f9113b9d12b45c4d8f62033f45edf7a4505dd2a5f604270186dd4277_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8954bca3b4ae558cba64881ae4270d877c7b0f3107806c410dbe8905eb0681ee = $this->env->getExtension("native_profiler");
        $__internal_8954bca3b4ae558cba64881ae4270d877c7b0f3107806c410dbe8905eb0681ee->enter($__internal_8954bca3b4ae558cba64881ae4270d877c7b0f3107806c410dbe8905eb0681ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Listado de Trabajos </h1>

    <table>
      <thead>
          <tr>
              <th>Id trabajo</th>
              <th>Trabajo</th>
              <th>Estado trabajo</th>
              <th>Opciones</th>
          </tr>
      </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajo"]) {
            // line 17
            echo "        <tr>
            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_show", array("id" => $this->getAttribute($context["trabajo"], "idTrabajo", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajo"], "idTrabajo", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajo"], "trabajo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            if ($this->getAttribute($context["trabajo"], "estadoTrabajo", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_show", array("id" => $this->getAttribute($context["trabajo"], "idTrabajo", array()))), "html", null, true);
            echo "\">Mostrar</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_edit", array("id" => $this->getAttribute($context["trabajo"], "idTrabajo", array()))), "html", null, true);
            echo "\">Editar</a>
                    </li>
                </ul>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("trabajos_new");
        echo "\">Crear Nuevo trabajo</a>
        </li>
    </ul>
";
        
        $__internal_8954bca3b4ae558cba64881ae4270d877c7b0f3107806c410dbe8905eb0681ee->leave($__internal_8954bca3b4ae558cba64881ae4270d877c7b0f3107806c410dbe8905eb0681ee_prof);

    }

    public function getTemplateName()
    {
        return "trabajos/index.html.twig";
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
/*     <h1>Listado de Trabajos </h1>*/
/* */
/*     <table>*/
/*       <thead>*/
/*           <tr>*/
/*               <th>Id trabajo</th>*/
/*               <th>Trabajo</th>*/
/*               <th>Estado trabajo</th>*/
/*               <th>Opciones</th>*/
/*           </tr>*/
/*       </thead>*/
/*         <tbody>*/
/*         {% for trabajo in trabajos %}*/
/*         <tr>*/
/*             <td><a href="{{ path('trabajos_show', { 'id': trabajo.idTrabajo }) }}">{{ trabajo.idTrabajo }}</a></td>*/
/*             <td>{{ trabajo.trabajo }}</td>*/
/*             <td>{% if trabajo.estadoTrabajo %}Activo{% else %}No{% endif %}</td>*/
/*             <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('trabajos_show', { 'id': trabajo.idTrabajo }) }}">Mostrar</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('trabajos_edit', { 'id': trabajo.idTrabajo }) }}">Editar</a>*/
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
/*             <a href="{{ path('trabajos_new') }}">Crear Nuevo trabajo</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
