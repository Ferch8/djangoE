<?php

/* personas/index.html.twig */
class __TwigTemplate_eb01a92a5153a868112a3f11e2e4e8945ea535d8f7744832cfc02afb5b6798f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "personas/index.html.twig", 1);
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
        $__internal_f992ef31cd8c6454eb2cb9767ecce76603caa7806f4d314c470441367ed92dd3 = $this->env->getExtension("native_profiler");
        $__internal_f992ef31cd8c6454eb2cb9767ecce76603caa7806f4d314c470441367ed92dd3->enter($__internal_f992ef31cd8c6454eb2cb9767ecce76603caa7806f4d314c470441367ed92dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f992ef31cd8c6454eb2cb9767ecce76603caa7806f4d314c470441367ed92dd3->leave($__internal_f992ef31cd8c6454eb2cb9767ecce76603caa7806f4d314c470441367ed92dd3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8771221b879fe4285d5d097f501800a9a669bb9614a65173f336037c10b342a3 = $this->env->getExtension("native_profiler");
        $__internal_8771221b879fe4285d5d097f501800a9a669bb9614a65173f336037c10b342a3->enter($__internal_8771221b879fe4285d5d097f501800a9a669bb9614a65173f336037c10b342a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Personas list</h1>

    <table>
        <thead>
            <tr>
                <th>Idpersona</th>
                <th>Nombrepersona</th>
                <th>Telefonopersona</th>
                <th>Direccionpersona</th>
                <th>Emailpersona</th>
                <th>Usuariopersona</th>
                <th>Contraseñapersona</th>
                <th>Estadopersona</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personas"]) ? $context["personas"] : $this->getContext($context, "personas")));
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personas_show", array("id" => $this->getAttribute($context["persona"], "idPersona", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "idPersona", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombrePersona", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "telefonoPersona", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "direccionPersona", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "emailPersona", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "usuarioPersona", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "contrasenaPersona", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "estadoPersona", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "role", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personas_show", array("id" => $this->getAttribute($context["persona"], "idPersona", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personas_edit", array("id" => $this->getAttribute($context["persona"], "idPersona", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("personas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_8771221b879fe4285d5d097f501800a9a669bb9614a65173f336037c10b342a3->leave($__internal_8771221b879fe4285d5d097f501800a9a669bb9614a65173f336037c10b342a3_prof);

    }

    public function getTemplateName()
    {
        return "personas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  126 => 45,  114 => 39,  108 => 36,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Personas list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idpersona</th>*/
/*                 <th>Nombrepersona</th>*/
/*                 <th>Telefonopersona</th>*/
/*                 <th>Direccionpersona</th>*/
/*                 <th>Emailpersona</th>*/
/*                 <th>Usuariopersona</th>*/
/*                 <th>Contraseñapersona</th>*/
/*                 <th>Estadopersona</th>*/
/*                 <th>Role</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for persona in personas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('personas_show', { 'id': persona.idPersona }) }}">{{ persona.idPersona }}</a></td>*/
/*                 <td>{{ persona.nombrePersona }}</td>*/
/*                 <td>{{ persona.telefonoPersona }}</td>*/
/*                 <td>{{ persona.direccionPersona }}</td>*/
/*                 <td>{{ persona.emailPersona }}</td>*/
/*                 <td>{{ persona.usuarioPersona }}</td>*/
/*                 <td>{{ persona.contrasenaPersona }}</td>*/
/*                 <td>{{ persona.estadoPersona }}</td>*/
/*                 <td>{{ persona.role }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('personas_show', { 'id': persona.idPersona }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('personas_edit', { 'id': persona.idPersona }) }}">edit</a>*/
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
/*             <a href="{{ path('personas_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
