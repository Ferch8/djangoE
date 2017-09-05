<?php

/* casos/show.html.twig */
class __TwigTemplate_e2e26d52b461af9423806c09cb18d77bae0ea98700ced3bcddc2f165b898e04e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "casos/show.html.twig", 1);
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
        $__internal_68499a309afe1ce2ebd73ff6621ae391f42bff348cec319b000947b94aee93bb = $this->env->getExtension("native_profiler");
        $__internal_68499a309afe1ce2ebd73ff6621ae391f42bff348cec319b000947b94aee93bb->enter($__internal_68499a309afe1ce2ebd73ff6621ae391f42bff348cec319b000947b94aee93bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "casos/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68499a309afe1ce2ebd73ff6621ae391f42bff348cec319b000947b94aee93bb->leave($__internal_68499a309afe1ce2ebd73ff6621ae391f42bff348cec319b000947b94aee93bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9ff1e79a3ef9351bbd781f1f17eedb31c6c9d9dc14f35f3c55e5fc987aaa48d = $this->env->getExtension("native_profiler");
        $__internal_d9ff1e79a3ef9351bbd781f1f17eedb31c6c9d9dc14f35f3c55e5fc987aaa48d->enter($__internal_d9ff1e79a3ef9351bbd781f1f17eedb31c6c9d9dc14f35f3c55e5fc987aaa48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Casos</h1>

    <table>
        <tbody>
            <tr>
                <th>Idcaso</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caso"]) ? $context["caso"] : $this->getContext($context, "caso")), "idCaso", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nocaso</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caso"]) ? $context["caso"] : $this->getContext($context, "caso")), "noCaso", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechacaso</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["caso"]) ? $context["caso"] : $this->getContext($context, "caso")), "fechaCaso", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["caso"]) ? $context["caso"] : $this->getContext($context, "caso")), "fechaCaso", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Pruebascaso</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caso"]) ? $context["caso"] : $this->getContext($context, "caso")), "pruebasCaso", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Asignatariocaso</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caso"]) ? $context["caso"] : $this->getContext($context, "caso")), "asignatarioCaso", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadocaso</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caso"]) ? $context["caso"] : $this->getContext($context, "caso")), "estadoCaso", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("casos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("casos_edit", array("id" => $this->getAttribute((isset($context["caso"]) ? $context["caso"] : $this->getContext($context, "caso")), "idCaso", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d9ff1e79a3ef9351bbd781f1f17eedb31c6c9d9dc14f35f3c55e5fc987aaa48d->leave($__internal_d9ff1e79a3ef9351bbd781f1f17eedb31c6c9d9dc14f35f3c55e5fc987aaa48d_prof);

    }

    public function getTemplateName()
    {
        return "casos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  107 => 43,  101 => 40,  95 => 37,  85 => 30,  78 => 26,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Casos</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idcaso</th>*/
/*                 <td>{{ caso.idCaso }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nocaso</th>*/
/*                 <td>{{ caso.noCaso }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechacaso</th>*/
/*                 <td>{% if caso.fechaCaso %}{{ caso.fechaCaso|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Pruebascaso</th>*/
/*                 <td>{{ caso.pruebasCaso }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Asignatariocaso</th>*/
/*                 <td>{{ caso.asignatarioCaso }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estadocaso</th>*/
/*                 <td>{{ caso.estadoCaso }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('casos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('casos_edit', { 'id': caso.idCaso }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
