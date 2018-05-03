<?php

/* templates/partials/_flash.twig */
class __TwigTemplate_9206483e5aca9b86b7c778b0242f45190ce14a6c506eacd628c687cc22e0fc19 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "has", array(0 => "error"), "method")) {
            // line 3
            echo "    <div>
        ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "get", array(0 => "error"), "method"), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "templates/partials/_flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  31 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    {% if flash.has('error') %}
    <div>
        {{ flash.get('error') }}
    </div>
    {% endif %}
</div>", "templates/partials/_flash.twig", "/var/www/html/views/templates/partials/_flash.twig");
    }
}
