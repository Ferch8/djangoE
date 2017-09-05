<?php

/* tribunales/index.html.twig */
class __TwigTemplate_e5dea3c9f0be586a51dadfd25f1206e6ba6b88eea57ac347d5e3234f939cf22d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tribunales/index.html.twig", 1);
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
        $__internal_c1da6af58889a388ad1ff2754f8c630486dcf8aa789b598ccb54db96929b4878 = $this->env->getExtension("native_profiler");
        $__internal_c1da6af58889a388ad1ff2754f8c630486dcf8aa789b598ccb54db96929b4878->enter($__internal_c1da6af58889a388ad1ff2754f8c630486dcf8aa789b598ccb54db96929b4878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tribunales/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1da6af58889a388ad1ff2754f8c630486dcf8aa789b598ccb54db96929b4878->leave($__internal_c1da6af58889a388ad1ff2754f8c630486dcf8aa789b598ccb54db96929b4878_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a4663c0ae503c3d479340581fb77a550e017f4c0bcb96da60db32ab54246e52 = $this->env->getExtension("native_profiler");
        $__internal_1a4663c0ae503c3d479340581fb77a550e017f4c0bcb96da60db32ab54246e52->enter($__internal_1a4663c0ae503c3d479340581fb77a550e017f4c0bcb96da60db32ab54246e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista de Tribunales</h1>

    <table>
        <thead>
            <tr>
                <th>Id tribunal</th>
                <th>Tribunal</th>
                <th>Estado tribunal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tribunales"]) ? $context["tribunales"] : $this->getContext($context, "tribunales")));
        foreach ($context['_seq'] as $context["_key"] => $context["tribunale"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tribunales_show", array("id" => $this->getAttribute($context["tribunale"], "idTribunal", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tribunale"], "idTribunal", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tribunale"], "tribunal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["tribunale"], "estadoTribunal", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tribunales_show", array("id" => $this->getAttribute($context["tribunale"], "idTribunal", array()))), "html", null, true);
            echo "\">Ver</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tribunales_edit", array("id" => $this->getAttribute($context["tribunale"], "idTribunal", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tribunale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("tribunales_new");
        echo "\">Crear nuevo tribunal</a>
        </li>
    </ul>
";
        
        $__internal_1a4663c0ae503c3d479340581fb77a550e017f4c0bcb96da60db32ab54246e52->leave($__internal_1a4663c0ae503c3d479340581fb77a550e017f4c0bcb96da60db32ab54246e52_prof);

    }

    public function getTemplateName()
    {
        return "tribunales/index.html.twig";
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
/*     <h1>Lista de Tribunales</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id tribunal</th>*/
/*                 <th>Tribunal</th>*/
/*                 <th>Estado tribunal</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for tribunale in tribunales %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('tribunales_show', { 'id': tribunale.idTribunal }) }}">{{ tribunale.idTribunal }}</a></td>*/
/*                 <td>{{ tribunale.tribunal }}</td>*/
/*                 <td>{% if tribunale.estadoTribunal %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('tribunales_show', { 'id': tribunale.idTribunal }) }}">Ver</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('tribunales_edit', { 'id': tribunale.idTribunal }) }}">Editar</a>*/
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
/*             <a href="{{ path('tribunales_new') }}">Crear nuevo tribunal</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
