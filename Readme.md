Instalação e acesso

- Copie o projeto enviado para o seu xampp/wamp
- Crie o banco com o nome testedev é importe o arquivo testedev.sql enviado na pasta.
- Logue o dashboard. URL esperada no navegador: http://localhost/testedev/admin Usuario: teste Senha 123

Tarefa

- Acesse o menu Catalog -> Reviews, e vá até a opcão se inserir (botão de +). Nessa página de inserir, vc deve adicionar um novo campo chamado Tipo, abaixo o campo Status. Esse campo deve ser select com a opções Interno e Externo. Sendo: Interno com valor 1 e Externo com valor 2.
- Ao selecionar a opçao Externo, deve ser exibido abaixo do campo Tipo, um novo campo chamado Link Externo, que será um input de texto.
- Será necessário criar dois campos: tipo (tinyint 1) e link_externo (text), na tabela do banco referente a ferramenta de Reviews, que vc pode identificar olhando pelo model.
- Após inserir uma novo Review, vc o verá na listagem e então deve ir em Editar. Na página de editar o Review, o campo Tipo ja deve ficar selecionado o tipo que foi salvo no banco. E o campo Link externo ja deve aparece automaticamente se o tipo que foi salvo no banco foi 2, no caso Externo, se foi salvo o tipo 1 então não aparece. Recebendo ainda no input Link externo a informação salva no banco no campo link_externo.

- Feito isso, a segunda etapa será: Monte abaixo do formulário de adicionar Review, o PSD layout.psd enviado na pasta. Essa parte envolve apenas html e css, e deve ficar idêntico ao desenho e responsivo.

Algumas dicas e informações

- Salve os SQl das alterações realizadas no banco em sql_updates.
- O opencart está estruturado em MVC, contendo tbm uma pasta language, que é carregada automaticamente em cada página. Qualquer variavel criada la, é automaticamente carregada pelo controller e pode ser usada na view referente.
- O opencart usa extensão twig nas views, então instale essa extensão no vs code.
- Ao acessar por exemplo a url admin/index.php?route=catalog/review/add significa que dentro da pasta controller vc vai encontrará a subpasta 'catalog' e dentro dela um controller chamado 'review' que contem a função add().
- Estarei todo o tempo disponível para esclarecer qualquer dúvida sobre o teste ou sobre o framework, então não perca tempo procurando demais ou esquentando a cabeça.