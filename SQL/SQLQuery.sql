CREATE DATABASE bd1; --Cria o banco de dados

DROP DATABASE bd1; --Deleta o banco de dados

SELECT coluna1, coluna2 FROM tabela; -- Seleciona estas duas colunas da tabela

SELECT * FROM tabela; -- Selecionar **TUDO** da tabela

/*Desafio[0] => A Equipe de marketing precisa fazer uma pesquisa sobre os nomes mais comuns de
seus clientes e precisa do nome e sobrenome de todos os clientes que estão cadastrados no sistema.
Informações adicionais -> firstName & lastName*/

/*#Resposta ->*/ SELECT firstName, lastName FROM person.person;

SELECT DISTINCT coluna1,coluna2 FROM tabela -- O Comando DISTINCT remove informações duplicadas de uma tabela.

-- Desafio[1] => Quantos nomes e sobrenomes únicos temos em nossa tabela person.person?

/*#Resposta ->*/ SELECT DISTINCT firstName, lastName FROM person.person;

SELECT coluna1,coluna2,coluna_n FROM tabela WHERE condicao; --Pesquisa especifica.

Exemplo: SELECT * FROM person.person WHERE lastName = 'miller'; --Faz uma pesquisa de todas as
--pessoas com o sobrenome 'miller'.

Exemplo2: SELECT * FROM person.person WHERE lastName = 'miller' AND firstName = 'anna'; --
--Pesquisa por todos nesta tabela com nome "anna" e sobrenome "miller".

Exemplo3: SELECT * FROM production.Product WHERE color = 'blue' OR color = 'black'; --Pesquisa na tabela
--production.Product por todos os itens que tenham a cor azul ou preto.

Exemplo4: SELECT * FROM production.Product WHERE listPrice > 1500; -- Seleciona todos os produtos
--com os preços maiores que 1.500.

Exemplo5: SELECT * FROM production.Product WHERE listPrice > 1500 and listPrice < 5000; -- 
--Seleciona todos os produtos com o preco maior que 1.500 e menor que 5.000.

Exemplo6: SELECT * FROM production.Product WHERE color <> 'red'; --Seleciona todos os produtos
--com a cor diferente de vermelho.


/*Desafio[2] => A Equipe de produção de produtos precisa do nome de todas as pecas que pesam mais
que 500kg mas não mais que 700kg para inspecao.*/

/*Desafio[3] => Foi pedido pelo marketing uma relacao de todos os empregados que sao casados e
sao assalariados.*/

/*Desafio[4] => Um usuário chamado Peter Krebs esta devendo pagamento, consiga o email dele para que possamos
enviar uma combrança!*/
#Resposta[2] -> SELECT nome FROM production.Product WHERE Weight > 500 AND Weight <= 700;
#Resposta[3] -> SELECT * FROM humanResources.Employee WHERE maritalStatus = 'married' AND salariedFlag = 1;
#Resposta[4] -> SELECT email FROM humanResources.Employee WHERE firstName = 'Peter' AND lastName = 'Krebs';

-- COUNT
Exemplo1: SELECT COUNT(*) FROM tabela; -- Conta quantos registros tem na tabela.

Exemplo2: SELECT COUNT(DISTINCT coluna1) FROM tabela; -- Conta quantos registros tem na tabela.

Exemplo3: SELECT COUNT(title) FROM person.person -- Conta quantos titulos tem na tabela.

Exemplo4: SELECT COUNT(DISTINCT title) FROM person.person -- Conta quantos titulos únicos tem na tabela

/*Desafio[5] => Quantos produtos temos cadastrados em nossa tabela de produtos?*/
/*Desafio[6] => Quantos tamanhos de produtos temos cadastrados em nossa tabela?*/

#Resposta[5] -> SELECT COUNT(*) FROM production.Product;
#Resposta[6] -> SELECT COUNT(DISTINCT size) FROM production.Product;

-- TOP

Exemplo1: SELECT TOP 10 * FROM tabela; -- Seleciona os 10 primeiros registros da tabela.

Exemplo2: SELECT TOP 100 * FROM production.Product; -- Seleciona os 100 primeiros produtos da tabela.

-- ORDER BY

Exemplo1: SELECT coluna1,coluna2 FROM tabela ORDER BY coluna1 ASC/DESC; -- Seleciona as colunas coluna1 e coluna2.

