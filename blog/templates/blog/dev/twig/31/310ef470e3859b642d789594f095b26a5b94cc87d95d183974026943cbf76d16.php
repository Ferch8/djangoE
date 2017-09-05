<?php

/* tipocaso/index.html.twig */
class __TwigTemplate_9c4ce74a30255fc7c3f122403322a445d3f39e73084aec857eb48427efc2c64c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tipocaso/index.html.twig", 1);
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
        $__internal_d9ca80de56dc5bbc99203be690f1ed994b682c03261cb1404a3fc8c0d855f60c = $this->env->getExtension("native_profiler");
        $__internal_d9ca80de56dc5bbc99203be690f1ed994b682c03261cb1404a3fc8c0d855f60c->enter($__internal_d9ca80de56dc5bbc99203be690f1ed994b682c03261cb1404a3fc8c0d855f60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocaso/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9ca80de56dc5bbc99203be690f1ed994b682c03261cb1404a3fc8c0d855f60c->leave($__internal_d9ca80de56dc5bbc99203be690f1ed994b682c03261cb1404a3fc8c0d855f60c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67583757a7145647e97f979096b5ba1d7655ff8f4ba8d9e3b4821e73124fa76f = $this->env->getExtension("native_profiler");
        $__internal_67583757a7145647e97f979096b5ba1d7655ff8f4ba8d9e3b4821e73124fa76f->enter($__internal_67583757a7145647e97f979096b5ba1d7655ff8f4ba8d9e3b4821e73124fa76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista tipo de caso</h1>

    <table>
        <thead>
            <tr>
                <th>Id tipo</th>
                <th>Tipo</th>
                <th>Estado tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipocasos"]) ? $context["tipocasos"] : $this->getContext($context, "tipocasos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocaso"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocaso_show", array("id" => $this->getAttribute($context["tipocaso"], "idTipo", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocaso"], "idTipo", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocaso"], "tipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["tipocaso"], "estadoTipo", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocaso_show", array("id" => $this->getAttribute($context["tipocaso"], "idTipo", array()))), "html", null, true);
            echo "\">Ver</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocaso_edit", array("id" => $this->getAttribute($context["tipocaso"], "idTipo", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipocaso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("tipocaso_new");
        echo "\">Crear nuevo tipo de caso</a>
        </li>
    </ul>
";
        
        $__internal_67583757a7145647e97f979096b5ba1d7655ff8f4ba8d9e3b4821e73124fa76f->leave($__internal_67583757a7145647e97f979096b5ba1d7655ff8f4ba8d9e3b4821e73124fa76f_prof);

    }

    public function getTemplateName()
    {
        return "tipocaso/index.html.twig";
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
/*     <h1>Lista tipo de caso</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id tipo</th>*/
/*                 <th>Tipo</th>*/
/*                 <th>Estado tipo</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for tipocaso in tipocasos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('tipocaso_show', { 'id': tipocaso.idTipo }) }}">{{ tipocaso.idTipo }}</a></td>*/
/*                 <td>{{ tipocaso.tipo }}</td>*/
/*                 <td>{% if tipocaso.estadoTipo %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('tipocaso_show', { 'id': tipocaso.idTipo }) }}">Ver</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('tipocaso_edit', { 'id': tipocaso.idTipo }) }}">Editar</a>*/
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
/*             <a href="{{ path('tipocaso_new') }}">Crear nuevo tipo de caso</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
