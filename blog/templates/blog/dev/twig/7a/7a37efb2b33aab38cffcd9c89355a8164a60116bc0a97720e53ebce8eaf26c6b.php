<?php

/* prestaciones/show.html.twig */
class __TwigTemplate_57780de6e6bc3843f49629184c66e50d8d46fa59a342e4ed69216b62211da06b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "prestaciones/show.html.twig", 1);
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
        $__internal_38362f1b71423ffcf1089b761dbf845c0db30bed5995ba1185ffde106485fb56 = $this->env->getExtension("native_profiler");
        $__internal_38362f1b71423ffcf1089b761dbf845c0db30bed5995ba1185ffde106485fb56->enter($__internal_38362f1b71423ffcf1089b761dbf845c0db30bed5995ba1185ffde106485fb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prestaciones/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38362f1b71423ffcf1089b761dbf845c0db30bed5995ba1185ffde106485fb56->leave($__internal_38362f1b71423ffcf1089b761dbf845c0db30bed5995ba1185ffde106485fb56_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_899df22adef640b4e1e872b26bd97ef9cc806ffa274d0ad46a86434313e67c56 = $this->env->getExtension("native_profiler");
        $__internal_899df22adef640b4e1e872b26bd97ef9cc806ffa274d0ad46a86434313e67c56->enter($__internal_899df22adef640b4e1e872b26bd97ef9cc806ffa274d0ad46a86434313e67c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Prestaciones</h1>

    <table>
        <tbody>
            <tr>
                <th>Id prestaciones</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prestacione"]) ? $context["prestacione"] : $this->getContext($context, "prestacione")), "idPrestaciones", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prestacion</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prestacione"]) ? $context["prestacione"] : $this->getContext($context, "prestacione")), "prestacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado prestacion</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["prestacione"]) ? $context["prestacione"] : $this->getContext($context, "prestacione")), "estadoPrestacion", array())) {
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("prestaciones_index");
        echo "\">Regresar a la lista</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestaciones_edit", array("id" => $this->getAttribute((isset($context["prestacione"]) ? $context["prestacione"] : $this->getContext($context, "prestacione")), "idPrestaciones", array()))), "html", null, true);
        echo "\">Editar</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_899df22adef640b4e1e872b26bd97ef9cc806ffa274d0ad46a86434313e67c56->leave($__internal_899df22adef640b4e1e872b26bd97ef9cc806ffa274d0ad46a86434313e67c56_prof);

    }

    public function getTemplateName()
    {
        return "prestaciones/show.html.twig";
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
/*     <h1>Prestaciones</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id prestaciones</th>*/
/*                 <td>{{ prestacione.idPrestaciones }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prestacion</th>*/
/*                 <td>{{ prestacione.prestacion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estado prestacion</th>*/
/*                 <td>{% if prestacione.estadoPrestacion %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('prestaciones_index') }}">Regresar a la lista</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('prestaciones_edit', { 'id': prestacione.idPrestaciones }) }}">Editar</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
