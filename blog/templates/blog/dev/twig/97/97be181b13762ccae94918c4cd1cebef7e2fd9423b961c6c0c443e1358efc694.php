<?php

/* laborales/index.html.twig */
class __TwigTemplate_2fbbae8c800fdd5b43888c78a3d84d6e24fa8e7cc04790d7de15027063280e67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "laborales/index.html.twig", 1);
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
        $__internal_cf297483bda608dd4108a2223aa2114ee50ee03383f9616fa4914b8c7683b54d = $this->env->getExtension("native_profiler");
        $__internal_cf297483bda608dd4108a2223aa2114ee50ee03383f9616fa4914b8c7683b54d->enter($__internal_cf297483bda608dd4108a2223aa2114ee50ee03383f9616fa4914b8c7683b54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "laborales/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf297483bda608dd4108a2223aa2114ee50ee03383f9616fa4914b8c7683b54d->leave($__internal_cf297483bda608dd4108a2223aa2114ee50ee03383f9616fa4914b8c7683b54d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df17dece0c82c2d6ed482eef39e6871f3de2f639614dd2e3597079872f5fef69 = $this->env->getExtension("native_profiler");
        $__internal_df17dece0c82c2d6ed482eef39e6871f3de2f639614dd2e3597079872f5fef69->enter($__internal_df17dece0c82c2d6ed482eef39e6871f3de2f639614dd2e3597079872f5fef69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Laborales list</h1>

    <table>
        <thead>
            <tr>
                <th>Idtipolaboral</th>
                <th>Fechainicio</th>
                <th>Fechafin</th>
                <th>Salario</th>
                <th>Estadolaboral</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["laborales"]) ? $context["laborales"] : $this->getContext($context, "laborales")));
        foreach ($context['_seq'] as $context["_key"] => $context["laborale"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("laborales_show", array("id" => $this->getAttribute($context["laborale"], "idTipolaboral", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["laborale"], "idTipolaboral", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["laborale"], "fechaInicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["laborale"], "fechaInicio", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["laborale"], "fechaFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["laborale"], "fechaFin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["laborale"], "salario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["laborale"], "estadoLaboral", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("laborales_show", array("id" => $this->getAttribute($context["laborale"], "idTipolaboral", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("laborales_edit", array("id" => $this->getAttribute($context["laborale"], "idTipolaboral", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laborale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    
";
        
        $__internal_df17dece0c82c2d6ed482eef39e6871f3de2f639614dd2e3597079872f5fef69->leave($__internal_df17dece0c82c2d6ed482eef39e6871f3de2f639614dd2e3597079872f5fef69_prof);

    }

    public function getTemplateName()
    {
        return "laborales/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  102 => 31,  96 => 28,  85 => 24,  81 => 23,  75 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Laborales list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idtipolaboral</th>*/
/*                 <th>Fechainicio</th>*/
/*                 <th>Fechafin</th>*/
/*                 <th>Salario</th>*/
/*                 <th>Estadolaboral</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for laborale in laborales %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('laborales_show', { 'id': laborale.idTipolaboral }) }}">{{ laborale.idTipolaboral }}</a></td>*/
/*                 <td>{% if laborale.fechaInicio %}{{ laborale.fechaInicio|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if laborale.fechaFin %}{{ laborale.fechaFin|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ laborale.salario }}</td>*/
/*                 <td>{% if laborale.estadoLaboral %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('laborales_show', { 'id': laborale.idTipolaboral }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('laborales_edit', { 'id': laborale.idTipolaboral }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
