<?php

/* tribunales/show.html.twig */
class __TwigTemplate_d9dd60e6cc0c8965566bec08bd85525058c1793a3152b06bde18396c1cc25537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tribunales/show.html.twig", 1);
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
        $__internal_469871b401f37681685b2a0a8b3e6953f6527969ecb7363f5c317b2b1d0914b9 = $this->env->getExtension("native_profiler");
        $__internal_469871b401f37681685b2a0a8b3e6953f6527969ecb7363f5c317b2b1d0914b9->enter($__internal_469871b401f37681685b2a0a8b3e6953f6527969ecb7363f5c317b2b1d0914b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tribunales/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_469871b401f37681685b2a0a8b3e6953f6527969ecb7363f5c317b2b1d0914b9->leave($__internal_469871b401f37681685b2a0a8b3e6953f6527969ecb7363f5c317b2b1d0914b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_945c1a05d93d7348237994d24035d6e09badaa6b0259cd1e76787ede9fe26bec = $this->env->getExtension("native_profiler");
        $__internal_945c1a05d93d7348237994d24035d6e09badaa6b0259cd1e76787ede9fe26bec->enter($__internal_945c1a05d93d7348237994d24035d6e09badaa6b0259cd1e76787ede9fe26bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tribunales</h1>

    <table>
        <tbody>
            <tr>
                <th>Id tribunal</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tribunale"]) ? $context["tribunale"] : $this->getContext($context, "tribunale")), "idTribunal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tribunal</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tribunale"]) ? $context["tribunale"] : $this->getContext($context, "tribunale")), "tribunal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado tribunal</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["tribunale"]) ? $context["tribunale"] : $this->getContext($context, "tribunale")), "estadoTribunal", array())) {
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
        echo $this->env->getExtension('routing')->getPath("tribunales_index");
        echo "\">Regresar a la lista</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tribunales_edit", array("id" => $this->getAttribute((isset($context["tribunale"]) ? $context["tribunale"] : $this->getContext($context, "tribunale")), "idTribunal", array()))), "html", null, true);
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
        
        $__internal_945c1a05d93d7348237994d24035d6e09badaa6b0259cd1e76787ede9fe26bec->leave($__internal_945c1a05d93d7348237994d24035d6e09badaa6b0259cd1e76787ede9fe26bec_prof);

    }

    public function getTemplateName()
    {
        return "tribunales/show.html.twig";
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
/*     <h1>Tribunales</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id tribunal</th>*/
/*                 <td>{{ tribunale.idTribunal }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tribunal</th>*/
/*                 <td>{{ tribunale.tribunal }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estado tribunal</th>*/
/*                 <td>{% if tribunale.estadoTribunal %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tribunales_index') }}">Regresar a la lista</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('tribunales_edit', { 'id': tribunale.idTribunal }) }}">Editar</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
