<?php

/* tipocaso/show.html.twig */
class __TwigTemplate_4202033f9f0c70ef76852f1692e3548b6832344b0bbfda2229df9f4cc0659135 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tipocaso/show.html.twig", 1);
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
        $__internal_9d6d97511540c730a1291bd49b9225cc926b6a120a853e5c4bd7692b50609b77 = $this->env->getExtension("native_profiler");
        $__internal_9d6d97511540c730a1291bd49b9225cc926b6a120a853e5c4bd7692b50609b77->enter($__internal_9d6d97511540c730a1291bd49b9225cc926b6a120a853e5c4bd7692b50609b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocaso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d6d97511540c730a1291bd49b9225cc926b6a120a853e5c4bd7692b50609b77->leave($__internal_9d6d97511540c730a1291bd49b9225cc926b6a120a853e5c4bd7692b50609b77_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35aabd5820bd41de49d8768ba382b5e7b4c4b95ed55a289c889bd3d934b134b7 = $this->env->getExtension("native_profiler");
        $__internal_35aabd5820bd41de49d8768ba382b5e7b4c4b95ed55a289c889bd3d934b134b7->enter($__internal_35aabd5820bd41de49d8768ba382b5e7b4c4b95ed55a289c889bd3d934b134b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tipo de caso</h1>

    <table>
        <tbody>
            <tr>
                <th>Id tipo</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocaso"]) ? $context["tipocaso"] : $this->getContext($context, "tipocaso")), "idTipo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocaso"]) ? $context["tipocaso"] : $this->getContext($context, "tipocaso")), "tipo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado tipo</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["tipocaso"]) ? $context["tipocaso"] : $this->getContext($context, "tipocaso")), "estadoTipo", array())) {
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
        echo $this->env->getExtension('routing')->getPath("tipocaso_index");
        echo "\">Regresar a la lista</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocaso_edit", array("id" => $this->getAttribute((isset($context["tipocaso"]) ? $context["tipocaso"] : $this->getContext($context, "tipocaso")), "idTipo", array()))), "html", null, true);
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
        
        $__internal_35aabd5820bd41de49d8768ba382b5e7b4c4b95ed55a289c889bd3d934b134b7->leave($__internal_35aabd5820bd41de49d8768ba382b5e7b4c4b95ed55a289c889bd3d934b134b7_prof);

    }

    public function getTemplateName()
    {
        return "tipocaso/show.html.twig";
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
/*     <h1>Tipo de caso</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id tipo</th>*/
/*                 <td>{{ tipocaso.idTipo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipo</th>*/
/*                 <td>{{ tipocaso.tipo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estado tipo</th>*/
/*                 <td>{% if tipocaso.estadoTipo %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipocaso_index') }}">Regresar a la lista</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('tipocaso_edit', { 'id': tipocaso.idTipo }) }}">Editar</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
