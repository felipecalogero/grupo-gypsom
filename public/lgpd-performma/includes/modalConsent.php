<div class="modal fade minusTextContent" id="modalCookieConsent" tabindex="-1" aria-labelledby="modalCookieConsent" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Centro de preferências de privacidade</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="#" id="form-cookies">
					<small id="pc-policy-text"
						>Quando você visita um site, ele pode armazenar ou coletar informações no seu navegador,
						principalmente na forma de cookies. Essas informações podem ser sobre você, suas preferências ou
						seu dispositivo e são usadas principalmente para fazer o site funcionar como você espera. As
						informações normalmente não o identificam diretamente, mas podem oferecer uma experiência na web
						mais personalizada. Como respeitamos seu direito à privacidade, você pode optar por não permitir
						alguns tipos de cookies. Clique nos títulos das diferentes categorias para saber mais e alterar
						nossas configurações padrão. No entanto, o bloqueio de alguns tipos de cookies pode afetar sua
						experiência no website e os serviços que podemos oferecer.
						<a
							href="https://cookiepedia.co.uk/giving-consent-to-cookies"
							class="privacy-notice-link"
							target="_blank"
							aria-label="Isso abre a política de cookies em uma janela nova."
							tabindex="0"
							>Mais informações</a
						>
					</small>
					<div id="accept-recommended-container" class="ot-sdk-row">
						<div style="display: flex; justify-content: space-between; margin: 20px 0px">
							<button
								type="button"
								id="checkAll"
								class="btn btn-primary"
								aria-label="Permitir todos"
								role="button"
								style="display: block"
								tabindex="0"
							>
								Permitir todos
							</button>
						</div>
					</div>
					<section id="cookie-preferences" class="mt-10">
						<h3 id="manage-cookies-text">Gerenciar preferências de cookies</h3>

						<div class="accordion accordion-flush" id="accordionCookies">
							<div class="accordion-item">
								<div class="accordion-row">
									<div class="form-check form-switch">
										<input
											class="form-check-input cookie-item"
											type="checkbox"
											id="cookies_necessarios"
											checked
											disabled
										/>
										<label class="form-check-label" for="cookies_necessarios"
											>Cookies estritamente necessários</label
										>
									</div>
									<div class="badge bg-info text-wrap right">Sempre ativos</div>

									<h2 class="accordion-header" id="headingZero">
										<button
											class="accordion-button collapsed"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#collapseZero"
											aria-expanded="true"
											aria-controls="collapseZero"
										></button>
									</h2>
								</div>
								<div
									id="collapseZero"
									class="accordion-collapse collapse"
									aria-labelledby="headingZero"
									data-bs-parent="#accordionCookies"
								>
									<div class="accordion-body">
										<small
											>Estes cookies são necessários para que o website funcione e não podem ser
											desligados nos nossos sistemas. Normalmente, eles só são configurados em
											resposta a ações levadas a cabo por si e que correspondem a uma solicitação
											de serviços, tais como definir as suas preferências de privacidade, iniciar
											sessão ou preencher formulários. Pode configurar o seu navegador para
											bloquear ou alertá-lo(a) sobre esses cookies, mas algumas partes do website
											não funcionarão. Estes cookies não armazenam qualquer informação pessoal
											identificável.</small
										>
										<!-- sub groups -->
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-row">
									<div class="form-check form-switch">
										<input
											class="form-check-input cookie-item"
											type="checkbox"
											id="dados_publicidade"
										/>
										<label class="form-check-label" for="dados_publicidade"
											>Cookies de publicidade</label
										>
									</div>
									<h2 class="accordion-header" id="headingOne">
										<button
											class="accordion-button collapsed"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#collapseOne"
											aria-expanded="true"
											aria-controls="collapseOne"
										></button>
									</h2>
								</div>
								<div
									id="collapseOne"
									class="accordion-collapse collapse"
									aria-labelledby="headingOne"
									data-bs-parent="#accordionCookies"
								>
									<div class="accordion-body">
										<small>
											Estes cookies podem ser estabelecidos através do nosso site pelos nossos
											parceiros de publicidade. Podem ser usados por essas empresas para construir
											um perfil sobre os seus interesses e mostrar-lhe anúncios relevantes em
											outros websites. Eles não armazenam diretamente informações pessoais, mas
											são baseados na identificação exclusiva do seu navegador e dispositivo de
											internet. Se não permitir estes cookies, terá menos publicidade
											direcionada.</small
										>
										<!-- sub groups -->
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-row">
									<div class="form-check form-switch">
										<input
											class="form-check-input cookie-item"
											type="checkbox"
											id="dados_funcionalidade"
										/>
										<label class="form-check-label" for="dados_funcionalidade"
											>Cookies de funcionalidade</label
										>
									</div>
									<h2 class="accordion-header" id="headingTwo">
										<button
											class="accordion-button collapsed"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#collapseTwo"
											aria-expanded="false"
											aria-controls="collapseTwo"
										></button>
									</h2>
								</div>
								<div
									id="collapseTwo"
									class="accordion-collapse collapse"
									aria-labelledby="headingTwo"
									data-bs-parent="#accordionCookies"
								>
									<div class="accordion-body">
										<small
											>Estes cookies permitem que o site forneça uma funcionalidade e
											personalização melhoradas. Podem ser estabelecidos por nós ou por
											fornecedores externos cujos serviços adicionámos às nossas páginas. Se não
											permitir estes cookies algumas destas funcionalidades, ou mesmo todas, podem
											não atuar corretamente.</small
										>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-row">
									<div class="form-check form-switch">
										<input
											class="form-check-input cookie-item"
											type="checkbox"
											id="dados_desempenho"
										/>
										<label class="form-check-label" for="dados_desempenho"
											>Cookies de desempenho</label
										>
									</div>
									<h2 class="accordion-header" id="headingThree">
										<button
											class="accordion-button collapsed"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#collapseThree"
											aria-expanded="false"
											aria-controls="collapseThree"
										></button>
									</h2>
								</div>
								<div
									id="collapseThree"
									class="accordion-collapse collapse"
									aria-labelledby="headingThree"
									data-bs-parent="#accordionCookies"
								>
									<div class="accordion-body">
										<small
											>Estes cookies permitem-nos contar visitas e fontes de tráfego, para que
											possamos medir e melhorar o desempenho do nosso website. Eles ajudam-nos a
											saber quais são as páginas mais e menos populares e a ver como os visitantes
											se movimentam pelo website. Todas as informações recolhidas por estes
											cookies são agregadas e, por conseguinte, anónimas. Se não permitir estes
											cookies, não saberemos quando visitou o nosso site.</small
										>
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<div class="accordion-row">
									<div class="form-check form-switch">
										<input class="form-check-input cookie-item" type="checkbox" id="dados_social" />
										<label class="form-check-label" for="dados_social">rede social</label>
									</div>
									<h2 class="accordion-header" id="headingFour">
										<button
											class="accordion-button collapsed"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#collapseFour"
											aria-expanded="false"
											aria-controls="collapseFour"
										></button>
									</h2>
								</div>
								<div
									id="collapseFour"
									class="accordion-collapse collapse"
									aria-labelledby="headingFour"
									data-bs-parent="#accordionCookies"
								>
									<div class="accordion-body">
										<small
											>Estes cookies são utilizados quando você partilha informação nas redes
											sociais, ou de alguma forma tem acesso aos nossos conteúdos através das
											redes sociais como o Facebook, Twitter, ou Google+.</small
										>
									</div>
								</div>
							</div>
						</div>
					</section>
				</form>
			</div>
			<div class="modal-footer">
				<div class="modal-footer-content">
					<small>
						mais informações conheça nossa
						<a
							class="category-host-list-btn category-host-list-handler"
							role="button"
							href="./politica-de-privacidade"
							data-parent-id="1"
							tabindex="0"
							>Política de privacidade
						</a>
					</small>
					<div class="btn-group" style="margin: 10px 0px">
						<button type="button" class="btn btn-warning btn-sm" id="initTerms">zerar termos</button>

						<button
							type="button"
							class="btn btn-secondary btn-sm"
							id="dismissModal"
							data-bs-dismiss="modal"
						>
							Close
						</button>

						<button type="submit" id="submitFormConsent" class="btn btn-primary btn-sm">Confirmar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
