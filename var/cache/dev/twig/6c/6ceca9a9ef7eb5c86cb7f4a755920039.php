<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_26a3bb672384997f25e2dc1073d87311 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Budget Buddy</title>

    <!-- Bootstrap -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css\">

    <!-- Playful fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Satoshi:wght@300;400;500;700;900&display=swap\"
          rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Chewy&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300;400;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Font Awesome voor admin icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">

    <!-- Css -->
    <link rel=\"stylesheet\" href=\"assets/styles/app.css\">
    <link rel=\"shortcut icon\" href=\"assets/img/BB-logo.png\" type=\"image/x-icon\">

    <!-- Js -->
    <script defer src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script defer src=\"js/main.js\"></script>
    <script defer src=\"js/language.js\"></script>
    <script defer src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 35
        yield "</head>
    <body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg sticky-top\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"/home\">
                <div class=\"logo\">
                    <div class=\"logo-icon\">
                        <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/BB-logo.png"), "html", null, true);
        yield "\" alt=\"BB-logo\">
                    </div>
                    Budget Buddy
                </div>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"><i class=\"bi bi-list\"></i></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto me-4\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/home\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/about\">About Us</a>
                    </li>

                    ";
        // line 63
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                               data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bi bi-speedometer2 me-1\"></i> Dashboard
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"/dashboard\"><i class=\"bi bi-speedometer2\"></i> Dashboard</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"/transactions\"><i class=\"bi bi-arrow-left-right\"></i> Transactions</a></li>
                                <li><a class=\"dropdown-item\" href=\"/reports\"><i class=\"bi bi-graph-up\"></i> Reports</a></li>
                            </ul>
                        </li>
                    ";
        }
        // line 77
        yield "                    ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 79
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            yield "\">
                                <i class=\"fas fa-user-shield me-1\"></i>Admin
                            </a>
                        </li>
                    ";
        }
        // line 84
        yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/contact\">Contact</a>
                    </li>
                </ul>

                <!-- Language switcher -->
                <div class=\"language-switcher\">
                    <button class=\"language-btn\" id=\"languageToggle\">
                        <img src=\"https://flagcdn.com/w40/gb.png\" srcset=\"https://flagcdn.com/w80/gb.png 2x\"
                             alt=\"UK Flag\">
                    </button>
                    <div class=\"language-dropdown\" id=\"languageDropdown\">
                        <div class=\"language-option\" data-lang=\"nl\">
                            <img src=\"https://flagcdn.com/w40/nl.png\" srcset=\"https://flagcdn.com/w80/nl.png 2x\"
                                 alt=\"Dutch Flag\">
                        </div>
                    </div>
                </div>

                <!-- Profiel icoon -->
                ";
        // line 104
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            yield "\" class=\"profile-icon ms-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Uitloggen\">
                        <i class=\"bi bi-person-fill\"></i>
                    </a>
                ";
        } else {
            // line 109
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"profile-icon ms-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Login to your account\">
                        <i class=\"bi bi-person-fill\"></i>
                    </a>
                ";
        }
        // line 113
        yield "            </div>
        </div>
    </nav>

    ";
        // line 117
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 118
        yield "    </body>

