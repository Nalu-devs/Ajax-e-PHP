CREATE TABLE produto(
    idProduto int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    descricao mediumtext,
    preco float NOT NULL,
    precoPromocao float,
    peso float NOT NULL,
    idCategoria int NOT NULL,
    primary key(idProduto)
);

CREATE TABLE categoria(
    idCategoria int NOT NULL AUTO_INCREMENT,
    nomeCategoria varchar(70) NOT NULL,
    primary key(idCategoria)
);

CREATE TABLE frete(
    local varchar(100) NOT NULL,
    pesoLimite float NOT NULL,
    preco float NOT NULL,
    primary key(local, pesoLimite)
);

CREATE TABLE usuario(
    email varchar(100) NOT NULL,
    senha varchar(20) NOT NULL,
    nome varchar(100) NOT NULL,
    endereco varchar(100) NOT NULL,
    cidade varchar(50) NOT NULL,
    estado char(2) NOT NULL,
    cep char(8) NOT NULL,
    primary key(email)
);

CREATE TABLE pedido(
    idPedido int NOT NULL AUTO_INCREMENT,
    email varchar(100) NOT NULL,
    data date NOT NULL,
    valorTotal float NOT NULL,
    precoFrete float NOT NULL,
    primary key (idPedido)
);

CREATE TABLE itemPedido(
    idPedido int NOT NULL,
    idProduto int NOT NULL,
    preco float NOT NULL,
    quantidade int NOT NULL,
    primary key(idPedido, idProduto)
);

insert into categoria (nomeCategoria) values ('Beleza e Saúde');
insert into categoria (nomeCategoria) values ('Brinquedos');
insert into categoria (nomeCategoria) values ('Eletrônicos');
insert into categoria (nomeCategoria) values ('Eletrodomésticos');

insert into produto(nome, descricao, preco, precoPromocao, peso, idCategoria)
values('Balança c/ Medidor de Gordura', 'Com monitoramento do seu eso, taxa de gordura, taxa de
liquido e musculo, você podera ter um retrato diario da evolução do peso em seu corpo.', 169, 0,
1.3, 1);
insert into produto(nome, descricao, preco, precoPromocao, peso, idCategoria)
values('Joaquina, a boneca que fala', 'Com a mais alta tecnologia, Joaquina fala mais de 500 frases
e reconhece quand a mamãe penteia seu cabelo.', 799, 0, 5, 2);
insert into produto(nome, descricao, preco, precoPromocao, peso, idCategoria)
values('TV 29 polegadas tela plana', 'Tela super plana, 181 canais, contrle remoto luminoso, closed
caption e stereo surround/SAP', 979, 899, 48, 3);
insert into produto(nome, descricao, preco, precoPromocao, peso, idCategoria)
values('Ar condicionado 10.000 btus', 'Controle de temperatura: eletronico, filtro antibacteriana,
proteção anti-corrosão.', 1099, 999, 31, 4);

insert into frete values("São Paulo - Capital", 5, 18.90);
insert into frete values("São Paulo - Capital", 100, 34.90);
insert into frete values("Rio de Janeiro - Capital", 5, 19.90);
insert into frete values("Rio de Janeiro  - Capital", 100, 35.90);