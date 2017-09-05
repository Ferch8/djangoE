<?php

/* demandantes/index.html.twig */
class __TwigTemplate_7fcf30966914d4b83b0d67b1d9bf09d64f465e8369cc73ac74dc13e72636f146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "demandantes/index.html.twig", 1);
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
        $__internal_ccd735d93efc36383280e5cb73e188ed23d3c64e0b749ec28cebc5bd39c5d946 = $this->env->getExtension("native_profiler");
        $__internal_ccd735d93efc36383280e5cb73e188ed23d3c64e0b749ec28cebc5bd39c5d946->enter($__internal_ccd735d93efc36383280e5cb73e188ed23d3c64e0b749ec28cebc5bd39c5d946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandantes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd735d93efc36383280e5cb73e188ed23d3c64e0b749ec28cebc5bd39c5d946->leave($__internal_ccd735d93efc36383280e5cb73e188ed23d3c64e0b749ec28cebc5bd39c5d946_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_62bbe46103b47be3946dd1b8e321daf3db2fa1840bcb09540227ff2913b60d99 = $this->env->getExtension("native_profiler");
        $__internal_62bbe46103b47be3946dd1b8e321daf3db2fa1840bcb09540227ff2913b60d99->enter($__internal_62bbe46103b47be3946dd1b8e321daf3db2fa1840bcb09540227ff2913b60d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  <h1>Listado de Demandantes</h1>
";
        
        $__internal_62bbe46103b47be3946dd1b8e321daf3db2fa1840bcb09540227ff2913b60d99->leave($__internal_62bbe46103b47be3946dd1b8e321daf3db2fa1840bcb09540227ff2913b60d99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b861e12ab90f98c819e39bcc65486dcccaa08ba3f2cfd2d1f22d1acbd8afb694 = $this->env->getExtension("native_profiler");
        $__internal_b861e12ab90f98c819e39bcc65486dcccaa08ba3f2cfd2d1f22d1acbd8afb694->enter($__internal_b861e12ab90f98c819e39bcc65486dcccaa08ba3f2cfd2d1f22d1acbd8afb694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"portlet-body\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"btn-group\">
                  <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("demandantes_new");
        echo "\">
                    <button id=\"sample_editable_1_new\" class=\"btn green\">
                      Agregar Demandante <i class=\"fa fa-plus\"></i>
                    </button></a>
        </div>
      </div>
    </div>

  <div class=\"id=\"sample_1_wrapper\" class=\"dataTable_wrapper table-responsive\"\">
      <table class=\"table table-striped table-bordered table-hover dataTable no-footer\">
        <thead>
          <tr role=\"row\" class=\"\">
            <th>Nombre </th>
            <th>Edad </th>
            <th>Dpi </th>
            <th>Direccion </th>
            <th>Direccion de trabajo </th>
            <th>Teléfono </th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandantes"]) ? $context["demandantes"] : $this->getContext($context, "demandantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["demandante"]) {
            // line 33
            echo "              <tr>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandante"], "nombreDemandante", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandante"], "edadDemandante", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandante"], "dpiDemandante", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandante"], "direccionDemandante", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandante"], "dirtrabajoDemandante", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandante"], "telefonoDemandante", array()), "html", null, true);
            echo "</td>
                  <td>
                      <a class=\"btn blue\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandantes_show", array("id" => $this->getAttribute($context["demandante"], "idDemandante", array()))), "html", null, true);
            echo "\">Ver</a>
                      <a class=\"btn btn-warning\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandantes_edit", array("id" => $this->getAttribute($context["demandante"], "idDemandante", array()))), "html", null, true);
            echo "\">Editar</a>
                  </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
      </table>
  </div>

</div>
";
        
        $__internal_b861e12ab90f98c819e39bcc65486dcccaa08ba3f2cfd2d1f22d1acbd8afb694->leave($__internal_b861e12ab90f98c819e39bcc65486dcccaa08ba3f2cfd2d1f22d1acbd8afb694_prof);

    }

    public function getTemplateName()
    {
        return "demandantes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  122 => 42,  118 => 41,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  90 => 33,  86 => 32,  61 => 10,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block title %}*/
/*   <h1>Listado de Demandantes</h1>*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="portlet-body">*/
/*     <div class="row">*/
/*       <div class="col-md-6">*/
/*         <div class="btn-group">*/
/*                   <a href="{{ path('demandantes_new') }}">*/
/*                     <button id="sample_editable_1_new" class="btn green">*/
/*                       Agregar Demandante <i class="fa fa-plus"></i>*/
/*                     </button></a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*   <div class="id="sample_1_wrapper" class="dataTable_wrapper table-responsive"">*/
/*       <table class="table table-striped table-bordered table-hover dataTable no-footer">*/
/*         <thead>*/
/*           <tr role="row" class="">*/
/*             <th>Nombre </th>*/
/*             <th>Edad </th>*/
/*             <th>Dpi </th>*/
/*             <th>Direccion </th>*/
/*             <th>Direccion de trabajo </th>*/
/*             <th>Teléfono </th>*/
/*             <th>Acciones</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           {% for demandante in demandantes %}*/
/*               <tr>*/
/*                   <td>{{ demandante.nombreDemandante }}</td>*/
/*                   <td>{{ demandante.edadDemandante }}</td>*/
/*                   <td>{{ demandante.dpiDemandante }}</td>*/
/*                   <td>{{ demandante.direccionDemandante }}</td>*/
/*                   <td>{{ demandante.dirtrabajoDemandante }}</td>*/
/*                   <td>{{ demandante.telefonoDemandante }}</td>*/
/*                   <td>*/
/*                       <a class="btn blue" href="{{ path('demandantes_show', { 'id': demandante.idDemandante }) }}">Ver</a>*/
/*                       <a class="btn btn-warning" href="{{ path('demandantes_edit', { 'id': demandante.idDemandante }) }}">Editar</a>*/
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
