# Projeto completo — Web Design

Este pacote foi preparado com base nas duas atividades práticas do roteiro.

## 1. Atividade HTML + CSS

Pasta: `atividade1_html_css`

Arquivos:
- `index.html`
- `styles.css`
- `images/banner.svg` (gráfico vetorial)
- `images/icone-estrutura.png`, `images/icone-estilo.png`, `images/icone-graficos.png` (PNG com transparência)
- `captura-de-tela.png` (captura da página finalizada)

### Como executar
1. Abra a pasta no VS Code.
2. Abra `index.html` diretamente no navegador ou use a extensão Live Server.
3. Se alterar a página, tire uma nova captura de tela.

## 2. Atividade WordPress

Pasta: `atividade2_wordpress/wp-content/themes/webdesign-pratica`

Essa pasta é um tema WordPress pronto para instalação. Arquivos do tema:
`style.css`, `functions.php`, `header.php`, `footer.php`, `front-page.php`,
`index.php`, `page.php`, `single.php` e `screenshot.png` (miniatura exibida em Aparência > Temas).

Em `Aparência > Personalizar` o tema permite enviar um **logo** e trocar a **cor/imagem de fundo**.
Para editar o texto da página inicial pelo painel, crie uma página e defina-a em
`Configurações > Leitura > Sua página inicial exibe: Uma página estática`.

### Passo a passo
1. Instale e abra o XAMPP.
2. Inicie Apache e MySQL.
3. Crie `C:/xampp/htdocs/wordpress`.
4. Baixe e extraia o WordPress nessa pasta.
5. Acesse `http://localhost/phpmyadmin`.
6. Crie o banco `wordpress_db`.
7. Acesse `http://localhost/wordpress`.
8. Informe:
   - Banco: `wordpress_db`
   - Usuário: `root`
   - Senha: normalmente vazia no XAMPP local
   - Servidor: `localhost`
9. Finalize a instalação do WordPress.
10. Copie a pasta `webdesign-pratica` deste pacote para:
    `C:/xampp/htdocs/wordpress/wp-content/themes/`
11. No painel do WordPress, acesse:
    `Aparência > Temas`
12. Ative o tema **WebDesign Prática**.
13. Configure o título e a descrição do site em:
    `Configurações > Geral`.
14. Crie pelo menos uma página e, se desejar, posts.
15. Em `Aparência > Menus` (ou Editor/Navegação, dependendo da versão),
    crie o menu principal e associe-o ao local disponível.
16. Tire uma captura de tela da página inicial e do painel com o tema ativo.

## Como gerar o arquivo SQL exigido

Depois que o WordPress estiver instalado e configurado:

1. Acesse `http://localhost/phpmyadmin`.
2. Clique no banco `wordpress_db`.
3. Clique em `Exportar`.
4. Selecione o método `Rápido`.
5. Formato: `SQL`.
6. Clique em `Exportar`.
7. Salve o arquivo como `wordpress_db.sql`.

Esse procedimento gera o script com os dados reais do seu CMS, que é o formato apropriado para entrega.

## Observação

A pasta completa do WordPress e o `wordpress_db.sql` devem ser obtidos após a instalação local, porque eles dependem dos dados efetivamente criados no seu ambiente (URL local, usuário administrador, opções, IDs e conteúdo do banco).
