<?php

/* trabajos/show.html.twig */
class __TwigTemplate_94fb7652d8633309f0e9c8eeee42045404160c1e11d6ad2fce76b998cec5c50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "trabajos/show.html.twig", 1);
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
        $__internal_9bac50f6948753be9e37a732cfe4e60a235be0497140def4b5b365f3771ffa7d = $this->env->getExtension("native_profiler");
        $__internal_9bac50f6948753be9e37a732cfe4e60a235be0497140def4b5b365f3771ffa7d->enter($__internal_9bac50f6948753be9e37a732cfe4e60a235be0497140def4b5b365f3771ffa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trabajos/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bac50f6948753be9e37a732cfe4e60a235be0497140def4b5b365f3771ffa7d->leave($__internal_9bac50f6948753be9e37a732cfe4e60a235be0497140def4b5b365f3771ffa7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_507249d97d86f89347921c034576617b9c4c63d0927212f6946ef9cfd4ea5ba3 = $this->env->getExtension("native_profiler");
        $__internal_507249d97d86f89347921c034576617b9c4c63d0927212f6946ef9cfd4ea5ba3->enter($__internal_507249d97d86f89347921c034576617b9c4c63d0927212f6946ef9cfd4ea5ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Trabajos</h1>

    <table>
        <tbody>
            <tr>
                <th>Id trabajo</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trabajo"]) ? $context["trabajo"] : $this->getContext($context, "trabajo")), "idTrabajo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Trabajo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trabajo"]) ? $context["trabajo"] : $this->getContext($context, "trabajo")), "trabajo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado trabajo</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["trabajo"]) ? $context["trabajo"] : $this->getContext($context, "trabajo")), "estadoTrabajo", array())) {
            echo "Activo";
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("trabajos_index");
        echo "\">Regresar al Listado</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_edit", array("id" => $this->getAttribute((isset($context["trabajo"]) ? $context["trabajo"] : $this->getContext($context, "trabajo")), "idTrabajo", array()))), "html", null, true);
        echo "\">Editar</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"eliminar\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_507249d97d86f89347921c034576617b9c4c63d0927212f6946ef9cfd4ea5ba3->leave($__internal_507249d97d86f89347921c034576617b9c4c63d0927212f6946ef9cfd4ea5ba3_prof);

    }

    public function getTemplateName()
    {
        return "trabajos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  88 => 31,  82 => 28,  76 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Trabajos</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id trabajo</th>*/
/*                 <td>{{ trabajo.idTrabajo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Trabajo</th>*/
/*                 <td>{{ trabajo.trabajo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estado trabajo</th>*/
/*                 <td>{% if trabajo.estadoTrabajo %}Activo{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('trabajos_index') }}">Regresar al Listado</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('trabajos_edit', { 'id': trabajo.idTrabajo }) }}">Editar</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="eliminar">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
