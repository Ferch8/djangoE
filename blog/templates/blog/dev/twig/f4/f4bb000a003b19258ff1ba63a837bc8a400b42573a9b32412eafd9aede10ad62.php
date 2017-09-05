<?php

/* laborales/show.html.twig */
class __TwigTemplate_b0d2f30cbf539a1c9284bd2016eebf733c5bc76e7fefbd9fea3c1e54356c1a70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "laborales/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58972c956147f969a2cfce9502525bb44daf3c4d0ca022b9fc3fe94b231a8633 = $this->env->getExtension("native_profiler");
        $__internal_58972c956147f969a2cfce9502525bb44daf3c4d0ca022b9fc3fe94b231a8633->enter($__internal_58972c956147f969a2cfce9502525bb44daf3c4d0ca022b9fc3fe94b231a8633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "laborales/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58972c956147f969a2cfce9502525bb44daf3c4d0ca022b9fc3fe94b231a8633->leave($__internal_58972c956147f969a2cfce9502525bb44daf3c4d0ca022b9fc3fe94b231a8633_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6e338f65bd2ab3d3e7768f3d80115ee116656e46011685ed27b3ab9711fec93 = $this->env->getExtension("native_profiler");
        $__internal_d6e338f65bd2ab3d3e7768f3d80115ee116656e46011685ed27b3ab9711fec93->enter($__internal_d6e338f65bd2ab3d3e7768f3d80115ee116656e46011685ed27b3ab9711fec93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Laborales</h1>

    <table>
        <tbody>
            <tr>
                <th>Idtipolaboral</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laborale"]) ? $context["laborale"] : $this->getContext($context, "laborale")), "idTipolaboral", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechainicio</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["laborale"]) ? $context["laborale"] : $this->getContext($context, "laborale")), "fechaInicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["laborale"]) ? $context["laborale"] : $this->getContext($context, "laborale")), "fechaInicio", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechafin</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["laborale"]) ? $context["laborale"] : $this->getContext($context, "laborale")), "fechaFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["laborale"]) ? $context["laborale"] : $this->getContext($context, "laborale")), "fechaFin", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Salario</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laborale"]) ? $context["laborale"] : $this->getContext($context, "laborale")), "salario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadolaboral</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["laborale"]) ? $context["laborale"] : $this->getContext($context, "laborale")), "estadoLaboral", array())) {
            echo "Yes";
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
        // line 33
        echo $this->env->getExtension('routing')->getPath("laborales_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("laborales_edit", array("id" => $this->getAttribute((isset($context["laborale"]) ? $context["laborale"] : $this->getContext($context, "laborale")), "idTipolaboral", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d6e338f65bd2ab3d3e7768f3d80115ee116656e46011685ed27b3ab9711fec93->leave($__internal_d6e338f65bd2ab3d3e7768f3d80115ee116656e46011685ed27b3ab9711fec93_prof);

    }

    public function getTemplateName()
    {
        return "laborales/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  106 => 39,  100 => 36,  94 => 33,  80 => 26,  73 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Laborales</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idtipolaboral</th>*/
/*                 <td>{{ laborale.idTipolaboral }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechainicio</th>*/
/*                 <td>{% if laborale.fechaInicio %}{{ laborale.fechaInicio|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechafin</th>*/
/*                 <td>{% if laborale.fechaFin %}{{ laborale.fechaFin|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Salario</th>*/
/*                 <td>{{ laborale.salario }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estadolaboral</th>*/
/*                 <td>{% if laborale.estadoLaboral %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('laborales_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('laborales_edit', { 'id': laborale.idTipolaboral }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
