<?php

/* estudiantes/show.html.twig */
class __TwigTemplate_9e8eff0c706799c183a92466aeaba175db501dda9e060bea9e0cd28c186ae87a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estudiantes/show.html.twig", 1);
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
        $__internal_edfa03e8310e841f321587a2e40701fa9685af94786ca05c19b18a0d06b903d3 = $this->env->getExtension("native_profiler");
        $__internal_edfa03e8310e841f321587a2e40701fa9685af94786ca05c19b18a0d06b903d3->enter($__internal_edfa03e8310e841f321587a2e40701fa9685af94786ca05c19b18a0d06b903d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edfa03e8310e841f321587a2e40701fa9685af94786ca05c19b18a0d06b903d3->leave($__internal_edfa03e8310e841f321587a2e40701fa9685af94786ca05c19b18a0d06b903d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_024902069631da1159cc6e3b5ff8e00e6b183f8de2cba6080d02ac4a3859a978 = $this->env->getExtension("native_profiler");
        $__internal_024902069631da1159cc6e3b5ff8e00e6b183f8de2cba6080d02ac4a3859a978->enter($__internal_024902069631da1159cc6e3b5ff8e00e6b183f8de2cba6080d02ac4a3859a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes</h1>

    <table>
        <tbody>
            <tr>
                <th>Idestudiante</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "idEstudiante", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Carneestudiante</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "carneEstudiante", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cierrepensum</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "cierrePensum", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Estadoestudiante</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "estadoEstudiante", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_edit", array("id" => $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "idEstudiante", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_024902069631da1159cc6e3b5ff8e00e6b183f8de2cba6080d02ac4a3859a978->leave($__internal_024902069631da1159cc6e3b5ff8e00e6b183f8de2cba6080d02ac4a3859a978_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  95 => 35,  89 => 32,  83 => 29,  73 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Estudiantes</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idestudiante</th>*/
/*                 <td>{{ estudiante.idEstudiante }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Carneestudiante</th>*/
/*                 <td>{{ estudiante.carneEstudiante }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cierrepensum</th>*/
/*                 <td>{% if estudiante.cierrePensum %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estadoestudiante</th>*/
/*                 <td>{{ estudiante.estadoEstudiante }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_edit', { 'id': estudiante.idEstudiante }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
