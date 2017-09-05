<?php

/* casos/index.html.twig */
class __TwigTemplate_7ed655fd9f31519648228778b7f274c9a971797866a63ff74e6d0f413e3afe67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "casos/index.html.twig", 1);
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
        $__internal_34e5b46ccfd37f4b7760be2a43c2e80ab3f2c65012965c729ca3864e6cf46076 = $this->env->getExtension("native_profiler");
        $__internal_34e5b46ccfd37f4b7760be2a43c2e80ab3f2c65012965c729ca3864e6cf46076->enter($__internal_34e5b46ccfd37f4b7760be2a43c2e80ab3f2c65012965c729ca3864e6cf46076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "casos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34e5b46ccfd37f4b7760be2a43c2e80ab3f2c65012965c729ca3864e6cf46076->leave($__internal_34e5b46ccfd37f4b7760be2a43c2e80ab3f2c65012965c729ca3864e6cf46076_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6c720fbaf05a2a5dbf8a223bc251fa6f52e505553a60bbeac292dbb1c068fc1 = $this->env->getExtension("native_profiler");
        $__internal_e6c720fbaf05a2a5dbf8a223bc251fa6f52e505553a60bbeac292dbb1c068fc1->enter($__internal_e6c720fbaf05a2a5dbf8a223bc251fa6f52e505553a60bbeac292dbb1c068fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Casos list</h1>

    <table>
        <thead>
            <tr>
                <th>Idcaso</th>
                <th>Nocaso</th>
                <th>Fechacaso</th>
                <th>Pruebascaso</th>
                <th>Asignatariocaso</th>
                <th>Estadocaso</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["casos"]) ? $context["casos"] : $this->getContext($context, "casos")));
        foreach ($context['_seq'] as $context["_key"] => $context["caso"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("casos_show", array("id" => $this->getAttribute($context["caso"], "idCaso", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["caso"], "idCaso", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["caso"], "noCaso", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["caso"], "fechaCaso", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["caso"], "fechaCaso", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["caso"], "pruebasCaso", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["caso"], "asignatarioCaso", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["caso"], "estadoCaso", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("casos_show", array("id" => $this->getAttribute($context["caso"], "idCaso", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("casos_edit", array("id" => $this->getAttribute($context["caso"], "idCaso", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("casos_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e6c720fbaf05a2a5dbf8a223bc251fa6f52e505553a60bbeac292dbb1c068fc1->leave($__internal_e6c720fbaf05a2a5dbf8a223bc251fa6f52e505553a60bbeac292dbb1c068fc1_prof);

    }

    public function getTemplateName()
    {
        return "casos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  88 => 26,  84 => 25,  80 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Casos list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idcaso</th>*/
/*                 <th>Nocaso</th>*/
/*                 <th>Fechacaso</th>*/
/*                 <th>Pruebascaso</th>*/
/*                 <th>Asignatariocaso</th>*/
/*                 <th>Estadocaso</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for caso in casos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('casos_show', { 'id': caso.idCaso }) }}">{{ caso.idCaso }}</a></td>*/
/*                 <td>{{ caso.noCaso }}</td>*/
/*                 <td>{% if caso.fechaCaso %}{{ caso.fechaCaso|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ caso.pruebasCaso }}</td>*/
/*                 <td>{{ caso.asignatarioCaso }}</td>*/
/*                 <td>{{ caso.estadoCaso }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('casos_show', { 'id': caso.idCaso }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('casos_edit', { 'id': caso.idCaso }) }}">edit</a>*/
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
/*             <a href="{{ path('casos_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