<!-- Footer -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 mb-4 mb-md-0\">
                <h4 class=\"footer-title\">Budget Buddy</h4>
                <p data-translate=\"footer.description\">Your financial buddy for a healthy financial future.</p>
            </div>
            <div class=\"col-md-2 mb-4 mb-md-0\">
                <h5 class=\"footer-title\" data-translate=\"footer.links\">Links</h5>
                <a href=\"home/\" class=\"footer-link\" data-translate=\"footer.home\">Home</a>
                <a href=\"about/\" class=\"footer-link\" data-translate=\"footer.about\">About us</a>
                <a href=\"home/\" class=\"footer-link\" data-translate=\"footer.features\">Features</a>
                <a href=\"contact/\" class=\"footer-link\" data-translate=\"footer.contact\">Contact</a>
            </div>
            <div class=\"col-md-2 mb-4 mb-md-0\">
                <h5 class=\"footer-title\" data-translate=\"footer.help\">Help</h5>
                <a href=\"contact/\" class=\"footer-link\" data-translate=\"footer.faq\">FAQ</a>
                <a href=\"contact/\" class=\"footer-link\" data-translate=\"footer.support\">Support</a>
                <a href=\"contact/\" class=\"footer-link\" data-translate=\"footer.privacy\">Privacy</a>
            </div>
            <div class=\"col-md-4\">
                <h5 class=\"footer-title\" data-translate=\"footer.newsletter\">Stay updated</h5>
                <div class=\"input-group mb-3\">
                    <input type=\"email\" class=\"form-control\" data-translate=\"footer.placeholder\"
                           placeholder=\"Your email address\" aria-label=\"Email\">
                    <button class=\"btn btn-primary\" type=\"button\"
                            data-translate=\"footer.subscribe\">Subscribe</button>
                </div>
                <div class=\"d-flex gap-3\">
                    <a href=\"contact/\" class=\"social-icon\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"contact/\" class=\"social-icon\"><i class=\"bi bi-instagram\"></i></a>
                    <a href=\"#contact/\" class=\"social-icon\"><i class=\"bi bi-twitter\"></i></a>
                    <a href=\"contact/\" class=\"social-icon\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
            </div>
        </div>
        <hr class=\"my-4 bg-light\">
        <div class=\"text-center\">
            <p class=\"mb-0\" data-translate=\"footer.copyright\">&copy; 2023 Budget Buddy. An initiative of Stichting
                Klikjongeren. All rights reserved.</p>
        </div>
    </div>
</footer>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        yield "        ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 34
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  306 => 117,  283 => 33,  272 => 34,  269 => 33,  256 => 32,  198 => 118,  196 => 117,  190 => 113,  182 => 109,  174 => 105,  172 => 104,  150 => 84,  142 => 79,  139 => 78,  136 => 77,  121 => 64,  118 => 63,  97 => 44,  86 => 35,  84 => 32,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Budget Buddy</title>

    <!-- Bootstrap -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css\">

    <!-- Playful fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Satoshi:wght@300;400;500;700;900&display=swap\"
          rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Chewy&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300;400;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Font Awesome voor admin icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">

    <!-- Css -->
    <link rel=\"stylesheet\" href=\"assets/styles/app.css\">
    <link rel=\"shortcut icon\" href=\"assets/img/BB-logo.png\" type=\"image/x-icon\">

    <!-- Js -->
    <script defer src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script defer src=\"js/main.js\"></script>
    <script defer src=\"js/language.js\"></script>
    <script defer src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    {% block javascripts %}
        {% block importmap %}{{ importmap('app') }}{% endblock %}
    {% endblock %}