Exemplo2: SELECT * FROM person.person ORDER BY lastName ASC; -- Seleciona todos os registros da tabela de forma crescente 
--de A ate Z.

Exemplo3: SELECT * FROM person.person ORDER BY firstName DESC; -- Seleciona todos os registros da tabela de forma decrescente 
--de Z ate A.

Exemplo4: SELECT * FROM person.person ORDER BY lastName DESC, firstName ASC; -- Seleciona todos os registros da tabela de 
--forma que o primeiro nome(firstName) apareça de forma crescente e o sobrenome de forma decrescente.

Exemplo5: SELECT firstName AND lastName FROM person.person ORDER BY firstName DESC, lastName ASC; -- Seleciona apenas os nomes 
--da tabela de forma que o primeiro nome(firstName) apareça de forma decrescente e o sobrenome de forma crescente.

Exemplo6: SELECT firstName, lastName FROM person.person ORDER BY middleName ASC; -- Seleciona apenas os nomes da tabela 
-- usando apenas o nome do meio de forma crescente.

/*Desafio [7] => Obter o ProductID dos 10 produtos mais caros cadastrados no sistema, listando do mais caro
para o mais barato.*/

#Resposta[7] -> SELECT TOP 10 ProductID FROM production.Product ORDER BY listPrice DESC;

/*Desafio [8] => Obter o nome e numero do produto dos produtos que tem o ProductID entre 1~4*/

#Resposta[8] -> SELECT ProductID, productName FROM production.Product WHERE ProductID BETWEEN 1 AND 4;

-- BETWEEN

-- Usando para encontrar entre um valor mínimo e um máximo.

Exemplo1: SELECT * FROM production.Product WHERE listPrice BETWEEN 1000 AND 1500; -- Seleciona todos os produtos que tem o preço entre 1000 e 1500.

--Caso queira encontrar NÃO entre 1000 e 1500 ou sejá lá qual for o valor, basta utilizar o NOT.

Exemplo2: SELECT * FROM production.Product WHERE listPrice NOT BETWEEN 1000 AND 1500;

Exemplo3: SELECT * FROM humanResources.Employee WHERE hireDate BETWEEN '2000-01-01' AND '2000-12-31' ORDER BY hireDate; -- Seleciona todos os empregados que se contratou entre o ano 2000.

-- IN

Exemplo1: SELECT * FROM person.person WHERE businessEntityID IN (2, 7, 13); -- Seleciona todos os registros da tabela que tenham o businessEntityID 2, 7 e 13.

-- LIKE

Exemplo1: SELECT * FROM person.person WHERE firstName LIKE 'ovi%'; -- Seleciona todos os registros da tabela que tenham o primeiro nome que comece com o caracter 'ovi'.

Exemplo2: SELECT * FROM person.person WHERE firstName LIKE '%to'; -- Seleciona todos os registros da tabela que tenham o primeiro nome que termine com o caracter 'to'.

Exemplo3: SELECT * FROM person.person WHERE firstName LIKE '%essa%'; -- Seleciona todos os registros da tabela que tenham o primeiro nome que contenha a palavra 'essa'.

Exemplo4: SELECT * FROM person.person WHERE firstName LIKE '%to_'; -- Seleciona todos os registros da tabela se limitando ao 'to' e nunca mais do que isso.

/*Desafio[9] => Quantos produtos temos cadastrados no sistema que custam mais que 1500 dolares?*/

#Resposta[9] -> SELECT COUNT(listPrice) FROM production.Product WHERE listPrice > 1500;

/*Desafio [10] => Quantas pessoas temos com o sobrenome que inicia com a letra P?*/

#Resposta[10] -> SELECT COUNT(lastName) FROM person.person WHERE lastName LIKE 'P%';

/*Desafio [11] => Em quantas cidades únicas estão cadastrados nossos clientes?*/

#Resposta[11] -> SELECT COUNT(DISTINCT city) FROM person.Address;

/*Desafio [12] => Quais são as cidades únicas que temos cadastrados em nosso sistema?*/

#Resposta[12] -> SELECT DISTINCT city FROM person.Address;

/*Desafio [13] => Quantos produtos vermelhos tem o preço entre 500 a 1000 dolares?*/

