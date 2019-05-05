# MagentoLucasModules
Magento-Lucas-Modules

//IDEs utilizadas
//VSCode - inicialmente
//PHPStorm

*Configuração utilizada
  https://bitnami.com/stack/magento
  
  Maquina: vmware / Debian
  Php 7.1 + Zend + Xdebug
    // PHP 7.1.27 (cli) (built: Apr  3 2019 17:37:46) ( NTS )
    // Copyright (c) 1997-2018 The PHP Group
    // Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies
    // with Zend OPcache v7.1.27, Copyright (c) 1999-2018, by Zend Technologies
    // with Xdebug v2.7.1, Copyright (c) 2002-2019, by Derick Rethans
    
  xdebug configurado posteriormente.

  Magento 2.2


*Como Configurar

1. Para realizar a instalação basta baixar a maquina virtual:
 https://bitnami.com/stack/magento
 
 usuario: bitnami / senha: bitnami
 
2. Seguir o tutorial de inicialização da VM:
 https://docs.bitnami.com/virtual-machine/faq/get-started/find-credentials/
 
 acessar a instância do magento:(Caso queira Certificar-se que está rodando)
 *Aguardar alguns instantes após inicializar a Vm até aparecer a tela informando a senha e o usuário para entrar na instância do magento.
   xx.xx.xx.xx/admin
   
3. Clonar o repositório do modulo:
 Commandos:
 3.1 Clonar.
 cd /opt/bitnami/apps/magento/htdocs/app/code
 git clone https://github.com/lucasclazer/MagentoLucasModules.git
 
 3.2 Efetuar upgrade nos modulos.
 
 cd /opt/bitnami/apps/magento
 ./magento-cli setup:upgrade
 
4. Acessar a pagina com o ip da Vm.
   xx.xx.xx.xx/admin

 4.1 Ativar o Modulo na instância do magento.
 
  Acessar a pagina da instância do magento:
  IP Vm: xx.xx.xx.xx/admin
  
  *Pagina de Gerênciamento Geral:
  Menu lateral > System > Web Setup Wizard

  *Pagina Web Setup Wizard:
  Menu lateral > Module Manager 
  *Procurar pelo Modulo: MagentoLucasModules.
   Clicar em > Select > Enable
 
5. Etapa Final: Para acessar a menssagem de retorno.
  Acessar o site com o IP da vm:
    http://XX.XX.XX.XX/test/Page/View
    
    


*Caso queira utilizar o modulo em outra configuração de instância do magento basta clonar o repositório dentro da pasta a onde os demais 
modulos ficam localizados
 
 
 
Sites de referências:

https://xdebug.org/
https://stackoverflow.com/
https://bitnami.com/stack/magento
https://www.tutorialsplane.com/magento-2-get-ip-address/
https://devdocs.magento.com/guides/
https://mage2gen.com/
https://www.jetbrains.com/help/phpstorm/2019.1/configuring-remote-interpreters.html
https://belvg.com/blog/controllers-routers-and-responses-in-magento-2.html
