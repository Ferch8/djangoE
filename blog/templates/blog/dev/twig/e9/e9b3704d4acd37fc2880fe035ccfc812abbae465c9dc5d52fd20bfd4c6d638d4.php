<?php

/* bufetes/show.html.twig */
class __TwigTemplate_1f19d59d14f8bc2b00bc17654f0fe9a3f76230dcbce0ea636cae1444595947de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bufetes/show.html.twig", 1);
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
        $__internal_24a387553f28b4f7044d7d31416fbf158ff3892914c0c33e46fd249fb5402425 = $this->env->getExtension("native_profiler");
        $__internal_24a387553f28b4f7044d7d31416fbf158ff3892914c0c33e46fd249fb5402425->enter($__internal_24a387553f28b4f7044d7d31416fbf158ff3892914c0c33e46fd249fb5402425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bufetes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24a387553f28b4f7044d7d31416fbf158ff3892914c0c33e46fd249fb5402425->leave($__internal_24a387553f28b4f7044d7d31416fbf158ff3892914c0c33e46fd249fb5402425_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_addcc5e3615b1d3e0ce99f46ad892200451665da190d009c777b5fe0dbbf0565 = $this->env->getExtension("native_profiler");
        $__internal_addcc5e3615b1d3e0ce99f46ad892200451665da190d009c777b5fe0dbbf0565->enter($__internal_addcc5e3615b1d3e0ce99f46ad892200451665da190d009c777b5fe0dbbf0565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  <h1>Detalles</h1>
";
        
        $__internal_addcc5e3615b1d3e0ce99f46ad892200451665da190d009c777b5fe0dbbf0565->leave($__internal_addcc5e3615b1d3e0ce99f46ad892200451665da190d009c777b5fe0dbbf0565_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_48150d1b4916e62af16600af71bf71b495ff0ba379345bf397d19d13c9434418 = $this->env->getExtension("native_profiler");
        $__internal_48150d1b4916e62af16600af71bf71b495ff0ba379345bf397d19d13c9434418->enter($__internal_48150d1b4916e62af16600af71bf71b495ff0ba379345bf397d19d13c9434418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "      <div class=\"portlet-body\">
        <div id=\"sample_1_wrapper\" class=\"dataTable_wrapper table-responsive\">
          <div class=\"col-md-5\">
          <table class=\"table table-striped table-bordered table-hover dataTable no-footer\">
              <tbody>
                <tr>
                    <th>Id bufete</th>
                    <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bufete"]) ? $context["bufete"] : $this->getContext($context, "bufete")), "idBufete", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nombre:</th>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bufete"]) ? $context["bufete"] : $this->getContext($context, "bufete")), "nombreBufete", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Teléfono 1:</th>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bufete"]) ? $context["bufete"] : $this->getContext($context, "bufete")), "telefono1Bufete", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Teléfono 2:</th>
                    <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bufete"]) ? $context["bufete"] : $this->getContext($context, "bufete")), "telefono2", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Correo Electrónico:</th>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bufete"]) ? $context["bufete"] : $this->getContext($context, "bufete")), "emailBufete", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Direccion:</th>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bufete"]) ? $context["bufete"] : $this->getContext($context, "bufete")), "direccionBufete", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Estado:</th>
                    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bufete"]) ? $context["bufete"] : $this->getContext($context, "bufete")), "estadoBufete", array()), "html", null, true);
        echo "</td>
                </tr>
              </tbody>
          </table>
          <ul style=\"list-style-type:none\">
            <li>
              <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("bufetes_index");
        echo "\" class=\"btn btn-xs default\">Regresar</a>
            </li>
            <li>
              <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bufetes_edit", array("id" => $this->getAttribute((isset($context["bufete"]) ? $context["bufete"] : $this->getContext($context, "bufete")), "idBufete", array()))), "html", null, true);
        echo "\" class=\"btn btn-xs blue\">Editar</a>
            </li>
            <li>
              ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                  <button type=\"submit\" class=\"btn btn-xs red\" name=\"Delete\">Eliminar</button>
              ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
          </ul>
        </div>
        </div>
      </div>
";
        
        $__internal_48150d1b4916e62af16600af71bf71b495ff0ba379345bf397d19d13c9434418->leave($__internal_48150d1b4916e62af16600af71bf71b495ff0ba379345bf397d19d13c9434418_prof);

    }

    public function getTemplateName()
    {
        return "bufetes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 51,  127 => 49,  121 => 46,  115 => 43,  106 => 37,  99 => 33,  92 => 29,  85 => 25,  78 => 21,  71 => 17,  64 => 13,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block title %}*/
/*   <h1>Detalles</h1>*/
/* {% endblock %}*/
/* {% block body %}*/
/*       <div class="portlet-body">*/
/*         <div id="sample_1_wrapper" class="dataTable_wrapper table-responsive">*/
/*           <div class="col-md-5">*/
/*           <table class="table table-striped table-bordered table-hover dataTable no-footer">*/
/*               <tbody>*/
/*                 <tr>*/
/*                     <th>Id bufete</th>*/
/*                     <td>{{ bufete.idBufete }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Nombre:</th>*/
/*                     <td>{{ bufete.nombreBufete }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Teléfono 1:</th>*/
/*                     <td>{{ bufete.telefono1Bufete }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Teléfono 2:</th>*/
/*                     <td>{{ bufete.telefono2 }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Correo Electrónico:</th>*/
/*                     <td>{{ bufete.emailBufete }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Direccion:</th>*/
/*                     <td>{{ bufete.direccionBufete }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Estado:</th>*/
/*                     <td>{{ bufete.estadoBufete }}</td>*/
/*                 </tr>*/
/*               </tbody>*/
/*           </table>*/
/*           <ul style="list-style-type:none">*/
/*             <li>*/
/*               <a href="{{ path('bufetes_index') }}" class="btn btn-xs default">Regresar</a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ path('bufetes_edit', { 'id': bufete.idBufete }) }}" class="btn btn-xs blue">Editar</a>*/
/*             </li>*/
/*             <li>*/
/*               {{ form_start(delete_form) }}*/
/*                   <button type="submit" class="btn btn-xs red" name="Delete">Eliminar</button>*/
/*               {{ form_end(delete_form) }}*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*         </div>*/
/*       </div>*/
/* {% endblock %}*/
/* */
