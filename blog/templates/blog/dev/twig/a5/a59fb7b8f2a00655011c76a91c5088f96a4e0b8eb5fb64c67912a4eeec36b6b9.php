<?php

/* paises/index.html.twig */
class __TwigTemplate_ae9c3642f8ecfc9913edd82d1fbcdfe3b9f0a58ae219929a03ccf89a2ac4be73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "paises/index.html.twig", 1);
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
        $__internal_6221fabee027ee956592bcecbe4a88f048c76baae15a7e213515e832b513c683 = $this->env->getExtension("native_profiler");
        $__internal_6221fabee027ee956592bcecbe4a88f048c76baae15a7e213515e832b513c683->enter($__internal_6221fabee027ee956592bcecbe4a88f048c76baae15a7e213515e832b513c683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paises/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6221fabee027ee956592bcecbe4a88f048c76baae15a7e213515e832b513c683->leave($__internal_6221fabee027ee956592bcecbe4a88f048c76baae15a7e213515e832b513c683_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7c833b8a3bd6f6faae5dabaa09aef2984a772f00343e02df1aad1944201a247 = $this->env->getExtension("native_profiler");
        $__internal_a7c833b8a3bd6f6faae5dabaa09aef2984a772f00343e02df1aad1944201a247->enter($__internal_a7c833b8a3bd6f6faae5dabaa09aef2984a772f00343e02df1aad1944201a247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Listar Paises</h1>

    <table>
        <thead>
            <tr>
                <th>Id pais</th>
                <th>Pais</th>
                <th>Estadopais</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paises"]) ? $context["paises"] : $this->getContext($context, "paises")));
        foreach ($context['_seq'] as $context["_key"] => $context["paise"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paises_show", array("id" => $this->getAttribute($context["paise"], "idPais", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["paise"], "idPais", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["paise"], "pais", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["paise"], "estadoPais", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paises_show", array("id" => $this->getAttribute($context["paise"], "idPais", array()))), "html", null, true);
            echo "\">Ver</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paises_edit", array("id" => $this->getAttribute($context["paise"], "idPais", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("paises_new");
        echo "\">Crear nuevo pais</a>
        </li>
    </ul>
";
        
        $__internal_a7c833b8a3bd6f6faae5dabaa09aef2984a772f00343e02df1aad1944201a247->leave($__internal_a7c833b8a3bd6f6faae5dabaa09aef2984a772f00343e02df1aad1944201a247_prof);

    }

    public function getTemplateName()
    {
        return "paises/index.html.twig";
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
/*     <h1>Listar Paises</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id pais</th>*/
/*                 <th>Pais</th>*/
/*                 <th>Estadopais</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for paise in paises %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('paises_show', { 'id': paise.idPais }) }}">{{ paise.idPais }}</a></td>*/
/*                 <td>{{ paise.pais }}</td>*/
/*                 <td>{% if paise.estadoPais %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('paises_show', { 'id': paise.idPais }) }}">Ver</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('paises_edit', { 'id': paise.idPais }) }}">Editar</a>*/
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
/*             <a href="{{ path('paises_new') }}">Crear nuevo pais</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
