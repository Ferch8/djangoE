<?php

/* tipoasuntos/index.html.twig */
class __TwigTemplate_4d30672042ee982588a01d93a43d0acdb38a89615827c4ae02cb7567640b4d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tipoasuntos/index.html.twig", 1);
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
        $__internal_12e000042be01ce543c61ad3e2714b312fa06004304d829cefff40e24f47cce3 = $this->env->getExtension("native_profiler");
        $__internal_12e000042be01ce543c61ad3e2714b312fa06004304d829cefff40e24f47cce3->enter($__internal_12e000042be01ce543c61ad3e2714b312fa06004304d829cefff40e24f47cce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipoasuntos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e000042be01ce543c61ad3e2714b312fa06004304d829cefff40e24f47cce3->leave($__internal_12e000042be01ce543c61ad3e2714b312fa06004304d829cefff40e24f47cce3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5dc3503d3fd878412e3f790e593f375d961d670ca9015dfe6c6db2d54803241 = $this->env->getExtension("native_profiler");
        $__internal_c5dc3503d3fd878412e3f790e593f375d961d670ca9015dfe6c6db2d54803241->enter($__internal_c5dc3503d3fd878412e3f790e593f375d961d670ca9015dfe6c6db2d54803241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lsta tipo de asuntos</h1>

    <table>
        <thead>
            <tr>
                <th>Id tipoasunto</th>
                <th>Asunto</th>
                <th>Estado asunto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipoasuntos"]) ? $context["tipoasuntos"] : $this->getContext($context, "tipoasuntos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoasunto"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoasuntos_show", array("id" => $this->getAttribute($context["tipoasunto"], "idTipoasunto", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoasunto"], "idTipoasunto", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoasunto"], "asunto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["tipoasunto"], "estadoAsunto", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoasuntos_show", array("id" => $this->getAttribute($context["tipoasunto"], "idTipoasunto", array()))), "html", null, true);
            echo "\">Ver</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoasuntos_edit", array("id" => $this->getAttribute($context["tipoasunto"], "idTipoasunto", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoasunto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("tipoasuntos_new");
        echo "\">Crear nuevo tipo de asunto</a>
        </li>
    </ul>
";
        
        $__internal_c5dc3503d3fd878412e3f790e593f375d961d670ca9015dfe6c6db2d54803241->leave($__internal_c5dc3503d3fd878412e3f790e593f375d961d670ca9015dfe6c6db2d54803241_prof);

    }

    public function getTemplateName()
    {
        return "tipoasuntos/index.html.twig";
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
/*     <h1>Lsta tipo de asuntos</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id tipoasunto</th>*/
/*                 <th>Asunto</th>*/
/*                 <th>Estado asunto</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for tipoasunto in tipoasuntos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('tipoasuntos_show', { 'id': tipoasunto.idTipoasunto }) }}">{{ tipoasunto.idTipoasunto }}</a></td>*/
/*                 <td>{{ tipoasunto.asunto }}</td>*/
/*                 <td>{% if tipoasunto.estadoAsunto %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('tipoasuntos_show', { 'id': tipoasunto.idTipoasunto }) }}">Ver</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('tipoasuntos_edit', { 'id': tipoasunto.idTipoasunto }) }}">Editar</a>*/
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
/*             <a href="{{ path('tipoasuntos_new') }}">Crear nuevo tipo de asunto</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
