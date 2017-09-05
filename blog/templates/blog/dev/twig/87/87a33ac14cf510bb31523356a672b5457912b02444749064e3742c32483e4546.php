<?php

/* demandados/show.html.twig */
class __TwigTemplate_7298e68ee7fa1a1f3bc949593ccc918d6a4f5a5f7e3e36c72bb873b05ae32fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "demandados/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79ef47c9e3027537a33cceaef72d9c45b486c3675a85b4dab576c86b6fdc2a0a = $this->env->getExtension("native_profiler");
        $__internal_79ef47c9e3027537a33cceaef72d9c45b486c3675a85b4dab576c86b6fdc2a0a->enter($__internal_79ef47c9e3027537a33cceaef72d9c45b486c3675a85b4dab576c86b6fdc2a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandados/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ef47c9e3027537a33cceaef72d9c45b486c3675a85b4dab576c86b6fdc2a0a->leave($__internal_79ef47c9e3027537a33cceaef72d9c45b486c3675a85b4dab576c86b6fdc2a0a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f8196b208a79647b2b34dfa0d24b4e338cd875fa8c106af812f294e880875f0 = $this->env->getExtension("native_profiler");
        $__internal_9f8196b208a79647b2b34dfa0d24b4e338cd875fa8c106af812f294e880875f0->enter($__internal_9f8196b208a79647b2b34dfa0d24b4e338cd875fa8c106af812f294e880875f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  <h1>Detalles</h1>
";
        
        $__internal_9f8196b208a79647b2b34dfa0d24b4e338cd875fa8c106af812f294e880875f0->leave($__internal_9f8196b208a79647b2b34dfa0d24b4e338cd875fa8c106af812f294e880875f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_819962a95959767e8564e291e0138250487d645cb0a8d7fad7eab99fb8707a54 = $this->env->getExtension("native_profiler");
        $__internal_819962a95959767e8564e291e0138250487d645cb0a8d7fad7eab99fb8707a54->enter($__internal_819962a95959767e8564e291e0138250487d645cb0a8d7fad7eab99fb8707a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "      <div class=\"portlet-body\">
        <div id=\"sample_1_wrapper\" class=\"dataTable_wrapper table-responsive\">
          <div class=\"col-md-4\">
          <table class=\"table table-striped table-bordered table-hover dataTable no-footer\">
              <tbody>
                <tr>
                    <th>Id demandado</th>
                    <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandado"]) ? $context["demandado"] : $this->getContext($context, "demandado")), "idDemandado", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nombre </th>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandado"]) ? $context["demandado"] : $this->getContext($context, "demandado")), "nombreDemandado", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Direccion </th>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandado"]) ? $context["demandado"] : $this->getContext($context, "demandado")), "direccionDemandado", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Direccion de notificación </th>
                    <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandado"]) ? $context["demandado"] : $this->getContext($context, "demandado")), "dirnotificacionDemandado", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandado"]) ? $context["demandado"] : $this->getContext($context, "demandado")), "telefonoDemandado", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Estado </th>
                    <td>";
        // line 33
        if ($this->getAttribute((isset($context["demandado"]) ? $context["demandado"] : $this->getContext($context, "demandado")), "estadoDemandado", array())) {
            echo "Activo";
        } else {
            echo "No";
        }
        echo "</td>
                </tr>
              </tbody>
          </table>
          <ul style=\"list-style-type:none\">
            <li>
              <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("demandados_index");
        echo "\" class=\"btn btn-xs default\">Regresar</a>
            </li>
            <li>
              <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandados_edit", array("id" => $this->getAttribute((isset($context["demandado"]) ? $context["demandado"] : $this->getContext($context, "demandado")), "idDemandado", array()))), "html", null, true);
        echo "\" class=\"btn btn-xs blue\">Editar</a>
            </li>
            <li>
              ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                  <button type=\"submit\" class=\"btn btn-xs red\" name=\"Delete\">Eliminar</button>
              ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
          </ul>
          </div>
        </div>
      </div>
";
        
        $__internal_819962a95959767e8564e291e0138250487d645cb0a8d7fad7eab99fb8707a54->leave($__internal_819962a95959767e8564e291e0138250487d645cb0a8d7fad7eab99fb8707a54_prof);

    }

    public function getTemplateName()
    {
        return "demandados/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  124 => 45,  118 => 42,  112 => 39,  99 => 33,  92 => 29,  85 => 25,  78 => 21,  71 => 17,  64 => 13,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block title %}*/
/*   <h1>Detalles</h1>*/
/* {% endblock %}*/
/* {% block body %}*/
/*       <div class="portlet-body">*/
/*         <div id="sample_1_wrapper" class="dataTable_wrapper table-responsive">*/
/*           <div class="col-md-4">*/
/*           <table class="table table-striped table-bordered table-hover dataTable no-footer">*/
/*               <tbody>*/
/*                 <tr>*/
/*                     <th>Id demandado</th>*/
/*                     <td>{{ demandado.idDemandado }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Nombre </th>*/
/*                     <td>{{ demandado.nombreDemandado }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Direccion </th>*/
/*                     <td>{{ demandado.direccionDemandado }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Direccion de notificación </th>*/
/*                     <td>{{ demandado.dirnotificacionDemandado }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Teléfono</th>*/
/*                     <td>{{ demandado.telefonoDemandado }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Estado </th>*/
/*                     <td>{% if demandado.estadoDemandado %}Activo{% else %}No{% endif %}</td>*/
/*                 </tr>*/
/*               </tbody>*/
/*           </table>*/
/*           <ul style="list-style-type:none">*/
/*             <li>*/
/*               <a href="{{ path('demandados_index') }}" class="btn btn-xs default">Regresar</a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ path('demandados_edit', { 'id': demandado.idDemandado }) }}" class="btn btn-xs blue">Editar</a>*/
/*             </li>*/
/*             <li>*/
/*               {{ form_start(delete_form) }}*/
/*                   <button type="submit" class="btn btn-xs red" name="Delete">Eliminar</button>*/
/*               {{ form_end(delete_form) }}*/
/*             </li>*/
/*           </ul>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* {% endblock %}*/
/* */
