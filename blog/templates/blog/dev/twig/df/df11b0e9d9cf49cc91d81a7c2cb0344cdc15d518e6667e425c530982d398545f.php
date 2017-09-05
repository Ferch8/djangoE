<?php

/* demandados/index.html.twig */
class __TwigTemplate_44925e81790dc93c4aa0eb4ddead6becb9031435217539a2d58b425f67e082ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "demandados/index.html.twig", 1);
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
        $__internal_9bf64019724aaf7565ca74c907c0ad222e169ba448b0908f3b46e03e74d5ce59 = $this->env->getExtension("native_profiler");
        $__internal_9bf64019724aaf7565ca74c907c0ad222e169ba448b0908f3b46e03e74d5ce59->enter($__internal_9bf64019724aaf7565ca74c907c0ad222e169ba448b0908f3b46e03e74d5ce59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandados/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bf64019724aaf7565ca74c907c0ad222e169ba448b0908f3b46e03e74d5ce59->leave($__internal_9bf64019724aaf7565ca74c907c0ad222e169ba448b0908f3b46e03e74d5ce59_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cc137c49bcc31481f9f21ec3b41abef2aa19be5eb132efe8eeabd018e779c88 = $this->env->getExtension("native_profiler");
        $__internal_9cc137c49bcc31481f9f21ec3b41abef2aa19be5eb132efe8eeabd018e779c88->enter($__internal_9cc137c49bcc31481f9f21ec3b41abef2aa19be5eb132efe8eeabd018e779c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  <h1>Listado de Demandados</h1>
";
        
        $__internal_9cc137c49bcc31481f9f21ec3b41abef2aa19be5eb132efe8eeabd018e779c88->leave($__internal_9cc137c49bcc31481f9f21ec3b41abef2aa19be5eb132efe8eeabd018e779c88_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9de51c88da9a724b801047f0ca49bacfa3b32ea6466873df199f5083adeffa82 = $this->env->getExtension("native_profiler");
        $__internal_9de51c88da9a724b801047f0ca49bacfa3b32ea6466873df199f5083adeffa82->enter($__internal_9de51c88da9a724b801047f0ca49bacfa3b32ea6466873df199f5083adeffa82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"portlet-body\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"btn-group\">
                  <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("demandados_new");
        echo "\">
                    <button id=\"sample_editable_1_new\" class=\"btn green\">
                      Agregar Demandado <i class=\"fa fa-plus\"></i>
                    </button></a>
        </div>
      </div>
    </div>

  <div class=\"id=\"sample_1_wrapper\" class=\"dataTable_wrapper table-responsive\"\">
      <table class=\"table table-striped table-bordered table-hover dataTable no-footer\">
        <thead>
          <tr role=\"row\" class=\"\">
            <th>Id Demandado</th>
            <th>Nombre </th>
            <th>Direccion </th>
            <th>Direccion de notificación </th>
            <th>Telefono </th>
            <th>Estado</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandados"]) ? $context["demandados"] : $this->getContext($context, "demandados")));
        foreach ($context['_seq'] as $context["_key"] => $context["demandado"]) {
            // line 33
            echo "              <tr>
                  <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandados_show", array("id" => $this->getAttribute($context["demandado"], "idDemandado", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandado"], "idDemandado", array()), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandado"], "nombreDemandado", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandado"], "direccionDemandado", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandado"], "dirnotificacionDemandado", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandado"], "telefonoDemandado", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 39
            if ($this->getAttribute($context["demandado"], "estadoDemandado", array())) {
                echo "Activo";
            } else {
                echo "No";
            }
            echo "</td>
                  <td>
                      <a class=\"btn blue\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandados_show", array("id" => $this->getAttribute($context["demandado"], "idDemandado", array()))), "html", null, true);
            echo "\">Mostrar</a>
                      <a class=\"btn btn-warning\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandados_edit", array("id" => $this->getAttribute($context["demandado"], "idDemandado", array()))), "html", null, true);
            echo "\">Editar</a>
                  </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
      </table>
  </div>

</div>
";
        
        $__internal_9de51c88da9a724b801047f0ca49bacfa3b32ea6466873df199f5083adeffa82->leave($__internal_9de51c88da9a724b801047f0ca49bacfa3b32ea6466873df199f5083adeffa82_prof);

    }

    public function getTemplateName()
    {
        return "demandados/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  128 => 42,  124 => 41,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  93 => 34,  90 => 33,  86 => 32,  61 => 10,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block title %}*/
/*   <h1>Listado de Demandados</h1>*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="portlet-body">*/
/*     <div class="row">*/
/*       <div class="col-md-6">*/
/*         <div class="btn-group">*/
/*                   <a href="{{ path('demandados_new') }}">*/
/*                     <button id="sample_editable_1_new" class="btn green">*/
/*                       Agregar Demandado <i class="fa fa-plus"></i>*/
/*                     </button></a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*   <div class="id="sample_1_wrapper" class="dataTable_wrapper table-responsive"">*/
/*       <table class="table table-striped table-bordered table-hover dataTable no-footer">*/
/*         <thead>*/
/*           <tr role="row" class="">*/
/*             <th>Id Demandado</th>*/
/*             <th>Nombre </th>*/
/*             <th>Direccion </th>*/
/*             <th>Direccion de notificación </th>*/
/*             <th>Telefono </th>*/
/*             <th>Estado</th>*/
/*             <th>Opciones</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           {% for demandado in demandados %}*/
/*               <tr>*/
/*                   <td><a href="{{ path('demandados_show', { 'id': demandado.idDemandado }) }}">{{ demandado.idDemandado }}</a></td>*/
/*                   <td>{{ demandado.nombreDemandado }}</td>*/
/*                   <td>{{ demandado.direccionDemandado }}</td>*/
/*                   <td>{{ demandado.dirnotificacionDemandado }}</td>*/
/*                   <td>{{ demandado.telefonoDemandado }}</td>*/
/*                   <td>{% if demandado.estadoDemandado %}Activo{% else %}No{% endif %}</td>*/
/*                   <td>*/
/*                       <a class="btn blue" href="{{ path('demandados_show', { 'id': demandado.idDemandado }) }}">Mostrar</a>*/
/*                       <a class="btn btn-warning" href="{{ path('demandados_edit', { 'id': demandado.idDemandado }) }}">Editar</a>*/
/*                   </td>*/
/*               </tr>*/
/*           {% endfor %}*/
/*         </tbody>*/
/*       </table>*/
/*   </div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
