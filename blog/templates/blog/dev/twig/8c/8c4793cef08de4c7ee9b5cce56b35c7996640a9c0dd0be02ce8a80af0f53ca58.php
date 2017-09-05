<?php

/* personas/show.html.twig */
class __TwigTemplate_49aed9764974ad965572ae06170a5b6a0859bc4179830c5cb98a22406353322d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "personas/show.html.twig", 1);
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
        $__internal_e515e0e03311d6f0385dc84259981f373bb4770f9f393371a50201fa9b6fd874 = $this->env->getExtension("native_profiler");
        $__internal_e515e0e03311d6f0385dc84259981f373bb4770f9f393371a50201fa9b6fd874->enter($__internal_e515e0e03311d6f0385dc84259981f373bb4770f9f393371a50201fa9b6fd874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personas/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e515e0e03311d6f0385dc84259981f373bb4770f9f393371a50201fa9b6fd874->leave($__internal_e515e0e03311d6f0385dc84259981f373bb4770f9f393371a50201fa9b6fd874_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_150403cf4c9bd44273639ba40d5877f559c4bf43105b06194ec99e6c95d4c510 = $this->env->getExtension("native_profiler");
        $__internal_150403cf4c9bd44273639ba40d5877f559c4bf43105b06194ec99e6c95d4c510->enter($__internal_150403cf4c9bd44273639ba40d5877f559c4bf43105b06194ec99e6c95d4c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Personas</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpersona</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "idPersona", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombrepersona</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "nombrePersona", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefonopersona</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "telefonoPersona", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccionpersona</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "direccionPersona", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emailpersona</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "emailPersona", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usuariopersona</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "usuarioPersona", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contraseñapersona</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "contraseñaPersona", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadopersona</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "estadoPersona", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "role", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("personas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personas_edit", array("id" => $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "idPersona", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_150403cf4c9bd44273639ba40d5877f559c4bf43105b06194ec99e6c95d4c510->leave($__internal_150403cf4c9bd44273639ba40d5877f559c4bf43105b06194ec99e6c95d4c510_prof);

    }

    public function getTemplateName()
    {
        return "personas/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 57,  126 => 55,  120 => 52,  114 => 49,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Personas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idpersona</th>*/
/*                 <td>{{ persona.idPersona }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombrepersona</th>*/
/*                 <td>{{ persona.nombrePersona }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefonopersona</th>*/
/*                 <td>{{ persona.telefonoPersona }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Direccionpersona</th>*/
/*                 <td>{{ persona.direccionPersona }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Emailpersona</th>*/
/*                 <td>{{ persona.emailPersona }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Usuariopersona</th>*/
/*                 <td>{{ persona.usuarioPersona }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contraseñapersona</th>*/
/*                 <td>{{ persona.contraseñaPersona }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estadopersona</th>*/
/*                 <td>{{ persona.estadoPersona }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Role</th>*/
/*                 <td>{{ persona.role }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('personas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('personas_edit', { 'id': persona.idPersona }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
