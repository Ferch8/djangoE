<?php

/* estudiantes/index.html.twig */
class __TwigTemplate_5d78ae685dd1f5b483056250aa08c7668dca210e972f7b780f0b26d3a2e64694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estudiantes/index.html.twig", 1);
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
        $__internal_1006e1998b5cdf67b187bfc5199644ee72a146fa33ff035f754c9d4766e3cdd7 = $this->env->getExtension("native_profiler");
        $__internal_1006e1998b5cdf67b187bfc5199644ee72a146fa33ff035f754c9d4766e3cdd7->enter($__internal_1006e1998b5cdf67b187bfc5199644ee72a146fa33ff035f754c9d4766e3cdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1006e1998b5cdf67b187bfc5199644ee72a146fa33ff035f754c9d4766e3cdd7->leave($__internal_1006e1998b5cdf67b187bfc5199644ee72a146fa33ff035f754c9d4766e3cdd7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44e86c0d2af17fcc569f232b144a603aefd2f4bd6c6d6956d454d4317365f444 = $this->env->getExtension("native_profiler");
        $__internal_44e86c0d2af17fcc569f232b144a603aefd2f4bd6c6d6956d454d4317365f444->enter($__internal_44e86c0d2af17fcc569f232b144a603aefd2f4bd6c6d6956d454d4317365f444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes list</h1>

    <table>
        <thead>
            <tr>
                <th>Idestudiante</th>
                <th>Carneestudiante</th>
                <th>Cierrepensum</th>
                <th>Estadoestudiante</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estudiantes"]) ? $context["estudiantes"] : $this->getContext($context, "estudiantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["estudiante"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_show", array("id" => $this->getAttribute($context["estudiante"], "idEstudiante", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "idEstudiante", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "carneEstudiante", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["estudiante"], "cierrePensum", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "estadoEstudiante", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_show", array("id" => $this->getAttribute($context["estudiante"], "idEstudiante", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_edit", array("id" => $this->getAttribute($context["estudiante"], "idEstudiante", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("estudiantes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_44e86c0d2af17fcc569f232b144a603aefd2f4bd6c6d6956d454d4317365f444->leave($__internal_44e86c0d2af17fcc569f232b144a603aefd2f4bd6c6d6956d454d4317365f444_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  105 => 35,  93 => 29,  87 => 26,  80 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Estudiantes list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idestudiante</th>*/
/*                 <th>Carneestudiante</th>*/
/*                 <th>Cierrepensum</th>*/
/*                 <th>Estadoestudiante</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for estudiante in estudiantes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('estudiantes_show', { 'id': estudiante.idEstudiante }) }}">{{ estudiante.idEstudiante }}</a></td>*/
/*                 <td>{{ estudiante.carneEstudiante }}</td>*/
/*                 <td>{% if estudiante.cierrePensum %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ estudiante.estadoEstudiante }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('estudiantes_show', { 'id': estudiante.idEstudiante }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('estudiantes_edit', { 'id': estudiante.idEstudiante }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
