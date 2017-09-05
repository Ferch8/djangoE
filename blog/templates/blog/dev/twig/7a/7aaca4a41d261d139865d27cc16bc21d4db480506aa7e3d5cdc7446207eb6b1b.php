<?php

/* demandantes/show.html.twig */
class __TwigTemplate_a152bd0f2d9557f6fe8b29c7d0e1e8151df9abf007972a3e838bebd337b94bc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "demandantes/show.html.twig", 1);
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
        $__internal_99fe50599b49b43d503545aa0236a88bb3585de2db65a93552ca3fbe5e6a04cc = $this->env->getExtension("native_profiler");
        $__internal_99fe50599b49b43d503545aa0236a88bb3585de2db65a93552ca3fbe5e6a04cc->enter($__internal_99fe50599b49b43d503545aa0236a88bb3585de2db65a93552ca3fbe5e6a04cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandantes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99fe50599b49b43d503545aa0236a88bb3585de2db65a93552ca3fbe5e6a04cc->leave($__internal_99fe50599b49b43d503545aa0236a88bb3585de2db65a93552ca3fbe5e6a04cc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e40356a0639ed56317e61e01952001e04512edab95c83113b1d8e8da049ca3e0 = $this->env->getExtension("native_profiler");
        $__internal_e40356a0639ed56317e61e01952001e04512edab95c83113b1d8e8da049ca3e0->enter($__internal_e40356a0639ed56317e61e01952001e04512edab95c83113b1d8e8da049ca3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  <h1>Detalles</h1>
";
        
        $__internal_e40356a0639ed56317e61e01952001e04512edab95c83113b1d8e8da049ca3e0->leave($__internal_e40356a0639ed56317e61e01952001e04512edab95c83113b1d8e8da049ca3e0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_08bb8f3ada60109eeafd01f87e513852ab7afd1d3549fdd2bcb5c2c76b497cec = $this->env->getExtension("native_profiler");
        $__internal_08bb8f3ada60109eeafd01f87e513852ab7afd1d3549fdd2bcb5c2c76b497cec->enter($__internal_08bb8f3ada60109eeafd01f87e513852ab7afd1d3549fdd2bcb5c2c76b497cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "      <div class=\"portlet-body\">
        <div id=\"sample_1_wrapper\" class=\"dataTable_wrapper table-responsive\">
          <div class=\"col-md-4\">
          <table class=\"table table-striped table-bordered table-hover dataTable no-footer\">
              <tbody>
                <tr>
                    <th>Id demandante</th>
                    <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "idDemandante", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nombre </th>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "nombreDemandante", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Edad </th>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "edadDemandante", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>DPI </th>
                    <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "dpiDemandante", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Cedula </th>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "cedulaDemandante", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Direccion </th>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "direccionDemandante", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Residencia </th>
                    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "residenciaDemandante", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Dirección de trabajo </th>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "dirtrabajoDemandante", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "telefonoDemandante", array()), "html", null, true);
        echo "</td>
                </tr>
              </tbody>
          </table>
          <ul style=\"list-style-type:none\">
            <li>
              <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("demandantes_index");
        echo "\" class=\"btn btn-xs default\">Regresar</a>
            </li>
            <li>
              <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandantes_edit", array("id" => $this->getAttribute((isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "idDemandante", array()))), "html", null, true);
        echo "\" class=\"btn btn-xs blue\">Editar</a>
            </li>
            <li>
              ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                  <button type=\"submit\" class=\"btn btn-xs red\" name=\"Delete\">Eliminar</button>
              ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
          </ul>
          </div>
        </div>
      </div>
";
        
        $__internal_08bb8f3ada60109eeafd01f87e513852ab7afd1d3549fdd2bcb5c2c76b497cec->leave($__internal_08bb8f3ada60109eeafd01f87e513852ab7afd1d3549fdd2bcb5c2c76b497cec_prof);

    }

    public function getTemplateName()
    {
        return "demandantes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 59,  141 => 57,  135 => 54,  129 => 51,  120 => 45,  113 => 41,  106 => 37,  99 => 33,  92 => 29,  85 => 25,  78 => 21,  71 => 17,  64 => 13,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
/*                     <th>Id demandante</th>*/
/*                     <td>{{ demandante.idDemandante }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Nombre </th>*/
/*                     <td>{{ demandante.nombreDemandante }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Edad </th>*/
/*                     <td>{{ demandante.edadDemandante }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>DPI </th>*/
/*                     <td>{{ demandante.dpiDemandante }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Cedula </th>*/
/*                     <td>{{ demandante.cedulaDemandante }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Direccion </th>*/
/*                     <td>{{ demandante.direccionDemandante }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Residencia </th>*/
/*                     <td>{{ demandante.residenciaDemandante }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Dirección de trabajo </th>*/
/*                     <td>{{ demandante.dirtrabajoDemandante }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Teléfono</th>*/
/*                     <td>{{ demandante.telefonoDemandante }}</td>*/
/*                 </tr>*/
/*               </tbody>*/
/*           </table>*/
/*           <ul style="list-style-type:none">*/
/*             <li>*/
/*               <a href="{{ path('demandantes_index') }}" class="btn btn-xs default">Regresar</a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ path('demandantes_edit', { 'id': demandante.idDemandante }) }}" class="btn btn-xs blue">Editar</a>*/
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
