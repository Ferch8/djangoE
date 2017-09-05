<?php

/* pretenciones/index.html.twig */
class __TwigTemplate_ebe23b292898a3facfb77cdcffb235a504c14d71e41cf51e63f314bb73b47a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "pretenciones/index.html.twig", 1);
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
        $__internal_14c23de0c8c91dc89254530976d14bc6ea1360e7816f89fc16f0dfb1bda28886 = $this->env->getExtension("native_profiler");
        $__internal_14c23de0c8c91dc89254530976d14bc6ea1360e7816f89fc16f0dfb1bda28886->enter($__internal_14c23de0c8c91dc89254530976d14bc6ea1360e7816f89fc16f0dfb1bda28886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pretenciones/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14c23de0c8c91dc89254530976d14bc6ea1360e7816f89fc16f0dfb1bda28886->leave($__internal_14c23de0c8c91dc89254530976d14bc6ea1360e7816f89fc16f0dfb1bda28886_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b8d129c325c1d844b18218495a8c6c7fc0947505a95b827d2abe2ea84f61b43 = $this->env->getExtension("native_profiler");
        $__internal_8b8d129c325c1d844b18218495a8c6c7fc0947505a95b827d2abe2ea84f61b43->enter($__internal_8b8d129c325c1d844b18218495a8c6c7fc0947505a95b827d2abe2ea84f61b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista de Pretenciones</h1>

    <table>
        <thead>
            <tr>
                <th>Id pretencion</th>
                <th>Pretencion procesal</th>
                <th>Estado pretencion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pretenciones"]) ? $context["pretenciones"] : $this->getContext($context, "pretenciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["pretencione"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pretenciones_show", array("id" => $this->getAttribute($context["pretencione"], "idPretencion", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pretencione"], "idPretencion", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["pretencione"], "pretencionProcesal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["pretencione"], "estadoPretencion", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pretenciones_show", array("id" => $this->getAttribute($context["pretencione"], "idPretencion", array()))), "html", null, true);
            echo "\">Ver</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pretenciones_edit", array("id" => $this->getAttribute($context["pretencione"], "idPretencion", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pretencione'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("pretenciones_new");
        echo "\">Crear nueva pretencion </a>
        </li>
    </ul>
";
        
        $__internal_8b8d129c325c1d844b18218495a8c6c7fc0947505a95b827d2abe2ea84f61b43->leave($__internal_8b8d129c325c1d844b18218495a8c6c7fc0947505a95b827d2abe2ea84f61b43_prof);

    }

    public function getTemplateName()
    {
        return "pretenciones/index.html.twig";
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
/*     <h1>Lista de Pretenciones</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id pretencion</th>*/
/*                 <th>Pretencion procesal</th>*/
/*                 <th>Estado pretencion</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for pretencione in pretenciones %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('pretenciones_show', { 'id': pretencione.idPretencion }) }}">{{ pretencione.idPretencion }}</a></td>*/
/*                 <td>{{ pretencione.pretencionProcesal }}</td>*/
/*                 <td>{% if pretencione.estadoPretencion %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('pretenciones_show', { 'id': pretencione.idPretencion }) }}">Ver</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('pretenciones_edit', { 'id': pretencione.idPretencion }) }}">Editar</a>*/
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
/*             <a href="{{ path('pretenciones_new') }}">Crear nueva pretencion </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
