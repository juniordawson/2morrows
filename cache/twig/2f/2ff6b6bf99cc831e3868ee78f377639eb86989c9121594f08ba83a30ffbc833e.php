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


<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-icon-57x57.png");
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-icon-60x60.png");
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 28
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-icon-72x72.png");
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 29
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-icon-76x76.png");
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 30
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-icon-114x114.png");
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 31
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-icon-120x120.png");
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 32
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-icon-144x144.png");
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 33
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-icon-152x152.png");
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 34
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-icon-180x180.png");
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 35
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/android-icon-192x192.png");
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 36
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon-32x32.png");
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 37
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon-96x96.png");
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 38
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon-16x16.png");
        echo "\">
<link rel=\"manifest\" href=\"";
        // line 39
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/manifest.json");
        echo "\">
<meta name=\"msapplication-TileColor\" content=\"#ffffff\">
<meta name=\"msapplication-TileImage\" content=\"";
        // line 41
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/ms-icon-144x144.png");
        echo "\">
<meta name=\"theme-color\" content=\"#ffffff\">



</head>

<body>
    
";
        // line 50
        $this->displayBlock('top', $context, $blocks);
        // line 77
        echo "
  ";
        // line 78
        $this->displayBlock('main', $context, $blocks);
        // line 86
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
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 100
            echo "                  <li>
                      <a href=\"";
            // line 101
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
                          ";
            // line 102
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
                      </a>
                  </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "          </ul>
        </div>
      </div>

    </div>
  </footer>


</body>
</html>";
    }

    // line 50
    public function block_top($context, array $blocks = array())
    {
        // line 51
        echo "    <div class=\"brand\">
      <a href=\"";
        // line 52
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
        ";
        // line 53
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
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 63
            echo "              ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 64
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 65
                echo "                <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                    <a href=\"";
                // line 66
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                        ";
                // line 67
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                    </a>
                </li>
              ";
            }
            // line 71
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "          </ul>
        </nav>
      </div>
    </section>
";
    }

    // line 78
    public function block_main($context, array $blocks = array())
    {
        // line 79
        echo "    <main>

        ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "
    </main>
  ";
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
        // line 82
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
        return array (  282 => 82,  279 => 81,  273 => 83,  271 => 81,  267 => 79,  264 => 78,  256 => 72,  250 => 71,  243 => 67,  239 => 66,  234 => 65,  231 => 64,  228 => 63,  224 => 62,  212 => 53,  208 => 52,  205 => 51,  202 => 50,  189 => 106,  179 => 102,  175 => 101,  172 => 100,  168 => 99,  153 => 86,  151 => 78,  148 => 77,  146 => 50,  134 => 41,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  71 => 23,  68 => 22,  65 => 21,  63 => 20,  58 => 18,  55 => 17,  52 => 16,  50 => 15,  46 => 13,  43 => 12,  41 => 11,  30 => 7,  22 => 1,);
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


<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ url('theme://img/apple-icon-57x57.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ url('theme://img/apple-icon-60x60.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ url('theme://img/apple-icon-72x72.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ url('theme://img/apple-icon-76x76.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ url('theme://img/apple-icon-114x114.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ url('theme://img/apple-icon-120x120.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ url('theme://img/apple-icon-144x144.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ url('theme://img/apple-icon-152x152.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url('theme://img/apple-icon-180x180.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"{{ url('theme://img/android-icon-192x192.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ url('theme://img/favicon-32x32.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ url('theme://img/favicon-96x96.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ url('theme://img/favicon-16x16.png') }}\">
<link rel=\"manifest\" href=\"{{ url('theme://img/manifest.json') }}\">
<meta name=\"msapplication-TileColor\" content=\"#ffffff\">
<meta name=\"msapplication-TileImage\" content=\"{{ url('theme://img/ms-icon-144x144.png') }}\">
<meta name=\"theme-color\" content=\"#ffffff\">



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
