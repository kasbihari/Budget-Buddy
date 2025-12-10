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

/* admin/index.html.twig */
class __TwigTemplate_905cedea6132e05f82eec407680dc7a1 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Admin Dashboard - SoloLevelers";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <section class=\"hero\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h1 class=\"hero-title\">Admin Dashboard</h1>
                    <p class=\"hero-subtitle\">Beheer alle gebruikers en transacties</p>
                </div>
            </div>
        </div>
    </section>

    <section class=\"mission-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"row\">
                        <div class=\"col-md-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto text-primary\">
                                    <i class=\"fas fa-users\"></i>
                                </div>
                                <h3 class=\"feature-title\">Gebruikers</h3>
                                <div class=\"stat-number\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["platformStats"]) || array_key_exists("platformStats", $context) ? $context["platformStats"] : (function () { throw new RuntimeError('Variable "platformStats" does not exist.', 31, $this->source); })()), "totalUsers", [], "any", false, false, false, 31), "html", null, true);
        yield "</div>
                                <p class=\"text-muted\">Totaal geregistreerd</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto text-success\">
                                    <i class=\"fas fa-receipt\"></i>
                                </div>
                                <h3 class=\"feature-title\">Transacties</h3>
                                <div class=\"stat-number\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["platformStats"]) || array_key_exists("platformStats", $context) ? $context["platformStats"] : (function () { throw new RuntimeError('Variable "platformStats" does not exist.', 41, $this->source); })()), "totalTransactions", [], "any", false, false, false, 41), "html", null, true);
        yield "</div>
                                <p class=\"text-muted\">Totaal aantal</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto text-info\">
                                    <i class=\"fas fa-user-shield\"></i>
                                </div>
                                <h3 class=\"feature-title\">Admins</h3>
                                <div class=\"stat-number\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["platformStats"]) || array_key_exists("platformStats", $context) ? $context["platformStats"] : (function () { throw new RuntimeError('Variable "platformStats" does not exist.', 51, $this->source); })()), "adminUsers", [], "any", false, false, false, 51), "html", null, true);
        yield "</div>
                                <p class=\"text-muted\">Beheerders</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto text-warning\">
                                    <i class=\"fas fa-tags\"></i>
                                </div>
                                <h3 class=\"feature-title\">Categorieën</h3>
                                <div class=\"stat-number\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["platformStats"]) || array_key_exists("platformStats", $context) ? $context["platformStats"] : (function () { throw new RuntimeError('Variable "platformStats" does not exist.', 61, $this->source); })()), "totalCategories", [], "any", false, false, false, 61), "html", null, true);
        yield "</div>
                                <p class=\"text-muted\">Totaal aantal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <h3 class=\"feature-title mb-4\">
                            <i class=\"fas fa-user-plus me-2\"></i>Nieuwe Gebruiker Toevoegen
                        </h3>
                        <form method=\"POST\" action=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_new");
        yield "\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-4\">
                                    <label class=\"form-label fw-medium\">
                                        <i class=\"fas fa-user me-2\"></i>Volledige Naam
                                    </label>
                                    <input type=\"text\" class=\"form-control\" name=\"fullName\" required placeholder=\"Voer volledige naam in\">
                                </div>
                                <div class=\"col-md-4\">
                                    <label class=\"form-label fw-medium\">
                                        <i class=\"fas fa-envelope me-2\"></i>Email
                                    </label>
                                    <input type=\"email\" class=\"form-control\" name=\"email\" required placeholder=\"voer@email.in\">
                                </div>
                                <div class=\"col-md-4\">
                                    <label class=\"form-label fw-medium\">
                                        <i class=\"fas fa-key me-2\"></i>Wachtwoord
                                    </label>
                                    <input type=\"password\" class=\"form-control\" name=\"password\" required placeholder=\"Minimaal 6 karakters\">
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" type=\"checkbox\" name=\"isAdmin\" id=\"isAdmin\" style=\"transform: scale(1.2);\">
                                        <label class=\"form-check-label fw-medium\" for=\"isAdmin\">
                                            <i class=\"fas fa-user-shield me-2\"></i>Admin rechten geven
                                        </label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button type=\"submit\" class=\"btn btn-auth px-4\">
                                        <i class=\"fas fa-user-plus me-2\"></i>Gebruiker Toevoegen
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <h3 class=\"feature-title mb-4\">
                            <i class=\"fas fa-folder-plus me-2\"></i>Nieuwe Categorie Toevoegen
                        </h3>
                        <form method=\"POST\" action=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
        yield "\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-9\">
                                    <label class=\"form-label fw-medium\">
                                        <i class=\"fas fa-tag me-2\"></i>Categorie Naam
                                    </label>
                                    <input type=\"text\" class=\"form-control\" name=\"name\" required
                                           placeholder=\"Bijv. Salaris, Huur, Boodschappen\">
                                </div>
                                <div class=\"col-md-3 d-flex align-items-end\">
                                    <button type=\"submit\" class=\"btn btn-auth w-100\">
                                        <i class=\"fas fa-plus me-2\"></i>Categorie Toevoegen
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h3 class=\"feature-title mb-0\">
                                <i class=\"fas fa-users-cog me-2\"></i>Gebruikers Beheer
                            </h3>
                            <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_transactions");
        yield "\" class=\"btn btn-auth\">
                                <i class=\"fas fa-list me-2\"></i>Alle Transacties
                            </a>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-dark table-hover mb-0\">
                                <thead>
                                <tr>
                                    <th class=\"border-0\">
                                        <i class=\"fas fa-user me-2\"></i>Naam
                                    </th>
                                    <th class=\"border-0\">
                                        <i class=\"fas fa-envelope me-2\"></i>Email
                                    </th>
                                    <th class=\"border-0 text-center\">
                                        <i class=\"fas fa-receipt me-2\"></i>Transacties
                                    </th>
                                    <th class=\"border-0 text-end\">
                                        <i class=\"fas fa-arrow-down me-2\"></i>Inkomen
                                    </th>
                                    <th class=\"border-0 text-end\">
                                        <i class=\"fas fa-arrow-up me-2\"></i>Uitgaven
                                    </th>
                                    <th class=\"border-0 text-end\">
                                        <i class=\"fas fa-balance-scale me-2\"></i>Saldo
                                    </th>
                                    <th class=\"border-0 text-center\">
                                        <i class=\"fas fa-user-shield me-2\"></i>Rol
                                    </th>
                                    <th class=\"border-0 text-center\">
                                        <i class=\"fas fa-cog me-2\"></i>Acties
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 183, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 184
            yield "                                    <tr class=\"align-middle\">
                                        <td class=\"fw-medium\">";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 185), "html", null, true);
            yield "</td>
                                        <td class=\"text-muted\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 186), "html", null, true);
            yield "</td>
                                        <td class=\"text-center\">
                                            <span class=\"badge bg-secondary py-2 px-3\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "transactionCount", [], "any", false, false, false, 188), "html", null, true);
            yield "</span>
                                        </td>
                                        <td class=\"text-end text-success fw-bold\">
                                            €";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "totalIncome", [], "any", false, false, false, 191), 2, ",", "."), "html", null, true);
            yield "
                                        </td>
                                        <td class=\"text-end text-danger fw-bold\">
                                            €";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "totalExpenses", [], "any", false, false, false, 194), 2, ",", "."), "html", null, true);
            yield "
                                        </td>
                                        <td class=\"text-end ";
            // line 196
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "netBalance", [], "any", false, false, false, 196) >= 0)) {
                yield "text-success";
            } else {
                yield "text-danger";
            }
            yield " fw-bold\">
                                            €";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "netBalance", [], "any", false, false, false, 197), 2, ",", "."), "html", null, true);
            yield "
                                        </td>
                                        <td class=\"text-center\">
                                            ";
            // line 200
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 201
                yield "                                                <span class=\"badge bg-success py-2 px-3\">
                                                    <i class=\"fas fa-user-shield me-1\"></i>Admin
                                                </span>
                                            ";
            } else {
                // line 205
                yield "                                                <span class=\"badge bg-secondary py-2 px-3\">
                                                    <i class=\"fas fa-user me-1\"></i>Gebruiker
                                                </span>
                                            ";
            }
            // line 209
            yield "                                        </td>
                                        <td class=\"text-center\">
                                            <div class=\"d-flex justify-content-center gap-2\">
                                                <button type=\"button\" class=\"btn btn-primary btn-sm px-3 action-btn\"
                                                        data-bs-toggle=\"tooltip\"
                                                        data-bs-placement=\"top\"
                                                        title=\"Gebruiker bewerken\"
                                                        data-bs-toggle=\"modal\"
                                                        data-bs-target=\"#editUserModal\"
                                                        data-user-id=\"";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 218), "html", null, true);
            yield "\"
                                                        data-user-name=\"";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 219), "html", null, true);
            yield "\"
                                                        data-user-email=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 220), "html", null, true);
            yield "\"
                                                        data-user-is-admin=\"";
            // line 221
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\">
                                                    <i class=\"fas fa-edit fa-fw\"></i>
                                                </button>

                                                ";
            // line 225
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 225, $this->source); })()), "user", [], "any", false, false, false, 225), "id", [], "any", false, false, false, 225) != CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 225))) {
                // line 226
                yield "                                                    <form method=\"POST\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_toggle_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 226)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 227
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_admin_" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 227))), "html", null, true);
                yield "\">
                                                        <button type=\"submit\"
                                                                class=\"btn ";
                // line 229
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "btn-warning";
                } else {
                    yield "btn-success";
                }
                yield " btn-sm px-3 action-btn\"
                                                                data-bs-toggle=\"tooltip\"
                                                                data-bs-placement=\"top\"
                                                                title=\"";
                // line 232
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Admin rechten verwijderen";
                } else {
                    yield "Admin rechten geven";
                }
                yield "\">
                                                            ";
                // line 233
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 234
                    yield "                                                                <i class=\"fas fa-user-lock fa-fw\"></i>
                                                            ";
                } else {
                    // line 236
                    yield "                                                                <i class=\"fas fa-user-shield fa-fw\"></i>
                                                            ";
                }
                // line 238
                yield "                                                        </button>
                                                    </form>
                                                ";
            } else {
                // line 241
                yield "                                                    <button class=\"btn btn-outline-secondary btn-sm px-3 action-btn\" disabled
                                                            data-bs-toggle=\"tooltip\"
                                                            data-bs-placement=\"top\"
                                                            title=\"Huidige gebruiker\">
                                                        <i class=\"fas fa-user fa-fw\"></i>
                                                    </button>
                                                ";
            }
            // line 248
            yield "
                                                ";
            // line 249
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "user", [], "any", false, false, false, 249), "id", [], "any", false, false, false, 249) != CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 249))) {
                // line 250
                yield "                                                    <form method=\"POST\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 250)]), "html", null, true);
                yield "\"
                                                          class=\"d-inline\"
                                                          onsubmit=\"return confirm('Weet je zeker dat je gebruiker ";
                // line 252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 252), "html", null, true);
                yield " wilt verwijderen? Alle transacties van deze gebruiker zullen ook worden verwijderd.');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 253
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_user_" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 253))), "html", null, true);
                yield "\">
                                                        <button type=\"submit\"
                                                                class=\"btn btn-danger btn-sm px-3 action-btn\"
                                                                data-bs-toggle=\"tooltip\"
                                                                data-bs-placement=\"top\"
                                                                title=\"Gebruiker verwijderen\">
                                                            <i class=\"fas fa-trash fa-fw\"></i>
                                                        </button>
                                                    </form>
                                                ";
            } else {
                // line 263
                yield "                                                    <button class=\"btn btn-outline-secondary btn-sm px-3 action-btn\" disabled
                                                            data-bs-toggle=\"tooltip\"
                                                            data-bs-placement=\"top\"
                                                            title=\"Kan eigen account niet verwijderen\">
                                                        <i class=\"fas fa-ban fa-fw\"></i>
                                                    </button>
                                                ";
            }
            // line 270
            yield "                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 273
        if (!$context['_iterated']) {
            // line 274
            yield "                                    <tr>
                                        <td colspan=\"8\" class=\"text-center text-muted py-5\">
                                            <i class=\"fas fa-users fa-3x mb-3\"></i>
                                            <h5 class=\"mb-2\">Geen gebruikers gevonden</h5>
                                            <p class=\"mb-0\">Voeg je eerste gebruiker toe om te beginnen!</p>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h3 class=\"feature-title mb-0\">
                                <i class=\"fas fa-folder me-2\"></i>Categorieën Beheer
                            </h3>
                            <span class=\"badge bg-primary py-2 px-3\">
                                <i class=\"fas fa-tags me-1\"></i>";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["platformStats"]) || array_key_exists("platformStats", $context) ? $context["platformStats"] : (function () { throw new RuntimeError('Variable "platformStats" does not exist.', 297, $this->source); })()), "totalCategories", [], "any", false, false, false, 297), "html", null, true);
        yield " Categorieën
                            </span>
                        </div>

                        ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "flashes", ["success"], "method", false, false, false, 301));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 302
            yield "                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                <i class=\"fas fa-check-circle me-2\"></i>";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"alert\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        yield "
                        ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 308, $this->source); })()), "flashes", ["error"], "method", false, false, false, 308));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 309
            yield "                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"alert\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        yield "
                        <div class=\"table-responsive\">
                            <table class=\"table table-dark table-hover mb-0\">
                                <thead>
                                <tr>
                                    <th class=\"border-0\">
                                        <i class=\"fas fa-tag me-2\"></i>Categorie Naam
                                    </th>
                                    <th class=\"border-0 text-center\">
                                        <i class=\"fas fa-receipt me-2\"></i>Aantal Transacties
                                    </th>
                                    <th class=\"border-0 text-end\">
                                        <i class=\"fas fa-euro-sign me-2\"></i>Totaal Bedrag
                                    </th>
                                    <th class=\"border-0 text-center\">
                                        <i class=\"fas fa-cog me-2\"></i>Acties
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categoryStats"]) || array_key_exists("categoryStats", $context) ? $context["categoryStats"] : (function () { throw new RuntimeError('Variable "categoryStats" does not exist.', 334, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 335
            yield "                                    ";
            $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "category", [], "any", false, false, false, 335);
            // line 336
            yield "                                    <tr class=\"align-middle\">
                                        <td class=\"fw-medium\">";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 337, $this->source); })()), "name", [], "any", false, false, false, 337), "html", null, true);
            yield "</td>
                                        <td class=\"text-center\">
                                            <span class=\"badge bg-secondary py-2 px-3\">";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "transactionCount", [], "any", false, false, false, 339), "html", null, true);
            yield "</span>
                                        </td>
                                        <td class=\"text-end fw-bold\">
                                            €";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "totalAmount", [], "any", false, false, false, 342), 2, ",", "."), "html", null, true);
            yield "
                                        </td>
                                        <td class=\"text-center\">
                                            <div class=\"d-flex justify-content-center gap-2\">
                                                <button type=\"button\" class=\"btn btn-primary btn-sm px-3 action-btn\"
                                                        data-bs-toggle=\"tooltip\"
                                                        data-bs-placement=\"top\"
                                                        title=\"Categorie bewerken\"
                                                        data-bs-toggle=\"modal\"
                                                        data-bs-target=\"#editCategoryModal\"
                                                        data-category-id=\"";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 352, $this->source); })()), "id", [], "any", false, false, false, 352), "html", null, true);
            yield "\"
                                                        data-category-name=\"";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 353, $this->source); })()), "name", [], "any", false, false, false, 353), "html", null, true);
            yield "\">
                                                    <i class=\"fas fa-edit fa-fw\"></i>
                                                </button>

                                                <form method=\"POST\" action=\"";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 357, $this->source); })()), "id", [], "any", false, false, false, 357)]), "html", null, true);
            yield "\"
                                                      class=\"d-inline\"
                                                      onsubmit=\"return confirm('Weet je zeker dat je categorie \\\"";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 359, $this->source); })()), "name", [], "any", false, false, false, 359), "html", null, true);
            yield "\\\" wilt verwijderen?";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "transactionCount", [], "any", false, false, false, 359) > 0)) {
                yield " Let op: er zijn ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "transactionCount", [], "any", false, false, false, 359), "html", null, true);
                yield " transacties aan deze categorie gekoppeld!";
            }
            yield "');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_category_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 360, $this->source); })()), "id", [], "any", false, false, false, 360))), "html", null, true);
            yield "\">
                                                <button type=\"submit\"
                                                        class=\"btn btn-danger btn-sm px-3 action-btn\"
                                                        data-bs-toggle=\"tooltip\"
                                                        data-bs-placement=\"top\"
                                                        title=\"Categorie verwijderen\"
                                                        ";
            // line 366
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "transactionCount", [], "any", false, false, false, 366) > 0)) {
                yield "disabled";
            }
            yield ">
                                                    <i class=\"fas fa-trash fa-fw\"></i>
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 373
        if (!$context['_iterated']) {
            // line 374
            yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center text-muted py-5\">
                                            <i class=\"fas fa-folder-open fa-3x mb-3\"></i>
                                            <h5 class=\"mb-2\">Geen categorieën gevonden</h5>
                                            <p class=\"mb-0\">Voeg je eerste categorie toe om te beginnen!</p>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class=\"modal fade\" id=\"editUserModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content auth-container\">
                <div class=\"modal-header border-0 pb-0\">
                    <h5 class=\"modal-title auth-title\">
                        <i class=\"fas fa-user-edit me-2\"></i>Gebruiker Bewerken
                    </h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <form method=\"POST\" action=\"\" id=\"editUserForm\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("edit_user"), "html", null, true);
        yield "\">

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label fw-medium\">
                                <i class=\"fas fa-user me-2\"></i>Volledige Naam
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"fullName\" id=\"editFullName\" required>
                        </div>

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label fw-medium\">
                                <i class=\"fas fa-envelope me-2\"></i>Email
                            </label>
                            <input type=\"email\" class=\"form-control\" name=\"email\" id=\"editEmail\" required>
                        </div>

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label fw-medium\">
                                <i class=\"fas fa-key me-2\"></i>Nieuw Wachtwoord
                            </label>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"editPassword\" placeholder=\"Laat leeg om niet te wijzigen\">
                            <div class=\"form-text text-muted\">Minimaal 6 karakters</div>
                        </div>

                        <div class=\"form-group mb-3\">
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"isAdmin\" id=\"editIsAdmin\" style=\"transform: scale(1.2);\">
                                <label class=\"form-check-label fw-medium\" for=\"editIsAdmin\">
                                    <i class=\"fas fa-user-shield me-2\"></i>Admin rechten
                                </label>
                            </div>
                            <div class=\"form-text text-muted\">Deze gebruiker heeft volledige toegang tot het admin dashboard</div>
                        </div>
                    </div>
                    <div class=\"modal-footer border-0 pt-0\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                            <i class=\"fas fa-times me-2\"></i>Annuleren
                        </button>
                        <button type=\"submit\" class=\"btn btn-auth\">
                            <i class=\"fas fa-save me-2\"></i>Opslaan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"editCategoryModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content auth-container\">
                <div class=\"modal-header border-0 pb-0\">
                    <h5 class=\"modal-title auth-title\">
                        <i class=\"fas fa-edit me-2\"></i>Categorie Bewerken
                    </h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <form method=\"POST\" action=\"\" id=\"editCategoryForm\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("edit_category"), "html", null, true);
        yield "\">

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label fw-medium\">
                                <i class=\"fas fa-tag me-2\"></i>Categorie Naam
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"name\" id=\"editCategoryName\" required>
                        </div>
                    </div>
                    <div class=\"modal-footer border-0 pt-0\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                            <i class=\"fas fa-times me-2\"></i>Annuleren
                        </button>
                        <button type=\"submit\" class=\"btn btn-auth\">
                            <i class=\"fas fa-save me-2\"></i>Opslaan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 483
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

        // line 484
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editUserModal = document.getElementById('editUserModal');
            editUserModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const userId = button.getAttribute('data-user-id');
                const userName = button.getAttribute('data-user-name');
                const userEmail = button.getAttribute('data-user-email');
                const userIsAdmin = button.getAttribute('data-user-is-admin');

                document.getElementById('editFullName').value = userName;
                document.getElementById('editEmail').value = userEmail;
                document.getElementById('editIsAdmin').checked = userIsAdmin === '1';

                document.getElementById('editUserForm').action = '/admin/user/' + userId + '/edit';
            });

            const editCategoryModal = document.getElementById('editCategoryModal');
            editCategoryModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const categoryId = button.getAttribute('data-category-id');
                const categoryName = button.getAttribute('data-category-name');

                document.getElementById('editCategoryName').value = categoryName;

                document.getElementById('editCategoryForm').action = '/admin/category/' + categoryId + '/edit';
            });

            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            const actionButtons = document.querySelectorAll('.action-btn');
            actionButtons.forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.transition = 'all 0.2s ease';
                });
                btn.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/index.html.twig";
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
        return array (  815 => 484,  802 => 483,  769 => 460,  708 => 402,  686 => 382,  673 => 374,  671 => 373,  657 => 366,  648 => 360,  638 => 359,  633 => 357,  626 => 353,  622 => 352,  609 => 342,  603 => 339,  598 => 337,  595 => 336,  592 => 335,  587 => 334,  565 => 314,  555 => 310,  552 => 309,  548 => 308,  545 => 307,  535 => 303,  532 => 302,  528 => 301,  521 => 297,  504 => 282,  491 => 274,  489 => 273,  482 => 270,  473 => 263,  460 => 253,  456 => 252,  450 => 250,  448 => 249,  445 => 248,  436 => 241,  431 => 238,  427 => 236,  423 => 234,  421 => 233,  413 => 232,  403 => 229,  398 => 227,  393 => 226,  391 => 225,  384 => 221,  380 => 220,  376 => 219,  372 => 218,  361 => 209,  355 => 205,  349 => 201,  347 => 200,  341 => 197,  333 => 196,  328 => 194,  322 => 191,  316 => 188,  311 => 186,  307 => 185,  304 => 184,  299 => 183,  260 => 147,  230 => 120,  182 => 75,  165 => 61,  152 => 51,  139 => 41,  126 => 31,  101 => 8,  88 => 7,  65 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Admin Dashboard - SoloLevelers{% endblock %}

{% block body %}
    <section class=\"hero\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h1 class=\"hero-title\">Admin Dashboard</h1>
                    <p class=\"hero-subtitle\">Beheer alle gebruikers en transacties</p>
                </div>
            </div>
        </div>
    </section>

    <section class=\"mission-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"row\">
                        <div class=\"col-md-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto text-primary\">
                                    <i class=\"fas fa-users\"></i>
                                </div>
                                <h3 class=\"feature-title\">Gebruikers</h3>
                                <div class=\"stat-number\">{{ platformStats.totalUsers }}</div>
                                <p class=\"text-muted\">Totaal geregistreerd</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto text-success\">
                                    <i class=\"fas fa-receipt\"></i>
                                </div>
                                <h3 class=\"feature-title\">Transacties</h3>
                                <div class=\"stat-number\">{{ platformStats.totalTransactions }}</div>
                                <p class=\"text-muted\">Totaal aantal</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto text-info\">
                                    <i class=\"fas fa-user-shield\"></i>
                                </div>
                                <h3 class=\"feature-title\">Admins</h3>
                                <div class=\"stat-number\">{{ platformStats.adminUsers }}</div>
                                <p class=\"text-muted\">Beheerders</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-4\">
                            <div class=\"feature-card text-center glow-card h-100\">
                                <div class=\"feature-icon mx-auto text-warning\">
                                    <i class=\"fas fa-tags\"></i>
                                </div>
                                <h3 class=\"feature-title\">Categorieën</h3>
                                <div class=\"stat-number\">{{ platformStats.totalCategories }}</div>
                                <p class=\"text-muted\">Totaal aantal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <h3 class=\"feature-title mb-4\">
                            <i class=\"fas fa-user-plus me-2\"></i>Nieuwe Gebruiker Toevoegen
                        </h3>
                        <form method=\"POST\" action=\"{{ path('app_admin_user_new') }}\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-4\">
                                    <label class=\"form-label fw-medium\">
                                        <i class=\"fas fa-user me-2\"></i>Volledige Naam
                                    </label>
                                    <input type=\"text\" class=\"form-control\" name=\"fullName\" required placeholder=\"Voer volledige naam in\">
                                </div>
                                <div class=\"col-md-4\">
                                    <label class=\"form-label fw-medium\">
                                        <i class=\"fas fa-envelope me-2\"></i>Email
                                    </label>
                                    <input type=\"email\" class=\"form-control\" name=\"email\" required placeholder=\"voer@email.in\">
                                </div>
                                <div class=\"col-md-4\">
                                    <label class=\"form-label fw-medium\">
                                        <i class=\"fas fa-key me-2\"></i>Wachtwoord
                                    </label>
                                    <input type=\"password\" class=\"form-control\" name=\"password\" required placeholder=\"Minimaal 6 karakters\">
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" type=\"checkbox\" name=\"isAdmin\" id=\"isAdmin\" style=\"transform: scale(1.2);\">
                                        <label class=\"form-check-label fw-medium\" for=\"isAdmin\">
                                            <i class=\"fas fa-user-shield me-2\"></i>Admin rechten geven
                                        </label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button type=\"submit\" class=\"btn btn-auth px-4\">
                                        <i class=\"fas fa-user-plus me-2\"></i>Gebruiker Toevoegen
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <h3 class=\"feature-title mb-4\">
                            <i class=\"fas fa-folder-plus me-2\"></i>Nieuwe Categorie Toevoegen
                        </h3>
                        <form method=\"POST\" action=\"{{ path('app_admin_category_new') }}\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-9\">
                                    <label class=\"form-label fw-medium\">
                                        <i class=\"fas fa-tag me-2\"></i>Categorie Naam
                                    </label>
                                    <input type=\"text\" class=\"form-control\" name=\"name\" required
                                           placeholder=\"Bijv. Salaris, Huur, Boodschappen\">
                                </div>
                                <div class=\"col-md-3 d-flex align-items-end\">
                                    <button type=\"submit\" class=\"btn btn-auth w-100\">
                                        <i class=\"fas fa-plus me-2\"></i>Categorie Toevoegen
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h3 class=\"feature-title mb-0\">
                                <i class=\"fas fa-users-cog me-2\"></i>Gebruikers Beheer
                            </h3>
                            <a href=\"{{ path('app_admin_transactions') }}\" class=\"btn btn-auth\">
                                <i class=\"fas fa-list me-2\"></i>Alle Transacties
                            </a>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-dark table-hover mb-0\">
                                <thead>
                                <tr>
                                    <th class=\"border-0\">
                                        <i class=\"fas fa-user me-2\"></i>Naam
                                    </th>
                                    <th class=\"border-0\">
                                        <i class=\"fas fa-envelope me-2\"></i>Email
                                    </th>
                                    <th class=\"border-0 text-center\">
                                        <i class=\"fas fa-receipt me-2\"></i>Transacties
                                    </th>
                                    <th class=\"border-0 text-end\">
                                        <i class=\"fas fa-arrow-down me-2\"></i>Inkomen
                                    </th>
                                    <th class=\"border-0 text-end\">
                                        <i class=\"fas fa-arrow-up me-2\"></i>Uitgaven
                                    </th>
                                    <th class=\"border-0 text-end\">
                                        <i class=\"fas fa-balance-scale me-2\"></i>Saldo
                                    </th>
                                    <th class=\"border-0 text-center\">
                                        <i class=\"fas fa-user-shield me-2\"></i>Rol
                                    </th>
                                    <th class=\"border-0 text-center\">
                                        <i class=\"fas fa-cog me-2\"></i>Acties
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for user in users %}
                                    <tr class=\"align-middle\">
                                        <td class=\"fw-medium\">{{ user.fullName }}</td>
                                        <td class=\"text-muted\">{{ user.email }}</td>
                                        <td class=\"text-center\">
                                            <span class=\"badge bg-secondary py-2 px-3\">{{ user.transactionCount }}</span>
                                        </td>
                                        <td class=\"text-end text-success fw-bold\">
                                            €{{ user.totalIncome|number_format(2, ',', '.') }}
                                        </td>
                                        <td class=\"text-end text-danger fw-bold\">
                                            €{{ user.totalExpenses|number_format(2, ',', '.') }}
                                        </td>
                                        <td class=\"text-end {% if user.netBalance >= 0 %}text-success{% else %}text-danger{% endif %} fw-bold\">
                                            €{{ user.netBalance|number_format(2, ',', '.') }}
                                        </td>
                                        <td class=\"text-center\">
                                            {% if user.isAdmin %}
                                                <span class=\"badge bg-success py-2 px-3\">
                                                    <i class=\"fas fa-user-shield me-1\"></i>Admin
                                                </span>
                                            {% else %}
                                                <span class=\"badge bg-secondary py-2 px-3\">
                                                    <i class=\"fas fa-user me-1\"></i>Gebruiker
                                                </span>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\">
                                            <div class=\"d-flex justify-content-center gap-2\">
                                                <button type=\"button\" class=\"btn btn-primary btn-sm px-3 action-btn\"
                                                        data-bs-toggle=\"tooltip\"
                                                        data-bs-placement=\"top\"
                                                        title=\"Gebruiker bewerken\"
                                                        data-bs-toggle=\"modal\"
                                                        data-bs-target=\"#editUserModal\"
                                                        data-user-id=\"{{ user.id }}\"
                                                        data-user-name=\"{{ user.fullName }}\"
                                                        data-user-email=\"{{ user.email }}\"
                                                        data-user-is-admin=\"{{ user.isAdmin ? '1' : '0' }}\">
                                                    <i class=\"fas fa-edit fa-fw\"></i>
                                                </button>

                                                {% if app.user.id != user.id %}
                                                    <form method=\"POST\" action=\"{{ path('app_admin_toggle_admin', {'id': user.id}) }}\" class=\"d-inline\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_admin_' ~ user.id) }}\">
                                                        <button type=\"submit\"
                                                                class=\"btn {% if user.isAdmin %}btn-warning{% else %}btn-success{% endif %} btn-sm px-3 action-btn\"
                                                                data-bs-toggle=\"tooltip\"
                                                                data-bs-placement=\"top\"
                                                                title=\"{% if user.isAdmin %}Admin rechten verwijderen{% else %}Admin rechten geven{% endif %}\">
                                                            {% if user.isAdmin %}
                                                                <i class=\"fas fa-user-lock fa-fw\"></i>
                                                            {% else %}
                                                                <i class=\"fas fa-user-shield fa-fw\"></i>
                                                            {% endif %}
                                                        </button>
                                                    </form>
                                                {% else %}
                                                    <button class=\"btn btn-outline-secondary btn-sm px-3 action-btn\" disabled
                                                            data-bs-toggle=\"tooltip\"
                                                            data-bs-placement=\"top\"
                                                            title=\"Huidige gebruiker\">
                                                        <i class=\"fas fa-user fa-fw\"></i>
                                                    </button>
                                                {% endif %}

                                                {% if app.user.id != user.id %}
                                                    <form method=\"POST\" action=\"{{ path('app_admin_user_delete', {'id': user.id}) }}\"
                                                          class=\"d-inline\"
                                                          onsubmit=\"return confirm('Weet je zeker dat je gebruiker {{ user.fullName }} wilt verwijderen? Alle transacties van deze gebruiker zullen ook worden verwijderd.');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_user_' ~ user.id) }}\">
                                                        <button type=\"submit\"
                                                                class=\"btn btn-danger btn-sm px-3 action-btn\"
                                                                data-bs-toggle=\"tooltip\"
                                                                data-bs-placement=\"top\"
                                                                title=\"Gebruiker verwijderen\">
                                                            <i class=\"fas fa-trash fa-fw\"></i>
                                                        </button>
                                                    </form>
                                                {% else %}
                                                    <button class=\"btn btn-outline-secondary btn-sm px-3 action-btn\" disabled
                                                            data-bs-toggle=\"tooltip\"
                                                            data-bs-placement=\"top\"
                                                            title=\"Kan eigen account niet verwijderen\">
                                                        <i class=\"fas fa-ban fa-fw\"></i>
                                                    </button>
                                                {% endif %}
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"8\" class=\"text-center text-muted py-5\">
                                            <i class=\"fas fa-users fa-3x mb-3\"></i>
                                            <h5 class=\"mb-2\">Geen gebruikers gevonden</h5>
                                            <p class=\"mb-0\">Voeg je eerste gebruiker toe om te beginnen!</p>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row mb-5\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"feature-card\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h3 class=\"feature-title mb-0\">
                                <i class=\"fas fa-folder me-2\"></i>Categorieën Beheer
                            </h3>
                            <span class=\"badge bg-primary py-2 px-3\">
                                <i class=\"fas fa-tags me-1\"></i>{{ platformStats.totalCategories }} Categorieën
                            </span>
                        </div>

                        {% for message in app.flashes('success') %}
                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                <i class=\"fas fa-check-circle me-2\"></i>{{ message }}
                                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"alert\"></button>
                            </div>
                        {% endfor %}

                        {% for message in app.flashes('error') %}
                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>{{ message }}
                                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"alert\"></button>
                            </div>
                        {% endfor %}

                        <div class=\"table-responsive\">
                            <table class=\"table table-dark table-hover mb-0\">
                                <thead>
                                <tr>
                                    <th class=\"border-0\">
                                        <i class=\"fas fa-tag me-2\"></i>Categorie Naam
                                    </th>
                                    <th class=\"border-0 text-center\">
                                        <i class=\"fas fa-receipt me-2\"></i>Aantal Transacties
                                    </th>
                                    <th class=\"border-0 text-end\">
                                        <i class=\"fas fa-euro-sign me-2\"></i>Totaal Bedrag
                                    </th>
                                    <th class=\"border-0 text-center\">
                                        <i class=\"fas fa-cog me-2\"></i>Acties
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for stat in categoryStats %}
                                    {% set category = stat.category %}
                                    <tr class=\"align-middle\">
                                        <td class=\"fw-medium\">{{ category.name }}</td>
                                        <td class=\"text-center\">
                                            <span class=\"badge bg-secondary py-2 px-3\">{{ stat.transactionCount }}</span>
                                        </td>
                                        <td class=\"text-end fw-bold\">
                                            €{{ stat.totalAmount|number_format(2, ',', '.') }}
                                        </td>
                                        <td class=\"text-center\">
                                            <div class=\"d-flex justify-content-center gap-2\">
                                                <button type=\"button\" class=\"btn btn-primary btn-sm px-3 action-btn\"
                                                        data-bs-toggle=\"tooltip\"
                                                        data-bs-placement=\"top\"
                                                        title=\"Categorie bewerken\"
                                                        data-bs-toggle=\"modal\"
                                                        data-bs-target=\"#editCategoryModal\"
                                                        data-category-id=\"{{ category.id }}\"
                                                        data-category-name=\"{{ category.name }}\">
                                                    <i class=\"fas fa-edit fa-fw\"></i>
                                                </button>

                                                <form method=\"POST\" action=\"{{ path('app_admin_category_delete', {'id': category.id}) }}\"
                                                      class=\"d-inline\"
                                                      onsubmit=\"return confirm('Weet je zeker dat je categorie \\\"{{ category.name }}\\\" wilt verwijderen?{% if stat.transactionCount > 0 %} Let op: er zijn {{ stat.transactionCount }} transacties aan deze categorie gekoppeld!{% endif %}');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_category_' ~ category.id) }}\">
                                                <button type=\"submit\"
                                                        class=\"btn btn-danger btn-sm px-3 action-btn\"
                                                        data-bs-toggle=\"tooltip\"
                                                        data-bs-placement=\"top\"
                                                        title=\"Categorie verwijderen\"
                                                        {% if stat.transactionCount > 0 %}disabled{% endif %}>
                                                    <i class=\"fas fa-trash fa-fw\"></i>
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\" class=\"text-center text-muted py-5\">
                                            <i class=\"fas fa-folder-open fa-3x mb-3\"></i>
                                            <h5 class=\"mb-2\">Geen categorieën gevonden</h5>
                                            <p class=\"mb-0\">Voeg je eerste categorie toe om te beginnen!</p>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class=\"modal fade\" id=\"editUserModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content auth-container\">
                <div class=\"modal-header border-0 pb-0\">
                    <h5 class=\"modal-title auth-title\">
                        <i class=\"fas fa-user-edit me-2\"></i>Gebruiker Bewerken
                    </h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <form method=\"POST\" action=\"\" id=\"editUserForm\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit_user') }}\">

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label fw-medium\">
                                <i class=\"fas fa-user me-2\"></i>Volledige Naam
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"fullName\" id=\"editFullName\" required>
                        </div>

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label fw-medium\">
                                <i class=\"fas fa-envelope me-2\"></i>Email
                            </label>
                            <input type=\"email\" class=\"form-control\" name=\"email\" id=\"editEmail\" required>
                        </div>

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label fw-medium\">
                                <i class=\"fas fa-key me-2\"></i>Nieuw Wachtwoord
                            </label>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"editPassword\" placeholder=\"Laat leeg om niet te wijzigen\">
                            <div class=\"form-text text-muted\">Minimaal 6 karakters</div>
                        </div>

                        <div class=\"form-group mb-3\">
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"isAdmin\" id=\"editIsAdmin\" style=\"transform: scale(1.2);\">
                                <label class=\"form-check-label fw-medium\" for=\"editIsAdmin\">
                                    <i class=\"fas fa-user-shield me-2\"></i>Admin rechten
                                </label>
                            </div>
                            <div class=\"form-text text-muted\">Deze gebruiker heeft volledige toegang tot het admin dashboard</div>
                        </div>
                    </div>
                    <div class=\"modal-footer border-0 pt-0\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                            <i class=\"fas fa-times me-2\"></i>Annuleren
                        </button>
                        <button type=\"submit\" class=\"btn btn-auth\">
                            <i class=\"fas fa-save me-2\"></i>Opslaan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"editCategoryModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content auth-container\">
                <div class=\"modal-header border-0 pb-0\">
                    <h5 class=\"modal-title auth-title\">
                        <i class=\"fas fa-edit me-2\"></i>Categorie Bewerken
                    </h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <form method=\"POST\" action=\"\" id=\"editCategoryForm\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit_category') }}\">

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label fw-medium\">
                                <i class=\"fas fa-tag me-2\"></i>Categorie Naam
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"name\" id=\"editCategoryName\" required>
                        </div>
                    </div>
                    <div class=\"modal-footer border-0 pt-0\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                            <i class=\"fas fa-times me-2\"></i>Annuleren
                        </button>
                        <button type=\"submit\" class=\"btn btn-auth\">
                            <i class=\"fas fa-save me-2\"></i>Opslaan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editUserModal = document.getElementById('editUserModal');
            editUserModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const userId = button.getAttribute('data-user-id');
                const userName = button.getAttribute('data-user-name');
                const userEmail = button.getAttribute('data-user-email');
                const userIsAdmin = button.getAttribute('data-user-is-admin');

                document.getElementById('editFullName').value = userName;
                document.getElementById('editEmail').value = userEmail;
                document.getElementById('editIsAdmin').checked = userIsAdmin === '1';

                document.getElementById('editUserForm').action = '/admin/user/' + userId + '/edit';
            });

            const editCategoryModal = document.getElementById('editCategoryModal');
            editCategoryModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const categoryId = button.getAttribute('data-category-id');
                const categoryName = button.getAttribute('data-category-name');

                document.getElementById('editCategoryName').value = categoryName;

                document.getElementById('editCategoryForm').action = '/admin/category/' + categoryId + '/edit';
            });

            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            const actionButtons = document.querySelectorAll('.action-btn');
            actionButtons.forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.transition = 'all 0.2s ease';
                });
                btn.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
{% endblock %}", "admin/index.html.twig", "/Users/krishnabihari/Documents/GitHub/Budget-Buddy/templates/admin/index.html.twig");
    }
}
