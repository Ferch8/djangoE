<?php

/* prestaciones/index.html.twig */
class __TwigTemplate_7c36c938f4f5ba88de8ff41901090b8d19cbb4794a7bf173718fbde9ad61491a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "prestaciones/index.html.twig", 1);
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
        $__internal_94d77fb14889bf709734d318052287340838f37126d4c2bc3e362704899e048b = $this->env->getExtension("native_profiler");
        $__internal_94d77fb14889bf709734d318052287340838f37126d4c2bc3e362704899e048b->enter($__internal_94d77fb14889bf709734d318052287340838f37126d4c2bc3e362704899e048b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prestaciones/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94d77fb14889bf709734d318052287340838f37126d4c2bc3e362704899e048b->leave($__internal_94d77fb14889bf709734d318052287340838f37126d4c2bc3e362704899e048b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b8bb0d8cc67f0ce31e75c3ce25093e7b6dc11f71529d16248a31ae7c92853c1 = $this->env->getExtension("native_profiler");
        $__internal_3b8bb0d8cc67f0ce31e75c3ce25093e7b6dc11f71529d16248a31ae7c92853c1->enter($__internal_3b8bb0d8cc67f0ce31e75c3ce25093e7b6dc11f71529d16248a31ae7c92853c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista Prestaciones</h1>

    <table>
        <thead>
            <tr>
                <th>Id prestaciones</th>
                <th>Prestacion</th>
                <th>Estado prestacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestaciones"]) ? $context["prestaciones"] : $this->getContext($context, "prestaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["prestacione"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestaciones_show", array("id" => $this->getAttribute($context["prestacione"], "idPrestaciones", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prestacione"], "idPrestaciones", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["prestacione"], "prestacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["prestacione"], "estadoPrestacion", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestaciones_show", array("id" => $this->getAttribute($context["prestacione"], "idPrestaciones", array()))), "html", null, true);
            echo "\">Ver</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestaciones_edit", array("id" => $this->getAttribute($context["prestacione"], "idPrestaciones", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestacione'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("prestaciones_new");
        echo "\">Crear nueva prestacion</a>
        </li>
    </ul>
";
        
        $__internal_3b8bb0d8cc67f0ce31e75c3ce25093e7b6dc11f71529d16248a31ae7c92853c1->leave($__internal_3b8bb0d8cc67f0ce31e75c3ce25093e7b6dc11f71529d16248a31ae7c92853c1_prof);

    }

    public function getTemplateName()
    {
        return "prestaciones/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  100 => 33,  88 => 27,  82 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Lista Prestaciones</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id prestaciones</th>*/
/*                 <th>Prestacion</th>*/
/*                 <th>Estado prestacion</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for prestacione in prestaciones %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('prestaciones_show', { 'id': prestacione.idPrestaciones }) }}">{{ prestacione.idPrestaciones }}</a></td>*/
/*                 <td>{{ prestacione.prestacion }}</td>*/
/*                 <td>{% if prestacione.estadoPrestacion %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('prestaciones_show', { 'id': prestacione.idPrestaciones }) }}">Ver</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('prestaciones_edit', { 'id': prestacione.idPrestaciones }) }}">Editar</a>*/
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
/*             <a href="{{ path('prestaciones_new') }}">Crear nueva prestacion</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
