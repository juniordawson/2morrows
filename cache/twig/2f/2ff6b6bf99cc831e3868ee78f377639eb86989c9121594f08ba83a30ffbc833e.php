<?php

/* partials/base.html.twig */
class __TwigTemplate_53063351ae4813eefbd61f5ef348a081967be2755e1bb6bca9fc2da565c79d95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top' => array($this, 'block_top'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>



    ";
        // line 11
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Merriweather:400,900"), "method");
        // line 12
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i"), "method");
        // line 13
        echo "

    ";
        // line 15
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main.min.css"), "method");
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 17
        echo "    
      ";
        // line 18
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 20
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery"), "method");
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/navigation.js"), "method");
        // line 22
        echo "
      ";
        // line 23
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

    <link rel=\"icon\" href=\"";
        // line 25
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\">

</head>

<body>
    
";
        // line 31
        $this->displayBlock('top', $context, $blocks);
        // line 58
        echo "
  ";
        // line 59
        $this->displayBlock('main', $context, $blocks);
        // line 67
        echo "
    

  <footer class=\"padding-top padding-bottom grey-light\" id=\"footer\">
    <div class=\"container\">
      <div class=\"row\">
        
        <div class=\"small-50 text-center\">
          &nbsp;
        </div>

        <div class=\"small-50 text-center\">
          <ul class=\"clean-list\">
              ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 81
            echo "                  <li>
                      <a href=\"";
            // line 82
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
                          ";
            // line 83
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
                      </a>
                  </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "          </ul>
        </div>
      </div>

    </div>
  </footer>


</body>
</html>";
    }

    // line 31
    public function block_top($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"brand\">
      <a href=\"";
        // line 33
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
        ";
        // line 34
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "
      </a>
    </div>

    <section class=\"navigation\">
      <div class=\"nav-container\">
        <nav>
          <div class=\"nav-mobile\"><a id=\"nav-toggle\" href=\"#!\"><span></span></a></div>
          <ul class=\"nav-list\">
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 44
            echo "              ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 45
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 46
                echo "                <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                    <a href=\"";
                // line 47
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                        ";
                // line 48
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                    </a>
                </li>
              ";
            }
            // line 52
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "          </ul>
        </nav>
      </div>
    </section>
";
    }

    // line 59
    public function block_main($context, array $blocks = array())
    {
        // line 60
        echo "    <main>

        ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "
    </main>
  ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 63,  218 => 62,  212 => 64,  210 => 62,  206 => 60,  203 => 59,  195 => 53,  189 => 52,  182 => 48,  178 => 47,  173 => 46,  170 => 45,  167 => 44,  163 => 43,  151 => 34,  147 => 33,  144 => 32,  141 => 31,  128 => 87,  118 => 83,  114 => 82,  111 => 81,  107 => 80,  92 => 67,  90 => 59,  87 => 58,  85 => 31,  76 => 25,  71 => 23,  68 => 22,  65 => 21,  63 => 20,  58 => 18,  55 => 17,  52 => 16,  50 => 15,  46 => 13,  43 => 12,  41 => 11,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{% if header.title %}{{ header.title|e('html')}} - {% endif %}{{ site.title|e('html') }}</title>



    {% do assets.addCss('https://fonts.googleapis.com/css?family=Merriweather:400,900') %}
    {% do assets.addCss('https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i') %}


    {% do assets.addCss('theme://css/main.min.css') %}
    {% do assets.addCss('theme://css/custom.css') %}
    
      {{ assets.css() }}

    {% do assets.addJs('jquery') %}
    {% do assets.addJs('theme://js/navigation.js') %}

      {{ assets.js() }}

    <link rel=\"icon\" href=\"{{ url('theme://img/favicon.png') }}\">

</head>

<body>
    
{% block top %}
    <div class=\"brand\">
      <a href=\"{{ base_url == '' ? '/' : base_url }}\">
        {{ config.site.title }}
      </a>
    </div>

    <section class=\"navigation\">
      <div class=\"nav-container\">
        <nav>
          <div class=\"nav-mobile\"><a id=\"nav-toggle\" href=\"#!\"><span></span></a></div>
          <ul class=\"nav-list\">
            {% for page in pages.children.visible %}
              {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {{ page.menu }}
                    </a>
                </li>
              {% endif %}
            {% endfor %}
          </ul>
        </nav>
      </div>
    </section>
{% endblock %}

  {% block main %}
    <main>

        {% block content %}
        {% endblock %}

    </main>
  {% endblock %}

    

  <footer class=\"padding-top padding-bottom grey-light\" id=\"footer\">
    <div class=\"container\">
      <div class=\"row\">
        
        <div class=\"small-50 text-center\">
          &nbsp;
        </div>

        <div class=\"small-50 text-center\">
          <ul class=\"clean-list\">
              {% for page in pages.children.visible %}
                  <li>
                      <a href=\"{{ page.url }}\">
                          {{ page.menu }}
                      </a>
                  </li>
              {% endfor %}
          </ul>
        </div>
      </div>

    </div>
  </footer>


</body>
</html>", "partials/base.html.twig", "/Users/Steven/Documents/Web/WordPress-sites/grav-admin/user/themes/prime/templates/partials/base.html.twig");
    }
}
