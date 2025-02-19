<?php include('includes/header.php') ?>
<main>
	<!-- My Styles -->
	<link rel="stylesheet" href="<?php echo $cdn; ?>assets/css/style.css">

	<style>
		h1{
			font-family: Gilroy-bold;
		}

		p, li{
			font-family: Gilroy-light;
		}

		li{
			font-weight: bold;
		}

		p{
			font-weight: 100;
		}

		.headerCookiePage{
			background-color: #d7a96b;
			padding: 20px;
			margin-bottom: 20px;
			border-radius: 10px;
			color: white;
		}
	</style>
	<article class="artigo">
		<h1 class="headerCookiePage"><?php echo strtoupper($company['name']); ?> - TERMOS E CONDIÇÕES</h1>

		<p>
			Os termos e condições (“Termos”) descrevem como <?php echo $company['name']; ?> ('Empresa,' 'nós,' e 'nosso') regula o
			uso deste website <?php echo $company['name']; ?> (o 'website').<br />Por favor leia as informações a seguir com
			cuidado de forma a entender as nossas praticas referentes ao uso do website. A Empresa poderá alterar os
			Termos a qualquer altura. A Empresa poderá informa-lo da alteração dos Termos utilizando os meios de
			comunicação disponíveis. A Empresa recomenda que verifique o website com frequência de forma a que veja a
			versão atual dos Termos e as versões anteriores.
		</p>
		<ol>
			<li>
				POLÍTICAS DE PRIVACIDADE<br />
				A nossa política de privacidade encontra-se disponível em outra página. A nossa política de privacidade
				explica-lhe como nós utilizamos os seus dados pessoais. Ao utilizar o nosso website você reconhece que
				tem conhecimento e aceitas as nossas políticas de privacidade e da forma como processamos os seus dados.
			</li>
			<br />
			<?php if($termsOfUse['hasUserAccounts']){ ?>
			<li>
				A SUA CONTA<br />
				Quando usa o nosso website, você fica responsável por assegurar a confidencialidade da sua conta, senha
				e outros dados. Não poderá passar a sua conta a terceiros. Nós não nos responsabilizamos por acessos não
				autorizados que resultem de negligencia por parte do utilizador (dono da conta). A empresa está no
				direito de terminar o serviço, ou cancelar a sua conta e remover os seus dados, caso você partilhe a sua
				conta.
			</li>
			<br />
			<?php } ?>
			<li>
				SERVIÇOS<br />
				O website permite que você use os serviços disponíveis no website. Não poderá utilizar esses serviços
				com propósitos ilegais. Nós poderemos em alguns casos, estipular um valor para poder utilizar o website.
				Todos os preços serão publicados separadamente nas páginas apropriadas no website. Poderemos em alguns
				casos, e a qualquer momento mudar os valores para poder aceder. Poderemos também utilizar sistemas de
				processamento de pagamentos que terão taxas de processamento de pagamentos. Algumas dessas taxas poderão
				ser apresentadas quando você escolher um determinado meio de pagamento. Todos os detalhes sobre as taxas
				desses sistema de pagamentos poderão ser encontrados no seus respectivos
			</li>
			websites.<br />
			<br />
			<li>
				SERVIÇOS DE TERCEIROS<br />
				O website poderá incluir links para outros websites, aplicações ou plataformas. Nós não controlamos os
				websites de terceiros, e não seremos responsáveis pelos conteúdos e outro tipo de materiais incluídos
				nesses websites. Nós deixamos esses disponíveis para você e mantemos todos os nossos serviços e
				funcionalidades no nosso website.
			</li>
			<br />
			<li>
				USOS PROIBIDOS E PROPRIEDADE INTELECTUAL<br />
				Nós concedemos a você uma licença revogável, intransferível e não exclusiva para aceder e usar o nosso
				website de um dispositivo de acordo com os Termos. Você não deve usar o website para fins ilegais, ou
				proibidos. Você não pode usar o website de forma a que possa desabilitar, danificar ou interferir no
				website.<br />
				Todo o conteúdo presente no nosso website incluindo texto, código, gráficos, logos, imagens, vídeos,
				software utilizados no website (doravante e aqui anteriormente o 'Conteúdo'). O conteúdo é propriedade
				da empresa, ou dos seus contratados e protegidos por lei (propriedade intelectual) que protegem esses
				direitos. Você não pode publicar, partilhar, modificar, fazer engenharia reversa, participar da
				transferência ou criar e vender trabalhos derivados, ou de qualquer forma usar qualquer um dos
				Conteúdos. <br />A sua utilização do website não lhe dá o direito de fazer qualquer uso ilegal e não
				permitido do Conteúdo e, em particular, você não poderá alterar os direitos de propriedade ou avisos no
				Conteúdo. Você deverá usar o Conteúdo apenas para seu uso pessoal e não comercial. A Empresa não concede
				a você nenhuma licença para propriedade intelectual dos seus conteúdos.
			</li>
			<br />
			<li>
				MATERIAIS DA EMPRESA<br />
				Ao publicar, enviar, submeter, ou efetuar upload do seu Conteúdo, você está a ceder os direitos do uso
				desse Conteúdo a nós para o desenvolvimento do nosso negócio, incluindo, mas não limitado a, os direitos
				de transmissão, exibição pública, distribuição, execução pública, cópia, reprodução e tradução do seu
				Conteúdo; e publicação do seu nome em conexão com o seu Conteúdo.<br />
				Nenhuma compensação será paga com relação ao uso do seu Conteúdo. A Empresa não terá obrigação de
				publicar ou desfrutar de qualquer Conteúdo que você possa nos enviar e poderá remover seu Conteúdo a
				qualquer momento sem qualquer aviso. Ao publicar, fazer upload, inserir, fornecer ou enviar o seu
				Conteúdo, você garante e declara que possui todos os direitos sobre seu Conteúdo.
			</li>
			<br />
			<li>
				ISENÇÃO DE CERTAS RESPONSABILIDADES<br />
				As informações disponíveis através do website podem incluir erros tipográficos ou imprecisões. A Empresa
				não será responsável por essas imprecisões e erros. A Empresa não faz declarações sobre a
				disponibilidade, precisão, confiabilidade, adequação e atualidade do Conteúdo contido e dos serviços
				disponíveis no website. Na medida máxima permitida pela lei aplicável, todos os Conteúdos e serviços são
				fornecidos 'no estado em que se encontram'. A Empresa se isenta de todas as garantias e condições
				relativas a este Conteúdo e serviços, incluindo garantias e provisões de comercialização, adequação a um
				determinado propósito.
			</li>
			<br />
			<li>
				INDENIZAÇÃO<br />
				Você concorda em indemnizar, defender e isentar a Companhia, seus gerentes, diretores, funcionários,
				agentes e terceiros, por quaisquer custos, perdas, despesas (incluindo honorários de advogados),
				responsabilidades relativas, ou decorrentes de sua fruição ou incapacidade para aproveitar o website, ou
				os seus serviços e produtos da Empresa, a sua violação dos Termos, ou a sua violação de quaisquer
				direitos de terceiros, ou a sua violação da lei aplicável. Você deve cooperar com a Empresa na afirmação
				de quaisquer defesas disponíveis.
			</li>
			<br />
			<?php if($termsOfUse['hasUserAccounts']){ ?>
		
			<li>
				CANCELAMENTO E RESTRIÇÃO DE ACESSO<br />
				A Empresa pode cancelar ou bloquear o seu acesso ou conta no website e os seus respectivos serviços, a
				qualquer altura, sem aviso, no caso de você violar os Termos e condições.
			</li>
			<br />
			<?php } ?>
			<li>
				DIVERSOS<br />
				A lei que rege os Termos deve ser as leis substantivas do país onde a Empresa está estabelecida, exceto
				as regras de conflito de leis. Você não deve usar o Website em jurisdições que não dêem efeito a todas
				as disposições dos Termos.<br />
				Nenhuma parceria, emprego ou relacionamento de agência estará implícito entre você e a Empresa como
				resultado dos Termos ou uso do Website. Nada nos Termos deverá ser uma derrogação ao direito da Empresa
				de cumprir com solicitações ou requisitos governamentais, judiciais, policiais e policiais ou requisitos
				relacionados ao seu usufruto do Website.<br />
				Se qualquer parte dos Termos for considerada inválida ou inexequível de acordo com a lei aplicável, as
				cláusulas inválidas ou inexequíveis serão consideradas substituídas por cláusulas válidas e exequíveis
				que deverão ser semelhantes à versão original dos Termos e outras partes e seções do Contrato. Termos
				serão aplicáveis a você e à Empresa.<br />
				Os Termos constituem o acordo integral entre você e a Empresa em relação ao desfrute do Website e os
				Termos substituem todos os anteriores ou comunicações e ofertas, sejam eletrônicas, orais ou escritas,
				entre você e a Empresa.<br />
				A Empresa e suas afiliadas não serão responsáveis por uma falha ou atraso no cumprimento de suas
				obrigações quando a falha ou atraso resultar de qualquer causa além do controle razoável da Empresa,
				incluindo falhas técnicas, desastres naturais, bloqueios, embargos, revoltas, atos, regulamentos,
				legislação. ou ordens de governo, atos terroristas, guerra ou qualquer outra força fora do controle da
				Empresa.<br />
				Em caso de controvérsias, demandas, reclamações, disputas ou causas de ação entre a Empresa e você em
				relação ao Website ou outros assuntos relacionados, ou aos Termos, você e a Empresa concordam em tentar
				resolver tais controvérsias, demandas, reclamações, disputas , ou causas de ação por negociação de
				boa-fé, e em caso de falha de tal negociação, exclusivamente através dos tribunais do país onde a
				Companhia está estabelecida.
			</li>
			<br />
			<li>
				RECLAMAÇÕES<br />
				Estamos empenhados em resolver quaisquer reclamações sobre a forma como recolhemos ou usamos os seus
				dados pessoais. Se você gostaria de fazer uma reclamação sobre estes Termos ou nossas práticas em
				relação aos seus dados pessoais, entre em contato conosco em:
				<a href="mailto:<?php echo $company['email']; ?>" hyperspeed-configured="false"><?php echo $company['email']; ?></a>.
				<br />Responderemos à sua reclamação assim que pudermos e, em qualquer caso, dentro de 30 dias.
				<br />Esperamos resolver qualquer reclamação que seja levada ao nosso conhecimento, no entanto, se você
				achar que a sua reclamação não foi adequadamente resolvida, você se reserva no direito de entrar em
				contato com a autoridade supervisora de proteção de dados local.
			</li>
			<br />
			<li>
				INFORMAÇÃO DE CONTATO<br />
				Agradecemos os seus comentários ou perguntas sobre estes Termos. Você pode nos contatar por escrito em
				<a href="mailto:<?php echo $company['email']; ?>" hyperspeed-configured="false"><?php echo $company['email']; ?></a>.
			</li>
		</ol>
		<p></p>
	</article>
</main>
