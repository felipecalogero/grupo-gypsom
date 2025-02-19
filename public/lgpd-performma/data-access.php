<?php include('includes/header.php') ?>

<main style="flex-direction: column">
	<div class="container-sm">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<a
					class="nav-link active"
					id="acesso-aos-dados-tab"
					data-bs-toggle="tab"
					href="#data-request"
					role="tab"
					aria-controls="home"
					aria-selected="true"
					>Pedido de Acesso aos Dados</a
				>
			</li>
			<li class="nav-item" role="presentation">
				<a
					class="nav-link"
					id="delete-data-tab"
					data-bs-toggle="tab"
					href="#delete-data"
					role="tab"
					aria-controls="profile"
					aria-selected="false"
					>Exclusão de dados</a
				>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div
				class="tab-pane fade show active"
				id="data-request"
				role="tabpanel"
				aria-labelledby="acesso-aos-dados-tab"
			>
				<form action="" method="post">
					<br />
					<p>
						<b
							>Solicite uma cópia dos dados que temos sobre você. Um e-mail será enviado para você com os
							dados depois que forem gerados.</b
						>
					</p>
					<div class="row align-items-start">
						<div class="col-6">
							<label class="form-label" for="lgpd-email">O email:</label>
							<input
								type="email"
								id="lgpd-email"
								class="form-control"
								name="lgpd-email"
								value=""
								required=""
							/>
						</div>

						<div class="col-auto"></div>
					</div>
					<br />
					<button type="submit" name="rgpdpdasubmit" class="btn btn-primary">Enviar pedido</button>
				</form>
			</div>
			<div class="tab-pane fade" id="delete-data" role="tabpanel" aria-labelledby="delete-data-tab">
				<div id="rgpdur" class="Form Control">
					<br />
					<div class="alert alert-warning">
						Por favor, reconsidere a exclusão dos seus dados, pois você pode perder atualizações e ofertas
						importantes de nossa parte. Se você realmente quiser prosseguir, preencha seu endereço de e-mail
						na caixa abaixo
					</div>
					<form action="" method="post" >
						<br />
						<div class="row align-items-start">
							<div class="col-md-6">
								<label class="form-label" for="name-delete">Nome:</label><br />
								<input
									type="text"
									id="name-delete"
									class="form-control"
									name="name-delete"
									value=""
									required=""
								/>
								<br /><br />
							</div>

							<div class="col-md-6">
								<label class="form-label" for="email-delete">O email:</label>
								<input
									type="email"
									id="email-delete"
									class="form-control"
									name="email-delete"
									value=""
									required=""
								/>
								<br />
							</div>
						</div>
						<button type="submit" name="sumit-form-delete" class="btn btn-warning">Enviar pedido</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include('includes/footer.php') ?>
