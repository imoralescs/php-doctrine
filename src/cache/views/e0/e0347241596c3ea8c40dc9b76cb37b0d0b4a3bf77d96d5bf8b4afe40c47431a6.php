<?php

/* templates/partials/_navigation.twig */
class __TwigTemplate_9ebdc620583ed98f3ecd7247e39fac2d12712e06b0f5b1b031de2410e2f28ffa extends Twig_Template
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
        echo "<nav class=\"nav\">
    <a class=\"nav__logo\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['NamespacesName\Views\Extensions\PathExtension']->route("home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", array(0 => "app.name"), "method"), "html", null, true);
        echo "</a>
    <ul class=\"nav__primary\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "check", array())) {
            // line 5
            echo "        <li class=\"nav__item\">
            <a class=\"nav__item-link\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['NamespacesName\Views\Extensions\PathExtension']->route("dashboard"), "html", null, true);
            echo "\">Dashboard</a>
        </li>
        ";
        }
        // line 9
        echo "    </ul>
    <ul class=\"nav__secondary\">
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "check", array())) {
            // line 12
            echo "            <li class=\"nav__item\">
                <a class=\"nav__item-link\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "user", array()), "name", array()), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav__item\">
                <a class=\"nav__item-link\" href=\"#\" onclick=\"event.preventDefault(); document.getElementById('logout').submit();\">Sign out</a>
            </li>
        ";
        } else {
            // line 19
            echo "            <li class=\"nav__item\">
                <a class=\"nav__item-link\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['NamespacesName\Views\Extensions\PathExtension']->route("auth.login"), "html", null, true);
            echo "\">Sign in</a>
            </li>
            <li class=\"nav__item\">
                <a class=\"nav__item-link\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['NamespacesName\Views\Extensions\PathExtension']->route("auth.register"), "html", null, true);
            echo "\">Create an account</a>
            </li>
        ";
        }
        // line 26
        echo "    </ul>
</nav>
<form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['NamespacesName\Views\Extensions\PathExtension']->route("auth.logout"), "html", null, true);
        echo "\" method=\"POST\" style=\"display:none;\" id=\"logout\">
    <input type=\"hidden\" name=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "key", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "token", array()), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "templates/partials/_navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  81 => 28,  77 => 26,  71 => 23,  65 => 20,  62 => 19,  53 => 13,  50 => 12,  48 => 11,  44 => 9,  38 => 6,  35 => 5,  33 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"nav\">
    <a class=\"nav__logo\" href=\"{{ route('home') }}\">{{ config.get('app.name') }}</a>
    <ul class=\"nav__primary\">
        {% if auth.check %}
        <li class=\"nav__item\">
            <a class=\"nav__item-link\" href=\"{{ route('dashboard') }}\">Dashboard</a>
        </li>
        {% endif %}
    </ul>
    <ul class=\"nav__secondary\">
        {% if auth.check %}
            <li class=\"nav__item\">
                <a class=\"nav__item-link\">{{ auth.user.name }}</a>
            </li>
            <li class=\"nav__item\">
                <a class=\"nav__item-link\" href=\"#\" onclick=\"event.preventDefault(); document.getElementById('logout').submit();\">Sign out</a>
            </li>
        {% else %}
            <li class=\"nav__item\">
                <a class=\"nav__item-link\" href=\"{{ route('auth.login') }}\">Sign in</a>
            </li>
            <li class=\"nav__item\">
                <a class=\"nav__item-link\" href=\"{{ route('auth.register') }}\">Create an account</a>
            </li>
        {% endif %}
    </ul>
</nav>
<form action=\"{{ route('auth.logout') }}\" method=\"POST\" style=\"display:none;\" id=\"logout\">
    <input type=\"hidden\" name=\"{{ csrf.key }}\" value=\"{{ csrf.token }}\">
</form>", "templates/partials/_navigation.twig", "/var/www/html/views/templates/partials/_navigation.twig");
    }
}
