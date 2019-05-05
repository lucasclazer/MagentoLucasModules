# MagentoLucasModules
**Magento-Lucas-Modules**

**IDEs utilizadas**
VSCode - inicialmente
PHPStorm

------------

## **Configuração utilizada**
- Maquina: Vmware / Debian
- Php 7.1 + Zend + Xdebug
- PHP 7.1.27 (cli) (built: Apr  3 2019 17:37:46) ( NTS )
- Copyright (c) 1997-2018 The PHP Group
- Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies
- with Zend OPcache v7.1.27, Copyright (c) 1999-2018, by Zend Technologies
- with Xdebug v2.7.1, Copyright (c) 2002-2019, by Derick Rethans
- Xdebug configurado posteriormente.
- [Bitnami Magento 2.3.1-1](https://bitnami.com/stack/magento/virtual-machine "Bitnami Magento 2.3.1-1")-

------------


## Como Configurar

**1. Para realizar a instalação basta baixar a maquina virtual:**
		https://bitnami.com/stack/magento
		Utilizar a senha: usuario: bitnami / senha: bitnami

**2.  Seguir o tutorial de inicialização da VM:**

- [Getting Started Bitnami/ Magento VM](https://docs.bitnami.com/virtual-machine/faq/get-started/find-credentials/ "Getting Started Bitnami/ Magento VM")

	-  Acessar a instância do magento: (Caso Queira Certificar-Se Que Está Rodando) Aguardar alguns instantes após inicializar a Vm.  Logo aparecerá uma tela informando a senha e o usuário para entrar na instância do magento via web.

	Vm ip:  http://xx.xx.xx.xx/admin

**3. Clonar o repositório do modulo:**
- Commandos:
	```sh
	cd /opt/bitnami/apps/magento/htdocs/app/code
	git clone https://github.com/lucasclazer/MagentoLucasModules.git
	```
- Efetuar upgrade nos modulos.
	```sh
	 cd /opt/bitnami/apps/magento
	 ./magento-cli setup:upgrade
	```

**4. Acessar via navegador**

**- Ativar o Modulo na instância do magento.**
Acessar a pagina da instância do magento:
IP Vm: http://xx.xx.xx.xx/admin

**Pagina de Gerênciamento Geral:**
		Menu lateral > System > Web Setup Wizard

**Pagina Web Setup Wizard:**
		Menu lateral > Module Manager 
		Procurar pelo Modulo: **MagentoLucasModules.**
		Clicar em > Select > Enable

**5. Etapa Final: Para acessar a menssagem de retorno.**

  Acessar via navegador com o IP da vm:
  http:/xx.xx.xx.xx/test/Page/View


------------
### Observações

- Caso queira utilizar o modulo em outra configuração de instância do magento basta clonar o repositório dentro da pasta dos demais modulos.

- Para utilizar Xdebug na porta 9000, e o [PhpMyAdmin](https://docs.bitnami.com/virtual-machine/apps/magento/get-started/access-phpmyadmin/ "PhpMyAdmin") na porta 8888 é necessário utilizar tunnel com [Putty](https://putty.org/  "Putty").

------------

### **Sites de referências:**

- https://stackoverflow.com/
- https://bitnami.com/stack/magento
- https://www.tutorialsplane.com/magento-2-get-ip-address/
- https://devdocs.magento.com/guides/
- https://mage2gen.com/
- https://www.jetbrains.com/help/phpstorm/2019.1/configuring-remote-interpreters.html
- https://belvg.com/blog/controllers-routers-and-responses-in-magento-2.html
- https://putty.org/
- https://xdebug.org/
- https://www.youtube.com/watch?v=sOyu3lqbbhk&t=131s
- https://www.youtube.com/watch?v=OETUNxcdP48&t=617s