</head>
    <body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg sticky-top\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"/home\">
                <div class=\"logo\">
                    <div class=\"logo-icon\">
                        <img src=\"{{ asset('img/BB-logo.png') }}\" alt=\"BB-logo\">
                    </div>
                    Budget Buddy
                </div>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"><i class=\"bi bi-list\"></i></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto me-4\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/home\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/about\">About Us</a>
                    </li>

                    {# Alleen tonen als gebruiker is ingelogd #}
                    {% if app.user %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                               data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bi bi-speedometer2 me-1\"></i> Dashboard
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"/dashboard\"><i class=\"bi bi-speedometer2\"></i> Dashboard</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"/transactions\"><i class=\"bi bi-arrow-left-right\"></i> Transactions</a></li>
                                <li><a class=\"dropdown-item\" href=\"/reports\"><i class=\"bi bi-graph-up\"></i> Reports</a></li>
                            </ul>
                        </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_admin') }}\">
                                <i class=\"fas fa-user-shield me-1\"></i>Admin
                            </a>
                        </li>
                    {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/contact\">Contact</a>
                    </li>
                </ul>

                <!-- Language switcher -->
                <div class=\"language-switcher\">
                    <button class=\"language-btn\" id=\"languageToggle\">
                        <img src=\"https://flagcdn.com/w40/gb.png\" srcset=\"https://flagcdn.com/w80/gb.png 2x\"
                             alt=\"UK Flag\">
                    </button>
                    <div class=\"language-dropdown\" id=\"languageDropdown\">
                        <div class=\"language-option\" data-lang=\"nl\">
                            <img src=\"https://flagcdn.com/w40/nl.png\" srcset=\"https://flagcdn.com/w80/nl.png 2x\"
                                 alt=\"Dutch Flag\">
                        </div>
                    </div>
                </div>

                <!-- Profiel icoon -->
                {% if app.user %}
                    <a href=\"{{ path('app_account') }}\" class=\"profile-icon ms-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Uitloggen\">
                        <i class=\"bi bi-person-fill\"></i>
                    </a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"profile-icon ms-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Login to your account\">
                        <i class=\"bi bi-person-fill\"></i>
                    </a>
                {% endif %}
            </div>
        </div>
    </nav>

    {% block body %}{% endblock %}
    </body>

<!-- Footer -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 mb-4 mb-md-0\">
                <h4 class=\"footer-title\">Budget Buddy</h4>
                <p data-translate=\"footer.description\">Your financial buddy for a healthy financial future.</p>
            </div>
            <div class=\"col-md-2 mb-4 mb-md-0\">
                <h5 class=\"footer-title\" data-translate=\"footer.links\">Links</h5>
                <a href=\"home/\" class=\"footer-link\" data-translate=\"footer.home\">Home</a>
                <a href=\"about/\" class=\"footer-link\" data-translate=\"footer.about\">About us</a>
                <a href=\"home/\" class=\"footer-link\" data-translate=\"footer.features\">Features</a>
                <a href=\"contact/\" class=\"footer-link\" data-translate=\"footer.contact\">Contact</a>
            </div>
            <div class=\"col-md-2 mb-4 mb-md-0\">
                <h5 class=\"footer-title\" data-translate=\"footer.help\">Help</h5>
                <a href=\"contact/\" class=\"footer-link\" data-translate=\"footer.faq\">FAQ</a>
                <a href=\"contact/\" class=\"footer-link\" data-translate=\"footer.support\">Support</a>
                <a href=\"contact/\" class=\"footer-link\" data-translate=\"footer.privacy\">Privacy</a>
            </div>
            <div class=\"col-md-4\">
                <h5 class=\"footer-title\" data-translate=\"footer.newsletter\">Stay updated</h5>
                <div class=\"input-group mb-3\">
                    <input type=\"email\" class=\"form-control\" data-translate=\"footer.placeholder\"
                           placeholder=\"Your email address\" aria-label=\"Email\">
                    <button class=\"btn btn-primary\" type=\"button\"
                            data-translate=\"footer.subscribe\">Subscribe</button>
                </div>
                <div class=\"d-flex gap-3\">
                    <a href=\"contact/\" class=\"social-icon\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"contact/\" class=\"social-icon\"><i class=\"bi bi-instagram\"></i></a>
                    <a href=\"#contact/\" class=\"social-icon\"><i class=\"bi bi-twitter\"></i></a>
                    <a href=\"contact/\" class=\"social-icon\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
            </div>
        </div>
        <hr class=\"my-4 bg-light\">
        <div class=\"text-center\">
            <p class=\"mb-0\" data-translate=\"footer.copyright\">&copy; 2023 Budget Buddy. An initiative of Stichting
                Klikjongeren. All rights reserved.</p>
        </div>
    </div>
</footer>
</html>
", "base.html.twig", "/Users/krishnabihari/Documents/GitHub/Budget-Buddy/templates/base.html.twig");
    }
}
