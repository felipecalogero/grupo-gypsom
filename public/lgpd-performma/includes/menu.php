

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a href="/" class="navbar-brand">LGPD DEMO - Performma Online</a>
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarText"
			aria-controls="navbarText"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link <%= (pageTitle == 'Acesso aos Dados'?'active':'') %>" href="./data-access.php"
						>Acesso aos dados</a
					>
				</li>

				<li class="nav-item">
					<a
						class="nav-link <%= (pageTitle == 'Privacy Policy'?'active':'') %>"
						aria-current="page"
						href="./politica-de-privacidade.php"
						>Política de Privacidade</a
					>
				</li>
				<li class="nav-item">
					<a class="nav-link <%= (pageTitle == 'Termos de Uso'?'active':'') %>" href="./termo-de-uso.php"
						>Termos de Uso</a
					>
				</li>

				<li class="nav-item dropdown">
					<a
						class="nav-link dropdown-toggle"
						data-bs-toggle="dropdown"
						href="#"
						role="button"
						aria-expanded="false"
						href="#"
						>Lnks externos</a
					>
					<ul class="dropdown-menu">
						<li>
							<a
								class="dropdown-item"
								target="_blank"
								href="https://www.google.com/analytics/learn/privacy.html"
								>política do Google</a
							>
							<a
								class="dropdown-item"
								target="_blank"
								href="https://cookiepedia.co.uk/giving-consent-to-cookies"
								>Consentimento de cookies</a
							>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