#Resposta [13] -> SELECT COUNT(*) FROM production.Product WHERE color = 'red' AND listPrice BETWEEN 500 AND 1000;

/*Desafio [14] => Quantos produtos tem a palavra 'road' no nome deles?*/

#Resposta [14] -> SELECT COUNT(*) FROM production.Product WHERE productName LIKE '%road%';

-- MIN MAX SUM AVG

-- São funções de agregação que retornam o valor mínimo, máximo, soma, média, etc.

Exemplo1: SELECT TOP 10 SUM(lineTotal) AS "somaTotal" FROM sales.SalesOrderDetail; -- Seleciona a soma dos valores de todos os registros da tabela.

Exemplo2: SELECT TOP 10 MIN(lineTotal) AS "precoMinimo" FROM sales.SalesOrderDetail;-- Seleciona o valor mínimo dos preços dos produtos.

Exemplo3: SELECT TOP 10 MAX(lineTotal) AS "precoMinimo" FROM sales.SalesOrderDetail; -- Seleciona o valor máximo dos preços dos produtos.

Exemplo4: SELECT TOP 10 AVG(lineTotal) AS "precoMinimo" FROM sales.SalesOrderDetail; -- Seleciona a média dos preços dos produtos.

-- GROUP BY

Exemplo1: SELECT * FROM sales.SalesOrderDetail GROUP BY productID; -- Seleciona todos os registros da tabela agrupando por produto.

Exemplo2: SELECT specialOfferID, SUM(unitPrice) AS "SOMA" FROM sales.SalesOrderDetail GROUP BY specialOfferID; -- Seleciona todos os registros da tabela agrupando por produto.

Exemplo3: SELECT productID, COUNT(productID) AS "CONTAGEM" FROM sales.SalesOrderDetail GROUP BY productID; -- Seleciona todos os registros da tabela agrupando por produto.

Exemplo4: SELECT firstName, COUNT(firstName) AS "CONTAGEM" FROM person.person GROUP BY firstName; -- Seleciona todos os registros da tabela agrupando por nomes.

Exemplo5: SELECT color,AVG(listPrice) AS "PRECO" FROM production.Product WHERE color = 'silver' GROUP BY color; -- Seleciona todos os registros da tabela agrupando por cores. Lembrando que "AVG" tira a média.

/*Desafio[15] => Quantas pessoas tem o middleName agrupadas por o middleName*/

#Resposta[15] -> SELECT middleName,COUNT(firstName) AS "QUANTIDADE",FROM person.person GROUP BY middleName;

/*Desafio[16] => Qual a quantidade em média que cada produto é vendido na loja?*/

#Resposta[16] -> SELECT productID,AVG(orderQty) AS "MEDIA" FROM sales.SalesOrderDetail GROUP BY productID;

/*Desafio[17] => Quais foram as 10 vendas que no total tiveram os maiores valores de venda por produto do maior valor para o menor?*/

#Resposta[17] -> SELECT TOP 10 productID,SUM(lineTotal) AS "TOTAL" FROM sales.SalesOrderDetail GROUP BY productID ORDER BY TOTAL DESC;

/*Desafio[18] => Quantos produtos, qual produto e qual a quantidade média de produtos que temos cadastrados nas nossas ordem de serviços? agrupados por productID*/

#Resposta[18] -> SELECT productID,COUNT(productID) AS "CONTAGEM",AVG(orderQty) AS "MEDIA" FROM production.WorkOrder GROUP BY productID;

-- HAVING

Exemplo1: SELECT firstName, count(firstName) FROM person.person GROUP BY firstName HAVING COUNT(firstName) > 10; -- Seleciona todos os registros da tabela agrupando por nomes e somando o número de registros que tenham o nome. Se o número de registros for maior que 10, ele será selecionado.

Exemplo2: SELECT productID,SUM(lineTotal) AS "TOTAL" GROUP BY productID HAVING SUM(lineTotal) BETWEEN 162000 AND 500000; -- Seleciona todos os registros da tabela agrupando por produto e somando o valor total de cada produto. Se o valor total for entre 162000 e 500000, ele será selecionado.

