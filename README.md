# Stock Control
  Este sistema de software será utilizado por uma fábrica de produtos de limpeza (detergente, sabão em pó, sabão em barra e outros). Esta fábrica atua em diferentes cidades e realiza suas vendas diretamente para os supermercados, através de funcionários dedicados a esta função. 
  A fábrica em questão possui um depósito de matérias primas, no qual todos seus insumos são estocados para futura produção. Seguindo a linha de produção, a empresa possui suas reais atividades de produção, realizada por operários no “chão de fábrica”. Após o término da fabricação, os produtos vão para estoque e aguardam pedidos de compra para que sejam levados para os supermercados destino. O esquema pode ser representado pela imagem abaixo:

  Este software visa solucionar os três principais problemas

  Estoque de matéria prima
  Estoque dos produtos
  Gerenciamento dos produtos

    Dessa maneira, o software a ser desenvolvido deve auxiliar a resolver este problema, fazendo todo o controle de matéria prima, produtos e logística. O mesmo será realizado em plataforma Web, sem extensão para aplicativos móveis. 
    Para controle da matéria prima e dos produtos finais, o software armazenará informações da quantidade de um item disponível e qual o preço pago por aquele insumo, para que os gerentes sejam capazes de inferir o custo de seus produtos. Além disso, deve ser possível registrar todas as movimentações que ocorreram de entrada e saída de produtos do depósito de matéria prima e do estoque, gerando relatórios dessas atividades com as frequências semanal e mensal.
    Com relação à distribuição logística do software, o mesmo é capaz de dar suporte aos vendedores representantes da empresa. Estes vendedores vão à campo realizar suas vendas, e podem realizá-las com relação a produtos em estoque ou realizar pedidos de produção (venda por demanda). Durante a venda, o vendedor deve ser capaz de cadastrar um novo cliente (inserindo CNPJ, nome fantasia, endereço, telefone e responsável) ou acessar os dados de um cliente previamente fidelizado para cadastrar os pedidos. É necessário que seja possível agendar uma data de entrega, que poderá ser reavaliada em momento futuro. Vale ressaltar que os produtos não possuem preço fixo, apenas um preço de custo cadastrado no sistema e os vendedores possuem total liberdade de negociação, uma vez que seu salário se dá através de uma porcentagem do lucro gerado.
    Os funcionários fazem parte do “core” do sistema, e por esse motivo é necessário que seja possível realizar o cadastro dos mesmos. Vale ressaltar também que esses funcionários possuem diferentes níveis de acesso ao sistema, variando de acordo com suas responsabilidades e funções.

  Descrição dos utilizadores

  Gerente Geral
    Responsável pela alta administração da organização.
    Tem acesso aos dados gerais do software, para que possa ter uma visão holística do que acontece na fábrica. Pode visualizar, cadastrar e remover os funcionários cadastrados, números do depósito, do estoque e de vendas.

  Gerente de produção
    Responsável pela coordenação e funcionamento da fábrica.
    É responsável por realizar as atualizações do sistema : Cadastro e remoção de novas matérias primas, Cadastro e remoção de produtos no estoque, Cadastro e remoção de funcionários do setor.

  Vendedores
    Realizam venda e prospecção de clientes, indo de local a local para realizar esta atividade.
    É responsável pelo cadastro de novos clientes e de vendas, que podem ser feitas a partir do estoque disponível ou por demanda.

  Chefe Logístico
    Realiza as entregas dos produtos vendidos.
    É responsável por retirar as mercadorias vendidas e transportá-las ao cliente e realizar a confirmação de entrega.

  Cliente
    Visualizar status do seu pedido.
    Tem acesso ao acompanhamento de pedido.
    
    # O sistema do Stock Control será desenvolvido em plataforma web utilizando laravel
    
    Um Framework PHP utilizado para o desenvolvimento, que utiliza a arquitetura MVC e tem como principal característica ajudar a desenvolver aplicações seguras e performáticas de forma rápida, com código limpo e simples, já que ele incentiva o uso de boas práticas de programação e utiliza o padrão PSR-2 como guia para estilo de escrita do código.

  Para a criação de interface gráfica, o Laravel utiliza uma Engine de template chamada Blade, que traz uma gama de ferramentas que ajudam a criar interfaces bonitas e funcionais de forma rápida e evitar a duplicação de código.

  Para se comunicar com um Banco de Dados o Laravel utiliza uma implementação simples do ActiveRecord chamada de Eloquent ORM, que é uma ferramenta que traz várias funcionalidades para facilitar a inserção, atualização, busca e exclusão de registros. Com configuração simples e pequena e com pouco código podemos configurar a conexão com Banco de Dados e trabalhar com ele.

  Atualmente estamos utilizando o Framework em sua versão 5., e a primeira versão LTS lançada neste ano de 2015 será a versão que utilizaremos para criar nossa primeira aplicação.
  
  Requerimentos:

    PHP >= 7.0.0
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension

