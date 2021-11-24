
git --version -> Checa a versão do GIT;

git config --global user.name "Nome do usuário" -> Configura o nome do usuário;

git config --global user.email "Email do usuário" -> Configura o email do usuário;

git config --global core.editor "vscode" -> Configura o editor padrão;

git config user.name -> Checa o nome do usuário;

git config user.email -> Checa o email do usuário;

git config --list -> Lista todas as configurações do usuário;

git init -> Inicializa um repositório

git clone <https:name-of-the-reposit> -> Clona um repositório;

git status -> Checa o status do repositório;

git add . -> Adiciona todos os arquivos do repositório;

git add <file-name> -> Adiciona um arquivo específico;

git commit -m "Mensagem" -> Adiciona um commit;

git commit -am "Mensagem" -> Adiciona um commit;

git log -> Lista os commits;

git reset --hard HEAD -> Reseta o repositório;

git reset --soft HEAD -> Reseta o repositório;

git checkout <branch-name> -> Troca de branch;

git checkout -b <branch-name> -> Cria e checa o branch;

git branch <branch-name> -> Cria uma nova branch;

git branch -D <branch-name> -> Deleta um branch local;

git branch -> Lista todas as branches;

git diff -> Checa as diferenças, com detalhes sobre o que se foi feito;

git diff --name-only -> Checa as diferenças, sem detalhes sobre o que se foi feito;

git diff <file-name> -> Checa as diferenças, com detalhes sobre o que se foi feito, com base neste arquivo;

git checkout HEAD -- <file-name> -> Volta uma versão específica do arquivo;

git remote add origin <https://github.com/respositório/arquivo.git> -> Adiciona um repositório remoto;

git push -u origin master -> Envia os arquivos para o repositório remoto;

git remote -v -> Lista os repositórios remotos;

git remote rm origin -> Deleta um repositório remoto;

git revert --no-edit <commit-id> -> Reverte um commit;

git push origin :<branch-name> -> Deleta um branch remoto;

git push origin --delete <branch-name> -> Deleta um branch remoto;

git pull origin <branch-name> -> Atualiza um branch remoto;