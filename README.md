# siteUnit
PAS da disciplina Web Unit

Desenvolva um site baseado em HTML 5 que seja capaz auxiliar órgão de saneamento ambiental de sua cidade na gestão georreferenciada dos lixos depositados em lugares impróprios da cidade.
Esse site deverá conter CSS adequado ao tema meio ambiente.
Com isso, os órgãos públicos responsáveis poderão realizar o planejamento das intervenções com o apoio de sua ferramenta.

Seu site deve permitir além do cadastro de onde o lixo foi encontrado, baseados na geolocalização. O site
deve ter as opções de exclusão e edição das informações atreladas ao lixo: nome da rua, número, CEP,
bairro, cidade, estado, foto da situação do lixo, sua localização no mapa e um campo para descrição para que
o usuário faça algum tipo de comentário.

Obs: Todos os campos do cadastro deverão ter um java script validando se existe informação em cada
campo de cadastro das árvores.

Para plotar as informações no mapa, a sugestão é usar a API do Google que foi postado no fórum. Mas,
segue aqui o link para usar a API: https://developers.google.com/maps/documentation/javascript/?hl=pt-br
Para usar será precisa fazer um cadastro para receber um Token. Com ele será possível usar a API de
Mapas. Existem inúmeros exemplos na internet.
Lembre que o site não é composto de uma única página. Terá a página principal, páginas de listagem,
visualização, edição e deleção. Use o conhecimento adquirido também na disciplina de Engenharia de
software para projetar bem o software.

* Cadastro de onde o lixo foi encaminhado, com geolocalização
* opções de exclusão e edição
	- campos:
		--nome da rua
		--número
		--CEP
		--bairro
		--cidade
		--estado
		--foto da situação do lixo
		--sua localização no mapa
		--comentário
* construir as validações em JavaScript
* páginas:
	-pagina principal
	-listagem
	-visualização
	-edição
	-deleção
		
O site também deve oferecer a possibilidade de visualização do mapa unificado dos lixos encontrado nas
Cidades de forma que todos os registros de lixos sejam visualizados na tela de forma única.

-- trazer informações do banco
--PARA CONSULTA

--imagem https://br.depositphotos.com/86088272/stock-photo-3d-red-map-pointer-icon.html

-- Tela cadastro
* falta colocar mensagem quando for cadastrado no banco com sucesso
* validar se os campos foram preenchidos ou não
* mudar a logo