Exemplo3: SELECT firstName,COUNT(firstName) AS "CONTAGEM" FROM person.person WHERE title = 'Mr.' GROUP BY firstName HAVING COUNT(firstName) > 10; -- Seleciona todos os registros da tabela agrupando por nomes e somando o número de registros que tenham o nome. Se o número de registros for maior que 10, ele será selecionado.

/*Desafio[19] => Estamos querendo identificar as provincias(stateProvinceID) com o maior número de cadastros no nosso sistema, então é preciso encontrar quais províncias(stateProvinceID) estão registradas no banco de dados mais que 1000 vezes.*/

#Resposta[19] -> SELECT stateProvinceID,COUNT(*) AS "CONTAGEM" FROM person.Address GROUP BY stateProvinceID HAVING COUNT(*) > 1000;

/*Desafio[20] => Sabendo que se trata de uma multinacional, os gerentes querem saber quais produtos(productID) não estão trazendo em média no mínimo 1 milhão em total de vendas(lineTotal)*/

#Resposta[20] -> SELECT productID,AVG(lineTotal) AS "MEDIA" FROM sales.SalesOrderDetail GROUP BY productID HAVING AVG(lineTotal) < 1000000;

-- AS -> Serve para nada mais nada menos que renomear uma coluna. (...)

Exemplo1: SELECT TOP 10 listPrice AS "Preço" FROM production.Product; -- Altera o nome da coluna para "Preço" no resultado da Query.

Exemplo2: SELECT TOP 10 AVG(listPrice) AS "Preço Médio" FROM production.Product; -- Altera o nome da coluna para "Preço Médio" no resultado da Query.

-- INNER JOIN

Exemplo1: SELECT p.businessEntityID,p.firstName,p.lastName,pe.emailAddress FROM person.person AS "P" INNER JOIN person.EmailAddress AS "PE" ON p.businessEntityID = pe.businessEntityID;

Exemplo2: SELECT pr.listPrice,pr.name,pc.name FROM production.Product AS "PR" INNER JOIN production.ProductSubCategory AS "PC" ON pr.productSubCategoryID = pc.productSubCategoryID;

Exemplo3: SELECT TOP 10 * FROM person.BusinessEntityAddress AS "BA" INNER JOIN person.Address AS "PA" ON BA.AddressID = BA.AddressID;

Exemplo4: SELECT TOP 10 PA.AddressID,PA.city,PS.stateProvinceID,PS.name FROM person.Address AS "PA" INNER JOIN person.StateProvince AS "PS" ON PS.stateProvinceID = PA.stateProvinceID;

-- O INNER JOIN retorna apenas os resultados que correspondem (existem) entre as duas tabelas.
-- Exemplo: SELECT * FROM person.person AS "P" INNER JOIN person.EmailAddress AS "PE" ON P.businessEntityID = PE.businessEntityID;


-- FULL OUTER JOIN retorna todos os resultados que existem entre as duas tabelas. Além disso, se não houverem valores correspondentes, ele retorna como NULL.
-- Exemplo: SELECT * FROM person.person AS "P" FULL OUTER JOIN person.EmailAddress AS "PE" ON P.businessEntityID = PE.businessEntityID;

-- LEFT OUTER JOIN retorna um conjunto de todos os registros da "tabelaA", e além disso, os registros correspondentes(quando disponiveis) da "tabelaB". Se não houver registros correspondentes ele simplesmente retorna como NULL.
-- Exemplo: SELECT * FROM person.person AS "P" LEFT OUTER JOIN person.EmailAddress AS "PE" ON P.businessEntityID = PE.businessEntityID;

-- LEFT JOIN
-- Exemplo: SELECT * FROM person.person AS "PP" LEFT JOIN sales.PersonCreditCard AS "PC" ON PP.businessEntityID = PC.businessEntityID;

-- UNION Combina dois ou mais resultados de um select em um resultado único.
Exemplo1: SELECT coluna1, coluna2 FROM tabela1 UNION SELECT coluna3, coluna4 FROM tabela2;

Exemplo2: SELECT coluna1, coluna2 FROM tabela1 UNION SELECT coluna3, coluna4 FROM tabela2 UNION SELECT coluna5, coluna6 FROM tabela3;

Exemplo3: SELECT productID, name, productNumber FROM production.Product WHERE name LIKE '%Chain%' UNION SELECT productID, name, productNumber FROM production.Product WHERE NAME LIKE '%Decal%';

