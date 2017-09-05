<?php

/* bufetes/index.html.twig */
class __TwigTemplate_c40a0a2d66afabb37fe921c2a5c7ff08453cc481cddda1a3bccb4bf334279c68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bufetes/index.html.twig", 1);
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
        $__internal_5e8aafd3cf2f576f9ec941159ab7b6c069edd5e7882bead0c2a12442eadcc94e = $this->env->getExtension("native_profiler");
        $__internal_5e8aafd3cf2f576f9ec941159ab7b6c069edd5e7882bead0c2a12442eadcc94e->enter($__internal_5e8aafd3cf2f576f9ec941159ab7b6c069edd5e7882bead0c2a12442eadcc94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bufetes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e8aafd3cf2f576f9ec941159ab7b6c069edd5e7882bead0c2a12442eadcc94e->leave($__internal_5e8aafd3cf2f576f9ec941159ab7b6c069edd5e7882bead0c2a12442eadcc94e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_270098074e7875c4975d1539dc8026904691f5452bdb2855b8316fe14ce764d0 = $this->env->getExtension("native_profiler");
        $__internal_270098074e7875c4975d1539dc8026904691f5452bdb2855b8316fe14ce764d0->enter($__internal_270098074e7875c4975d1539dc8026904691f5452bdb2855b8316fe14ce764d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  <h1>Listado de Bufetes</h1>
";
        
        $__internal_270098074e7875c4975d1539dc8026904691f5452bdb2855b8316fe14ce764d0->leave($__internal_270098074e7875c4975d1539dc8026904691f5452bdb2855b8316fe14ce764d0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_081341bddb62901892b0ac5bedb873bfa56d6fee3bc9d77d88854b3e6d9770de = $this->env->getExtension("native_profiler");
        $__internal_081341bddb62901892b0ac5bedb873bfa56d6fee3bc9d77d88854b3e6d9770de->enter($__internal_081341bddb62901892b0ac5bedb873bfa56d6fee3bc9d77d88854b3e6d9770de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"portlet box red-pink\">
  <div class=\"portlet-body\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"btn-group\">
          <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("bufetes_new");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"sample_editable_1_new\" class=\"btn green\">
\t\t\t\t\t\t\t\t\t\t\tAgregar Bufete <i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t\t\t\t</div>
      </div>
    </div>
<div id=\"sample_1_wrapper\" class=\"dataTable_wrapper table-responsive\">
    <table class=\"table table-striped table-bordered table-hover dataTable no-footer\">
        <thead>
            <tr role=\"row\" class=\"\">
                <th>Id bufete</th>
                <th>Nombre </th>
                <th>Telefono1 </th>
                <th>Telefono2</th>
                <th>Correo Electrónico</th>
                <th>Direccion </th>
                <th>Estado </th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bufetes"]) ? $context["bufetes"] : $this->getContext($context, "bufetes")));
        foreach ($context['_seq'] as $context["_key"] => $context["bufete"]) {
            // line 35
            echo "            <tr>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bufetes_show", array("id" => $this->getAttribute($context["bufete"], "idBufete", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bufete"], "idBufete", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["bufete"], "nombreBufete", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["bufete"], "telefono1Bufete", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["bufete"], "telefono2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["bufete"], "emailBufete", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["bufete"], "direccionBufete", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["bufete"], "estadoBufete", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bufetes_show", array("id" => $this->getAttribute($context["bufete"], "idBufete", array()))), "html", null, true);
            echo "\" class=\"btn blue\">Ver</a>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bufetes_edit", array("id" => $this->getAttribute($context["bufete"], "idBufete", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bufete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
</div>

  </div>
</div>
";
        
        $__internal_081341bddb62901892b0ac5bedb873bfa56d6fee3bc9d77d88854b3e6d9770de->leave($__internal_081341bddb62901892b0ac5bedb873bfa56d6fee3bc9d77d88854b3e6d9770de_prof);

    }

    public function getTemplateName()
    {
        return "bufetes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 49,  129 => 45,  125 => 44,  120 => 42,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  94 => 36,  91 => 35,  87 => 34,  62 => 12,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block title %}*/
/*   <h1>Listado de Bufetes</h1>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="portlet box red-pink">*/
/*   <div class="portlet-body">*/
/*     <div class="row">*/
/*       <div class="col-md-6">*/
/*         <div class="btn-group">*/
/*           <a href="{{ path('bufetes_new') }}">*/
/* 											<button id="sample_editable_1_new" class="btn green">*/
/* 											Agregar Bufete <i class="fa fa-plus"></i>*/
/* 											</button></a>*/
/* 										</div>*/
/*       </div>*/
/*     </div>*/
/* <div id="sample_1_wrapper" class="dataTable_wrapper table-responsive">*/
/*     <table class="table table-striped table-bordered table-hover dataTable no-footer">*/
/*         <thead>*/
/*             <tr role="row" class="">*/
/*                 <th>Id bufete</th>*/
/*                 <th>Nombre </th>*/
/*                 <th>Telefono1 </th>*/
/*                 <th>Telefono2</th>*/
/*                 <th>Correo Electrónico</th>*/
/*                 <th>Direccion </th>*/
/*                 <th>Estado </th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for bufete in bufetes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('bufetes_show', { 'id': bufete.idBufete }) }}">{{ bufete.idBufete }}</a></td>*/
/*                 <td>{{ bufete.nombreBufete }}</td>*/
/*                 <td>{{ bufete.telefono1Bufete }}</td>*/
/*                 <td>{{ bufete.telefono2 }}</td>*/
/*                 <td>{{ bufete.emailBufete }}</td>*/
/*                 <td>{{ bufete.direccionBufete }}</td>*/
/*                 <td>{{ bufete.estadoBufete }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('bufetes_show', { 'id': bufete.idBufete }) }}" class="btn blue">Ver</a>*/
/*                     <a href="{{ path('bufetes_edit', { 'id': bufete.idBufete }) }}" class="btn btn-warning">Editar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