Exemplo4: SELECT firstName, title FROM person.person WHERE title = 'Mr.' UNION SELECT firstName, title, middleName FROM person.person WHERE middleName = 'A';

--DATEPART (https://docs.microsoft.com/pt-br/sql/t-sql/functions/datepart-transact-sql?view=sql-server-ver15)

Exemplo1: SELECT salesOrderID, DATEPART(MONTH,orderDate) AS mes FROM sales.SalesOrderHeader;

Exemplo2: SELECT AVG(totalDue) AS "media",DATEPART(MONTH,orderDate) AS mes FROM sales.SalesOrderHeader GROUP BY DATEPART(MONTH,orderDate) ORDER BY mes;

Exemplo3: SELECT AVG(totalDue) AS "media",DATEPART(YEAR,orderDate) AS mes FROM sales.SalesOrderHeader GROUP BY DATEPART(YEAR,orderDate) ORDER BY mes;

Exemplo4: Exemplo2: SELECT AVG(totalDue) AS "media",DATEPART(DAY,orderDate) AS mes FROM sales.SalesOrderHeader GROUP BY DATEPART(DAY,orderDate) ORDER BY mes;

-- OPERAÇÕES EM STRINGS (https://docs.microsoft.com/pt-br/sql/t-sql/functions/string-functions?view=sql-server-ver15)

Exemplo1: SELECT CONCAT(firstName, ' ', lastName) AS "Nome Completo" FROM person.person;

Exemplo2: SELECT UPPER(firstName, ' ', lastName) AS "Nome Completo" FROM person.person;

Exemplo3: SELECT LOWER(firstName, ' ', lastName) AS "Nome Completo" FROM person.person;

Exemplo4: SELECT LEN(firstName) AS "Nome Completo" FROM person.person; -- Conta a quantidade de caracteres da string.

Exemplo5: SELECT firstName, SUBSTRING(firstName, 1, 3) AS "Nome Completo" FROM person.person; -- Retorna a substring da string.

Exemplo6: SELECT REPLACE(productNumber, '-','#') FROM production.Product; -- Substitui o caracter "-" por "#".

-- FUNÇÕES MATEMÁTICAS (https://docs.microsoft.com/pt-br/sql/t-sql/functions/mathematical-functions-transact-sql?view=sql-server-ver15)

Exemplo1: SELECT ROUND(lineTotal, 2), lineTotal FROM sales.SalesOrderDetail; -- Arredonda o valor para duas casas decimais.

Exemplo2: SELECT SQRT(lineTotal), lineTotal FROM sales.SalesOrderDetail; -- Retorna a raiz quadrada da coluna "lineTotal".

Exemplo3: SELECT ABS(lineTotal), lineTotal FROM sales.SalesOrderDetail; -- Retorna o valor absoluto da coluna "lineTotal".

-- SUBQUERY ("SUBSELECT")

Exemplo1: SELECT * FROM production.Product WHERE listPrice > (SELECT AVG(listPrice FROM production.Product));

Exemplo2: SELECT firstName FROM person.person WHERE businessEntityID IN (SELECT businessEntityID FROM humanResources.Employee WHERE jobTitle = 'Design Engineer');

/*Desafio[21] => Encontre para mim todos os endereços que estão no estado de 'Alberta', Pode trazer todas as informações.*/

#Resposta[21] -> SELECT * FROM person.Address WHERE stateProvinceID IN (SELECT stateProvinceID FROM person.StateProvince) WHERE name = 'Alberta');

-- SELF-JOIN

Sintaxe: SELECT coluna1 FROM tabelaA, tabelaB WHERE condicao;

Exemplo1: SELECT A.productID, A.discount, B.productID, B.discount FROM orderDetails AS "A", orderDetails AS "B" WHERE A.discount = B.discount; -- Retorna todos os registros que possuem o mesmo valor de desconto.

-- TIPOS DE DADOS

-- Sendo eles -> 1.Boleanos; 2.Caracteres; 3.Números; 4.Temporais

-- 1. Por padrão ele é inicializado como nulo, e pode receber tanto 1 ou 0. Ele é representado por BIT

-- 2. Representado por CHAR(n) onde n é o número de caracteres. -- Exemplo: CHAR(10) -- Exemplo: CHAR(20)

-- 3. TINYINT(n) -> Representa um número de até 8 bits. -- Exemplo: TINYINT(3) -- Exemplo: TINYINT(5)
-- 3. SMALLINT(n) -> Representa um número de até 16 bits. -- Exemplo: SMALLINT(3) -- Exemplo: SMALLINT(5)
-- 3. INT(n) -> Representa um número de até 32 bits. -- Exemplo: INT(3) -- Exemplo: INT(5)
-- 3. BIGINT(n) -> Representa um número de até 64 bits. -- Exemplo: BIGINT(3) -- Exemplo: BIGINT(5)
-- 3. NUMERIC OU DECIMAL -> Representa um número de até 65 bits. -- Exemplo: NUMERIC(3) -- Exemplo: NUMERIC(5) -- Exemplo: DECIMAL(3) -- Exemplo: DECIMAL(5)
-- 3. REAL -> Representa um número de até 24 bits. -- Exemplo: REAL(3) -- Exemplo: REAL(5)
-- 3. FLOAT -> Representa um número de até 53 bits. -- Exemplo: FLOAT(3) -- Exemplo: FLOAT(5)

-- 4. DATE -> Representa um número de até 32 bits. -- Exemplo: DATE(3) -- Exemplo: DATE(5)
-- 4. DATETIME -> Representa um número de até 64 bits. -- Exemplo: DATETIME(3) -- Exemplo: DATETIME(5) Armazena data e horas no formato aaaa/mm/dd:hh:mm:ss
-- 4. DATETIME2 -> Representa um número de até 64 bits. -- Exemplo: DATETIME2(3) -- Exemplo: DATETIME2(5) Armazena data e horas no formato aaaa/mm/dd:hh:mm:ss.sssssss
-- 4. SMALLDATETIME -> Data e hora respeitando o limite entre '1900-01-01:00:00:00' ate '2079-06-06:23:59:59'
-- 4. TIME -> horas, minutos, segundos e milissegundos, respeitando o limite de '00:00:0000000' to '23:59:59:9999999'
-- 4. DATETIMEOFFSET -> Permite armazenar informações de data e hora incluindo o fuso horário.

-- CHAVE PRIMÁRIA E ESTRANGEIRA

ExemploPrático: CREATE TABLE nome_Tabela (
    nomeColuna tipoDeDados PRIMARY KEY
    nomeColuna tipoDeDados NOT NULL
)

* Uma chave estrangeira é uma coluna ou grupo de colunas em uma tabela que identifica unicamente uma linha em outra tabela.

* Ou seja, uma chave estrangeira é definida em uma tabela onde ela é apenas uma referência e não contem todos os dados ali.

* Então uma chave estrangeira é simplesmente uma coluna ou grupo de colunas que é uma chave primária em outra tabela.

* A tabela que contem a chave estrangeira é chamada de tabela referênciadora ou tabela filho. E a tabela na qual a chave estrangeira é referênciada é chamada de tabela pai.

* Uma tabela pode ter mais de uma chave estrangeira dependendo de seu relacionamento com as outras tabelas.

* No exemplo, a tabela "Pessoa" possui uma chave estrangeira "Endereco" que é uma chave primária na tabela "Endereco".

* Uma restrição de chave estrangeira indica que uma tabela pode ter mais de uma chave estrangeira.


-- CREATE TABLE

Exemplo1: CREATE TABLE nome_Tabela (
    nomeColuna tipoDeDados PRIMARY KEY
    nomeColuna tipoDeDados ...
    nomeColuna tipoDeDados restricaoDaColuna
);

/*Principais tipos de restrições que podem ser aplicadas
1. NOT NULL -> Não pode ser nulo.
2. UNIQUE -> Não pode ser repetido. "Força para que todos os valores em uma coluna não sejam iguais."
3. CHECK -> Verifica se o valor da coluna é válido.
4. FOREIGN KEY -> Chave estrangeira.
5. PRIMARY KEY -> Chave primária.
6. DEFAULT -> Valor padrão.
7. AUTO_INCREMENT -> Valor que é incrementado automaticamente.
*/

Exemplo2: CREATE TABLE Canal (
    CanalID INT PRIMARY KEY,
    Nome VARCHAR(150) NOT NULL,
    ContagemIns INT DEFAULT 0,
    DataCriacao DATETIME NOT NULL
);

Exemplo2: CREATE TABLE Video(
    VideoID INT PRIMARY KEY,
    Nome VARCHAR(150) NOT NULL,
    Visualizacoes INT DEFAULT 0,
    Likes INT DEFAULT 0,
    Deslikes INT DEFAULT 0,
    Duracao INT NOT NULL,
    CanalID INT FOREIGN KEY REFERENCES Canal(CanalID)
);

-- INSERT INTO

Exemplo1: INSERT INTO nomeTabela(coluna1, coluna2,...) VALUES(valor1, valor2);

Exemplo2: INSERT INTO nomeTabela(coluna1, coluna2,...)
    VALUES(valor1, valor2),
    (valor3, valor4),
    (valor5, valor6);

Exemplo3: CREATE TABLE aula(
    ID INT PRIMARY KEY,
    nome VARCHAR(200)
);

Exemplo3: INSERT INTO aula (ID, nome) VALUES (1, 'aula 1');

Exemplo3: INSERT INTO aula(ID, nome)
        VALUES(2, 'aula 2'),
            (3, 'aula 3'),
            (4, 'aula 4');

Exemplo4: SELECT * INTO tabelaNova FROM aula;

-- UPDATE

Exemplo1: UPDATE nomeTabela SET coluna1 = valor1, coluna2 = valor2, ... WHERE condicao;

Exemplo2: UPDATE aula SET nome = 'aula 0' WHERE ID = 1;

-- DELETE

Exemplo1: DELETE FROM nomeDaTabela WHERE condicao;

Exemplo2: DELETE FROM aula WHERE nome = 'aula 0';

-- ALTER TABLE -- Alteração de colunas e restrições

Exemplo1: ALTER TABLE nomeDaTabela ADD COLUNA nomeDaColuna tipoDeDados;

* Exemplos do que pode se pode ser feito:
1. Adicionar, remover ou alterar uma coluna.
2. Adicionar, remover ou alterar uma restrição.
3. Renomear uma tabela.

Exemplo2: CREATE TABLE yt (
    ID INT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL UNIQUE,
    categoria VARCHAR(200) NOT NULL,
    dataCriacao DATETIME NOT NULL
);

Exemplo2: ALTER TABLE yt ADD ativo BIT;

Exemplo2: ALTER TABLE yt ALTER COLUMN categoria VARCHAR(300) NOT NULL;

Exemplo2: EXEC sp_RENAME 'nomeTabela.nomeColunaAtual', 'nomeColunaNova', 'COLUMN';

Exemplo2: EXEC sp_RENAME 'yt.nome', 'nomeCanal', 'COLUMN';

Exemplo2: EXEC sp_RENAME 'nomeTabelaAtual', 'nomeTabelaNova';

Exemplo2: EXEC sp_RENAME 'yt', 'Youtube';

-- DROP TABLE

Exemplo1: DROP TABLE nomeDaTabela; -- Você só consegue deletar tabelas que não são referênciadas por outras.

Exemplo2: DROP TABLE IF EXISTS nomeDaTabela; -- Se a tabela existir, ela é deletada.

Exemplo3: DROP TABLE Youtube;

Exemplo4: TRUNCATE TABLE person.Password; -- Limpa todos os dados da tabela.

-- CHECK CONSTRAINT -- Verificação de restrições

Exemplo1: CREATE TABLE carteiraMotorista(
    ID INT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    idade INT CHECK (idade >= 18)
);

-- NOT NULL CONSTRAINT -- Restrição NOT NULL

-- Não permite que falte informações ao tentar inserir dados em campos "NOT NULL". não pode haver campo vazios.


-- UNIQUE CONSTRAINT -- Restrição UNIQUE

CREATE TABLE carteiraMotorista(
    ID INT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    idade INT CHECK (idade >= 18),
    codigoCNH INT NOT NULL UNIQUE
);

-- Não permite dados iguais.


-- VIEWS -- Criação de vistas

Exemplo1: CREATE VIEW [pessoas simplificado] AS SELECT firstName, middleName, lastName FROM person.Person WHERE title = 'Ms.';

-- e para visualizar esta view criada, basta acessar.

SELECT * FROM [pessoas simplificado];